<?php

namespace App\Http\Controllers\Front;

use App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TCG\Voyager\Facades\Voyager;
use View;
use App\Traits\Language;
// use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Cache;

use TCG\Voyager\Models\Category as Category;
use TCG\Voyager\Models\Page as Page;
use TCG\Voyager\Models\Post as Post;

use App\Models\Social;
use App\Models\Product;
use App\Models\Banner;
use App\Models\Gallery;
use App\Models\Request as Req;

class HomeController extends Controller
{
    private $per_page=3;
    private $product_paginate=9;
    private $gallery_paginate=9;
    private $post_per_home=3;
    private $gallery_per_home=8;
    private $product_per_home=6;
    private $banner_per_home=3;
    private $cache_minutes=1;
    
    public function __construct() {
       View::share ( ['socials'=>Social::withTranslations(App::getLocale())->get()] );
    }
    
   
    public function home_page(){
        $posts=Post::withTranslations(App::getLocale())->limit($this->post_per_home)->get();
        $banners=Banner::withTranslations(App::getLocale())->orderBy('order')->limit($this->banner_per_home)->get();
        $products=Product::with('categories')->withTranslations(App::getLocale())->limit($this->product_per_home)->get();
        $categories=Category::withTranslations(App::getLocale())->get();
        $galleries=Gallery::withTranslations(App::getLocale())->limit($this->gallery_per_home)->get();
        $page=Page::where('slug','about-us')->firstOrFail();
        // $department = Cache::remember('categories'.App::getLocale(), $this->cache_minutes, function (){
        //     $categories=Category::with('children')->withTranslations(App::getLocale())->get();
        //     return view('front.home.includes.department',compact(['categories']))->render();
        // });
        
        return view('front.home.home',compact(['products','posts','banners','categories','galleries','page']));
    }
    
    
    public function pages_show($slug){
        $page=Page::where('slug',$slug)->firstOrFail();
        
        return view('front.pages.'.$slug.'.index',compact('page'));
    }
    
    
    
    
    public function blog_index(){
        $posts=Post::with('authorId')->withTranslations(App::getLocale())->paginate($this->per_page);
        return view('front.blog.index',compact('posts'));
    }
    public function blog_show(Post $post, $slug){
        return view('front.blog.show',compact('post'));
    }
    
    
    
    
    public function product_index(){
        $products=Product::with('categories')->withTranslations(App::getLocale())->paginate($this->product_paginate);
        return view('front.shop.index',compact('products'));
    }
    public function product_show(Product $product){
        return view('front.shop.show',compact('product'));
    }
    
    
    
    public function gallery_index(){
        $galleries=Gallery::withTranslations(App::getLocale())->paginate($this->gallery_paginate);
        return view('front.gallery.index',compact('galleries'));
    }
    
    
    
    
    
    public function category_show(Category $category, $slug){
        $products=$category->products()->paginate($this->product_paginate);
        return view('front.shop.index',compact('products'));
    }
    public function category_request(Request $request){
        Req::create($request->all());
        return redirect()->back()->with([
            'message'=>trans('messages.success_created'),
            'alert-type'=>'success'
        ]);
    }
    
    
    
    public function local_switch($local){
         return redirect($local);
    }
    
    public function test(){
        $post=Post::first();
        
        return $post->thumbnail('small');
        // return Uuid::generate();
        $slug='lorem-ipsum-post-trans';
        $post=Post::withTranslations()->where(function ($query) use($slug) {
                dd($query);
            })
            ->get();
        return $post->getTranslatedAttribute('slug');
        // return App::getLocale();
        $categories= Category::withTranslations()->get();
        $menu = Cache::remember('menu'.App::getLocale(), 1, function () use ($categories) {
            
            return menu('front','front.common.menu',['categories'=>$categories]);
        });
        return $menu;
       
       return $categories;
        // dd($categories);
       return view('home',compact('categories')); 
    }
}
            