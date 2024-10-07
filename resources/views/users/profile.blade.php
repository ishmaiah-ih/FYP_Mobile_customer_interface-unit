{{--@include('users.require.header')--}}
{{--@include('users.require.navbar')--}}
{{--<div class="w-full max-w-2xl bg-white p-8 rounded-lg shadow-md mx-auto mt-2">--}}
{{--    <h2 class="text-2xl font-bold mb-6 text-gray-900 text-center">Profile</h2>--}}

{{--    <!-- Profile Picture Section -->--}}
{{--    <div class="flex justify-center mb-6">--}}
{{--        <img src="{{ asset('assets/images/prof.jpg') }}" alt="Profile Picture"--}}
{{--             class="w-32 h-32 rounded-full object-cover">--}}
{{--    </div>--}}

{{--    <!-- User Information Section -->--}}
{{--    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-4">--}}
{{--        @csrf--}}
{{--        @method('PUT')--}}

{{--        <div>--}}
{{--            <label for="account" class="block text-sm font-medium text-gray-700">Account Number</label>--}}
{{--            <input type="text" name="account" id="account" value="{{ $user->account }}" readonly--}}
{{--                   class="mt-1 bg-gray-100 text-blue-400 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">--}}
{{--        </div>--}}

{{--        <div>--}}
{{--            <label for="name" class="block text-sm font-medium text-gray-700">Customer Name</label>--}}
{{--            <input type="text" name="name" id="name" value="{{ $user->name }}" required--}}
{{--                   class="mt-1 p-2 bg-gray-100 text-blue-400 w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">--}}
{{--        </div>--}}

{{--        <div>--}}
{{--            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>--}}
{{--            <input type="email" name="email" id="email" value="{{ $user->email }}" required--}}
{{--                   class="mt-1 p-2 w-full border bg-gray-100 text-blue-400 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">--}}
{{--        </div>--}}

{{--        <div>--}}
{{--            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>--}}
{{--            <input type="text" name="phone" id="phone" value="{{ $user->phone }}" required--}}
{{--                   class="mt-1 p-2 w-full border border-gray-300 bg-gray-100 text-blue-400 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">--}}
{{--        </div>--}}

{{--        <div>--}}
{{--            <label for="address" class="block text-sm font-medium text-gray-700">Location</label>--}}
{{--            <input type="text" name="address" id="address" value="Chichiri, Street 5"--}}
{{--                   class="mt-1 bg-gray-100 text-blue-400 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">--}}
{{--        </div>--}}

{{--        <div>--}}
{{--            <label for="profile_picture" class="block text-sm font-medium text-gray-700">Profile Picture</label>--}}
{{--            <input type="file" name="profile_picture" id="profile_picture"--}}
{{--                   class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">--}}
{{--        </div>--}}

{{--        <!-- Save Changes Button -->--}}
{{--        <div class="text-center">--}}
{{--            <button type="submit"--}}
{{--                    class="py-2 px-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-75">--}}
{{--                Save Changes--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </form>--}}

{{--    <!-- Change Password Section -->--}}
{{--    <div class="mt-6 text-center">--}}
{{--        <a href="#" class="text-blue-500 hover:text-blue-700">Change Password</a>--}}
{{--    </div>--}}

{{--    <!-- Logout Button -->--}}
{{--    <div class="mt-4 text-center">--}}
{{--        <form action="{{ route('logout') }}" method="POST" class="inline">--}}
{{--            @csrf--}}

{{--            <button type="submit"--}}
{{--                    class="py-2 px-4 bg-red-600 hover:bg-red-700 text-white font-semibold rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-75">--}}
{{--                Logout--}}
{{--            </button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</div>--}}


{{--@include('users.require.footer')--}}

@include('users.require.header')
@include('users.require.navbar')

<div class="w-full max-w-2xl bg-white p-8 rounded-lg shadow-md mx-auto mt-2">
    <h2 class="text-2xl font-bold mb-6 text-gray-900 text-center">Profile</h2>

    <!-- Profile Picture Section -->
    <div class="flex justify-center mb-6">
        <img src="{{ asset('assets/images/prof.jpg') }}" alt="Profile Picture"
             class="w-32 h-32 rounded-full object-cover">
    </div>

    <!-- User Information Section -->
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="account" class="block text-sm font-medium text-gray-700">Account Number</label>
            <input type="text" name="account" id="account" value="{{ $user->account }}" readonly
                   class="mt-1 bg-gray-100 text-blue-400 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Customer Name</label>
            <input type="text" name="name" id="name" value="{{ $user->name }}" required
                   class="mt-1 p-2 bg-gray-100 text-blue-400 w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" value="{{ $user->email }}" required
                   class="mt-1 p-2 w-full border bg-gray-100 text-blue-400 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div>
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
            <input type="text" name="phone" id="phone" value="{{ $user->phone }}" required
                   class="mt-1 p-2 w-full border border-gray-300 bg-gray-100 text-blue-400 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div>
            <label for="address" class="block text-sm font-medium text-gray-700">Location</label>
            <input type="text" name="address" id="address" value="Chichiri, Street 5"
                   class="mt-1 bg-gray-100 text-blue-400 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div>
            <label for="profile_picture" class="block text-sm font-medium text-gray-700">Profile Picture</label>
            <input type="file" name="profile_picture" id="profile_picture"
                   class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Save Changes Button -->
        <div class="text-center">
            <button type="submit"
                    class="py-2 px-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-75">
                Save Changes
            </button>
        </div>
    </form>

    <!-- Change Password Section -->
    <div class="mt-6 text-center">
        <a href="#" class="text-blue-500 hover:text-blue-700">Change Password</a>
    </div>

    <!-- Logout Button -->
    <div class="mt-4 text-center">
        <form action="{{ route('logout') }}" method="POST" class="inline">
            @csrf

            <button type="submit"
                    class="py-2 px-4 bg-red-600 hover:bg-red-700 text-white font-semibold rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-75">
                Logout
            </button>
        </form>
    </div>
</div>

@include('users.require.footer')
