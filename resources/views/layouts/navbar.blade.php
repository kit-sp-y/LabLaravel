<nav class="bg-gradient-to-r from-green-600 via-ocean-600 to-blue-500 shadow-lg sticky top-0 z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-4">
        <a href="{{ url('/') }}" class="flex items-center space-x-3 group">
            <span class="text-2xl font-bold text-white tracking-tight">
                LabLaravel
            </span>
        </a>

        <button data-collapse-toggle="navbar-menu" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-white rounded-lg lg:hidden hover:bg-white/20 focus:outline-none focus:ring-2 focus:ring-white/50 transition-all duration-300"
            aria-controls="navbar-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>

        <div class="hidden w-full lg:flex lg:w-auto" id="navbar-menu">
            <ul class="flex flex-col lg:flex-row lg:items-center lg:space-x-1 mt-4 lg:mt-0 font-medium">
                <li>
                    <a href="{{ url('/') }}"
                        class="flex items-center gap-2 px-4 py-2 rounded-full text-white hover:bg-white/20 transition-all duration-300 {{ request()->is('/') ? 'bg-white/25 font-semibold' : '' }}">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/></svg>
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ url('/company') }}"
                        class="flex items-center gap-2 px-4 py-2 rounded-full text-white hover:bg-white/20 transition-all duration-300 {{ request()->is('company*') ? 'bg-white/25 font-semibold' : '' }}">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 01-1 1h-2a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd"/></svg>
                        Company
                    </a>
                </li>
                <li>
                    <a href="{{ url('/team') }}"
                        class="flex items-center gap-2 px-4 py-2 rounded-full text-white hover:bg-white/20 transition-all duration-300 {{ request()->is('team*') ? 'bg-white/25 font-semibold' : '' }}">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/></svg>
                        Team
                    </a>
                </li>
                <li>
                    <a href="{{ url('/contact') }}"
                        class="flex items-center gap-2 px-4 py-2 rounded-full text-white hover:bg-white/20 transition-all duration-300 {{ request()->is('contact*') ? 'bg-white/25 font-semibold' : '' }}">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/></svg>
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>