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
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <div class="card card-custom card-stretch gutter-b">
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bolder text-dark">Toate retetele mele</span>
                                <span class="text-muted mt-3 font-weight-bold font-size-sm">in total
													<span class="text-primary">{{ count($prescriptions) }}</span></span>
                            </h3>
                        </div>
                        <div class="card-body pt-2 pb-0 mt-n3">
                            <div class="table-responsive">
                                <table class="table table-borderless table-vertical-center">
                                    <thead>
                                    <tr>
                                        <th class="p-0 w-50px"></th>
                                        <th class="p-0 w-100 min-w-200px"></th>
                                        <th class="p-0"></th>
                                        <th class="p-0 min-w-180px w-100"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($prescriptions as $prescription)
                                        <tr>
                                            <td class="pl-0 pt-0 py-5">
                                                <div class="symbol symbol-45 symbol-light-primary mr-2">
													<span class="symbol-label">
														<span class="svg-icon svg-icon-2x svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                    <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
                                                                    <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
                                                                    <rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1"/>
                                                                    <rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1"/>
                                                                </g>
                                                            </svg>
														</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="pl-0">
                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{ $prescription->title }}</a>
                                                <span class="text-muted font-weight-bold d-block">Oferita de doctorul <b>{{ $prescription->getMedic->lastname }} {{ $prescription->getMedic->firstname }}</b></span>
                                            </td>
                                            <td></td>
                                            <td class="text-left">
                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $prescription->created_at }}</span>
                                                <span class="text-muted font-weight-bold d-block font-size-sm">Timpul creearii</span>
                                            </td>
                                            <td class="text-right pr-0">
                                                <a href="#" class="btn btn-icon btn-light btn-sm">
													<span class="svg-icon svg-icon-md svg-icon-primary">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<polygon points="0 0 24 0 24 24 0 24"></polygon>
																<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1"></rect>
																<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
															</g>
														</svg>
													</span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <!--end::Tbody-->
                                </table>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Base Table Widget 10-->
                </div>
            </div>
        </div>
    </div>
@endsection
