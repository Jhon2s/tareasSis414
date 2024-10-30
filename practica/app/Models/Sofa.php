<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sofa extends Model
{
    protected $table ='sofa';
    protected $fillable =['material','dimensiones','capacidad','color'];
 }

