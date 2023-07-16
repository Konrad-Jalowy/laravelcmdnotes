@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{route('cmdcatupdatenotepost', $command->id)}}" method="POST">
    @csrf
    <label for="command">Command:</label>
        <textarea class="form-control" name="command" id="command" cols="30" rows="10">{{$command->command}}</textarea>
        <label for="description">Description:</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{$command->description}}</textarea>
    <label for="category_id" class="form-control">Category:</label>
        <select name="category_id" id="category_id" class="form-select">
            @foreach ($categories as $category)
            @if($category->id === $command->category_id)
            <option value="{{$category->id}}" selected>{{$category->name}}</option>
            @else
            <option value="{{$category->id}}" selected>{{$category->name}}</option>
            @endif
            @endforeach
        </select>
    <input type="submit" value="Update" class="btn btn-primary">
</form>
</div>
@endsection