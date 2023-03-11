<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RealisasisAddRequest extends FormRequest
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
            
				"akun_id" => "required",
				"tanggal" => "required|date",
				"judul" => "required",
				"keterangan" => "required",
				"bukti_bayar" => "required|string",
				"dokumentasi" => "required|string",
				"jumlah" => "required|string",
            
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
