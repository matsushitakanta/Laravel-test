<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyUser extends Model
{
    public function test()
    {
        $name = 'mattsu';
        $name2 = 'kanta';
        $sum = $name . $name2;
        // dump($sum); 
    }
}
