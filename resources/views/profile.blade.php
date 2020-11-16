@extends('layouts.main')

@section('title', 'Profile')

@section('content')
    <div class="col-12 mb-3">
        <div class="card">
			<div class="card-block">
				<h3 class="card-title"><a href="javascript:void(0)">{{ $users[0]->name }}</a></h3>
				<p class="small">Email: {{ $users[0]->email }}</p>
			</div>
        </div>
    </div>
@endsection
​