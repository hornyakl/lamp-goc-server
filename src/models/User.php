<?php
/**
 * Created by PhpStorm.
 * User: laszlo
 * Date: 2017. 03. 11.
 * Time: 21:08
 */

namespace questapp\models;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;

    protected $table = 'user';

    protected $guarded = [];

    public function quests()
    {
        return $this->hasManyThrough('questapp\models\Quest','questapp\models\UserQuest', 'user_id', 'id');
    }
}