<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    //練習 1：建立/設定 Model
    protected $table='posts';
    //練習2-3:設定 Post.php的 fillable屬性
    protected$fillable=[
        'title',
        'content',
        'is_feature'
    ];
}
