<?php

namespace App\Http\Requests\Admin\GeneralLabtest;

use App\Traits\CustomValidationTrait;
use Illuminate\Foundation\Http\FormRequest;

class UpdateGeneralLabtestValidation extends FormRequest
{
    use CustomValidationTrait;
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
    public function rules()
    {
        $this->customValidation();
        return [
            'appointment_id'     => ['required','appointment_id_validation'],
            'general_labtest'    => ['required','string'],
            'report'             =>['required','string'],
            'remarks'            =>['required','string'],
            'status'             => ['nullable', 'boolean'],
        ];
    }
    public function prepareForValidation()
    {
        $this->merge([
            'status'              => $this->status ? 1 : 0,
        ]);
    }
}
