<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenugasansEditRequest extends FormRequest
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
            
				"pemberi_tugas_id" => "filled",
				"penerima_tugas_id" => "filled",
				"uraian_tugas" => "filled",
				"uraian_hasil" => "filled",
				"lampiran" => "filled|string",
				"tanggal_penugasan" => "filled|date",
				"tanggal_deadline" => "filled|date",
				"tanggal_penyelesaian" => "filled|date",
            
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
