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

    public function user()
    {
        return $this->hasOne('questapp\models\User', 'user_id', 'id');
    }

    public function quest()
    {
        return $this->hasOne('questapp\models\Quest', 'quest_id', 'id');
    }
}