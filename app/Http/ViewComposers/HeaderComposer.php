<?php

namespace App\Http\ViewComposers;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Illuminate\View\View;

class HeaderComposer 
{ 

  public function compose(View $view){
    $view->with('categories',Category::where('is_online',1)->get());
  }

}