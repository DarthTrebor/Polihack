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
        @foreach($doctors as $doctor)
            <div class="card card-custom gutter-b">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-shrink-0 mr-7">
                            <div class="symbol symbol-50 symbol-lg-120">
                                <img alt="Pic" src="{{ $doctor->profile_img_link }}">
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex align-items-center justify-content-between flex-wrap mt-2">
                                <div class="mr-3">
                                    <a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">{{ $doctor->lastname }} {{ $doctor->firstname }}
                                        <i class="flaticon2-correct text-success icon-md ml-2"></i></a>
                                    <div class="d-flex flex-wrap my-2">
                                        <a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                             <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                 <!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Communication/Mail-notification.svg-->
                                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                     <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                         <rect x="0" y="0" width="24" height="24"></rect>
                                                         <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000"></path>
                                                         <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5"></circle>
                                                     </g>
                                                 </svg>
                                             </span>{{ $doctor->email }}</a>
                                    </div>
                                </div>
                                <div class="my-lg-0 my-1">
                                    <a href="{{ route('waiting-room', $doctor->lastname) }}" class="btn btn-sm btn-primary font-weight-bolder text-uppercase">Solicita asistenta</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center flex-wrap justify-content-between">
                                <div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5">{{ $doctor->description }}</div>
                                <div class="d-flex mt-4 mt-sm-0">
                                    <span class="font-weight-bold mr-4">Persoane in asteptare</span>
                                    @php
                                        $peopleConnected = rand(0, 30);
                                    @endphp
                                    <div class="progress progress-xs mt-2 mb-2 flex-shrink-0 w-150px w-xl-250px">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: {{ (int)$peopleConnected * 3,3 }}%;" aria-valuenow="{{ (int)$peopleConnected * 3,3 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="font-weight-bolder text-dark ml-4">{{ $peopleConnected }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="separator separator-solid my-7"></div>
                    <div class="d-flex align-items-center flex-wrap">
                        <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                                    <span class="mr-4">
                                                        <i class="flaticon2-heart-rate-monitor icon-2x text-muted font-weight-bold"></i>
                                                    </span>
                            <div class="d-flex flex-column text-dark-75">
                                <span class="font-weight-bolder font-size-sm">Specialitate</span>
                                <span class="font-weight-bolder font-size-h5">
                                                        <span class="text-dark-50 font-weight-bold"></span>{{ $doctor->specialization }}</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                                    <span class="mr-4">
                                                        <i class="flaticon-like icon-2x text-muted font-weight-bold"></i>
                                                    </span>
                            <div class="d-flex flex-column flex-lg-fill">
                                <span class="text-dark-75 font-weight-bolder font-size-sm">{{ rand(1, 100) }} aprecieri</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                                    <span class="mr-4">
                                                        <i class="flaticon-chat-1 icon-2x text-muted font-weight-bold"></i>
                                                    </span>
                            <div class="d-flex flex-column">
                                <span class="text-dark-75 font-weight-bolder font-size-sm">{{ $doctor->conversations->count() }}</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-lg-fill my-1">
                            <span class="mr-4">
                                <i class="flaticon-network icon-2x text-muted font-weight-bold" data-toggle="tooltip" title="" data-original-title="Utilizatori multumiti"></i>
                            </span>
                            <div class="symbol-group symbol-hover">
                                <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Mark Stone">
                                    <img alt="Pic" src="{{ asset('images/users/300_25.jpg') }}">
                                </div>
                                <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Charlie Stone">
                                    <img alt="Pic" src="{{ asset('images/users/300_19.jpg') }}">
                                </div>
                                <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Luca Doncic">
                                    <img alt="Pic" src="{{ asset('images/users/300_4.jpg') }}">
                                </div>
                                <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Nick Mana">
                                    <img alt="Pic" src="{{ asset('images/users/300_23.jpg') }}">
                                </div>
                                <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Teresa Fox">
                                    <img alt="Pic" src="{{ asset('images/users/300_18.jpg') }}">
                                </div>
                                <div class="symbol symbol-30 symbol-circle symbol-light" data-toggle="tooltip" title="" data-original-title="mai multi utilizatori">
                                    <span class="symbol-label font-weight-bold">+5</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
