<script setup>
const processSteps = [
    {
        number: '01',
        title: 'Audit & Analysis',
        description: 'Evaluate your current social presence, analyze competitors, and identify opportunities for growth.',
        icon: 'search',
        color: 'from-pink-500 to-rose-500'
    },
    {
        number: '02',
        title: 'Strategy Development',
        description: 'Create a comprehensive social media strategy aligned with your brand goals and target audience.',
        icon: 'strategy',
        color: 'from-rose-500 to-red-500'
    },
    {
        number: '03',
        title: 'Content Planning',
        description: 'Develop a content calendar with engaging posts that resonate with your audience.',
        icon: 'calendar',
        color: 'from-red-500 to-orange-500'
    },
    {
        number: '04',
        title: 'Content Creation',
        description: 'Produce high-quality posts, graphics, videos, and stories that capture attention.',
        icon: 'create',
        color: 'from-orange-500 to-amber-500'
    },
    {
        number: '05',
        title: 'Community Engagement',
        description: 'Actively engage with your audience, respond to comments, and build relationships.',
        icon: 'chat',
        color: 'from-amber-500 to-yellow-500'
    },
    {
        number: '06',
        title: 'Analyze & Optimize',
        description: 'Track performance metrics, gather insights, and continuously improve your strategy.',
        icon: 'chart',
        color: 'from-yellow-500 to-pink-500'
    }
];
</script>

<template>
    <section id="our-process" class="py-24 bg-gradient-to-b from-gray-50 to-white dark:from-gray-800 dark:to-gray-900 transition-colors duration-300">
        <div class="container mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center mb-16 space-y-4">
                <div class="inline-block px-4 py-2 bg-gradient-to-r from-pink-500/10 to-rose-500/10 dark:from-pink-500/20 dark:to-rose-500/20 rounded-full">
                    <span class="text-sm font-semibold bg-gradient-to-r from-pink-600 to-rose-600 dark:from-pink-400 dark:to-rose-400 bg-clip-text text-transparent">
                        OUR APPROACH
                    </span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-gray-900 via-pink-800 to-rose-800 dark:from-white dark:via-pink-400 dark:to-rose-400 bg-clip-text text-transparent">
                    How We Grow Your Presence
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    A data-driven approach to building engaged communities
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

                                    <!-- Strategy Icon -->
                                    <svg v-if="step.icon === 'strategy'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                    </svg>

                                    <!-- Calendar Icon -->
                                    <svg v-if="step.icon === 'calendar'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>

                                    <!-- Create Icon -->
                                    <svg v-if="step.icon === 'create'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                    </svg>

                                    <!-- Chat Icon -->
                                    <svg v-if="step.icon === 'chat'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                                    </svg>

                                    <!-- Chart Icon -->
                                    <svg v-if="step.icon === 'chart'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
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
                            <div v-if="index < processSteps.length - 1" class="hidden lg:block absolute top-1/2 -right-8 w-8 h-0.5 bg-gradient-to-r from-pink-300 to-transparent dark:from-pink-700"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
