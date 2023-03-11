<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Realisasis extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'realisasis';
	

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
		'akun_id','tanggal','judul','keterangan','bukti_bayar','dokumentasi','jumlah'
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
				judul LIKE ?  OR 
				keterangan LIKE ?  OR 
				bukti_bayar LIKE ?  OR 
				dokumentasi LIKE ?  OR 
				jumlah LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"akun_id",
			"tanggal",
			"judul",
			"keterangan",
			"bukti_bayar",
			"dokumentasi",
			"jumlah" 
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
			"akun_id",
			"tanggal",
			"judul",
			"keterangan",
			"bukti_bayar",
			"dokumentasi",
			"jumlah" 
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
			"akun_id",
			"tanggal",
			"judul",
			"keterangan",
			"bukti_bayar",
			"dokumentasi",
			"jumlah" 
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
			"akun_id",
			"tanggal",
			"judul",
			"keterangan",
			"bukti_bayar",
			"dokumentasi",
			"jumlah" 
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
			"akun_id",
			"tanggal",
			"judul",
			"keterangan",
			"bukti_bayar",
			"dokumentasi",
			"jumlah" 
		];
	}
}
