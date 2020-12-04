@extends('layouts.app')

@section("customCSS")
    <link rel="stylesheet" href="{{ asset('css/fullcalendar.bundle.css') }}" />
@endsection

@section('content')
    <div class="container">
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Programarile mele - Calendar</h3>
                </div>
            </div>
            <div class="card-body">
                <div id="kt_calendar"></div>
            </div>
        </div>
    </div>
@endsection

@section("customJS")
    <script src="{{ asset('js/calendar/fullcalendar.bundle.js') }}"></script>
    <script>
        "use strict";

        var KTCalendarBasic = function() {

            return {
                init: function() {
                    var todayDate = moment().startOf('day');
                    var YM = todayDate.format('YYYY-MM');
                    var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
                    var TODAY = todayDate.format('YYYY-MM-DD');
                    var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

                    var calendarEl = document.getElementById('kt_calendar');
                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid', 'list' ],
                        themeSystem: 'bootstrap',

                        isRTL: KTUtil.isRTL(),

                        header: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'dayGridMonth,timeGridWeek,timeGridDay'
                        },

                        height: 800,
                        contentHeight: 780,
                        aspectRatio: 3,
                        nowIndicator: true,
                        now: TODAY + 'T09:25:00',

                        views: {
                            dayGridMonth: { buttonText: 'luna' },
                            timeGridWeek: { buttonText: 'saptamana' },
                            timeGridDay: { buttonText: 'zi' }
                        },

                        defaultView: 'dayGridMonth',
                        defaultDate: TODAY,

                        eventLimit: true,
                        navLinks: true,
                        events: [
                                @foreach($bookings as $booking)
                            {
                                title: 'Programare',
                                start: '{{ $booking->scheduled }}',
                                description: 'Cu doctorul {{ $booking->getDoctor->firstname }} {{ $booking->getDoctor->lastname }}',
                                className: "fc-event-danger fc-event-solid-warning"

                            },
                            @endforeach
                        ],

                        eventRender: function(info) {
                            var element = $(info.el);

                            if (info.event.extendedProps && info.event.extendedProps.description) {
                                if (element.hasClass('fc-day-grid-event')) {
                                    element.data('content', info.event.extendedProps.description);
                                    element.data('placement', 'top');
                                    KTApp.initPopover(element);
                                } else if (element.hasClass('fc-time-grid-event')) {
                                    element.find('.fc-title').append('<div class="fc-description">' + info.event.extendedProps.description + '</div>');
                                } else if (element.find('.fc-list-item-title').lenght !== 0) {
                                    element.find('.fc-list-item-title').append('<div class="fc-description">' + info.event.extendedProps.description + '</div>');
                                }
                            }
                        }
                    });

                    calendar.render();
                }
            };
        }();

        jQuery(document).ready(function() {
            KTCalendarBasic.init();
        });

    </script>
@endsection
