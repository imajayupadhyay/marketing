<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue';
import { usePage } from '@inertiajs/vue3';
import SearchModal from '@/Components/UI/SearchModal.vue';
import WhatsAppFloat from '@/Components/UI/WhatsAppFloat.vue';

const page = usePage();
const isDarkMode = ref(false);
const isSearchModalOpen = ref(false);
const isMobileMenuOpen = ref(false);
const isServicesExpanded = ref(false);
const isMegaMenuOpen = ref(false);
let megaMenuTimeout = null;

// Scroll progress
const scrollProgress = ref(0);

const navItems = [
    { name: 'Home', href: '/' },
    { name: 'Services', href: '/services', hasMegaMenu: true },
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

// Calculate scroll progress
const updateScrollProgress = () => {
    const windowHeight = window.innerHeight;
    const documentHeight = document.documentElement.scrollHeight;
    const scrollTop = window.scrollY;

    // Calculate the percentage scrolled
    const scrollableHeight = documentHeight - windowHeight;
    const progress = (scrollTop / scrollableHeight) * 100;

    scrollProgress.value = Math.min(Math.max(progress, 0), 100);
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

    // Add scroll event listener for progress bar
    window.addEventListener('scroll', updateScrollProgress);
    updateScrollProgress(); // Initialize on mount
});

