@extends('header')

@section('contant')
    <a href="/" class="btn btn-info">View  list</a>
    <div class="container text-center">
    
    

    <form action="../edit_submit/{{$TodoArr_name->id}}">
            <input type="text" name="name" value="{{$TodoArr_name->name}}" class='form-control'>
            <input type="submit" class="btn btn-primary">
    </form>
    </div>
         
     
    @endsection