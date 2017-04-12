@extends('layouts.app')
@section('CustomCSS')
  <link href="{{ asset('css/meeting.css') }}" rel="stylesheet">
@endsection
@section('content')
  <div id="meetingList">
    <div id="MeetingStage" class="container-fluid">
    @foreach($meetings as $meeting)
      <div class="col-sm-3 meetingBox">
        <h3>{{ $meeting->Name }}</h3>
        <p>{{ $meeting->Status }}</p>
        <div class="scheduleBox container-fluid">
          <h4>Schedules</h4>
          @foreach($schedules as $schedule)
            @if($schedule->meeting_id == $meeting->id)
              <p>{{ $schedule->Name}} {{ $schedule->StartDate }} to {{$schedule->EndDate}}</p>

          @endif
          @endforeach
        </div>
      </div>
    @endforeach
    </div>
    <!--
    <table class="table table-striped script-table">
      <thead>
      <th>Name</th>
      <th>Status</th>
      <th>Date Created</th>
      </thead>
      <tbody>
        @foreach($meetings as $meeting)
          <tr>
            <td>{{ $meeting->Name }}</td>
            <td>{{ $meeting->Status }}</td>
            <td>{{ $meeting->created_at->format('m/d/Y') }}</td>
          @endforeach
          </tr>
      </tbody>
    </table>
  -->
  </div>
@endsection
