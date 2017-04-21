{!! Form::open(array('route' => 'meeting.store', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('Name', 'Name:') !!}
			{!! Form::text('Name') !!}
		</li>
		<li>
			{!! Form::label('Status', 'Status:') !!}
			{!! Form::text('Status') !!}
		</li>
		<li>
				{!! Form::hidden('user_id', $user_id) !!}
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}
