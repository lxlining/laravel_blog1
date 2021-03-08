<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;

class sort extends Model
{
    //
    //指定模型关联表
    protected $table = 'sort';
    //指定数据库主键
    protected $primaryKey = 'id';
    //定义时间戳
    public $timestamps = false;

}
