<!-- resources/views/components/navbar.blade.php -->
<nav class="bg-blue-600 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ route('user.dashboard') }}" class="text-white text-2xl font-bold hidden md:flex">
            <i class="fas fa-bolt mr-2"></i>EnergyTopUp
        </a>

        <!-- Links -->
        @auth
            <div class="hidden md:flex space-x-4">
                <a href="{{ route('user.dashboard') }}" class="text-white hover:bg-blue-700 px-3 py-2 rounded font-bold">Home</a>
                <a href="{{ route('top-up_get') }}" class="text-white font-bold hover:bg-blue-700 px-3 py-2 rounded">Top-Up</a>
                <a href="{{ route('history') }}" class="text-white font-bold hover:bg-blue-700 px-3 py-2 rounded {{ request()->is('history') ? 'active' : '' }}">Logs</a>
                <a href="{{ route('profile') }}" class="text-white font-bold hover:bg-blue-700 px-3 py-2 rounded">Profile</a>
                <a href="{{ route('contact-us') }}" class="text-white font-bold hover:bg-blue-700 px-3 py-2 rounded">Contact-us</a>
                <a href="{{ route('alerts') }}" class="text-white font-bold hover:bg-blue-700 px-3 py-2 rounded"><i class="fa fa-bell"></i></a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-white font-bold hover:bg-blue-700 px-3 py-2 rounded"><i class="fa fa-power-off"></i></button>
                </form>
            </div>

            <!-- Profile Icon -->
            <div class="flex items-center">
                <a href="{{ route('profile') }}" class="text-red-300 font-bold hover:bg-blue-700 px-3 rounded hidden md:flex text-sm mb-0 font-weight-bold">
                    {{ Auth::user()->name }}
                    <i class="fa fa-user mr-2 ms-2"></i>
                </a>
            </div>
        @endauth

        <!-- Mobile Menu -->
        <div class="md:hidden">
            <a href="{{ route('user.dashboard') }}" class="text-white text-2xl font-bold">
                <i class="fas fa-bolt mr-2"></i>EnergyTopUp
            </a>
            @auth
                <button id="mobile-menu-button" class="text-white float-end">
                    <i class="fas fa-bars"></i>
                </button>
            @endauth
            <div id="mobile-menu" class="hidden space-y-2 mt-2 text-center">
                <a href="{{ route('user.dashboard') }}" class="block text-white hover:bg-blue-700 px-3 py-2 rounded">Home</a>
                <a href="{{ route('top-up') }}" class="block text-white hover:bg-blue-700 px-3 py-2 rounded">Top-Up</a>
                <a href="{{ route('history') }}" class="block text-white hover:bg-blue-700 px-3 py-2 rounded">History</a>
                <a href="{{ route('profile') }}" class="block text-white hover:bg-blue-700 px-3 py-2 rounded">Profile</a>
                <a href="{{ route('contact-us') }}" class="block text-white hover:bg-blue-700 px-3 py-2 rounded">Contact-us</a>
                <a href="{{ route('alerts') }}" class="block text-white hover:bg-blue-700 px-3 py-2 rounded"><i class="fa fa-bell"></i></a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="block text-white font-bold hover:bg-blue-700 px-3 py-2 rounded"><i class="fa fa-power-off"></i></button>
                </form>
                <a href="{{ route('profile') }}" class="block text-white font-bold hover:bg-blue-700 px-3 py-2 rounded">
                    {{ Auth::user()->name }}
                    <i class="fa fa-user mr-2 ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</nav>
