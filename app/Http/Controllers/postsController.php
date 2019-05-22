<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;

class postsController extends Controller
{

    private $admin = 0;
    private $currentUser;

    
    public function __construct()
    {        
        $this->middleware('auth', ['except'=>['index', 'show']]);        
    }


    public function initialize()
    {
        $this->currentUser = auth()->user();
        if($this->currentUser != null)
        {
            if($this->currentUser->name == 'The Admin' && $this->currentUser->password == '$2y$10$xNOnI90Tg1rnvAKMspuTYOYZWqvt1tBdGFoD48us0P1UNKTocxYqG') 
            {
                $this->admin = 1;
            }     
        } 
    }
  
    public function index()
    {   
        //to check if the current user is admin or not, if yes, then giving him the edit and delete priviliages to posts

        $this->initialize();
        $posts = Post::orderBy('updated_at', 'desc')->paginate(5);
        return view('posts.blog')->with(['posts'=> $posts, 'admin'=>$this->admin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('cover_image'))
        {           
            //get filename with extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
            
        }
        else{
            $fileNameToStore = 'noImage.jpeg';    
        }

        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post->save();

        return redirect('/dashboard')->with('success', 'Blog added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //to check if the current user is admin or not, if yes, then giving him the edit and delete priviliages to posts

    
        $this->initialize();
        $post = Post::find($id);
        return view('posts.blogInner')->with(['post'=> $post, 'admin'=>$this->admin]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->initialize();
        $post = Post::find($id);
        if($post->user == auth()->user() || $this->admin == 1 )
        {
            return view('posts.edit')->with('post', $post);
        }
        return redirect('/posts')->with('error', 'Access Denied');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        if($request->hasFile('cover_image'))
        {           
            //get filename with extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);            
        }

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        if($request->hasFile('cover_image'))
        {
            $post->cover_image = $fileNameToStore;
        }
        $post->save();

        return redirect('/dashboard')->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->initialize();
        $post = Post::find($id);
        if($post->user == auth()->user() || $this->admin == 1)
        {
            if($post->cover_image != 'noImage.jpeg')
            {
                Storage::delete('public/cover_images/'.$post->cover_image);
            }
            
            $post->delete();
            
            return redirect('/dashboard')->with('success', 'Blog deleted successfully');
        }
        
        return redirect('/posts')->with('error', 'Access Denied!!');
    }

}
