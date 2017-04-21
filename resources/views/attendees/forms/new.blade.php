{!! Form::open(array('route' => 'attendee.store', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('FirstName', 'FirstName:') !!}
			{!! Form::text('FirstName') !!}
		</li>
		<li>
			{!! Form::label('LastName', 'LastName:') !!}
			{!! Form::text('LastName') !!}
		</li>
		<li>
			{!! Form::hidden('Attended', '0') !!}
			{!! Form::hidden('schedule_id', $schedule_id) !!}
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}
