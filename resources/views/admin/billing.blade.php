{{-- resources/views/dashboard.blade.php --}}
@extends('admin.main.layout')

@section('title', 'Billing - Energy Token Top-Up System')

@section('content')
    <main class="overflow-y-auto h-full">
        <div class="row p-2">
            <div class="col-lg-4">
                <div class="card h-100 border border-gray-200 rounded-lg shadow-sm">
                    <div class="card-header bg-white border-b border-gray-200 p-4">
                        <div class="flex justify-between items-center">
                            <h6 class="text-lg font-semibold text-gray-800">Invoices</h6>
                            <button class="btn btn-outline-primary btn-sm">View All</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row mt-6 shadow-md mx-3">
            <div class="col-md-7">
                <div class="card border border-gray-200 rounded-lg shadow-sm">
                    <div class="card-header bg-white border-b border-gray-200 p-4">
                        <h6 class="text-lg font-semibold text-gray-800">Recent Transactions</h6>
                    </div>
                    <div class="card-body p-6">
                        <ul class="list-group">
                            @foreach ($transactions as $transaction)
                                <li class="list-group-item flex flex-col p-2 mb-3 bg-gray-100 rounded-lg border border-gray-200">
                                    <div class="mb-2">
                                        <h6 class="text-sm text-gray-600"><span class="text-gray-900 mr-3 opacity-7">Date:</span> {{ $transaction->date_generated }}
                                        </h6>
                                        <h6 class="text-sm text-gray-600"><span
                                                class="text-gray-900 mr-3">Id:</span> {{ $transaction->id }}</h6>
                                        <span class="block text-gray-600 "><span
                                                class="text-gray-900 mr-3">username:</span  {{ $transaction->email}} </span>
                                        <span class="block text-gray-800"><span
                                                class="text-gray-900 mr-3">Meter-Number:</span> {{ $transaction->meter_number }}</span>
                                        <span class="block text-gray-800"><span
                                                class="text-gray-900 mr-3">Purchased:</span> {{ $transaction->amount }}</span>
                                        <span class="block text-gray-800"><span
                                                class="text-gray-900 mr-3">Kwh Generated</span> {{ $transaction->kwh_generated }}</span>
                                        <span class="block text-gray-800 truncate max-w-xs"><span
                                                class="text-red-900 mr-3">Token:</span>
                                        {{ substr($transaction->token, 0, 50) . '...' . substr($transaction->token, -4) }}
                                    </span>
                                    </div>
                                    <div class="flex justify-end space-x-2">
                                        <a class="text-red-600 hover:text-red-800" href="{{url('delete_token', $transaction->id)}}"><i
                                                class="far fa-trash-alt"></i> Delete</a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
