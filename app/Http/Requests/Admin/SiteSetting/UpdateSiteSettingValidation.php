<?php

namespace App\Http\Requests\Admin\SiteSetting;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSiteSettingValidation extends FormRequest
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
            'title'                       => ['required','string'],
            'alias'                       => ['nullable','string'],
            'working_day'                 => ['required','string'],
            'working_time'                => ['required','date_format:H:i'],
            'closed_day'                  => ['required','string'],
            'closed_time'                 => ['required','date_format:H:i'],
            'description'                 => ['required','string'],
            'email'                       => ['nullable','string'],
            'phone'                       => ['required','integer'],
            'copyright'                   => ['required','string'],
            'facebook'                    => ['required','string'],
            'twitter'                     => ['required','string'],
            'youtube'                     => ['required','string'],
            'insta'                       => ['required','string'],
            'footer_text'                 => ['required', 'string'],
            'main_photo'                  => ['nullable'],
            'main_logo'                   => ['nullable'],
        ];
    }
//    public function prepareForValidation()
//    {
//        $this->merge([
//            'status'              => $this->status ? 1 : 0,
//        ]);
//    }
}

