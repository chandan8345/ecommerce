<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class categoryController extends Controller
{
    public function index(){
        return view('admin.category');
    }
    
    public function categorystore(Request $r){
        $category=new Category;
        $category->name=$r->input('name');
        $category->userid=1;
        $category->status=1;
        $category->save();
    }

    public function updatecategory(Request $r){
        Category::where('id',$r->id)->update($r->all());
    }

    public function deletecategory(Request $r){
        Category::where('id',$r->id)->delete();
    }

    public function categorylist(){
        $categories=Category::all();
        // return $categories;
        $i=1;
        foreach($categories as $category){
            echo '<tr>
            <td>'.$i++.'</td>
            <td id="'.$category->id.'" onblur="update('.$category->id.')" contenteditable="true">'.$category->name.'</td>
            <td>'.$category->userid.'</td>
            <td>'.$category->status.'</td>
            <td><button type="button" onclick="remove('.$category->id.')" id="delete" class="btn btn-danger m-t-5 waves-effect">Delete</button>
    </td>
    </tr>';
      }
    }
   
}