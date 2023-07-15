@extends('layouts.app')
@section('content')
<form action="{{route('cmdcataddpost')}}" method="POST">
    @csrf
    <label for="name">Category Name:</label>
    <input type="text" name="name" id="name"/>
    @error('name')
    <strong>{{$message}}</strong>
    @enderror
    <input type="submit" value="Add Category">
</form>
@endsection