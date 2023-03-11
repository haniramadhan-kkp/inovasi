<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Penugasans extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'penugasans';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'pemberi_tugas_id','penerima_tugas_id','uraian_tugas','uraian_hasil','lampiran','tanggal_penugasan','tanggal_deadline','tanggal_penyelesaian'
	];
	public $timestamps = false;
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				uraian_tugas LIKE ?  OR 
				uraian_hasil LIKE ?  OR 
				lampiran LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%"
		];
		//setting search conditions
		$query->whereRaw($search_condition, $search_params);
	}
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"id",
			"created_at",
			"updated_at",
			"pemberi_tugas_id",
			"penerima_tugas_id",
			"uraian_tugas",
			"uraian_hasil",
			"lampiran",
			"tanggal_penugasan",
			"tanggal_deadline",
			"tanggal_penyelesaian" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id",
			"created_at",
			"updated_at",
			"pemberi_tugas_id",
			"penerima_tugas_id",
			"uraian_tugas",
			"uraian_hasil",
			"lampiran",
			"tanggal_penugasan",
			"tanggal_deadline",
			"tanggal_penyelesaian" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id",
			"created_at",
			"updated_at",
			"pemberi_tugas_id",
			"penerima_tugas_id",
			"uraian_tugas",
			"uraian_hasil",
			"lampiran",
			"tanggal_penugasan",
			"tanggal_deadline",
			"tanggal_penyelesaian" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id",
			"created_at",
			"updated_at",
			"pemberi_tugas_id",
			"penerima_tugas_id",
			"uraian_tugas",
			"uraian_hasil",
			"lampiran",
			"tanggal_penugasan",
			"tanggal_deadline",
			"tanggal_penyelesaian" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id",
			"pemberi_tugas_id",
			"penerima_tugas_id",
			"uraian_tugas",
			"uraian_hasil",
			"lampiran",
			"tanggal_penugasan",
			"tanggal_deadline",
			"tanggal_penyelesaian" 
		];
	}
}
