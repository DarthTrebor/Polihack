@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="app">
            <chat :user="{{ Auth::user() }}" :medic="{{ $medic }}"></chat>
        </div>
        <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    </div>
@endsection

