<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalVariant extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Additional()
    {
        return $this->belongsTo(Additional::class, 'id', 'id_additional');
    }

    public function Variant()
    {
        return $this->belongsTo(Variant::class, 'id', 'id_variant');
    }
}
