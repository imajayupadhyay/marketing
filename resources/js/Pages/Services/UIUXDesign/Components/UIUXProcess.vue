<script setup>
const processSteps = [
    {
        number: '01',
        title: 'Discover & Define',
        description: 'Understand business goals, user needs, and project requirements through stakeholder interviews and research.',
        icon: 'compass',
        color: 'from-purple-500 to-violet-500'
    },
    {
        number: '02',
        title: 'User Research',
        description: 'Conduct user interviews, surveys, and competitive analysis to gather insights and validate assumptions.',
        icon: 'users',
        color: 'from-violet-500 to-purple-500'
    },
    {
        number: '03',
        title: 'Information Architecture',
        description: 'Organize content and create user flows that guide users seamlessly through their journey.',
        icon: 'sitemap',
        color: 'from-purple-500 to-fuchsia-500'
    },
    {
        number: '04',
        title: 'Wireframe & Prototype',
        description: 'Create low-fidelity wireframes and interactive prototypes to test concepts and gather feedback.',
        icon: 'layers',
        color: 'from-fuchsia-500 to-pink-500'
    },
    {
        number: '05',
        title: 'Visual Design',
        description: 'Apply brand identity, colors, typography, and imagery to create polished high-fidelity designs.',
        icon: 'palette',
        color: 'from-pink-500 to-rose-500'
    },
    {
        number: '06',
        title: 'Test & Iterate',
        description: 'Conduct usability testing, gather feedback, and refine designs based on real user insights.',
        icon: 'refresh',
        color: 'from-rose-500 to-purple-500'
    }
];
</script>

<template>
    <section id="our-process" class="py-24 bg-gradient-to-b from-gray-50 to-white dark:from-gray-800 dark:to-gray-900 transition-colors duration-300">
        <div class="container mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center mb-16 space-y-4">
                <div class="inline-block px-4 py-2 bg-gradient-to-r from-purple-500/10 to-pink-500/10 dark:from-purple-500/20 dark:to-pink-500/20 rounded-full">
                    <span class="text-sm font-semibold bg-gradient-to-r from-purple-600 to-pink-600 dark:from-purple-400 dark:to-pink-400 bg-clip-text text-transparent">
                        OUR PROCESS
                    </span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-gray-900 via-purple-800 to-pink-800 dark:from-white dark:via-purple-400 dark:to-pink-400 bg-clip-text text-transparent">
                    Design Process That Works
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    A user-centered approach that delivers exceptional experiences
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
                                    <!-- Compass Icon -->
                                    <svg v-if="step.icon === 'compass'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
                                    </svg>

                                    <!-- Users Icon -->
                                    <svg v-if="step.icon === 'users'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                    </svg>

                                    <!-- Sitemap Icon -->
                                    <svg v-if="step.icon === 'sitemap'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                    </svg>

                                    <!-- Layers Icon -->
                                    <svg v-if="step.icon === 'layers'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                    </svg>

                                    <!-- Palette Icon -->
                                    <svg v-if="step.icon === 'palette'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                                    </svg>

                                    <!-- Refresh Icon -->
                                    <svg v-if="step.icon === 'refresh'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
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
                            <div v-if="index < processSteps.length - 1" class="hidden lg:block absolute top-1/2 -right-8 w-8 h-0.5 bg-gradient-to-r from-purple-300 to-transparent dark:from-purple-700"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
