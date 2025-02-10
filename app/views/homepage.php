<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>veilleHub - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#F6F8F7]">
    <!-- Header -->
    <header class="bg-white shadow-sm" x-data="{ isOpen: false }">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <img src="../../public/assets/logo.svg" class="w-8">
                </div>
                
                <!-- Mobile menu button -->
                <button @click="isOpen = !isOpen" class="md:hidden">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                            d="M4 6h16M4 12h16M4 18h16" x-show="!isOpen"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" x-show="isOpen"/>
                    </svg>
                </button>

                <!-- Login button -->
                <div class="hidden md:flex md:items-center space-x-4">
                    <a href="/login" class="px-6 py-2 bg-black text-white rounded-full text-sm hover:bg-lime-400 hover:text-black hover:shadow-[inset_0_0_0_2px_black] transition-colors">
                        Login
                    </a>
                    <a href="/login" class="px-6 py-2 bg-black text-white rounded-full text-sm hover:bg-lime-400 hover:text-black hover:shadow-[inset_0_0_0_2px_black] transition-colors">
                        Signup
                    </a>
                </div>
            </div>

            <!-- Mobile menu -->
            <div class="absolute left-0 right-0 bg-white shadow-lg md:hidden z-50" 
                x-show="isOpen" 
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 transform -translate-y-2"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                @click.away="isOpen = false">
                <div class="px-6 pt-4 pb-4 space-y-2">
                    <a href="#" class="block py-2 text-gray-700 hover:text-gray-900">About</a>
                    <a href="#" class="block py-2 text-gray-700 hover:text-gray-900">Features</a>
                    <a href="#" class="block py-2 text-gray-700 hover:text-gray-900">Contact</a>
                    <div class="pt-2 border-t border-gray-100">
                        <a href="/login" class="block py-2 text-gray-700 hover:text-gray-900">Login</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <main>
        <div class="container mx-auto px-6 py-16 md:py-24">
            <div class="flex flex-col items-center text-center">
                <img src="../../public/assets/logo.svg" class="w-32 md:w-48 mb-8 animate-float">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
                    Welcome to veilleHub
                </h1>
                <p class="text-xl text-gray-600 mb-8 max-w-2xl">
                    Your central hub for managing and sharing technical presentations. Collaborate, learn, and grow together.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="/login" class="px-8 py-3 bg-black text-white rounded-full text-lg hover:bg-lime-400 hover:text-black hover:shadow-[inset_0_0_0_2px_black] transition-colors">
                        Get Started
                    </a>
                    <a href="#learn-more" class="px-8 py-3 bg-white text-black rounded-full text-lg border-2 border-black hover:bg-black hover:text-white transition-colors">
                        Learn More
                    </a>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="bg-white py-16">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12">Key Features</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="p-6 rounded-xl bg-gradient-to-br from-blue-50 to-white border border-blue-100">
                        <div class="p-2 bg-blue-100 rounded-lg w-fit mb-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Easy Scheduling</h3>
                        <p class="text-gray-600">Schedule and manage your technical presentations with our intuitive calendar system.</p>
                    </div>

                    <div class="p-6 rounded-xl bg-gradient-to-br from-purple-50 to-white border border-purple-100">
                        <div class="p-2 bg-purple-100 rounded-lg w-fit mb-4">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Team Collaboration</h3>
                        <p class="text-gray-600">Work together with your peers to create and deliver impactful presentations.</p>
                    </div>

                    <div class="p-6 rounded-xl bg-gradient-to-br from-green-50 to-white border border-green-100">
                        <div class="p-2 bg-green-100 rounded-lg w-fit mb-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Track Progress</h3>
                        <p class="text-gray-600">Monitor your presentation history and track your contribution statistics.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <style>
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
    </style>
</body>
</html> 