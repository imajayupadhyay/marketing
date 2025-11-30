<script setup>
import { ref, onMounted } from 'vue';

const props = defineProps({
    title: {
        type: String,
        default: 'DXD PixelWork'
    },
    subtitle: {
        type: String,
        default: 'Transforming Ideas into Digital Excellence'
    },
    description: {
        type: String,
        default: 'We create stunning digital experiences that elevate your brand and drive results.'
    },
    ctaText: {
        type: String,
        default: 'Get Started'
    },
    ctaLink: {
        type: String,
        default: '#contact'
    }
});

const isVisible = ref(false);

onMounted(() => {
    setTimeout(() => {
        isVisible.value = true;
    }, 100);
});
</script>

<template>
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-white dark:bg-gray-900 transition-colors duration-300">
        <!-- Subtle Background Pattern -->
        <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-white to-purple-50 dark:from-blue-950 dark:via-gray-900 dark:to-purple-950 opacity-60"></div>

        <!-- Decorative Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <!-- Floating Circles -->
            <div class="absolute top-20 right-20 w-72 h-72 bg-gradient-to-br from-blue-400 to-cyan-400 rounded-full opacity-10 blur-3xl animate-float"></div>
            <div class="absolute bottom-20 left-20 w-96 h-96 bg-gradient-to-br from-purple-400 to-pink-400 rounded-full opacity-10 blur-3xl animate-float" style="animation-delay: 2s;"></div>

            <!-- Geometric Shapes -->
            <svg class="absolute top-40 left-10 w-16 h-16 text-blue-300 opacity-30 animate-spin-slow" fill="currentColor" viewBox="0 0 100 100">
                <polygon points="50,10 90,90 10,90"/>
            </svg>
            <svg class="absolute bottom-40 right-20 w-20 h-20 text-purple-300 opacity-30 animate-bounce-slow" fill="currentColor" viewBox="0 0 100 100">
                <circle cx="50" cy="50" r="50"/>
            </svg>
        </div>

        <div class="container mx-auto px-6 py-20 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Left Content -->
                <div
                    class="space-y-8 transition-all duration-1000 transform"
                    :class="isVisible ? 'translate-x-0 opacity-100' : '-translate-x-20 opacity-0'"
                >
                    <div class="inline-block">
                        <span class="px-5 py-2 bg-gradient-to-r from-blue-500 to-purple-500 text-white rounded-full text-sm font-semibold shadow-lg">
                            Welcome to {{ title }}
                        </span>
                    </div>

                    <h1 class="text-6xl md:text-7xl font-bold leading-tight">
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-gray-900 via-blue-800 to-purple-900 dark:from-white dark:via-blue-400 dark:to-purple-400">
                            {{ subtitle }}
                        </span>
                    </h1>

                    <p class="text-xl text-gray-600 dark:text-gray-300 leading-relaxed max-w-xl">
                        {{ description }}
                    </p>

                    <div class="flex flex-wrap gap-4">
                        <a
                            :href="ctaLink"
                            class="group px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl font-semibold shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300"
                        >
                            {{ ctaText }}
                            <svg class="inline-block w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <a
                            href="#services"
                            class="px-8 py-4 border-2 border-gray-900 dark:border-white text-gray-900 dark:text-white rounded-xl font-semibold hover:bg-gray-900 dark:hover:bg-white hover:text-white dark:hover:text-gray-900 transform hover:-translate-y-1 transition-all duration-300"
                        >
                            Explore Services
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-8 pt-8">
                        <div>
                            <div class="text-4xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-cyan-600">500+</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400 mt-2 font-medium">Projects Completed</div>
                        </div>
                        <div>
                            <div class="text-4xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-600 to-pink-600">100+</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400 mt-2 font-medium">Happy Clients</div>
                        </div>
                        <div>
                            <div class="text-4xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-blue-600">10+</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400 mt-2 font-medium">Years Experience</div>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Modern Illustration -->
                <div
                    class="relative transition-all duration-1000 delay-300 transform"
                    :class="isVisible ? 'translate-x-0 opacity-100' : 'translate-x-20 opacity-0'"
                >
                    <div class="relative w-full h-[600px]">
                        <!-- Main SVG Illustration -->
                        <svg class="w-full h-full" viewBox="0 0 600 600" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Background Card -->
                            <g class="animate-float">
                                <!-- Card Shadow -->
                                <rect x="90" y="110" width="420" height="380" rx="24" fill="#e5e7eb" opacity="0.3" class="dark:fill-gray-700"/>

                                <!-- Main Card -->
                                <rect x="80" y="100" width="420" height="380" rx="24" fill="white" stroke="#e5e7eb" stroke-width="2" class="dark:fill-gray-800 dark:stroke-gray-700"/>

                                <!-- Card Header -->
                                <rect x="80" y="100" width="420" height="80" rx="24" fill="url(#headerGradient)"/>

                                <!-- Header Dots -->
                                <circle cx="110" cy="140" r="8" fill="white" opacity="0.8"/>
                                <circle cx="140" cy="140" r="8" fill="white" opacity="0.8"/>
                                <circle cx="170" cy="140" r="8" fill="white" opacity="0.8"/>

                                <!-- Content Lines -->
                                <line x1="120" y1="220" x2="380" y2="220" stroke="#3b82f6" stroke-width="6" stroke-linecap="round"/>
                                <line x1="120" y1="260" x2="320" y2="260" stroke="#8b5cf6" stroke-width="6" stroke-linecap="round"/>
                                <line x1="120" y1="300" x2="350" y2="300" stroke="#06b6d4" stroke-width="6" stroke-linecap="round"/>

                                <!-- Decorative Shapes -->
                                <circle cx="420" cy="240" r="35" fill="url(#circleGradient1)" class="animate-pulse"/>
                                <rect x="130" y="350" width="100" height="80" rx="12" fill="url(#rectGradient)" class="animate-pulse" style="animation-delay: 0.5s;"/>
                                <circle cx="350" cy="390" r="25" fill="url(#circleGradient2)" class="animate-pulse" style="animation-delay: 1s;"/>
                            </g>

                            <!-- Floating Elements -->
                            <g class="animate-bounce-slow">
                                <circle cx="520" cy="150" r="30" fill="url(#floatGradient1)" opacity="0.8"/>
                                <path d="M520 140 L520 160 M510 150 L530 150" stroke="white" stroke-width="3" stroke-linecap="round"/>
                            </g>

                            <g class="animate-float" style="animation-delay: 1.5s;">
                                <polygon points="100,450 130,490 70,490" fill="url(#floatGradient2)" opacity="0.8"/>
                            </g>

                            <!-- Gradients -->
                            <defs>
                                <linearGradient id="headerGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" style="stop-color:#3b82f6;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#8b5cf6;stop-opacity:1" />
                                </linearGradient>
                                <linearGradient id="circleGradient1" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#06b6d4;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#3b82f6;stop-opacity:1" />
                                </linearGradient>
                                <linearGradient id="circleGradient2" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#ec4899;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#8b5cf6;stop-opacity:1" />
                                </linearGradient>
                                <linearGradient id="rectGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#3b82f6;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#06b6d4;stop-opacity:1" />
                                </linearGradient>
                                <linearGradient id="floatGradient1" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#f59e0b;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#ef4444;stop-opacity:1" />
                                </linearGradient>
                                <linearGradient id="floatGradient2" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#10b981;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#3b82f6;stop-opacity:1" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <div class="flex flex-col items-center gap-2">
                <span class="text-sm text-gray-400 dark:text-gray-500 font-medium">Scroll Down</span>
                <svg class="w-6 h-6 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                </svg>
            </div>
        </div>
    </section>
</template>

<style scoped>
@keyframes float {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-20px);
    }
}

@keyframes bounce-slow {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-15px);
    }
}

@keyframes spin-slow {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animate-bounce-slow {
    animation: bounce-slow 3s ease-in-out infinite;
}

.animate-spin-slow {
    animation: spin-slow 20s linear infinite;
}
</style>
