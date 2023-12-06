<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class NotesModel extends Model
{
    use HasFactory;
    protected $table='notes';
    protected $fillable=['name','date','houres','minute','user_name','user_phone','user_img','work_type','description','user_id','admin_note','user_note'];

}
