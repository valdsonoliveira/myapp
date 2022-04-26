@extends('layouts.default')
@section('content')
    hello world
@endsection
<form  enctype="multipart/form-data" method="post" action="{{route('businesses.store')}}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf
    <input type="text" name="name" value="{{old('name') }}">
    @error('name'){{$message}}@enderror
    <br>
    <input type="text" name="email" value="{{old('email') }}"> @error('email'){{$message}}@enderror<br>
    <input type="text" name="address" value="{{old('address') }}"> @error('address'){{$message}}@enderror<br>
    <input type="file" name="logo"><br>
    <label class="bg-gray-500 rounded rounded-r-none p-2">#</label> <input type="text" class="rounded rounded-l-none focus:outline-none p-2 -ml-2"><br>
    <button type="submit" class="btn btn-blue">Salvar</button>
    <button class="w-full md:w-32 lg:w-48 p-3 bg-indigo-600 text-white">
        Nome
    </button>

</form>
<br>
<br>
<br>
@foreach($businesses as $business)
    @if($business->logo)
        <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($business->logo)}}" width="100">
    @endif
    {{$business->name}} {{$business->email}}<br>
@endforeach
{{$businesses->links()}}

<h1 class="text-3xl font-bold underline">
    Hello world!
</h1>
