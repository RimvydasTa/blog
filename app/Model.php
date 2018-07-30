<?php
/**
 * Created by PhpStorm.
 * User: rimvydas
 * Date: 18.7.30
 * Time: 20.58
 */

namespace App;
use Illuminate\Database\Eloquent\Model as Elequent;


class Model extends Elequent
{
    protected  $fillable = ['title', 'body'];

}