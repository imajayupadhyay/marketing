<script setup>
const offerings = [
    {
        title: 'Responsive Design',
        description: 'Perfect viewing experience across all devices - from desktop to mobile. Your website adapts seamlessly to any screen size.',
        icon: 'responsive',
        color: 'from-orange-500 to-red-500',
        features: ['Mobile-first approach', 'Cross-browser compatible', 'Touch-optimized', 'Flexible layouts']
    },
    {
        title: 'E-commerce Solutions',
        description: 'Full-featured online stores with secure payment processing, inventory management, and seamless checkout experiences.',
        icon: 'ecommerce',
        color: 'from-red-500 to-rose-500',
        features: ['Shopping cart', 'Payment gateway', 'Product catalog', 'Order management']
    },
    {
        title: 'CMS Integration',
        description: 'Easy-to-use content management systems that empower you to update your website without technical knowledge.',
        icon: 'cms',
        color: 'from-rose-500 to-pink-500',
        features: ['WordPress', 'Custom CMS', 'User-friendly', 'Content scheduling']
    },
    {
        title: 'Performance Optimization',
        description: 'Lightning-fast loading speeds that improve user experience and boost your search engine rankings.',
        icon: 'performance',
        color: 'from-pink-500 to-purple-500',
        features: ['Image optimization', 'Code minification', 'Caching strategies', 'CDN integration']
    },
    {
        title: 'SEO Foundation',
        description: 'Built with search engines in mind. Proper structure, metadata, and optimization for maximum visibility.',
        icon: 'seo',
        color: 'from-purple-500 to-orange-500',
        features: ['Meta tags', 'Schema markup', 'XML sitemaps', 'Clean URLs']
    },
    {
        title: 'Ongoing Maintenance',
        description: 'Keep your website secure, updated, and running smoothly with our comprehensive maintenance services.',
        icon: 'maintenance',
        color: 'from-orange-600 to-red-600',
        features: ['Security updates', 'Bug fixes', 'Performance monitoring', 'Content updates']
    }
];
</script>

<template>
    <section class="py-24 bg-white dark:bg-gray-900 relative overflow-hidden transition-colors duration-300">
        <!-- Background Decoration -->
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-0 w-96 h-96 bg-gradient-to-br from-orange-100 to-red-100 dark:from-orange-900/10 dark:to-red-900/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-1/4 right-0 w-96 h-96 bg-gradient-to-br from-red-100 to-orange-100 dark:from-red-900/10 dark:to-orange-900/10 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16 space-y-4">
                <div class="inline-block px-4 py-2 bg-gradient-to-r from-orange-500/10 to-red-500/10 dark:from-orange-500/20 dark:to-red-500/20 rounded-full">
                    <span class="text-sm font-semibold bg-gradient-to-r from-orange-600 to-red-600 dark:from-orange-400 dark:to-red-400 bg-clip-text text-transparent">
                        WHAT WE DELIVER
                    </span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-gray-900 via-orange-800 to-red-800 dark:from-white dark:via-orange-400 dark:to-red-400 bg-clip-text text-transparent">
                    Complete eCommerce Solutions
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Powerful online stores that convert visitors into customers
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
                                <!-- Responsive Icon -->
                                <svg v-if="offering.icon === 'responsive'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>

                                <!-- E-commerce Icon -->
                                <svg v-if="offering.icon === 'ecommerce'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>

                                <!-- CMS Icon -->
                                <svg v-if="offering.icon === 'cms'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>

                                <!-- Performance Icon -->
                                <svg v-if="offering.icon === 'performance'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>

                                <!-- SEO Icon -->
                                <svg v-if="offering.icon === 'seo'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>

                                <!-- Maintenance Icon -->
                                <svg v-if="offering.icon === 'maintenance'" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
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
