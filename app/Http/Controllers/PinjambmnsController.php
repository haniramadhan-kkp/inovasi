<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\PinjambmnsAddRequest;
use App\Http\Requests\PinjambmnsEditRequest;
use App\Http\Requests\PinjambmnsAjukan_Pinjam_BMNRequest;
use App\Http\Requests\PinjambmnsProses_Pengambilan_BMNRequest;
use App\Models\Pinjambmns;
use Illuminate\Http\Request;
use Exception;
class PinjambmnsController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.pinjambmns.list";
		$query = Pinjambmns::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			Pinjambmns::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "pinjambmns.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Pinjambmns::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Pinjambmns::query();
		$record = $query->findOrFail($rec_id, Pinjambmns::viewFields());
		return $this->renderView("pages.pinjambmns.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.pinjambmns.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(PinjambmnsAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save Pinjambmns record
		$record = Pinjambmns::create($modeldata);
		$rec_id = $record->id;
		return $this->redirect("pinjambmns", "Record added successfully");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(PinjambmnsEditRequest $request, $rec_id = null){
		$query = Pinjambmns::query();
		$record = $query->findOrFail($rec_id, Pinjambmns::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("pinjambmns", "Record updated successfully");
		}
		return $this->renderView("pages.pinjambmns.edit", ["data" => $record, "rec_id" => $rec_id]);
	}
	

	/**
     * Delete record from the database
	 * Support multi delete by separating record id by comma.
	 * @param  \Illuminate\Http\Request
	 * @param string $rec_id //can be separated by comma 
     * @return \Illuminate\Http\Response
     */
	function delete(Request $request, $rec_id = null){
		$arr_id = explode(",", $rec_id);
		$query = Pinjambmns::query();
		$query->whereIn("id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Record deleted successfully");
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function ajukan_pinjam_bmn(){
		return $this->renderView("pages.pinjambmns.ajukan_pinjam_bmn");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function ajukan_pinjam_bmn_store(PinjambmnsAjukan_Pinjam_BMNRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save Pinjambmns record
		$record = Pinjambmns::create($modeldata);
		$rec_id = $record->id;
		return $this->redirect("pinjambmns", "Record added successfully");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function proses_pengambilan_bmn(PinjambmnsProses_Pengambilan_BMNRequest $request, $rec_id = null){
		$query = Pinjambmns::query();
		$record = $query->findOrFail($rec_id, Pinjambmns::prosesPengambilanBmnFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("pinjambmns/list_proses_pengambilan_bmn", "Record updated successfully");
		}
		return $this->renderView("pages.pinjambmns.proses_pengambilan_bmn", ["data" => $record, "rec_id" => $rec_id]);
	}
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function list_proses_pengambilan_bmn(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.pinjambmns.list_proses_pengambilan_bmn";
		$query = Pinjambmns::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			Pinjambmns::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "pinjambmns.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Pinjambmns::listProsesPengambilanBmnFields());
		return $this->renderView($view, compact("records"));
	}
}
