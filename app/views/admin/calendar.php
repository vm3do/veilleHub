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
    <!-- Header -->
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

                <!-- logout button -->
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
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Select Contributors (min 2)</label>
                            <div class="border border-gray-200 rounded-xl">
                                <div class="max-h-[240px] overflow-y-auto p-3 space-y-2 custom-scrollbar" id="contributorsContainer">
                                    <label class="flex items-center p-3 rounded-full border border-gray-200 cursor-pointer hover:border-gray-300 bg-white">
                                        <input type="checkbox" name="contributors[]" value="1" class="contributor-checkbox hidden">
                                        <div class="flex items-center justify-between w-full">
                                            <div class="flex items-center">
                                                <span class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-semibold text-sm mr-3">JS</span>
                                                <span class="text-sm text-gray-700">John Smith</span>
                                            </div>
                                            <div class="h-5 w-5 border-2 border-gray-300 rounded-full checkbox-indicator"></div>
                                        </div>
                                    </label>
                                    <label class="flex items-center p-3 rounded-full border border-gray-200 cursor-pointer hover:border-gray-300 bg-white">
                                        <input type="checkbox" name="contributors[]" value="2" class="contributor-checkbox hidden">
                                        <div class="flex items-center justify-between w-full">
                                            <div class="flex items-center">
                                                <span class="h-8 w-8 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 font-semibold text-sm mr-3">ES</span>
                                                <span class="text-sm text-gray-700">Emma Smith</span>
                                            </div>
                                            <div class="h-5 w-5 border-2 border-gray-300 rounded-full checkbox-indicator"></div>
                                        </div>
                                    </label>
                                    <!-- Example of more students -->
                                    <label class="flex items-center p-3 rounded-full border border-gray-200 cursor-pointer hover:border-gray-300 bg-white">
                                        <input type="checkbox" name="contributors[]" value="3" class="contributor-checkbox hidden">
                                        <div class="flex items-center justify-between w-full">
                                            <div class="flex items-center">
                                                <span class="h-8 w-8 rounded-full bg-green-100 flex items-center justify-center text-green-600 font-semibold text-sm mr-3">MJ</span>
                                                <span class="text-sm text-gray-700">Mike Johnson</span>
                                            </div>
                                            <div class="h-5 w-5 border-2 border-gray-300 rounded-full checkbox-indicator"></div>
                                        </div>
                                    </label>
                                    <label class="flex items-center p-3 rounded-full border border-gray-200 cursor-pointer hover:border-gray-300 bg-white">
                                        <input type="checkbox" name="contributors[]" value="4" class="contributor-checkbox hidden">
                                        <div class="flex items-center justify-between w-full">
                                            <div class="flex items-center">
                                                <span class="h-8 w-8 rounded-full bg-red-100 flex items-center justify-center text-red-600 font-semibold text-sm mr-3">AW</span>
                                                <span class="text-sm text-gray-700">Anna Wilson</span>
                                            </div>
                                            <div class="h-5 w-5 border-2 border-gray-300 rounded-full checkbox-indicator"></div>
                                        </div>
                                    </label>
                                    <label class="flex items-center p-3 rounded-full border border-gray-200 cursor-pointer hover:border-gray-300 bg-white">
                                        <input type="checkbox" name="contributors[]" value="5" class="contributor-checkbox hidden">
                                        <div class="flex items-center justify-between w-full">
                                            <div class="flex items-center">
                                                <span class="h-8 w-8 rounded-full bg-yellow-100 flex items-center justify-center text-yellow-600 font-semibold text-sm mr-3">DB</span>
                                                <span class="text-sm text-gray-700">David Brown</span>
                                            </div>
                                            <div class="h-5 w-5 border-2 border-gray-300 rounded-full checkbox-indicator"></div>
                                        </div>
                                    </label>
                                    <!-- Add more students as needed -->
                                </div>
                            </div>
                            <p class="mt-2 text-sm text-gray-500" id="contributorCount">Selected: 0/2</p>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" 
                                id="submitBtn"
                                disabled
                                class="w-full px-4 py-2 bg-black text-white rounded-full text-sm hover:bg-lime-400 hover:text-black hover:shadow-[inset_0_0_0_2px_black] transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                            Schedule Presentation
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Contributors selection logic
        document.addEventListener('DOMContentLoaded', function() {
            const contributorsContainer = document.getElementById('contributorsContainer');
            const contributorCount = document.getElementById('contributorCount');
            const submitBtn = document.getElementById('submitBtn');
            const checkboxes = document.querySelectorAll('.contributor-checkbox');
            const indicators = document.querySelectorAll('.checkbox-indicator');

            function updateContributorCount() {
                const selectedCount = document.querySelectorAll('.contributor-checkbox:checked').length;
                contributorCount.textContent = `Selected: ${selectedCount}/2`;
                
                // Enable/disable submit button based on selection
                submitBtn.disabled = selectedCount !== 2;

                // Update checkbox styles
                checkboxes.forEach((checkbox, index) => {
                    if (checkbox.checked) {
                        indicators[index].classList.add('bg-black', 'border-0', 'after:content-["✓"]', 'after:text-white', 'after:text-xs', 'flex', 'items-center', 'justify-center');
                    } else {
                        indicators[index].classList.remove('bg-black', 'border-0', 'after:content-["✓"]', 'after:text-white', 'after:text-xs', 'flex', 'items-center', 'justify-center');
                    }

                    // Disable other checkboxes if 2 are selected
                    if (selectedCount >= 2 && !checkbox.checked) {
                        checkbox.disabled = true;
                        checkbox.parentElement.classList.add('opacity-50', 'cursor-not-allowed');
                    } else {
                        checkbox.disabled = false;
                        checkbox.parentElement.classList.remove('opacity-50', 'cursor-not-allowed');
                    }
                });
            }

            // Add click event listeners to checkboxes
            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', updateContributorCount);
            });

            // Initial count update
            updateContributorCount();
        });

        // Custom scrollbar styles
        document.addEventListener('DOMContentLoaded', function() {
            const customScrollbar = document.querySelector('.custom-scrollbar');
            if (customScrollbar) {
                customScrollbar.style.scrollbarWidth = 'thin';
                customScrollbar.style.scrollbarColor = '#E5E7EB transparent';
            }
        });
    </script>

    <style>
        .custom-scrollbar {
            scrollbar-width: thin;
            scrollbar-color: #E5E7EB transparent;
        }
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background-color: #E5E7EB;
            border-radius: 20px;
        }
    </style>
</body>
</html>
