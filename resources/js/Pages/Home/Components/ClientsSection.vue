<script setup>
import { ref, computed } from 'vue';

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
            { name: 'Audio', image: '/images/clients/audio-69500965b4563.webp' },
            { name: 'Betternity', image: '/images/clients/betternity-6950096571929.webp' },
            { name: 'Cristiquw', image: '/images/clients/cristiquw-695009661a9b0.webp' },
            { name: 'DevOpsS', image: '/images/clients/devopss-6950096632479.webp' },
            { name: 'Developershala', image: '/images/clients/evelopershala-6950096684c8c.webp' },
            { name: 'ExamBinge', image: '/images/clients/exambinge-69500966b521d.webp' },
            { name: 'GreenSky', image: '/images/clients/greensky-69500966da2aa.webp' },
            { name: 'HugeDomains', image: '/images/clients/hugedomains-695009670ea82.webp' },
            { name: 'NuclearPSD', image: '/images/clients/nuclearpsd-695009673b7fe.webp' },
            { name: 'One 98', image: '/images/clients/one-98-695009676230d.webp' },
            { name: 'Plutus IAS', image: '/images/clients/plutus-ias-695009678e46f.webp' },
            { name: 'RPM', image: '/images/clients/rpm-69500967b9ef5.webp' },
            { name: 'ToolsMine', image: '/images/clients/toolsmine-69500967dbfe3.webp' },
            { name: 'DXD', image: '/images/clients/dxd-logo-6950096668e47.webp' },
            { name: 'Client Partner', image: '/images/clients/client-logo-69500965d5d86.webp' }
        ]
    }
});

// Double the clients array for seamless infinite scroll
const doubledClients = computed(() => [...props.clients, ...props.clients]);

// Split into two rows for different directions
const firstRowClients = computed(() => doubledClients.value);
const secondRowClients = computed(() => [...doubledClients.value].reverse());
</script>

