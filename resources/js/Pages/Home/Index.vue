<script setup>
import { Head } from '@inertiajs/vue3';
import Header from '@/Components/Layout/Header.vue';
import Footer from '@/Components/Layout/Footer.vue';
import HeroSection from './Components/HeroSection.vue';
import ClientsSection from './Components/ClientsSection.vue';
import ServicesSection from './Components/ServicesSection.vue';
import TestimonialsSection from './Components/TestimonialsSection.vue';
import ContactSection from './Components/ContactSection.vue';
</script>

<template>
    <Head>
        <!-- Primary Meta Tags -->
        <title>DXD PixelWork - Digital Marketing & Web Development Agency | Transform Your Business</title>
        <meta name="title" content="DXD PixelWork - Digital Marketing & Web Development Agency | Transform Your Business" />
        <meta name="description" content="Leading digital agency specializing in web development, UI/UX design, brand identity, social media management, and lead generation. Transform your business with data-driven digital solutions." />
        <meta name="keywords" content="digital marketing agency, web development, UI/UX design, brand identity, social media management, lead generation, website design, digital transformation, online marketing, SEO services" />
        <meta name="author" content="DXD PixelWork" />
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
        <meta name="language" content="English" />
        <meta name="revisit-after" content="7 days" />

        <!-- Canonical URL -->
        <link rel="canonical" href="https://dxdpixelwork.com" />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://dxdpixelwork.com" />
        <meta property="og:title" content="DXD PixelWork - Digital Marketing & Web Development Agency" />
        <meta property="og:description" content="Leading digital agency specializing in web development, UI/UX design, brand identity, social media management, and lead generation. Transform your business today." />
        <meta property="og:image" content="https://dxdpixelwork.com/dxd%20logo.png" />
        <meta property="og:image:alt" content="DXD PixelWork Logo" />
        <meta property="og:site_name" content="DXD PixelWork" />
        <meta property="og:locale" content="en_US" />

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:url" content="https://dxdpixelwork.com" />
        <meta name="twitter:title" content="DXD PixelWork - Digital Marketing & Web Development Agency" />
        <meta name="twitter:description" content="Leading digital agency specializing in web development, UI/UX design, brand identity, social media management, and lead generation." />
        <meta name="twitter:image" content="https://dxdpixelwork.com/dxd%20logo.png" />

        <!-- Additional SEO -->
        <meta name="theme-color" content="#1e40af" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    </Head>

    <div class="min-h-screen bg-white dark:bg-gray-900 transition-colors duration-300">
        <Header />

        <!-- Hero Section -->
        <HeroSection
            title="DXD PixelWork"
            subtitle="Transform Ideas Into Excellence"
            description="We create stunning digital experiences that elevate your brand and drive results. From web development to digital marketing, we're your partner in digital success."
            ctaText="Get Started"
            ctaLink="#contact"
        />

        <!-- Clients Section -->
        <ClientsSection
            title="Trusted by Industry Leaders"
            subtitle="Join hundreds of companies that trust us with their digital presence"
        />

        <!-- Services Section -->
        <ServicesSection
            title="Our Services"
            subtitle="Comprehensive digital solutions tailored to your needs"
        />

        <!-- Testimonials Section -->
        <TestimonialsSection
            title="What Our Clients Say"
            subtitle="Don't just take our word for it - hear from our satisfied clients"
        />

        <!-- Contact Section -->
        <ContactSection
            title="Get In Touch"
            subtitle="Ready to start your project? Contact us today and let's create something amazing together"
        />

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
