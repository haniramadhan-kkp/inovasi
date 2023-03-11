<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Notulensis extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'notulensis';
	

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
		'kegiatan','tanggal','notulen_id','tempat','pimpinan_rapat','isi','kesimpulan','undangan','dokumentasi','daftar_hadir'
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
				kegiatan LIKE ?  OR 
				tempat LIKE ?  OR 
				pimpinan_rapat LIKE ?  OR 
				isi LIKE ?  OR 
				kesimpulan LIKE ?  OR 
				undangan LIKE ?  OR 
				dokumentasi LIKE ?  OR 
				daftar_hadir LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"kegiatan",
			"tanggal",
			"notulen_id",
			"tempat",
			"pimpinan_rapat",
			"isi",
			"kesimpulan",
			"undangan",
			"dokumentasi",
			"daftar_hadir" 
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
			"kegiatan",
			"tanggal",
			"notulen_id",
			"tempat",
			"pimpinan_rapat",
			"isi",
			"kesimpulan",
			"undangan",
			"dokumentasi",
			"daftar_hadir" 
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
			"kegiatan",
			"tanggal",
			"notulen_id",
			"tempat",
			"pimpinan_rapat",
			"isi",
			"kesimpulan",
			"undangan",
			"dokumentasi",
			"daftar_hadir" 
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
			"kegiatan",
			"tanggal",
			"notulen_id",
			"tempat",
			"pimpinan_rapat",
			"isi",
			"kesimpulan",
			"undangan",
			"dokumentasi",
			"daftar_hadir" 
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
			"kegiatan",
			"tanggal",
			"notulen_id",
			"tempat",
			"pimpinan_rapat",
			"isi",
			"kesimpulan",
			"undangan",
			"dokumentasi",
			"daftar_hadir" 
		];
	}
}
