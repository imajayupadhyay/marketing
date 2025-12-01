<script setup>
import { Head } from '@inertiajs/vue3';
import Header from '@/Components/Layout/Header.vue';
import Footer from '@/Components/Layout/Footer.vue';
import WebDevHero from './Components/WebDevHero.vue';
import WebDevOfferings from './Components/WebDevOfferings.vue';
import WebDevProcess from './Components/WebDevProcess.vue';
import WebDevCTA from './Components/WebDevCTA.vue';
</script>

<template>
    <Head title="Web Development - Transform Designs into Powerful Applications" />

    <div class="min-h-screen bg-white dark:bg-gray-900 transition-colors duration-300">
        <Header />

        <!-- Hero Section -->
        <WebDevHero />

        <!-- What We Offer Section -->
        <WebDevOfferings />

        <!-- Our Process Section -->
        <WebDevProcess />

        <!-- CTA Section -->
        <WebDevCTA />

        <!-- Footer -->
        <Footer />
    </div>
</template>

<style scoped>
/* Smooth scrolling */
html {
    scroll-behavior: smooth;
}
</style>
