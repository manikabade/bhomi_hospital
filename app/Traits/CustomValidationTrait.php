<?php
namespace App\Traits;

use App\Models\Admin\Appointment;
use App\Models\Admin\Designation;
use App\Models\Admin\Doctor;
use App\Models\Admin\GeneralLabtest;
use App\Models\Admin\ScheduleManagement;
use App\Models\Admin\Specialist;
use App\Models\Admin\User;
use Illuminate\Support\Facades\Validator;


trait CustomValidationTrait{

    public function customValidation()
    {
        $this->foreignIdValidation('user_id_validation',User::class);
        $this->foreignIdValidation('specialist_id_validation', Specialist::class);
        $this->foreignIdValidation('doctor_id_validation', Doctor::class);
        $this->foreignIdValidation('appointment_id_validation', Appointment::class);
        $this->foreignIdValidation('designation_id_validation', Designation::class);
        $this->foreignIdValidation('general_labtest_id_validation', GeneralLabtest::class);
        $this->foreignIdValidation('schedule_management_id_validation', ScheduleManagement::class);

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
            'user_id.user_id_validation'                                     => 'Select valid user',
            'specialist_id.specialist_id_validation'                         => 'Select valid Specialist',
            'appointment_id.appointment_id_validation'                       => 'Select valid Appointment',
            'doctor_id.doctor_id_validation'                                 => 'Select valid Doctor',
            'designation_id.designation_id_validation'                       => 'Select valid Designation',
            'general_labtest_id.general_labtest_id_validation'               => 'Select valid General Test ID',
            'schedule_management_id.schedule_management_id_validation'       => 'Select valid Schedule Management',

        ];
    }
}
