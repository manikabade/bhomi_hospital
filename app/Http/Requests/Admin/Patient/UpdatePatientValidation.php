<?php

namespace App\Http\Requests\Admin\Patient;

use App\Traits\CustomValidationTrait;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePatientValidation extends FormRequest
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
            'patient_name'                 => ['required','string'],
            'email'                        => ['nullable','string'],
            'phone_number'                 => ['required','string'],
            'gender'                       => ['required','string'],
            'date_of_birth'                => ['required','date'],
            'age'                          => ['required','integer'],
            'security_token'               => ['required','string'],
            'patient_address'              => ['required','string'],
            'blood_group'                  => ['required','string'],
            'specialist_id'                   => ['required','string'],
            'appointment_date'             => ['required','date'],
            'time_for_appointment'         => ['required','date_format:H:i:s'],
//           'time_for_appointment'         => ['required','date_format:H:i'],
            'main_photo'                    => ['required'],
            'status'                       => ['nullable', 'boolean'],
        ];
    }
    public function prepareForValidation()
    {
        $this->merge([
            'status'              => $this->status ? 1 : 0,
        ]);
    }
}
