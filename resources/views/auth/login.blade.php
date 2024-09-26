<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Energy Token Top-Up System</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-gray-100">
<header class="">
    <div class="container mx-auto px-4">
        <nav class="flex items-center justify-between py-4">
            <a class="flex items-center text-gray-900" href="{{ url('/') }}">
                <img src="front/images/logo.png" alt="Logo" class="h-8 w-8 mr-2">
                <span class="font-semibold text-lg">Energy Top-Up System</span>
            </a>
            <button class="block lg:hidden text-gray-900 focus:outline-none" type="button" aria-label="Toggle navigation" id="nav-toggle">
                <span class="fas fa-bars"></span>
            </button>
            <div class="hidden lg:flex lg:items-center w-full lg:w-auto" id="navbarSupportedContent">
                <ul class="flex flex-col lg:flex-row lg:ml-auto">
{{--                    <li class="nav-item">--}}
{{--                        <a class="block py-2 px-4 text-gray-700 hover:text-blue-500" href="{{ url('/') }}">Home</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="block py-2 px-4 text-gray-700 hover:text-blue-500" href="{{ route('register') }}">Register</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="block py-2 px-4 text-gray-700 hover:text-blue-500" href="{{ route('login') }}">Login</a>--}}
{{--                    </li>--}}
                </ul>
            </div>
        </nav>
    </div>
</header>

<!-- JavaScript for toggling the mobile menu -->
<script>
    document.getElementById('nav-toggle').addEventListener('click', function () {
        var navContent = document.getElementById('navbarSupportedContent');
        navContent.classList.toggle('hidden');
    });
</script>

<br>
<br>


<div class="w-full max-w-md mx-auto mt-6">
    <div class="bg-gray-100 p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-3 text-gray-900 text-center">Sign In</h2>

        <!-- Status Message -->
        @if (session('status'))
            <div class="bg-green-100 border-t border-b border-green-500 text-green-700 px-4 py-3 rounded mb-4" role="alert">
                <p class="text-sm">{{ session('status') }}</p>
            </div>
        @endif

        <!-- Validation Error Messages -->
        @if ($errors->any())
            <div class="bg-red-100 border-t border-b border-red-500 text-red-700 px-4 py-3 rounded mb-4" role="alert">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" class="space-y-4" method="POST">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">
                    Email
                </label>
                <input type="email" name="email" id="email" class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">
                    Password
                </label>
                <input type="password" name="password" id="password" class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
            </div>
            <div>
                <button type="submit" class="w-full py-2 px-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-75">
                    <i class="fas fa-sign-in-alt mr-2"></i>Sign In
                </button>
            </div>
            <div class="text-center">
                Don't have an account? <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-700">Sign Up</a>
            </div>
        </form>
    </div>
</div>


</body>
</html>
