<script setup>
const processSteps = [
    {
        number: '01',
        title: 'Discovery & Planning',
        description: 'We analyze your business goals, target audience, and competitors to create a strategic foundation for your website.',
        icon: 'search',
        color: 'from-orange-500 to-red-500'
    },
    {
        number: '02',
        title: 'Information Architecture',
        description: 'Structure your content logically, creating intuitive navigation and user flows that guide visitors to conversion.',
        icon: 'sitemap',
        color: 'from-red-500 to-rose-500'
    },
    {
        number: '03',
        title: 'Visual Design',
        description: 'Craft beautiful, on-brand designs that capture attention and create memorable user experiences.',
        icon: 'palette',
        color: 'from-rose-500 to-pink-500'
    },
    {
        number: '04',
        title: 'Development',
        description: 'Transform designs into a fully functional website using modern technologies and best practices.',
        icon: 'code',
        color: 'from-pink-500 to-purple-500'
    },
    {
        number: '05',
        title: 'Testing & Optimization',
        description: 'Rigorous testing across devices and browsers, optimizing for performance, accessibility, and SEO.',
        icon: 'test',
        color: 'from-purple-500 to-orange-500'
    },
    {
        number: '06',
        title: 'Launch & Support',
        description: 'Deploy your website with confidence and provide ongoing support to ensure continued success.',
        icon: 'rocket',
        color: 'from-orange-600 to-red-600'
    }
];
</script>

<template>
    <section id="our-process" class="py-24 bg-gradient-to-b from-gray-50 to-white dark:from-gray-800 dark:to-gray-900 transition-colors duration-300">
        <div class="container mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center mb-16 space-y-4">
                <div class="inline-block px-4 py-2 bg-gradient-to-r from-orange-500/10 to-red-500/10 dark:from-orange-500/20 dark:to-red-500/20 rounded-full">
                    <span class="text-sm font-semibold bg-gradient-to-r from-orange-600 to-red-600 dark:from-orange-400 dark:to-red-400 bg-clip-text text-transparent">
                        OUR PROCESS
                    </span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-gray-900 via-orange-800 to-red-800 dark:from-white dark:via-orange-400 dark:to-red-400 bg-clip-text text-transparent">
                    How We Build Your Website
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    A proven 6-step process to create websites that drive results
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

                                    <!-- Sitemap Icon -->
                                    <svg v-if="step.icon === 'sitemap'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                                    </svg>

                                    <!-- Palette Icon -->
                                    <svg v-if="step.icon === 'palette'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                                    </svg>

                                    <!-- Code Icon -->
                                    <svg v-if="step.icon === 'code'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                    </svg>

                                    <!-- Test Icon -->
                                    <svg v-if="step.icon === 'test'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
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
                            <div v-if="index < processSteps.length - 1" class="hidden lg:block absolute top-1/2 -right-8 w-8 h-0.5 bg-gradient-to-r from-orange-300 to-transparent dark:from-orange-700"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
