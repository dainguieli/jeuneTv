<?php

namespace App\Http\Controllers;

use App\Models\silder;
use Illuminate\Http\Request;
use App\Models\slider;
use Illuminate\Support\Facades\Storage;

class silderController extends Controller
{

    public function creerSilder(Request $request)
    {
        $this->validate($request, [
            'description1' => "required",
            'description2' => "required",
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

        //uploading image in the laravel file

        $path = $request->file('image')->storeAs("public/slider_images", $fileNameToStore);

        $Silder = new silder();
        $Silder->description1 = $request->input('description1');
        $Silder->description2 = $request->input('description2');
        $Silder->image = $fileNameToStore;

        $Silder->save();
        return back()->with("status", "Votre silder a été crée avec succès");
    }

    public function supprimerSilder($id)
    {
        $Silder = silder::find($id);
        Storage::delete("public/slider_images/$Silder->image");
        $Silder->delete();
        return back()->with("status", "Votre silder à été supprimée avec succès");
    }

    public function modifierSilder($id)
    {
        $Silder = silder::find($id);

        return view('admin.modifierSilder')->with("Silder", $Silder);
    }
    public function mise_a_jour_Silder($id, Request $request)
    {
        $Silder = silder::find($id);
        $Silder->description1=$request->input('description1');
        $Silder->description2=$request->input('description2');
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
             Storage::delete("public/slider_images/$Silder->image");
           
            //uploading image in the laravel file

            $path = $request->file('image')->storeAs("public/slider_images", $fileNameToStore);
            $Silder->image=$fileNameToStore;
        }
        $Silder->update();
      //  return back()->with("status", "Votre silder à été modifié avec succès");
       return redirect("admin/silder")->with("status", "Votre silder à été modifier avec succès");
    }

    public function desactive($id)
   {
      $silder=silder::find($id);
      $silder->status=0;
      $silder->update();
      return back();

   }
   public function active($id)
   {
      $silder=silder::find($id);
      $silder->status=1;
      $silder->update();
      return back();

   }

}
