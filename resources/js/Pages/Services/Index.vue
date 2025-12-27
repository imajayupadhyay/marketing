<script setup>
import { Head } from '@inertiajs/vue3';
import Header from '@/Components/Layout/Header.vue';
import Footer from '@/Components/Layout/Footer.vue';
import ServicesHero from './Components/ServicesHero.vue';
import ServicesGrid from './Components/ServicesGrid.vue';
import ServiceProcess from './Components/ServiceProcess.vue';
import ServicesCTA from './Components/ServicesCTA.vue';
</script>

<template>
    <Head>
        <!-- Primary Meta Tags -->
        <title>Our Digital Services - Web Development, UI/UX Design & Marketing | DXD PixelWork</title>
        <meta name="title" content="Our Digital Services - Web Development, UI/UX Design & Marketing | DXD PixelWork" />
        <meta name="description" content="Explore our comprehensive digital services: Brand Identity, UI/UX Design, Social Media Management, Lead Generation, Website Design, and Web Development. Customized solutions for business growth." />
        <meta name="keywords" content="digital services, web development services, UI/UX design services, brand identity design, social media management, lead generation services, website design, custom web development, digital agency services" />
        <meta name="author" content="DXD PixelWork" />
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />

        <!-- Canonical URL -->
        <link rel="canonical" href="https://dxdpixelwork.com/services" />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://dxdpixelwork.com/services" />
        <meta property="og:title" content="Our Digital Services - Web Development, UI/UX Design & Marketing" />
        <meta property="og:description" content="Explore our comprehensive digital services including Brand Identity, UI/UX Design, Social Media Management, Lead Generation, Website Design, and Web Development." />
        <meta property="og:image" content="https://dxdpixelwork.com/dxd%20logo.png" />
        <meta property="og:site_name" content="DXD PixelWork" />

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:url" content="https://dxdpixelwork.com/services" />
        <meta name="twitter:title" content="Our Digital Services - Web Development, UI/UX Design & Marketing" />
        <meta name="twitter:description" content="6 core services customized for your business growth. 100% tailored solutions with 24/7 support." />
        <meta name="twitter:image" content="https://dxdpixelwork.com/dxd%20logo.png" />
    </Head>

    <div class="min-h-screen bg-white dark:bg-gray-900 transition-colors duration-300">
        <Header />

        <!-- Hero Section -->
        <ServicesHero />

        <!-- Services Grid Section -->
        <ServicesGrid />

        <!-- Process Section -->
        <ServiceProcess />

        <!-- CTA Section -->
        <ServicesCTA />

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
