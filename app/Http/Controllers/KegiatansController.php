<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\KegiatansAddRequest;
use App\Http\Requests\KegiatansEditRequest;
use App\Models\Kegiatans;
use Illuminate\Http\Request;
use Exception;
class KegiatansController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.kegiatans.list";
		$query = Kegiatans::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			Kegiatans::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "kegiatans.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Kegiatans::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Kegiatans::query();
		$record = $query->findOrFail($rec_id, Kegiatans::viewFields());
		return $this->renderView("pages.kegiatans.view", ["data" => $record]);
	}
	

	/**
     * Display Master Detail Pages
	 * @param string $rec_id //master record id
     * @return \Illuminate\View\View
     */
	function masterDetail($rec_id = null){
		return View("pages.kegiatans.detail-pages", ["masterRecordId" => $rec_id]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.kegiatans.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(KegiatansAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save Kegiatans record
		$record = Kegiatans::create($modeldata);
		$rec_id = $record->id;
		return $this->redirect("kegiatans", "Record added successfully");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(KegiatansEditRequest $request, $rec_id = null){
		$query = Kegiatans::query();
		$record = $query->findOrFail($rec_id, Kegiatans::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("kegiatans", "Record updated successfully");
		}
		return $this->renderView("pages.kegiatans.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = Kegiatans::query();
		$query->whereIn("id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Record deleted successfully");
	}
}
