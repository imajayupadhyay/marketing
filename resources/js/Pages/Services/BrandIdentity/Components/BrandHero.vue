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
    <section class="relative pt-32 pb-24 overflow-hidden bg-gradient-to-br from-blue-50 via-white to-cyan-50 dark:from-gray-900 dark:via-gray-800 dark:to-blue-900/20 transition-colors duration-300">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <!-- Gradient Orbs -->
            <div class="absolute top-20 right-1/4 w-96 h-96 bg-gradient-to-br from-blue-400/30 to-cyan-400/30 dark:from-blue-600/20 dark:to-cyan-600/20 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-20 left-1/4 w-96 h-96 bg-gradient-to-br from-cyan-400/30 to-blue-400/30 dark:from-cyan-600/20 dark:to-blue-600/20 rounded-full blur-3xl animate-float-delayed"></div>

            <!-- Dots Pattern -->
            <div class="absolute inset-0 opacity-[0.03] dark:opacity-[0.05]" style="background-image: radial-gradient(circle, currentColor 1px, transparent 1px); background-size: 30px 30px;"></div>

            <!-- Animated Lines -->
            <svg class="absolute inset-0 w-full h-full opacity-10 dark:opacity-5" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="lineGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#3b82f6;stop-opacity:0.5" />
                        <stop offset="100%" style="stop-color:#06b6d4;stop-opacity:0.5" />
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
                        <div class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-blue-500/10 to-cyan-500/10 dark:from-blue-500/20 dark:to-cyan-500/20 rounded-full border border-blue-200/50 dark:border-blue-700/50">
                            <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                            </svg>
                            <span class="text-sm font-semibold bg-gradient-to-r from-blue-600 to-cyan-600 dark:from-blue-400 dark:to-cyan-400 bg-clip-text text-transparent">
                                Brand Identity & Strategy
                            </span>
                        </div>

                        <!-- Main Heading -->
                        <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight">
                            <span class="bg-gradient-to-r from-gray-900 via-blue-700 to-cyan-700 dark:from-white dark:via-blue-400 dark:to-cyan-400 bg-clip-text text-transparent">
                                Build a Brand That Resonates
                            </span>
                        </h1>

                        <!-- Description -->
                        <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 leading-relaxed">
                            Your brand identity is more than just a logo — it is how people recognize, remember, and connect with your business. At DXD Pixel Work, we help businesses build strong, unique brand identities that stand out in the digital landscape.
                        </p>

                        <!-- CTA Buttons -->
                        <div class="flex flex-wrap gap-4">
                            <a href="/contact" class="group px-8 py-4 bg-gradient-to-r from-blue-600 to-cyan-600 hover:from-blue-700 hover:to-cyan-700 text-white rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 flex items-center gap-2">
                                Start Your Brand Journey
                                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a>
                            <a href="#our-process" class="px-8 py-4 bg-white dark:bg-gray-800 text-gray-900 dark:text-white rounded-xl font-semibold border-2 border-gray-200 dark:border-gray-700 hover:border-blue-500 dark:hover:border-blue-400 shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                                Our Process
                            </a>
                        </div>

                        <!-- Stats -->
                        <div class="grid grid-cols-3 gap-6 pt-4">
                            <div>
                                <div class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-cyan-600 dark:from-blue-400 dark:to-cyan-400 bg-clip-text text-transparent mb-1">500+</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Brands Created</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-cyan-600 dark:from-blue-400 dark:to-cyan-400 bg-clip-text text-transparent mb-1">98%</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Client Satisfaction</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-cyan-600 dark:from-blue-400 dark:to-cyan-400 bg-clip-text text-transparent mb-1">10+</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Years Experience</div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Visual -->
                    <div :class="['relative transition-all duration-1000 delay-300', isVisible ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-10']">
                        <!-- Main Card with Brand Elements -->
                        <div class="relative">
                            <!-- Floating Card -->
                            <div class="relative bg-white dark:bg-gray-800 rounded-3xl p-8 shadow-2xl border border-gray-200 dark:border-gray-700">
                                <!-- Brand Palette -->
                                <div class="space-y-6">
                                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Your Brand Identity</h3>

                                    <!-- Color Palette -->
                                    <div class="space-y-3">
                                        <p class="text-sm font-semibold text-gray-600 dark:text-gray-400">Brand Colors</p>
                                        <div class="flex gap-3">
                                            <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 shadow-lg animate-pulse-slow"></div>
                                            <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-cyan-500 to-cyan-600 shadow-lg animate-pulse-slow" style="animation-delay: 0.2s"></div>
                                            <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-gray-800 to-gray-900 shadow-lg animate-pulse-slow" style="animation-delay: 0.4s"></div>
                                            <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-gray-100 to-gray-200 shadow-lg animate-pulse-slow" style="animation-delay: 0.6s"></div>
                                        </div>
                                    </div>

                                    <!-- Typography -->
                                    <div class="space-y-3">
                                        <p class="text-sm font-semibold text-gray-600 dark:text-gray-400">Typography</p>
                                        <div class="space-y-2">
                                            <div class="text-4xl font-bold text-gray-900 dark:text-white">Aa</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Inter - Primary Font</div>
                                        </div>
                                    </div>

                                    <!-- Logo Placeholder -->
                                    <div class="space-y-3">
                                        <p class="text-sm font-semibold text-gray-600 dark:text-gray-400">Logo Design</p>
                                        <div class="h-32 bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-700 dark:to-gray-600 rounded-xl flex items-center justify-center border-2 border-dashed border-blue-300 dark:border-blue-600">
                                            <svg class="w-16 h-16 text-blue-500 dark:text-blue-400 animate-bounce-slow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Floating Elements -->
                            <div class="absolute -top-4 -right-4 w-20 h-20 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl shadow-xl animate-float opacity-80"></div>
                            <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-xl shadow-xl animate-float-delayed opacity-80"></div>
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
