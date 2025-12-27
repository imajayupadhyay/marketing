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
    <section class="relative pt-32 pb-24 overflow-hidden bg-gradient-to-br from-indigo-50 via-white to-blue-50 dark:from-gray-900 dark:via-gray-800 dark:to-indigo-900/20 transition-colors duration-300">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <!-- Gradient Orbs -->
            <div class="absolute top-20 right-1/4 w-96 h-96 bg-gradient-to-br from-indigo-400/30 to-blue-400/30 dark:from-indigo-600/20 dark:to-blue-600/20 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-20 left-1/4 w-96 h-96 bg-gradient-to-br from-blue-400/30 to-indigo-400/30 dark:from-blue-600/20 dark:to-indigo-600/20 rounded-full blur-3xl animate-float-delayed"></div>

            <!-- Dots Pattern -->
            <div class="absolute inset-0 opacity-[0.03] dark:opacity-[0.05]" style="background-image: radial-gradient(circle, currentColor 1px, transparent 1px); background-size: 30px 30px;"></div>

            <!-- Animated Lines -->
            <svg class="absolute inset-0 w-full h-full opacity-10 dark:opacity-5" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="lineGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#6366f1;stop-opacity:0.5" />
                        <stop offset="100%" style="stop-color:#3b82f6;stop-opacity:0.5" />
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
                        <div class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-indigo-500/10 to-blue-500/10 dark:from-indigo-500/20 dark:to-blue-500/20 rounded-full border border-indigo-200/50 dark:border-indigo-700/50">
                            <svg class="w-4 h-4 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                            <span class="text-sm font-semibold bg-gradient-to-r from-indigo-600 to-blue-600 dark:from-indigo-400 dark:to-blue-400 bg-clip-text text-transparent">
                                Web Development
                            </span>
                        </div>

                        <!-- Main Heading -->
                        <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight">
                            <span class="bg-gradient-to-r from-gray-900 via-indigo-700 to-blue-700 dark:from-white dark:via-indigo-400 dark:to-blue-400 bg-clip-text text-transparent">
                                Powerful Web Applications
                            </span>
                        </h1>

                        <!-- Description -->
                        <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 leading-relaxed">
                            Your website is the foundation of your digital presence. We create custom websites and web applications that are fast, secure, visually appealing, and built to deliver real results.
                        </p>

                        <!-- CTA Buttons -->
                        <div class="flex flex-wrap gap-4">
                            <a href="/contact" class="group px-8 py-4 bg-gradient-to-r from-indigo-600 to-blue-600 hover:from-indigo-700 hover:to-blue-700 text-white rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 flex items-center gap-2">
                                Start Your Project
                                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a>
                            <a href="#our-process" class="px-8 py-4 bg-white dark:bg-gray-800 text-gray-900 dark:text-white rounded-xl font-semibold border-2 border-gray-200 dark:border-gray-700 hover:border-indigo-500 dark:hover:border-indigo-400 shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                                Our Process
                            </a>
                        </div>

                        <!-- Stats -->
                        <div class="grid grid-cols-3 gap-6 pt-4">
                            <div>
                                <div class="text-3xl font-bold bg-gradient-to-r from-indigo-600 to-blue-600 dark:from-indigo-400 dark:to-blue-400 bg-clip-text text-transparent mb-1">1000+</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Apps Developed</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold bg-gradient-to-r from-indigo-600 to-blue-600 dark:from-indigo-400 dark:to-blue-400 bg-clip-text text-transparent mb-1">99%</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Uptime Guarantee</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold bg-gradient-to-r from-indigo-600 to-blue-600 dark:from-indigo-400 dark:to-blue-400 bg-clip-text text-transparent mb-1">10+</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Years Experience</div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Visual -->
                    <div :class="['relative transition-all duration-1000 delay-300', isVisible ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-10']">
                        <!-- Main Card with Code Preview -->
                        <div class="relative">
                            <!-- Floating Card -->
                            <div class="relative bg-white dark:bg-gray-800 rounded-3xl p-8 shadow-2xl border border-gray-200 dark:border-gray-700">
                                <!-- Code Editor Mockup -->
                                <div class="space-y-6">
                                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Modern Development</h3>

                                    <!-- Code Editor Window -->
                                    <div class="space-y-3">
                                        <!-- Editor Bar -->
                                        <div class="flex items-center gap-2 bg-gray-800 dark:bg-gray-900 rounded-t-xl px-4 py-3">
                                            <div class="flex gap-1.5">
                                                <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                                <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                                                <div class="w-3 h-3 rounded-full bg-green-500"></div>
                                            </div>
                                            <div class="flex-1 text-center">
                                                <span class="text-xs text-gray-400">app.js</span>
                                            </div>
                                        </div>

                                        <!-- Code Content -->
                                        <div class="bg-gray-900 dark:bg-black rounded-b-xl p-6 space-y-2 font-mono text-sm">
                                            <!-- Code Line 1 -->
                                            <div class="flex gap-4">
                                                <span class="text-gray-500">1</span>
                                                <span class="text-purple-400">import</span>
                                                <span class="text-blue-400">React</span>
                                                <span class="text-purple-400">from</span>
                                                <span class="text-green-400">'react'</span>
                                            </div>
                                            <!-- Code Line 2 -->
                                            <div class="flex gap-4">
                                                <span class="text-gray-500">2</span>
                                                <span class="text-gray-400"></span>
                                            </div>
                                            <!-- Code Line 3 -->
                                            <div class="flex gap-4">
                                                <span class="text-gray-500">3</span>
                                                <span class="text-purple-400">function</span>
                                                <span class="text-yellow-400">App</span>
                                                <span class="text-gray-400">() {</span>
                                            </div>
                                            <!-- Code Line 4 -->
                                            <div class="flex gap-4 pl-4">
                                                <span class="text-gray-500">4</span>
                                                <span class="text-purple-400">return</span>
                                                <span class="text-gray-400">(</span>
                                            </div>
                                            <!-- Code Line 5 -->
                                            <div class="flex gap-4 pl-8">
                                                <span class="text-gray-500">5</span>
                                                <span class="text-green-400">&lt;div</span>
                                                <span class="text-blue-400">className</span>
                                                <span class="text-gray-400">=</span>
                                                <span class="text-orange-400">"app"</span>
                                                <span class="text-green-400">&gt;</span>
                                            </div>
                                            <!-- Code Line 6 -->
                                            <div class="flex gap-4 pl-12">
                                                <span class="text-gray-500">6</span>
                                                <span class="text-green-400">&lt;h1&gt;</span>
                                                <span class="text-gray-300 animate-pulse-slow">Hello World</span>
                                                <span class="text-green-400">&lt;/h1&gt;</span>
                                            </div>
                                            <!-- Code Line 7 -->
                                            <div class="flex gap-4 pl-8">
                                                <span class="text-gray-500">7</span>
                                                <span class="text-green-400">&lt;/div&gt;</span>
                                            </div>
                                            <!-- Code Line 8 -->
                                            <div class="flex gap-4 pl-4">
                                                <span class="text-gray-500">8</span>
                                                <span class="text-gray-400">)</span>
                                            </div>
                                            <!-- Code Line 9 -->
                                            <div class="flex gap-4">
                                                <span class="text-gray-500">9</span>
                                                <span class="text-gray-400">}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tech Stack -->
                                    <div class="space-y-3">
                                        <p class="text-sm font-semibold text-gray-600 dark:text-gray-400">Technologies We Use</p>
                                        <div class="grid grid-cols-2 gap-3">
                                            <div class="flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300">
                                                <div class="w-2 h-2 rounded-full bg-gradient-to-r from-indigo-500 to-blue-500"></div>
                                                React & Vue
                                            </div>
                                            <div class="flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300">
                                                <div class="w-2 h-2 rounded-full bg-gradient-to-r from-indigo-500 to-blue-500"></div>
                                                Node.js
                                            </div>
                                            <div class="flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300">
                                                <div class="w-2 h-2 rounded-full bg-gradient-to-r from-indigo-500 to-blue-500"></div>
                                                Laravel
                                            </div>
                                            <div class="flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300">
                                                <div class="w-2 h-2 rounded-full bg-gradient-to-r from-indigo-500 to-blue-500"></div>
                                                Cloud Native
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Floating Elements -->
                            <div class="absolute -top-4 -right-4 w-20 h-20 bg-gradient-to-br from-indigo-500 to-blue-500 rounded-2xl shadow-xl animate-float opacity-80"></div>
                            <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-xl shadow-xl animate-float-delayed opacity-80"></div>
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
