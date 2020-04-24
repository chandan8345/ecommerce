<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subsubcategory;

class subsubcategoryController extends Controller
{
    public function index(){
        return view('admin.subsubcategory');
    }
    
    public function subsubcategorystore(Request $r){
        $subsubcategory=new Subsubcategory;
        $subsubcategory->name=$r->input('name');
        $subsubcategory->categoryid=3;
        $subsubcategory->subcategoryid=3;
        $subsubcategory->userid=1;
        $subsubcategory->status=1;
        $subsubcategory->save();
    }

    public function updatesubsubcategory(Request $r){
        Subsubcategory::where('id',$r->id)->update($r->all());
    }

    public function deletesubsubcategory(Request $r){
        Subsubcategory::where('id',$r->id)->delete();
    }

    public function subsubcategorylist(){
        $Subsubcategories=Subsubcategory::all();
        // return $Subcategories;
        $i=1;
        foreach($Subsubcategories as $subsubcategory){
            echo '<tr>
            <td>'.$i++.'</td>
            <td id="'.$subsubcategory->id.'" onblur="update('.$subsubcategory->id.')" contenteditable="true">'.$subsubcategory->name.'</td>
            <td>'.$subsubcategory->userid.'</td>
            <td>'.$subsubcategory->status.'</td>
            <td><button type="button" onclick="remove('.$subsubcategory->id.')" id="delete" class="btn btn-danger m-t-5 waves-effect">Delete</button>
    </td>
    </tr>';
      }
    }

}
