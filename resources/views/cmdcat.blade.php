@extends('layouts.app')
@section('content')
<ul>
    @foreach($categories as $category)
    <li><a href="{{route('cmdcatid', $category->id)}}" class="btn btn-success">{{$category->name}}</a>
    <a href="{{route('cmdcatdel', $category->id)}}" class="btn btn-primary">Delete</a>
</li>
    @endforeach
</ul>
@endsection