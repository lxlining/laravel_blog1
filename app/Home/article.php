<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    //
    //指定模型关联表
    protected $table = 'article';
    //指定数据库主键
    protected $primaryKey = 'id';
    //定义时间戳
    public $timestamps = true;

    public function article(){
        return $this->belongsToMany('App\Home\message','message','id','article');
    }
}
