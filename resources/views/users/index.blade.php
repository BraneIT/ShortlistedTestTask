@extends('layout.layout')

@section('title', 'Home')

@section('content')
    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif    
    <div class="table-wrapper">
        <div class="table-container">
            <table class="users-table">
                
                    <tr>
                        <th>Full name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Age</th>
                        <th></th>
                        <th></th>
                    </tr>
                
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                        <td>{{ $user->phone }}</td>
                        <td>{{$user->age}} </td>
                        <td><a href="{{route("edit.user", $user->id)}}" class="buttons edit">Edit</a> </td>
                        <td> 
                            <form action="{{route("destroy.user", $user->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="buttons delete" type="submit">Delete</button>
                            </form> 
                        </td>
                    </tr>     
                    @endforeach
            </table>           
        </div>
        {{$users->onEachSide(2)->links()}}
    </div>
    
@endsection