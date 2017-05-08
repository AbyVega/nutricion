@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/historia_clinicas') }}">Historia clinica</a> :
@endsection
@section("contentheader_description", $historia_clinica->$view_col)
@section("section", "Historia clinicas")
@section("section_url", url(config('laraadmin.adminRoute') . '/historia_clinicas'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Historia clinicas Edit : ".$historia_clinica->$view_col)

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
				{!! Form::model($historia_clinica, ['route' => [config('laraadmin.adminRoute') . '.historia_clinicas.update', $historia_clinica->id ], 'method'=>'PUT', 'id' => 'historia_clinica-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'fecha_historia')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/historia_clinicas') }}">Cancel</a></button>
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
	$("#historia_clinica-edit-form").validate({
		
	});
});
</script>
@endpush
