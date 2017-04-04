@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/ante_patologicos') }}">Ante patologico</a> :
@endsection
@section("contentheader_description", $ante_patologico->$view_col)
@section("section", "Ante patologicos")
@section("section_url", url(config('laraadmin.adminRoute') . '/ante_patologicos'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Ante patologicos Edit : ".$ante_patologico->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($ante_patologico, ['route' => [config('laraadmin.adminRoute') . '.ante_patologicos.update', $ante_patologico->id ], 'method'=>'PUT', 'id' => 'ante_patologico-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'enfermedades_impor')
					@la_input($module, 'alergias')
					@la_input($module, 'quirurgico')
					@la_input($module, 'farmacos_suplementos')
					@la_input($module, 'transtornos')
					@la_input($module, 'cronico_hereditario')
					@la_input($module, 'gastrointestinal')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/ante_patologicos') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#ante_patologico-edit-form").validate({
		
	});
});
</script>
@endpush
