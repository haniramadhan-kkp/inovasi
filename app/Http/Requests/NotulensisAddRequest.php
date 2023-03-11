<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotulensisAddRequest extends FormRequest
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
            
				"kegiatan" => "required|string",
				"tanggal" => "required|date",
				"notulen_id" => "required",
				"tempat" => "required|string",
				"pimpinan_rapat" => "required|string",
				"isi" => "required",
				"kesimpulan" => "required",
				"undangan" => "required|string",
				"dokumentasi" => "required|string",
				"daftar_hadir" => "required|string",
            
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
