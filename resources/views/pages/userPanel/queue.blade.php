@extends('layouts.app')

@section('content')
    <div class="container" id="app">
        <div class="row justify-content-center">
            <activity-component :user="{{ Auth::user() }}"></activity-component>
            <queue-component :user="{{ Auth::user() }}"></queue-component>
        </div>
    </div>
@endsection
