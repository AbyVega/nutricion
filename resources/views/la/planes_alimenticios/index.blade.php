@extends("la.layouts.app")

@section("contentheader_title", "Planes Alimenticios")
@section("contentheader_description", "Planes Alimenticios listing")
@section("section", "Planes Alimenticios")
@section("sub_section", "Listing")
@section("htmlheader_title", "Planes Alimenticios Listing")

@section("headerElems")
@la_access("Planes_Alimenticios", "create")
	<button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#AddModal">Add Planes Alimenticio</button>
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

@la_access("Planes_Alimenticios", "create")
<div class="modal fade" id="AddModal" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Planes Alimenticio</h4>
			</div>
			{!! Form::open(['action' => 'LA\Planes_AlimenticiosController@store', 'id' => 'planes_alimenticio-add-form']) !!}
			<div class="modal-body">
				<div class="box-body">
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
        ajax: "{{ url(config('laraadmin.adminRoute') . '/planes_alimenticio_dt_ajax') }}",
		language: {
			lengthMenu: "_MENU_",
			search: "_INPUT_",
			searchPlaceholder: "Search"
		},
		@if($show_actions)
		columnDefs: [ { orderable: false, targets: [-1] }],
		@endif
	});
	$("#planes_alimenticio-add-form").validate({
		
	});
});
</script>
@endpush
