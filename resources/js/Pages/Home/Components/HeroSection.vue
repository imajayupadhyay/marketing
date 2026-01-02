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

                <!-- Right Content - Interactive Dashboard -->
                <div
                    class="relative transition-all duration-1000 delay-300 transform"
                    :class="isVisible ? 'translate-x-0 opacity-100' : 'translate-x-20 opacity-0'"
                >
                    <div class="relative">
                        <!-- Main Dashboard Card -->
                        <div class="relative bg-white dark:bg-gray-800 rounded-3xl p-8 shadow-2xl border border-gray-200 dark:border-gray-700">
                            <div class="space-y-6">
                                <!-- Dashboard Header -->
                                <div class="relative flex items-center justify-center">
                                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Digital Dashboard</h3>
                                    <div class="absolute right-0 flex gap-1.5">
                                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                                    </div>
                                </div>

                                <!-- Metrics Grid -->
                                <div class="grid grid-cols-2 gap-4">
                                    <!-- Metric 1 -->
                                    <div class="group bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900/20 dark:to-blue-800/20 rounded-2xl p-4 border border-blue-200 dark:border-blue-700/50 hover:scale-105 transition-transform duration-300 cursor-pointer">
                                        <div class="flex items-center gap-3">
                                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg">
                                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <div class="text-2xl font-bold text-blue-600 dark:text-blue-400">+250%</div>
                                                <div class="text-xs text-gray-600 dark:text-gray-400">Growth</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Metric 2 -->
                                    <div class="group bg-gradient-to-br from-purple-50 to-purple-100 dark:from-purple-900/20 dark:to-purple-800/20 rounded-2xl p-4 border border-purple-200 dark:border-purple-700/50 hover:scale-105 transition-transform duration-300 cursor-pointer">
                                        <div class="flex items-center gap-3">
                                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg">
                                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <div class="text-2xl font-bold text-purple-600 dark:text-purple-400">10K+</div>
                                                <div class="text-xs text-gray-600 dark:text-gray-400">Users</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Metric 3 -->
                                    <div class="group bg-gradient-to-br from-cyan-50 to-cyan-100 dark:from-cyan-900/20 dark:to-cyan-800/20 rounded-2xl p-4 border border-cyan-200 dark:border-cyan-700/50 hover:scale-105 transition-transform duration-300 cursor-pointer">
                                        <div class="flex items-center gap-3">
                                            <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-xl flex items-center justify-center shadow-lg">
                                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <div class="text-2xl font-bold text-cyan-600 dark:text-cyan-400">99.9%</div>
                                                <div class="text-xs text-gray-600 dark:text-gray-400">Success</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Metric 4 -->
                                    <div class="group bg-gradient-to-br from-pink-50 to-pink-100 dark:from-pink-900/20 dark:to-pink-800/20 rounded-2xl p-4 border border-pink-200 dark:border-pink-700/50 hover:scale-105 transition-transform duration-300 cursor-pointer">
                                        <div class="flex items-center gap-3">
                                            <div class="w-12 h-12 bg-gradient-to-br from-pink-500 to-pink-600 rounded-xl flex items-center justify-center shadow-lg">
                                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <div class="text-2xl font-bold text-pink-600 dark:text-pink-400">24/7</div>
                                                <div class="text-xs text-gray-600 dark:text-gray-400">Support</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Activity Chart Mockup -->
                                <div class="space-y-3">
                                    <div class="flex items-center justify-between">
                                        <p class="text-sm font-semibold text-gray-600 dark:text-gray-400">Performance Overview</p>
                                        <span class="text-xs text-green-500 font-medium flex items-center gap-1">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                            </svg>
                                            +18.5%
                                        </span>
                                    </div>
                                    <div class="flex items-end justify-between h-32 gap-2">
                                        <div class="flex-1 bg-gradient-to-t from-blue-500 to-blue-400 rounded-t-lg h-[45%] animate-grow"></div>
                                        <div class="flex-1 bg-gradient-to-t from-purple-500 to-purple-400 rounded-t-lg h-[65%] animate-grow" style="animation-delay: 0.1s;"></div>
                                        <div class="flex-1 bg-gradient-to-t from-cyan-500 to-cyan-400 rounded-t-lg h-[55%] animate-grow" style="animation-delay: 0.2s;"></div>
                                        <div class="flex-1 bg-gradient-to-t from-pink-500 to-pink-400 rounded-t-lg h-[80%] animate-grow" style="animation-delay: 0.3s;"></div>
                                        <div class="flex-1 bg-gradient-to-t from-indigo-500 to-indigo-400 rounded-t-lg h-[90%] animate-grow" style="animation-delay: 0.4s;"></div>
                                        <div class="flex-1 bg-gradient-to-t from-blue-500 to-blue-400 rounded-t-lg h-[75%] animate-grow" style="animation-delay: 0.5s;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Service Cards -->
                        <!-- Design Card -->
                        <div class="absolute -top-6 -left-6 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl p-4 shadow-xl animate-float w-24 h-24 flex items-center justify-center group hover:scale-110 transition-transform duration-300 cursor-pointer">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                            </svg>
                        </div>

                        <!-- Code Card -->
                        <div class="absolute -top-6 -right-6 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl p-4 shadow-xl animate-float-delayed w-24 h-24 flex items-center justify-center group hover:scale-110 transition-transform duration-300 cursor-pointer">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                            </svg>
                        </div>

                        <!-- Analytics Card -->
                        <div class="absolute -bottom-6 -left-6 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl p-4 shadow-xl animate-float w-24 h-24 flex items-center justify-center group hover:scale-110 transition-transform duration-300 cursor-pointer" style="animation-delay: 0.5s;">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>

                        <!-- Marketing Card -->
                        <div class="absolute -bottom-6 -right-6 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl p-4 shadow-xl animate-float-delayed w-24 h-24 flex items-center justify-center group hover:scale-110 transition-transform duration-300 cursor-pointer" style="animation-delay: 1s;">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
                            </svg>
                        </div>

                        <!-- Glow Effect -->
                        <div class="absolute -inset-4 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 rounded-3xl opacity-20 blur-2xl -z-10 animate-pulse-slow"></div>
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

@keyframes float-delayed {
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

@keyframes pulse-slow {
    0%, 100% {
        opacity: 0.2;
    }
    50% {
        opacity: 0.3;
    }
}

@keyframes grow {
    from {
        transform: scaleY(0);
    }
    to {
        transform: scaleY(1);
    }
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animate-float-delayed {
    animation: float-delayed 6s ease-in-out infinite;
    animation-delay: 1s;
}

.animate-bounce-slow {
    animation: bounce-slow 3s ease-in-out infinite;
}

.animate-spin-slow {
    animation: spin-slow 20s linear infinite;
}

.animate-pulse-slow {
    animation: pulse-slow 4s ease-in-out infinite;
}

.animate-grow {
    animation: grow 1s ease-out forwards;
    transform-origin: bottom;
}
</style>
