<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\News;
use App\Models\Review;
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
        $slider = News::select('id','title','image','detail','slug')->limit(4)->get();
        $daily = News::select('id','title','image','detail','slug')->limit(4)->inRandomOrder()->get();
        $last = News::select('id','title','image','detail','slug')->limit(4)->orderByDesc('id')->get();
//        print_r($slider);
//        exit();
        $data = [
            #'setting'=>$setting,
            'slider'=>$slider,
            'daily'=>$daily,
            'last'=>$last,
            'page'=>'home',

        ];

        return view('home.index',$data);
    }

    public function categorynews($id,$slug)
    {
        $datalist = News::where('category_id',$id)->get();
        $data = Category::find($id);
//        print_r($data);
//        exit();
        return view('home.category_news',['data'=>$data,'datalist'=>$datalist]);
    }
    public function news($id,$slug)
    {
        $datalist = Image::where('news_id',$id)->get();
        $data = News::find($id);
        $reviews = Review::where('news_id',$id)->get();

//        print_r($data);
//        exit();
       return view('home.news_detail',['data'=>$data,'datalist'=>$datalist,'reviews'=>$reviews]);
    }
    public function getnews(Request $request)
    {
        $data = News::where('title',$request->input('search'))->first();

        return redirect()->route('news',['id'=>$data->id,'slug'=>$data->slug]);
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
    public function faq()
    {
        $datalist = Faq::all()->sortBy('position');
        return view('home.faq',['datalist'=>$datalist]);
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
