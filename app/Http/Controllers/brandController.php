<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class brandController extends Controller
{
    public function index(){
        return view('admin.brand');
    }
    public function brandstore(Request $r){
        $brand=new Brand;
        $brand->name=$r->input('name');
        $brand->userid=1;
        $brand->status=1;
        $brand->save();
    }

    public function updatebrand(Request $r){
        Brand::where('id',$r->id)->update($r->all());
    }

    public function deletebrand(Request $r){
        Brand::where('id',$r->id)->delete();
    }

    public function brandlist(){
        $brands=Brand::all();
        // return $brands;
        $i=1;
        foreach($brands as $brand){
            echo '<tr>
            <td>'.$i++.'</td>
            <td id="'.$brand->id.'" onblur="update('.$brand->id.')" contenteditable="true">'.$brand->name.'</td>
            <td>'.$brand->userid.'</td>
            <td>'.$brand->status.'</td>
            <td><button type="button" onclick="remove('.$brand->id.')" id="delete" class="btn btn-danger m-t-5 waves-effect">Delete</button>
            <div class="modal fade" id="modify" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
          <form id="modifyform">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="defaultModalLabel">Update Brand</h4>
              </div>
              <div class="modal-body">
                  {{ csrf_field() }}
                  <input type="hidden" name="id"> 
                  <label for="password">Brand Name</label>
                  <div class="form-group">
                          <div class="form-line">
                              <input type="text" name="name" id="brand" class="form-control" placeholder="Enter the Brand Name">
                          </div>
                      </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary m-t-5 waves-effect">Submit</button>
                  <button type="button" class="btn btn-danger m-t-5 waves-effect"  data-dismiss="modal">Cancel</button>
              </div>
          </form>
          </div>
      </div> 
    </td>
    </tr>';
      }
    }
}
