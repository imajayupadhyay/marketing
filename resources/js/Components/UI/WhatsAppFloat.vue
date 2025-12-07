<script setup>
import { ref, onMounted } from 'vue';

// WhatsApp number (replace with your actual number)
// Format: country code + number (no spaces, no + sign)
const whatsappNumber = '1234567890'; // Replace with your actual WhatsApp number

// Pre-filled message
const defaultMessage = 'Hi! I would like to know more about your services.';

// Encode the message for URL
const encodedMessage = encodeURIComponent(defaultMessage);

// WhatsApp URL
const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;

// Animation state
const isVisible = ref(false);

// Show button after a delay
onMounted(() => {
    setTimeout(() => {
        isVisible.value = true;
    }, 1000);
});
</script>

<template>
    <!-- WhatsApp Floating Button -->
    <transition
        enter-active-class="transition ease-out duration-500 transform"
        enter-from-class="opacity-0 translate-y-10 scale-75"
        enter-to-class="opacity-100 translate-y-0 scale-100"
        leave-active-class="transition ease-in duration-300 transform"
        leave-from-class="opacity-100 translate-y-0 scale-100"
        leave-to-class="opacity-0 translate-y-10 scale-75"
    >
        <div
            v-if="isVisible"
            class="fixed bottom-6 right-6 z-50 group"
        >
            <!-- Pulse rings animation -->
            <div class="absolute inset-0 animate-ping-slow">
                <div class="absolute inset-0 bg-green-500 rounded-full opacity-75"></div>
            </div>

            <!-- Main button -->
            <a
                :href="whatsappUrl"
                target="_blank"
                rel="noopener noreferrer"
                class="relative flex items-center justify-center w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 text-white rounded-full shadow-2xl hover:shadow-green-500/50 hover:scale-110 active:scale-95 transition-all duration-300 animate-bounce-gentle"
                aria-label="Chat on WhatsApp"
            >
                <!-- WhatsApp Icon -->
                <svg
                    class="w-9 h-9 transform group-hover:scale-110 transition-transform duration-300"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                </svg>

                <!-- Notification badge (optional) -->
                <span class="absolute -top-1 -right-1 flex h-5 w-5">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-5 w-5 bg-red-500 items-center justify-center text-white text-xs font-bold">
                        1
                    </span>
                </span>
            </a>

            <!-- Tooltip -->
            <div class="absolute right-20 bottom-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                <div class="bg-gray-900 dark:bg-gray-700 text-white px-4 py-2 rounded-lg shadow-xl whitespace-nowrap">
                    <p class="text-sm font-semibold">Chat with us!</p>
                    <div class="absolute top-1/2 -right-2 -translate-y-1/2 w-0 h-0 border-t-8 border-b-8 border-l-8 border-transparent border-l-gray-900 dark:border-l-gray-700"></div>
                </div>
            </div>
        </div>
    </transition>
</template>

<style scoped>
/* Gentle bounce animation */
@keyframes bounce-gentle {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}

.animate-bounce-gentle {
    animation: bounce-gentle 2s ease-in-out infinite;
}

/* Slow ping animation */
@keyframes ping-slow {
    0% {
        transform: scale(1);
        opacity: 1;
    }
    75%, 100% {
        transform: scale(2);
        opacity: 0;
    }
}

.animate-ping-slow {
    animation: ping-slow 2s cubic-bezier(0, 0, 0.2, 1) infinite;
}
</style>
