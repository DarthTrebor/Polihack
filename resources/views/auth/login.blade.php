<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Login Page 1 | Keenthemes</title>
    <meta name="description" content="Login page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{asset("css/login-1.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("css/plugins.bundle.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("css/prismjs.bundle.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("css/style.bundle.css")}}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="/metronic/theme/html/demo2/dist/assets/media/logos/favicon.ico" />
</head>
<body id="kt_body" style="background-image: url({{asset("images/bg-10.jpg")}})" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<div class="d-flex flex-column flex-root">
    <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
        <div class="login-aside d-flex flex-row-auto bgi-size-cover bgi-no-repeat p-10 p-lg-10" style="background-image: url({{asset("images/bg-4.jpg")}});">
            <div class="d-flex flex-row-fluid flex-column justify-content-between">
                <a href="#" class="flex-column-auto mt-5 pb-lg-0 pb-10">
                    <img src="/metronic/theme/html/demo2/dist/assets/media/logos/logo-letter-1.png" class="max-h-70px" alt="" />
                </a>
                <div class="flex-column-fluid d-flex flex-column justify-content-center">
                    <h3 class="font-size-h1 mb-5 text-white">Bine ai venit pe NETMED!</h3>
                    <p class="font-weight-lighter text-white opacity-80">-</p>
                </div>
                <div class="d-none flex-column-auto d-lg-flex justify-content-between mt-10">
                    <div class="opacity-70 font-weight-bold text-white">© 2020 NETMED</div>
                    <div class="d-flex">
                        <a href="#" class="text-white ml-10">Termeni si conditii</a>
                        <a href="#" class="text-white ml-10">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column flex-row-fluid position-relative p-7 overflow-hidden">
            <div class="position-absolute top-0 right-0 text-right mt-5 mb-15 mb-lg-0 flex-column-auto justify-content-center py-5 px-10">
                <span class="font-weight-bold text-dark-50">Nu ai inca un cont?</span>
                <a href="javascript:;" class="font-weight-bold ml-2" id="kt_login_signup">Inregistreaza-te aici!</a>
            </div>
            <div class="d-flex flex-column-fluid flex-center mt-30 mt-lg-0">
                <div class="login-form login-signin">
                    <div class="text-center mb-10 mb-lg-20">
                        <h3 class="font-size-h1">Conecteaza-te!</h3>
                        <p class="text-muted font-weight-bold">Foloeste-ti adresa de E-Mail si parola pentru a te conecta la contul tau</p>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    <form class="form" novalidate="novalidate" action="{{ route("login") }}" method="POST" id="kt_login_signin_form">
                        @csrf
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-5 px-6" type="text" placeholder="Username" name="email" autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-5 px-6" type="password" placeholder="Password" name="password" autocomplete="off" />
                        </div>
                        <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
                            <a href="javascript:void(0);" class="text-dark-50 text-hover-primary my-3 mr-2" id="kt_login_forgot">Ti-ai uitat parola ?</a>
                            <button type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3">Conectare</button>
                        </div>
                    </form>
                </div>
                <div class="login-form login-signup">
                    <div class="text-center mb-10 mb-lg-20">
                        <h3 class="font-size-h1">Creeaza-ti un cont!</h3>
                        <p class="text-muted font-weight-bold">Introdu toate detaliile pentru a-ti creea un cont!</p>
                    </div>
                    <form class="form" novalidate="novalidate" action="{{ route('register') }}" method="POST" id="kt_login_signup_form">
                        @csrf
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-5 px-6" type="text" placeholder="Numele de familie" name="firstname" autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-5 px-6" type="text" placeholder="Prenume" name="lastname" autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-5 px-6" type="email" placeholder="Adresa de E-Mail" name="email" autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-5 px-6" type="text" placeholder="Numar de telefon" name="phone" autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-5 px-6" type="password" placeholder="Parola" name="password" autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-5 px-6" id="password-confirm" type="password" placeholder="Confirmati parola" name="password_confirmation" autocomplete="off" />
                        </div>
                        <div class="form-group d-flex flex-wrap flex-center">
                            <button type="submit" id="kt_login_signup_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Creeare</button>
                            <button type="button" id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-4">Cancel</button>
                        </div>
                    </form>
                </div>
                <div class="login-form login-forgot">
                    <div class="text-center mb-10 mb-lg-20">
                        <h3 class="font-size-h1">Ti-ai uitat parola ?</h3>
                        <p class="text-muted font-weight-bold">Introdu adresa de E-Mail pentru a primi un link de resetare.</p>
                    </div>
                    <form class="form" novalidate="novalidate" id="kt_login_forgot_form">
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-5 px-6" type="email" placeholder="Email" name="email" autocomplete="off" />
                        </div>
                        <div class="form-group d-flex flex-wrap flex-center">
                            <button type="button" id="kt_login_forgot_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Submit</button>
                            <button type="button" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-4">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="d-flex d-lg-none flex-column-auto flex-column flex-sm-row justify-content-between align-items-center mt-5 p-5">
                <div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">© 2020 NETMED</div>
                <div class="d-flex order-1 order-sm-2 my-2">
                    <a href="#" class="text-dark-75 text-hover-primary ml-4">Termeni si conditii</a>
                    <a href="#" class="text-dark-75 text-hover-primary ml-4">Contact</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
<script src="{{asset("js/login-general.js")}}"></script>
</body>
</html>
