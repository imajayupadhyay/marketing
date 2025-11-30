<script setup>
const offerings = [
    {
        title: 'Content Creation',
        description: 'Engaging posts, graphics, and videos tailored to your brand voice and audience preferences.',
        icon: 'content',
        color: 'from-pink-500 to-rose-500',
        features: ['Post copywriting', 'Graphic design', 'Video content', 'Story creation']
    },
    {
        title: 'Community Management',
        description: 'Build relationships with your audience through timely responses and authentic engagement.',
        icon: 'community',
        color: 'from-rose-500 to-red-500',
        features: ['Comment moderation', 'DM management', 'Community building', 'Crisis management']
    },
    {
        title: 'Social Analytics',
        description: 'Data-driven insights to track performance, understand your audience, and optimize strategy.',
        icon: 'analytics',
        color: 'from-red-500 to-orange-500',
        features: ['Performance tracking', 'Audience insights', 'Competitor analysis', 'Monthly reports']
    },
    {
        title: 'Campaign Strategy',
        description: 'Comprehensive social media campaigns that align with your business goals and drive results.',
        icon: 'campaign',
        color: 'from-orange-500 to-amber-500',
        features: ['Campaign planning', 'Goal setting', 'Target audience', 'ROI optimization']
    },
    {
        title: 'Paid Advertising',
        description: 'Targeted social ads that reach the right audience and maximize your advertising budget.',
        icon: 'advertising',
        color: 'from-amber-500 to-yellow-500',
        features: ['Ad creation', 'Audience targeting', 'A/B testing', 'Budget management']
    },
    {
        title: 'Influencer Outreach',
        description: 'Connect with the right influencers to amplify your brand message and expand reach.',
        icon: 'influencer',
        color: 'from-yellow-500 to-pink-500',
        features: ['Influencer research', 'Partnership management', 'Campaign coordination', 'Performance tracking']
    }
];
</script>

<template>
    <section class="py-24 bg-white dark:bg-gray-900 relative overflow-hidden transition-colors duration-300">
        <!-- Background Decoration -->
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-0 w-96 h-96 bg-gradient-to-br from-pink-100 to-rose-100 dark:from-pink-900/10 dark:to-rose-900/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-1/4 right-0 w-96 h-96 bg-gradient-to-br from-rose-100 to-orange-100 dark:from-rose-900/10 dark:to-orange-900/10 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16 space-y-4">
                <div class="inline-block px-4 py-2 bg-gradient-to-r from-pink-500/10 to-rose-500/10 dark:from-pink-500/20 dark:to-rose-500/20 rounded-full">
                    <span class="text-sm font-semibold bg-gradient-to-r from-pink-600 to-rose-600 dark:from-pink-400 dark:to-rose-400 bg-clip-text text-transparent">
                        WHAT WE DELIVER
                    </span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-gray-900 via-pink-800 to-rose-800 dark:from-white dark:via-pink-400 dark:to-rose-400 bg-clip-text text-transparent">
                    Complete Social Media Solutions
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Everything you need to build a thriving social media presence
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
                                <!-- Content Icon -->
                                <svg v-if="offering.icon === 'content'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>

                                <!-- Community Icon -->
                                <svg v-if="offering.icon === 'community'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>

                                <!-- Analytics Icon -->
                                <svg v-if="offering.icon === 'analytics'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>

                                <!-- Campaign Icon -->
                                <svg v-if="offering.icon === 'campaign'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                                </svg>

                                <!-- Advertising Icon -->
                                <svg v-if="offering.icon === 'advertising'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>

                                <!-- Influencer Icon -->
                                <svg v-if="offering.icon === 'influencer'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
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
