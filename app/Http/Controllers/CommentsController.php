<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CommentsController extends Controller
{
    public function add_comment(Request $request)
    {
        
        $comment = $request->input('comment');
        $user_id = $request->input('user_id');
        $blog_id = $request->input('blog_id');

        $values = array('comments'=>$comment,'user_id'=>$user_id , 'blog_id'=>$blog_id );
        $insert_values = DB::table('comments')
                        ->insert($values);
        if($insert_values)
        {
		  return redirect()->back()->withErrors(['msg' => 'The Message']);
        }
        
     }

      public function edit_comment(Request $request)
    {
        
        $comment = $request->input('comment');
        $user_id = $request->input('user_id');
        $blog_id = $request->input('blog_id');

        $values = array('comments'=>$comment );
        $update_values = DB::table('comments')->where('blog_id','=',$blog_id)->where('user_id','=',$user_id)
                        ->update($values);
        if($update_values)
        {
		  return redirect()->back()->with(['msg1' => 'The Message']);
        }
        
     }

     public function delete_comment($id)
    {
        
        	$comment = DB::table('comments')
                            ->where('id','=',$id)
                            ->delete();
    	    return redirect()->back()->with(['msg2' => 'The Message']); 
        


    }


        


}
