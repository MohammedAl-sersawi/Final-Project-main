<?php

namespace App\Models;

use App\Traits\Trans;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pharmacist extends  Authenticatable
{
    use HasFactory, Trans;
    protected $guarded = [];
    public function pharmacy()
    {
        return $this->belongsTo(Pharmacy::class);
    }
}
