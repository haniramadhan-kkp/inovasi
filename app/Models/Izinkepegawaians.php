<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Izinkepegawaians extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'izinkepegawaians';
	

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
		'jenis_cuti','lama_cuti','mulai_cuti','akhir_cuti','sisa_n2','sisa_n1','sisa_n','keterangan_n2','keterangan_n1','keterangan_n','alamat_cuti','no_telp','cat_atasan','cat_pejabat','statusizinkepegawaian_id','keperluan_cuti','pegawai_id','formulir_cuti'
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
				jenis_cuti LIKE ?  OR 
				keterangan_n2 LIKE ?  OR 
				keterangan_n1 LIKE ?  OR 
				keterangan_n LIKE ?  OR 
				alamat_cuti LIKE ?  OR 
				no_telp LIKE ?  OR 
				cat_atasan LIKE ?  OR 
				cat_pejabat LIKE ?  OR 
				keperluan_cuti LIKE ?  OR 
				formulir_cuti LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"jenis_cuti",
			"lama_cuti",
			"mulai_cuti",
			"akhir_cuti",
			"sisa_n2",
			"sisa_n1",
			"sisa_n",
			"keterangan_n2",
			"keterangan_n1",
			"keterangan_n",
			"alamat_cuti",
			"no_telp",
			"cat_atasan",
			"cat_pejabat",
			"statusizinkepegawaian_id",
			"keperluan_cuti",
			"pegawai_id",
			"formulir_cuti" 
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
			"jenis_cuti",
			"lama_cuti",
			"mulai_cuti",
			"akhir_cuti",
			"sisa_n2",
			"sisa_n1",
			"sisa_n",
			"keterangan_n2",
			"keterangan_n1",
			"keterangan_n",
			"alamat_cuti",
			"no_telp",
			"cat_atasan",
			"cat_pejabat",
			"statusizinkepegawaian_id",
			"keperluan_cuti",
			"pegawai_id",
			"formulir_cuti" 
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
			"jenis_cuti",
			"lama_cuti",
			"mulai_cuti",
			"akhir_cuti",
			"sisa_n2",
			"sisa_n1",
			"sisa_n",
			"keterangan_n2",
			"keterangan_n1",
			"keterangan_n",
			"alamat_cuti",
			"no_telp",
			"cat_atasan",
			"cat_pejabat",
			"statusizinkepegawaian_id",
			"keperluan_cuti",
			"pegawai_id",
			"formulir_cuti" 
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
			"jenis_cuti",
			"lama_cuti",
			"mulai_cuti",
			"akhir_cuti",
			"sisa_n2",
			"sisa_n1",
			"sisa_n",
			"keterangan_n2",
			"keterangan_n1",
			"keterangan_n",
			"alamat_cuti",
			"no_telp",
			"cat_atasan",
			"cat_pejabat",
			"statusizinkepegawaian_id",
			"keperluan_cuti",
			"pegawai_id",
			"formulir_cuti" 
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
			"jenis_cuti",
			"lama_cuti",
			"mulai_cuti",
			"akhir_cuti",
			"sisa_n2",
			"sisa_n1",
			"sisa_n",
			"keterangan_n2",
			"keterangan_n1",
			"keterangan_n",
			"alamat_cuti",
			"no_telp",
			"cat_atasan",
			"cat_pejabat",
			"statusizinkepegawaian_id",
			"keperluan_cuti",
			"pegawai_id",
			"formulir_cuti" 
		];
	}
}
