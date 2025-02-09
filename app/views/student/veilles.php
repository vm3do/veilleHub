

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Veilles - veilleHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- <link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/main.min.css' rel='stylesheet' /> -->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#F6F8F7]">
    <!-- Header here -->
    <header class="bg-white shadow-sm" x-data="{ isOpen: false }">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
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
                <div class="hidden md:flex md:items-center md:absolute md:left-1/2 md:-translate-x-1/2">
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-700 hover:text-gray-900">Users</a>
                        <a href="#" class="text-gray-700 hover:text-gray-900">Veilles</a>
                        <a href="#" class="text-gray-700 hover:text-gray-900">Calendar</a>
                    </div>
                </div>

                <!-- Admin profile -->
                <div class="hidden md:flex md:items-center space-x-4">
                    <button class="text-gray-600 hover:text-red-800">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </button>
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
                    <a href="#" class="block py-2 text-gray-700 hover:text-gray-900">Users</a>
                    <a href="#" class="block py-2 text-gray-700 hover:text-gray-900">Veilles</a>
                    <a href="#" class="block py-2 text-gray-700 hover:text-gray-900">Calendar</a>
                    <div class="pt-2 border-t border-gray-100">
                        <a href="#" class="block py-2 text-gray-700 hover:text-gray-900">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-6 py-8">
        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Suggestion Rate Card -->
            <div class="bg-gradient-to-br from-blue-50 to-white rounded-xl p-6 shadow-sm border border-blue-100">
                <div class="flex items-center justify-between">
                    <h3 class="text-gray-500 text-sm">Your Suggestion Rate</h3>
                    <div class="p-2 bg-blue-100 rounded-lg">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <p class="text-2xl font-semibold mt-2">8 Suggestions</p>
                <div class="mt-2">
                    <div class="w-full bg-gray-100 rounded-full h-2">
                        <div class="bg-blue-500 h-2 rounded-full" style="width: 75%"></div>
                    </div>
                    <p class="text-sm text-blue-600 mt-2">Top 25% of contributors</p>
                </div>
            </div>

            <!-- Upcoming Veille Card -->
            <div class="bg-gradient-to-br from-purple-50 to-white rounded-xl p-6 shadow-sm border border-purple-100">
                <div class="flex items-center justify-between">
                    <h3 class="text-gray-500 text-sm">Upcoming Presentation</h3>
                    <div class="p-2 bg-purple-100 rounded-lg">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4">
                    <h4 class="font-medium text-purple-900">Web Security Best Practices</h4>
                    <p class="text-sm text-purple-600 mt-1">March 15, 2024</p>
                    <div class="flex items-center mt-3 space-x-2">
                        <span class="h-6 w-6 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 text-xs">JS</span>
                        <span class="h-6 w-6 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 text-xs">ES</span>
                    </div>
                </div>
            </div>

            <!-- Previous Veilles Card -->
            <div class="bg-gradient-to-br from-green-50 to-white rounded-xl p-6 shadow-sm border border-green-100">
                <div class="flex items-center justify-between">
                    <h3 class="text-gray-500 text-sm">Completed Presentations</h3>
                    <div class="p-2 bg-green-100 rounded-lg">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                    </div>
                </div>
                <p class="text-2xl font-semibold mt-2">4 Completed</p>
                <div class="mt-2 space-y-2">
                    <div class="text-sm">
                        <p class="text-green-900">Modern JavaScript Features</p>
                        <p class="text-green-600">February 28, 2024</p>
                    </div>
                    <div class="text-sm">
                        <p class="text-green-900">Git Advanced Techniques</p>
                        <p class="text-green-600">January 15, 2024</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-sm p-6 mb-8">
            <h2 class="text-lg font-semibold mb-4">Suggest a Veille</h2>
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                    <input type="text" 
                           class="w-full px-4 py-2 text-sm border border-gray-200 rounded-full focus:border-gray-300 focus:ring-0"
                           placeholder="Enter veille title">
                </div>
                <button type="submit" 
                        class="px-6 py-2 bg-black text-white rounded-full text-sm hover:bg-lime-400 hover:text-black hover:shadow-[inset_0_0_0_2px_black] transition-colors">
                    Submit Suggestion
                </button>
            </form>
        </div>

        <!-- Suggested Veilles Table -->
        <div class="bg-white rounded-xl shadow-sm mb-8">
            <div class="p-6 border-b border-gray-100">
                <h2 class="text-lg font-semibold">Your Suggested Veilles</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">Date Suggested</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <tr>
                            <td class="px-6 py-4">
                                <input type="text" 
                                       value="Web Security Best Practices" 
                                       class="w-full px-2 py-1 text-sm border-b border-transparent hover:border-gray-300 focus:border-black focus:outline-none transition-colors">
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">Mar 1, 2024</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                    Pending
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <button class="text-black hover:text-green-500 transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </button>
                                    <button class="text-red-600 hover:text-red-800 transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 text-sm text-gray-900">Modern JavaScript Features</td>
                            <td class="px-6 py-4 text-sm text-gray-500">Feb 15, 2024</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Approved
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <!-- No actions for approved veilles -->
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Assigned Veilles Table -->
        <div class="bg-white rounded-xl shadow-sm">
            <div class="p-6 border-b border-gray-100">
                <h2 class="text-lg font-semibold">Assigned Veilles</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">Contributors</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <tr>
                            <td class="px-6 py-4 text-sm text-gray-900">Web Security Best Practices</td>
                            <td class="px-6 py-4 text-sm text-gray-500">Mar 15, 2024</td>
                            <td class="px-6 py-4">
                                <div class="flex -space-x-2">
                                    <span class="h-6 w-6 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 text-xs">JS</span>
                                    <span class="h-6 w-6 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 text-xs">ES</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    Upcoming
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 text-sm text-gray-900">Git Advanced Techniques</td>
                            <td class="px-6 py-4 text-sm text-gray-500">Feb 28, 2024</td>
                            <td class="px-6 py-4">
                                <div class="flex -space-x-2">
                                    <span class="h-6 w-6 rounded-full bg-green-100 flex items-center justify-center text-green-600 text-xs">JS</span>
                                    <span class="h-6 w-6 rounded-full bg-yellow-100 flex items-center justify-center text-yellow-600 text-xs">MJ</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Completed
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </main>


</body>
</html>