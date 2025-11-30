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
    <section class="relative pt-32 pb-24 overflow-hidden bg-gradient-to-br from-green-50 via-white to-emerald-50 dark:from-gray-900 dark:via-gray-800 dark:to-green-900/20 transition-colors duration-300">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <!-- Gradient Orbs -->
            <div class="absolute top-20 right-1/4 w-96 h-96 bg-gradient-to-br from-green-400/30 to-emerald-400/30 dark:from-green-600/20 dark:to-emerald-600/20 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-20 left-1/4 w-96 h-96 bg-gradient-to-br from-emerald-400/30 to-teal-400/30 dark:from-emerald-600/20 dark:to-teal-600/20 rounded-full blur-3xl animate-float-delayed"></div>

            <!-- Dots Pattern -->
            <div class="absolute inset-0 opacity-[0.03] dark:opacity-[0.05]" style="background-image: radial-gradient(circle, currentColor 1px, transparent 1px); background-size: 30px 30px;"></div>

            <!-- Animated Growth Chart -->
            <svg class="absolute inset-0 w-full h-full opacity-10 dark:opacity-5" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="growthGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#10b981;stop-opacity:0.5" />
                        <stop offset="100%" style="stop-color:#059669;stop-opacity:0.5" />
                    </linearGradient>
                </defs>
                <path d="M50,200 L150,180 L250,140 L350,100 L450,80" stroke="url(#growthGradient)" stroke-width="3" fill="none" class="animate-draw" stroke-linecap="round"/>
                <circle cx="50" cy="200" r="6" fill="url(#growthGradient)" class="animate-pulse-slow"/>
                <circle cx="150" cy="180" r="6" fill="url(#growthGradient)" class="animate-pulse-slow" style="animation-delay: 0.2s"/>
                <circle cx="250" cy="140" r="6" fill="url(#growthGradient)" class="animate-pulse-slow" style="animation-delay: 0.4s"/>
                <circle cx="350" cy="100" r="6" fill="url(#growthGradient)" class="animate-pulse-slow" style="animation-delay: 0.6s"/>
                <circle cx="450" cy="80" r="6" fill="url(#growthGradient)" class="animate-pulse-slow" style="animation-delay: 0.8s"/>
            </svg>
        </div>

        <div class="w-full px-6 md:px-12 lg:px-20 xl:px-32 relative z-10">
            <!-- Content Grid -->
            <div class="grid lg:grid-cols-2 gap-16 xl:gap-24 items-center max-w-[1600px] mx-auto">
                <!-- Left Content -->
                <div :class="['space-y-8 transition-all duration-1000', isVisible ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-10']">
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-green-500/10 to-emerald-500/10 dark:from-green-500/20 dark:to-emerald-500/20 rounded-full border border-green-200/50 dark:border-green-700/50">
                        <svg class="w-4 h-4 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        <span class="text-sm font-semibold bg-gradient-to-r from-green-600 to-emerald-600 dark:from-green-400 dark:to-emerald-400 bg-clip-text text-transparent">
                            Lead Generation
                        </span>
                    </div>

                    <!-- Main Heading -->
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight">
                        <span class="bg-gradient-to-r from-gray-900 via-green-700 to-emerald-700 dark:from-white dark:via-green-400 dark:to-emerald-400 bg-clip-text text-transparent">
                            Drive Qualified Leads & Growth
                        </span>
                    </h1>

                    <!-- Description -->
                    <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 leading-relaxed">
                        Data-driven strategies to attract, convert, and nurture high-quality leads that fuel your business growth.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-wrap gap-4">
                        <a href="/contact" class="group px-8 py-4 bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 text-white rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 flex items-center gap-2">
                            Boost Your Leads
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                        <a href="#our-process" class="px-8 py-4 bg-white dark:bg-gray-800 text-gray-900 dark:text-white rounded-xl font-semibold border-2 border-gray-200 dark:border-gray-700 hover:border-green-500 dark:hover:border-green-400 shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                            Our Strategy
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-6 pt-4">
                        <div>
                            <div class="text-3xl font-bold bg-gradient-to-r from-green-600 to-emerald-600 dark:from-green-400 dark:to-emerald-400 bg-clip-text text-transparent mb-1">10K+</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Leads Generated</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold bg-gradient-to-r from-green-600 to-emerald-600 dark:from-green-400 dark:to-emerald-400 bg-clip-text text-transparent mb-1">3.5x</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Avg ROI</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold bg-gradient-to-r from-green-600 to-emerald-600 dark:from-green-400 dark:to-emerald-400 bg-clip-text text-transparent mb-1">85%</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Conversion Rate</div>
                        </div>
                    </div>
                </div>

                <!-- Right Visual -->
                <div :class="['relative transition-all duration-1000 delay-300', isVisible ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-10']">
                    <!-- Main Card with Growth Metrics -->
                    <div class="relative">
                        <!-- Floating Card -->
                        <div class="relative bg-white dark:bg-gray-800 rounded-3xl p-8 shadow-2xl border border-gray-200 dark:border-gray-700">
                            <!-- Growth Dashboard -->
                            <div class="space-y-6">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Performance Dashboard</h3>

                                <!-- Growth Chart Visualization -->
                                <div class="bg-gradient-to-br from-gray-50 to-white dark:from-gray-700 dark:to-gray-600 rounded-2xl p-6 border border-gray-200 dark:border-gray-600">
                                    <div class="flex justify-between items-center mb-4">
                                        <span class="text-sm font-semibold text-gray-600 dark:text-gray-400">Lead Growth</span>
                                        <span class="text-sm font-bold text-green-600 dark:text-green-400">+245%</span>
                                    </div>
                                    <!-- Bar Chart -->
                                    <div class="space-y-3">
                                        <div class="flex items-center gap-3">
                                            <span class="text-xs text-gray-500 dark:text-gray-400 w-12">Jan</span>
                                            <div class="flex-1 h-8 bg-gradient-to-r from-green-400 to-emerald-400 rounded-lg" style="width: 40%"></div>
                                            <span class="text-xs font-semibold text-gray-600 dark:text-gray-400">120</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <span class="text-xs text-gray-500 dark:text-gray-400 w-12">Feb</span>
                                            <div class="flex-1 h-8 bg-gradient-to-r from-green-400 to-emerald-400 rounded-lg animate-pulse-slow" style="width: 55%"></div>
                                            <span class="text-xs font-semibold text-gray-600 dark:text-gray-400">165</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <span class="text-xs text-gray-500 dark:text-gray-400 w-12">Mar</span>
                                            <div class="flex-1 h-8 bg-gradient-to-r from-green-500 to-emerald-500 rounded-lg animate-pulse-slow" style="width: 75%; animation-delay: 0.3s"></div>
                                            <span class="text-xs font-semibold text-gray-600 dark:text-gray-400">225</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <span class="text-xs text-gray-500 dark:text-gray-400 w-12">Apr</span>
                                            <div class="flex-1 h-8 bg-gradient-to-r from-green-500 to-emerald-500 rounded-lg animate-pulse-slow" style="width: 90%; animation-delay: 0.6s"></div>
                                            <span class="text-xs font-semibold text-gray-600 dark:text-gray-400">270</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <span class="text-xs text-gray-500 dark:text-gray-400 w-12">May</span>
                                            <div class="flex-1 h-8 bg-gradient-to-r from-green-600 to-emerald-600 rounded-lg shadow-lg animate-pulse-slow" style="width: 100%; animation-delay: 0.9s"></div>
                                            <span class="text-xs font-semibold text-green-600 dark:text-green-400">294</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Key Metrics -->
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-green-900/20 dark:to-emerald-900/20 rounded-xl p-4 border border-green-200 dark:border-green-800">
                                        <div class="text-2xl font-bold text-green-600 dark:text-green-400 mb-1">$45K</div>
                                        <div class="text-xs text-gray-600 dark:text-gray-400">Revenue Generated</div>
                                    </div>
                                    <div class="bg-gradient-to-br from-emerald-50 to-teal-50 dark:from-emerald-900/20 dark:to-teal-900/20 rounded-xl p-4 border border-emerald-200 dark:border-emerald-800">
                                        <div class="text-2xl font-bold text-emerald-600 dark:text-emerald-400 mb-1">1,294</div>
                                        <div class="text-xs text-gray-600 dark:text-gray-400">Total Leads</div>
                                    </div>
                                </div>

                                <!-- Channel Icons -->
                                <div class="flex gap-3 justify-center pt-2">
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center shadow-md">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </div>
                                    <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-emerald-500 rounded-lg flex items-center justify-center shadow-md">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-500 rounded-lg flex items-center justify-center shadow-md">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Elements -->
                        <div class="absolute -top-4 -right-4 w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl shadow-xl animate-float opacity-80"></div>
                        <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-gradient-to-br from-emerald-500 to-teal-500 rounded-xl shadow-xl animate-float-delayed opacity-80"></div>
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
</style>
