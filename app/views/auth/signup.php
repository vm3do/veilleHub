<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Your App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-white">
    <!-- Header with absolute hamburger menu -->
    <header class="bg-white shadow-sm" x-data="{ isOpen: false }">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <!-- <span class="text-xl font-semibold">veilleHub</span> -->
                    <img src="../../../public/assets/logo.svg" class="w-8">
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

                <!-- Desktop menu -->
                <div class="hidden md:flex md:items-center md:space-x-6">
                    <a href="#" class="text-gray-700 hover:text-gray-900">Home</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900">About</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900">Contact</a>
                </div>
            </div>

            <!-- Absolute Mobile menu -->
            <div class="absolute left-0 right-0 bg-white shadow-lg md:hidden z-50" 
                x-show="isOpen" 
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 transform -translate-y-2"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                @click.away="isOpen = false">
                <div class="px-6 pt-4 pb-4 space-y-2">
                    <a href="#" class="block py-2 text-gray-700 hover:text-gray-900">Home</a>
                    <a href="#" class="block py-2 text-gray-700 hover:text-gray-900">About</a>
                    <a href="#" class="block py-2 text-gray-700 hover:text-gray-900">Contact</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main content -->
    <main class="min-h-screen flex">
        <!-- Signup form section -->
        <div class="w-full md:w-1/2 flex items-center justify-center p-6">
            <div class="w-full max-w-md">
                <h1 class="text-3xl font-bold mb-2">Create your account</h1>
                <p class="text-gray-600 mb-8">Join veilleHub today and start organizing your presentations smarter. It's free !</p>

                <form class="space-y-4">
                    <div class="flex space-x-4">
                        <div class="w-1/2">
                            <input type="text" placeholder="First Name" 
                                class="w-full px-4 py-3 rounded-full border border-gray-200 focus:border-gray-300 focus:ring-0">
                        </div>
                        <div class="w-1/2">
                            <input type="text" placeholder="Last Name" 
                                class="w-full px-4 py-3 rounded-full border border-gray-200 focus:border-gray-300 focus:ring-0">
                        </div>
                    </div>

                    <!-- User Type Selection -->
                    <div class="flex space-x-4">
                        <div class="w-1/2">
                            <label class="flex items-center p-3 rounded-full border border-gray-200 cursor-pointer hover:border-gray-300">
                                <input type="radio" name="user_type" value="student" class="mr-2">
                                <span class="text-gray-700">Student</span>
                            </label>
                        </div>
                        <div class="w-1/2">
                            <label class="flex items-center p-3 rounded-full border border-gray-200 cursor-pointer hover:border-gray-300">
                                <input type="radio" name="user_type" value="staff" class="mr-2">
                                <span class="text-gray-700">Staff</span>
                            </label>
                        </div>
                    </div>

                    <div>
                        <input type="email" placeholder="Email address" 
                            class="w-full px-4 py-3 rounded-full border border-gray-200 focus:border-gray-300 focus:ring-0">
                    </div>

                    <div class="relative">
                        <input type="password" placeholder="Create password" 
                            class="w-full px-4 py-3 rounded-full border border-gray-200 focus:border-gray-300 focus:ring-0">
                        <button type="button" class="absolute right-4 top-3.5 text-gray-400">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>

                    <div class="relative">
                        <input type="password" placeholder="Confirm password" 
                            class="w-full px-4 py-3 rounded-full border border-gray-200 focus:border-gray-300 focus:ring-0">
                        <button type="button" class="absolute right-4 top-3.5 text-gray-400">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>

                    <button type="submit" class="w-full py-3 px-4 bg-black text-white rounded-full hover:bg-lime-400 hover:text-black hover:shadow-[inset_0_0_0_2px_black] transition-colors">
                        Create Account
                    </button>

                    <div class="relative my-8">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-200"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-4 bg-white text-gray-500">or sign up with</span>
                        </div>
                    </div>

                    <div class="flex justify-center space-x-4">
                        <button class="p-2 rounded-full border border-gray-200 hover:border-gray-300">
                            <svg class="h-5 w-5" viewBox="0 0 24 24"><path d="M12.545,10.239v3.821h5.445c-0.712,2.315-2.647,3.972-5.445,3.972c-3.332,0-6.033-2.701-6.033-6.032s2.701-6.032,6.033-6.032c1.498,0,2.866,0.549,3.921,1.453l2.814-2.814C17.503,2.988,15.139,2,12.545,2C7.021,2,2.543,6.477,2.543,12s4.478,10,10.002,10c8.396,0,10.249-7.85,9.426-11.748L12.545,10.239z"/></svg>
                        </button>
                        <button class="p-2 rounded-full border border-gray-200 hover:border-gray-300">
                            <svg class="h-5 w-5" viewBox="0 0 24 24"><path d="M22.001 12c0-5.523-4.477-10-10-10S2.001 6.477 2.001 12c0 4.991 3.657 9.128 8.438 9.879V14.89h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.989c4.781-.751 8.438-4.89 8.438-9.879z"/></svg>
                        </button>
                    </div>

                    <p class="text-center text-sm text-gray-600 mt-8">
                        Already have an account? <a href="#" class="text-gray-900 hover:underline">Login here</a>
                    </p>
                </form>
            </div>
        </div>

        <!-- Image section - hidden on mobile -->
        <div class="hidden md:flex md:w-1/2 bg-[#F6F8F7] items-center justify-center p-12">
            <div class="max-w-lg">
                <img src="../../../public/assets/signup.svg" alt="Meditation illustration" class="w-full">
                <div class="text-center mt-8">
                    <h2 class="text-xl font-semibold">Make your presentation easier and organized</h2>
                    <p class="text-gray-600">with veilleHub</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-100">
        <div class="container mx-auto px-6 py-4">
            <p class="text-center text-sm text-gray-600">© 2025 veilleHub. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
