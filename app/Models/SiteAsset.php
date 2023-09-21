<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteAsset extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_favicon',
        'site_favicon',
        'admin_title',
        'site_title',
        'admin_logo',
    ];
}
