@extends('layout')
@section('title', 'Create Computer')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
  <div class="login-box">
    <h1>Create a new Computer</h1>
  </div>
  <div class="flex justify-center">
    <form action="{{route('computers.store')}}" method="post">
       @csrf 
      <div class="form-field">
        <label for="computer-name">Computer Name</label>
        <input id="computer-name" name="computer-name" value="{{old('computer-name')}}" type="text">
        @error('computer-name')
        <div class="form-error">
          {{$message}}
        </div>
        @enderror

      </div>
      <div class="form-field">
        <label for="computer-origin">Computer Origin</label>
        <input id="computer-origin" name="computer-origin" value="{{old('computer-origin')}}" type="text">
        @error('computer-origin')
        <div class="form-error">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="form-field">
        <label for="computer-price">Computer Price</label>
        <input id="computer-price" name="computer-price" value="{{old('computer-price')}}" type="text">
        @error('computer-price')
        <div class="form-error">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="form-field">
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>
</div>
@endsection
