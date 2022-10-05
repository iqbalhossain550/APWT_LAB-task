@extends('layouts.app')
@section('content')

<h1>Group Name <strong>{{$name}} </strong></h1>


<h2>Members</h2>
@foreach($names as $n)
<li>{{$n}}</li>

@endforeach


@endsection
