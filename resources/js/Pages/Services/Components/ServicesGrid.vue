<script setup>
const services = [
    {
        title: 'Brand Identity & Strategy',
        description: 'Create a powerful brand identity that resonates with your target audience. From logo design to comprehensive brand guidelines, we help you build a memorable brand.',
        icon: 'brand',
        color: 'from-blue-500 to-cyan-500',
        features: ['Logo Design', 'Brand Guidelines', 'Visual Identity', 'Brand Strategy']
    },
    {
        title: 'UI/UX Designs',
        description: 'Design beautiful, intuitive interfaces that users love. Our user-centric approach ensures seamless experiences across all platforms and devices.',
        icon: 'design',
        color: 'from-purple-500 to-pink-500',
        features: ['User Research', 'Wireframing', 'Prototyping', 'UI Design']
    },
    {
        title: 'Social Media Management',
        description: 'Build and engage your community with strategic social media management. We create compelling content and manage your presence across all major platforms.',
        icon: 'social',
        color: 'from-pink-500 to-rose-500',
        features: ['Content Creation', 'Community Management', 'Analytics', 'Campaign Strategy']
    },
    {
        title: 'Lead Generation',
        description: 'Drive qualified leads to your business with data-driven strategies. From SEO to paid advertising, we optimize every channel for maximum ROI.',
        icon: 'leads',
        color: 'from-green-500 to-emerald-500',
        features: ['SEO Optimization', 'PPC Campaigns', 'Email Marketing', 'Conversion Optimization']
    },
    {
        title: 'Website Design',
        description: 'Build stunning, high-performance websites that convert visitors into customers. Responsive, fast, and optimized for search engines.',
        icon: 'website',
        color: 'from-orange-500 to-red-500',
        features: ['Responsive Design', 'E-commerce', 'CMS Integration', 'Performance Optimization']
    },
    {
        title: 'Web Development',
        description: 'Transform designs into powerful, scalable web applications. We build robust solutions using modern technologies that drive your business forward.',
        icon: 'development',
        color: 'from-indigo-500 to-blue-500',
        features: ['Custom Development', 'API Integration', 'Database Design', 'Cloud Deployment']
    }
];
</script>

<template>
    <section class="py-24 bg-white dark:bg-gray-900 relative overflow-hidden transition-colors duration-300">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-1/2 right-0 w-96 h-96 bg-gradient-to-br from-blue-100 to-purple-100 dark:from-blue-900/20 dark:to-purple-900/20 rounded-full blur-3xl opacity-50"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-20 space-y-4">
                <div class="inline-block px-4 py-2 bg-gradient-to-r from-blue-500/10 to-purple-500/10 dark:from-blue-500/20 dark:to-purple-500/20 rounded-full mb-4">
                    <span class="text-sm font-semibold bg-gradient-to-r from-blue-600 to-purple-600 dark:from-blue-400 dark:to-purple-400 bg-clip-text text-transparent">
                        WHAT WE OFFER
                    </span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold bg-gradient-to-r from-gray-900 via-blue-800 to-purple-900 dark:from-white dark:via-blue-400 dark:to-purple-400 bg-clip-text text-transparent">
                    Our Services
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Comprehensive digital solutions tailored to your business needs
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <div
                    v-for="(service, index) in services"
                    :key="index"
                    class="group relative"
                >
                    <div class="h-full bg-gradient-to-br from-white to-gray-50 dark:from-gray-800 dark:to-gray-900 rounded-3xl p-8 shadow-xl border border-gray-200/50 dark:border-gray-700/50 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                        <!-- Icon -->
                        <div class="mb-6">
                            <div :class="['w-16 h-16 bg-gradient-to-br rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-500', service.color]">
                                <!-- Brand Icon -->
                                <svg v-if="service.icon === 'brand'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                                </svg>

                                <!-- Design Icon -->
                                <svg v-if="service.icon === 'design'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                                </svg>

                                <!-- Social Icon -->
                                <svg v-if="service.icon === 'social'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                                </svg>

                                <!-- Leads Icon -->
                                <svg v-if="service.icon === 'leads'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>

                                <!-- Website Icon -->
                                <svg v-if="service.icon === 'website'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>

                                <!-- Development Icon -->
                                <svg v-if="service.icon === 'development'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Content -->
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">
                            {{ service.title }}
                        </h3>

                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                            {{ service.description }}
                        </p>

                        <!-- Features List -->
                        <ul class="space-y-2 mb-6">
                            <li v-for="(feature, idx) in service.features" :key="idx" class="flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400">
                                <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                {{ feature }}
                            </li>
                        </ul>

                        <!-- CTA Button -->
                        <button :class="['w-full py-3 px-6 bg-gradient-to-r text-white rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1', service.color]">
                            Learn More
                        </button>

                        <!-- Hover Glow Effect -->
                        <div :class="['absolute -inset-0.5 bg-gradient-to-br rounded-3xl opacity-0 group-hover:opacity-20 blur-xl transition-all duration-500 -z-10', service.color]"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
/* Additional animations if needed */
</style>
