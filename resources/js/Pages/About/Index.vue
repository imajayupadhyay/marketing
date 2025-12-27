<script setup>
import { Head } from '@inertiajs/vue3';
import Header from '@/Components/Layout/Header.vue';
import Footer from '@/Components/Layout/Footer.vue';
import AboutHero from './Components/AboutHero.vue';
import OurStory from './Components/OurStory.vue';
import MissionVision from './Components/MissionVision.vue';
import CoreValues from './Components/CoreValues.vue';
import TeamSection from './Components/TeamSection.vue';
import WhyChooseUs from './Components/WhyChooseUs.vue';
</script>

<template>
    <Head>
        <!-- Primary Meta Tags -->
        <title>About DXD PixelWork - Leading Digital Agency | Our Story, Mission & Values</title>
        <meta name="title" content="About DXD PixelWork - Leading Digital Agency | Our Story, Mission & Values" />
        <meta name="description" content="Learn about DXD PixelWork - a leading digital agency transforming businesses through innovative solutions. Discover our story, mission, vision, core values, and expert team dedicated to your success." />
        <meta name="keywords" content="about DXD PixelWork, digital agency, our story, our mission, company values, expert team, digital transformation, about us, agency culture, innovation" />
        <meta name="author" content="DXD PixelWork" />
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />

        <!-- Canonical URL -->
        <link rel="canonical" href="https://dxdpixelwork.com/about" />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://dxdpixelwork.com/about" />
        <meta property="og:title" content="About DXD PixelWork - Leading Digital Agency" />
        <meta property="og:description" content="Learn about our story, mission, and the expert team transforming businesses through innovative digital solutions." />
        <meta property="og:image" content="https://dxdpixelwork.com/dxd%20logo.png" />
        <meta property="og:site_name" content="DXD PixelWork" />

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:url" content="https://dxdpixelwork.com/about" />
        <meta name="twitter:title" content="About DXD PixelWork - Leading Digital Agency" />
        <meta name="twitter:description" content="Discover our story, mission, values, and expert team dedicated to transforming businesses through digital innovation." />
        <meta name="twitter:image" content="https://dxdpixelwork.com/dxd%20logo.png" />
    </Head>

    <div class="min-h-screen bg-white dark:bg-gray-900 transition-colors duration-300">
        <Header />

        <!-- Hero Section -->
        <AboutHero />

        <!-- Our Story Section -->
        <OurStory />

        <!-- Mission & Vision Section -->
        <MissionVision />

        <!-- Core Values Section -->
        <CoreValues />

        <!-- Team Section -->
        <TeamSection />

        <!-- Why Choose Us Section -->
        <WhyChooseUs />

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
