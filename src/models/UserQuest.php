<?php
/**
 * Created by PhpStorm.
 * User: laszlo
 * Date: 2017. 03. 11.
 * Time: 21:06
 */

namespace questapp\models;

use Illuminate\Database\Eloquent\Model;

class UserQuest extends Model
{
    public $timestamps = false;

    protected $table = 'user_quest';

    protected $guarded = [];

    public function users()
    {
        return $this->hasMany('questapp\models\User', 'user_id', 'id');
    }
}