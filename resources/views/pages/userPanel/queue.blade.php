@extends('layouts.app')

@section('content')
    <div class="container" id="app">
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <div class="row justify-content-center">
            <activity-component :user="{{ Auth::user() }}"></activity-component>
            <queue-component :user="{{ Auth::user() }}" :medic="{{ $medic }}"></queue-component>
        </div>
    </div>
@endsection
