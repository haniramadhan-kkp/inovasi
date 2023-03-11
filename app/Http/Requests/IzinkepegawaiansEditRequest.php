<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IzinkepegawaiansEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
		
        return [
            
				"jenis_cuti" => "filled|string",
				"lama_cuti" => "filled|numeric",
				"mulai_cuti" => "filled|date",
				"akhir_cuti" => "filled|date",
				"sisa_n2" => "filled|numeric",
				"sisa_n1" => "filled|numeric",
				"sisa_n" => "filled|numeric",
				"keterangan_n2" => "filled|string",
				"keterangan_n1" => "filled|string",
				"keterangan_n" => "filled|string",
				"alamat_cuti" => "filled",
				"no_telp" => "filled|string",
				"cat_atasan" => "filled",
				"cat_pejabat" => "filled",
				"statusizinkepegawaian_id" => "filled",
				"keperluan_cuti" => "filled|string",
				"pegawai_id" => "filled",
				"formulir_cuti" => "filled|string",
            
        ];
    }

	public function messages()
    {
        return [
			
            //using laravel default validation messages
        ];
    }

    /**
     *  Filters to be applied to the input.
     *
     * @return array
     */
    public function filters()
    {
        return [
            //eg = 'name' => 'trim|capitalize|escape'
        ];
    }
}
