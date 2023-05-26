@extends('layout')
@section('title' , 'Show computer')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8">
        <h1>Computers</h1>
    </div>

    <div class="mt-8">
        <p>{{$computer['name']}} ( {{$computer['origin']}}) - <strong>{{$computer['price']}}$</strong></p>
        <a class="edit-btn" href="{{route('computers.edit' , $computer->id)}} ">edit</a>
        <form action="{{route('computers.destroy' , $computer->id)}}" method="POST">
        @csrf 
       @method('DELETE')
            <input calss="delete-btn" type="submit" value="delete">
        </form>
       
    </div>
</div>
@endsection
