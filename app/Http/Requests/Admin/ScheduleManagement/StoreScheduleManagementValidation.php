<?php

namespace App\Http\Requests\Admin\ScheduleManagement;

use App\Traits\CustomValidationTrait;
use Illuminate\Foundation\Http\FormRequest;

class StoreScheduleManagementValidation extends FormRequest
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
    public function rules(): array
    {
        $this->customValidation();
        return [
            'doctor_id'                => ['required','doctor_id_validation'],
            'time_for_appointment'          => ['required','string'],
            'status'                        => ['nullable', 'boolean'],
        ];
    }
    public function prepareForValidation()
    {
        $this->merge([
            'status'              => $this->status ? 1 : 0,
        ]);
    }
}
