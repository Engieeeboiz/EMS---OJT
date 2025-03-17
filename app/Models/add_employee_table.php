<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class add_employee_table extends Model
{
    use HasFactory;

    protected $primaryKey = 'emp_ID'; 
    public $incrementing = false;

    protected $table = 'add_employee_table';
    protected $fillable = [
        'emp_ID',
        'emp_name',
        'emp_gender',
        'emp_age',
        'emp_birthday',
        'emp_address',
        'emp_contact_number',
        'emp_company',
        'emp_position',
        'emp_contact_person',
        'emp_contact_p_number',
        'emp_status',
        'emp_sss',
        'emp_philhealth',
        'emp_hmdf',
        'emp_tin',
        'emp_date_hired',
    ];
}
