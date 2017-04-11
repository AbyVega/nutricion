@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/alimentacions') }}">Alimentacion</a> :
@endsection
@section("contentheader_description", $alimentacion->$view_col)
@section("section", "Alimentacions")
@section("section_url", url(config('laraadmin.adminRoute') . '/alimentacions'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Alimentacions Edit : ".$alimentacion->$view_col)

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
				{!! Form::model($alimentacion, ['route' => [config('laraadmin.adminRoute') . '.alimentacions.update', $alimentacion->id ], 'method'=>'PUT', 'id' => 'alimentacion-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'alimentos_agradan')
					@la_input($module, 'alimentos_no_agradan')
					@la_input($module, 'consumo_verduras')
					@la_input($module, 'consumo_frutas')
					@la_input($module, 'consumo _leguminosas')
					@la_input($module, 'Cosumo_cereales')
					@la_input($module, 'consumo_carne')
					@la_input($module, 'consumo_mariscos')
					@la_input($module, 'consumo_lacteos')
					@la_input($module, 'consumo_embutidos')
					@la_input($module, 'consumo_grasas')
					@la_input($module, 'alimentos_procesados')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/alimentacions') }}">Cancel</a></button>
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
	$("#alimentacion-edit-form").validate({
		
	});
});
</script>
@endpush
