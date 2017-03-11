<?php
/**
 * Created by PhpStorm.
 * User: laszlo
 * Date: 2017. 03. 11.
 * Time: 19:17
 */

namespace questapp\models;

use JsonSerializable;
use Illuminate\Database\Eloquent\Model;

class Quest extends Model implements JsonSerializable
{
    public $timestamps = false;

    protected $table = 'quest';

    protected $guarded = [];

    public function toArray()
    {
        $returnArray = parent::toArray();
        $returnArray['id'] = (int)$returnArray['id'];
        $returnArray['latitude'] = (float)$returnArray['latitude'];
        $returnArray['longitude'] = (float)$returnArray['longitude'];


        return $returnArray;
    }
}