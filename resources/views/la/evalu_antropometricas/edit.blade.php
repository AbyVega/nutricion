@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/evalu_antropometricas') }}">Evalu antropometrica</a> :
@endsection
@section("contentheader_description", $evalu_antropometrica->$view_col)
@section("section", "Evalu antropometricas")
@section("section_url", url(config('laraadmin.adminRoute') . '/evalu_antropometricas'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Evalu antropometricas Edit : ".$evalu_antropometrica->$view_col)

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
				{!! Form::model($evalu_antropometrica, ['route' => [config('laraadmin.adminRoute') . '.evalu_antropometricas.update', $evalu_antropometrica->id ], 'method'=>'PUT', 'id' => 'evalu_antropometrica-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'fache')
					@la_input($module, 'talla')
					@la_input($module, 'peso')
					@la_input($module, 'circ_abdominal')
					@la_input($module, 'cintura')
					@la_input($module, 'cadera')
					@la_input($module, 'musculo')
					@la_input($module, 'viseral')
					@la_input($module, 'act_fisica')
					@la_input($module, 'pcb')
					@la_input($module, 'pct')
					@la_input($module, 'cmb')
					@la_input($module, 'pcse')
					@la_input($module, 'pcsi')
					@la_input($module, 'grasa_corporal')
					@la_input($module, 'agua')
					@la_input($module, 'kcal')
					@la_input($module, 'imc')
					@la_input($module, 'comentarios')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/evalu_antropometricas') }}">Cancel</a></button>
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
	$("#evalu_antropometrica-edit-form").validate({
		
	});
});
</script>
@endpush
