<script setup>
const steps = [
    {
        number: '01',
        title: 'Discovery & Research',
        description: 'We start by understanding your business, goals, and target audience through comprehensive research and analysis.',
        icon: 'search'
    },
    {
        number: '02',
        title: 'Strategy & Planning',
        description: 'Based on insights, we develop a customized strategy and detailed roadmap tailored to your specific needs.',
        icon: 'strategy'
    },
    {
        number: '03',
        title: 'Design & Development',
        description: 'Our expert team brings the strategy to life with stunning designs and robust development.',
        icon: 'code'
    },
    {
        number: '04',
        title: 'Testing & Launch',
        description: 'Rigorous testing ensures everything works perfectly before we launch your project to the world.',
        icon: 'rocket'
    },
    {
        number: '05',
        title: 'Support & Optimize',
        description: 'Continuous support and optimization ensure your project continues to deliver exceptional results.',
        icon: 'chart'
    }
];
</script>

<template>
    <section class="py-24 bg-gradient-to-b from-gray-50 via-white to-gray-50 dark:from-gray-800 dark:via-gray-900 dark:to-gray-800 relative overflow-hidden transition-colors duration-300">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-br from-purple-100 to-pink-100 dark:from-purple-900/20 dark:to-pink-900/20 rounded-full blur-3xl opacity-50"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-20 space-y-4">
                <div class="inline-block px-4 py-2 bg-gradient-to-r from-blue-500/10 to-purple-500/10 dark:from-blue-500/20 dark:to-purple-500/20 rounded-full mb-4">
                    <span class="text-sm font-semibold bg-gradient-to-r from-blue-600 to-purple-600 dark:from-blue-400 dark:to-purple-400 bg-clip-text text-transparent">
                        HOW WE WORK
                    </span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold bg-gradient-to-r from-gray-900 via-blue-800 to-purple-900 dark:from-white dark:via-blue-400 dark:to-purple-400 bg-clip-text text-transparent">
                    Our Process
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    A proven methodology that delivers exceptional results every time
                </p>
            </div>

            <!-- Process Steps -->
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
                    <div
                        v-for="(step, index) in steps"
                        :key="index"
                        class="group relative"
                    >
                        <!-- Connector Line (hidden on last item) -->
                        <div v-if="index < steps.length - 1" class="hidden lg:block absolute top-12 left-full w-full h-0.5 bg-gradient-to-r from-blue-500/30 to-purple-500/30 dark:from-blue-500/20 dark:to-purple-500/20 transform -translate-x-1/2"></div>

                        <!-- Step Card -->
                        <div class="relative bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg border border-gray-200/50 dark:border-gray-700/50 hover:shadow-xl transition-all duration-500 hover:-translate-y-2 h-full">
                            <!-- Number Badge -->
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-500 rounded-xl flex items-center justify-center text-white font-bold text-lg mb-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                {{ step.number }}
                            </div>

                            <!-- Icon -->
                            <div class="mb-4">
                                <!-- Search Icon -->
                                <svg v-if="step.icon === 'search'" class="w-10 h-10 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>

                                <!-- Strategy Icon -->
                                <svg v-if="step.icon === 'strategy'" class="w-10 h-10 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                </svg>

                                <!-- Code Icon -->
                                <svg v-if="step.icon === 'code'" class="w-10 h-10 text-pink-600 dark:text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>

                                <!-- Rocket Icon -->
                                <svg v-if="step.icon === 'rocket'" class="w-10 h-10 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>

                                <!-- Chart Icon -->
                                <svg v-if="step.icon === 'chart'" class="w-10 h-10 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>

                            <!-- Content -->
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-3">
                                {{ step.title }}
                            </h3>

                            <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                                {{ step.description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
/* Additional animations if needed */
</style>
