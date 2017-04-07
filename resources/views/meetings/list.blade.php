@extends('layouts.app')
@section('content')
  <div id="meetingList">
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
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
