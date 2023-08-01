<?php
namespace App\Traits;

use App\Models\Admin\Designation;
use App\Models\Admin\GeneralLabtest;
use App\Models\Admin\Specialist;
use App\Models\Admin\User;
use App\Models\Admin\Patient;
use Illuminate\Support\Facades\Validator;


trait CustomValidationTrait{

    public function customValidation()
    {
        $this->foreignIdValidation('user_id_validation',User::class);
        $this->foreignIdValidation('patient_id_validation', Patient::class);
        $this->foreignIdValidation('specialist_id_validation', Specialist::class);
        $this->foreignIdValidation('designation_id_validation', Designation::class);
        $this->foreignIdValidation('general_labtest_id_validation', GeneralLabtest::class);

    }

    /*
        * validate the foreign key
     * accept request validation key and related model
    */
    protected function foreignIdValidation($key, $model) : void
    {
       Validator::extend($key,function ($attribute, $value, $parameter, $validator) use ($model){
            if($model::find($value))
                return true;
            return false;
        });
    }

    /*
        *  Show the messages
    */
    public function messages()
    {
        return [
            'user_id.user_id_validation'                    => 'Select valid user',
            'patient_id.patient_id_validation'              => 'Select valid Patient',
            'specialist_id.specialist_id_validation'        => 'Select valid Specialist',
            'designation_id.designation_id_validation'       => 'Select valid Designation',
            'general_labtest_id.general_labtest_id_validation'       => 'Select valid General Test ID',

        ];
    }
}
