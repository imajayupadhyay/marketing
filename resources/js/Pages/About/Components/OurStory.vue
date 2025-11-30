<script setup>
const milestones = [
    {
        year: '2014',
        title: 'The Beginning',
        description: 'Started as a small team of 3 passionate developers with a vision to transform digital experiences.',
        icon: 'rocket'
    },
    {
        year: '2016',
        title: 'First Milestone',
        description: 'Reached 50+ clients and expanded our team to 15 talented professionals.',
        icon: 'trophy'
    },
    {
        year: '2019',
        title: 'Global Expansion',
        description: 'Opened offices in 3 countries and served clients from over 25 nations worldwide.',
        icon: 'globe'
    },
    {
        year: '2024',
        title: 'Innovation Leaders',
        description: 'Recognized as industry leaders with 500+ successful projects and a team of 50+ experts.',
        icon: 'star'
    }
];
</script>

<template>
    <section class="py-24 bg-white dark:bg-gray-900 relative overflow-hidden transition-colors duration-300">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-blue-100 to-purple-100 dark:from-blue-900/20 dark:to-purple-900/20 rounded-full blur-3xl opacity-50"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-20 space-y-4">
                <div class="inline-block px-4 py-2 bg-gradient-to-r from-blue-500/10 to-purple-500/10 dark:from-blue-500/20 dark:to-purple-500/20 rounded-full mb-4">
                    <span class="text-sm font-semibold bg-gradient-to-r from-blue-600 to-purple-600 dark:from-blue-400 dark:to-purple-400 bg-clip-text text-transparent">
                        OUR JOURNEY
                    </span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold bg-gradient-to-r from-gray-900 via-blue-800 to-purple-900 dark:from-white dark:via-blue-400 dark:to-purple-400 bg-clip-text text-transparent">
                    Our Story
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    From humble beginnings to industry leaders - discover the journey that shaped us into the innovative agency we are today.
                </p>
            </div>

            <!-- Timeline -->
            <div class="max-w-5xl mx-auto">
                <div class="relative">
                    <!-- Center Line -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-gradient-to-b from-blue-500 via-purple-500 to-pink-500 hidden md:block"></div>

                    <!-- Milestones -->
                    <div class="space-y-16">
                        <div
                            v-for="(milestone, index) in milestones"
                            :key="index"
                            :class="['relative', index % 2 === 0 ? 'md:text-right' : 'md:text-left']"
                        >
                            <div class="flex flex-col md:flex-row items-center gap-8">
                                <!-- Left Content (even) -->
                                <div
                                    v-if="index % 2 === 0"
                                    class="flex-1 md:pr-12"
                                >
                                    <div class="bg-gradient-to-br from-white to-gray-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl p-8 shadow-xl border border-gray-200/50 dark:border-gray-700/50 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                                        <div class="text-5xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 dark:from-blue-400 dark:to-purple-400 bg-clip-text text-transparent mb-4">
                                            {{ milestone.year }}
                                        </div>
                                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">
                                            {{ milestone.title }}
                                        </h3>
                                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                                            {{ milestone.description }}
                                        </p>
                                    </div>
                                </div>

                                <!-- Center Icon -->
                                <div class="relative z-10 flex-shrink-0">
                                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-purple-500 rounded-full flex items-center justify-center shadow-2xl border-4 border-white dark:border-gray-900 group hover:scale-110 transition-transform duration-300">
                                        <!-- Rocket Icon -->
                                        <svg v-if="milestone.icon === 'rocket'" class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                        </svg>
                                        <!-- Trophy Icon -->
                                        <svg v-if="milestone.icon === 'trophy'" class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                        </svg>
                                        <!-- Globe Icon -->
                                        <svg v-if="milestone.icon === 'globe'" class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <!-- Star Icon -->
                                        <svg v-if="milestone.icon === 'star'" class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                        </svg>

                                        <!-- Pulse Effect -->
                                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-purple-500 rounded-full animate-ping opacity-20"></div>
                                    </div>
                                </div>

                                <!-- Right Content (odd) -->
                                <div
                                    v-if="index % 2 !== 0"
                                    class="flex-1 md:pl-12"
                                >
                                    <div class="bg-gradient-to-br from-white to-gray-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl p-8 shadow-xl border border-gray-200/50 dark:border-gray-700/50 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                                        <div class="text-5xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 dark:from-blue-400 dark:to-purple-400 bg-clip-text text-transparent mb-4">
                                            {{ milestone.year }}
                                        </div>
                                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">
                                            {{ milestone.title }}
                                        </h3>
                                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                                            {{ milestone.description }}
                                        </p>
                                    </div>
                                </div>

                                <!-- Mobile - Left Content (odd) -->
                                <div
                                    v-if="index % 2 === 0"
                                    class="flex-1 md:hidden"
                                >
                                    <!-- Empty space for mobile -->
                                </div>
                            </div>
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
