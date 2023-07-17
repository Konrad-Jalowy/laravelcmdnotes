@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{route('langaddpost')}}" method="POST">
    @csrf
    <label for="name">Language Name:</label>
    <input type="text" name="name" id="name"/>
    @error('name')
    <strong>{{$message}}</strong>
    @enderror
    <input type="submit" value="Add Language">
</form>
</div>
@endsection