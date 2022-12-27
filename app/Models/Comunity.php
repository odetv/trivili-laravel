<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunity extends Model
{
    use HasFactory;
    public $primaryKey = 'comunity_id';
    protected $table = "comunities";
    protected $fillable = [
        'comunity_name','comunity_location','village_id','contact','comunity_desc','comunity_logo'
    ];
    public function packages() {
        return $this->hasMany(Packages::class,'comunity_id','comunity_id');
    }
}