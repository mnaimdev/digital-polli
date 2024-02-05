<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    public function sellers()
    {
        return $this->hasMany(Seller::class, 'district_id', 'id');
    }
}
