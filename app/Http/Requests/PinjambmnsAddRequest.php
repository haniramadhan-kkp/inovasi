<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PinjambmnsAddRequest extends FormRequest
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
            
				"peminjam_id" => "required",
				"atas_nama" => "required|string",
				"tanggal_pinjam" => "required|date",
				"tanggal_kembali" => "required|date",
				"bmn_dipinjam" => "required",
				"keperluan" => "required",
				"kelengkapan" => "required",
				"catatan" => "required",
				"tanggal_pengembalian" => "required|date",
				"surat_peminjaman" => "required|string",
				"foto_pengambilan" => "required|string",
				"foto_pengembalian" => "required|string",
				"statuspinjambmn_id" => "required",
            
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
