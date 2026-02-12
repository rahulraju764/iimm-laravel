<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'address',
        'phone',
        'email',
        'dob',
        'qualification_file',
        'employer_info',
        'course_name',
        'referral_source',
        'application_date',
        'fee_amount',
        'cheque_number',
        'payment_date',
        'bank_name',
        'payment_proof_file',
        'proof_attached',
        'photo',
        'is_read',
    ];

    protected function casts(): array
    {
        return [
            'dob' => 'date',
            'application_date' => 'date',
            'payment_date' => 'date',
            'is_read' => 'boolean',
        ];
    }
}
