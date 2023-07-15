@extends('layouts.app')
@section('content')

<ul>
    @foreach($commands as $command)
    <li><a href="">{!! $command->command !!}</a></li>
    @endforeach
</ul>
@endsection