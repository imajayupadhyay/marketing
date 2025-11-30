<script setup>
const reasons = [
    {
        title: 'Proven Track Record',
        description: '500+ successful projects delivered across various industries with 98% client satisfaction rate.',
        stat: '500+',
        label: 'Projects',
        icon: 'chart'
    },
    {
        title: 'Expert Team',
        description: 'Highly skilled professionals with 10+ years of combined experience in cutting-edge technologies.',
        stat: '50+',
        label: 'Experts',
        icon: 'team'
    },
    {
        title: 'Innovation First',
        description: 'We stay ahead of the curve, continuously adopting the latest technologies and best practices.',
        stat: '24/7',
        label: 'Support',
        icon: 'lightning'
    },
    {
        title: 'Client-Centric Approach',
        description: 'Your success is our priority. We work closely with you to understand and exceed your expectations.',
        stat: '98%',
        label: 'Satisfaction',
        icon: 'heart'
    }
];
</script>

<template>
    <section class="py-24 bg-white dark:bg-gray-900 relative overflow-hidden transition-colors duration-300">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-br from-blue-100 to-cyan-100 dark:from-blue-900/20 dark:to-cyan-900/20 rounded-full blur-3xl opacity-50"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-20 space-y-4">
                <div class="inline-block px-4 py-2 bg-gradient-to-r from-blue-500/10 to-purple-500/10 dark:from-blue-500/20 dark:to-purple-500/20 rounded-full mb-4">
                    <span class="text-sm font-semibold bg-gradient-to-r from-blue-600 to-purple-600 dark:from-blue-400 dark:to-purple-400 bg-clip-text text-transparent">
                        WHY PARTNER WITH US
                    </span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold bg-gradient-to-r from-gray-900 via-blue-800 to-purple-900 dark:from-white dark:via-blue-400 dark:to-purple-400 bg-clip-text text-transparent">
                    Why Choose Us
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    We combine expertise, innovation, and dedication to deliver exceptional results that drive your business forward.
                </p>
            </div>

            <!-- Reasons Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
                <div
                    v-for="(reason, index) in reasons"
                    :key="index"
                    class="group relative"
                >
                    <div class="h-full bg-gradient-to-br from-white to-gray-50 dark:from-gray-800 dark:to-gray-900 rounded-3xl p-8 shadow-xl border border-gray-200/50 dark:border-gray-700/50 hover:shadow-2xl transition-all duration-500">
                        <!-- Stat Badge -->
                        <div class="flex items-start justify-between mb-6">
                            <div class="flex-1">
                                <div class="inline-flex items-center gap-3 mb-4">
                                    <!-- Chart Icon -->
                                    <div v-if="reason.icon === 'chart'" class="w-14 h-14 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                    </div>

                                    <!-- Team Icon -->
                                    <div v-if="reason.icon === 'team'" class="w-14 h-14 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                    </div>

                                    <!-- Lightning Icon -->
                                    <div v-if="reason.icon === 'lightning'" class="w-14 h-14 bg-gradient-to-br from-orange-500 to-yellow-500 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                        </svg>
                                    </div>

                                    <!-- Heart Icon -->
                                    <div v-if="reason.icon === 'heart'" class="w-14 h-14 bg-gradient-to-br from-pink-500 to-rose-500 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
                                        </svg>
                                    </div>
                                </div>

                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">
                                    {{ reason.title }}
                                </h3>
                            </div>

                            <!-- Stat -->
                            <div class="text-right ml-4">
                                <div class="text-4xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 dark:from-blue-400 dark:to-purple-400 bg-clip-text text-transparent">
                                    {{ reason.stat }}
                                </div>
                                <div class="text-sm font-medium text-gray-500 dark:text-gray-400 mt-1">
                                    {{ reason.label }}
                                </div>
                            </div>
                        </div>

                        <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
                            {{ reason.description }}
                        </p>

                        <!-- Decorative Element -->
                        <div class="absolute bottom-0 right-0 w-32 h-32 opacity-5 dark:opacity-10">
                            <svg class="w-full h-full text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="mt-20 text-center">
                <div class="inline-block bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl p-12 shadow-2xl">
                    <h3 class="text-3xl md:text-4xl font-bold text-white mb-6">
                        Ready to Start Your Project?
                    </h3>
                    <p class="text-xl text-white/90 mb-8 max-w-2xl">
                        Let's discuss how we can help transform your ideas into reality.
                    </p>
                    <div class="flex flex-wrap items-center justify-center gap-4">
                        <a
                            href="/contact"
                            class="px-8 py-4 bg-white text-blue-600 rounded-xl font-semibold shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300"
                        >
                            Get in Touch
                        </a>
                        <a
                            href="#"
                            class="px-8 py-4 bg-white/10 backdrop-blur-sm border-2 border-white text-white rounded-xl font-semibold hover:bg-white/20 transition-all duration-300"
                        >
                            View Our Work
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
/* Additional animations if needed */
</style>
