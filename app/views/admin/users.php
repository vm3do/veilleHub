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
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <span class="text-xl font-semibold">veilleHub Admin</span>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">Admin Name</span>
                    <button class="text-gray-600 hover:text-gray-900">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-8">
        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-xl p-6 shadow-sm">
                <h3 class="text-gray-500 text-sm">Total Users</h3>
                <p class="text-2xl font-semibold mt-2">2,451</p>
                <div class="flex items-center mt-2 text-green-500 text-sm">
                    <span>↑ 12%</span>
                    <span class="text-gray-400 ml-2">vs last month</span>
                </div>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-sm">
                <h3 class="text-gray-500 text-sm">Staff Members</h3>
                <p class="text-2xl font-semibold mt-2">842</p>
                <div class="flex items-center mt-2 text-green-500 text-sm">
                    <span>↑ 8%</span>
                    <span class="text-gray-400 ml-2">vs last month</span>
                </div>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-sm">
                <h3 class="text-gray-500 text-sm">Students</h3>
                <p class="text-2xl font-semibold mt-2">1,609</p>
                <div class="flex items-center mt-2 text-green-500 text-sm">
                    <span>↑ 15%</span>
                    <span class="text-gray-400 ml-2">vs last month</span>
                </div>
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
                                <span class="px-2 py-1 text-xs rounded-full bg-blue-50 text-blue-600">Staff</span>
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
                                <span class="px-2 py-1 text-xs rounded-full bg-purple-50 text-purple-600">Student</span>
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
