<?php

namespace App\Http\Requests\Admin\Appointment;

use App\Traits\CustomValidationTrait;
use Illuminate\Foundation\Http\FormRequest;

class StoreAppointmentValidation extends FormRequest
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
            'patient_address'               => ['required','string'],
            'blood_group'                  => ['required','string'],
            'specialist_id'                => ['required','specialist_id_validation'],
            'doctor_id'                    => ['required','doctor_id_validation'],
//            'appointment_date'             => ['required','unique:appointments','date'],
            'appointment_date'             => ['required','date'],
//           'time_for_appointment'        => ['required','unique:appointments','date_format:H:i'],
            'schedule_management_id'       => ['required','schedule_management_id_validation'],
            'main_photo'                   => ['nullable'],
            'message'                      => ['required','string'],
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
