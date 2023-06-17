<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
class CategorieController extends Controller
{
   public function creerCategorie(Request $request){
     $categorie= new Categorie();
     $categorie->nom_categorie= $request->input('nom_categorie');  
     $categorie->save();

     return back()->with("status","Votre catégorie a été crée avec succès");
   }
   public function supprimerCategorie($id)
   {
     $categorie = Categorie::find($id);
     $categorie->delete();
     return back()->with("status", "Votre catégorie à été supprimée avec succès");
   }
 
   public function modifierCategorie($id)
   {
     $categorie = Categorie::find($id);
 
     return view('admin.page.modifierCategorie')->with("categorie", $categorie);
   }
   public function mise_a_jour_Categorie($id,Request $request)
   {
     $categorie = Categorie::find($id);
     $categorie->nom_categorie=$request->input('nom_categorie');
     $categorie->update();
     return redirect("admin/categorie")->with("status", "Votre catégorie à été modifier avec succès");
 
   }  
}
