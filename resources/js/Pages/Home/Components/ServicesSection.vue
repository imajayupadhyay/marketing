<script setup>
import { ref } from 'vue';

const props = defineProps({
    title: {
        type: String,
        default: 'Our Services'
    },
    subtitle: {
        type: String,
        default: 'Comprehensive digital solutions tailored to your needs'
    },
    services: {
        type: Array,
        default: () => [
            {
                title: 'Web Development',
                description: 'Custom websites and web applications built with cutting-edge technologies',
                icon: 'web',
                color: 'from-blue-500 to-cyan-500',
                bgColor: 'bg-blue-50'
            },
            {
                title: 'Mobile App Development',
                description: 'Native and cross-platform mobile applications for iOS and Android',
                icon: 'mobile',
                color: 'from-purple-500 to-pink-500',
                bgColor: 'bg-purple-50'
            },
            {
                title: 'UI/UX Design',
                description: 'Beautiful, intuitive interfaces that users love to interact with',
                icon: 'design',
                color: 'from-pink-500 to-rose-500',
                bgColor: 'bg-pink-50'
            },
            {
                title: 'Digital Marketing',
                description: 'Strategic marketing campaigns that drive growth and engagement',
                icon: 'marketing',
                color: 'from-orange-500 to-red-500',
                bgColor: 'bg-orange-50'
            },
            {
                title: 'Brand Identity',
                description: 'Unique brand identities that stand out in the digital landscape',
                icon: 'brand',
                color: 'from-indigo-500 to-purple-500',
                bgColor: 'bg-indigo-50'
            },
            {
                title: 'SEO & Analytics',
                description: 'Data-driven optimization to boost your online visibility',
                icon: 'seo',
                color: 'from-green-500 to-emerald-500',
                bgColor: 'bg-green-50'
            }
        ]
    }
});

const getIconSvg = (iconType) => {
    const icons = {
        web: `
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                <line x1="8" y1="21" x2="16" y2="21"></line>
                <line x1="12" y1="17" x2="12" y2="21"></line>
            </svg>
        `,
        mobile: `
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                <line x1="12" y1="18" x2="12.01" y2="18"></line>
            </svg>
        `,
        design: `
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
                <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
                <path d="M2 2l7.586 7.586"></path>
                <circle cx="11" cy="11" r="2"></circle>
            </svg>
        `,
        marketing: `
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 3v18h18"></path>
                <path d="M18.7 8l-5.1 5.2-2.8-2.7L7 14.3"></path>
            </svg>
        `,
        brand: `
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
            </svg>
        `,
        seo: `
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <path d="M21 21l-4.35-4.35"></path>
                <path d="M11 8v6"></path>
                <path d="M8 11h6"></path>
            </svg>
        `
    };
    return icons[iconType] || icons.web;
};
</script>

<template>
    <section id="services" class="py-24 bg-white dark:bg-gray-900 relative overflow-hidden transition-colors duration-300">
        <!-- Decorative Background -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-40 w-96 h-96 bg-gradient-to-br from-blue-100 to-cyan-100 dark:from-blue-900 dark:to-cyan-900 rounded-full opacity-40 blur-3xl"></div>
            <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-br from-purple-100 to-pink-100 dark:from-purple-900 dark:to-pink-900 rounded-full opacity-40 blur-3xl"></div>
        </div>

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

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <div
                    v-for="(service, index) in services"
                    :key="index"
                    class="group relative bg-white dark:bg-gray-800 rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-100 dark:border-gray-700 overflow-hidden"
                >
                    <!-- Background Accent -->
                    <div :class="['absolute top-0 right-0 w-32 h-32 rounded-full opacity-0 group-hover:opacity-100 blur-2xl transition-all duration-500 -z-0', service.bgColor]"></div>

                    <!-- Icon Container -->
                    <div class="relative mb-6">
                        <div :class="['w-16 h-16 bg-gradient-to-br rounded-2xl flex items-center justify-center text-white shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-500', service.color]">
                            <div class="w-8 h-8" v-html="getIconSvg(service.icon)"></div>
                        </div>
                    </div>

                    <!-- Content -->
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 group-hover:text-gray-700 dark:group-hover:text-gray-300 transition-colors duration-300">
                        {{ service.title }}
                    </h3>

                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                        {{ service.description }}
                    </p>

                    <!-- Learn More Link -->
                    <a
                        href="#"
                        :class="['inline-flex items-center font-semibold text-transparent bg-clip-text bg-gradient-to-r transition-all duration-300 group-hover:gap-2', service.color]"
                    >
                        <span>Learn More</span>
                        <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>

                    <!-- Decorative Corner -->
                    <div class="absolute bottom-0 right-0 w-24 h-24 opacity-5 group-hover:opacity-10 transition-opacity duration-500">
                        <svg viewBox="0 0 100 100" fill="currentColor" class="text-gray-900">
                            <circle cx="80" cy="80" r="40"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="mt-20 text-center">
                <p class="text-xl text-gray-700 dark:text-gray-300 mb-8 font-medium">
                    Ready to transform your digital presence?
                </p>
                <a
                    href="#contact"
                    class="inline-block px-10 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300"
                >
                    Start Your Project
                    <svg class="inline-block w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
</template>
