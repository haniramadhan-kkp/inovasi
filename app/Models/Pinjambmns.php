<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Pinjambmns extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'pinjambmns';
	

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
		'peminjam_id','atas_nama','tanggal_pinjam','tanggal_kembali','bmn_dipinjam','keperluan','kelengkapan','catatan','tanggal_pengembalian','surat_peminjaman','foto_pengambilan','foto_pengembalian'
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
				atas_nama LIKE ?  OR 
				bmn_dipinjam LIKE ?  OR 
				keperluan LIKE ?  OR 
				kelengkapan LIKE ?  OR 
				catatan LIKE ?  OR 
				surat_peminjaman LIKE ?  OR 
				foto_pengambilan LIKE ?  OR 
				foto_pengembalian LIKE ? 
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
			"peminjam_id",
			"atas_nama",
			"tanggal_pinjam",
			"tanggal_kembali",
			"bmn_dipinjam",
			"keperluan",
			"kelengkapan",
			"catatan",
			"tanggal_pengembalian",
			"surat_peminjaman",
			"foto_pengambilan",
			"foto_pengembalian" 
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
			"peminjam_id",
			"atas_nama",
			"tanggal_pinjam",
			"tanggal_kembali",
			"bmn_dipinjam",
			"keperluan",
			"kelengkapan",
			"catatan",
			"tanggal_pengembalian",
			"surat_peminjaman",
			"foto_pengambilan",
			"foto_pengembalian" 
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
			"peminjam_id",
			"atas_nama",
			"tanggal_pinjam",
			"tanggal_kembali",
			"bmn_dipinjam",
			"keperluan",
			"kelengkapan",
			"catatan",
			"tanggal_pengembalian",
			"surat_peminjaman",
			"foto_pengambilan",
			"foto_pengembalian" 
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
			"peminjam_id",
			"atas_nama",
			"tanggal_pinjam",
			"tanggal_kembali",
			"bmn_dipinjam",
			"keperluan",
			"kelengkapan",
			"catatan",
			"tanggal_pengembalian",
			"surat_peminjaman",
			"foto_pengambilan",
			"foto_pengembalian" 
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
			"peminjam_id",
			"atas_nama",
			"tanggal_pinjam",
			"tanggal_kembali",
			"bmn_dipinjam",
			"keperluan",
			"kelengkapan",
			"catatan",
			"tanggal_pengembalian",
			"surat_peminjaman",
			"foto_pengambilan",
			"foto_pengembalian" 
		];
	}
}
