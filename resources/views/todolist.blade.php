@extends('header')

@section('contant')
    <a href="create" class="btn btn-primary">Create </a>
    <h2 class="m-auto text-center" style="color: grey">TO DO LIST</h2>
            <table class="table table-primary table-striped">
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Created At</td>
                    <td>Action</td>
                </tr>

                @foreach($TodoArr as $todo)
                <tr>
                    <td>{{$todo->id}}</td>
                    <td>{{$todo->name}}</td>
                    <td>{{$todo->created_at}}</td>
                    <td><a href="delete/{{$todo->id}} " class="btn btn-danger">Delete</a> | <a href="edit/{{$todo->id}}" class="btn btn-success">Edit</a> </td>
                </tr>

                     
                @endforeach
            
            </table>
      
            @endsection