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
    <section class="relative pt-32 pb-24 overflow-hidden bg-gradient-to-br from-orange-50 via-white to-red-50 dark:from-gray-900 dark:via-gray-800 dark:to-orange-900/20 transition-colors duration-300">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <!-- Gradient Orbs -->
            <div class="absolute top-20 right-1/4 w-96 h-96 bg-gradient-to-br from-orange-400/30 to-red-400/30 dark:from-orange-600/20 dark:to-red-600/20 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-20 left-1/4 w-96 h-96 bg-gradient-to-br from-red-400/30 to-orange-400/30 dark:from-red-600/20 dark:to-orange-600/20 rounded-full blur-3xl animate-float-delayed"></div>

            <!-- Dots Pattern -->
            <div class="absolute inset-0 opacity-[0.03] dark:opacity-[0.05]" style="background-image: radial-gradient(circle, currentColor 1px, transparent 1px); background-size: 30px 30px;"></div>

            <!-- Animated Lines -->
            <svg class="absolute inset-0 w-full h-full opacity-10 dark:opacity-5" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="lineGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#f97316;stop-opacity:0.5" />
                        <stop offset="100%" style="stop-color:#ef4444;stop-opacity:0.5" />
                    </linearGradient>
                </defs>
                <path d="M0,100 Q250,50 500,100 T1000,100" stroke="url(#lineGradient)" stroke-width="2" fill="none" class="animate-draw" />
                <path d="M0,200 Q250,150 500,200 T1000,200" stroke="url(#lineGradient)" stroke-width="2" fill="none" class="animate-draw-delayed" />
            </svg>
        </div>

        <div class="w-full px-6 md:px-12 lg:px-20 xl:px-32 relative z-10">
            <!-- Content Grid -->
            <div class="grid lg:grid-cols-2 gap-16 xl:gap-24 items-center max-w-[1600px] mx-auto">
                    <!-- Left Content -->
                    <div :class="['space-y-8 transition-all duration-1000', isVisible ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-10']">
                        <!-- Badge -->
                        <div class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-orange-500/10 to-red-500/10 dark:from-orange-500/20 dark:to-red-500/20 rounded-full border border-orange-200/50 dark:border-orange-700/50">
                            <svg class="w-4 h-4 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-sm font-semibold bg-gradient-to-r from-orange-600 to-red-600 dark:from-orange-400 dark:to-red-400 bg-clip-text text-transparent">
                                Website Design
                            </span>
                        </div>

                        <!-- Main Heading -->
                        <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight">
                            <span class="bg-gradient-to-r from-gray-900 via-orange-700 to-red-700 dark:from-white dark:via-orange-400 dark:to-red-400 bg-clip-text text-transparent">
                                Stunning Websites That Convert
                            </span>
                        </h1>

                        <!-- Description -->
                        <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 leading-relaxed">
                            An eCommerce store is more than an online shop — it is a complete digital sales experience. We design and develop powerful, secure, and user-friendly eCommerce stores that help businesses sell confidently and grow online.
                        </p>

                        <!-- CTA Buttons -->
                        <div class="flex flex-wrap gap-4">
                            <a href="/contact" class="group px-8 py-4 bg-gradient-to-r from-orange-600 to-red-600 hover:from-orange-700 hover:to-red-700 text-white rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 flex items-center gap-2">
                                Start Your Project
                                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a>
                            <a href="#our-process" class="px-8 py-4 bg-white dark:bg-gray-800 text-gray-900 dark:text-white rounded-xl font-semibold border-2 border-gray-200 dark:border-gray-700 hover:border-orange-500 dark:hover:border-orange-400 shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                                Our Process
                            </a>
                        </div>

                        <!-- Stats -->
                        <div class="grid grid-cols-3 gap-6 pt-4">
                            <div>
                                <div class="text-3xl font-bold bg-gradient-to-r from-orange-600 to-red-600 dark:from-orange-400 dark:to-red-400 bg-clip-text text-transparent mb-1">800+</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Websites Built</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold bg-gradient-to-r from-orange-600 to-red-600 dark:from-orange-400 dark:to-red-400 bg-clip-text text-transparent mb-1">99%</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Client Satisfaction</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold bg-gradient-to-r from-orange-600 to-red-600 dark:from-orange-400 dark:to-red-400 bg-clip-text text-transparent mb-1">10+</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Years Experience</div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Visual -->
                    <div :class="['relative transition-all duration-1000 delay-300', isVisible ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-10']">
                        <!-- Main Card with Website Preview -->
                        <div class="relative">
                            <!-- Floating Card -->
                            <div class="relative bg-white dark:bg-gray-800 rounded-3xl p-8 shadow-2xl border border-gray-200 dark:border-gray-700">
                                <!-- Website Preview -->
                                <div class="space-y-6">
                                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Modern Web Design</h3>

                                    <!-- Browser Window Mockup -->
                                    <div class="space-y-3">
                                        <!-- Browser Bar -->
                                        <div class="flex items-center gap-2 bg-gray-100 dark:bg-gray-700 rounded-t-xl px-4 py-3">
                                            <div class="flex gap-1.5">
                                                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                                                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                                            </div>
                                            <div class="flex-1 bg-white dark:bg-gray-600 rounded px-3 py-1 text-xs text-gray-500 dark:text-gray-300 ml-2">
                                                www.yourwebsite.com
                                            </div>
                                        </div>

                                        <!-- Website Content -->
                                        <div class="bg-gradient-to-br from-orange-50 to-red-50 dark:from-gray-700 dark:to-gray-600 rounded-b-xl p-6 space-y-4">
                                            <!-- Header -->
                                            <div class="flex justify-between items-center">
                                                <div class="w-24 h-6 bg-gradient-to-r from-orange-500 to-red-500 rounded"></div>
                                                <div class="flex gap-2">
                                                    <div class="w-12 h-3 bg-gray-300 dark:bg-gray-500 rounded"></div>
                                                    <div class="w-12 h-3 bg-gray-300 dark:bg-gray-500 rounded"></div>
                                                    <div class="w-12 h-3 bg-gray-300 dark:bg-gray-500 rounded"></div>
                                                </div>
                                            </div>

                                            <!-- Hero Section -->
                                            <div class="space-y-2 pt-4">
                                                <div class="w-full h-4 bg-gray-300 dark:bg-gray-500 rounded"></div>
                                                <div class="w-3/4 h-4 bg-gray-300 dark:bg-gray-500 rounded"></div>
                                                <div class="w-1/3 h-8 bg-gradient-to-r from-orange-500 to-red-500 rounded mt-4 animate-pulse-slow"></div>
                                            </div>

                                            <!-- Content Grid -->
                                            <div class="grid grid-cols-3 gap-2 pt-2">
                                                <div class="h-16 bg-white dark:bg-gray-600 rounded shadow-sm"></div>
                                                <div class="h-16 bg-white dark:bg-gray-600 rounded shadow-sm"></div>
                                                <div class="h-16 bg-white dark:bg-gray-600 rounded shadow-sm"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Features -->
                                    <div class="space-y-3">
                                        <p class="text-sm font-semibold text-gray-600 dark:text-gray-400">Key Features</p>
                                        <div class="grid grid-cols-2 gap-3">
                                            <div class="flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300">
                                                <div class="w-2 h-2 rounded-full bg-gradient-to-r from-orange-500 to-red-500"></div>
                                                Responsive
                                            </div>
                                            <div class="flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300">
                                                <div class="w-2 h-2 rounded-full bg-gradient-to-r from-orange-500 to-red-500"></div>
                                                Fast Loading
                                            </div>
                                            <div class="flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300">
                                                <div class="w-2 h-2 rounded-full bg-gradient-to-r from-orange-500 to-red-500"></div>
                                                SEO Ready
                                            </div>
                                            <div class="flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300">
                                                <div class="w-2 h-2 rounded-full bg-gradient-to-r from-orange-500 to-red-500"></div>
                                                Optimized
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Floating Elements -->
                            <div class="absolute -top-4 -right-4 w-20 h-20 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl shadow-xl animate-float opacity-80"></div>
                            <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-gradient-to-br from-red-500 to-orange-500 rounded-xl shadow-xl animate-float-delayed opacity-80"></div>
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

@keyframes bounce-slow {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
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

.animate-bounce-slow {
    animation: bounce-slow 2s ease-in-out infinite;
}

.animate-draw {
    animation: draw 3s ease-in-out infinite;
}

.animate-draw-delayed {
    animation: draw 3s ease-in-out infinite;
    animation-delay: 1.5s;
}
</style>
