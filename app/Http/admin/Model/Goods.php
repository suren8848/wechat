<?php

namespace App\Http\Admin\Model;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table = 'goods';
    protected $primaryKey="id";
    public $timestamps = false;
    
}
