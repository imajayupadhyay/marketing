<script setup>
import { ref, watch, computed, onMounted, onUnmounted, nextTick } from 'vue';
import { router } from '@inertiajs/vue3';
import { searchData } from '@/data/searchData';
import { fuzzySearch, highlightMatch, getSearchSuggestions } from '@/utils/search';

const props = defineProps({
    isOpen: {
        type: Boolean,
        default: false
    }
});

const emit = defineEmits(['close']);

const searchQuery = ref('');
const searchResults = ref([]);
const selectedIndex = ref(0);
const isSearching = ref(false);
const searchInput = ref(null);
const recentSearches = ref([]);

// Load recent searches from localStorage
onMounted(() => {
    const stored = localStorage.getItem('recentSearches');
    if (stored) {
        recentSearches.value = JSON.parse(stored);
    }
});

// Computed properties
const hasResults = computed(() => searchResults.value.length > 0);
const showNoResults = computed(() => searchQuery.value.length > 0 && !hasResults.value && !isSearching.value);
const showRecentSearches = computed(() => searchQuery.value.length === 0 && recentSearches.value.length > 0);

// Search suggestions
const suggestions = computed(() => {
    if (searchQuery.value.length < 2) return [];
    return getSearchSuggestions(searchQuery.value, searchData, 5);
});

// Popular searches
const popularSearches = ['Brand Identity', 'UI/UX Design', 'Web Development', 'Social Media', 'Lead Generation', 'Website Design'];

const closeModal = () => {
    emit('close');
    searchQuery.value = '';
    searchResults.value = [];
    selectedIndex.value = 0;
};

// Perform search
const performSearch = () => {
    if (searchQuery.value.trim().length === 0) {
        searchResults.value = [];
        return;
    }

    isSearching.value = true;

    // Simulate slight delay for better UX
    setTimeout(() => {
        searchResults.value = fuzzySearch(searchQuery.value, searchData, 0.5);
        selectedIndex.value = 0;
        isSearching.value = false;
    }, 100);
};

// Watch search query
watch(searchQuery, (newValue) => {
    if (newValue.length === 0) {
        searchResults.value = [];
    } else {
        performSearch();
    }
});

// Handle result selection
const selectResult = (result) => {
    // Save to recent searches
    saveRecentSearch(result);

    // Navigate to result
    router.visit(result.url);

    // Close modal
    closeModal();
};

// Save recent search
const saveRecentSearch = (result) => {
    // Remove if already exists
    recentSearches.value = recentSearches.value.filter(item => item.url !== result.url);

    // Add to beginning
    recentSearches.value.unshift({
        title: result.title,
        url: result.url,
        category: result.category
    });

    // Keep only last 5
    recentSearches.value = recentSearches.value.slice(0, 5);

    // Save to localStorage
    localStorage.setItem('recentSearches', JSON.stringify(recentSearches.value));
};

// Clear recent searches
const clearRecentSearches = () => {
    recentSearches.value = [];
    localStorage.removeItem('recentSearches');
};

// Apply suggestion
const applySuggestion = (suggestion) => {
    searchQuery.value = suggestion;
};

// Keyboard navigation
const handleKeydown = (e) => {
    if (!hasResults.value) return;

    if (e.key === 'ArrowDown') {
        e.preventDefault();
        selectedIndex.value = Math.min(selectedIndex.value + 1, searchResults.value.length - 1);
    } else if (e.key === 'ArrowUp') {
        e.preventDefault();
        selectedIndex.value = Math.max(selectedIndex.value - 1, 0);
    } else if (e.key === 'Enter') {
        e.preventDefault();
        if (searchResults.value[selectedIndex.value]) {
            selectResult(searchResults.value[selectedIndex.value]);
        }
    }
};

// Handle escape key
const handleEscape = (e) => {
    if (e.key === 'Escape') {
        closeModal();
    }
};

// Focus input when modal opens
watch(() => props.isOpen, async (newValue) => {
    if (newValue) {
        document.addEventListener('keydown', handleEscape);
        await nextTick();
        searchInput.value?.focus();
    } else {
        document.removeEventListener('keydown', handleEscape);
    }
});

