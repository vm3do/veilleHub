

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
        .fc { width: 100%; }
        .fc .fc-button-primary { background-color: black; border: none; }
        .fc .fc-button-primary:hover { background-color: #84cc16; color: black; }
    </style>
</head>
<body class="bg-[#F6F8F7]">

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

                <!-- Logout button -->
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
        <!-- Calendar Section -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div id="calendar"></div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth'
                },
                events: [
                    {
                        title: 'Web Security Best Practices',
                        start: '2024-03-15',
                        backgroundColor: '#8b5cf6',
                        borderColor: '#8b5cf6',
                        extendedProps: {
                            contributors: ['JS', 'ES']
                        }
                    },
                    {
                        title: 'Modern JavaScript Features',
                        start: '2024-02-28',
                        backgroundColor: '#10b981',
                        borderColor: '#10b981',
                        extendedProps: {
                            contributors: ['JS', 'MJ']
                        }
                    }
                ],
                eventContent: function(arg) {
                    return {
                        html: `
                            <div class="p-1">
                                <div class="font-medium text-sm">${arg.event.title}</div>
                                <div class="flex items-center mt-1 space-x-1">
                                    ${arg.event.extendedProps.contributors.map(initials => 
                                        `<span class="h-4 w-4 rounded-full bg-white/20 flex items-center justify-center text-white text-[10px]">${initials}</span>`
                                    ).join('')}
                                </div>
                            </div>
                        `
                    };
                }
            });
            calendar.render();
        });
    </script>
</body>
</html>