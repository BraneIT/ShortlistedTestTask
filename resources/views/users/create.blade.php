@extends('layout.layout')

@section('title', 'Add user')

@section('content')
<div class="form-wrapper">
    <form action="{{route('store.user')}}" method="POST" class="add-user-form">
        @csrf
        <label for="name">Full name</label>
        <input type="text" name="name" placeholder="John Doe">
        @error('name')
            <div class="errors">{{ $message }}</div>
        @enderror

        <label for="email">Email</label>
        <input type="email" name="email" placeholder="email@email.com">
        @error('email')
            <div class="errors">{{ $message }}</div>
        @enderror

        <label for="phone">Phone number</label>
        <input type="phone" name="phone" placeholder="123456789">
        @error('phone')
            <div class="errors">{{ $message }}</div>
        @enderror
        
        <label for="date_of_birth">Date of birth</label>
        <input type="date" name="date_of_birth" placeholder="01-01-2000">
        @error('date_of_birth')
            <div class="errors">{{ $message }}</div>
        @enderror

        <button type="submit" class="submit button-red">Add user</button>

    </form>
</div>
@endsection