// Get category color
const getCategoryColor = (category) => {
    const colors = {
        'Page': 'bg-blue-100 text-blue-700 dark:bg-blue-900 dark:text-blue-300',
        'Service': 'bg-purple-100 text-purple-700 dark:bg-purple-900 dark:text-purple-300',
        'Quick Link': 'bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-300'
    };
    return colors[category] || 'bg-gray-100 text-gray-700 dark:bg-gray-700 dark:text-gray-300';
};

// Get category icon
const getCategoryIcon = (category) => {
    const icons = {
        'Page': 'M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z',
        'Service': 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
        'Quick Link': 'M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1'
    };
    return icons[category] || icons['Page'];
};
</script>

<template>
    <!-- Modal Backdrop -->
    <transition
        enter-active-class="transition ease-out duration-300"
        enter-from-class="opacity-0"
        enter-to-class="opacity-100"
        leave-active-class="transition ease-in duration-200"
        leave-from-class="opacity-100"
        leave-to-class="opacity-0"
    >
        <div
            v-if="isOpen"
            class="fixed inset-0 bg-black bg-opacity-60 backdrop-blur-sm z-50 flex items-start justify-center pt-20 px-4"
            @click="closeModal"
        >
            <!-- Modal Content -->
            <transition
                enter-active-class="transition ease-out duration-300 transform"
                enter-from-class="opacity-0 scale-95 -translate-y-4"
                enter-to-class="opacity-100 scale-100 translate-y-0"
                leave-active-class="transition ease-in duration-200 transform"
                leave-from-class="opacity-100 scale-100 translate-y-0"
                leave-to-class="opacity-0 scale-95 -translate-y-4"
            >
                <div
                    v-if="isOpen"
                    class="bg-white dark:bg-gray-800 rounded-2xl shadow-2xl w-full max-w-3xl max-h-[80vh] flex flex-col transition-colors duration-300 border border-gray-200 dark:border-gray-700"
                    @click.stop
                >
                    <!-- Modal Header -->
                    <div class="flex items-center justify-between p-6 border-b border-gray-200 dark:border-gray-700">
                        <div class="flex items-center gap-3">
                            <div class="p-2 bg-blue-100 dark:bg-blue-900 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Search</h2>
                        </div>
                        <button
                            @click="closeModal"
                            class="p-2 text-gray-500 dark:text-gray-400 hover:text-blue-900 dark:hover:text-blue-400 hover:bg-blue-50 dark:hover:bg-gray-700 rounded-lg transition-all duration-200"
                            aria-label="Close search"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- Search Input -->
                    <div class="p-6 border-b border-gray-200 dark:border-gray-700">
                        <div class="relative">
                            <div class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <input
                                ref="searchInput"
                                v-model="searchQuery"
                                type="text"
                                placeholder="Search pages, services, and more..."
                                class="w-full pl-12 pr-4 py-4 border-2 border-gray-200 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 focus:border-transparent text-lg transition-all duration-300 placeholder:text-gray-400"
                                @keydown="handleKeydown"
                            />
                            <div v-if="isSearching" class="absolute right-4 top-1/2 transform -translate-y-1/2">
                                <div class="animate-spin rounded-full h-5 w-5 border-2 border-blue-500 border-t-transparent"></div>
                            </div>
                        </div>

                        <!-- Search Suggestions -->
                        <div v-if="suggestions.length > 0" class="mt-3">
                            <div class="flex flex-wrap gap-2">
                                <button
                                    v-for="suggestion in suggestions"
                                    :key="suggestion"
                                    @click="applySuggestion(suggestion)"
                                    class="text-xs px-3 py-1.5 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full hover:bg-blue-100 dark:hover:bg-blue-900 hover:text-blue-700 dark:hover:text-blue-400 transition-colors duration-200"
                                >
                                    {{ suggestion }}
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Results Container -->
                    <div class="flex-1 overflow-y-auto p-6">
                        <!-- Search Results -->
                        <div v-if="hasResults" class="space-y-2">
                            <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                                Found {{ searchResults.length }} result{{ searchResults.length !== 1 ? 's' : '' }}
                            </p>
                            <div
                                v-for="(result, index) in searchResults"
                                :key="result.url"
                                @click="selectResult(result)"
                                :class="[
                                    'group p-4 rounded-xl border-2 cursor-pointer transition-all duration-200',
                                    selectedIndex === index
                                        ? 'border-blue-500 bg-blue-50 dark:bg-blue-900/20 dark:border-blue-400'
                                        : 'border-gray-200 dark:border-gray-700 hover:border-blue-300 dark:hover:border-blue-600 hover:bg-gray-50 dark:hover:bg-gray-700'
                                ]"
                            >
                                <div class="flex items-start gap-4">
                                    <!-- Icon -->
                                    <div :class="[
                                        'flex-shrink-0 p-2 rounded-lg',
                                        selectedIndex === index ? 'bg-blue-100 dark:bg-blue-800' : 'bg-gray-100 dark:bg-gray-700'
                                    ]">
                                        <svg class="w-5 h-5 text-gray-600 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="getCategoryIcon(result.category)"></path>
                                        </svg>
                                    </div>

                                    <!-- Content -->
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-center gap-2 mb-1">
                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white truncate">
                                                {{ result.title }}
                                            </h3>
                                            <span :class="['text-xs px-2 py-1 rounded-full font-medium', getCategoryColor(result.category)]">
                                                {{ result.category }}
                                            </span>
                                        </div>
                                        <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">
                                            {{ result.description }}
                                        </p>
                                        <p class="text-xs text-gray-500 dark:text-gray-500 mt-2">
                                            {{ result.url }}
                                        </p>
                                    </div>

                                    <!-- Arrow -->
                                    <div class="flex-shrink-0 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                        <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- No Results -->
                        <div v-else-if="showNoResults" class="text-center py-12">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-gray-100 dark:bg-gray-700 rounded-full mb-4">
                                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">No results found</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">
                                Try searching for something else or browse our popular searches below
                            </p>
                        </div>

                        <!-- Recent Searches -->
                        <div v-else-if="showRecentSearches" class="space-y-4">
                            <div class="flex items-center justify-between mb-3">
                                <p class="text-sm font-semibold text-gray-700 dark:text-gray-300">Recent Searches</p>
                                <button
                                    @click="clearRecentSearches"
                                    class="text-xs text-gray-500 hover:text-red-600 dark:text-gray-400 dark:hover:text-red-400 transition-colors"
                                >
                                    Clear all
                                </button>
                            </div>
                            <div
                                v-for="recent in recentSearches"
                                :key="recent.url"
                                @click="selectResult(recent)"
                                class="group flex items-center gap-3 p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 cursor-pointer transition-colors duration-200"
                            >
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="flex-1 text-sm text-gray-700 dark:text-gray-300">{{ recent.title }}</span>
                                <svg class="w-4 h-4 text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Popular Searches (Default State) -->
                        <div v-else class="space-y-4">
                            <p class="text-sm font-semibold text-gray-700 dark:text-gray-300 mb-3">Popular Searches</p>
                            <div class="grid grid-cols-2 gap-3">
                                <button
                                    v-for="search in popularSearches"
                                    :key="search"
                                    @click="searchQuery = search"
                                    class="flex items-center gap-2 p-3 bg-gradient-to-br from-blue-50 to-purple-50 dark:from-blue-900/20 dark:to-purple-900/20 text-gray-700 dark:text-gray-300 rounded-xl hover:from-blue-100 hover:to-purple-100 dark:hover:from-blue-900/30 dark:hover:to-purple-900/30 transition-all duration-200 text-sm font-medium group"
                                >
                                    <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                    <span class="truncate">{{ search }}</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Footer with Keyboard Shortcuts -->
                    <div class="p-4 border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900">
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400">
                            <div class="flex items-center gap-4">
                                <span class="flex items-center gap-1">
                                    <kbd class="px-2 py-1 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded">↑</kbd>
                                    <kbd class="px-2 py-1 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded">↓</kbd>
                                    to navigate
                                </span>
                                <span class="flex items-center gap-1">
                                    <kbd class="px-2 py-1 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded">↵</kbd>
                                    to select
                                </span>
                                <span class="flex items-center gap-1">
                                    <kbd class="px-2 py-1 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded">Esc</kbd>
                                    to close
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </transition>
        </div>
    </transition>
</template>
