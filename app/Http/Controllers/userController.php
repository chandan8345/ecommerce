<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class userController extends Controller
{
    public function index(){
        return view('admin.user');
    }
    
    public function userstore(Request $r){
        $user=new Users;
        $user->name=$r->input('name');
        $user->mobile=$r->input('mobile');
        $user->email=$r->input('email');
        $user->address=$r->input('address');
        $user->company=$r->input('company');
        $user->role='Localuser';
        $user->status=1;
        $user->save();
    }

    public function updateuser(Request $r){
    Users::where('id',$r->id)->update($r->all());
    }
    

    public function deleteuser(Request $r){
    Users::where('id',$r->id)->delete();
    }

    public function userlist(){
        $users=Users::all();
        // return $categories;
        $i=1;
        foreach($users as $user){
            echo '<tr>
            <td>'.$i++.'</td>
            <td id="name'.$user->id.'" onblur="updatename('.$user->id.')" contenteditable="true">'.$user->name.'</td>
            <td id="mobile'.$user->id.'" onblur="updatemobile('.$user->id.')" contenteditable="true">'.$user->mobile.'</td>
            <td id="email'.$user->id.'" onblur="updateemail('.$user->id.')" contenteditable="true">'.$user->email.'</td>
            <td id="address'.$user->id.'" onblur="updateaddress('.$user->id.')" contenteditable="true">'.$user->address.'</td>
            <td id="company'.$user->id.'" onblur="updatecompany('.$user->id.')" contenteditable="true">'.$user->company.'</td>
            <td>'.$user->role.'</td>
            <td>'.$user->status.'</td>
            <td><button type="button" onclick="remove('.$user->id.')" id="delete" class="btn btn-danger m-t-5 waves-effect">Delete</button>
    </td>
    </tr>';
      }
    }
}
