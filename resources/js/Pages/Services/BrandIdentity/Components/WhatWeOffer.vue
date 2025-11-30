<script setup>
const offerings = [
    {
        title: 'Logo Design',
        description: 'Unique, memorable logos that embody your brand essence and leave a lasting impression.',
        icon: 'logo',
        color: 'from-blue-500 to-cyan-500',
        features: ['Multiple concepts', 'Unlimited revisions', 'Vector files', 'Brand guidelines']
    },
    {
        title: 'Brand Guidelines',
        description: 'Comprehensive documentation ensuring consistent brand application across all touchpoints.',
        icon: 'guidelines',
        color: 'from-cyan-500 to-teal-500',
        features: ['Color systems', 'Typography rules', 'Usage examples', 'Do\'s and Don\'ts']
    },
    {
        title: 'Visual Identity',
        description: 'Complete visual system including colors, typography, imagery, and design elements.',
        icon: 'visual',
        color: 'from-teal-500 to-green-500',
        features: ['Color palettes', 'Typography selection', 'Icon systems', 'Pattern library']
    },
    {
        title: 'Brand Strategy',
        description: 'Strategic positioning and messaging that resonates with your target audience.',
        icon: 'strategy',
        color: 'from-green-500 to-emerald-500',
        features: ['Market research', 'Competitor analysis', 'Brand positioning', 'Messaging framework']
    },
    {
        title: 'Marketing Collateral',
        description: 'Professional business cards, letterheads, and promotional materials.',
        icon: 'collateral',
        color: 'from-emerald-500 to-blue-500',
        features: ['Business cards', 'Letterheads', 'Brochures', 'Presentation templates']
    },
    {
        title: 'Brand Refresh',
        description: 'Modernize existing brands while maintaining recognition and equity.',
        icon: 'refresh',
        color: 'from-blue-500 to-indigo-500',
        features: ['Audit & analysis', 'Modernization', 'Evolution strategy', 'Implementation plan']
    }
];
</script>

<template>
    <section class="py-24 bg-white dark:bg-gray-900 relative overflow-hidden transition-colors duration-300">
        <!-- Background Decoration -->
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-0 w-96 h-96 bg-gradient-to-br from-blue-100 to-cyan-100 dark:from-blue-900/10 dark:to-cyan-900/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-1/4 right-0 w-96 h-96 bg-gradient-to-br from-cyan-100 to-teal-100 dark:from-cyan-900/10 dark:to-teal-900/10 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16 space-y-4">
                <div class="inline-block px-4 py-2 bg-gradient-to-r from-blue-500/10 to-cyan-500/10 dark:from-blue-500/20 dark:to-cyan-500/20 rounded-full">
                    <span class="text-sm font-semibold bg-gradient-to-r from-blue-600 to-cyan-600 dark:from-blue-400 dark:to-cyan-400 bg-clip-text text-transparent">
                        WHAT WE DELIVER
                    </span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-gray-900 via-blue-800 to-cyan-800 dark:from-white dark:via-blue-400 dark:to-cyan-400 bg-clip-text text-transparent">
                    Comprehensive Brand Solutions
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Everything you need to build a powerful, cohesive brand identity
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
                                <!-- Logo Icon -->
                                <svg v-if="offering.icon === 'logo'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                                </svg>

                                <!-- Guidelines Icon -->
                                <svg v-if="offering.icon === 'guidelines'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>

                                <!-- Visual Icon -->
                                <svg v-if="offering.icon === 'visual'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                                </svg>

                                <!-- Strategy Icon -->
                                <svg v-if="offering.icon === 'strategy'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>

                                <!-- Collateral Icon -->
                                <svg v-if="offering.icon === 'collateral'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>

                                <!-- Refresh Icon -->
                                <svg v-if="offering.icon === 'refresh'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
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
