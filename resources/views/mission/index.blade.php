<h1>mission view</h1>

<ul>
@foreach($missions as $mission)
	<li>
		{{$mission->destination_system}} ({{$mission->destination_station}})
		<br/>
		{{$mission->commodity}} x {{$mission->qty}}
	</li>
@endforeach
</ul>


<h3>Add mission</h3>
@if ($errors->any())
	<ol>
	@foreach($errors->all() as $error)
		<li>{{$error}}</li>
	@endforeach
	</ol>
@endif
{!! Form::open() !!}
	<div class="field">
		System:
		{!! Form::text('destination_system') !!}
	</div>
	<div class="field">
		Station:
		{!! Form::text('destination_station') !!}
	</div>
	<div class="field">
		Commodity:
		{!! Form::text('commodity') !!}
	</div>
	<div class="field">
		Ammount:
		{!! Form::text('qty') !!}
	</div>

	{!! Form::submit('Add mission')!!}
{!! Form::close() !!}
