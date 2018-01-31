<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    public function __construce()
    {
        parent::__construce();
    }

    protected $table = 'tour';

    protected $primaryKey = 't_id';

    protected $fillable = ['c_id', 'cl_id', 't_name', 't_description', 't_price', 'a_id', 'area_id', 'min_people', 'full_people', 'days_apply', 't_status'];

    public function category()
    {
        return $this->hasOne('App\Models\Category', 'c_id', 'c_id');   
    }

    public function descriptions()
    {
        return $this->hasMany('App\Models\TourDescription', 't_id', 't_id');
    }
}
