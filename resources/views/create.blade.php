@extends('header')

@section('contant')
    <a href="/" class="btn btn-info">View list</a>
    <div class="container text-center">
    
    

    <form action="todo_submit">
            <input type="text" name="name" placeholder="Enter to do list" class='form-control'>
            <input type="submit" class="btn btn-primary">
    </form>
    </div>
         
     
    @endsection