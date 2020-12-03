"use strict";
// Class Definition
var KTLogin = function() {
    var _login;

    var _showForm = function(form) {
        var cls = 'login-' + form + '-on';
        var form = 'kt_login_' + form + '_form';

        _login.removeClass('login-forgot-on');
        _login.removeClass('login-signin-on');
        _login.removeClass('login-signup-on');

        _login.addClass(cls);
    }

    $('#kt_login_forgot').on('click', function (e) {

        _showForm('forgot');
    });

// Handle signup
    $('#kt_login_signup').on('click', function (e) {

        _showForm('signup');
    });

    $('#kt_login_signup_cancel').on('click', function (e) {
        _showForm('signin');
    });

    $('#kt_login_forgot_cancel').on('click', function(e) {
        _showForm('signin');
    })


    // Public Functions
    return {
        // public functions
        init: function() {
            _login = $('#kt_login');
        }
    };
}();

// Class Initialization
jQuery(document).ready(function() {
    KTLogin.init();
});
