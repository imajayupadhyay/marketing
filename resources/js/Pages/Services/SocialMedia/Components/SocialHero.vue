<script setup>
import { ref, onMounted } from 'vue';

const isVisible = ref(false);

onMounted(() => {
    setTimeout(() => {
        isVisible.value = true;
    }, 100);
});
</script>

<template>
    <section class="relative pt-32 pb-24 overflow-hidden bg-gradient-to-br from-pink-50 via-white to-rose-50 dark:from-gray-900 dark:via-gray-800 dark:to-pink-900/20 transition-colors duration-300">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <!-- Gradient Orbs -->
            <div class="absolute top-20 right-1/4 w-96 h-96 bg-gradient-to-br from-pink-400/30 to-rose-400/30 dark:from-pink-600/20 dark:to-rose-600/20 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-20 left-1/4 w-96 h-96 bg-gradient-to-br from-rose-400/30 to-pink-400/30 dark:from-rose-600/20 dark:to-pink-600/20 rounded-full blur-3xl animate-float-delayed"></div>

            <!-- Dots Pattern -->
            <div class="absolute inset-0 opacity-[0.03] dark:opacity-[0.05]" style="background-image: radial-gradient(circle, currentColor 1px, transparent 1px); background-size: 30px 30px;"></div>

            <!-- Animated Social Icons -->
            <svg class="absolute inset-0 w-full h-full opacity-10 dark:opacity-5" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="socialGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#ec4899;stop-opacity:0.5" />
                        <stop offset="100%" style="stop-color:#f43f5e;stop-opacity:0.5" />
                    </linearGradient>
                </defs>
                <circle cx="100" cy="100" r="40" stroke="url(#socialGradient)" stroke-width="2" fill="none" class="animate-pulse-slow" />
                <circle cx="400" cy="150" r="30" stroke="url(#socialGradient)" stroke-width="2" fill="none" class="animate-pulse-slow" style="animation-delay: 1s" />
            </svg>
        </div>

        <div class="w-full px-6 md:px-12 lg:px-20 xl:px-32 relative z-10">
            <!-- Content Grid -->
            <div class="grid lg:grid-cols-2 gap-16 xl:gap-24 items-center max-w-[1600px] mx-auto">
                <!-- Left Content -->
                <div :class="['space-y-8 transition-all duration-1000', isVisible ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-10']">
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-pink-500/10 to-rose-500/10 dark:from-pink-500/20 dark:to-rose-500/20 rounded-full border border-pink-200/50 dark:border-pink-700/50">
                        <svg class="w-4 h-4 text-pink-600 dark:text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                        </svg>
                        <span class="text-sm font-semibold bg-gradient-to-r from-pink-600 to-rose-600 dark:from-pink-400 dark:to-rose-400 bg-clip-text text-transparent">
                            Social Media Management
                        </span>
                    </div>

                    <!-- Main Heading -->
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight">
                        <span class="bg-gradient-to-r from-gray-900 via-pink-700 to-rose-700 dark:from-white dark:via-pink-400 dark:to-rose-400 bg-clip-text text-transparent">
                            Build & Engage Your Community
                        </span>
                    </h1>

                    <!-- Description -->
                    <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 leading-relaxed">
                        Social media is one of the most powerful ways to connect with your audience, build trust, and grow your brand. Our Social Media Management services help businesses create a strong online presence and meaningful engagement.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-wrap gap-4">
                        <a href="/contact" class="group px-8 py-4 bg-gradient-to-r from-pink-600 to-rose-600 hover:from-pink-700 hover:to-rose-700 text-white rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 flex items-center gap-2">
                            Grow Your Presence
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                        <a href="#our-process" class="px-8 py-4 bg-white dark:bg-gray-800 text-gray-900 dark:text-white rounded-xl font-semibold border-2 border-gray-200 dark:border-gray-700 hover:border-pink-500 dark:hover:border-pink-400 shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                            Our Approach
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-6 pt-4">
                        <div>
                            <div class="text-3xl font-bold bg-gradient-to-r from-pink-600 to-rose-600 dark:from-pink-400 dark:to-rose-400 bg-clip-text text-transparent mb-1">250K+</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Followers Grown</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold bg-gradient-to-r from-pink-600 to-rose-600 dark:from-pink-400 dark:to-rose-400 bg-clip-text text-transparent mb-1">5M+</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Engagements</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold bg-gradient-to-r from-pink-600 to-rose-600 dark:from-pink-400 dark:to-rose-400 bg-clip-text text-transparent mb-1">100+</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Brands Managed</div>
                        </div>
                    </div>
                </div>

                <!-- Right Visual -->
                <div :class="['relative transition-all duration-1000 delay-300', isVisible ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-10']">
                    <!-- Main Card with Social Media Feed -->
                    <div class="relative">
                        <!-- Floating Card -->
                        <div class="relative bg-white dark:bg-gray-800 rounded-3xl p-8 shadow-2xl border border-gray-200 dark:border-gray-700">
                            <!-- Social Feed Mockup -->
                            <div class="space-y-6">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Social Feed Preview</h3>

                                <!-- Post Card 1 -->
                                <div class="bg-gradient-to-br from-gray-50 to-white dark:from-gray-700 dark:to-gray-600 rounded-2xl p-6 border border-gray-200 dark:border-gray-600">
                                    <!-- Post Header -->
                                    <div class="flex items-center gap-3 mb-4">
                                        <div class="w-12 h-12 bg-gradient-to-br from-pink-400 to-rose-400 rounded-full animate-pulse-slow"></div>
                                        <div class="flex-1">
                                            <div class="h-3 w-24 bg-gray-300 dark:bg-gray-500 rounded mb-2"></div>
                                            <div class="h-2 w-16 bg-gray-200 dark:bg-gray-600 rounded"></div>
                                        </div>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="space-y-2 mb-4">
                                        <div class="h-2 bg-gray-200 dark:bg-gray-600 rounded w-full"></div>
                                        <div class="h-2 bg-gray-200 dark:bg-gray-600 rounded w-5/6"></div>
                                    </div>
                                    <!-- Engagement -->
                                    <div class="flex gap-4">
                                        <div class="flex items-center gap-1">
                                            <div class="w-5 h-5 bg-pink-400 rounded-full"></div>
                                            <span class="text-xs text-gray-500 dark:text-gray-400">1.2K</span>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <div class="w-5 h-5 bg-rose-400 rounded-full"></div>
                                            <span class="text-xs text-gray-500 dark:text-gray-400">342</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Post Card 2 -->
                                <div class="bg-gradient-to-br from-gray-50 to-white dark:from-gray-700 dark:to-gray-600 rounded-2xl p-6 border border-gray-200 dark:border-gray-600 animate-pulse-slow" style="animation-delay: 1s">
                                    <!-- Post Header -->
                                    <div class="flex items-center gap-3 mb-4">
                                        <div class="w-12 h-12 bg-gradient-to-br from-rose-400 to-pink-400 rounded-full"></div>
                                        <div class="flex-1">
                                            <div class="h-3 w-24 bg-gray-300 dark:bg-gray-500 rounded mb-2"></div>
                                            <div class="h-2 w-16 bg-gray-200 dark:bg-gray-600 rounded"></div>
                                        </div>
                                    </div>
                                    <!-- Post Image Placeholder -->
                                    <div class="h-32 bg-gradient-to-br from-pink-100 to-rose-100 dark:from-pink-900/30 dark:to-rose-900/30 rounded-xl mb-4"></div>
                                    <!-- Engagement -->
                                    <div class="flex gap-4">
                                        <div class="flex items-center gap-1">
                                            <div class="w-5 h-5 bg-pink-400 rounded-full"></div>
                                            <span class="text-xs text-gray-500 dark:text-gray-400">2.4K</span>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <div class="w-5 h-5 bg-rose-400 rounded-full"></div>
                                            <span class="text-xs text-gray-500 dark:text-gray-400">567</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Social Platform Icons -->
                                <div class="flex gap-3 justify-center pt-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center shadow-md">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                        </svg>
                                    </div>
                                    <div class="w-10 h-10 bg-gradient-to-br from-pink-500 to-rose-500 rounded-lg flex items-center justify-center shadow-md">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                                        </svg>
                                    </div>
                                    <div class="w-10 h-10 bg-gradient-to-br from-sky-400 to-blue-500 rounded-lg flex items-center justify-center shadow-md">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                        </svg>
                                    </div>
                                    <div class="w-10 h-10 bg-gradient-to-br from-purple-600 to-pink-500 rounded-lg flex items-center justify-center shadow-md">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8 3C5.243 3 3 5.243 3 8v8c0 2.757 2.243 5 5 5h8c2.757 0 5-2.243 5-5V8c0-2.757-2.243-5-5-5H8zm0 2h8c1.654 0 3 1.346 3 3v8c0 1.654-1.346 3-3 3H8c-1.654 0-3-1.346-3-3V8c0-1.654 1.346-3 3-3zm9 1a1 1 0 00-1 1 1 1 0 001 1 1 1 0 001-1 1 1 0 00-1-1zm-5 1c-2.757 0-5 2.243-5 5s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5zm0 2c1.654 0 3 1.346 3 3s-1.346 3-3 3-3-1.346-3-3 1.346-3 3-3z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Elements -->
                        <div class="absolute -top-4 -right-4 w-20 h-20 bg-gradient-to-br from-pink-500 to-rose-500 rounded-2xl shadow-xl animate-float opacity-80"></div>
                        <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-gradient-to-br from-rose-500 to-pink-500 rounded-xl shadow-xl animate-float-delayed opacity-80"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
@keyframes float {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-20px);
    }
}

@keyframes float-delayed {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-20px);
    }
}

@keyframes pulse-slow {
    0%, 100% {
        opacity: 1;
        transform: scale(1);
    }
    50% {
        opacity: 0.8;
        transform: scale(0.95);
    }
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animate-float-delayed {
    animation: float-delayed 6s ease-in-out infinite;
    animation-delay: 0.5s;
}

.animate-pulse-slow {
    animation: pulse-slow 3s ease-in-out infinite;
}
</style>
