<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;

class Product extends Model
{
    use Translatable,
        Resizable;
        
    protected $translatable = ['title', 'excerpt', 'slug','body','price','meta_description'];
    
    public function categories(){
        return $this->belongsToMany('TCG\Voyager\Models\Category');
    }
    
    
    public function single_image() {
        $images=json_decode($this->images);
        return $images[0];
    }
}
