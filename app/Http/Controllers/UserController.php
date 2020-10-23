<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    
    protected $user;

    public function __construct()
    {
        $this->user = new User();

    }



    public function index()
    {
         return view('user_add');
    }


    public function store(Request $request)
    {

        $request->validate([

  
            'last_name'      => 'required|min:2|max:255',
            'DOB'            => 'date_format:Y-m-d|before:today',
            'summery'        => 'required',
            'division'      => 'required',

        ]);

        $this->user->first_name         = request('first_name');
        $this->user->last_name         = request('last_name');
        $this->user->DOB               = request('DOB');
        $this->user->summery           = request('summery');
        $this->user->division          = request('division');
        $this->user->save();

        return redirect('/view')->with('status', 'Register Succesfully');

    }



    public function view()
    {

        $users = $this->user->get();

        return view('user_show', ['users' => $users]);
    }

    public function edit(Request $request, $id)
    {

        $users = $this->user->find($id);

        return view('user_edit')->with('users', $users);

    }

    public function update(Request $request, $id)
    {
        $users                 = $this->user->find($id);

   


        $users->first_name         = request('first_name');
        $users->last_name         = request('last_name');
        $users->DOB               = request('DOB');
        $users ->summery           = request('summery');
        $users->division          = request('division');
        $users->update();

        return redirect('/view')->with('status', 'Your data is Update');

    }

    public function delete($id)
    {
        $users = $this->user->find($id);

     
        $users->delete();

        return redirect('/view')->with('status', 'Your Data is Delete');

    }
    
}
