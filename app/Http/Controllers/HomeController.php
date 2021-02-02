<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\News;
use App\Models\Setting;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function categoryList()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public static function getsetting()
    {
        return Setting::first();
    }


    //
    public function index()
    {
        $slider = News::limit(4)->get();
        print_r($slider);
        exit();
        $data = [
            'setting'=>$setting,
            'slider'=>$slider,
            'page'=>'home'

        ];



        return view('home.index');
    }

    public function aboutus()
    {
        return view('home.about');
    }

    public function references()
    {
        return view('home.references');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function fag()
    {
        return view('home.fag');
    }
    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data-> save();

        return redirect()->route('contact')->with('success','Mesajınız Kaydedilmiştir, Teşekkürler.');
    }





    public function test($id,$name)
    {
        return view('home.test',['id'=>$id,'name'=>$name]);
        /*
        echo "Number".$id;
        for ($i=1;$i<=$id;$i++)
        {
            echo "<br> $i -- $name";
        }*/
    }
    public function login()
    {
        return view('admin.login');
    }
    public function logincheck(Request $request)
    {
        if($request->isMethod('post'))
        {
            $credentials = $request->only('email','password');
            if(Auth::attempt($credentials))
            {
                $request->session()->regenerate();
                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email'=>'The Provided credentials do not ']);
        }
        else
        {
            return view('admin.login');
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }


}
