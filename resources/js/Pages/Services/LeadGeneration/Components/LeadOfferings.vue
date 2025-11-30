<script setup>
const offerings = [
    {
        title: 'SEO Optimization',
        description: 'Improve your search rankings and attract organic traffic with strategic SEO that converts.',
        icon: 'seo',
        color: 'from-green-500 to-emerald-500',
        features: ['Keyword research', 'On-page SEO', 'Technical SEO', 'Link building']
    },
    {
        title: 'PPC Campaigns',
        description: 'Targeted paid advertising that reaches your ideal customers and maximizes ROI.',
        icon: 'ppc',
        color: 'from-emerald-500 to-teal-500',
        features: ['Google Ads', 'Social ads', 'Ad copywriting', 'Bid optimization']
    },
    {
        title: 'Email Marketing',
        description: 'Nurture leads and drive conversions with personalized email campaigns that engage.',
        icon: 'email',
        color: 'from-teal-500 to-cyan-500',
        features: ['Campaign design', 'List segmentation', 'A/B testing', 'Automation']
    },
    {
        title: 'Conversion Optimization',
        description: 'Turn more visitors into leads with data-driven CRO strategies and landing pages.',
        icon: 'conversion',
        color: 'from-cyan-500 to-blue-500',
        features: ['Landing pages', 'Form optimization', 'User testing', 'Analytics tracking']
    },
    {
        title: 'Content Marketing',
        description: 'Attract and educate prospects with valuable content that establishes authority.',
        icon: 'content',
        color: 'from-blue-500 to-indigo-500',
        features: ['Blog posts', 'Whitepapers', 'Case studies', 'Lead magnets']
    },
    {
        title: 'Marketing Automation',
        description: 'Scale your lead generation with automated workflows and intelligent nurturing.',
        icon: 'automation',
        color: 'from-indigo-500 to-green-500',
        features: ['Workflow automation', 'Lead scoring', 'Drip campaigns', 'CRM integration']
    }
];
</script>

<template>
    <section class="py-24 bg-white dark:bg-gray-900 relative overflow-hidden transition-colors duration-300">
        <!-- Background Decoration -->
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-0 w-96 h-96 bg-gradient-to-br from-green-100 to-emerald-100 dark:from-green-900/10 dark:to-emerald-900/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-1/4 right-0 w-96 h-96 bg-gradient-to-br from-emerald-100 to-teal-100 dark:from-emerald-900/10 dark:to-teal-900/10 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16 space-y-4">
                <div class="inline-block px-4 py-2 bg-gradient-to-r from-green-500/10 to-emerald-500/10 dark:from-green-500/20 dark:to-emerald-500/20 rounded-full">
                    <span class="text-sm font-semibold bg-gradient-to-r from-green-600 to-emerald-600 dark:from-green-400 dark:to-emerald-400 bg-clip-text text-transparent">
                        WHAT WE DELIVER
                    </span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-gray-900 via-green-800 to-emerald-800 dark:from-white dark:via-green-400 dark:to-emerald-400 bg-clip-text text-transparent">
                    Complete Lead Generation Suite
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Multi-channel strategies to attract and convert qualified leads
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
                                <!-- SEO Icon -->
                                <svg v-if="offering.icon === 'seo'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>

                                <!-- PPC Icon -->
                                <svg v-if="offering.icon === 'ppc'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>

                                <!-- Email Icon -->
                                <svg v-if="offering.icon === 'email'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>

                                <!-- Conversion Icon -->
                                <svg v-if="offering.icon === 'conversion'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>

                                <!-- Content Icon -->
                                <svg v-if="offering.icon === 'content'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>

                                <!-- Automation Icon -->
                                <svg v-if="offering.icon === 'automation'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
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
