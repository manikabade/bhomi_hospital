<?php

namespace App\Http\Requests\Admin\AboutUs;

use App\Traits\CustomValidationTrait;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutUsValidation extends FormRequest
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
    public function rules(): array
    {
        $this->customValidation();
        return [
            'title'                         => ['required','string'],
            'author'                        => ['required','string'],
            'designation_id'                => ['required','designation_id_validation'],
            'date'                          => ['required','date'],
            'main_photo'                   => ['required'],
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

