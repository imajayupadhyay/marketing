<script setup>
const processSteps = [
    {
        number: '01',
        title: 'Requirements Analysis',
        description: 'Understand your business goals, technical requirements, and user needs to create a solid project foundation.',
        icon: 'analysis',
        color: 'from-indigo-500 to-blue-500'
    },
    {
        number: '02',
        title: 'Architecture Design',
        description: 'Design scalable system architecture, choosing the right technologies and frameworks for your needs.',
        icon: 'architecture',
        color: 'from-blue-500 to-cyan-500'
    },
    {
        number: '03',
        title: 'Development Sprint',
        description: 'Build your application using agile methodology with regular updates and iterative improvements.',
        icon: 'development',
        color: 'from-cyan-500 to-teal-500'
    },
    {
        number: '04',
        title: 'Quality Assurance',
        description: 'Comprehensive testing including unit tests, integration tests, and end-to-end testing for reliability.',
        icon: 'testing',
        color: 'from-teal-500 to-green-500'
    },
    {
        number: '05',
        title: 'Deployment',
        description: 'Deploy to production with zero downtime, implementing CI/CD pipelines and monitoring systems.',
        icon: 'deployment',
        color: 'from-green-500 to-indigo-500'
    },
    {
        number: '06',
        title: 'Maintenance',
        description: 'Provide ongoing support, monitoring, updates, and optimization to ensure peak performance.',
        icon: 'maintenance',
        color: 'from-indigo-600 to-blue-600'
    }
];
</script>

<template>
    <section id="our-process" class="py-24 bg-gradient-to-b from-gray-50 to-white dark:from-gray-800 dark:to-gray-900 transition-colors duration-300">
        <div class="container mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center mb-16 space-y-4">
                <div class="inline-block px-4 py-2 bg-gradient-to-r from-indigo-500/10 to-blue-500/10 dark:from-indigo-500/20 dark:to-blue-500/20 rounded-full">
                    <span class="text-sm font-semibold bg-gradient-to-r from-indigo-600 to-blue-600 dark:from-indigo-400 dark:to-blue-400 bg-clip-text text-transparent">
                        OUR PROCESS
                    </span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-gray-900 via-indigo-800 to-blue-800 dark:from-white dark:via-indigo-400 dark:to-blue-400 bg-clip-text text-transparent">
                    How We Build Your Application
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    A proven 6-step agile process for delivering quality software
                </p>
            </div>

            <!-- Process Timeline -->
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div
                        v-for="(step, index) in processSteps"
                        :key="index"
                        class="group relative"
                    >
                        <!-- Card -->
                        <div class="relative h-full bg-white dark:bg-gray-800 rounded-3xl p-8 shadow-lg border border-gray-200 dark:border-gray-700 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                            <!-- Number Badge -->
                            <div class="absolute -top-4 -right-4">
                                <div :class="['w-16 h-16 bg-gradient-to-br rounded-2xl flex items-center justify-center shadow-xl text-white font-bold text-xl group-hover:scale-110 group-hover:rotate-12 transition-all duration-500', step.color]">
                                    {{ step.number }}
                                </div>
                            </div>

                            <!-- Icon -->
                            <div class="mb-6">
                                <div :class="['w-14 h-14 bg-gradient-to-br rounded-xl flex items-center justify-center shadow-md opacity-20 dark:opacity-30', step.color]">
                                    <!-- Analysis Icon -->
                                    <svg v-if="step.icon === 'analysis'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                    </svg>

                                    <!-- Architecture Icon -->
                                    <svg v-if="step.icon === 'architecture'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                    </svg>

                                    <!-- Development Icon -->
                                    <svg v-if="step.icon === 'development'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                    </svg>

                                    <!-- Testing Icon -->
                                    <svg v-if="step.icon === 'testing'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>

                                    <!-- Deployment Icon -->
                                    <svg v-if="step.icon === 'deployment'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                    </svg>

                                    <!-- Maintenance Icon -->
                                    <svg v-if="step.icon === 'maintenance'" class="w-7 h-7 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">
                                {{ step.title }}
                            </h3>

                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                                {{ step.description }}
                            </p>

                            <!-- Connection Line (for larger screens) -->
                            <div v-if="index < processSteps.length - 1" class="hidden lg:block absolute top-1/2 -right-8 w-8 h-0.5 bg-gradient-to-r from-indigo-300 to-transparent dark:from-indigo-700"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
