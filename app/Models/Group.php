<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
     protected $fillable=['title'];

     /**
     *Geting array for Select Option
     **/
     public static function arrayForSelect(){
     		$arr=[];
    	$groups=Group::all();
    	foreach($groups as $group){
    		$arr[$group->id]=$group->title;
    	}
    	return $arr;
     }

      public function users(){
    	return $this->hasMany(User::class);
    }
}
