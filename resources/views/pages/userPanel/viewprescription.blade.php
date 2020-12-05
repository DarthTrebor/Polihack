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
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div id="print">
                            {!! $prescription->content !!}
                        </div>
                        <div class="text-center mt-20">
                            <button class="btn btn-success btn-block" onclick="window.print()" id="submitButton" >Printeaza</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
