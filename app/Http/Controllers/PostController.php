<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
// use PhpParser\Node\Expr\AssignOp\Pow;

class PostController extends Controller
{
    //
    public function allPosts(){
        // $posts = Post::all();
        // $posts = Post::latest(); //Displays the latest records on top
        $posts = Post::latest()->paginate(10);
        return view('posts.allPosts', compact('posts'));
    }

    public function blog(){
        $posts = Post::all();
        return view('guests.blog', compact('posts'));
    }

    public function createPostView(){
        return view('posts.create-post');
    }

    // Store a newly created post in storage.
   public function storePost(Request $request)
   {
       $validatedData = $request->validate([
           'title' => 'required|string|max:55|unique:posts',
           'post_content' => 'required|string|max:255|unique:posts',
        //    'user_id' => 'required|string|max:55',
       ],
    //    [
    //     'title.required' => 'Please provide a Title for your Post.' //Custom Error Messages for Required Fields
    //     'post_content.required' => 'Please provide a Content for your Post.'
    //    ]
        );

    //    $validatedData = $request->all();
    //    Post::create($validatedData);

    //    Alternative Way to Insert Data from a Form to the Database
       Post::insert([
        'title' =>$request->title,
        'post_content' =>$request->post_content,
        'user_id' => Auth::user()->id,
        'created_at' => Carbon::now(),
       ]);
       if(Auth::user()->role == 'User'){
        return redirect()->route('dashboard')->with('success', 'Post created successfully.');
       } else{
        return redirect()->route('allPosts')->with('success', 'Post created successfully.');
       }
    //    return redirect()->back('allPosts')->with('success', 'Post created successfully.');
   }

   // Display the specified post.
   public function showPost($id)
   {
       $post = Post::find($id);
       return view('posts.showPost', compact('post'));
   }

   // Show the form for editing the specified post.
    public function modifyPostView($id){
        $post = Post::findOrFail($id);
        return view('posts.modify-post', compact('post'));
    }

    // Update the specified post in storage.
   public function updatePost(Request $request, $id)
   {
        // dd($request->all(), $id);

        $post = Post::findOrFail($id);
        
        // $post = Post::findOrFail($id)->save([
        //     'title' => $request->title,
        //     'post_content' => $request->post_content,
        // ]);

        $validatedData = $request->validate([
           'title' => 'required|string|max:55',
           'post_content' => 'required|string|max:255',
        ]);

        $post->fill($validatedData);        
        $post->save();

        // $post->title = $request->input('title');
        // $post->post_content = $request->input('post_content');
        // $post->save();

        if(Auth::user()->role == 'User'){
            return redirect()->route('dashboard')->with('success', 'Post created successfully.');
           } else{
            return redirect()->route('allPosts')->with('success', 'Post created successfully.');
           }   }

   // Remove the specified post from storage.
   public function destroyPost($id)
   {
       $post = Post::findOrFail($id);
       $post->delete();
       return redirect()->route('allPosts')->with('success', 'Post deleted successfully.');
   }

}
