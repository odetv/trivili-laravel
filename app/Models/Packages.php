<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;
    public $primaryKey = 'packages_id';
    protected $table = "packages";
    protected $fillable = [
        'user_id','package_code','package_name','package_price', 'location_name', 'comunity_name', 'permalink','package_desc','feature_img','location_id','comunity_id','rate_id','rate_name','date_from','date_end','qty_per_day','adult_rate','child_rate','infant_rate','foreign_adult_rate','foreign_child_rate','foreign_infant_rate'
    ];
    public function comunity () {
        return $this->belongsTo(Comunity::class,'comunity_id','comunity_id');
    }
    public function rates () {
        return $this->belongsTo(Rates::class,'rate_id','rate_id');
    }
}
