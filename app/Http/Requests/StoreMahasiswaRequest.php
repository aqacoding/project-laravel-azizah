<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMahasiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'txtnpm' => 'required|unique:mahasiswa,npm|min:11|max:11',
            'txtfullname' => 'required',
            'txtgender' => 'required',
            'txtemail' => 'required|email|unique:mahasiswa,emailaddress',
            'txtaddress' => 'required',
            'txtphone' => 'required|numeric'
        ];
    }

    public function messages(): array
    {
        return [
            'txtnpm.required' => 'Tidak boleh kosong',
            'txtnpm.unique' => 'Sudah ada di dalam tabel',
            'txtfullname.required' => 'Tidak boleh kosong',
            'txtemail.required' => 'Tidak boleh kosong',
            'txtaddress.required' => 'Tidak boleh kosong',
            'txtphone.required' => 'Tidak boleh kosong'
        ];
    }
}