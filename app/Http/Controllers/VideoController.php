<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function ajouterVideo(Request $request)
    {
        $this->validate($request, [
            'description' => "required",
            'nom_Vidéo'=> "required",
            'animateur'=> "required",
            'heure_diffusion'=> "required",
            'jour_diffusion'=> "required",
            'lien_video'=> "required",
            'jour_diffusion'=> "required",
            'video_categorie'=> "required",
            'image' => 'image|nullable'
             
          /*'image' => 'image|nullable|max:1999'
           */  
        ]);

        //getting file name with extension
        $fileNameWithExt = $request->file('image')->getClientOriginalName();

        //getting file
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        //getting file extension
        $ext = $request->file('image')->getClientOriginalExtension();
         $fileNameToStore= $fileName."_".time().".".$ext;
        //print($fileNameToStore);

        //uploading image in the laravel file

        $path =$request->file('image')->storeAs("public/video_images",$fileNameToStore);
        
        $video=new video();
        $video->nom_Vidéo=$request->input('nom_Vidéo');
        $video->heure_diffusion=$request->input('heure_diffusion');
        $video->jour_diffusion=$request->input('jour_diffusion');
        $video->lien_video=$request->input('lien_video');
        $video->animateur=$request->input('animateur');
        $video->video_categorie=$request->input('video_categorie');
        $video->description=$request->input('description');
        $video->image=$fileNameToStore;

        $video->save();
     
        return back()->with("status", "La vidéo  a été enregistre avec succès");




    }
    public function supprimerVideo($id)
    {
        $video = video::find($id);
        Storage::delete("public/video_images/$video->image");
        $video->delete();
        return back()->with("status", "Votre video à été supprimée avec succès");
    }

    public function modifierVideo($id)
    {
        $video = video::find($id);
        $categories = Categorie::where('nom_categorie',"!=",$video->video_categorie)->get();
        return view('admin.page.modifierVideo')->with("video", $video)->with("categories", $categories);
    }
    public function mise_a_jour_Video($id, Request $request)
    {

        $video = video::find($id);
        $video->nom_Vidéo=$request->input('nom_Vidéo');
        $video->heure_diffusion=$request->input('heure_diffusion');
        $video->jour_diffusion=$request->input('jour_diffusion');
        $video->lien_video=$request->input('lien_video');
        $video->jour_diffusion=$request->input('jour_diffusion');
        $video->video_categorie=$request->input('video_categorie');
        $video->description=$request->input('description');
       

        if ($request->file('image')) {
            $this->validate($request, [
                'image' => 'image|nullable|max:2000'
            ]);
            //getting file name with extension
            $fileNameWithExt = $request->file('image')->getClientOriginalName();

            //getting file
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //getting file extension
            $ext = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName . "_" . time() . "." . $ext;
            //print($fileNameToStore);
            //suppression de l image modifier
            Storage::delete("public/video_images/$video->image");
           
            //uploading image in the laravel file

            $path = $request->file('image')->storeAs("public/video_images", $fileNameToStore);
            $video->image=$fileNameToStore;
        }
                
      
        $video->update();
        return redirect("admin/video")->with("status", "Votre video à été modifier avec succès");
    }
    public function desactive($id)
   {
      $produit=video::find($id);
      $produit->status=0;
      $produit->update();
      return back();

   }
   public function active($id)
   {
      $produit=video::find($id);
      $produit->status=1;
      $produit->update();
      return back();

   }

}
