<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'address',
        'gender',
        'organization',
        'designation',
        'office_address',
        'office_phone',
        'qualification',
        'work_experience',
        'work_designation',
        'dob',
        'aadhar',
        'email',
        'cheque_number',
        'payment_date',
        'amount',
        'proof_attached',
        'is_read',
    ];

    protected function casts(): array
    {
        return [
            'dob' => 'date',
            'payment_date' => 'date',
            'is_read' => 'boolean',
            'proof_attached' => 'boolean',
        ];
    }
}
