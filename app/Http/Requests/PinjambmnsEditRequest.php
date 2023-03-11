<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PinjambmnsEditRequest extends FormRequest
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
            
				"peminjam_id" => "filled",
				"atas_nama" => "filled|string",
				"tanggal_pinjam" => "filled|date",
				"tanggal_kembali" => "filled|date",
				"bmn_dipinjam" => "filled",
				"keperluan" => "filled",
				"kelengkapan" => "filled",
				"catatan" => "filled",
				"tanggal_pengembalian" => "filled|date",
				"surat_peminjaman" => "filled|string",
				"foto_pengambilan" => "filled|string",
				"foto_pengembalian" => "filled|string",
            
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
