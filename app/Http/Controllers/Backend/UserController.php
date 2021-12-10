<?php

namespace App\Http\Controllers\Backend;
use App\Models\User;
use App\Models\Profile;
use App\Models\Countries;
use App\Models\States;
use App\Models\Cities;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index(){
        $users = User::all();
        $title = "Users";
        return view('backend.user.index', compact('users', 'title'));
    }

    public function countries()
    {
        $data['countries'] = Country::get(["name", "id"]);
        return view('backend.user.edit', $data);
    }

    public function fetchState(Request $request)
    {
        $data['states'] = States::where("countries_id",$request->countries_id)->get(["name", "id"]);
        return response()->json($data);
    }

    public function fetchCity(Request $request)
    {
        $data['cities'] = Cities::where("states_id",$request->states_id)->get(["name", "id"]);
        
        return response()->json($data);
    }

    public function add()
    {
        $data = User::all();
        $title = "Add User";
        return view('backend.user.add', compact('data', 'title'));
    }

    public function insert(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'role' => 'required',
            'password' => 'required|min:8|confirmed',
        ],
        [
            'name.required' => 'Please Fill Out This Field!',
            'email.required' => 'Please Fill Out This Field!',
            'email.unique' => 'This Email Account Already Exists',
            'role.required' => 'Please Fill Out This Field!',
            'password.required' => 'Please Fill Out This Field!',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]); 

        return redirect()->route('user')
            ->with('success', 'User created successfully.');
    }
    
    public function edit($id){
        $data = User::find($id);
        $countries = Countries::all();
        $states = States::all();
        $cities = Cities::all();
        $profile = Profile::where('users_id', '=', $id)->get();
 
        $title = "Edit User";
        return view('backend.user.edit', compact('data', 'title', 'profile', 'states', 'cities', 'countries'));
    }

    public function update(Request $request, $id){ 
     
        if (Request()->image <>""){
            $profile = Profile::where('users_id', '=', $id)->first();
            $path = 'img/'. $profile->image;
            if ($profile-> image <> ""){
                unlink($path);
            }

            $image = Request()->file('image');
            $destinationPath = 'img/';
            $filename = $image->getClientOriginalName();
            $image->move($destinationPath, $filename); 
            $data = User::where('id',$request->id)->update([
                'name'=>$request['name'],
                'email'=>$request['email'],
                'role'=>$request['role'],
            ]);
    
            $profiles = Profile::where('users_id', '=', $id)->first()->update([
                'address' => $request['address'],
                'image' => $filename,
                'countries_id' => $request['countries_id'] ?? null,
                'states_id' => $request['states_id'] ?? null,
                'cities_id' => $request['cities_id'] ?? null,
                'zip_code' => $request['zip_code'],     
            ]); 
        }else {
            //jika tidak ganti foto
            $data = User::where('id',$request->id)->update([
                'name'=>$request['name'],
                'email'=>$request['email'],
                'role'=>$request['role'],
            ]);
    
            $profiles = Profile::where('users_id', '=', $id)->update([
                'address' => $request['address'],
                'countries_id' => $request['countries_id'] ?? null,
                'states_id' => $request['states_id'] ?? null,
                'cities_id' => $request['cities_id'] ?? null,
                'zip_code' => $request['zip_code'],     
            ]); 
    
        }

        $data = User::find($id);
        // dd($data->profiles->cities);
        return redirect()->route('user', compact('data'))
        ->with('success', 'User updated successfully');
    }


    public function changePassword($id)
    {
    
        $data = User::find($id); 
        $title = "Change Password";
        return view('backend.user.change-password', compact('data', 'title'));
    }

    public function updatePassword(Request $request, $id)
    {
        $data = User::find($id); 
        $request->validate([
            'password' => 'required|min:8|confirmed',
        ],
        [
            'password.required' => 'Please Fill Out This Field!',
        ]);
        $data = User::where('id',$request->id)->update([
                'password'=>Hash::make($request['password']),     
            ]);
    
        return redirect()->route('user')
        ->with('success', 'Password Changed Successfully');
       
    }
    
    public function read($id){
        $data = User::find($id);
        $title = "Detail User";
         // dd($data->profiles);
        

            return view('backend.user.read', compact('data', 'title', 'profile'));
    }

    public function delete($id)
    {
        $profile = Profile::where('users_id', '=', $id)->first();
        $data = User::find($id);

        if(empty($data->profiles->image)){
            $data->delete();
        }else{
            $path = 'img/'. $profile->image;
            if(file_exists($path)){
                unlink($path);
            }
            $data->profiles()->delete();
            $data->delete();
        }
        
        return redirect()->route('user')
            ->with('success', 'User deleted successfully');
    }
}