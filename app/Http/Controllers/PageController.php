<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Auth;

class PageController extends Controller
{
    public function index()
    {
    	$all_blog_data = DB::table('blogs')->orderBy('id','desc')
                        ->paginate(2);
        return view('welcome',compact('all_blog_data'));
    }

    public function blog_details($id)
    {
        $blog_data = DB::table('blogs')
                            ->where('id','=',$id)
                            ->first();
        $author = DB::table('users')
                        ->where('id','=',$blog_data->user_id)
                        ->first();
        $latest_blogs = DB::table('blogs')
                            ->orderBy('id', 'desc')->limit(5)
                            ->get();
        $total_comments = DB::table('comments')
                            ->where('blog_id','=',$id)
                            ->count();
        $comment_detail = DB::table('comments')
                            ->where('blog_id','=',$id)->orderBy('id','desc')
                            ->get();
        
        return view('blog_details',compact('blog_data','author','latest_blogs','total_comments','comment_detail')); 
    }

    public function blog_category($name)
    {
        
        $all_blog_data = DB::table('blogs')->where('category','=',$name)->orderBy('id','desc')
                        ->paginate(2);

        $category=$name;
        return view('blog_category',compact('category','all_blog_data')); 
    }

    public function logout()
    {
    	Session::flush();
        
        return redirect()->to('/');
    }
    
}

