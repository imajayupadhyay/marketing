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
    <Head>
        <!-- Primary Meta Tags -->
        <title>Lead Generation Services - Drive Qualified Leads & Business Growth | DXD PixelWork</title>
        <meta name="title" content="Lead Generation Services - Drive Qualified Leads & Business Growth | DXD PixelWork" />
        <meta name="description" content="Drive qualified leads with data-driven strategies. Expert lead generation services including PPC campaigns, landing page optimization, email marketing, conversion optimization, and lead nurturing. ROI-focused approach." />
        <meta name="keywords" content="lead generation, B2B lead generation, qualified leads, PPC campaigns, landing page optimization, email marketing, conversion optimization, lead nurturing, digital marketing, performance marketing" />
        <meta name="author" content="DXD PixelWork" />
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />

        <!-- Canonical URL -->
        <link rel="canonical" href="https://dxdpixelwork.com/services/lead-generation" />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://dxdpixelwork.com/services/lead-generation" />
        <meta property="og:title" content="Lead Generation Services - Drive Qualified Leads & Business Growth" />
        <meta property="og:description" content="Drive qualified leads with data-driven strategies. Expert lead generation with ROI-focused approach and proven methodologies." />
        <meta property="og:image" content="https://dxdpixelwork.com/dxd%20logo.png" />
        <meta property="og:site_name" content="DXD PixelWork" />

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:url" content="https://dxdpixelwork.com/services/lead-generation" />
        <meta name="twitter:title" content="Lead Generation Services - Drive Qualified Leads & Business Growth" />
        <meta name="twitter:description" content="Data-driven strategies | Qualified leads | Conversion optimization | ROI-focused approach." />
        <meta name="twitter:image" content="https://dxdpixelwork.com/dxd%20logo.png" />
    </Head>

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
