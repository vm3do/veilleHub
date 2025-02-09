<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar - veilleHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#F6F8F7]">
    <!-- Header (same as other pages) -->
    <header class="bg-white shadow-sm" x-data="{ isOpen: false }">
        <!-- ... existing header code ... -->
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Calendar Section -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl shadow-sm">
                    <div class="p-6 border-b border-gray-100">
                        <div class="flex items-center justify-between">
                            <h2 class="text-lg font-semibold">March 2024</h2>
                            <div class="flex space-x-2">
                                <button class="p-2 hover:bg-gray-100 rounded-full">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                    </svg>
                                </button>
                                <button class="p-2 hover:bg-gray-100 rounded-full">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="grid grid-cols-7 gap-px bg-gray-200 rounded-lg overflow-hidden">
                            <!-- Calendar Header -->
                            <div class="bg-gray-50 p-2 text-center text-xs font-medium text-gray-500">Mon</div>
                            <div class="bg-gray-50 p-2 text-center text-xs font-medium text-gray-500">Tue</div>
                            <div class="bg-gray-50 p-2 text-center text-xs font-medium text-gray-500">Wed</div>
                            <div class="bg-gray-50 p-2 text-center text-xs font-medium text-gray-500">Thu</div>
                            <div class="bg-gray-50 p-2 text-center text-xs font-medium text-gray-500">Fri</div>
                            <div class="bg-gray-50 p-2 text-center text-xs font-medium text-gray-500">Sat</div>
                            <div class="bg-gray-50 p-2 text-center text-xs font-medium text-gray-500">Sun</div>

                            <!-- Calendar Days -->
                            <div class="bg-white p-2 h-32">
                                <span class="text-sm">1</span>
                            </div>
                            <div class="bg-white p-2 h-32">
                                <span class="text-sm">2</span>
                            </div>
                            <div class="bg-white p-2 h-32">
                                <span class="text-sm">3</span>
                            </div>
                            <div class="bg-white p-2 h-32">
                                <span class="text-sm">4</span>
                            </div>
                            <div class="bg-white p-2 h-32">
                                <span class="text-sm">5</span>
                                <!-- Example Presentation -->
                                <div class="mt-1 p-1 bg-blue-50 border border-blue-100 rounded text-xs">
                                    <p class="font-medium text-blue-700">Web Security</p>
                                    <div class="flex items-center mt-1 space-x-1">
                                        <span class="h-4 w-4 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 text-[10px]">JS</span>
                                        <span class="h-4 w-4 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 text-[10px]">ES</span>
                                    </div>
                                </div>
                            </div>
                            <!-- ... more calendar days ... -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Schedule Form -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h3 class="text-lg font-semibold mb-6">Schedule Presentation</h3>
                    <form class="space-y-6">
                        <!-- Veille Selection -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Select Veille</label>
                            <div class="relative">
                                <select class="w-full pl-4 pr-10 py-2 text-sm border border-gray-200 rounded-full appearance-none focus:border-gray-300 focus:ring-0">
                                    <option value="">Choose a veille...</option>
                                    <option value="1">Web Security Best Practices</option>
                                    <option value="2">Introduction to AI</option>
                                    <option value="3">Modern JavaScript Features</option>
                                </select>
                                <svg class="w-5 h-5 text-gray-400 absolute right-3 top-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>

                        <!-- Date Selection -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Select Date</label>
                            <input type="date" 
                                   class="w-full px-4 py-2 text-sm border border-gray-200 rounded-full focus:border-gray-300 focus:ring-0">
                        </div>

                        <!-- Contributors Selection -->
                        <div x-data="{ selected: [] }">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Select Contributors (min 2)</label>
                            <div class="relative">
                                <select x-model="selected" 
                                        multiple 
                                        class="w-full pl-4 pr-10 py-2 text-sm border border-gray-200 rounded-xl appearance-none focus:border-gray-300 focus:ring-0"
                                        size="4">
                                    <option value="1">John Smith</option>
                                    <option value="2">Emma Smith</option>
                                    <option value="3">Michael Johnson</option>
                                    <option value="4">Sarah Wilson</option>
                                    <option value="5">David Brown</option>
                                </select>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">
                                Selected: <span x-text="selected.length"></span>/2
                            </p>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" 
                                class="w-full px-4 py-2 bg-black text-white rounded-full text-sm hover:bg-lime-400 hover:text-black hover:shadow-[inset_0_0_0_2px_black] transition-colors">
                            Schedule Presentation
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
