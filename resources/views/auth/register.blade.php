{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>Energy Token Top-Up System</title>--}}
{{--    <!-- Tailwind CSS -->--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">--}}
{{--    <script src="https://cdn.tailwindcss.com"></script>--}}
{{--    <!-- Font Awesome Icons -->--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">--}}
{{--    <style>--}}
{{--        body {--}}
{{--            background-color: #f8f9fa;--}}
{{--        }--}}

{{--        .form-container {--}}
{{--            min-height: 100vh;--}}
{{--            display: flex;--}}
{{--            justify-content: center;--}}
{{--            align-items: center;--}}
{{--        }--}}
{{--    </style>--}}
{{--    <script>--}}
{{--        document.addEventListener('DOMContentLoaded', (event) => {--}}
{{--            // Show welcome popup--}}
{{--            const popup = document.getElementById('welcome-popup');--}}
{{--            popup.classList.remove('hidden');--}}
{{--            setTimeout(() => {--}}
{{--                popup.classList.add('hidden');--}}
{{--            }, 3000); // Hide the popup after 3 seconds--}}

{{--            // Toggle navigation menu--}}
{{--            const navToggle = document.getElementById('nav-toggle');--}}
{{--            const navMenu = document.getElementById('navbarSupportedContent');--}}

{{--            navToggle.addEventListener('click', () => {--}}
{{--                navMenu.classList.toggle('hidden');--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--</head>--}}

{{--<body class="bg-gray-100 h-screen">--}}
{{--<header class="">--}}
{{--    <div class="container mx-auto px-4">--}}
{{--        <nav class="flex items-center justify-between py-4">--}}
{{--            <a class="flex items-center text-gray-900" href="{{ url('/') }}">--}}
{{--                <img src="front/images/logo.png" alt="Logo" class="h-8 w-8 mr-2">--}}
{{--                <span class="font-semibold text-lg">Energy Top-Up System</span>--}}
{{--            </a>--}}
{{--            <button class="block lg:hidden text-gray-900 focus:outline-none" type="button" aria-label="Toggle navigation" id="nav-toggle">--}}
{{--                <span class="fas fa-bars"></span>--}}
{{--            </button>--}}
{{--            <div class="hidden lg:flex lg:items-center w-full lg:w-auto" id="navbarSupportedContent">--}}
{{--                <ul class="flex flex-col lg:flex-row lg:ml-auto">--}}
{{--                    <!-- Add navigation items here if needed -->--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </nav>--}}
{{--    </div>--}}
{{--</header>--}}

{{--<div class="w-full max-w-md mx-auto mt-10">--}}
{{--    <div class="bg-gray-100 p-8 rounded-lg shadow-sm sm:shadow-none md:shadow-sm">--}}

{{--    <h2 class="text-2xl font-bold mb-4 text-center text-gray-800">Register</h2>--}}

{{--        <!-- General error message block -->--}}
{{--        @if ($errors->any())--}}
{{--            <div class="bg-red-100 text-red-700 p-4 mb-4 rounded">--}}
{{--                <ul>--}}
{{--                    @foreach ($errors->all() as $error)--}}
{{--                        <li>{{ $error }}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <form action="{{route('register')}}" method="POST" class="space-y-4">--}}
{{--            @csrf--}}
{{--            <!-- Account and Name Fields -->--}}
{{--            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">--}}
{{--                <div>--}}
{{--                    <label for="account" class="block text-sm font-medium text-gray-700">--}}
{{--                        Account Number--}}
{{--                    </label>--}}
{{--                    <input type="text" minlength="6" name="account" id="account"--}}
{{--                           class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"/>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <label for="name" class="block text-sm font-medium text-gray-700">--}}
{{--                        Customer Name--}}
{{--                    </label>--}}
{{--                    <input type="text" name="name" id="name"--}}
{{--                           class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"/>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Email and Phone Fields -->--}}
{{--            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">--}}
{{--                <div>--}}
{{--                    <label for="email" class="block text-sm font-medium text-gray-700">--}}
{{--                        Email--}}
{{--                    </label>--}}
{{--                    <input type="email" name="email" id="email"--}}
{{--                           class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"/>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <label for="phone" class="block text-sm font-medium text-gray-700">--}}
{{--                        Phone--}}
{{--                    </label>--}}
{{--                    <input type="text" minlength="9" maxlength="12" name="phone" id="phone"--}}
{{--                           class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"/>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Password and Confirm Password Fields -->--}}
{{--            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">--}}
{{--                <div>--}}
{{--                    <label for="password" class="block text-sm font-medium text-gray-700">--}}
{{--                        Password--}}
{{--                    </label>--}}
{{--                    <input type="password" name="password" id="password"--}}
{{--                           class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"/>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">--}}
{{--                        Confirm Password--}}
{{--                    </label>--}}
{{--                    <input type="password" name="password_confirmation" id="password_confirmation"--}}
{{--                           class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"/>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Submit Button -->--}}
{{--            <div>--}}
{{--                <button type="submit"--}}
{{--                        class="w-full mt-4 py-2 px-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">--}}
{{--                    Register--}}
{{--                    <i class="fas fa-plus mr-2"></i>--}}
{{--                </button>--}}
{{--            </div>--}}

{{--            <!-- Sign In Link -->--}}
{{--            <div class="text-center">--}}
{{--                Already have an account? <a href="{{route('login')}}" class="text-blue-500 hover:text-blue-700">Sign In</a>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</div>--}}

{{--</body>--}}
{{--</html>--}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Energy Token Top-Up System</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            // Show welcome popup
            const popup = document.getElementById('welcome-popup');
            popup.classList.remove('hidden');
            setTimeout(() => {
                popup.classList.add('hidden');
            }, 3000); // Hide the popup after 3 seconds

            // Toggle navigation menu
            const navToggle = document.getElementById('nav-toggle');
            const navMenu = document.getElementById('navbarSupportedContent');

            navToggle.addEventListener('click', () => {
                navMenu.classList.toggle('hidden');
            });
        });
    </script>
</head>

<body class="bg-gray-100 h-screen">
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
                    <!-- Add navigation items here if needed -->
                </ul>
            </div>
        </nav>
    </div>
</header>

<div class="w-full max-w-md mx-auto mt-10">
    <div class="bg-gray-100 p-8 rounded-lg shadow-md sm:shadow-none md:shadow-sm">
        <h2 class="text-2xl font-bold mb-4 text-center text-gray-800">Register</h2>

        <!-- General error message block -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 mb-4 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('register')}}" method="POST" class="space-y-4">
            @csrf
            <!-- Account and Name Fields -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="account" class="block text-sm font-medium text-gray-700">
                        Account Number
                    </label>
                    <input type="text" minlength="6" name="account" id="account"
                           class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"/>
                </div>
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">
                        Customer Name
                    </label>
                    <input type="text" name="name" id="name"
                           class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"/>
                </div>
            </div>

            <!-- Email and Phone Fields -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Email
                    </label>
                    <input type="email" name="email" id="email"
                           class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"/>
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">
                        Phone
                    </label>
                    <input type="text" minlength="9" maxlength="12" name="phone" id="phone"
                           class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"/>
                </div>
            </div>

            <!-- Password and Confirm Password Fields -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">
                        Password
                    </label>
                    <input type="password" name="password" id="password"
                           class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"/>
                </div>
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
                        Confirm Password
                    </label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                           class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"/>
                </div>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit"
                        class="w-full mt-4 py-2 px-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Register
                    <i class="fas fa-plus mr-2"></i>
                </button>
            </div>

            <!-- Sign In Link -->
            <div class="text-center">
                Already have an account? <a href="{{route('login')}}" class="text-blue-500 hover:text-blue-700">Sign In</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
