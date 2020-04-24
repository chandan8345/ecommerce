<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategory;

class subcategoryController extends Controller
{
    public function index(){
        return view('admin.subcategory');
    }
    
    public function subcategorystore(Request $r){
        $subcategory=new Subcategory;
        $subcategory->name=$r->input('name');
        $subcategory->categoryid=2;
        $subcategory->userid=1;
        $subcategory->status=1;
        $subcategory->save();
    }

    public function updatesubcategory(Request $r){
        Subcategory::where('id',$r->id)->update($r->all());
    }

    public function deletessubcategory(Request $r){
        Subcategory::where('id',$r->id)->delete();
    }

    public function subcategorylist(){
        $Subcategories=Subcategory::all();
        // return $Subcategories;
        $i=1;
        foreach($Subcategories as $subcategory){
            echo '<tr>
            <td>'.$i++.'</td>
            <td id="'.$subcategory->id.'" onblur="update('.$subcategory->id.')" contenteditable="true">'.$subcategory->name.'</td>
            <td>'.$subcategory->userid.'</td>
            <td>'.$subcategory->status.'</td>
            <td><button type="button" onclick="remove('.$subcategory->id.')" id="delete" class="btn btn-danger m-t-5 waves-effect">Delete</button>
    </td>
    </tr>';
      }
    }
 
}
