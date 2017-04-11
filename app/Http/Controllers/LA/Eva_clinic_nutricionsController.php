<?php
/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers\LA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use DB;
use Validator;
use Datatables;
use Collective\Html\FormFacade as Form;
use Dwij\Laraadmin\Models\Module;
use Dwij\Laraadmin\Models\ModuleFields;

use App\Models\Eva_clinic_nutricion;

class Eva_clinic_nutricionsController extends Controller
{
	public $show_action = true;
	public $view_col = 'tiempo_comida_dia';
	public $listing_cols = ['id', 'tiempo_comida_dia', 'comidas_fuera_casa', 'bebidas_frecuentes', 'sal_extra', 'problemas_dentales', 'hora_mayor_apetito', 'dieta', 'tipo_dieta', 'tiempo_dieta', 'motivo_dieta', 'obtuvo_resultados', 'consume_alcohol', 'frecuencia_consumo', 'tiempo_duerme', 'consumo_agua', 'act_fisica', 'frecuencia_actividad', 'tipo_actividad'];
	
	public function __construct() {
		// Field Access of Listing Columns
		if(\Dwij\Laraadmin\Helpers\LAHelper::laravel_ver() == 5.3) {
			$this->middleware(function ($request, $next) {
				$this->listing_cols = ModuleFields::listingColumnAccessScan('Eva_clinic_nutricions', $this->listing_cols);
				return $next($request);
			});
		} else {
			$this->listing_cols = ModuleFields::listingColumnAccessScan('Eva_clinic_nutricions', $this->listing_cols);
		}
	}
	
	/**
	 * Display a listing of the Eva_clinic_nutricions.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$module = Module::get('Eva_clinic_nutricions');
		
		if(Module::hasAccess($module->id)) {
			return View('la.eva_clinic_nutricions.index', [
				'show_actions' => $this->show_action,
				'listing_cols' => $this->listing_cols,
				'module' => $module
			]);
		} else {
            return redirect(config('laraadmin.adminRoute')."/");
        }
	}

	/**
	 * Show the form for creating a new eva_clinic_nutricion.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created eva_clinic_nutricion in database.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		if(Module::hasAccess("Eva_clinic_nutricions", "create")) {
		
			$rules = Module::validateRules("Eva_clinic_nutricions", $request);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();
			}
			
			$insert_id = Module::insert("Eva_clinic_nutricions", $request);
			
			return redirect()->route(config('laraadmin.adminRoute') . '.eva_clinic_nutricions.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Display the specified eva_clinic_nutricion.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		if(Module::hasAccess("Eva_clinic_nutricions", "view")) {
			
			$eva_clinic_nutricion = Eva_clinic_nutricion::find($id);
			if(isset($eva_clinic_nutricion->id)) {
				$module = Module::get('Eva_clinic_nutricions');
				$module->row = $eva_clinic_nutricion;
				
				return view('la.eva_clinic_nutricions.show', [
					'module' => $module,
					'view_col' => $this->view_col,
					'no_header' => true,
					'no_padding' => "no-padding"
				])->with('eva_clinic_nutricion', $eva_clinic_nutricion);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("eva_clinic_nutricion"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Show the form for editing the specified eva_clinic_nutricion.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		if(Module::hasAccess("Eva_clinic_nutricions", "edit")) {			
			$eva_clinic_nutricion = Eva_clinic_nutricion::find($id);
			if(isset($eva_clinic_nutricion->id)) {	
				$module = Module::get('Eva_clinic_nutricions');
				
				$module->row = $eva_clinic_nutricion;
				
				return view('la.eva_clinic_nutricions.edit', [
					'module' => $module,
					'view_col' => $this->view_col,
				])->with('eva_clinic_nutricion', $eva_clinic_nutricion);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("eva_clinic_nutricion"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Update the specified eva_clinic_nutricion in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		if(Module::hasAccess("Eva_clinic_nutricions", "edit")) {
			
			$rules = Module::validateRules("Eva_clinic_nutricions", $request, true);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();;
			}
			
			$insert_id = Module::updateRow("Eva_clinic_nutricions", $request, $id);
			
			return redirect()->route(config('laraadmin.adminRoute') . '.eva_clinic_nutricions.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Remove the specified eva_clinic_nutricion from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		if(Module::hasAccess("Eva_clinic_nutricions", "delete")) {
			Eva_clinic_nutricion::find($id)->delete();
			
			// Redirecting to index() method
			return redirect()->route(config('laraadmin.adminRoute') . '.eva_clinic_nutricions.index');
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}
	
	/**
	 * Datatable Ajax fetch
	 *
	 * @return
	 */
	public function dtajax()
	{
		$values = DB::table('eva_clinic_nutricions')->select($this->listing_cols)->whereNull('deleted_at');
		$out = Datatables::of($values)->make();
		$data = $out->getData();

		$fields_popup = ModuleFields::getModuleFields('Eva_clinic_nutricions');
		
		for($i=0; $i < count($data->data); $i++) {
			for ($j=0; $j < count($this->listing_cols); $j++) { 
				$col = $this->listing_cols[$j];
				if($fields_popup[$col] != null && starts_with($fields_popup[$col]->popup_vals, "@")) {
					$data->data[$i][$j] = ModuleFields::getFieldValue($fields_popup[$col], $data->data[$i][$j]);
				}
				if($col == $this->view_col) {
					$data->data[$i][$j] = '<a href="'.url(config('laraadmin.adminRoute') . '/eva_clinic_nutricions/'.$data->data[$i][0]).'">'.$data->data[$i][$j].'</a>';
				}
				// else if($col == "author") {
				//    $data->data[$i][$j];
				// }
			}
			
			if($this->show_action) {
				$output = '';
				if(Module::hasAccess("Eva_clinic_nutricions", "edit")) {
					$output .= '<a href="'.url(config('laraadmin.adminRoute') . '/eva_clinic_nutricions/'.$data->data[$i][0].'/edit').'" class="btn btn-warning btn-xs" style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-edit"></i></a>';
				}
				
				if(Module::hasAccess("Eva_clinic_nutricions", "delete")) {
					$output .= Form::open(['route' => [config('laraadmin.adminRoute') . '.eva_clinic_nutricions.destroy', $data->data[$i][0]], 'method' => 'delete', 'style'=>'display:inline']);
					$output .= ' <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-times"></i></button>';
					$output .= Form::close();
				}
				$data->data[$i][] = (string)$output;
			}
		}
		$out->setData($data);
		return $out;
	}
}
