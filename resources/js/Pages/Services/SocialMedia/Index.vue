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
    <Head>
        <!-- Primary Meta Tags -->
        <title>Social Media Management Services - Build & Engage Your Community | DXD PixelWork</title>
        <meta name="title" content="Social Media Management Services - Build & Engage Your Community | DXD PixelWork" />
        <meta name="description" content="Build and engage your community with strategic social media management. Content creation, community management, social media strategy, analytics, and paid social campaigns. Grow your online presence." />
        <meta name="keywords" content="social media management, social media marketing, content creation, community management, social media strategy, Facebook marketing, Instagram marketing, LinkedIn marketing, Twitter marketing, social media analytics" />
        <meta name="author" content="DXD PixelWork" />
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />

        <!-- Canonical URL -->
        <link rel="canonical" href="https://dxdpixelwork.com/services/social-media-management" />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://dxdpixelwork.com/services/social-media-management" />
        <meta property="og:title" content="Social Media Management Services - Build & Engage Your Community" />
        <meta property="og:description" content="Build and engage your community with strategic social media management. Expert content creation, community engagement, and analytics." />
        <meta property="og:image" content="https://dxdpixelwork.com/dxd%20logo.png" />
        <meta property="og:site_name" content="DXD PixelWork" />

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:url" content="https://dxdpixelwork.com/services/social-media-management" />
        <meta name="twitter:title" content="Social Media Management Services - Build & Engage Your Community" />
        <meta name="twitter:description" content="Strategic social media management | Content creation | Community engagement | Analytics & insights." />
        <meta name="twitter:image" content="https://dxdpixelwork.com/dxd%20logo.png" />
    </Head>

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
