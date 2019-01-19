<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;
class Gallery extends Model
{
    use Translatable,
        Resizable;
        
    protected $translatable = ['title'];
}
