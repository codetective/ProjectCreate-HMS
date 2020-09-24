{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('added_by', 'Added_by:') !!}
			{!! Form::text('added_by') !!}
		</li>
		<li>
			{!! Form::label('patient_name', 'Patient_name:') !!}
			{!! Form::text('patient_name') !!}
		</li>
		<li>
			{!! Form::label('patient_condition', 'Patient_condition:') !!}
			{!! Form::text('patient_condition') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}