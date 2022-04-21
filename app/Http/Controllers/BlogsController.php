<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Validator;

class BlogsController extends Controller
{

    public function index()
    {
        if(Auth::check())
        {
        	$blog_data = DB::table('blogs')
                            ->where('user_id','=',Auth::user()->id)
                            ->get();
            $blog_count= $blog_data->count();
    	    return view('blogs.index',compact('blog_data','blog_count')); 
        }
        else
        {
            return redirect()->to('/login');
        }  
    }

    public function new_blog()
    {
        if(Auth::check())
        {

    	   return view('blogs.add');
        }
        else
        {
            return redirect()->to('/login');
        }
    }

	public function add_blog(Request $request)
    {
        if(Auth::check())
        {	
            $id = $request->input('id');
            $name = $request->input('title');
            $image = $request->input('image');
            $content = $request->input('content');
            $category = $request->input('category');
            $date = date("F j, Y");
           
           	$validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
          	]);


          if ($validator->passes()) {

            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/blog'), $file);
          
            $values = array('title'=>$name, 'content'=>$content, 'category'=>$category ,'image'=>$file , 'user_id'=>$id , 'created_at'=>$date);
            $insert_values = DB::table('blogs')
                            ->insert($values);
            if($insert_values)
            {
                $blog_data = DB::table('blogs')
                            ->where('user_id','=',Auth::user()->id)
                            ->get();
    	        $blog_count= $blog_data->count();
    	        $insert="yes";
    		    return view('blogs.index',compact('blog_data','blog_count','insert'));  
            }
            else
            {
            	echo "no";
            }
            
          }

          return response()->json(['error'=>$validator->errors()->all()]);
      }
      else
      {
         return redirect()->to('/login');
      }

    }
	       


    
    public function edit_blog($id)
    {
         if(Auth::check())
        {   
        	$blog_data = DB::table('blogs')
                            ->where('id','=',$id)
                            ->first();
    	    return view('blogs.edit',compact('blog_data')); 
        }
        else
        {
            return redirect()->to('/login');
        }

    }

    public function update_blog(Request $request)
    {
        if(Auth::check())
        {	
            $id = $request->input('id');
            $name = $request->input('title');
            $image = $request->input('image');
            $content = $request->input('content');
            $category = $request->input('category');
            $blog_id =	$request->input('blog_id');
            $old_image = $request->input('old_image');
            $image = $request->input('image');
            echo $image;
            $date = date("F j, Y");
            if($request->hasFile('image') == '')
            {
                $upload_image =$old_image;

            }
            else
            {
               $timestamp = time();
               $upload_image = $timestamp.'-'.str_replace(' ','-',$request->image->getClientOriginalName());
               $request->image->move(public_path('images/blog'),$upload_image);
            }
            		      
    	        $values = array('title'=>$name, 'content'=>$content, 'category'=>$category ,'image'=>$upload_image , 'user_id'=>$id , 'created_at'=>$date);
    	        $insert_values = DB::table('blogs')->where('id', $blog_id)
    	                        ->update($values);
    	        if($insert_values)
    	        {
    	            $blog_data = DB::table('blogs')
    	                        ->where('user_id','=',Auth::user()->id)
    	                        ->get();
    		        $blog_count= $blog_data->count();
    		        $update="yes";
    			    return view('blogs.index',compact('blog_data','blog_count','update'));  
    	        }
    	        else
    	        {
    	        	echo "no";
    	        }
            }
            else
            {
                return redirect()->to('/login');
            }
	    
    }

    public function delete_blog($id)
    {
        if(Auth::check())
        {
        	$blog_data = DB::table('blogs')
                            ->where('id','=',$id)
                            ->delete();
    	    $blog_data = DB::table('blogs')
                            ->where('user_id','=',Auth::user()->id)
                            ->get();
            $blog_count= $blog_data->count();
            $delete ="yes";
    	    return view('blogs.index',compact('blog_data','blog_count','delete')); 
        }
        else
        {
            return redirect()->to('/login');
        }


    }

}
