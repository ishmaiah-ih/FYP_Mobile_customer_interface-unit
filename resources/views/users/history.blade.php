{{--@include('users.require.header')--}}
{{--@include('users.require.navbar')--}}

{{--<body class="bg-white min-h-screen">--}}
{{--<div class="container mx-auto py-8">--}}
{{--    <h2 class="text-2xl font-bold mb-6 text-gray-900 text-center">Top-Up History</h2>--}}

{{--    <!-- History Table -->--}}
{{--    <div class="overflow-x-auto">--}}
{{--        <table class="min-w-full bg-white rounded-lg shadow-md table-hover">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th class="py-2 px-4 bg-gray-200 text-left text-sm font-medium text-gray-700">Date</th>--}}
{{--                <th class="py-2 px-4 bg-gray-200 text-left text-sm font-medium text-gray-700">Transaction ID</th>--}}
{{--                <th class="py-2 px-4 bg-gray-200 text-left text-sm font-medium text-gray-700">Meter Number</th>--}}
{{--                <th class="py-2 px-4 bg-gray-200 text-left text-sm font-medium text-gray-700">Amount</th>--}}
{{--                <th class="py-2 px-4 bg-gray-200 text-left text-sm font-medium text-gray-700">KWh Generated</th>--}}
{{--                <th class="py-2 px-4 bg-gray-200 text-left text-sm font-medium text-gray-700">Token</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach ($topUpHistory as $history)--}}
{{--                <tr>--}}
{{--                    <td class="py-2 px-4 border-b">{{ $history->date_generated }}</td>--}}
{{--                    <td class="py-2 px-4 border-b">{{ $history->id }}</td>--}}
{{--                    <td class="py-2 px-4 border-b">{{ $history->meter_number }}</td>--}}
{{--                    <td class="py-2 px-4 border-b">{{ $history->amount }}</td>--}}
{{--                    <td class="py-2 px-4 border-b">{{ $history->kwh_generated }}</td>--}}
{{--                    <td class="py-2 px-4 border-b max-w-xs overflow-hidden truncate">{{ $history->token }}</td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}
{{--</div>--}}

{{--@include('users.require.footer')--}}


@include('users.require.header')
@include('users.require.navbar')

<body class="bg-white min-h-screen">
<div class="container mx-auto py-8">
    <h2 class="text-2xl font-bold mb-6 text-gray-900 text-center">Top-Up History</h2>

    <!-- History Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg shadow-md table-hover">
            <thead>
            <tr>
                <th class="py-2 px-4 bg-gray-200 text-left text-sm font-medium text-gray-700">Date</th>
                <th class="py-2 px-4 bg-gray-200 text-left text-sm font-medium text-gray-700">Transaction ID</th>
                <th class="py-2 px-4 bg-gray-200 text-left text-sm font-medium text-gray-700">Meter Number</th>
                <th class="py-2 px-4 bg-gray-200 text-left text-sm font-medium text-gray-700">Amount</th>
                <th class="py-2 px-4 bg-gray-200 text-left text-sm font-medium text-gray-700">KWh Generated</th>
                <th class="py-2 px-4 bg-gray-200 text-left text-sm font-medium text-gray-700">Token</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($topUpHistory as $history)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $history->date_generated }}</td>
                    <td class="py-2 px-4 border-b">{{ $history->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $history->meter_number }}</td>
                    <td class="py-2 px-4 border-b">{{ $history->amount }}</td>
                    <td class="py-2 px-4 border-b">{{ $history->kwh_generated }}</td>
                    <td class="py-2 px-4 border-b max-w-xs overflow-hidden truncate">{{ $history->token }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('users.require.footer')
