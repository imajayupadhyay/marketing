<script setup>
import { Head } from '@inertiajs/vue3';
import Header from '@/Components/Layout/Header.vue';
import Footer from '@/Components/Layout/Footer.vue';
import BrandHero from './Components/BrandHero.vue';
import WhatWeOffer from './Components/WhatWeOffer.vue';
import BrandProcess from './Components/BrandProcess.vue';
import BrandCTA from './Components/BrandCTA.vue';
</script>

<template>
    <Head title="Brand Identity & Strategy - Create a Powerful Brand" />

    <div class="min-h-screen bg-white dark:bg-gray-900 transition-colors duration-300">
        <Header />

        <!-- Hero Section -->
        <BrandHero />

        <!-- What We Offer Section -->
        <WhatWeOffer />

        <!-- Our Process Section -->
        <BrandProcess />

        <!-- CTA Section -->
        <BrandCTA />

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
