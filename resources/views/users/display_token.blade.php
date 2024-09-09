@include('users.require.header')
@include('users.require.navbar')

<body class="">
<div class="container result-container mt-4">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-body text-center">
                <h2 class="text-2xl text-blue-600 font-bold mb-3">Generated Token</h2>
                <p class="mb-2"><strong>Meter Number:</strong> {{ $meterNumber }}</p>
                <p class="mb-2"><strong>Currency Amount:</strong> {{ $amount }}</p>
                <p class="mb-2"><strong>KWh Generated:</strong> {{ $kwhGenerated }}</p>
                <p class="mb-2"><strong>Token:</strong> {{ $token }}</p>
                <p class="mb-2"><strong>Date Generated:</strong> {{ $dateGenerated }}</p>
                <p class="mb-2"><strong>Username:</strong> {{ $userDetails->name }}</p>
                <p class="mb-2"><strong>Email:</strong> {{ $userDetails->email }}</p>
                <p class="mb-2"><strong>Phone:</strong> {{ $userDetails->phone }}</p>
            </div>
        </div>
    </div>
</div>

@include('users.require.footer')
