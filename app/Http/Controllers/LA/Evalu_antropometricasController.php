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

use App\Models\Evalu_antropometrica;

class Evalu_antropometricasController extends Controller
{
	public $show_action = true;
	public $view_col = 'fache';
	public $listing_cols = ['id', 'codigo_paciente', 'fache', 'talla', 'peso', 'circ_abdominal', 'cintura', 'cadera', 'musculo', 'viseral', 'act_fisica', 'pcb', 'pct', 'cmb', 'pcse', 'pcsi', 'grasa_corporal', 'agua', 'kcal', 'imc', 'comentarios'];
	
	public function __construct() {
		// Field Access of Listing Columns
		if(\Dwij\Laraadmin\Helpers\LAHelper::laravel_ver() == 5.3) {
			$this->middleware(function ($request, $next) {
				$this->listing_cols = ModuleFields::listingColumnAccessScan('Evalu_antropometricas', $this->listing_cols);
				return $next($request);
			});
		} else {
			$this->listing_cols = ModuleFields::listingColumnAccessScan('Evalu_antropometricas', $this->listing_cols);
		}
	}
	
	/**
	 * Display a listing of the Evalu_antropometricas.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$module = Module::get('Evalu_antropometricas');
		
		if(Module::hasAccess($module->id)) {
			return View('la.evalu_antropometricas.index', [
				'show_actions' => $this->show_action,
				'listing_cols' => $this->listing_cols,
				'module' => $module
			]);
		} else {
            return redirect(config('laraadmin.adminRoute')."/");
        }
	}

	/**
	 * Show the form for creating a new evalu_antropometrica.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created evalu_antropometrica in database.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		if(Module::hasAccess("Evalu_antropometricas", "create")) {
		
			$rules = Module::validateRules("Evalu_antropometricas", $request);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();
			}
			
			$insert_id = Module::insert("Evalu_antropometricas", $request);
			
			return redirect()->route(config('laraadmin.adminRoute') . '.evalu_antropometricas.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Display the specified evalu_antropometrica.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		if(Module::hasAccess("Evalu_antropometricas", "view")) {
			
			$evalu_antropometrica = Evalu_antropometrica::find($id);
			if(isset($evalu_antropometrica->id)) {
				$module = Module::get('Evalu_antropometricas');
				$module->row = $evalu_antropometrica;
				
				return view('la.evalu_antropometricas.show', [
					'module' => $module,
					'view_col' => $this->view_col,
					'no_header' => true,
					'no_padding' => "no-padding"
				])->with('evalu_antropometrica', $evalu_antropometrica);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("evalu_antropometrica"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Show the form for editing the specified evalu_antropometrica.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		if(Module::hasAccess("Evalu_antropometricas", "edit")) {			
			$evalu_antropometrica = Evalu_antropometrica::find($id);
			if(isset($evalu_antropometrica->id)) {	
				$module = Module::get('Evalu_antropometricas');
				
				$module->row = $evalu_antropometrica;
				
				return view('la.evalu_antropometricas.edit', [
					'module' => $module,
					'view_col' => $this->view_col,
				])->with('evalu_antropometrica', $evalu_antropometrica);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("evalu_antropometrica"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Update the specified evalu_antropometrica in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		if(Module::hasAccess("Evalu_antropometricas", "edit")) {
			
			$rules = Module::validateRules("Evalu_antropometricas", $request, true);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();;
			}
			
			$insert_id = Module::updateRow("Evalu_antropometricas", $request, $id);
			
			return redirect()->route(config('laraadmin.adminRoute') . '.evalu_antropometricas.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Remove the specified evalu_antropometrica from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		if(Module::hasAccess("Evalu_antropometricas", "delete")) {
			Evalu_antropometrica::find($id)->delete();
			
			// Redirecting to index() method
			return redirect()->route(config('laraadmin.adminRoute') . '.evalu_antropometricas.index');
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
		$values = DB::table('evalu_antropometricas')->select($this->listing_cols)->whereNull('deleted_at');
		$out = Datatables::of($values)->make();
		$data = $out->getData();

		$fields_popup = ModuleFields::getModuleFields('Evalu_antropometricas');
		
		for($i=0; $i < count($data->data); $i++) {
			for ($j=0; $j < count($this->listing_cols); $j++) { 
				$col = $this->listing_cols[$j];
				if($fields_popup[$col] != null && starts_with($fields_popup[$col]->popup_vals, "@")) {
					$data->data[$i][$j] = ModuleFields::getFieldValue($fields_popup[$col], $data->data[$i][$j]);
				}
				if($col == $this->view_col) {
					$data->data[$i][$j] = '<a href="'.url(config('laraadmin.adminRoute') . '/evalu_antropometricas/'.$data->data[$i][0]).'">'.$data->data[$i][$j].'</a>';
				}
				// else if($col == "author") {
				//    $data->data[$i][$j];
				// }
			}
			
			if($this->show_action) {
				$output = '';
				if(Module::hasAccess("Evalu_antropometricas", "edit")) {
					$output .= '<a href="'.url(config('laraadmin.adminRoute') . '/evalu_antropometricas/'.$data->data[$i][0].'/edit').'" class="btn btn-warning btn-xs" style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-edit"></i></a>';
				}
				
				if(Module::hasAccess("Evalu_antropometricas", "delete")) {
					$output .= Form::open(['route' => [config('laraadmin.adminRoute') . '.evalu_antropometricas.destroy', $data->data[$i][0]], 'method' => 'delete', 'style'=>'display:inline']);
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
