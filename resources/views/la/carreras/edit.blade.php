@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/carreras') }}">Carrera</a> :
@endsection
@section("contentheader_description", $carrera->$view_col)
@section("section", "Carreras")
@section("section_url", url(config('laraadmin.adminRoute') . '/carreras'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Carreras Edit : ".$carrera->$view_col)

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
				{!! Form::model($carrera, ['route' => [config('laraadmin.adminRoute') . '.carreras.update', $carrera->id ], 'method'=>'PUT', 'id' => 'carrera-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'nombre_de_carrera')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/carreras') }}">Cancel</a></button>
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
	$("#carrera-edit-form").validate({
		
	});
});
</script>
@endpush
