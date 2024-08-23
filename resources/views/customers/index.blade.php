@extends('layouts.app')

@section('content')
    <div>

        <div class="text-danger">
            Make sure you run following commands before checking this task.
            <ul>
                <li>php artisan migrate</li>
                <li>php artisan db:seed</li>
            </ul>
        </div>

        <h3 class="text-md-start text-center">Filters</h3>
        <form method="GET" action="{{ route('customers.index') }}" class="d-flex flex-md-row flex-column justify-content-between mb-3 gap-3">
            <div class="flex-fill">
                <label for="search">Search: <small>(Search any Customer Email, Item Name or Order ID (without #))</small></label>
                <input type="text" class="form-control" name="search" id="search" value="{{ request('search') }}" placeholder="Search any Customer Email, Item Name or Order ID (#)">
            </div>
            <div>
                <label class="d-block">&nbsp;</label>
                <button type="submit" class="btn btn-primary d-block w-100">Search</button>
            </div>
        </form>

        <hr>

        <h3 class="my-4 text-md-start text-center">Customer List</h3>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Orders</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!COUNT($customers))
                    <tr><td colspan="2">No Data found. Try changing the filters.</td></tr>
                    @else
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->email }}</td>
                            <td>
                                <ul>
                                    @foreach ($customer->orders as $order)
                                        <li class="mb-3">
                                            Order #: {{ $order->id }} 
                                            <ul>
                                                @foreach ($order->items as $item)
                                                    <li>{{ $item->name }}</li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
