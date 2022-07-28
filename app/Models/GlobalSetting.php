<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'favicon',
        'site_name',
        'logo',
        'site_description',
        'head_script',

    ];
}
