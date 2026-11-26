<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Csubmissions extends Model
{
    protected $table = 'submissions'; // <-- add this
    protected $fillable = [
        'name', 'email', 'company', 'website', 'designation',
        'phone', 'address', 'country', 'requirements', 'subject', 'other_subject', 'preferred_model', 'customer_base', 'years_in_business', 'message', 'form_type'
    ];
}

