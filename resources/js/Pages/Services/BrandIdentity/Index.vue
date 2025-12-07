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
    <Head>
        <!-- Primary Meta Tags -->
        <title>Brand Identity & Strategy Services - Build a Powerful Brand | DXD PixelWork</title>
        <meta name="title" content="Brand Identity & Strategy Services - Build a Powerful Brand | DXD PixelWork" />
        <meta name="description" content="Create a powerful brand identity that resonates with your audience. Expert brand strategy, logo design, visual identity, and brand guidelines. 500+ brands created with 98% client satisfaction." />
        <meta name="keywords" content="brand identity design, brand strategy, logo design, visual identity, brand guidelines, corporate branding, brand development, rebranding services, brand consulting, brand positioning" />
        <meta name="author" content="DXD PixelWork" />
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />

        <!-- Canonical URL -->
        <link rel="canonical" href="https://dxdpixelwork.com/services/brand-identity" />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://dxdpixelwork.com/services/brand-identity" />
        <meta property="og:title" content="Brand Identity & Strategy Services - Build a Powerful Brand" />
        <meta property="og:description" content="Create a powerful brand identity that captures attention, builds trust, and drives lasting connections with your audience. Expert brand strategy and design services." />
        <meta property="og:image" content="https://dxdpixelwork.com/dxd%20logo.png" />
        <meta property="og:site_name" content="DXD PixelWork" />

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:url" content="https://dxdpixelwork.com/services/brand-identity" />
        <meta name="twitter:title" content="Brand Identity & Strategy Services - Build a Powerful Brand" />
        <meta name="twitter:description" content="500+ brands created | 98% client satisfaction | 10+ years experience. Create a powerful brand identity that resonates." />
        <meta name="twitter:image" content="https://dxdpixelwork.com/dxd%20logo.png" />

        <!-- Breadcrumb Schema -->
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "BreadcrumbList",
          "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://dxdpixelwork.com"
          },{
            "@type": "ListItem",
            "position": 2,
            "name": "Services",
            "item": "https://dxdpixelwork.com/services"
          },{
            "@type": "ListItem",
            "position": 3,
            "name": "Brand Identity & Strategy",
            "item": "https://dxdpixelwork.com/services/brand-identity"
          }]
        }
        </script>
    </Head>

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
