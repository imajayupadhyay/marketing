<script setup>
const team = [
    {
        name: 'Sarah Johnson',
        role: 'CEO & Founder',
        initials: 'SJ',
        color: 'from-blue-500 to-cyan-500',
        social: {
            linkedin: '#',
            twitter: '#',
            github: '#'
        }
    },
    {
        name: 'Michael Chen',
        role: 'CTO',
        initials: 'MC',
        color: 'from-purple-500 to-pink-500',
        social: {
            linkedin: '#',
            twitter: '#',
            github: '#'
        }
    },
    {
        name: 'Emily Rodriguez',
        role: 'Head of Design',
        initials: 'ER',
        color: 'from-green-500 to-emerald-500',
        social: {
            linkedin: '#',
            twitter: '#',
            github: '#'
        }
    },
    {
        name: 'David Park',
        role: 'Lead Developer',
        initials: 'DP',
        color: 'from-orange-500 to-red-500',
        social: {
            linkedin: '#',
            twitter: '#',
            github: '#'
        }
    },
    {
        name: 'Lisa Anderson',
        role: 'Marketing Director',
        initials: 'LA',
        color: 'from-pink-500 to-rose-500',
        social: {
            linkedin: '#',
            twitter: '#',
            github: '#'
        }
    },
    {
        name: 'James Wilson',
        role: 'Product Manager',
        initials: 'JW',
        color: 'from-indigo-500 to-purple-500',
        social: {
            linkedin: '#',
            twitter: '#',
            github: '#'
        }
    }
];
</script>

<template>
    <section class="py-24 bg-gradient-to-b from-gray-50 via-white to-gray-50 dark:from-gray-800 dark:via-gray-900 dark:to-gray-800 relative overflow-hidden transition-colors duration-300">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-96 h-96 bg-gradient-to-br from-purple-100 to-pink-100 dark:from-purple-900/20 dark:to-pink-900/20 rounded-full blur-3xl opacity-50"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-20 space-y-4">
                <div class="inline-block px-4 py-2 bg-gradient-to-r from-blue-500/10 to-purple-500/10 dark:from-blue-500/20 dark:to-purple-500/20 rounded-full mb-4">
                    <span class="text-sm font-semibold bg-gradient-to-r from-blue-600 to-purple-600 dark:from-blue-400 dark:to-purple-400 bg-clip-text text-transparent">
                        MEET THE TEAM
                    </span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold bg-gradient-to-r from-gray-900 via-blue-800 to-purple-900 dark:from-white dark:via-blue-400 dark:to-purple-400 bg-clip-text text-transparent">
                    The Minds Behind the Magic
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    A diverse team of talented individuals passionate about creating exceptional digital experiences.
                </p>
            </div>

            <!-- Team Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div
                    v-for="(member, index) in team"
                    :key="index"
                    class="group relative"
                >
                    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-2xl p-8 shadow-xl border border-gray-200/50 dark:border-gray-700/50 hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
                        <!-- Avatar -->
                        <div class="relative mb-6">
                            <div :class="['w-24 h-24 mx-auto bg-gradient-to-br rounded-2xl flex items-center justify-center text-white font-bold text-3xl shadow-xl group-hover:scale-110 group-hover:rotate-6 transition-all duration-500', member.color]">
                                {{ member.initials }}
                            </div>

                            <!-- Glow Effect -->
                            <div :class="['absolute inset-0 bg-gradient-to-br rounded-2xl opacity-0 group-hover:opacity-50 blur-xl transition-all duration-500 mx-auto w-24 h-24', member.color]"></div>

                            <!-- Status Badge -->
                            <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                                <div class="flex items-center gap-1.5 px-3 py-1 bg-green-500 rounded-full shadow-lg">
                                    <div class="w-2 h-2 bg-white rounded-full animate-pulse"></div>
                                    <span class="text-xs font-semibold text-white">Available</span>
                                </div>
                            </div>
                        </div>

                        <!-- Info -->
                        <div class="text-center mb-6">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                                {{ member.name }}
                            </h3>
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                {{ member.role }}
                            </p>
                        </div>

                        <!-- Social Links -->
                        <div class="flex items-center justify-center gap-3">
                            <a
                                :href="member.social.linkedin"
                                class="w-10 h-10 bg-gray-100 dark:bg-gray-700 rounded-lg flex items-center justify-center hover:bg-blue-600 hover:text-white dark:hover:bg-blue-600 transition-all duration-300 group/social"
                            >
                                <svg class="w-5 h-5 text-gray-600 dark:text-gray-300 group-hover/social:text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                            <a
                                :href="member.social.twitter"
                                class="w-10 h-10 bg-gray-100 dark:bg-gray-700 rounded-lg flex items-center justify-center hover:bg-sky-500 hover:text-white dark:hover:bg-sky-500 transition-all duration-300 group/social"
                            >
                                <svg class="w-5 h-5 text-gray-600 dark:text-gray-300 group-hover/social:text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                            </a>
                            <a
                                :href="member.social.github"
                                class="w-10 h-10 bg-gray-100 dark:bg-gray-700 rounded-lg flex items-center justify-center hover:bg-gray-900 hover:text-white dark:hover:bg-gray-600 transition-all duration-300 group/social"
                            >
                                <svg class="w-5 h-5 text-gray-600 dark:text-gray-300 group-hover/social:text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </a>
                        </div>

                        <!-- Decorative Corner -->
                        <div class="absolute top-0 right-0 w-16 h-16 overflow-hidden">
                            <div :class="['absolute -top-8 -right-8 w-16 h-16 bg-gradient-to-br rounded-full opacity-20', member.color]"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Join Team CTA -->
            <div class="mt-20 text-center">
                <div class="inline-block bg-gradient-to-r from-blue-500/10 to-purple-500/10 dark:from-blue-500/20 dark:to-purple-500/20 rounded-2xl p-12 border border-blue-200/50 dark:border-blue-700/50">
                    <h3 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">
                        Want to Join Our Team?
                    </h3>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mb-6 max-w-2xl">
                        We're always looking for talented individuals who are passionate about innovation and excellence.
                    </p>
                    <a
                        href="#"
                        class="inline-flex items-center gap-2 px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl font-semibold shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300"
                    >
                        View Open Positions
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
/* Additional animations if needed */
</style>
