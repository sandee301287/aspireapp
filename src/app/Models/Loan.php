<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'loan_term',
        'status',
        'approved_by',
        'approved_at'
    ];

    public function repaymentSchedules()
    {
        return $this->hasMany('App\Models\RepaymentSchedule');
    }
}
