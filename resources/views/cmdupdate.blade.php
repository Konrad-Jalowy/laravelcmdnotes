@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{route('cmdcatupdatepost', $category->id)}}" method="POST">
    @csrf
    <label for="name">Category Name:</label>
    <input type="text" name="name" id="name" value="{{$category->name}}"/>
    @error('name')
    <strong>{{$message}}</strong>
    @enderror
    <input type="submit" value="Update">
</form>
</div>
@endsection