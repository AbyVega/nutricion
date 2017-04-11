@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/eva_clinic_nutricions') }}">Eva clinic nutricion</a> :
@endsection
@section("contentheader_description", $eva_clinic_nutricion->$view_col)
@section("section", "Eva clinic nutricions")
@section("section_url", url(config('laraadmin.adminRoute') . '/eva_clinic_nutricions'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Eva clinic nutricions Edit : ".$eva_clinic_nutricion->$view_col)

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
				{!! Form::model($eva_clinic_nutricion, ['route' => [config('laraadmin.adminRoute') . '.eva_clinic_nutricions.update', $eva_clinic_nutricion->id ], 'method'=>'PUT', 'id' => 'eva_clinic_nutricion-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'tiempo_comida_dia')
					@la_input($module, 'comidas_fuera_casa')
					@la_input($module, 'bebidas_frecuentes')
					@la_input($module, 'sal_extra')
					@la_input($module, 'problemas_dentales')
					@la_input($module, 'hora_mayor_apetito')
					@la_input($module, 'dieta')
					@la_input($module, 'tipo_dieta')
					@la_input($module, 'tiempo_dieta')
					@la_input($module, 'motivo_dieta')
					@la_input($module, 'obtuvo_resultados')
					@la_input($module, 'consume_alcohol')
					@la_input($module, 'frecuencia_consumo')
					@la_input($module, 'tiempo_duerme')
					@la_input($module, 'consumo_agua')
					@la_input($module, 'act_fisica')
					@la_input($module, 'frecuencia_actividad')
					@la_input($module, 'tipo_actividad')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/eva_clinic_nutricions') }}">Cancel</a></button>
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
	$("#eva_clinic_nutricion-edit-form").validate({
		
	});
});
</script>
@endpush
