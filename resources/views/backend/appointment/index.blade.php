@extends('backend.layouts.app')

@section('title', app_name() . ' | '. __('labels.backend.categories.management'))

@push('after-styles')
<!-- style -->
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          headerToolbar: {
            left: 'prev,next,today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
          },
          initialDate: '2020-06-12',
          navLinks: true, // can click day/week names to navigate views
          editable: true,
          dayMaxEvents: true, // allow "more" link when too many events
          events: [
            {
              title: 'All Day Event',
              start: '2020-06-01'
            },
            {
              title: 'Long Event',
              start: '2020-06-07',
              end: '2020-06-10'
            },
            {
              groupId: 999,
              title: 'Repeating Event',
              start: '2020-06-09T16:00:00'
            },
            {
              groupId: 999,
              title: 'Repeating Event',
              start: '2020-06-16T16:00:00'
            },
            {
              title: 'Conference',
              start: '2020-06-11',
              end: '2020-06-13'
            },
            {
              title: 'Meeting',
              start: '2020-06-12T10:30:00',
              end: '2020-06-12T12:30:00'
            },
            {
              title: 'Lunch',
              start: '2020-06-12T12:00:00'
            },
            {
              title: 'Meeting',
              start: '2020-06-12T14:30:00'
            },
            {
              title: 'Happy Hour',
              start: '2020-06-12T17:30:00'
            },
            {
              title: 'Dinner',
              start: '2020-06-12T20:00:00'
            },
            {
              title: 'Birthday Party',
              start: '2020-06-13T07:00:00'
            },
            {
              title: 'Click for Google',
              url: 'http://google.com/',
              start: '2020-06-28'
            }
          ]
        });

        calendar.render();
      });

    </script>
    <style>
      #calendar {
        max-width: 1100px;
        margin: 0 auto;
      }

    </style>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.min.css') }}">
    <script src="{{ asset('js/main.min.js') }}"></script>
@endpush

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    @lang('labels.backend.categories.management')
                </h4>
            </div><!--col-->

            <div class="col-sm-7 pull-right">
                @include('backend.category.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <div id='calendar'></div>
                </div>
            </div><!--col-->
        </div><!--row-->
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                count
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                   Render
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
