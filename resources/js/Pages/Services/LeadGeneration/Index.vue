<script setup>
import { Head } from '@inertiajs/vue3';
import Header from '@/Components/Layout/Header.vue';
import Footer from '@/Components/Layout/Footer.vue';
import LeadHero from './Components/LeadHero.vue';
import LeadOfferings from './Components/LeadOfferings.vue';
import LeadProcess from './Components/LeadProcess.vue';
import LeadCTA from './Components/LeadCTA.vue';
</script>

<template>
    <Head title="Lead Generation - Drive Qualified Leads & Growth" />

    <div class="min-h-screen bg-white dark:bg-gray-900 transition-colors duration-300">
        <Header />

        <!-- Hero Section -->
        <LeadHero />

        <!-- What We Offer Section -->
        <LeadOfferings />

        <!-- Our Process Section -->
        <LeadProcess />

        <!-- CTA Section -->
        <LeadCTA />

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
