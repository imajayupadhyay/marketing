<script setup>
import { ref } from 'vue';

const props = defineProps({
    title: {
        type: String,
        default: 'Trusted by Industry Leaders'
    },
    subtitle: {
        type: String,
        default: 'Join hundreds of companies that trust us with their digital presence'
    },
    clients: {
        type: Array,
        default: () => [
            { name: 'TechCorp', logo: 'TC', color: 'from-blue-500 to-cyan-500' },
            { name: 'Digital Solutions', logo: 'DS', color: 'from-purple-500 to-pink-500' },
            { name: 'Innovation Labs', logo: 'IL', color: 'from-indigo-500 to-blue-500' },
            { name: 'Future Systems', logo: 'FS', color: 'from-green-500 to-emerald-500' },
            { name: 'Cloud Nine', logo: 'C9', color: 'from-orange-500 to-red-500' },
            { name: 'Data Dynamics', logo: 'DD', color: 'from-pink-500 to-rose-500' },
            { name: 'Smart Tech', logo: 'ST', color: 'from-teal-500 to-cyan-500' },
            { name: 'Pixel Perfect', logo: 'PP', color: 'from-violet-500 to-purple-500' }
        ]
    }
});
</script>

<template>
    <section class="py-24 bg-gray-50 dark:bg-gray-800 relative overflow-hidden transition-colors duration-300">
        <!-- Decorative Elements -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-blue-100 to-purple-100 dark:from-blue-900 dark:to-purple-900 rounded-full opacity-30 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-br from-purple-100 to-pink-100 dark:from-purple-900 dark:to-pink-900 rounded-full opacity-30 blur-3xl"></div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-20 space-y-4">
                <h2 class="text-5xl md:text-6xl font-bold text-gray-900 dark:text-white">
                    {{ title }}
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                    {{ subtitle }}
                </p>
            </div>

            <!-- Clients Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-6xl mx-auto mb-20">
                <div
                    v-for="(client, index) in clients"
                    :key="index"
                    class="group bg-white dark:bg-gray-700 rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3"
                >
                    <!-- Logo Container -->
                    <div class="flex items-center justify-center h-24">
                        <div class="relative">
                            <!-- SVG Logo Placeholder -->
                            <div :class="['w-20 h-20 bg-gradient-to-br rounded-2xl flex items-center justify-center text-white font-bold text-2xl shadow-lg group-hover:scale-110 group-hover:rotate-3 transition-all duration-300', client.color]">
                                {{ client.logo }}
                            </div>

                            <!-- Glow Effect -->
                            <div :class="['absolute inset-0 bg-gradient-to-br rounded-2xl opacity-0 group-hover:opacity-50 blur-xl transition-all duration-500', client.color]"></div>
                        </div>
                    </div>

                    <!-- Client Name -->
                    <div class="mt-4 text-center">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-200 group-hover:text-gray-900 dark:group-hover:text-white transition-colors duration-300">
                            {{ client.name }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="bg-white dark:bg-gray-700 rounded-2xl p-8 shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-blue-500">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-4xl font-bold text-gray-900 dark:text-white">98%</div>
                            <p class="text-gray-600 dark:text-gray-300 font-medium">Client Satisfaction</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-700 rounded-2xl p-8 shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-purple-500">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-4xl font-bold text-gray-900 dark:text-white">24/7</div>
                            <p class="text-gray-600 dark:text-gray-300 font-medium">Support Available</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-700 rounded-2xl p-8 shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-green-500">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-4xl font-bold text-gray-900 dark:text-white">50+</div>
                            <p class="text-gray-600 dark:text-gray-300 font-medium">Countries Served</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
