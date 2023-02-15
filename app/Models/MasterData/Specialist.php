<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialist extends Model
{
    // use HasFactory;



    public $table = 'specialist';

    protected $dates = [

        'created_at',
        'updated_at',
        'deleted_at'

    ];

    // declare fillable
    protected $fillable = [
        'name',
        'price',
        'created_at',
        'updated_at',
        'deleted_at'
    ];


    public function doctor()
    {

        // 2 parameter
        return $this->hasMany('App\Models\Operational\Doctor', 'specialist_id');
    }
}
