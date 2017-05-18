@extends('la.layouts.app')

@section('htmlheader_title')
	Evalu antropometrica View
@endsection


@section('main-content')
<div id="page-content" class="profile2">
	<div class="bg-primary clearfix">
		<div class="col-md-4">
			<div class="row">
				<div class="col-md-3">
					<!--<img class="profile-image" src="{{ asset('la-assets/img/avatar5.png') }}" alt="">-->
					<div class="profile-icon text-primary"><i class="fa {{ $module->fa_icon }}"></i></div>
				</div>
				<div class="col-md-9">
					<h4 class="name">{{ $evalu_antropometrica->$view_col }}</h4>
					<div class="row stats">
					
					</div>
					
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="dats1"><div class="label2">Admin</div></div>
			<div class="dats1"><i class="fa fa-envelope-o"></i> superadmin@gmail.com</div>
		
		</div>
		<div class="col-md-4">
			<!--
			<div class="teamview">
				<a class="face" data-toggle="tooltip" data-placement="top" title="John Doe"><img src="{{ asset('la-assets/img/user1-128x128.jpg') }}" alt=""><i class="status-online"></i></a>
				<a class="face" data-toggle="tooltip" data-placement="top" title="John Doe"><img src="{{ asset('la-assets/img/user2-160x160.jpg') }}" alt=""></a>
				<a class="face" data-toggle="tooltip" data-placement="top" title="John Doe"><img src="{{ asset('la-assets/img/user3-128x128.jpg') }}" alt=""></a>
				<a class="face" data-toggle="tooltip" data-placement="top" title="John Doe"><img src="{{ asset('la-assets/img/user4-128x128.jpg') }}" alt=""><i class="status-online"></i></a>
				<a class="face" data-toggle="tooltip" data-placement="top" title="John Doe"><img src="{{ asset('la-assets/img/user5-128x128.jpg') }}" alt=""></a>
				<a class="face" data-toggle="tooltip" data-placement="top" title="John Doe"><img src="{{ asset('la-assets/img/user6-128x128.jpg') }}" alt=""></a>
				<a class="face" data-toggle="tooltip" data-placement="top" title="John Doe"><img src="{{ asset('la-assets/img/user7-128x128.jpg') }}" alt=""></a>
				<a class="face" data-toggle="tooltip" data-placement="top" title="John Doe"><img src="{{ asset('la-assets/img/user8-128x128.jpg') }}" alt=""></a>
				<a class="face" data-toggle="tooltip" data-placement="top" title="John Doe"><img src="{{ asset('la-assets/img/user5-128x128.jpg') }}" alt=""></a>
				<a class="face" data-toggle="tooltip" data-placement="top" title="John Doe"><img src="{{ asset('la-assets/img/user6-128x128.jpg') }}" alt=""><i class="status-online"></i></a>
				<a class="face" data-toggle="tooltip" data-placement="top" title="John Doe"><img src="{{ asset('la-assets/img/user7-128x128.jpg') }}" alt=""></a>
			</div>
			-->
			<div class="dats1 pb">
				<div class="clearfix">
					
				</div>
				<div class="progress progress-xs active">
					
				</div>
			</div>
			<div class="dats1 pb">
				
				
			</div>
			<div class="dats1 pb">
				
				
			</div>
		</div>
		<div class="col-md-1 actions">
			@la_access("Evalu_antropometricas", "edit")
				<a href="{{ url(config('laraadmin.adminRoute') . '/evalu_antropometricas/'.$evalu_antropometrica->id.'/edit') }}" class="btn btn-xs btn-edit btn-default"><i class="fa fa-pencil"></i></a><br>
			@endla_access
			
			@la_access("Evalu_antropometricas", "delete")
				{{ Form::open(['route' => [config('laraadmin.adminRoute') . '.evalu_antropometricas.destroy', $evalu_antropometrica->id], 'method' => 'delete', 'style'=>'display:inline']) }}
					<button class="btn btn-default btn-delete btn-xs" type="submit"><i class="fa fa-times"></i></button>
				{{ Form::close() }}
			@endla_access
		</div>
	</div>

	<ul data-toggle="ajax-tab" class="nav nav-tabs profile" role="tablist">
		<li class=""><a href="{{ url(config('laraadmin.adminRoute') . '/evalu_antropometricas') }}" data-toggle="tooltip" data-placement="right" title="Back to Evalu antropometricas"><i class="fa fa-chevron-left"></i></a></li>
		<li class="active"><a role="tab" data-toggle="tab" class="active" href="#tab-general-info" data-target="#tab-info"><i class="fa fa-bars"></i> Información General</a></li>
		<li class=""><a role="tab" data-toggle="tab" href="#tab-timeline" data-target="#tab-timeline"><i class="fa fa-clock-o"></i> Histórico</a></li>
	</ul>

	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active fade in" id="tab-info">
			<div class="tab-content">
				<div class="panel infolist">
					<div class="panel-default panel-heading">
						<h4>Información General</h4>
					</div>
					<div class="panel-body">
						@la_display($module, 'codigo_paciente')
						@la_display($module, 'fache')
						@la_display($module, 'talla')
						@la_display($module, 'peso')
						@la_display($module, 'circ_abdominal')
						@la_display($module, 'cintura')
						@la_display($module, 'cadera')
						@la_display($module, 'musculo')
						@la_display($module, 'viseral')
						@la_display($module, 'act_fisica')
						@la_display($module, 'pcb')
						@la_display($module, 'pct')
						@la_display($module, 'cmb')
						@la_display($module, 'pcse')
						@la_display($module, 'pcsi')
						@la_display($module, 'grasa_corporal')
						@la_display($module, 'agua')
						@la_display($module, 'kcal')
						@la_display($module, 'imc')
						@la_display($module, 'comentarios')
					</div>
				</div>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane fade in p20 bg-white" id="tab-timeline">
			
			<!--<div class="text-center p30"><i class="fa fa-list-alt" style="font-size: 100px;"></i> <br> No posts to show</div>-->
		</div>
		
	</div>
	</div>
	</div>
</div>
@endsection
