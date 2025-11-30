<script setup>
import { ref, onMounted } from 'vue';

const isVisible = ref(false);

onMounted(() => {
    setTimeout(() => {
        isVisible.value = true;
    }, 100);
});
</script>

<template>
    <section class="relative pt-32 pb-24 overflow-hidden bg-gradient-to-br from-purple-50 via-white to-pink-50 dark:from-gray-900 dark:via-gray-800 dark:to-purple-900/20 transition-colors duration-300">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <!-- Gradient Orbs -->
            <div class="absolute top-20 right-1/4 w-96 h-96 bg-gradient-to-br from-purple-400/30 to-pink-400/30 dark:from-purple-600/20 dark:to-pink-600/20 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-20 left-1/4 w-96 h-96 bg-gradient-to-br from-pink-400/30 to-purple-400/30 dark:from-pink-600/20 dark:to-purple-600/20 rounded-full blur-3xl animate-float-delayed"></div>

            <!-- Dots Pattern -->
            <div class="absolute inset-0 opacity-[0.03] dark:opacity-[0.05]" style="background-image: radial-gradient(circle, currentColor 1px, transparent 1px); background-size: 30px 30px;"></div>

            <!-- Animated Wireframe -->
            <svg class="absolute inset-0 w-full h-full opacity-10 dark:opacity-5" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="wireframeGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#9333ea;stop-opacity:0.5" />
                        <stop offset="100%" style="stop-color:#ec4899;stop-opacity:0.5" />
                    </linearGradient>
                </defs>
                <rect x="50" y="50" width="200" height="150" stroke="url(#wireframeGradient)" stroke-width="2" fill="none" class="animate-draw" rx="10" />
                <rect x="300" y="100" width="150" height="100" stroke="url(#wireframeGradient)" stroke-width="2" fill="none" class="animate-draw-delayed" rx="8" />
            </svg>
        </div>

        <div class="w-full px-6 md:px-12 lg:px-20 xl:px-32 relative z-10">
            <!-- Content Grid -->
            <div class="grid lg:grid-cols-2 gap-16 xl:gap-24 items-center max-w-[1600px] mx-auto">
                    <!-- Left Content -->
                    <div :class="['space-y-8 transition-all duration-1000', isVisible ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-10']">
                        <!-- Badge -->
                        <div class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-purple-500/10 to-pink-500/10 dark:from-purple-500/20 dark:to-pink-500/20 rounded-full border border-purple-200/50 dark:border-purple-700/50">
                            <svg class="w-4 h-4 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                            </svg>
                            <span class="text-sm font-semibold bg-gradient-to-r from-purple-600 to-pink-600 dark:from-purple-400 dark:to-pink-400 bg-clip-text text-transparent">
                                UI/UX Design
                            </span>
                        </div>

                        <!-- Main Heading -->
                        <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight">
                            <span class="bg-gradient-to-r from-gray-900 via-purple-700 to-pink-700 dark:from-white dark:via-purple-400 dark:to-pink-400 bg-clip-text text-transparent">
                                Design Experiences Users Love
                            </span>
                        </h1>

                        <!-- Description -->
                        <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 leading-relaxed">
                            Create beautiful, intuitive interfaces that delight users and drive meaningful engagement through thoughtful design.
                        </p>

                        <!-- CTA Buttons -->
                        <div class="flex flex-wrap gap-4">
                            <a href="/contact" class="group px-8 py-4 bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 flex items-center gap-2">
                                Start Your Design Project
                                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a>
                            <a href="#our-process" class="px-8 py-4 bg-white dark:bg-gray-800 text-gray-900 dark:text-white rounded-xl font-semibold border-2 border-gray-200 dark:border-gray-700 hover:border-purple-500 dark:hover:border-purple-400 shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                                View Process
                            </a>
                        </div>

                        <!-- Stats -->
                        <div class="grid grid-cols-3 gap-6 pt-4">
                            <div>
                                <div class="text-3xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 dark:from-purple-400 dark:to-pink-400 bg-clip-text text-transparent mb-1">300+</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Designs Created</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 dark:from-purple-400 dark:to-pink-400 bg-clip-text text-transparent mb-1">95%</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">User Satisfaction</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 dark:from-purple-400 dark:to-pink-400 bg-clip-text text-transparent mb-1">50+</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Happy Clients</div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Visual -->
                    <div :class="['relative transition-all duration-1000 delay-300', isVisible ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-10']">
                        <!-- Main Card with UI Elements -->
                        <div class="relative">
                            <!-- Floating Card -->
                            <div class="relative bg-white dark:bg-gray-800 rounded-3xl p-8 shadow-2xl border border-gray-200 dark:border-gray-700">
                                <!-- UI Mockup -->
                                <div class="space-y-6">
                                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Interface Mockup</h3>

                                    <!-- Browser Window Mockup -->
                                    <div class="bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-700 dark:to-gray-600 rounded-xl overflow-hidden border-2 border-gray-200 dark:border-gray-600">
                                        <!-- Browser Header -->
                                        <div class="bg-gray-200 dark:bg-gray-700 px-4 py-3 flex items-center gap-2">
                                            <div class="flex gap-1.5">
                                                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                                                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                                            </div>
                                        </div>

                                        <!-- Content Area -->
                                        <div class="p-6 space-y-4">
                                            <!-- Header -->
                                            <div class="flex items-center justify-between">
                                                <div class="h-8 w-32 bg-gradient-to-r from-purple-400 to-pink-400 rounded-lg animate-pulse-slow"></div>
                                                <div class="h-8 w-24 bg-gray-300 dark:bg-gray-600 rounded-lg"></div>
                                            </div>

                                            <!-- Cards Grid -->
                                            <div class="grid grid-cols-2 gap-4">
                                                <div class="h-24 bg-white dark:bg-gray-800 rounded-xl shadow-md border border-gray-200 dark:border-gray-700 p-4">
                                                    <div class="h-3 w-16 bg-purple-300 rounded mb-2"></div>
                                                    <div class="h-2 w-20 bg-gray-200 dark:bg-gray-600 rounded"></div>
                                                </div>
                                                <div class="h-24 bg-white dark:bg-gray-800 rounded-xl shadow-md border border-gray-200 dark:border-gray-700 p-4 animate-pulse-slow">
                                                    <div class="h-3 w-16 bg-pink-300 rounded mb-2"></div>
                                                    <div class="h-2 w-20 bg-gray-200 dark:bg-gray-600 rounded"></div>
                                                </div>
                                            </div>

                                            <!-- Button -->
                                            <div class="h-10 bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg shadow-lg animate-pulse-slow"></div>
                                        </div>
                                    </div>

                                    <!-- Design Tools -->
                                    <div class="flex gap-3 justify-center">
                                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center shadow-md">
                                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                            </svg>
                                        </div>
                                        <div class="w-12 h-12 bg-gradient-to-br from-pink-500 to-pink-600 rounded-xl flex items-center justify-center shadow-md">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                                            </svg>
                                        </div>
                                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center shadow-md">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Floating Elements -->
                            <div class="absolute -top-4 -right-4 w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl shadow-xl animate-float opacity-80"></div>
                            <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-gradient-to-br from-pink-500 to-purple-500 rounded-xl shadow-xl animate-float-delayed opacity-80"></div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
</template>

<style scoped>
@keyframes float {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-20px);
    }
}

@keyframes float-delayed {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-20px);
    }
}

@keyframes pulse-slow {
    0%, 100% {
        opacity: 1;
        transform: scale(1);
    }
    50% {
        opacity: 0.8;
        transform: scale(0.95);
    }
}

@keyframes draw {
    from {
        stroke-dasharray: 1000;
        stroke-dashoffset: 1000;
    }
    to {
        stroke-dasharray: 1000;
        stroke-dashoffset: 0;
    }
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animate-float-delayed {
    animation: float-delayed 6s ease-in-out infinite;
    animation-delay: 0.5s;
}

.animate-pulse-slow {
    animation: pulse-slow 3s ease-in-out infinite;
}

.animate-draw {
    animation: draw 3s ease-in-out infinite;
}

.animate-draw-delayed {
    animation: draw 3s ease-in-out infinite;
    animation-delay: 1.5s;
}
</style>
