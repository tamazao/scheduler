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
			{!! Form::label('Attended', 'Attended:') !!}
			{!! Form::text('Attended') !!}
		</li>
		<li>
			{!! Form::label('schedule_id', 'Schedule_id:') !!}
			{!! Form::text('schedule_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}
