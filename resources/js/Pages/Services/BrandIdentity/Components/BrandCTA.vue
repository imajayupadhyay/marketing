<script setup>
</script>

<template>
    <section class="py-24 bg-gradient-to-br from-blue-600 via-cyan-600 to-teal-600 dark:from-blue-900 dark:via-cyan-900 dark:to-teal-900 relative overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0">
            <!-- Gradient Orbs -->
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-white/10 rounded-full blur-3xl animate-pulse-slow"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-white/10 rounded-full blur-3xl animate-pulse-slow" style="animation-delay: 1s"></div>

            <!-- Grid Pattern -->
            <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 50px 50px;"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center space-y-8">
                <!-- Icon -->
                <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl shadow-xl animate-bounce-slow">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>

                <!-- Heading -->
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight">
                    Ready to Build Your Brand?
                </h2>

                <!-- Description -->
                <p class="text-xl md:text-2xl text-white/90 leading-relaxed max-w-3xl mx-auto">
                    Let's create a brand identity that captures attention, builds trust, and drives lasting connections with your audience.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-wrap gap-4 justify-center pt-4">
                    <a href="/contact" class="group px-8 py-4 bg-white text-blue-600 rounded-xl font-semibold shadow-xl hover:shadow-2xl hover:bg-gray-50 transition-all duration-300 hover:-translate-y-1 flex items-center gap-2">
                        Get Started Today
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                    <a href="/services" class="px-8 py-4 bg-white/10 backdrop-blur-sm text-white rounded-xl font-semibold border-2 border-white/30 hover:bg-white/20 hover:border-white/50 shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                        View All Services
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-8 pt-12 max-w-3xl mx-auto border-t border-white/20">
                    <div class="text-center">
                        <div class="text-4xl md:text-5xl font-bold text-white mb-2">500+</div>
                        <div class="text-sm md:text-base text-white/80">Brands Created</div>
                    </div>
                    <div class="text-center border-x border-white/20">
                        <div class="text-4xl md:text-5xl font-bold text-white mb-2">98%</div>
                        <div class="text-sm md:text-base text-white/80">Satisfaction Rate</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl md:text-5xl font-bold text-white mb-2">10+</div>
                        <div class="text-sm md:text-base text-white/80">Years Experience</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative Elements -->
        <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-white/10 rounded-full blur-2xl"></div>
        <div class="absolute -top-10 -right-10 w-40 h-40 bg-white/10 rounded-full blur-2xl"></div>
    </section>
</template>

<style scoped>
@keyframes pulse-slow {
    0%, 100% {
        opacity: 0.3;
        transform: scale(1);
    }
    50% {
        opacity: 0.5;
        transform: scale(1.05);
    }
}

@keyframes bounce-slow {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-15px);
    }
}

.animate-pulse-slow {
    animation: pulse-slow 4s ease-in-out infinite;
}

.animate-bounce-slow {
    animation: bounce-slow 2s ease-in-out infinite;
}
</style>
