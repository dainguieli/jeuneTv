<?php

namespace App\Http\Controllers;

use App\Models\video;
use App\Models\User;
use Illuminate\Http\Request;

class HomeClientsController extends Controller
{
    public function index()
    {
        $videos= video::all();
     
        $video1= video::find(1);
        $video2= video::find(2);
        $video3= video::find(3);
        return view('home.acceuil')->with("videos",$videos)->with("video1",$video1)->with("video2",$video2)->with("video3",$video3);
    }
    public function profile()
    {
        
        return view('client.page.profile');
    }

    public function filmCategorie()
    {
        
        return view('home.filmCategorie');
    }

    public function programme()
    {
        
        return view('home.programme');
    } 
    public function contact()
    {
        
        return view('home.contact');
    }
    public function detailfilm()
    {
        
        return view('home.detailfilm');
    }
     public function Direct()
    {
        
        return view('home.direct');
    } 
    public function about()
    {
        
        return view('home.about');
    } 
    public function jeunMag()
    {
        
        return view('livre.liste_livre');
    } 
    public function magasins()
    {
        
        return view('livre.livre');
    }
     public function faq()
    {
        
        return view('home.faq');
    }

    public function privacy_policy()
    {
        
        return view('home.privacy_policy');
    }

    public function modifierClient()
    {
        
        return view('home.privacy_policy');
    }

    
  
    public function mise_a_jour_user($id, Request $request)
    {
       
        $user = User::find($id);
     
        $ancien_mot_depasse=$request->input('ancien_mot_de_passe');

        if (!\Hash::check($ancien_mot_depasse,  $user->password)) {
           
            
                return back()->with("status", "Entrez correctement l'ancien mot de passe");
         
        }else{
            $user->password=$request->input('password');
            $user->name=$request->input('name');
            $user->contact=$request->input('contact');
            $user->date_de_naissance=$request->input('date_de_naissance');
            $user->email=$request->input('email');
        }

      
        $user->update();
      //  return back()->with("status", "Votre user à été modifié avec succès");
       return redirect("profile")->with("status", "Votre information à été modifier avec succès");
    }
}
