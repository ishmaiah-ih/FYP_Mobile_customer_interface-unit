<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopupHistory extends Model
{
    use HasFactory;
    protected $table = 'topup_history';
    protected $fillable = [
        'user_id',
        'meter_number',
        'amount',
        'kwh_generated',
        'token',
        'date_generated',
        'email',
        'phone',
    ];



    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
