<script setup>
const offerings = [
    {
        title: 'Custom Development',
        description: 'Tailored web applications built from scratch to meet your unique business requirements and goals.',
        icon: 'custom',
        color: 'from-indigo-500 to-blue-500',
        features: ['Custom solutions', 'Scalable architecture', 'Clean code', 'Best practices']
    },
    {
        title: 'API Integration',
        description: 'Seamlessly connect your application with third-party services, payment gateways, and external APIs.',
        icon: 'api',
        color: 'from-blue-500 to-cyan-500',
        features: ['RESTful APIs', 'GraphQL', 'Webhooks', 'Authentication']
    },
    {
        title: 'Database Design',
        description: 'Robust database architecture that ensures data integrity, security, and optimal performance.',
        icon: 'database',
        color: 'from-cyan-500 to-teal-500',
        features: ['Schema design', 'Optimization', 'Migrations', 'Backups']
    },
    {
        title: 'Cloud Deployment',
        description: 'Deploy and scale your applications on leading cloud platforms with automated CI/CD pipelines.',
        icon: 'cloud',
        color: 'from-teal-500 to-green-500',
        features: ['AWS & Azure', 'Auto-scaling', 'Load balancing', 'Monitoring']
    },
    {
        title: 'Progressive Web Apps',
        description: 'Build fast, reliable web applications that work offline and provide native app-like experiences.',
        icon: 'pwa',
        color: 'from-green-500 to-indigo-500',
        features: ['Offline support', 'Push notifications', 'Fast loading', 'App-like feel']
    },
    {
        title: 'Maintenance & Support',
        description: 'Ongoing maintenance, updates, and technical support to keep your application running smoothly.',
        icon: 'support',
        color: 'from-indigo-600 to-blue-600',
        features: ['Bug fixes', 'Security patches', 'Performance tuning', '24/7 support']
    }
];
</script>

<template>
    <section class="py-24 bg-white dark:bg-gray-900 relative overflow-hidden transition-colors duration-300">
        <!-- Background Decoration -->
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-0 w-96 h-96 bg-gradient-to-br from-indigo-100 to-blue-100 dark:from-indigo-900/10 dark:to-blue-900/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-1/4 right-0 w-96 h-96 bg-gradient-to-br from-blue-100 to-indigo-100 dark:from-blue-900/10 dark:to-indigo-900/10 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16 space-y-4">
                <div class="inline-block px-4 py-2 bg-gradient-to-r from-indigo-500/10 to-blue-500/10 dark:from-indigo-500/20 dark:to-blue-500/20 rounded-full">
                    <span class="text-sm font-semibold bg-gradient-to-r from-indigo-600 to-blue-600 dark:from-indigo-400 dark:to-blue-400 bg-clip-text text-transparent">
                        WHAT WE DELIVER
                    </span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-gray-900 via-indigo-800 to-blue-800 dark:from-white dark:via-indigo-400 dark:to-blue-400 bg-clip-text text-transparent">
                    Complete Development Solutions
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Full-stack development services to bring your vision to life
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
                                <!-- Custom Icon -->
                                <svg v-if="offering.icon === 'custom'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                                </svg>

                                <!-- API Icon -->
                                <svg v-if="offering.icon === 'api'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>

                                <!-- Database Icon -->
                                <svg v-if="offering.icon === 'database'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                                </svg>

                                <!-- Cloud Icon -->
                                <svg v-if="offering.icon === 'cloud'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                                </svg>

                                <!-- PWA Icon -->
                                <svg v-if="offering.icon === 'pwa'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>

                                <!-- Support Icon -->
                                <svg v-if="offering.icon === 'support'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
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
