<script setup>
import { ref, watch } from 'vue';

const props = defineProps({
    isOpen: {
        type: Boolean,
        default: false
    }
});

const emit = defineEmits(['close']);

const searchQuery = ref('');

const closeModal = () => {
    emit('close');
    searchQuery.value = '';
};

// Close modal on ESC key
watch(() => props.isOpen, (newValue) => {
    if (newValue) {
        document.addEventListener('keydown', handleEscape);
    } else {
        document.removeEventListener('keydown', handleEscape);
    }
});

const handleEscape = (e) => {
    if (e.key === 'Escape') {
        closeModal();
    }
};

const handleSearch = () => {
    console.log('Searching for:', searchQuery.value);
    // Add your search logic here
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
            class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-start justify-center pt-20 px-4"
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
                    class="bg-white dark:bg-gray-800 rounded-2xl shadow-2xl w-full max-w-2xl p-6 transition-colors duration-300"
                    @click.stop
                >
                    <!-- Modal Header -->
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-bold text-blue-900 dark:text-blue-400">Search</h2>
                        <button
                            @click="closeModal"
                            class="p-2 text-gray-500 dark:text-gray-400 hover:text-blue-900 dark:hover:text-blue-400 hover:bg-blue-50 dark:hover:bg-gray-700 rounded-lg transition-all duration-200"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- Search Input -->
                    <div class="relative mb-6">
                        <input
                            v-model="searchQuery"
                            type="text"
                            placeholder="What are you looking for?"
                            class="w-full px-6 py-4 border-2 border-gray-200 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-900 dark:focus:ring-blue-500 focus:border-transparent text-lg transition-colors duration-300"
                            autofocus
                            @keyup.enter="handleSearch"
                        />
                        <button
                            @click="handleSearch"
                            class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-blue-900 dark:bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-800 dark:hover:bg-blue-500 transition-colors duration-200"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div>

                    <!-- Quick Links / Suggestions -->
                    <div>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-3 font-medium">Popular Searches</p>
                        <div class="flex flex-wrap gap-2">
                            <button
                                v-for="suggestion in ['Services', 'About Us', 'Contact', 'Portfolio']"
                                :key="suggestion"
                                class="px-4 py-2 bg-blue-50 dark:bg-gray-700 text-blue-900 dark:text-blue-400 rounded-lg hover:bg-blue-100 dark:hover:bg-gray-600 transition-colors duration-200 text-sm font-medium"
                                @click="searchQuery = suggestion"
                            >
                                {{ suggestion }}
                            </button>
                        </div>
                    </div>
                </div>
            </transition>
        </div>
    </transition>
</template>
