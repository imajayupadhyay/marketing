<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const props = defineProps({
    title: {
        type: String,
        default: 'What Our Clients Say'
    },
    subtitle: {
        type: String,
        default: 'Don\'t just take our word for it - hear from our satisfied clients'
    },
    testimonials: {
        type: Array,
        default: () => [
            {
                name: 'Sarah Johnson',
                position: 'CEO, TechStart Inc.',
                image: 'SJ',
                rating: 5,
                text: 'DXD PixelWork transformed our digital presence completely. Their team is professional, creative, and delivered beyond our expectations.',
                color: 'from-blue-500 to-cyan-500'
            },
            {
                name: 'Michael Chen',
                position: 'Founder, Digital Solutions',
                image: 'MC',
                rating: 5,
                text: 'Outstanding work! They understood our vision and brought it to life with exceptional attention to detail. Highly recommend!',
                color: 'from-purple-500 to-pink-500'
            },
            {
                name: 'Emily Rodriguez',
                position: 'Marketing Director, InnovateCo',
                image: 'ER',
                rating: 5,
                text: 'The best digital agency we\'ve worked with. Professional, responsive, and results-driven. Our ROI has increased significantly.',
                color: 'from-pink-500 to-rose-500'
            },
            {
                name: 'David Thompson',
                position: 'CTO, CloudTech',
                image: 'DT',
                rating: 5,
                text: 'Incredible team with cutting-edge expertise. They delivered our project on time and exceeded all quality expectations.',
                color: 'from-orange-500 to-red-500'
            },
            {
                name: 'Lisa Anderson',
                position: 'Product Manager, StartupXYZ',
                image: 'LA',
                rating: 5,
                text: 'Working with DXD PixelWork was a game-changer for our business. Their innovative solutions helped us scale rapidly.',
                color: 'from-indigo-500 to-blue-500'
            },
            {
                name: 'James Wilson',
                position: 'Director, GlobalCorp',
                image: 'JW',
                rating: 5,
                text: 'Exceptional service from start to finish. They truly care about their clients\' success and it shows in their work.',
                color: 'from-green-500 to-emerald-500'
            }
        ]
    }
});

const currentIndex = ref(0);
const autoplayInterval = ref(null);

const nextSlide = () => {
    currentIndex.value = (currentIndex.value + 1) % Math.ceil(props.testimonials.length / 3);
};

const prevSlide = () => {
    currentIndex.value = currentIndex.value === 0
        ? Math.ceil(props.testimonials.length / 3) - 1
        : currentIndex.value - 1;
};

const goToSlide = (index) => {
    currentIndex.value = index;
};

onMounted(() => {
    autoplayInterval.value = setInterval(() => {
        nextSlide();
    }, 5000);
});

onUnmounted(() => {
    if (autoplayInterval.value) {
        clearInterval(autoplayInterval.value);
    }
});

const getVisibleTestimonials = () => {
    const start = currentIndex.value * 3;
    return props.testimonials.slice(start, start + 3);
};
</script>

<template>
    <section class="py-24 bg-gray-50 dark:bg-gray-800 relative overflow-hidden transition-colors duration-300">
        <!-- Decorative Background -->
        <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-blue-100 to-cyan-100 dark:from-blue-900 dark:to-cyan-900 rounded-full opacity-30 blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-br from-purple-100 to-pink-100 dark:from-purple-900 dark:to-pink-900 rounded-full opacity-30 blur-3xl"></div>

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

            <!-- Testimonials Slider -->
            <div class="relative max-w-7xl mx-auto">
                <div class="overflow-hidden">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div
                            v-for="(testimonial, index) in getVisibleTestimonials()"
                            :key="index"
                            class="bg-white dark:bg-gray-700 rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 relative overflow-hidden border border-gray-100 dark:border-gray-600"
                        >
                            <!-- Decorative Top Border -->
                            <div :class="['absolute top-0 left-0 right-0 h-1 bg-gradient-to-r', testimonial.color]"></div>

                            <!-- Quote Icon -->
                            <div class="mb-6">
                                <div :class="['w-12 h-12 bg-gradient-to-br rounded-xl flex items-center justify-center', testimonial.color]">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                                    </svg>
                                </div>
                            </div>

                            <!-- Rating -->
                            <div class="flex mb-4">
                                <div v-for="star in testimonial.rating" :key="star" class="text-yellow-400">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                </div>
                            </div>

                            <!-- Testimonial Text -->
                            <p class="text-gray-700 dark:text-gray-200 mb-6 leading-relaxed">
                                "{{ testimonial.text }}"
                            </p>

                            <!-- Client Info -->
                            <div class="flex items-center mt-6 pt-6 border-t border-gray-100 dark:border-gray-600">
                                <div :class="['w-14 h-14 bg-gradient-to-br rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg', testimonial.color]">
                                    {{ testimonial.image }}
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-bold text-gray-900 dark:text-white">{{ testimonial.name }}</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-300">{{ testimonial.position }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Arrows -->
                <button
                    @click="prevSlide"
                    class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 md:-translate-x-12 w-12 h-12 bg-white dark:bg-gray-700 rounded-full shadow-xl hover:shadow-2xl flex items-center justify-center text-gray-900 dark:text-white hover:bg-gradient-to-r hover:from-blue-600 hover:to-purple-600 hover:text-white transition-all duration-300 transform hover:scale-110 border border-gray-200 dark:border-gray-600"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>

                <button
                    @click="nextSlide"
                    class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 md:translate-x-12 w-12 h-12 bg-white dark:bg-gray-700 rounded-full shadow-xl hover:shadow-2xl flex items-center justify-center text-gray-900 dark:text-white hover:bg-gradient-to-r hover:from-blue-600 hover:to-purple-600 hover:text-white transition-all duration-300 transform hover:scale-110 border border-gray-200 dark:border-gray-600"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>

            <!-- Dots Navigation -->
            <div class="flex justify-center mt-12 gap-3">
                <button
                    v-for="(dot, index) in Math.ceil(testimonials.length / 3)"
                    :key="index"
                    @click="goToSlide(index)"
                    :class="[
                        'h-3 rounded-full transition-all duration-300',
                        currentIndex === index
                            ? 'bg-gradient-to-r from-blue-600 to-purple-600 w-8'
                            : 'bg-gray-300 hover:bg-gray-400 w-3'
                    ]"
                ></button>
            </div>
        </div>
    </section>
</template>
