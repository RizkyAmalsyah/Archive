<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArchiveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
          'kode_arsip' => 'required|max:25',
          'kode_klasifikasi' => 'required|exists:classifications,nip',
          'nama_arsip' => 'required|max:100',
          'file_arsip' => 'required|mimes:pdf,xlx,csv|max:2048',
          'nomor_arsip' => 'required|max:30',
        ];
    }
}
