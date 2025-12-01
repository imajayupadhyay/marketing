<script setup>
import { Head } from '@inertiajs/vue3';
import Header from '@/Components/Layout/Header.vue';
import Footer from '@/Components/Layout/Footer.vue';
import WebsiteHero from './Components/WebsiteHero.vue';
import WebsiteOfferings from './Components/WebsiteOfferings.vue';
import WebsiteProcess from './Components/WebsiteProcess.vue';
import WebsiteCTA from './Components/WebsiteCTA.vue';
</script>

<template>
    <Head title="Website Design - Build Stunning, High-Performance Websites" />

    <div class="min-h-screen bg-white dark:bg-gray-900 transition-colors duration-300">
        <Header />

        <!-- Hero Section -->
        <WebsiteHero />

        <!-- What We Offer Section -->
        <WebsiteOfferings />

        <!-- Our Process Section -->
        <WebsiteProcess />

        <!-- CTA Section -->
        <WebsiteCTA />

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
