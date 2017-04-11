@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/planes_alimenticios') }}">Planes Alimenticio</a> :
@endsection
@section("contentheader_description", $planes_alimenticio->$view_col)
@section("section", "Planes Alimenticios")
@section("section_url", url(config('laraadmin.adminRoute') . '/planes_alimenticios'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Planes Alimenticios Edit : ".$planes_alimenticio->$view_col)

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
				{!! Form::model($planes_alimenticio, ['route' => [config('laraadmin.adminRoute') . '.planes_alimenticios.update', $planes_alimenticio->id ], 'method'=>'PUT', 'id' => 'planes_alimenticio-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'verduras_desayuno')
					@la_input($module, 'verduras_colacion')
					@la_input($module, 'verduras_comida')
					@la_input($module, 'verura_colacion_tar')
					@la_input($module, 'verduras_cena')
					@la_input($module, 'frutas_desayuno')
					@la_input($module, 'frutas_colacion_man')
					@la_input($module, 'frutas_comida')
					@la_input($module, 'frutas_colacion_tar')
					@la_input($module, 'frutas_cena')
					@la_input($module, 'cereales_desayuno')
					@la_input($module, 'cerales_colacion_man')
					@la_input($module, 'cereales_comida')
					@la_input($module, 'cereal_colacion_tar')
					@la_input($module, 'cereales_cena')
					@la_input($module, 'desayuno_leguminosas')
					@la_input($module, 'leguminosas_colacion')
					@la_input($module, 'leguminosas_comida')
					@la_input($module, 'leguminosasColacionT')
					@la_input($module, 'leguminosas_cena')
					@la_input($module, 'AoA_desayuno')
					@la_input($module, 'AoA_colacion_man')
					@la_input($module, 'AoA_comida')
					@la_input($module, 'AoA_colacion_tar')
					@la_input($module, 'AoA_cena')
					@la_input($module, 'leche_desayuno')
					@la_input($module, 'leche_desayuno_man')
					@la_input($module, 'leche_comida')
					@la_input($module, 'leche_colacion_tar')
					@la_input($module, 'leche_cena')
					@la_input($module, 'aceites_A_dasayuno')
					@la_input($module, 'aceites_A_colacion_m')
					@la_input($module, 'aceites_A_comida')
					@la_input($module, 'aceites_A_colacion_t')
					@la_input($module, 'aceites_A_cena')
					@la_input($module, 'aceites_B_dasayuno')
					@la_input($module, 'aceites_B_colacion_m')
					@la_input($module, 'aceites_B_comida')
					@la_input($module, 'aceites_B_colacion_t')
					@la_input($module, 'aceites_B_cena')
					@la_input($module, 'azucares_desayuno')
					@la_input($module, 'azucares_colacion_m')
					@la_input($module, 'azucares_comida')
					@la_input($module, 'azucares_colacion_t')
					@la_input($module, 'azucares_cena')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/planes_alimenticios') }}">Cancel</a></button>
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
	$("#planes_alimenticio-edit-form").validate({
		
	});
});
</script>
@endpush
