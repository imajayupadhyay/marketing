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
    <Head>
        <!-- Primary Meta Tags -->
        <title>UI/UX Design Services - Create Beautiful Intuitive Interfaces | DXD PixelWork</title>
        <meta name="title" content="UI/UX Design Services - Create Beautiful Intuitive Interfaces | DXD PixelWork" />
        <meta name="description" content="Design beautiful, intuitive interfaces that users love. Expert UI/UX design services including user research, wireframing, prototyping, visual design, and usability testing. User-centered design approach." />
        <meta name="keywords" content="UI/UX design, user interface design, user experience design, UX research, wireframing, prototyping, visual design, usability testing, mobile app design, web app design, interaction design" />
        <meta name="author" content="DXD PixelWork" />
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />

        <!-- Canonical URL -->
        <link rel="canonical" href="https://dxdpixelwork.com/services/ui-ux-design" />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://dxdpixelwork.com/services/ui-ux-design" />
        <meta property="og:title" content="UI/UX Design Services - Create Beautiful Intuitive Interfaces" />
        <meta property="og:description" content="Design beautiful, intuitive interfaces that users love. Expert UI/UX design with user-centered approach and data-driven decisions." />
        <meta property="og:image" content="https://dxdpixelwork.com/dxd%20logo.png" />
        <meta property="og:site_name" content="DXD PixelWork" />

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:url" content="https://dxdpixelwork.com/services/ui-ux-design" />
        <meta name="twitter:title" content="UI/UX Design Services - Create Beautiful Intuitive Interfaces" />
        <meta name="twitter:description" content="User-centered design approach | Beautiful interfaces | Seamless experiences. Design that users love." />
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
            "name": "UI/UX Design",
            "item": "https://dxdpixelwork.com/services/ui-ux-design"
          }]
        }
        </script>
    </Head>

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
