<script setup>
</script>

<template>
    <section class="relative min-h-[60vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-blue-900 via-purple-900 to-pink-900 dark:from-gray-900 dark:via-blue-950 dark:to-purple-950">
        <!-- Animated Background -->
        <div class="absolute inset-0">
            <!-- Gradient Orbs -->
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-500/30 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500/30 rounded-full blur-3xl animate-float-delayed"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-pink-500/20 rounded-full blur-3xl animate-pulse-slow"></div>

            <!-- Grid Pattern -->
            <div class="absolute inset-0 bg-grid-white/[0.05] bg-[size:50px_50px]"></div>

            <!-- Overlay -->
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/10 to-black/30"></div>
        </div>

        <!-- Content -->
        <div class="container mx-auto px-6 relative z-10 text-center">
            <div class="max-w-4xl mx-auto space-y-8 animate-fade-in-up">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 dark:bg-white/5 backdrop-blur-md rounded-full border border-white/20">
                    <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                    <span class="text-sm font-medium text-white">Available for new projects</span>
                </div>

                <!-- Main Heading -->
                <h1 class="text-5xl md:text-7xl font-bold text-white leading-tight">
                    Let's Create Something
                    <span class="block mt-2 bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 bg-clip-text text-transparent">
                        Amazing Together
                    </span>
                </h1>

                <!-- Description -->
                <p class="text-xl md:text-2xl text-gray-200 max-w-2xl mx-auto leading-relaxed">
                    Have a project in mind? We'd love to hear about it. Get in touch and let's turn your vision into reality.
                </p>

                <!-- Quick Stats -->
                <div class="grid grid-cols-3 gap-8 max-w-2xl mx-auto pt-8">
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-white mb-2">&lt;24h</div>
                        <div class="text-sm text-gray-300">Response Time</div>
                    </div>
                    <div class="text-center border-x border-white/20">
                        <div class="text-3xl md:text-4xl font-bold text-white mb-2">500+</div>
                        <div class="text-sm text-gray-300">Projects Done</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-white mb-2">100%</div>
                        <div class="text-sm text-gray-300">Satisfaction</div>
                    </div>
                </div>

                <!-- Scroll Indicator -->
                <div class="pt-12 animate-bounce">
                    <svg class="w-6 h-6 mx-auto text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Decorative Wave -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg class="w-full h-24 text-gray-50 dark:text-gray-800" preserveAspectRatio="none" viewBox="0 0 1200 120" fill="currentColor">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
            </svg>
        </div>
    </section>
</template>

<style scoped>
@keyframes float {
    0%, 100% {
        transform: translate(0, 0) scale(1);
    }
    50% {
        transform: translate(30px, -30px) scale(1.1);
    }
}

@keyframes float-delayed {
    0%, 100% {
        transform: translate(0, 0) scale(1);
    }
    50% {
        transform: translate(-30px, 30px) scale(1.1);
    }
}

.animate-float {
    animation: float 20s ease-in-out infinite;
}

.animate-float-delayed {
    animation: float-delayed 25s ease-in-out infinite;
}

@keyframes pulse-slow {
    0%, 100% {
        opacity: 0.2;
        transform: translate(-50%, -50%) scale(1);
    }
    50% {
        opacity: 0.4;
        transform: translate(-50%, -50%) scale(1.1);
    }
}

.animate-pulse-slow {
    animation: pulse-slow 15s ease-in-out infinite;
}

@keyframes fade-in-up {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in-up {
    animation: fade-in-up 1s ease-out;
}

.bg-grid-white {
    background-image:
        linear-gradient(to right, rgba(255, 255, 255, 0.05) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
}
</style>
