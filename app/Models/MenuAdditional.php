<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuAdditional extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Menu()
    {
        return $this->belongsTo(Menu::class, 'id', 'menu_id');
    }

    Public function Additional()
    {
        return $this->belongsTo(Additional::class, 'id', 'additional_id');
    }
}
