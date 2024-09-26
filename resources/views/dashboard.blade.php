@include('users.require.header')
@include('users.require.navbar')

<body class="bg-white h-screen">
<!-- Popup message -->
{{--<div id="welcome-popup"--}}
{{--     class="fixed top-0 left-1/2 transform -translate-x-1/2 mt-6 p-4 bg-red-500 text-white rounded-md shadow-sm hidden">--}}
{{--    Welcome to Energy Top-up System <span class="text-green-300 font-bold">{{ $name }}!</span>--}}
{{--</div>--}}
<!-- End popup -->
<div class="container mx-auto py-10">
{{--   welcome message--}}
    @if (session('status'))
        <div id="status-alert" class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif



    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-sm text-black flex items-center">
            <div class="text-blue-500 text-4xl mr-4">
                <i class="fas fa-battery-half"></i>
            </div>
            <div>
                <h2 class="text-dark opacity-7 text-semibold mb-2">Remaining Balance</h2>
{{--                <p>kWh Consumed: <span id="kwh-consumed">Loading...</span></p>--}}
                <p>kWh Generated: <span id="kwh-generated">Loading...</span></p>
                <p>kWh Remaining: <span id="kwh-remaining">Loading...</span></p>
{{--                <p class="text-sm mb-0 text-uppercase font-weight-bold">{{ $remaining_balance_kwh }} kWh</p>--}}
{{--                <p class="text-sm mb-0 text-uppercase font-weight-bold"><span id="kwh-value">Loading...</span> kWh</p>--}}
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


<script type="module">
    // Import Firebase functions
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.13.1/firebase-app.js";
    import { getDatabase, ref, onValue } from "https://www.gstatic.com/firebasejs/10.13.1/firebase-database.js";

    // Firebase configuration
    const firebaseConfig = {
        apiKey: "AIzaSyDR9RTLdrjqp07u4szkkB7gJXtwwV3CLLE",
        authDomain: "esp32-7ef3c.firebaseapp.com",
        databaseURL: "https://esp32-7ef3c-default-rtdb.firebaseio.com",
        projectId: "esp32-7ef3c",
        storageBucket: "esp32-7ef3c.appspot.com",
        messagingSenderId: "370100002558",
        appId: "1:370100002558:web:fbbc6e44a40222f5398faf"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const database = getDatabase(app);

    // Reference to the energyData in the database
    const energyDataRef = ref(database, 'energyData');

    // Display the kWh values and update them in real time
    onValue(energyDataRef, (snapshot) => {
        const data = snapshot.val();
        document.getElementById('kwh-consumed').textContent = data.kWhConsumed || 0;
        document.getElementById('kwh-generated').textContent = data.kWhGenerated || 0;
        document.getElementById('kwh-remaining').textContent = data.kWhRemaining || 0;
    });
</script>


@include('users.require.footer')

