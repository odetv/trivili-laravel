<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rates extends Model
{
    use HasFactory;
    public $primaryKey = 'rate_id';
    protected $table = "rates";
    protected $fillable = [
        'package_id','rate_name','date_from','date_end','qty_per_day','adult_rate','child_rate','infant_rate','foreign_adult_rate','foreign_child_rate','foreign_infant_rate'
    ];
    public function packages () {
        return $this->hasMany(Packages::class,'rate_id','rate_id');
    }
}
