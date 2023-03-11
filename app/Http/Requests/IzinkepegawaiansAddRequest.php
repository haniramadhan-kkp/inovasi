<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IzinkepegawaiansAddRequest extends FormRequest
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
            
				"jenis_cuti" => "required|string",
				"lama_cuti" => "required|numeric",
				"mulai_cuti" => "required|date",
				"akhir_cuti" => "required|date",
				"sisa_n2" => "required|numeric",
				"sisa_n1" => "required|numeric",
				"sisa_n" => "required|numeric",
				"keterangan_n2" => "required|string",
				"keterangan_n1" => "required|string",
				"keterangan_n" => "required|string",
				"alamat_cuti" => "required",
				"no_telp" => "required|string",
				"cat_atasan" => "required",
				"cat_pejabat" => "required",
				"statusizinkepegawaian_id" => "required",
				"keperluan_cuti" => "required|string",
				"pegawai_id" => "required",
				"formulir_cuti" => "required|string",
            
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
