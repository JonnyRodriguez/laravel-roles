<?php

namespace jeremykenedy\LaravelRoles\Database\Eloquent;

//use Illuminate\Database\Eloquent\Model as dbModel;
use Jenssegers\Mongodb\Eloquent\Model as dbModel;

class Model extends dbModel
{
    static function all() {
        return self::where('_id','!=', '0')->get();
    }
}

