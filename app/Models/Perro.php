<?php

namespace App\Models;
 
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
 
class Perro extends Eloquent{
    protected $collection = 'perros';

    protected $primaryKey = '_id';

    protected $connection = 'mongodb';

}