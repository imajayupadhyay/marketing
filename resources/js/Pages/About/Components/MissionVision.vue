<script setup>
</script>

<template>
    <section class="py-24 bg-gradient-to-b from-gray-50 via-white to-gray-50 dark:from-gray-800 dark:via-gray-900 dark:to-gray-800 relative overflow-hidden transition-colors duration-300">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-br from-purple-100 to-pink-100 dark:from-purple-900/20 dark:to-pink-900/20 rounded-full blur-3xl opacity-50"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <!-- Mission Card -->
                <div class="group">
                    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-3xl p-10 shadow-2xl border border-gray-200/50 dark:border-gray-700/50 hover:shadow-3xl transition-all duration-500 hover:-translate-y-2 h-full">
                        <!-- SVG Illustration -->
                        <div class="mb-8">
                            <svg class="w-full h-64" viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Target Circles -->
                                <circle cx="200" cy="150" r="120" stroke="url(#missionGrad1)" stroke-width="3" fill="none" opacity="0.3" class="animate-pulse"/>
                                <circle cx="200" cy="150" r="90" stroke="url(#missionGrad1)" stroke-width="3" fill="none" opacity="0.5" class="animate-pulse" style="animation-delay: 0.5s"/>
                                <circle cx="200" cy="150" r="60" stroke="url(#missionGrad1)" stroke-width="3" fill="none" opacity="0.7" class="animate-pulse" style="animation-delay: 1s"/>
                                <circle cx="200" cy="150" r="30" fill="url(#missionGrad2)" class="group-hover:scale-110 transition-transform origin-center" style="transform-box: fill-box"/>

                                <!-- Arrow hitting target -->
                                <g class="group-hover:translate-x-2 group-hover:-translate-y-2 transition-transform duration-500">
                                    <path d="M120 80 L180 140" stroke="url(#arrowGrad)" stroke-width="4" stroke-linecap="round"/>
                                    <polygon points="175,135 185,140 180,150" fill="url(#arrowGrad)"/>
                                    <circle cx="120" cy="80" r="6" fill="url(#arrowGrad)"/>
                                </g>

                                <!-- Sparkles -->
                                <circle cx="280" cy="80" r="4" fill="#3b82f6" opacity="0.6" class="animate-pulse"/>
                                <circle cx="300" cy="100" r="3" fill="#8b5cf6" opacity="0.6" class="animate-pulse" style="animation-delay: 0.3s"/>
                                <circle cx="120" cy="220" r="4" fill="#06b6d4" opacity="0.6" class="animate-pulse" style="animation-delay: 0.6s"/>

                                <defs>
                                    <linearGradient id="missionGrad1" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" style="stop-color:#3b82f6;stop-opacity:1" />
                                        <stop offset="100%" style="stop-color:#8b5cf6;stop-opacity:1" />
                                    </linearGradient>
                                    <linearGradient id="missionGrad2" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" style="stop-color:#3b82f6;stop-opacity:1" />
                                        <stop offset="100%" style="stop-color:#06b6d4;stop-opacity:1" />
                                    </linearGradient>
                                    <linearGradient id="arrowGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" style="stop-color:#ef4444;stop-opacity:1" />
                                        <stop offset="100%" style="stop-color:#f59e0b;stop-opacity:1" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>

                        <!-- Content -->
                        <div class="space-y-4">
                            <div class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-blue-500/10 to-cyan-500/10 dark:from-blue-500/20 dark:to-cyan-500/20 rounded-full">
                                <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                <span class="text-sm font-semibold bg-gradient-to-r from-blue-600 to-cyan-600 dark:from-blue-400 dark:to-cyan-400 bg-clip-text text-transparent">
                                    OUR MISSION
                                </span>
                            </div>

                            <h3 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white">
                                Empowering Businesses Through Innovation
                            </h3>

                            <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
                                Our mission is to empower businesses of all sizes by delivering cutting-edge digital solutions that drive growth, enhance user experiences, and create lasting impact in the digital landscape.
                            </p>

                            <ul class="space-y-3 pt-4">
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Deliver exceptional value to every client</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Innovate continuously with latest technologies</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Build long-term partnerships based on trust</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Vision Card -->
                <div class="group">
                    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-3xl p-10 shadow-2xl border border-gray-200/50 dark:border-gray-700/50 hover:shadow-3xl transition-all duration-500 hover:-translate-y-2 h-full">
                        <!-- SVG Illustration -->
                        <div class="mb-8">
                            <svg class="w-full h-64" viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Telescope/Binoculars -->
                                <g class="group-hover:scale-105 transition-transform origin-center" style="transform-box: fill-box">
                                    <rect x="100" y="100" width="200" height="100" rx="50" fill="url(#visionGrad1)"/>
                                    <circle cx="150" cy="150" r="40" fill="url(#visionGrad2)"/>
                                    <circle cx="250" cy="150" r="40" fill="url(#visionGrad2)"/>
                                    <circle cx="150" cy="150" r="25" fill="white" opacity="0.3"/>
                                    <circle cx="250" cy="150" r="25" fill="white" opacity="0.3"/>
                                    <rect x="190" y="140" width="20" height="20" rx="3" fill="url(#visionGrad3)"/>
                                </g>

                                <!-- Stars/Light rays -->
                                <g opacity="0.8">
                                    <path d="M80 50 L85 60 L95 65 L85 70 L80 80 L75 70 L65 65 L75 60 Z" fill="#fbbf24" class="animate-pulse"/>
                                    <path d="M320 40 L323 47 L330 50 L323 53 L320 60 L317 53 L310 50 L317 47 Z" fill="#8b5cf6" class="animate-pulse" style="animation-delay: 0.5s"/>
                                    <path d="M340 200 L343 207 L350 210 L343 213 L340 220 L337 213 L330 210 L337 207 Z" fill="#3b82f6" class="animate-pulse" style="animation-delay: 1s"/>
                                </g>

                                <!-- Vision lines -->
                                <line x1="150" y1="110" x2="150" y2="30" stroke="url(#lineGrad)" stroke-width="2" stroke-dasharray="5,5" opacity="0.5" class="animate-pulse"/>
                                <line x1="250" y1="110" x2="280" y2="30" stroke="url(#lineGrad)" stroke-width="2" stroke-dasharray="5,5" opacity="0.5" class="animate-pulse" style="animation-delay: 0.3s"/>
                                <circle cx="150" cy="30" r="5" fill="#3b82f6" class="animate-pulse"/>
                                <circle cx="280" cy="30" r="5" fill="#8b5cf6" class="animate-pulse" style="animation-delay: 0.3s"/>

                                <defs>
                                    <linearGradient id="visionGrad1" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" style="stop-color:#8b5cf6;stop-opacity:1" />
                                        <stop offset="100%" style="stop-color:#ec4899;stop-opacity:1" />
                                    </linearGradient>
                                    <linearGradient id="visionGrad2" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" style="stop-color:#1e293b;stop-opacity:1" />
                                        <stop offset="100%" style="stop-color:#334155;stop-opacity:1" />
                                    </linearGradient>
                                    <linearGradient id="visionGrad3" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" style="stop-color:#fbbf24;stop-opacity:1" />
                                        <stop offset="100%" style="stop-color:#f59e0b;stop-opacity:1" />
                                    </linearGradient>
                                    <linearGradient id="lineGrad" x1="0%" y1="0%" x2="0%" y2="100%">
                                        <stop offset="0%" style="stop-color:#3b82f6;stop-opacity:1" />
                                        <stop offset="100%" style="stop-color:#8b5cf6;stop-opacity:1" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>

                        <!-- Content -->
                        <div class="space-y-4">
                            <div class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-purple-500/10 to-pink-500/10 dark:from-purple-500/20 dark:to-pink-500/20 rounded-full">
                                <svg class="w-5 h-5 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                                <span class="text-sm font-semibold bg-gradient-to-r from-purple-600 to-pink-600 dark:from-purple-400 dark:to-pink-400 bg-clip-text text-transparent">
                                    OUR VISION
                                </span>
                            </div>

                            <h3 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white">
                                Leading the Future of Digital Transformation
                            </h3>

                            <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
                                We envision a future where technology seamlessly integrates with human creativity to solve complex challenges, creating digital experiences that are not just functional, but truly transformative.
                            </p>

                            <ul class="space-y-3 pt-4">
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-purple-600 dark:text-purple-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Be the most trusted digital partner globally</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-purple-600 dark:text-purple-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Pioneer next-gen digital solutions</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-purple-600 dark:text-purple-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Shape the digital landscape of tomorrow</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
/* Additional animations if needed */
</style>
