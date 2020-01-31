<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use DB;




class UserController extends Controller
{
    //
    public function index(){
    	return view('regis');
    }

// protected function validator(Request $request)
//     {
//         return Validator::make($request, [
//             'name' => ['required', 'string', 'max:255'],
//             'lname' => ['required', 'numeric' ],
//             'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//             'password' => ['required', 'string', 'min:8'],
//         ]);
//     }

     public function store(Request $request){
 
          $this->validate($request, [
              'fname' => 'required|string|max:255',
              'lname' => 'required|string|max:255',
              'email' => 'required|email|unique:users',
              'address' => 'required|min:12',
              'password' => 'required|min:8',

 
          ]);


       if($request->hasFile('image'))
        {
            $fileNameExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameExt, PATHINFO_FILENAME);
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            $pathToStore = $request->file('image')->storeAs('public/uploads',$fileNameToStore);

        }
         
         echo $fileNameToStore . "<br>";
         echo $pathToStore;
         die();
        

       $name = $request->input('fname');
       $lname = $request->input('lname');
       $email= $request->input('email');
       $address = $request->input('address');
       $image = $fileNameToStore;
       $password = $request->input('password');


      $user= new User();
        $user->name=$name;
        //$user->company= $request['company'];
        $user->lname=$lname;
        $user->email=$email;
        $user->address=$address;
        $user->image=$image;
        $user->password= Hash::make($password);

    
       $user->save();
        //return redirect('/regis');
          return redirect()->back()->with('message', 'Your Data SuccessFully Inserted');
              

    }


      public function show(){
      	$users = DB::select('select * from users');
        return view('show',['users'=>$users]);    

       }
public function update($id){
     $users = User::find($id);
	 //$users = DB::select('select * from users where id=$id ');
	return view('editdata',['users' => $users ]);
}

public function delete($id){
     // $users = User::find($id);
     // $users->delete(); //delete the fetched note
	DB::table('users')->where('id',$id)->delete();

     return view('regis');
}
   
}
