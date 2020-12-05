<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>{{ $title }}</title>
    <meta name="description" content="Basic calendar examples" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset("css/fullcalendar.bundle.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("css/plugins.bundle.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("css/prismjs.bundle.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("css/style.bundle.css") }}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{ asset('images/NETMED-cross.ico') }}" />
</head>
<body>
<div class="d-flex flex-row-fluid bgi-size-cover bgi-position-center" style="background-image: url('{{ asset('images/bg-9.jpg') }}')">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center border-bottom border-white">
            <a>
                <img src="{{ asset('images/NETMED.png') }}" style="width: 120px;">
            </a>
            <div class="d-flex">
                <a href="{{ route('login') }}" class="font-size-h4 font-weight-bold">Inregistrare</a>
            </div>
        </div>
        <div class="d-flex align-items-stretch text-center flex-column py-40">
            <h1 class="text-dark p-6 font-weight-bolder mb-12">Cum va putem ajuta?</h1>
            <form class="d-flex position-relative w-75 px-lg-40 m-auto">
                <div class="input-group">
                    <div class="input-group-prepend">
					<span class="input-group-text bg-white border-0 py-7 px-8">
						<span class="svg-icon svg-icon-xl">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24"></rect>
									<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
									<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
								</g>
							</svg>
                        </span>
					</span>
                    </div>
                    <input type="text" class="form-control h-auto border-0 py-7 px-1 font-size-h6" placeholder="Ce vrei sa cauti astazi?">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="bg-gray-200">
    <div class="container mt-10 mb-10">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="text-center">
                    <h1> Ce oferim?</h1>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-custom wave shadow wave-animate-slow wave-primary mb-8 mb-lg-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center p-5">
                            <div class="mr-6">
							<span class="svg-icon svg-icon-primary svg-icon-4x">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <polygon fill="#000000" opacity="0.3" points="5 15 3 21.5 9.5 19.5"/>
                                        <path d="M13.5,21 C8.25329488,21 4,16.7467051 4,11.5 C4,6.25329488 8.25329488,2 13.5,2 C18.7467051,2 23,6.25329488 23,11.5 C23,16.7467051 18.7467051,21 13.5,21 Z M8.5,13 C9.32842712,13 10,12.3284271 10,11.5 C10,10.6715729 9.32842712,10 8.5,10 C7.67157288,10 7,10.6715729 7,11.5 C7,12.3284271 7.67157288,13 8.5,13 Z M13.5,13 C14.3284271,13 15,12.3284271 15,11.5 C15,10.6715729 14.3284271,10 13.5,10 C12.6715729,10 12,10.6715729 12,11.5 C12,12.3284271 12.6715729,13 13.5,13 Z M18.5,13 C19.3284271,13 20,12.3284271 20,11.5 C20,10.6715729 19.3284271,10 18.5,10 C17.6715729,10 17,10.6715729 17,11.5 C17,12.3284271 17.6715729,13 18.5,13 Z" fill="#000000"/>
                                    </g>
								</svg>
							</span>
                            </div>
                            <div class="d-flex flex-column">
                                <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">Examinare Live</a>
                                <div class="text-dark-75">Iti vom analiza pe loc simptomele tale prin intermediul unui chat!</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-custom wave wave-animate-slow wave-danger mb-8 mb-lg-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center p-5">
                            <div class="mr-6">
								<span class="svg-icon svg-icon-danger svg-icon-4x">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24"/>
                                            <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                            <rect fill="#000000" x="6" y="11" width="9" height="2" rx="1"/>
                                            <rect fill="#000000" x="6" y="15" width="5" height="2" rx="1"/>
                                        </g>
									</svg>
								</span>
                            </div>
                            <div class="d-flex flex-column">
                                <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">Retete</a>
                                <div class="text-dark-75">Oferim retete pe gratis pentru orice farmacie!</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-custom wave wave-animate-slow wave-success mb-8 mb-lg-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center p-5">
                            <div class="mr-6">
								<span class="svg-icon svg-icon-success svg-icon-4x">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero"/>
                                            <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6"/>
                                        </g>
									</svg>
								</span>
                            </div>
                            <div class="d-flex flex-column">
                                <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">Accesibil</a>
                                <div class="text-dark-75">Aici sunt prezenti medici din toata Romania!</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-white">
    <div class="card">
        <div class="position-absolute w-100 h-50 rounded-card-top" style="background-color: #a2c8d9"></div>
        <div class="card-body position-relative">
            <h3 class="7 text-white text-center my-10 my-lg-15">Abonamente</h3>
            <div class="d-flex justify-content-center">
                <ul class="nav nav-pills nav-primary mb-10 mb-lg-20 bg-white rounded" id="pills-tab" role="tablist">
                    <li class="nav-item p-0 m-0">
                        <a class="nav-link active font-weight-bolder rounded-right-0 px-8 py-5" id="pills-tab-1" data-toggle="pill" href="#kt-pricing-2_content1" aria-expanded="true" aria-controls="kt-pricing-2_content1">Abonamente Prestabilite</a>
                    </li>
                    <li class="nav-item p-0 m-0">
                        <a class="nav-link font-weight-bolder rounded-left-0 px-8 py-5" id="pills-tab-2" data-toggle="pill" href="#kt-pricing-2_content2" aria-expanded="true" aria-controls="kt-pricing-2_content2">Abonament Personalizat</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane show active row text-center" id="kt-pricing-2_content1" role="tabpanel" aria-labelledby="pills-tab-1">
                    <div class="card-body bg-white col-11 col-lg-12 col-xxl-10 mx-auto">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                                    <div class="d-flex flex-center position-relative mb-25">
										<span class="svg svg-fill-primary opacity-4 position-absolute">
											<svg width="175" height="200">
												<polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0"></polyline>
											</svg>
										</span>
                                        <span class="svg-icon svg-icon-5x svg-icon-primary">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                                </g>
											</svg>
										</span>
                                    </div>
                                    <h4 class="font-size-h3 mb-10">Solo</h4>
                                    <div class="d-flex flex-column line-height-xl pb-10">
                                        <span>O singura persoana</span>
                                        <span>Retete online</span>
                                        <span>Chat live cu doctorii</span>
                                    </div>
                                    <span class="font-size-h1 d-block font-weight-boldest text-dark">80
																<sup class="font-size-h3 font-weight-normal pl-1">RON / luna</sup></span>
                                    <div class="mt-7">
                                        <a href="{{ route('login') }}" target="_blank">
                                            <button type="button" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Alege</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 border-x-0 border-x-md border-y border-y-md-0">
                                <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                                    <div class="d-flex flex-center position-relative mb-25">
																	<span class="svg svg-fill-primary opacity-4 position-absolute">
																		<svg width="175" height="200">
																			<polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0"></polyline>
																		</svg>
																	</span>
                                        <span class="svg-icon svg-icon-5x svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
																		</svg>
																	</span>
                                    </div>
                                    <h4 class="font-size-h3 mb-10">Family</h4>
                                    <div class="d-flex flex-column line-height-xl mb-10">
                                        <span>3 Persoane</span>
                                        <span>Retete online</span>
                                        <span>Chat live cu doctorii</span>
                                    </div>
                                    <span class="font-size-h1 d-block font-weight-boldest text-dark">220
																<sup class="font-size-h3 font-weight-normal pl-1">RON / luna</sup></span>
                                    <div class="mt-7">
                                        <a href="{{ route('login') }}" target="_blank">
                                            <button type="button" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Alege</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                                    <div class="d-flex flex-center position-relative mb-25">
																	<span class="svg svg-fill-primary opacity-4 position-absolute">
																		<svg width="175" height="200">
																			<polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0"></polyline>
																		</svg>
																	</span>
                                        <span class="svg-icon svg-icon-5x svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <rect fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4" rx="1"/>
        <path d="M5,10 L7,10 C7.55228475,10 8,10.4477153 8,11 L8,13 C8,13.5522847 7.55228475,14 7,14 L5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 L14,7 C14,7.55228475 13.5522847,8 13,8 L11,8 C10.4477153,8 10,7.55228475 10,7 L10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,10 L13,10 C13.5522847,10 14,10.4477153 14,11 L14,13 C14,13.5522847 13.5522847,14 13,14 L11,14 C10.4477153,14 10,13.5522847 10,13 L10,11 C10,10.4477153 10.4477153,10 11,10 Z M17,4 L19,4 C19.5522847,4 20,4.44771525 20,5 L20,7 C20,7.55228475 19.5522847,8 19,8 L17,8 C16.4477153,8 16,7.55228475 16,7 L16,5 C16,4.44771525 16.4477153,4 17,4 Z M17,10 L19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 L17,14 C16.4477153,14 16,13.5522847 16,13 L16,11 C16,10.4477153 16.4477153,10 17,10 Z M5,16 L7,16 C7.55228475,16 8,16.4477153 8,17 L8,19 C8,19.5522847 7.55228475,20 7,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,17 C4,16.4477153 4.44771525,16 5,16 Z M11,16 L13,16 C13.5522847,16 14,16.4477153 14,17 L14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 L10,17 C10,16.4477153 10.4477153,16 11,16 Z M17,16 L19,16 C19.5522847,16 20,16.4477153 20,17 L20,19 C20,19.5522847 19.5522847,20 19,20 L17,20 C16.4477153,20 16,19.5522847 16,19 L16,17 C16,16.4477153 16.4477153,16 17,16 Z" fill="#000000"/>
    </g>
																		</svg>
																	</span>
                                    </div>
                                    <h4 class="font-size-h3 mb-10">Atomic Nuclear Family</h4>
                                    <div class="d-flex flex-column line-height-xl mb-10">
                                        <span>6 Persoane</span>
                                        <span>Retete online</span>
                                        <span>Chat live cu doctorii</span>
                                    </div>
                                    <span class="font-size-h1 d-block font-weight-boldest text-dark">430
																<sup class="font-size-h3 font-weight-normal pl-1">RON / luna</sup></span>
                                    <div class="mt-7">
                                        <a href="{{ route('login') }}" target="_blank">
                                            <button type="button" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Alege</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane row text-center" id="kt-pricing-2_content2" role="tabpanel" aria-labelledby="pills-tab-2">
                    <div class="card-body bg-white col-lg-4 mx-auto">
                        <div class="row justify-content-center">
                            <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                                <div class="d-flex flex-center position-relative mb-25">
																	<span class="svg svg-fill-primary opacity-4 position-absolute">
																		<svg width="175" height="200">
																			<polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0"></polyline>
																		</svg>
																	</span>
                                    <span class="svg-icon svg-icon-5x svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24"></rect>
																				<path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																				<path d="M3.28077641,9 L20.7192236,9 C21.2715083,9 21.7192236,9.44771525 21.7192236,10 C21.7192236,10.0817618 21.7091962,10.163215 21.6893661,10.2425356 L19.5680983,18.7276069 C19.234223,20.0631079 18.0342737,21 16.6576708,21 L7.34232922,21 C5.96572629,21 4.76577697,20.0631079 4.43190172,18.7276069 L2.31063391,10.2425356 C2.17668518,9.70674072 2.50244587,9.16380623 3.03824078,9.0298575 C3.11756139,9.01002735 3.1990146,9 3.28077641,9 Z M12,12 C11.4477153,12 11,12.4477153 11,13 L11,17 C11,17.5522847 11.4477153,18 12,18 C12.5522847,18 13,17.5522847 13,17 L13,13 C13,12.4477153 12.5522847,12 12,12 Z M6.96472382,12.1362967 C6.43125772,12.2792385 6.11467523,12.8275755 6.25761704,13.3610416 L7.29289322,17.2247449 C7.43583503,17.758211 7.98417199,18.0747935 8.51763809,17.9318517 C9.05110419,17.7889098 9.36768668,17.2405729 9.22474487,16.7071068 L8.18946869,12.8434035 C8.04652688,12.3099374 7.49818992,11.9933549 6.96472382,12.1362967 Z M17.0352762,12.1362967 C16.5018101,11.9933549 15.9534731,12.3099374 15.8105313,12.8434035 L14.7752551,16.7071068 C14.6323133,17.2405729 14.9488958,17.7889098 15.4823619,17.9318517 C16.015828,18.0747935 16.564165,17.758211 16.7071068,17.2247449 L17.742383,13.3610416 C17.8853248,12.8275755 17.5687423,12.2792385 17.0352762,12.1362967 Z" fill="#000000"></path>
																			</g>
																		</svg>
																	</span>
                                </div>
                                <h4 class="font-size-h3 mb-10">Family Pack Personalizat</h4>
                                <div class="d-flex flex-column line-height-xl mb-10">
                                    <span>Numar personalizat de membrii</span>
                                    <span>Retete online</span>
                                    <span>Chat online cu doctorii</span>
                                </div>
                                <form class="form">
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>Introdu numarul de persoane</label>
                                            <input  class="form-control" id="customSubscription">
                                        </div>
                                    </div>
                                </form>
                                <span class="font-size-h1 d-block font-weight-boldest text-dark" id="price">0
																<sup class="font-size-h3 font-weight-normal pl-1">RON / luna</sup></span>
                                <div class="mt-7">
                                    <a href="{{ route('login') }}" target="_blank">
                                        <button type="button" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Alege</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer bg-gray-200 py-4 d-flex flex-lg-column" id="kt_footer">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted font-weight-bold mr-2">2020©</span>
            <a class="text-dark-75 text-hover-primary">NETMED</a>
        </div>
        <div class="nav nav-dark order-1 order-md-2">
            <a class="nav-link pr-3 pl-0">Despre</a>
            <a class="nav-link px-3">Echipa noastra</a>
            <a class="nav-link pl-3 pr-0">Contact</a>
        </div>
    </div>
</div>
<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
<script src="{{ asset("js/plugins.bundle.js") }}"></script>
<script src="{{ asset("js/prismjs.bundle.js") }}"></script>
<script src="{{ asset("js/scripts.bundle.js") }}"></script>
<script>
    $(document).ready(function() {
        setInterval(function() {
            const obj = document.getElementById('customSubscription');

            if(obj.value > 0) {
                const price = obj.value * 80 - 10 * (obj.value - 1);

                $("#price").html(
                    '<span class="font-size-h1 d-block font-weight-boldest text-dark" id="price">' + price +
                    '\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<sup class="font-size-h3 font-weight-normal pl-1">RON / luna</sup></span>\n' +
                    '                                '
                );
            } else {
                $("#price").html(
                    '<span class="font-size-h1 d-block font-weight-boldest text-dark" id="price">0' +
                    '\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<sup class="font-size-h3 font-weight-normal pl-1">RON / luna</sup></span>\n' +
                    '                                '
                );
            }
        }, 500);
    })
</script>
</body>
