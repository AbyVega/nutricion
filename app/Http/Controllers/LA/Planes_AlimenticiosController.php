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

use App\Models\Planes_Alimenticio;

class Planes_AlimenticiosController extends Controller
{
	public $show_action = true;
	public $view_col = 'verduras_colacion';
	public $listing_cols = ['id', 'verduras_desayuno', 'verduras_colacion', 'verduras_comida', 'verura_colacion_tar', 'verduras_cena', 'frutas_desayuno', 'frutas_colacion_man', 'frutas_comida', 'frutas_colacion_tar', 'frutas_cena', 'cereales_desayuno', 'cerales_colacion_man', 'cereales_comida', 'cereal_colacion_tar', 'cereales_cena', 'desayuno_leguminosas', 'leguminosas_colacion', 'leguminosas_comida', 'leguminosasColacionT', 'leguminosas_cena', 'AoA_desayuno', 'AoA_colacion_man', 'AoA_comida', 'AoA_colacion_tar', 'AoA_cena', 'leche_desayuno', 'leche_desayuno_man', 'leche_comida', 'leche_colacion_tar', 'leche_cena', 'aceites_A_dasayuno', 'aceites_A_colacion_m', 'aceites_A_comida', 'aceites_A_colacion_t', 'aceites_A_cena', 'aceites_B_dasayuno', 'aceites_B_colacion_m', 'aceites_B_comida', 'aceites_B_colacion_t', 'aceites_B_cena', 'azucares_desayuno', 'azucares_colacion_m', 'azucares_comida', 'azucares_colacion_t', 'azucares_cena'];
	
	public function __construct() {
		// Field Access of Listing Columns
		if(\Dwij\Laraadmin\Helpers\LAHelper::laravel_ver() == 5.3) {
			$this->middleware(function ($request, $next) {
				$this->listing_cols = ModuleFields::listingColumnAccessScan('Planes_Alimenticios', $this->listing_cols);
				return $next($request);
			});
		} else {
			$this->listing_cols = ModuleFields::listingColumnAccessScan('Planes_Alimenticios', $this->listing_cols);
		}
	}
	
	/**
	 * Display a listing of the Planes_Alimenticios.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$module = Module::get('Planes_Alimenticios');
		
		if(Module::hasAccess($module->id)) {
			return View('la.planes_alimenticios.index', [
				'show_actions' => $this->show_action,
				'listing_cols' => $this->listing_cols,
				'module' => $module
			]);
		} else {
            return redirect(config('laraadmin.adminRoute')."/");
        }
	}

	/**
	 * Show the form for creating a new planes_alimenticio.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created planes_alimenticio in database.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		if(Module::hasAccess("Planes_Alimenticios", "create")) {
		
			$rules = Module::validateRules("Planes_Alimenticios", $request);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();
			}
			
			$insert_id = Module::insert("Planes_Alimenticios", $request);
			
			return redirect()->route(config('laraadmin.adminRoute') . '.planes_alimenticios.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Display the specified planes_alimenticio.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		if(Module::hasAccess("Planes_Alimenticios", "view")) {
			
			$planes_alimenticio = Planes_Alimenticio::find($id);
			if(isset($planes_alimenticio->id)) {
				$module = Module::get('Planes_Alimenticios');
				$module->row = $planes_alimenticio;
				
				return view('la.planes_alimenticios.show', [
					'module' => $module,
					'view_col' => $this->view_col,
					'no_header' => true,
					'no_padding' => "no-padding"
				])->with('planes_alimenticio', $planes_alimenticio);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("planes_alimenticio"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Show the form for editing the specified planes_alimenticio.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		if(Module::hasAccess("Planes_Alimenticios", "edit")) {			
			$planes_alimenticio = Planes_Alimenticio::find($id);
			if(isset($planes_alimenticio->id)) {	
				$module = Module::get('Planes_Alimenticios');
				
				$module->row = $planes_alimenticio;
				
				return view('la.planes_alimenticios.edit', [
					'module' => $module,
					'view_col' => $this->view_col,
				])->with('planes_alimenticio', $planes_alimenticio);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("planes_alimenticio"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Update the specified planes_alimenticio in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		if(Module::hasAccess("Planes_Alimenticios", "edit")) {
			
			$rules = Module::validateRules("Planes_Alimenticios", $request, true);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();;
			}
			
			$insert_id = Module::updateRow("Planes_Alimenticios", $request, $id);
			
			return redirect()->route(config('laraadmin.adminRoute') . '.planes_alimenticios.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Remove the specified planes_alimenticio from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		if(Module::hasAccess("Planes_Alimenticios", "delete")) {
			Planes_Alimenticio::find($id)->delete();
			
			// Redirecting to index() method
			return redirect()->route(config('laraadmin.adminRoute') . '.planes_alimenticios.index');
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
		$values = DB::table('planes_alimenticios')->select($this->listing_cols)->whereNull('deleted_at');
		$out = Datatables::of($values)->make();
		$data = $out->getData();

		$fields_popup = ModuleFields::getModuleFields('Planes_Alimenticios');
		
		for($i=0; $i < count($data->data); $i++) {
			for ($j=0; $j < count($this->listing_cols); $j++) { 
				$col = $this->listing_cols[$j];
				if($fields_popup[$col] != null && starts_with($fields_popup[$col]->popup_vals, "@")) {
					$data->data[$i][$j] = ModuleFields::getFieldValue($fields_popup[$col], $data->data[$i][$j]);
				}
				if($col == $this->view_col) {
					$data->data[$i][$j] = '<a href="'.url(config('laraadmin.adminRoute') . '/planes_alimenticios/'.$data->data[$i][0]).'">'.$data->data[$i][$j].'</a>';
				}
				// else if($col == "author") {
				//    $data->data[$i][$j];
				// }
			}
			
			if($this->show_action) {
				$output = '';
				if(Module::hasAccess("Planes_Alimenticios", "edit")) {
					$output .= '<a href="'.url(config('laraadmin.adminRoute') . '/planes_alimenticios/'.$data->data[$i][0].'/edit').'" class="btn btn-warning btn-xs" style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-edit"></i></a>';
				}
				
				if(Module::hasAccess("Planes_Alimenticios", "delete")) {
					$output .= Form::open(['route' => [config('laraadmin.adminRoute') . '.planes_alimenticios.destroy', $data->data[$i][0]], 'method' => 'delete', 'style'=>'display:inline']);
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
