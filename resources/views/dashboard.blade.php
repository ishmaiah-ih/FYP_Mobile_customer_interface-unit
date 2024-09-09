@include('users.require.header')
@include('users.require.navbar')

<body class="bg-white h-screen">
<!-- Popup message -->
<div id="welcome-popup"
     class="fixed top-0 left-1/2 transform -translate-x-1/2 mt-6 p-4 bg-red-500 text-white rounded-md shadow-sm hidden">
    Welcome to Energy Top-up System <span class="text-green-300 font-bold">{{ $name }}!</span>
</div>
<!-- End popup -->
<div class="container mx-auto py-10">
    {{--    @include('partials.alert')--}}

    <div class="w-full bg-cyan-100 p-2 mb-4 text-start border-l-4 border-red-500">
        <h1 class="text-2xl font-bold text-dark opacity-7 text-semibold text-center">Welcome <span
                class="capitalize text-blue-700">{{ $name }}</span></h1>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-sm text-black flex items-center">
            <div class="text-blue-500 text-4xl mr-4">
                <i class="fas fa-battery-half"></i>
            </div>
            <div>
                <h2 class="text-dark opacity-7 text-semibold mb-2">Remaining Balance</h2>
                <p class="text-sm mb-0 text-uppercase font-weight-bold">{{ $remaining_balance_kwh }} kWh</p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-sm text-black flex items-center">
            <div class="text-red-500 text-4xl mr-4">
                <i class="fas fa-calendar-alt"></i>
            </div>
            <div>
                <h2 class="text-dark opacity-7 text-semibold mb-2">Last Transaction</h2>
                <p class="text-sm mb-0 text-uppercase font-weight-bold">{{ $last_transaction_date }}</p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-sm text-black flex items-center">
            <div class="text-yellow-500 text-4xl mr-4">
                <i class="fas fa-solar-panel"></i>
            </div>
            <div>
                <h2 class="text-dark opacity-7 text-semibold mb-2">Overall Usage</h2>
                <p class="text-sm mb-0 text-uppercase font-weight-bold">{{ $total_kwh }} kWh</p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-sm text-black">
            <div class="flex items-center mb-2">
                <div class="text-purple-500 text-4xl mr-4">
                    <i class="fas fa-history"></i>
                </div>
                <h2 class="text-dark opacity-7 text-semibold mb-2">Recent Transactions</h2>
            </div>
            <ul class="list-disc pl-5 text-sm mb-0 font-weight-dark">
                @foreach ($recent_transactions as $transaction)
                    <li>{{ $transaction->amount }} kWh on {{ $transaction->date_generated }}</li>
                @endforeach
            </ul>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-sm text-black flex items-center">
            <div class="text-yellow-500 text-4xl mr-4">
                <i class="fas fa-check-circle"></i>
            </div>
            <div>
                <h2 class="text-dark opacity-7 text-semibold mb-2">Account Status</h2>
                <p class="text-sm mb-0 text-info font-weight-bold">Active</p>
            </div>
        </div>
    </div>
</div>

@include('users.require.footer')

