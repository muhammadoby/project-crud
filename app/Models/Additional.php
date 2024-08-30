<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Additional extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function AdditionalVariant()
    {
        return $this->hasMany(AdditionalVariant::class, 'id_additional', 'id');
    }
}
