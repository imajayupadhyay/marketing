<script setup>
const processSteps = [
    {
        number: '01',
        title: 'Discovery & Research',
        description: 'We dive deep into your business, target audience, and competitive landscape to understand what makes you unique.',
        icon: 'search',
        color: 'from-blue-500 to-cyan-500'
    },
    {
        number: '02',
        title: 'Strategy Development',
        description: 'Craft a comprehensive brand strategy including positioning, messaging, and visual direction.',
        icon: 'lightbulb',
        color: 'from-cyan-500 to-teal-500'
    },
    {
        number: '03',
        title: 'Design Exploration',
        description: 'Create multiple design concepts exploring different visual directions for your brand identity.',
        icon: 'palette',
        color: 'from-teal-500 to-green-500'
    },
    {
        number: '04',
        title: 'Refinement',
        description: 'Collaborate closely to refine the chosen direction, perfecting every detail of your brand.',
        icon: 'adjustments',
        color: 'from-green-500 to-emerald-500'
    },
    {
        number: '05',
        title: 'Brand Guidelines',
        description: 'Develop comprehensive guidelines ensuring consistent application across all brand touchpoints.',
        icon: 'document',
        color: 'from-emerald-500 to-blue-500'
    },
    {
        number: '06',
        title: 'Launch & Support',
        description: 'Deliver all final assets and provide ongoing support to ensure successful brand implementation.',
        icon: 'rocket',
        color: 'from-blue-500 to-indigo-500'
    }
];
</script>

<template>
    <section id="our-process" class="py-24 bg-gradient-to-b from-gray-50 to-white dark:from-gray-800 dark:to-gray-900 transition-colors duration-300">
        <div class="container mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center mb-16 space-y-4">
                <div class="inline-block px-4 py-2 bg-gradient-to-r from-blue-500/10 to-cyan-500/10 dark:from-blue-500/20 dark:to-cyan-500/20 rounded-full">
                    <span class="text-sm font-semibold bg-gradient-to-r from-blue-600 to-cyan-600 dark:from-blue-400 dark:to-cyan-400 bg-clip-text text-transparent">
                        OUR PROCESS
                    </span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-gray-900 via-blue-800 to-cyan-800 dark:from-white dark:via-blue-400 dark:to-cyan-400 bg-clip-text text-transparent">
                    How We Build Your Brand
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    A proven 6-step process to create a brand that stands out
                </p>
            </div>

            <!-- Process Timeline -->
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div
                        v-for="(step, index) in processSteps"
                        :key="index"
                        class="group relative"
                    >
                        <!-- Card -->
                        <div class="relative h-full bg-white dark:bg-gray-800 rounded-3xl p-8 shadow-lg border border-gray-200 dark:border-gray-700 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                            <!-- Number Badge -->
                            <div class="absolute -top-4 -right-4">
                                <div :class="['w-16 h-16 bg-gradient-to-br rounded-2xl flex items-center justify-center shadow-xl text-white font-bold text-xl group-hover:scale-110 group-hover:rotate-12 transition-all duration-500', step.color]">
                                    {{ step.number }}
                                </div>
                            </div>

                            <!-- Icon -->
                            <div class="mb-6">
                                <div :class="['w-14 h-14 bg-gradient-to-br rounded-xl flex items-center justify-center shadow-md opacity-20 dark:opacity-30', step.color]">
                                    <!-- Search Icon -->
                                    <svg v-if="step.icon === 'search'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>

                                    <!-- Lightbulb Icon -->
                                    <svg v-if="step.icon === 'lightbulb'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                    </svg>

                                    <!-- Palette Icon -->
                                    <svg v-if="step.icon === 'palette'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                                    </svg>

                                    <!-- Adjustments Icon -->
                                    <svg v-if="step.icon === 'adjustments'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                                    </svg>

                                    <!-- Document Icon -->
                                    <svg v-if="step.icon === 'document'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>

                                    <!-- Rocket Icon -->
                                    <svg v-if="step.icon === 'rocket'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">
                                {{ step.title }}
                            </h3>

                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                                {{ step.description }}
                            </p>

                            <!-- Connection Line (for larger screens) -->
                            <div v-if="index < processSteps.length - 1" class="hidden lg:block absolute top-1/2 -right-8 w-8 h-0.5 bg-gradient-to-r from-blue-300 to-transparent dark:from-blue-700"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