// Cleanup scroll listener
onUnmounted(() => {
    window.removeEventListener('scroll', updateScrollProgress);
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

const toggleMobileMenu = () => {
    isMobileMenuOpen.value = !isMobileMenuOpen.value;
    if (!isMobileMenuOpen.value) {
        isServicesExpanded.value = false;
    }
};

const toggleServices = () => {
    isServicesExpanded.value = !isServicesExpanded.value;
};

const openMegaMenu = () => {
    if (megaMenuTimeout) {
        clearTimeout(megaMenuTimeout);
    }
    isMegaMenuOpen.value = true;
};

const closeMegaMenu = () => {
    megaMenuTimeout = setTimeout(() => {
        isMegaMenuOpen.value = false;
    }, 150);
};

const cancelCloseMegaMenu = () => {
    if (megaMenuTimeout) {
        clearTimeout(megaMenuTimeout);
    }
};

const services = [
    {
        title: 'Brand Identity & Strategy',
        icon: 'brand',
        href: '/services/brand-identity'
    },
    {
        title: 'UI/UX Designs',
        icon: 'design',
        href: '/services/ui-ux-design'
    },
    {
        title: 'Social Media Management',
        icon: 'social',
        href: '/services/social-media-management'
    },
    {
        title: 'Lead Generation',
        icon: 'leads',
        href: '/services/lead-generation'
    },
    {
        title: 'Website Design',
        icon: 'website',
        href: '/services/website-design'
    },
    {
        title: 'Web Development',
        icon: 'development',
        href: '/services/web-development'
    }
];

const getServiceColor = (index) => {
    const colors = [
        'from-blue-500 to-cyan-500',
        'from-purple-500 to-pink-500',
        'from-pink-500 to-rose-500',
        'from-green-500 to-emerald-500',
        'from-orange-500 to-red-500',
        'from-indigo-500 to-blue-500'
    ];
    return colors[index] || colors[0];
};

const getServiceDescription = (title) => {
    const descriptions = {
        'Brand Identity & Strategy': 'Create powerful brand identities that resonate with your audience.',
        'UI/UX Designs': 'Design beautiful, intuitive interfaces that users love.',
        'Social Media Management': 'Build and engage your community with strategic management.',
        'Lead Generation': 'Drive qualified leads with data-driven strategies.',
        'Website Design': 'Build stunning websites that convert visitors into customers.',
        'Web Development': 'Transform designs into powerful, scalable applications.'
    };
    return descriptions[title] || '';
};
</script>

<template>
    <div class="sticky top-0 z-50">
        <!-- Scroll Progress Bar (fixed to viewport top) -->
        <div class="absolute top-0 left-0 right-0 h-1 bg-gray-200/50 dark:bg-gray-800/50 overflow-hidden z-50">
            <div
                class="h-full bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 shadow-lg shadow-purple-500/50 transition-all duration-150 ease-out"
                :style="{ width: scrollProgress + '%' }"
            >
                <!-- Glow effect -->
                <div class="absolute inset-0 bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 opacity-50 blur-sm"></div>
            </div>
        </div>

        <header class="bg-white dark:bg-gray-900 shadow-md transition-colors duration-300">
            <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="flex items-center hover:opacity-80 transition-opacity duration-200">
                        <img
                            :src="isDarkMode ? '/dxd white logo.png' : '/dxd logo.png'"
                            alt="DXD Logo"
                            class="h-12 w-auto transition-opacity duration-300"
                        >
                    </a>
                </div>

                <!-- Navigation Items -->
                <div class="hidden md:flex items-center space-x-8">
                    <template v-for="item in navItems" :key="item.name">
                        <!-- Services with Mega Menu -->
                        <div
                            v-if="item.hasMegaMenu"
                            class="relative"
                            @mouseenter="openMegaMenu"
                            @mouseleave="closeMegaMenu"
                        >
                            <a
                                :href="item.href"
                                :class="[
                                    'relative font-medium transition-all duration-300 py-2 flex items-center gap-1',
                                    isActiveLink(item.href) || isMegaMenuOpen
                                        ? 'text-blue-900 dark:text-blue-400 font-semibold'
                                        : 'text-gray-700 dark:text-gray-300 hover:text-blue-900 dark:hover:text-blue-400'
                                ]"
                            >
                                {{ item.name }}
                                <!-- Dropdown Arrow for Services -->
                                <svg
                                    :class="[
                                        'w-4 h-4 transition-transform duration-300',
                                        isMegaMenuOpen ? 'rotate-180' : ''
                                    ]"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                                <!-- Animated underline -->
                                <span
                                    :class="[
                                        'absolute bottom-0 left-0 w-full h-0.5 bg-blue-900 dark:bg-blue-400 transform origin-left transition-transform duration-300',
                                        isActiveLink(item.href) || isMegaMenuOpen
                                            ? 'scale-x-100'
                                            : 'scale-x-0'
                                    ]"
                                ></span>
                            </a>

                            <!-- Mega Menu -->
                            <div
                                v-if="isMegaMenuOpen"
                                @mouseenter="cancelCloseMegaMenu"
                                @mouseleave="closeMegaMenu"
                                class="fixed top-[72px] left-0 right-0 w-full bg-white dark:bg-gray-900 shadow-2xl border-t border-gray-100 dark:border-gray-800 z-40 animate-fadeIn"
                            >
                                <div class="container mx-auto px-6 py-10">
                                    <!-- Services Grid -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                        <a
                                            v-for="(service, index) in services"
                                            :key="index"
                                            :href="service.href"
                                            class="group/item relative p-6 rounded-2xl bg-gradient-to-br from-gray-50 to-white dark:from-gray-800 dark:to-gray-900 hover:from-white hover:to-gray-50 dark:hover:from-gray-700 dark:hover:to-gray-800 border border-gray-200 dark:border-gray-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-1"
                                        >
                                            <!-- Gradient Accent Line -->
                                            <div :class="['absolute top-0 left-0 right-0 h-1 bg-gradient-to-r rounded-t-2xl opacity-0 group-hover/item:opacity-100 transition-opacity duration-300', getServiceColor(index)]"></div>

                                            <div class="flex gap-4">
                                                <!-- Icon -->
                                                <div class="flex-shrink-0">
                                                    <div :class="['w-12 h-12 bg-gradient-to-br rounded-xl flex items-center justify-center shadow-md group-hover/item:scale-110 group-hover/item:rotate-6 transition-all duration-300', getServiceColor(index)]">
                                                        <!-- Brand Icon -->
                                                        <svg v-if="service.icon === 'brand'" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                                                        </svg>

                                                        <!-- Design Icon -->
                                                        <svg v-if="service.icon === 'design'" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                                                        </svg>

                                                        <!-- Social Icon -->
                                                        <svg v-if="service.icon === 'social'" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                                                        </svg>

                                                        <!-- Leads Icon -->
                                                        <svg v-if="service.icon === 'leads'" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                                        </svg>

                                                        <!-- Website Icon -->
                                                        <svg v-if="service.icon === 'website'" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                        </svg>

                                                        <!-- Development Icon -->
                                                        <svg v-if="service.icon === 'development'" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                                        </svg>
                                                    </div>
                                                </div>

                                                <!-- Content -->
                                                <div class="flex-1 min-w-0">
                                                    <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-2 group-hover/item:text-blue-600 dark:group-hover/item:text-blue-400 transition-colors duration-300">
                                                        {{ service.title }}
                                                    </h4>
                                                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed line-clamp-2">
                                                        {{ getServiceDescription(service.title) }}
                                                    </p>
                                                </div>

                                                <!-- Arrow Icon -->
                                                <div class="flex-shrink-0 self-center opacity-0 group-hover/item:opacity-100 -translate-x-2 group-hover/item:translate-x-0 transition-all duration-300">
                                                    <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                    </svg>
                                                </div>
                                            </div>

                                            <!-- Hover Glow Effect -->
                                            <div :class="['absolute -inset-px bg-gradient-to-br rounded-2xl opacity-0 group-hover/item:opacity-10 blur-xl transition-all duration-300 -z-10', getServiceColor(index)]"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Regular Nav Items -->
                        <a
                            v-else
                            :href="item.href"
                            :class="[
                                'group relative font-medium transition-all duration-300 py-2',
                                isActiveLink(item.href)
                                    ? 'text-blue-900 dark:text-blue-400 font-semibold'
                                    : 'text-gray-700 dark:text-gray-300 hover:text-blue-900 dark:hover:text-blue-400'
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
                    </template>
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

                    <!-- CTA Button - Hidden on mobile, shown on desktop -->
                    <a href="/contact" class="max-md:hidden bg-blue-900 dark:bg-blue-600 text-white px-6 py-2.5 rounded-lg font-semibold hover:bg-blue-800 dark:hover:bg-blue-500 active:bg-blue-950 dark:active:bg-blue-700 transition-all duration-200 shadow-md hover:shadow-xl transform hover:-translate-y-0.5 inline-block">
                        Let's Talk
                    </a>

                    <!-- Mobile Menu Button -->
                    <button
                        @click="toggleMobileMenu"
                        class="md:hidden p-2 text-gray-700 dark:text-gray-300 hover:text-blue-900 dark:hover:text-blue-400 hover:bg-blue-50 dark:hover:bg-gray-800 rounded-lg transition-all duration-200"
                        aria-label="Toggle mobile menu"
                    >
                        <!-- Hamburger Icon -->
                        <svg v-if="!isMobileMenuOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!-- Close Icon -->
                        <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Mobile Menu -->
        <Transition
            enter-active-class="transition-all duration-300 ease-out"
            enter-from-class="opacity-0 -translate-y-4"
            enter-to-class="opacity-100 translate-y-0"
            leave-active-class="transition-all duration-200 ease-in"
            leave-from-class="opacity-100 translate-y-0"
            leave-to-class="opacity-0 -translate-y-4"
        >
            <div
                v-if="isMobileMenuOpen"
                class="md:hidden bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800 shadow-2xl"
            >
                <nav class="container mx-auto px-6 py-6 space-y-2">
                    <!-- Home Link -->
                    <a
                        href="/"
                        :class="[
                            'block px-4 py-3 rounded-lg font-medium transition-all duration-200',
                            isActiveLink('/')
                                ? 'bg-blue-50 dark:bg-blue-900/20 text-blue-900 dark:text-blue-400'
                                : 'text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800'
                        ]"
                    >
                        Home
                    </a>

                    <!-- Services Accordion -->
                    <div class="space-y-2">
                        <button
                            @click="toggleServices"
                            :class="[
                                'w-full flex items-center justify-between px-4 py-3 rounded-lg font-medium transition-all duration-200',
                                isActiveLink('/services')
                                    ? 'bg-blue-50 dark:bg-blue-900/20 text-blue-900 dark:text-blue-400'
                                    : 'text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800'
                            ]"
                        >
                            <span>Services</span>
                            <svg
                                :class="[
                                    'w-5 h-5 transition-transform duration-300',
                                    isServicesExpanded ? 'rotate-180' : ''
                                ]"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <!-- Services Submenu -->
                        <Transition
                            enter-active-class="transition-all duration-300 ease-out"
                            enter-from-class="opacity-0 max-h-0"
                            enter-to-class="opacity-100 max-h-[500px]"
                            leave-active-class="transition-all duration-200 ease-in"
                            leave-from-class="opacity-100 max-h-[500px]"
                            leave-to-class="opacity-0 max-h-0"
                        >
                            <div v-if="isServicesExpanded" class="pl-4 space-y-1 overflow-hidden">
                                <a
                                    v-for="(service, index) in services"
                                    :key="index"
                                    :href="service.href"
                                    class="flex items-center gap-3 px-4 py-3 rounded-lg text-sm text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 hover:text-blue-900 dark:hover:text-blue-400 transition-all duration-200"
                                >
                                    <div class="w-2 h-2 rounded-full bg-blue-500"></div>
                                    {{ service.title }}
                                </a>
                            </div>
                        </Transition>
                    </div>

                    <!-- About Link -->
                    <a
                        href="/about"
                        :class="[
                            'block px-4 py-3 rounded-lg font-medium transition-all duration-200',
                            isActiveLink('/about')
                                ? 'bg-blue-50 dark:bg-blue-900/20 text-blue-900 dark:text-blue-400'
                                : 'text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800'
                        ]"
                    >
                        About
                    </a>

                    <!-- Contact Link -->
                    <a
                        href="/contact"
                        :class="[
                            'block px-4 py-3 rounded-lg font-medium transition-all duration-200',
                            isActiveLink('/contact')
                                ? 'bg-blue-50 dark:bg-blue-900/20 text-blue-900 dark:text-blue-400'
                                : 'text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800'
                        ]"
                    >
                        Contact
                    </a>

                    <!-- Mobile CTA Button -->
                    <div class="pt-4">
                        <a href="/contact" class="w-full bg-gradient-to-r from-blue-900 to-blue-700 dark:from-blue-600 dark:to-blue-500 text-white px-6 py-3 rounded-lg font-semibold hover:from-blue-800 hover:to-blue-600 dark:hover:from-blue-500 dark:hover:to-blue-400 transition-all duration-200 shadow-lg hover:shadow-xl block text-center">
                            Let's Talk
                        </a>
                    </div>
                </nav>
            </div>
        </Transition>

        </header>
    </div>

    <!-- Search Modal -->
    <SearchModal :is-open="isSearchModalOpen" @close="closeSearchModal" />

    <!-- WhatsApp Floating Button -->
    <WhatsAppFloat />
</template>

<style scoped>
/* Mega menu fade in animation */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fadeIn {
    animation: fadeIn 0.3s ease-out;
}

/* Line clamp utility */
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Scroll progress bar optimization */
header {
    position: relative;
}

/* Ensure smooth scrolling performance */
@media (prefers-reduced-motion: no-preference) {
    html {
        scroll-behavior: smooth;
    }
}
</style>
