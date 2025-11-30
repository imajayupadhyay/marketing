<script setup>
import { Head } from '@inertiajs/vue3';
import Header from '@/Components/Layout/Header.vue';
import Footer from '@/Components/Layout/Footer.vue';
import UIUXHero from './Components/UIUXHero.vue';
import UIUXOfferings from './Components/UIUXOfferings.vue';
import UIUXProcess from './Components/UIUXProcess.vue';
import UIUXCTA from './Components/UIUXCTA.vue';
</script>

<template>
    <Head title="UI/UX Design - Create Experiences Users Love" />

    <div class="min-h-screen bg-white dark:bg-gray-900 transition-colors duration-300">
        <Header />

        <!-- Hero Section -->
        <UIUXHero />

        <!-- What We Offer Section -->
        <UIUXOfferings />

        <!-- Our Process Section -->
        <UIUXProcess />

        <!-- CTA Section -->
        <UIUXCTA />

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
