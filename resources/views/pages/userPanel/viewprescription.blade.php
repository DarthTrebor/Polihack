@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div id="print">
                            <h5 class="text-center">Unitatea Medicala : NEDMTED - Online</h5>
                            <h5 class="text-center">Localitatea : Braila</h5>
                            <h5 class="text-center">Judetul : Braila</h5>
                            <h5 class="text-danger float-right"> Gratuit: DA</h5>
                            <div class="text-center pt-20">
                                <h2>Reteta medicala</h2>
                                <h3>CNP :
                                    @for($i = 1; $i <= 10; $i++)
                                        <span class="symbol bg-success symbol-25">
                                        <span class="symbol-label text-white font-size-h5 font-weight-bold bg-white-o-30">
                                            {{ $i }}
                                        </span>
                                    </span>
                                    @endfor
                                </h3>

                                <h3>Nume: Dragomir</h3>
                                <h3>Prenume: Robert</h3>
                                <h3>Sex: Masculin</h3>
                                <h3>Varsta:17</h3>
                                <h3>Domicilian jud: Braila</h3>
                                <h3>Localitatea: Braila</h3>
                                <h3>Str. : ma-ta</h3>
                                <h3>Nr: 2</h3>
                                <h3>Id fisa medicala #{{ $prescription->id }}</h3>
                                <p>Diagnostic: 13h1jk3l2</p>

                                <div class="mt-20">
                                    <h1 class="text-center">Reteta propriu-zisa</h1>
                                    <textarea class="form-control"rows="10" disabled>testare</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-20">
                            <button class="btn btn-success btn-block" onclick="window.print()" id="submitButton" class="btn btn-info">Printeaza</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
