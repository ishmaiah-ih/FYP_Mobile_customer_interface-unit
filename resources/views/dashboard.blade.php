@include('users.require.header')
@include('users.require.navbar')

<body class="bg-white h-screen">
<div class="container mx-auto py-10">

    @if (session('status'))
        <div id="status-alert" class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- kWh Remaining Display -->
        <div class="bg-white p-6 rounded-lg shadow-sm text-black flex items-center">
            <div class="text-blue-500 text-4xl mr-4">
                <i class="fas fa-battery-half"></i>
            </div>
            <div>
                <p>kWh Remaining: <span id="kwh-remaining">0</span></p>
                <p id="warning" class="text-red-500"></p>
            </div>
        </div>

        <!-- Last Transaction Display -->
        <div class="bg-white p-6 rounded-lg shadow-sm text-black flex items-center">
            <div class="text-red-500 text-4xl mr-4">
                <i class="fas fa-calendar-alt"></i>
            </div>
            <div>
                <h2 class="text-dark opacity-7 text-semibold mb-2">Last Transaction</h2>
                <p class="text-sm mb-0 text-uppercase font-weight-bold">{{ $last_transaction_date }}</p>
            </div>
        </div>

        <!-- Overall Usage Display -->
        <div class="bg-white p-6 rounded-lg shadow-sm text-black flex items-center">
            <div class="text-yellow-500 text-4xl mr-4">
                <i class="fas fa-solar-panel"></i>
            </div>
            <div>
                <h2 class="text-dark opacity-7 text-semibold mb-2">Overall Usage</h2>
                <p class="text-sm mb-0 text-uppercase font-weight-bold">{{ $total_kwh }} kWh</p>
            </div>
        </div>

        <!-- Recent Transactions Display -->
        <div class="bg-white p-6 rounded-lg shadow-sm text-black">
            <div class="flex items-center mb-2">
                <div class="text-purple-500 text-4xl mr-4">
                    <i class="fas fa-history"></i>
                </div>
                <h2 class="text-dark opacity-7 text-semibold mb-2">Recent Transactions</h2>
            </div>
            <ul class="list-disc pl-5 text-sm mb-0 font-weight-dark">
                @foreach ($recent_transactions as $transaction)
                    <li>{{ $transaction->amount }} kW on {{ $transaction->date_generated }}</li>
                @endforeach
            </ul>
        </div>

        <!-- Account Status Display -->
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

<script>
    // WebSocket connection to ESP32
    const socket = new WebSocket('ws://192.168.1.171:81');

    socket.onopen = function(event) {
        console.log("WebSocket is open now.");
    };

    // Handle messages received from ESP32
    socket.onmessage = function(event) {
        const data = JSON.parse(event.data);
        document.getElementById('kwh-remaining').innerText = data.kWhRemaining.toFixed(4);
        if (data.warning) {
            document.getElementById('warning').innerText = data.warning;
        } else {
            document.getElementById('warning').innerText = '';
        }
    };

    socket.onerror = function(event) {
        console.error("WebSocket error observed:", event);
    };

    socket.onclose = function(event) {
        console.log("WebSocket is closed now.");
    };
</script>

@include('users.require.footer')
</body>