<template>
    <section class="py-24 bg-gradient-to-b from-gray-50 via-white to-gray-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 relative overflow-hidden transition-colors duration-300">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-gradient-to-br from-blue-400/20 to-purple-400/20 dark:from-blue-600/10 dark:to-purple-600/10 rounded-full opacity-60 blur-3xl animate-pulse-slow"></div>
            <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-gradient-to-br from-purple-400/20 to-pink-400/20 dark:from-purple-600/10 dark:to-pink-600/10 rounded-full opacity-60 blur-3xl animate-pulse-slow" style="animation-delay: 1s;"></div>

            <!-- Animated Grid -->
            <div class="absolute inset-0 bg-grid-pattern opacity-[0.02] dark:opacity-[0.05]"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16 space-y-4 animate-fade-in">
                <div class="inline-block px-4 py-2 bg-gradient-to-r from-blue-500/10 to-purple-500/10 dark:from-blue-500/20 dark:to-purple-500/20 rounded-full mb-4">
                    <span class="text-sm font-semibold bg-gradient-to-r from-blue-600 to-purple-600 dark:from-blue-400 dark:to-purple-400 bg-clip-text text-transparent">
                        OUR CLIENTS
                    </span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 dark:from-white dark:via-gray-100 dark:to-white bg-clip-text text-transparent">
                    {{ title }}
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto leading-relaxed">
                    {{ subtitle }}
                </p>
            </div>

            <!-- Infinite Carousel - First Row (Left to Right) -->
            <div class="mb-8 relative">
                <!-- Gradient Overlays for smooth fade -->
                <div class="absolute left-0 top-0 bottom-0 w-32 bg-gradient-to-r from-gray-50 via-gray-50/80 to-transparent dark:from-gray-900 dark:via-gray-900/80 z-10"></div>
                <div class="absolute right-0 top-0 bottom-0 w-32 bg-gradient-to-l from-gray-50 via-gray-50/80 to-transparent dark:from-gray-900 dark:via-gray-900/80 z-10"></div>

                <div class="carousel-container overflow-hidden">
                    <div class="carousel-track animate-scroll-left hover:pause-animation">
                        <div
                            v-for="(client, index) in firstRowClients"
                            :key="'row1-' + index"
                            class="carousel-item group"
                        >
                            <div class="relative w-48 h-32 bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50">
                                <!-- Hover Glow Effect -->
                                <div class="absolute -inset-0.5 bg-gradient-to-br from-blue-500 to-purple-500 rounded-2xl opacity-0 group-hover:opacity-20 blur-sm transition-all duration-500 -z-10"></div>

                                <div class="flex flex-col items-center justify-center h-full">
                                    <!-- Logo Image -->
                                    <img
                                        :src="client.image"
                                        :alt="client.name"
                                        class="w-auto h-20 object-contain group-hover:scale-110 transition-all duration-500 filter brightness-0 dark:brightness-0 dark:invert opacity-70 group-hover:opacity-100"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Infinite Carousel - Second Row (Right to Left) -->
            <div class="mb-20 relative">
                <!-- Gradient Overlays -->
                <div class="absolute left-0 top-0 bottom-0 w-32 bg-gradient-to-r from-gray-50 via-gray-50/80 to-transparent dark:from-gray-900 dark:via-gray-900/80 z-10"></div>
                <div class="absolute right-0 top-0 bottom-0 w-32 bg-gradient-to-l from-gray-50 via-gray-50/80 to-transparent dark:from-gray-900 dark:via-gray-900/80 z-10"></div>

                <div class="carousel-container overflow-hidden">
                    <div class="carousel-track animate-scroll-right hover:pause-animation">
                        <div
                            v-for="(client, index) in secondRowClients"
                            :key="'row2-' + index"
                            class="carousel-item group"
                        >
                            <div class="relative w-48 h-32 bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50">
                                <!-- Hover Glow Effect -->
                                <div class="absolute -inset-0.5 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl opacity-0 group-hover:opacity-20 blur-sm transition-all duration-500 -z-10"></div>

                                <div class="flex flex-col items-center justify-center h-full">
                                    <!-- Logo Image -->
                                    <img
                                        :src="client.image"
                                        :alt="client.name"
                                        class="w-auto h-20 object-contain group-hover:scale-110 transition-all duration-500 filter brightness-0 dark:brightness-0 dark:invert opacity-70 group-hover:opacity-100"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced Stats Cards with 3D Effect -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto perspective-1000">
                <div class="stat-card group bg-gradient-to-br from-white to-gray-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50 hover-lift">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-4xl font-bold bg-gradient-to-r from-blue-600 to-cyan-600 dark:from-blue-400 dark:to-cyan-400 bg-clip-text text-transparent">98%</div>
                            <p class="text-gray-600 dark:text-gray-300 font-medium">Client Satisfaction</p>
                        </div>
                    </div>
                    <!-- Animated border gradient -->
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl opacity-0 group-hover:opacity-20 transition-opacity duration-500 -z-10"></div>
                </div>

                <div class="stat-card group bg-gradient-to-br from-white to-gray-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50 hover-lift">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-4xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 dark:from-purple-400 dark:to-pink-400 bg-clip-text text-transparent">24/7</div>
                            <p class="text-gray-600 dark:text-gray-300 font-medium">Support Available</p>
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl opacity-0 group-hover:opacity-20 transition-opacity duration-500 -z-10"></div>
                </div>

                <div class="stat-card group bg-gradient-to-br from-white to-gray-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-200/50 dark:border-gray-700/50 hover-lift">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-4xl font-bold bg-gradient-to-r from-green-600 to-emerald-600 dark:from-green-400 dark:to-emerald-400 bg-clip-text text-transparent">50+</div>
                            <p class="text-gray-600 dark:text-gray-300 font-medium">Countries Served</p>
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-r from-green-500 to-emerald-500 rounded-2xl opacity-0 group-hover:opacity-20 transition-opacity duration-500 -z-10"></div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
/* Carousel Container */
.carousel-container {
    width: 100%;
    display: flex;
    overflow: hidden;
}

.carousel-track {
    display: flex;
    gap: 2rem;
    will-change: transform;
}

.carousel-item {
    flex-shrink: 0;
}

/* Infinite Scroll Animations */
@keyframes scroll-left {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
}

@keyframes scroll-right {
    0% {
        transform: translateX(-50%);
    }
    100% {
        transform: translateX(0);
    }
}

.animate-scroll-left {
    animation: scroll-left 60s linear infinite;
}

.animate-scroll-right {
    animation: scroll-right 60s linear infinite;
}

/* Pause animation on hover */
.hover\:pause-animation:hover {
    animation-play-state: paused;
}

/* Slow Pulse Animation */
@keyframes pulse-slow {
    0%, 100% {
        opacity: 0.6;
        transform: scale(1);
    }
    50% {
        opacity: 0.8;
        transform: scale(1.05);
    }
}

.animate-pulse-slow {
    animation: pulse-slow 8s ease-in-out infinite;
}

/* Fade In Animation */
@keyframes fade-in {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in {
    animation: fade-in 1s ease-out;
}

/* 3D Hover Effect for Stats Cards */
.hover-lift {
    position: relative;
    transition: transform 0.5s ease, box-shadow 0.5s ease;
}

.hover-lift:hover {
    transform: translateY(-8px) rotateX(2deg);
}

.stat-card {
    position: relative;
    overflow: hidden;
}

/* Grid Pattern Background */
.bg-grid-pattern {
    background-image:
        linear-gradient(to right, currentColor 1px, transparent 1px),
        linear-gradient(to bottom, currentColor 1px, transparent 1px);
    background-size: 40px 40px;
}

/* Perspective for 3D effects */
.perspective-1000 {
    perspective: 1000px;
}

/* Ensure smooth animations */
* {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
</style>
