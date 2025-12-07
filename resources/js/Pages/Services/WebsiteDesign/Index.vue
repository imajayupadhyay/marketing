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
    <Head>
        <!-- Primary Meta Tags -->
        <title>Website Design Services - Build Stunning High-Performance Websites | DXD PixelWork</title>
        <meta name="title" content="Website Design Services - Build Stunning High-Performance Websites | DXD PixelWork" />
        <meta name="description" content="Build stunning websites that convert visitors into customers. Professional website design services including responsive design, e-commerce design, landing pages, and WordPress design. SEO-optimized and mobile-friendly." />
        <meta name="keywords" content="website design, web design services, responsive web design, e-commerce website design, landing page design, WordPress design, professional website design, mobile-friendly design, custom website design" />
        <meta name="author" content="DXD PixelWork" />
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />

        <!-- Canonical URL -->
        <link rel="canonical" href="https://dxdpixelwork.com/services/website-design" />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://dxdpixelwork.com/services/website-design" />
        <meta property="og:title" content="Website Design Services - Build Stunning High-Performance Websites" />
        <meta property="og:description" content="Build stunning websites that convert visitors into customers. Professional, responsive, and SEO-optimized website design." />
        <meta property="og:image" content="https://dxdpixelwork.com/dxd%20logo.png" />
        <meta property="og:site_name" content="DXD PixelWork" />

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:url" content="https://dxdpixelwork.com/services/website-design" />
        <meta name="twitter:title" content="Website Design Services - Build Stunning High-Performance Websites" />
        <meta name="twitter:description" content="Stunning designs | High performance | Conversion-focused | SEO-optimized | Mobile-friendly." />
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
            "name": "Website Design",
            "item": "https://dxdpixelwork.com/services/website-design"
          }]
        }
        </script>
    </Head>

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
