@extends('layouts.app')

@section('content')
    <div class="container">
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <div id="app">
            <chat :user="{{ Auth::user() }}" :medic="{{ $medic }}"></chat>
            <activity-component :user="{{ Auth::user() }}"></activity-component>
        </div>
        <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    </div>
@endsection

@section("customJS")
    <script>
        $('#kt_datepicker').datepicker({
            todayHighlight: true,
            templates: {
                leftArrow: '&lt;i class="la la-angle-left"&gt;&lt;/i&gt;',
                rightArrow: '&lt;i class="la la-angle-right"&gt;&lt;/i&gt;'
            }
        })
    </script>
@endsection

