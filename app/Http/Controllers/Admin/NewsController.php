<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datalist = News::all();

        return view('admin.news', ['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datalist = Category::with('children')->get();
        return view('admin.news_add',['datalist'=>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new News;
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');

        $data->image = Storage::putFile('images', $request->file('image'));
        $data->category_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->detail = $request->input('detail');
        $data->new = $request->input('new');
        $data->blog = $request->input('blog');

        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route('admin_news');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news,$id)
    {
        //
        $data = News::find($id);
        $datalist = Category::with('children')->get();
        return view('admin.news_edit',['data' => $data,'datalist' => $datalist]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news,$id)
    {
        //
        $data = News::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        if($request->file('image')!=null)
        {
            $data->image = Storage::putFile('images', $request->file('image'));
        }

        $data->category_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->detail = $request->input('detail');
        $data->new = $request->input('new');
        $data->blog = $request->input('blog');

        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route('admin_news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news,$id)
    {
        //
        //DB::table('categories')->where('id','=',$id)->delete();
        $data = News::find($id);
        $data->delete();
        return redirect()->route('admin_news');
    }
}
