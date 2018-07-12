@extends('layouts.layout')

@section('title', 'Currency market')

@section('content')

    <div class="container">

        @if (count($currencies) === 0)
            <h4>No currencies</h4>
        @else
            <h3 class="text-center">Currency market</h3>
            <div class="table-responsive text-center">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="col-md-2 text-center">Logo</th>
                        <th class="col-md-2 text-center">Name</th>
                        <th class="col-md-2 text-center">Short name</th>
                        <th class="col-md-2 text-center">Price</th>
                        <th class="col-md-2 text-center">Edit</th>
                        <th class="col-md-2 text-center">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                        @each('currency-list-item', $currencies, 'currency')
                    </tbody>
                </table>
            </div>
        @endif
    </div>

@endsection
