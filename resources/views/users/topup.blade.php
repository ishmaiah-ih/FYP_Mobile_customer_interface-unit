@include('users.require.header')
@include('users.require.navbar')

<body class="">
<div class="container mt-4 ">
    <div class="col-md-6 mx-auto">
        <div class="w-full ">
            <div class="bg-white p-8 rounded-lg ">

                <h2 class="text-2xl font-bold mb-2 text-gray-900 text-center"><i class="fa fa-fire" aria-hidden="true"></i></h2>

                <!-- Form for Top-Up -->
                <form action="{{ route('top-up') }}" class="space-y-2" method="POST">
                    @csrf  <!-- Laravel CSRF token for form security -->

                    <input type="hidden" value="{{ Auth::user()->id }}" name="id" />

                    <div>
                        <label for="meter" class="block text-sm font-medium text-gray-700">
                            Meter Number
                        </label>
                        <input type="text" value="{{ Auth::user()->account }}" readonly name="meter" id="meter" required class="bg-gray-100 text-blue-600 font-bold mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">
                            Email
                        </label>
                        <input type="email" value="{{ Auth::user()->email }}" name="email" id="email" readonly class="mt-1 text-blue-600 font-bold p-2 w-full border border-gray-300 rounded-md bg-gray-100 shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                    </div>

                    <div>
                        <label for="fullname" class="block text-sm font-medium text-gray-700">
                            Full Name
                        </label>
                        <input type="text" name="name" value="{{ Auth::user()->name }}" readonly id="name" class="text-blue-600 font-bold mt-1 bg-gray-100 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">
                            Phone
                        </label>
                        <input type="text" name="phone" value="{{ Auth::user()->phone }}" readonly id="phone" class="text-blue-600 font-bold mt-1 bg-gray-100 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                    </div>

                    <div>
                        <label for="amount" class="block text-sm font-medium text-gray-700">
                            Amount
                        </label>
                        <input type="text" name="amount" id="amount" required class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-pink-500 caret-pink-500" />
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="w-full py-2 px-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-75">
                            Top up
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@include('users.require.footer')
