@extends('layouts.app')

@section('title', 'Customer Accounts')

@section('content')
    <section class="page-header compact">
        <div class="container">
            <p class="eyebrow">Account directory</p>
            <div class="title-row">
                <div>
                    <h1>Customer Accounts</h1>
                    <p class="lead">Contact details retrieved from the customer database.</p>
                </div>
                <span class="record-count">{{ count($customers) }} records</span>
            </div>
        </div>
    </section>

    <section class="container section table-section">
        <div class="table-wrap">
            <table>
                <caption class="sr-only">Customer account records</caption>
                <thead>
                    <tr>
                        <th scope="col">Customer ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td><span class="record-id">{{ sprintf('CUST-%03d', $customer->id) }}</span></td>
                            <td><strong>{{ $customer->full_name }}</strong></td>
                            <td><a href="mailto:{{ $customer->email }}">{{ $customer->email }}</a></td>
                            <td>{{ $customer->phone }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
