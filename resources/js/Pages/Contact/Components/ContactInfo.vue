<script setup>
const contactMethods = [
    {
        icon: 'email',
        title: 'Email Us',
        value: 'dxdpixelwork@gmail.com',
        link: 'mailto:dxdpixelwork@gmail.com',
        color: 'from-blue-500 to-cyan-500'
    },
    {
        icon: 'phone',
        title: 'Call Us',
        value: '+91 7428283981',
        link: 'tel:+917428283981',
        color: 'from-purple-500 to-pink-500'
    },
    {
        icon: 'location',
        title: 'Visit Us',
        value: 'Karol Bagh, New Delhi - 111005',
        link: 'https://maps.google.com',
        color: 'from-green-500 to-emerald-500'
    }
];

const socialLinks = [
    {
        name: 'Facebook',
        icon: 'facebook',
        link: 'https://www.facebook.com/profile.php?id=61585269639824',
        color: 'hover:from-blue-600 hover:to-blue-500'
    },
    {
        name: 'LinkedIn',
        icon: 'linkedin',
        link: 'https://www.linkedin.com/company/dxd-pixelwork',
        color: 'hover:from-blue-700 hover:to-blue-600'
    },
    {
        name: 'Instagram',
        icon: 'instagram',
        link: 'https://www.instagram.com/dxd_pixelwork?igsh=ZHc3Nmk3eWxiOXMy',
        color: 'hover:from-pink-600 hover:to-purple-600'
    }
];
</script>

<template>
    <div class="space-y-8">
        <!-- Header -->
        <div class="space-y-4">
            <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 dark:from-blue-400 dark:to-purple-400 bg-clip-text text-transparent">
                Get in Touch
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
                We're here to help and answer any question you might have. We look forward to hearing from you.
            </p>
        </div>

        <!-- Contact Methods -->
        <div class="space-y-4">
            <a
                v-for="method in contactMethods"
                :key="method.title"
                :href="method.link"
                target="_blank"
                class="group block p-6 bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-2xl border border-gray-200/50 dark:border-gray-700/50 hover:shadow-xl transition-all duration-300 hover:-translate-y-1"
            >
                <div class="flex items-start gap-4">
                    <!-- Icon -->
                    <div :class="['w-14 h-14 bg-gradient-to-br rounded-xl flex items-center justify-center shadow-md group-hover:scale-110 transition-transform duration-300', method.color]">
                        <!-- Email Icon -->
                        <svg v-if="method.icon === 'email'" class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <!-- Phone Icon -->
                        <svg v-if="method.icon === 'phone'" class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <!-- Location Icon -->
                        <svg v-if="method.icon === 'location'" class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>

                    <!-- Content -->
                    <div class="flex-1">
                        <h3 class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">
                            {{ method.title }}
                        </h3>
                        <p class="text-lg font-medium text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                            {{ method.value }}
                        </p>
                    </div>

                    <!-- Arrow Icon -->
                    <div class="text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-400 group-hover:translate-x-1 transition-all duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </div>
                </div>
            </a>
        </div>

        <!-- Divider -->
        <div class="relative py-4">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300 dark:border-gray-600"></div>
            </div>
            <div class="relative flex justify-center">
                <span class="px-4 bg-gray-50 dark:bg-gray-800 text-sm font-semibold text-gray-500 dark:text-gray-400">
                    FOLLOW US
                </span>
            </div>
        </div>

        <!-- Social Links -->
        <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-2xl p-8 border border-gray-200/50 dark:border-gray-700/50">
            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-6">
                Connect With Us
            </h3>

            <div class="grid grid-cols-3 gap-4">
                <a
                    v-for="social in socialLinks"
                    :key="social.name"
                    :href="social.link"
                    target="_blank"
                    rel="noopener noreferrer"
                    :class="['group flex flex-col items-center justify-center p-4 bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-700 dark:to-gray-600 rounded-xl transition-all duration-300 hover:shadow-lg hover:-translate-y-1', social.color]"
                    :aria-label="social.name"
                >
                    <!-- Facebook Icon -->
                    <svg v-if="social.icon === 'facebook'" class="w-6 h-6 text-gray-700 dark:text-white group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>

                    <!-- LinkedIn Icon -->
                    <svg v-if="social.icon === 'linkedin'" class="w-6 h-6 text-gray-700 dark:text-white group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>

                    <!-- Instagram Icon -->
                    <svg v-if="social.icon === 'instagram'" class="w-6 h-6 text-gray-700 dark:text-white group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                    </svg>

                    <span class="text-xs font-semibold text-gray-700 dark:text-white mt-2">
                        {{ social.name }}
                    </span>
                </a>
            </div>
        </div>

    </div>
</template>

<style scoped>
/* Add any additional custom styles here */
</style>
