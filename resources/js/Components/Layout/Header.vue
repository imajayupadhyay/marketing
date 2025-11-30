<script setup>
import { ref, computed, onMounted } from 'vue';
import { usePage } from '@inertiajs/vue3';
import SearchModal from '@/Components/UI/SearchModal.vue';

const page = usePage();
const isDarkMode = ref(false);
const isSearchModalOpen = ref(false);

const navItems = [
    { name: 'Home', href: '/' },
    { name: 'Services', href: '/services' },
    { name: 'About', href: '/about' },
    { name: 'Contact', href: '/contact' }
];

const currentPath = computed(() => page.url);

const isActiveLink = (href) => {
    if (href === '/') {
        return currentPath.value === '/';
    }
    return currentPath.value.startsWith(href);
};

// Initialize dark mode from localStorage (default: light mode)
onMounted(() => {
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
        isDarkMode.value = true;
        document.documentElement.classList.add('dark');
    } else {
        // Default to light mode
        isDarkMode.value = false;
        document.documentElement.classList.remove('dark');
        localStorage.setItem('theme', 'light');
    }
});

const toggleDarkMode = () => {
    isDarkMode.value = !isDarkMode.value;

    if (isDarkMode.value) {
        document.documentElement.classList.add('dark');
        localStorage.setItem('theme', 'dark');
    } else {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('theme', 'light');
    }
};

const openSearchModal = () => {
    isSearchModalOpen.value = true;
};

const closeSearchModal = () => {
    isSearchModalOpen.value = false;
};
</script>

<template>
    <header class="bg-white dark:bg-gray-900 shadow-md sticky top-0 z-50 transition-colors duration-300">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold text-blue-900 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 transition-colors duration-200">
                        YourLogo
                    </a>
                </div>

                <!-- Navigation Items -->
                <div class="hidden md:flex items-center space-x-8">
                    <a
                        v-for="item in navItems"
                        :key="item.name"
                        :href="item.href"
                        :class="[
                            'relative font-medium transition-all duration-300 py-2',
                            isActiveLink(item.href)
                                ? 'text-blue-900 dark:text-blue-400 font-semibold'
                                : 'text-gray-700 dark:text-gray-300 hover:text-blue-900 dark:hover:text-blue-400',
                            'group'
                        ]"
                    >
                        {{ item.name }}
                        <!-- Animated underline -->
                        <span
                            :class="[
                                'absolute bottom-0 left-0 w-full h-0.5 bg-blue-900 dark:bg-blue-400 transform origin-left transition-transform duration-300',
                                isActiveLink(item.href)
                                    ? 'scale-x-100'
                                    : 'scale-x-0 group-hover:scale-x-100'
                            ]"
                        ></span>
                    </a>
                </div>

                <!-- Right Side Icons & CTA -->
                <div class="flex items-center space-x-4">
                    <!-- Search Icon -->
                    <button
                        @click="openSearchModal"
                        class="p-2 text-gray-700 dark:text-gray-300 hover:text-blue-900 dark:hover:text-blue-400 hover:bg-blue-50 dark:hover:bg-gray-800 rounded-lg transition-all duration-200 transform hover:scale-110"
                        aria-label="Search"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>

                    <!-- Dark/Light Mode Toggle -->
                    <button
                        @click="toggleDarkMode"
                        class="p-2 text-gray-700 dark:text-gray-300 hover:text-blue-900 dark:hover:text-blue-400 hover:bg-blue-50 dark:hover:bg-gray-800 rounded-lg transition-all duration-200 transform hover:scale-110 hover:rotate-12"
                        aria-label="Toggle dark mode"
                    >
                        <!-- Sun Icon (When in Dark Mode - shows sun to switch to light) -->
                        <svg v-if="isDarkMode" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <!-- Moon Icon (When in Light Mode - shows moon to switch to dark) -->
                        <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                    </button>

                    <!-- CTA Button -->
                    <button class="bg-blue-900 dark:bg-blue-600 text-white px-6 py-2.5 rounded-lg font-semibold hover:bg-blue-800 dark:hover:bg-blue-500 active:bg-blue-950 dark:active:bg-blue-700 transition-all duration-200 shadow-md hover:shadow-xl transform hover:-translate-y-0.5">
                        Let's Talk
                    </button>

                    <!-- Mobile Menu Button -->
                    <button class="md:hidden p-2 text-gray-700 dark:text-gray-300 hover:text-blue-900 dark:hover:text-blue-400 hover:bg-blue-50 dark:hover:bg-gray-800 rounded-lg transition-all duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Search Modal -->
        <SearchModal :is-open="isSearchModalOpen" @close="closeSearchModal" />
    </header>
</template>
