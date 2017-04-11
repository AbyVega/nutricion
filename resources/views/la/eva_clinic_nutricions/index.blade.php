@extends("la.layouts.app")

@section("contentheader_title", "Eva clinic nutricions")
@section("contentheader_description", "Eva clinic nutricions listing")
@section("section", "Eva clinic nutricions")
@section("sub_section", "Listing")
@section("htmlheader_title", "Eva clinic nutricions Listing")

@section("headerElems")
@la_access("Eva_clinic_nutricions", "create")
	<button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#AddModal">Add Eva clinic nutricion</button>
@endla_access
@endsection

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

<div class="box box-success">
	<!--<div class="box-header"></div>-->
	<div class="box-body">
		<table id="example1" class="table table-bordered">
		<thead>
		<tr class="success">
			@foreach( $listing_cols as $col )
			<th>{{ $module->fields[$col]['label'] or ucfirst($col) }}</th>
			@endforeach
			@if($show_actions)
			<th>Actions</th>
			@endif
		</tr>
		</thead>
		<tbody>
			
		</tbody>
		</table>
	</div>
</div>

@la_access("Eva_clinic_nutricions", "create")
<div class="modal fade" id="AddModal" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Eva clinic nutricion</h4>
			</div>
			{!! Form::open(['action' => 'LA\Eva_clinic_nutricionsController@store', 'id' => 'eva_clinic_nutricion-add-form']) !!}
			<div class="modal-body">
				<div class="box-body">
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
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				{!! Form::submit( 'Submit', ['class'=>'btn btn-success']) !!}
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endla_access

@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('la-assets/plugins/datatables/datatables.min.css') }}"/>
@endpush

@push('scripts')
<script src="{{ asset('la-assets/plugins/datatables/datatables.min.js') }}"></script>
<script>
$(function () {
	$("#example1").DataTable({
		processing: true,
        serverSide: true,
        ajax: "{{ url(config('laraadmin.adminRoute') . '/eva_clinic_nutricion_dt_ajax') }}",
		language: {
			lengthMenu: "_MENU_",
			search: "_INPUT_",
			searchPlaceholder: "Search"
		},
		@if($show_actions)
		columnDefs: [ { orderable: false, targets: [-1] }],
		@endif
	});
	$("#eva_clinic_nutricion-add-form").validate({
		
	});
});
</script>
@endpush
