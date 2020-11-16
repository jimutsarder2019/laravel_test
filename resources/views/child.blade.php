@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection

<ul>
@foreach ($users as $user)
    <li>This is user {{ $user->name }}</li>
@endforeach
</ul>

<ul>
@php
   foreach($users as $u)
   {
	   print '<li>'.$u->name.'</li>';
   }
@endphp
</ul>

<form method="POST" action="/profile">
    @csrf
	@method('PUT')
</form>



<div>
	<form>
	</form>
</div>