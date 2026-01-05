<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{

        protected $fillable = ['id'];

        
    public function customer()
    {
        return belongsTo(Customer::class);
    }
    public function exercise()
    {
        return belongsTo(Exercise::class);
    }
}
