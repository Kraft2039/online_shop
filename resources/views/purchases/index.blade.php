@extends('layouts.main')
@section('shop')
    <h5>Purchases</h5>
    <a href="{{ route('reports.getReport') }}">Report json</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Product Id</th>
            <th scope="col">Product name</th>
            <th scope="col">Date buy</th>
        </tr>
        </thead>
        <tbody>
        @foreach($purchases as $purchas)
        <tr>
            <td>{{ $purchas->product_id }}</td>
            <td>{{ $products[$purchas->product_id-1]->name_prod }}</td>
            <td>{{ $purchas->created_at->format('d-m-Y') }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
