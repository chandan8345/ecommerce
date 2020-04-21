<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Validator;
use Input;

class myController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function create(Request $req){
        $data = array(
            'name'=>$req->name,
            'mobile'=>$req->mobile,
            'email'=>$req->email,
            'address'=>$req->address,
        );
        $result=DB::table('employee')->insert($data);
        redirect('/d');
    }
    public function data(){
       $dep=DB::table('employee')->get();
       foreach($dep as $row){
       echo 
       '<tr>
       <td>'.$row->name.'</td>
        <td>'.$row->email.'</td>
        <td>'.$row->mobile.'</td>
        <td>'.$row->address.'</td>
        <td>
        <a href="#editEmployeeModal'.$row->id.'" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
        <div id="editEmployeeModal'.$row->id.'" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
					<div class="modal-header">						
						<h4 class="modal-title">Edit Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" class="form-control" value="'.$row->name.'" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" class="form-control" value="'.$row->email.'" required>
                        </div>
                        <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="mobile" class="form-control" value="'.$row->mobile.'" required>
                         </div>	
						<div class="form-group">
							<label>Address</label>
							<textarea name="address" class="form-control" required>'.$row->address.'</textarea>
						</div>				
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" onclick="update('.$row->id.')" value="Save">
					</div>
			</div>
        </div>
	</div>
            <a href="#deleteEmployeeModal'.$row->id.'" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
            <div id="deleteEmployeeModal'.$row->id.'" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">						
                            <h4 class="modal-title">Delete Employee</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <p>Are you sure you want to delete these Records?</p>
                            <p class="text-warning"><small>This action cannot be undone.</small></p>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-danger" onclick="remove('.$row->id.')" value="Delete">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </td>
        </tr>';
        }
    }
    public function update(Request $req){
        $data = array(
            'name'=>$req->name,
            'mobile'=>$req->mobile,
            'email'=>$req->email,
            'address'=>$req->address,
        );
        $result=DB::table('employee')->where('id',$req->id)->update($data);
        redirect('/');
    }
    public function remove(Request $req){
    $id=DB::table('employee')->where('id',$req->id)->delete();
    redirect('/');
    }
}
