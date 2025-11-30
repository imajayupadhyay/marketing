<script setup>
import { Head } from '@inertiajs/vue3';
import Header from '@/Components/Layout/Header.vue';
import Footer from '@/Components/Layout/Footer.vue';
import SocialHero from './Components/SocialHero.vue';
import SocialOfferings from './Components/SocialOfferings.vue';
import SocialProcess from './Components/SocialProcess.vue';
import SocialCTA from './Components/SocialCTA.vue';
</script>

<template>
    <Head title="Social Media Management - Build & Engage Your Community" />

    <div class="min-h-screen bg-white dark:bg-gray-900 transition-colors duration-300">
        <Header />

        <!-- Hero Section -->
        <SocialHero />

        <!-- What We Offer Section -->
        <SocialOfferings />

        <!-- Our Process Section -->
        <SocialProcess />

        <!-- CTA Section -->
        <SocialCTA />

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
