<script setup>
const offerings = [
    {
        title: 'User Research',
        description: 'Deep insights into user behavior, needs, and pain points through comprehensive research methods.',
        icon: 'research',
        color: 'from-purple-500 to-violet-500',
        features: ['User interviews', 'Surveys & analytics', 'Persona development', 'Journey mapping']
    },
    {
        title: 'Wireframing',
        description: 'Low-fidelity blueprints that establish structure, flow, and information architecture.',
        icon: 'wireframe',
        color: 'from-violet-500 to-purple-500',
        features: ['Site maps', 'User flows', 'Lo-fi wireframes', 'Information architecture']
    },
    {
        title: 'Prototyping',
        description: 'Interactive prototypes that bring designs to life and validate user interactions.',
        icon: 'prototype',
        color: 'from-purple-500 to-fuchsia-500',
        features: ['Interactive prototypes', 'Micro-interactions', 'Animation design', 'Usability testing']
    },
    {
        title: 'UI Design',
        description: 'Beautiful, modern interfaces with attention to detail and visual hierarchy.',
        icon: 'ui',
        color: 'from-fuchsia-500 to-pink-500',
        features: ['Visual design', 'Component libraries', 'Design systems', 'Responsive layouts']
    },
    {
        title: 'Mobile App Design',
        description: 'Native iOS and Android app designs optimized for touch and mobile experiences.',
        icon: 'mobile',
        color: 'from-pink-500 to-rose-500',
        features: ['iOS design', 'Android design', 'Mobile patterns', 'Touch optimization']
    },
    {
        title: 'Usability Testing',
        description: 'Validate designs with real users and iterate based on actionable feedback.',
        icon: 'testing',
        color: 'from-rose-500 to-purple-500',
        features: ['A/B testing', 'Heat mapping', 'User feedback', 'Iteration cycles']
    }
];
</script>

<template>
    <section class="py-24 bg-white dark:bg-gray-900 relative overflow-hidden transition-colors duration-300">
        <!-- Background Decoration -->
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-0 w-96 h-96 bg-gradient-to-br from-purple-100 to-pink-100 dark:from-purple-900/10 dark:to-pink-900/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-1/4 right-0 w-96 h-96 bg-gradient-to-br from-pink-100 to-fuchsia-100 dark:from-pink-900/10 dark:to-fuchsia-900/10 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16 space-y-4">
                <div class="inline-block px-4 py-2 bg-gradient-to-r from-purple-500/10 to-pink-500/10 dark:from-purple-500/20 dark:to-pink-500/20 rounded-full">
                    <span class="text-sm font-semibold bg-gradient-to-r from-purple-600 to-pink-600 dark:from-purple-400 dark:to-pink-400 bg-clip-text text-transparent">
                        WHAT WE DELIVER
                    </span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-gray-900 via-purple-800 to-pink-800 dark:from-white dark:via-purple-400 dark:to-pink-400 bg-clip-text text-transparent">
                    Comprehensive Design Services
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    User-centered designs that are beautiful, intuitive, and conversion-focused
                </p>
            </div>

            <!-- Offerings Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <div
                    v-for="(offering, index) in offerings"
                    :key="index"
                    class="group relative"
                >
                    <div class="h-full bg-gradient-to-br from-white to-gray-50 dark:from-gray-800 dark:to-gray-900 rounded-3xl p-8 shadow-lg border border-gray-200/50 dark:border-gray-700/50 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                        <!-- Icon -->
                        <div class="mb-6">
                            <div :class="['w-16 h-16 bg-gradient-to-br rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-500', offering.color]">
                                <!-- Research Icon -->
                                <svg v-if="offering.icon === 'research'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>

                                <!-- Wireframe Icon -->
                                <svg v-if="offering.icon === 'wireframe'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                                </svg>

                                <!-- Prototype Icon -->
                                <svg v-if="offering.icon === 'prototype'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                                </svg>

                                <!-- UI Icon -->
                                <svg v-if="offering.icon === 'ui'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                                </svg>

                                <!-- Mobile Icon -->
                                <svg v-if="offering.icon === 'mobile'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>

                                <!-- Testing Icon -->
                                <svg v-if="offering.icon === 'testing'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Content -->
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">
                            {{ offering.title }}
                        </h3>

                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                            {{ offering.description }}
                        </p>

                        <!-- Features List -->
                        <ul class="space-y-2">
                            <li v-for="(feature, idx) in offering.features" :key="idx" class="flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400">
                                <div :class="['w-1.5 h-1.5 rounded-full bg-gradient-to-r', offering.color]"></div>
                                {{ feature }}
                            </li>
                        </ul>

                        <!-- Hover Glow Effect -->
                        <div :class="['absolute -inset-0.5 bg-gradient-to-br rounded-3xl opacity-0 group-hover:opacity-20 blur-xl transition-all duration-500 -z-10', offering.color]"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
