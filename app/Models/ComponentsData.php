<?php 
namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/**
 * Components data Model
 * Use for getting values from the database for page components
 * Support raw query builder
 * @category Model
 */
class ComponentsData{
	

	/**
     * subkomponen_id_option_list Model Action
     * @return array
     */
	function subkomponen_id_option_list(){
		$sqltext = "SELECT id as value, name as label FROM subkomponens";
		$query_params = [];
		$arr = DB::select(DB::raw($sqltext), $query_params);
		return $arr;
	}
	

	/**
     * statusizinkepegawaian_id_option_list Model Action
     * @return array
     */
	function statusizinkepegawaian_id_option_list(){
		$sqltext = "SELECT id as value, name as label FROM statusizinkepegawaians";
		$query_params = [];
		$arr = DB::select(DB::raw($sqltext), $query_params);
		return $arr;
	}
	

	/**
     * pegawai_id_option_list Model Action
     * @return array
     */
	function pegawai_id_option_list(){
		$sqltext = "SELECT id as value, username as label FROM users";
		$query_params = [];
		$arr = DB::select(DB::raw($sqltext), $query_params);
		return $arr;
	}
	

	/**
     * program_id_option_list Model Action
     * @return array
     */
	function program_id_option_list(){
		$sqltext = "SELECT id as value, name as label FROM programs";
		$query_params = [];
		$arr = DB::select(DB::raw($sqltext), $query_params);
		return $arr;
	}
	

	/**
     * suboutput_id_option_list Model Action
     * @return array
     */
	function suboutput_id_option_list(){
		$sqltext = "SELECT id as value, name as label FROM suboutputs";
		$query_params = [];
		$arr = DB::select(DB::raw($sqltext), $query_params);
		return $arr;
	}
	

	/**
     * notulensirole_id_option_list Model Action
     * @return array
     */
	function notulensirole_id_option_list(){
		$sqltext = "SELECT id as value, name as label FROM notulensiroles";
		$query_params = [];
		$arr = DB::select(DB::raw($sqltext), $query_params);
		return $arr;
	}
	

	/**
     * kegiatan_id_option_list Model Action
     * @return array
     */
	function kegiatan_id_option_list(){
		$sqltext = "SELECT id as value, name as label FROM kegiatans";
		$query_params = [];
		$arr = DB::select(DB::raw($sqltext), $query_params);
		return $arr;
	}
	

	/**
     * akun_id_option_list Model Action
     * @return array
     */
	function akun_id_option_list(){
		$sqltext = "SELECT id as value, name as label FROM akuns";
		$query_params = [];
		$arr = DB::select(DB::raw($sqltext), $query_params);
		return $arr;
	}
	

	/**
     * komponen_id_option_list Model Action
     * @return array
     */
	function komponen_id_option_list(){
		$sqltext = "SELECT id as value, name as label FROM komponens";
		$query_params = [];
		$arr = DB::select(DB::raw($sqltext), $query_params);
		return $arr;
	}
	

	/**
     * output_id_option_list Model Action
     * @return array
     */
	function output_id_option_list(){
		$sqltext = "SELECT id as value, name as label FROM outputs";
		$query_params = [];
		$arr = DB::select(DB::raw($sqltext), $query_params);
		return $arr;
	}
}
