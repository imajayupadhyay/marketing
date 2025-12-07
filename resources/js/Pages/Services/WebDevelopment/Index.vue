<script setup>
import { Head } from '@inertiajs/vue3';
import Header from '@/Components/Layout/Header.vue';
import Footer from '@/Components/Layout/Footer.vue';
import WebDevHero from './Components/WebDevHero.vue';
import WebDevOfferings from './Components/WebDevOfferings.vue';
import WebDevProcess from './Components/WebDevProcess.vue';
import WebDevCTA from './Components/WebDevCTA.vue';
</script>

<template>
    <Head>
        <!-- Primary Meta Tags -->
        <title>Web Development Services - Transform Designs into Powerful Applications | DXD PixelWork</title>
        <meta name="title" content="Web Development Services - Transform Designs into Powerful Applications | DXD PixelWork" />
        <meta name="description" content="Transform designs into powerful, scalable applications. Expert web development services including custom web apps, e-commerce development, API integration, CMS development, and progressive web apps. Modern tech stack." />
        <meta name="keywords" content="web development, custom web development, web application development, e-commerce development, API development, CMS development, progressive web apps, React development, Vue.js development, Laravel development" />
        <meta name="author" content="DXD PixelWork" />
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />

        <!-- Canonical URL -->
        <link rel="canonical" href="https://dxdpixelwork.com/services/web-development" />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://dxdpixelwork.com/services/web-development" />
        <meta property="og:title" content="Web Development Services - Transform Designs into Powerful Applications" />
        <meta property="og:description" content="Transform designs into powerful, scalable applications. Expert web development with modern tech stack and agile methodologies." />
        <meta property="og:image" content="https://dxdpixelwork.com/dxd%20logo.png" />
        <meta property="og:site_name" content="DXD PixelWork" />

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:url" content="https://dxdpixelwork.com/services/web-development" />
        <meta name="twitter:title" content="Web Development Services - Transform Designs into Powerful Applications" />
        <meta name="twitter:description" content="Powerful applications | Scalable architecture | Modern tech stack | Agile development." />
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
            "name": "Web Development",
            "item": "https://dxdpixelwork.com/services/web-development"
          }]
        }
        </script>
    </Head>

    <div class="min-h-screen bg-white dark:bg-gray-900 transition-colors duration-300">
        <Header />

        <!-- Hero Section -->
        <WebDevHero />

        <!-- What We Offer Section -->
        <WebDevOfferings />

        <!-- Our Process Section -->
        <WebDevProcess />

        <!-- CTA Section -->
        <WebDevCTA />

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
