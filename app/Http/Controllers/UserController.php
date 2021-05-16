<?php

namespace App\Http\Controllers;

use App\User;
use App\Model\Entreprise;
use App\Model\Demande;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    //
      public function index()
    {
        $demandes=Demande::all();
        $user = User::all();
        $entreprise=Entreprise::all();
        return view('user.create',compact('user','entreprise','demandes'));
    }

      public function indexentreprise()
    {
        $demandes=Demande::all();
        $user= User::all();
        $entreprise=Entreprise::all();
        return view('welcome',compact('user','entreprise','demandes'));
    }

 public function AddUserIndex()
    { $demandes=Demande::all();
      $entreprise=Entreprise::all();
      return view('user.UserIndex',compact('entreprise','demandes'));
    }
    

    public function AddUser()
    { $demandes=Demande::all();
        $entreprise=Entreprise::all();
        return view('user.index',compact('entreprise','demandes'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create($data);
        $user->password = (Hash::make($request->password));
        $user->save();
        return redirect()->route('show.user')->with('success','Utilisateur ajouté');
    }


     public function storeentreprise(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create($data);
        $user->password = (Hash::make($request->password));
        $user->save();
        return redirect()->route('showentreprise.user');
    }
    
    public function editUser(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = new User();
        $user->password = (Hash::make($request->password));
        $user->save();
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {   
        $demandes=Demande::all();
      $entreprise=Entreprise::all();
        $user = User::findOrFail($id);
        return view('user.edit',compact('user','entreprise','demandes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $user =  User::findOrFail($id);
        $user->name = request('name');
        $user->email = request('email');
        $user->password = (Hash::make($request->password));
        $user->is_admin = request('is_admin');
        $user->save();
        return redirect()->route('show.user')->with('success','Utilisateur mis à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('show.user')->with('success','utilisateur supprimé');
    }
}

