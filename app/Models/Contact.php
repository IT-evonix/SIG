<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contact';
    protected $primaryKey = 'contact_ID';

    // Since table only has created_at with default current_timestamp() and no updated_at
    public $timestamps = false;

    protected $fillable = [
        'User_Name',
        'Email',
        'Phone_Num',
        'Message',
    ];
}
