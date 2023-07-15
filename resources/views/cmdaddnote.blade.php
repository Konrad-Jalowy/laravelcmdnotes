@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{route('cmdcataddnotepost')}}" method="POST">
    @csrf
    <label for="command">Command:</label>
        <textarea class="form-control" name="command" id="command" cols="30" rows="10"></textarea>
        <label for="description">Description:</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
    <label for="category_id" class="form-control">Category:</label>
        <select name="category_id" id="category_id" class="form-select">
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    <input type="submit" value="Add CMD Note" class="btn btn-primary">
</form>
</div>
@endsection