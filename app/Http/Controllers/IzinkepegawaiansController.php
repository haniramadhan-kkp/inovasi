<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\IzinkepegawaiansAddRequest;
use App\Http\Requests\IzinkepegawaiansEditRequest;
use App\Models\Izinkepegawaians;
use Illuminate\Http\Request;
use Exception;
class IzinkepegawaiansController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.izinkepegawaians.list";
		$query = Izinkepegawaians::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			Izinkepegawaians::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "izinkepegawaians.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Izinkepegawaians::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Izinkepegawaians::query();
		$record = $query->findOrFail($rec_id, Izinkepegawaians::viewFields());
		return $this->renderView("pages.izinkepegawaians.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.izinkepegawaians.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(IzinkepegawaiansAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save Izinkepegawaians record
		$record = Izinkepegawaians::create($modeldata);
		$rec_id = $record->id;
		return $this->redirect("izinkepegawaians", "Record added successfully");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(IzinkepegawaiansEditRequest $request, $rec_id = null){
		$query = Izinkepegawaians::query();
		$record = $query->findOrFail($rec_id, Izinkepegawaians::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("izinkepegawaians", "Record updated successfully");
		}
		return $this->renderView("pages.izinkepegawaians.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = Izinkepegawaians::query();
		$query->whereIn("id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Record deleted successfully");
	}
}
