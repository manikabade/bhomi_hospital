<?php

namespace App\Http\Requests\Admin\MedicalReport;

use App\Traits\CustomValidationTrait;
use Illuminate\Foundation\Http\FormRequest;

class StoreMedicalReportValidation extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        $this->customValidation();
        return [
            'patient_id'         => ['required','patient_id_validation'],
            'general_labtest_id' => ['required','general_labtest_id_validation'],
            'precaution'         => ['required','string'],
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
