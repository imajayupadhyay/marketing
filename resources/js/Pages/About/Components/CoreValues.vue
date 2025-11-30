<script setup>
const values = [
    {
        title: 'Innovation',
        description: 'We constantly push boundaries and explore new technologies to deliver cutting-edge solutions.',
        icon: 'lightbulb',
        color: 'from-blue-500 to-cyan-500'
    },
    {
        title: 'Excellence',
        description: 'We are committed to delivering the highest quality in everything we do, exceeding expectations.',
        icon: 'star',
        color: 'from-purple-500 to-pink-500'
    },
    {
        title: 'Integrity',
        description: 'We operate with transparency, honesty, and ethical standards in all our interactions.',
        icon: 'shield',
        color: 'from-green-500 to-emerald-500'
    },
    {
        title: 'Collaboration',
        description: 'We believe in the power of teamwork and building strong partnerships with our clients.',
        icon: 'users',
        color: 'from-orange-500 to-red-500'
    },
    {
        title: 'Creativity',
        description: 'We think outside the box to create unique and memorable digital experiences.',
        icon: 'palette',
        color: 'from-pink-500 to-rose-500'
    },
    {
        title: 'Impact',
        description: 'We focus on creating meaningful solutions that drive real business results and growth.',
        icon: 'rocket',
        color: 'from-indigo-500 to-blue-500'
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
                        WHAT WE STAND FOR
                    </span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold bg-gradient-to-r from-gray-900 via-blue-800 to-purple-900 dark:from-white dark:via-blue-400 dark:to-purple-400 bg-clip-text text-transparent">
                    Our Core Values
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    These principles guide everything we do and shape our culture, driving us to deliver exceptional results.
                </p>
            </div>

            <!-- Values Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <div
                    v-for="(value, index) in values"
                    :key="index"
                    class="group relative"
                >
                    <div class="h-full bg-gradient-to-br from-white to-gray-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl p-8 shadow-xl border border-gray-200/50 dark:border-gray-700/50 hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
                        <!-- Icon Container -->
                        <div class="mb-6">
                            <div :class="['w-16 h-16 bg-gradient-to-br rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-500', value.color]">
                                <!-- Lightbulb Icon -->
                                <svg v-if="value.icon === 'lightbulb'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>

                                <!-- Star Icon -->
                                <svg v-if="value.icon === 'star'" class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>

                                <!-- Shield Icon -->
                                <svg v-if="value.icon === 'shield'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>

                                <!-- Users Icon -->
                                <svg v-if="value.icon === 'users'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>

                                <!-- Palette Icon -->
                                <svg v-if="value.icon === 'palette'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                                </svg>

                                <!-- Rocket Icon -->
                                <svg v-if="value.icon === 'rocket'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Content -->
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">
                            {{ value.title }}
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            {{ value.description }}
                        </p>

                        <!-- Hover Glow Effect -->
                        <div :class="['absolute -inset-0.5 bg-gradient-to-br rounded-2xl opacity-0 group-hover:opacity-20 blur-xl transition-all duration-500 -z-10', value.color]"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
/* Additional animations if needed */
</style>
