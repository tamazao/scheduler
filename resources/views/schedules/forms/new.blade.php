
{!! Form::open(array('route' => 'schedule.store', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('Name', 'Name:') !!}
			{!! Form::text('Name') !!}
		</li>
		<li>
			{!! Form::label('StartDate', 'StartDate:') !!}
			{!! Form::text('StartDate') !!}
		</li>
		<li>
			{!! Form::label('EndDate', 'EndDate:') !!}
			{!! Form::text('EndDate') !!}
		</li>
		<li>
			{!! Form::label('StartTime', 'StartTime:') !!}
			{!! Form::text('StartTime') !!}
		</li>
		<li>
			{!! Form::label('EndTime', 'EndTime:') !!}
			{!! Form::text('EndTime') !!}
		</li>
		<li>
			{!! Form::label('MaxAttendies', 'MaxAttendies:') !!}
			{!! Form::text('MaxAttendies') !!}
		</li>
		<li>
			{!! Form::hidden('meeting_id', $meetingID) !!}
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}
