<script setup>
const services = [
    {
        title: 'Brand Identity & Strategy',
        description: 'Create powerful brand identities that resonate with your audience.',
        icon: 'brand',
        color: 'from-blue-500 to-cyan-500',
        href: '/services#brand-identity'
    },
    {
        title: 'UI/UX Designs',
        description: 'Design beautiful, intuitive interfaces that users love.',
        icon: 'design',
        color: 'from-purple-500 to-pink-500',
        href: '/services#ui-ux'
    },
    {
        title: 'Social Media Management',
        description: 'Build and engage your community with strategic management.',
        icon: 'social',
        color: 'from-pink-500 to-rose-500',
        href: '/services#social-media'
    },
    {
        title: 'Lead Generation',
        description: 'Drive qualified leads with data-driven strategies.',
        icon: 'leads',
        color: 'from-green-500 to-emerald-500',
        href: '/services#lead-generation'
    },
    {
        title: 'Website Design',
        description: 'Build stunning websites that convert visitors into customers.',
        icon: 'website',
        color: 'from-orange-500 to-red-500',
        href: '/services#website-design'
    },
    {
        title: 'Web Development',
        description: 'Transform designs into powerful, scalable applications.',
        icon: 'development',
        color: 'from-indigo-500 to-blue-500',
        href: '/services#web-development'
    }
];
</script>

<template>
    <!-- Hover Bridge - invisible element to prevent gap issues -->
    <div class="absolute top-full left-0 right-0 h-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible pointer-events-none group-hover:pointer-events-auto"></div>

    <!-- Mega Menu Content -->
    <div class="fixed top-[72px] left-0 right-0 w-full bg-white dark:bg-gray-900 shadow-2xl border-t border-gray-100 dark:border-gray-800 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 ease-out pointer-events-none group-hover:pointer-events-auto z-40">
        <div class="container mx-auto px-6 py-10">
            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <a
                    v-for="(service, index) in services"
                    :key="index"
                    :href="service.href"
                    class="group/item relative p-6 rounded-2xl bg-gradient-to-br from-gray-50 to-white dark:from-gray-800 dark:to-gray-900 hover:from-white hover:to-gray-50 dark:hover:from-gray-700 dark:hover:to-gray-800 border border-gray-200 dark:border-gray-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-1"
                >
                    <!-- Gradient Accent Line -->
                    <div :class="['absolute top-0 left-0 right-0 h-1 bg-gradient-to-r rounded-t-2xl opacity-0 group-hover/item:opacity-100 transition-opacity duration-300', service.color]"></div>

                    <div class="flex gap-4">
                        <!-- Icon -->
                        <div class="flex-shrink-0">
                            <div :class="['w-12 h-12 bg-gradient-to-br rounded-xl flex items-center justify-center shadow-md group-hover/item:scale-110 group-hover/item:rotate-6 transition-all duration-300', service.color]">
                                <!-- Brand Icon -->
                                <svg v-if="service.icon === 'brand'" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                                </svg>

                                <!-- Design Icon -->
                                <svg v-if="service.icon === 'design'" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                                </svg>

                                <!-- Social Icon -->
                                <svg v-if="service.icon === 'social'" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                                </svg>

                                <!-- Leads Icon -->
                                <svg v-if="service.icon === 'leads'" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>

                                <!-- Website Icon -->
                                <svg v-if="service.icon === 'website'" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>

                                <!-- Development Icon -->
                                <svg v-if="service.icon === 'development'" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="flex-1 min-w-0">
                            <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-2 group-hover/item:text-blue-600 dark:group-hover/item:text-blue-400 transition-colors duration-300">
                                {{ service.title }}
                            </h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed line-clamp-2">
                                {{ service.description }}
                            </p>
                        </div>

                        <!-- Arrow Icon -->
                        <div class="flex-shrink-0 self-center opacity-0 group-hover/item:opacity-100 -translate-x-2 group-hover/item:translate-x-0 transition-all duration-300">
                            <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Hover Glow Effect -->
                    <div :class="['absolute -inset-px bg-gradient-to-br rounded-2xl opacity-0 group-hover/item:opacity-10 blur-xl transition-all duration-300 -z-10', service.color]"></div>
                </a>
            </div>
        </div>
    </div>
</template>

<style scoped>
/* Ensure smooth hover transition */
.group:hover > div {
    z-index: 50;
}

/* Line clamp utility */
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Ensure the group maintains hover state when cursor moves to mega menu */
.group {
    position: relative;
}
</style>
