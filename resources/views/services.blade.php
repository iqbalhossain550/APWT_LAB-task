@extends('layouts.app')
@section('content')


    <h1>
        Here is some <button>services</button> we serve.
    </h1>
    <button></button>




<h2>Products</h2>
@foreach($products as $m)
<li>{{$m}}</li>
@endforeach

@endsection
