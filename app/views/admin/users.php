<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management - veilleHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#F6F8F7]">
    <!-- Header with absolute hamburger menu -->
    <header class="bg-white shadow-sm" x-data="{ isOpen: false }">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <span class="text-xl font-semibold">veilleHub</span>
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
                    <a href="#" class="block py-2 text-gray-700 hover:text-gray-900">Dashboard</a>
                    <a href="#" class="block py-2 text-gray-700 hover:text-gray-900">Users</a>
                    <a href="#" class="block py-2 text-gray-700 hover:text-gray-900">Settings</a>
                    <div class="pt-2 border-t border-gray-100">
                        <a href="#" class="block py-2 text-gray-700 hover:text-gray-900">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-8">
        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-xl p-6 shadow-sm">
                <h3 class="text-gray-500 text-sm">Total Users</h3>
                <p class="text-2xl font-semibold mt-2">2,451</p>
                
            </div>
            <div class="bg-white rounded-xl p-6 shadow-sm">
                <h3 class="text-gray-500 text-sm">Staff Members</h3>
                <p class="text-2xl font-semibold mt-2">842</p>
                
            </div>
            <div class="bg-white rounded-xl p-6 shadow-sm">
                <h3 class="text-gray-500 text-sm">Students</h3>
                <p class="text-2xl font-semibold mt-2">1,609</p>
                
            </div>
        </div>

        <!-- Pending Approvals Table -->
        <div class="bg-white rounded-xl shadow-sm mb-8">
            <div class="p-6 border-b border-gray-100">
                <h2 class="text-lg font-semibold">Pending Approvals</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Role</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">John Doe</td>
                            <td class="px-6 py-4 whitespace-nowrap">john@example.com</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 text-sm rounded-full bg-blue-50 text-blue-600">Staff</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap space-x-2">
                                <button class="px-3 py-1 text-sm rounded-full bg-green-50 text-green-600 hover:bg-green-100">Approve</button>
                                <button class="px-3 py-1 text-sm rounded-full bg-red-50 text-red-600 hover:bg-red-100">Reject</button>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- All Users Table -->
        <div class="bg-white rounded-xl shadow-sm">
            <div class="p-6 border-b border-gray-100">
                <h2 class="text-lg font-semibold">All Users</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Role</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">Jane Smith</td>
                            <td class="px-6 py-4 whitespace-nowrap">jane@example.com</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 text-sm rounded-full bg-purple-50 text-purple-600">Student</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <button class="text-red-600 hover:text-red-800">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>
