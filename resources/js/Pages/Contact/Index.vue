<script setup>
import { Head } from '@inertiajs/vue3';
import Header from '@/Components/Layout/Header.vue';
import Footer from '@/Components/Layout/Footer.vue';
import ContactForm from './Components/ContactForm.vue';
import ContactInfo from './Components/ContactInfo.vue';
</script>

<template>
    <Head>
        <!-- Primary Meta Tags -->
        <title>Contact Us - Get In Touch with DXD PixelWork | Start Your Project Today</title>
        <meta name="title" content="Contact Us - Get In Touch with DXD PixelWork | Start Your Project Today" />
        <meta name="description" content="Ready to transform your business? Contact DXD PixelWork today. Get in touch for web development, UI/UX design, branding, and digital marketing services. Free consultation available." />
        <meta name="keywords" content="contact DXD PixelWork, get in touch, contact us, request quote, free consultation, digital agency contact, project inquiry, business inquiry" />
        <meta name="author" content="DXD PixelWork" />
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />

        <!-- Canonical URL -->
        <link rel="canonical" href="https://dxdpixelwork.com/contact" />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://dxdpixelwork.com/contact" />
        <meta property="og:title" content="Contact Us - Get In Touch with DXD PixelWork" />
        <meta property="og:description" content="Ready to start your project? Contact our team for a free consultation. Let's create something amazing together." />
        <meta property="og:image" content="https://dxdpixelwork.com/dxd%20logo.png" />
        <meta property="og:site_name" content="DXD PixelWork" />

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:url" content="https://dxdpixelwork.com/contact" />
        <meta name="twitter:title" content="Contact Us - Get In Touch with DXD PixelWork" />
        <meta name="twitter:description" content="Ready to start your project? Contact our team today. Free consultation available." />
        <meta name="twitter:image" content="https://dxdpixelwork.com/dxd%20logo.png" />
    </Head>

    <div class="min-h-screen bg-white dark:bg-gray-900 transition-colors duration-300">
        <Header />

        <!-- Main Contact Section -->
        <section class="pt-32 pb-24 bg-gradient-to-b from-gray-50 via-white to-gray-50 dark:from-gray-800 dark:via-gray-900 dark:to-gray-800 relative overflow-hidden transition-colors duration-300">
            <!-- Animated Background Elements -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-gradient-to-br from-blue-400/20 to-purple-400/20 dark:from-blue-600/10 dark:to-purple-600/10 rounded-full opacity-60 blur-3xl animate-pulse-slow"></div>
                <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-gradient-to-br from-purple-400/20 to-pink-400/20 dark:from-purple-600/10 dark:to-pink-600/10 rounded-full opacity-60 blur-3xl animate-pulse-slow" style="animation-delay: 1s;"></div>
            </div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                    <!-- Contact Info -->
                    <ContactInfo />

                    <!-- Contact Form -->
                    <ContactForm />
                </div>
            </div>
        </section>

        <!-- Footer -->
        <Footer />
    </div>
</template>

<style scoped>
@keyframes pulse-slow {
    0%, 100% {
        opacity: 0.6;
        transform: scale(1);
    }
    50% {
        opacity: 0.8;
        transform: scale(1.05);
    }
}

.animate-pulse-slow {
    animation: pulse-slow 8s ease-in-out infinite;
}
</style>
