@extends('layout.layout')

@section('title', 'Add user')

@section('content')
<div class="form-wrapper">
    <form action="{{route('update.user', ['user'=>$user->id])}}" method="POST" class="add-user-form">
        @csrf
        @method('PUT')
        <label for="name">Full name</label>
        <input type="text" name="name" placeholder="John Doe" value="{{$user->name}}">
        @error('name')
            <div class="errors">{{ $message }}</div>
        @enderror

        <label for="email">Email</label>
        <input type="email" name="email" placeholder="email@email.com" value="{{$user->email}}">
        @error('email')
            <div class="errors">{{ $message }}</div>
        @enderror

        <label for="phone">Phone number</label>
        <input type="phone" name="phone" placeholder="123456789" value="{{$user->phone}}">
        @error('phone')
            <div class="errors">{{ $message }}</div>
        @enderror
        
        <label for="date_of_birth">Date of birth</label>
        <input type="date" name="date_of_birth" placeholder="01-01-2000" value="{{$user->date_of_birth}}">
        @error('date_of_birth')
            <div class="errors">{{ $message }}</div>
        @enderror

        <button type="submit" class="submit button-red">Edit user</button>

    </form>
</div>
@endsection