<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\counter;
use App\Models\silder;
use App\Models\User;
use App\Models\video;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home_viste()
    {
        /*
        $ip = fopen('last_ip.txt', 'c+');
        $check = fgets($ip);

        $file = fopen('counter.txt', 'c+');
        $count = intval(fgets($file));

        if ($_SERVER['REMOTE_ADDR'] != $check) {
            fclose($ip);

            $ip = fopen('last_ip.txt', 'w+');

            fputs($ip, $_SERVER['REMOTE_ADDR']);

            $count++;
            fseek($file, 0);
            fputs($file, $count);
            return dd($count++);
        }

        fclose($file);
        fclose($ip);
*/
       // $view = counter::latest()->paginate(5);
       // counter::increment('views');
        return view('home_viste');
    }
    public function index()
    {
        //$categories = Categorie::where('nom_categorie',"!=",$video->video_categorie)->get();
        $userTail = count(User::where('role', "=", '2')->get());
        //  $userTail=count($user);
        //view('admin.page.home')->with('userTail',$userTail);
        //$userTail=User::find('role');
        return view('admin.page.home')->with('userTail', $userTail);
        //dd($user);
    }

    public function AjouterCategorie()
    {
        return view('admin.page.AjouterCategorie');
    }
    public function AjouterVideo()
    {
        $categories = Categorie::all();
        return view('admin.page.AjouterVideo', compact('categories'));
    }
    public function categorie()
    {
        $cateories = Categorie::get();
        return view('admin.page.categorie')->with('categories', $cateories);
    }
  public function Liste_des_utilisateurs()
    {
        $user = User::where('role', "=", '2')->get();
        return view('admin.page.Liste_des_utilisateurs')->with('user', $user);
    }
    public function video()
    {
        $videos = video::get();
        return view('admin.page.video')->with("videos", $videos);
    }

    public function silder()
    {
        $silders = silder::get();
        return view('admin.page.silder')->with("silders", $silders);;
    }

    public function AjouterSilder()
    {
        return view('admin.page.ajouterSilder');
    }
    public function acceuil()
    {
        $videos = video::all();

        $video1 = video::find(1);
        $video2 = video::find(2);
        $video3 = video::find(3);
        return view('home.acceuil')->with("videos", $videos)->with("video1", $video1)->with("video2", $video2)->with("video3", $video3);
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
    public function detailfilm($id)
    {
        $video = video::find($id);



        return view('home.detailfilm')->with("video", $video);
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
    function changePassword(Request $request)
    {
        //Validate form
        $validator = \Validator::make($request->all(), [
            'oldpassword' => [
                'required', function ($attribute, $value, $fail) {
                    if (!\Hash::check($value, Auth::user()->password)) {
                        return $fail(__('The current password is incorrect'));
                    }
                },
                'min:8',
                'max:30'
            ],
            'newpassword' => 'required|min:8|max:30',
            'cnewpassword' => 'required|same:newpassword'
        ], [
            'oldpassword.required' => 'Enter your current password',
            'oldpassword.min' => 'Old password must have atleast 8 characters',
            'oldpassword.max' => 'Old password must not be greater than 30 characters',
            'newpassword.required' => 'Enter new password',
            'newpassword.min' => 'New password must have atleast 8 characters',
            'newpassword.max' => 'New password must not be greater than 30 characters',
            'cnewpassword.required' => 'ReEnter your new password',
            'cnewpassword.same' => 'New password and Confirm new password must match'
        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {

            $update = User::find(Auth::user()->id)->update(['password' => \Hash::make($request->newpassword)]);

            if (!$update) {
                return response()->json(['status' => 0, 'msg' => 'Quelque chose a mal tourné, échec de la mise à jour du mot de passe dans la base de données.']);
            } else {
                return response()->json(['status' => 1, 'msg' => 'Votre mot de passe a été modifié avec succès']);
            }
        }
    }

    function updatePicture(Request $request)
    {
        $path = 'users/images/';
        $file = $request->file('admin_image');
        $new_name = 'UIMG_' . date('Ymd') . uniqid() . '.jpg';

        //Upload new image
        $upload = $file->move(public_path($path), $new_name);

        if (!$upload) {
            return response()->json(['status' => 0, 'msg' => 'Something went wrong, upload new picture failed.']);
        } else {
            //Get Old picture
            $oldPicture = User::find(Auth::user()->id)->getAttributes()['picture'];

            if ($oldPicture != '') {
                if (\File::exists(public_path($path . $oldPicture))) {
                    \File::delete(public_path($path . $oldPicture));
                }
            }

            //Update DB
            $update = User::find(Auth::user()->id)->update(['picture' => $new_name]);

            if (!$upload) {
                return response()->json(['status' => 0, 'msg' => 'Something went wrong, updating picture in db failed.']);
            } else {
                return response()->json(['status' => 1, 'msg' => 'Your profile picture has been updated successfully']);
            }
        }
    }
    function profile()
    {
        return view('admin.page.profile');
    }
    function updateInfo(Request $request)
    {

        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . Auth::user()->id,
            'date_de_naissance ' => 'required',

            'contact' => 'required'
        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            $query = User::find(Auth::user()->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password ' => $request->password,
                'date_de_naissance' => $request->date_de_naissance,
            ]);

            if (!$query) {
                return response()->json(['status' => 0, 'msg' => "Quelque chose n'a pas fonctionné."]);
            } else {
                return response()->json(['status' => 1, 'msg' => 'Votre profil a été mis à jour avec succès.']);
            }
        }
    }
}
