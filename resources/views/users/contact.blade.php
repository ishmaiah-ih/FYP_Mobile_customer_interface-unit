@include('users.require.header')
@include('users.require.navbar')

<div class="w-full max-w-md mx-auto mt-6">
    <div class=" p-8 rounded-lg shadow-sm">
        <h2 class="text-2xl font-bold mb-3 text-gray-900 text-center">Contact-us</h2>

        @if (session('status'))
            <div id="status-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="#" class="space-y-4" method="POST">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="text" name="email" id="email" value="{{Auth::User()->email}}"
                       class="mt-1 p-2 w-full border border-gray-300 rounded-md  focus:ring-blue-500 focus:border-blue-500 bg-blue-200 text-white"
                       readonly>
            </div>
            <div>
                <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                <input type="text" name="subject" id="subject"
                       class="mt-1 p-2 w-full border border-gray-300 rounded-md  focus:ring-blue-500 focus:border-blue-500"
                       required>
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                <textarea name="message" id="message" rows="6"
                          class="mt-1 p-2 w-full border border-gray-300 rounded-md  focus:ring-blue-500 focus:border-blue-500"
                          required></textarea>
            </div>

            <div class="text-center">
                <button type="submit"
                        class="w-full py-2 px-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-75">
                    Send Message
                </button>
            </div>
        </form>
    </div>
</div>

@include('users.require.footer')
