@extends('layouts.app')

@section('title', 'User Accounts')

@section('content')
    <section class="page-header compact">
        <div class="container">
            <p class="eyebrow">Access directory</p>
            <div class="title-row">
                <div>
                    <h1>User Accounts</h1>
                    <p class="lead">POS user records retrieved from the application database.</p>
                </div>
                <span class="record-count">{{ count($users) }} records</span>
            </div>
        </div>
    </section>

    <section class="container section table-section">
        <div class="table-wrap">
            <table>
                <caption class="sr-only">User account records</caption>
                <thead>
                    <tr>
                        <th scope="col">User ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td><span class="record-id">{{ sprintf('USR-%03d', $user->id) }}</span></td>
                            <td><strong>{{ $user->full_name }}</strong></td>
                            <td>{{ $user->username }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
