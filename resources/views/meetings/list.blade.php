@extends('layouts.app')
@section('CustomCSS')
  <link href="{{ asset('css/meeting.css') }}" rel="stylesheet">
@endsection
@section('content')
  <div id="AddMeetingModal" class="modal fade" role="dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4>New Meeting</h4>
      </div>
      <div class="modal-body">
        @include('meetings.forms.new')
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
  <div id="deleteConfirm" class="modal fade" role="dialog">
    <div class="modal-content">
      <div class="modal-headler"
      
    </div>
  </div>


  <div class="container meetingNavigation">
    <div class="links">
      {{$meetings->links()}}
    </div>
      <button class="btn" type='button' data-toggle="modal" data-target="#AddMeetingModal">
        <span class="glyphicon glyphicon-plus btn-newMeeting"></span>
      </button>
  </div>
  <div id="meetingList">
    <div id="MeetingStage" class="container">
    @foreach($meetings as $meeting)
      <div class=@if (strtolower($meeting->Status) == "active")
                   "col-md-4 meetingBox meetingBox-active  container-fluid"
                 @else "col-md-4 meetingBox meetingBox-inactive  container-fluid"
                 @endif>
        <div class="icons">
          <button type="button" class="close" data-toggle="moda" data-target="#deleteConfirm">&times;</button>
        </div>
        <div class="meetingTitle">
            <h3>{{ $meeting->Name }}</h3>
        </div>
        <div class="scheduleBox container-fluid">
          @foreach($schedules as $schedule)
            @if($schedule->meeting_id == $meeting->id)
              <p>{{ $schedule->Name}} {{ $schedule->StartDate }} to {{$schedule->EndDate}}</p>
          @endif
          @endforeach
        </div>
      </div>
    @endforeach
  </div>
@endsection
