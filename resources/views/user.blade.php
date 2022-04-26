@extends('layouts.default')
@section('content')
{{$user->name}}<br>
{{$user->email}}
{{date('d/m/y')}}
<br>
@endsection