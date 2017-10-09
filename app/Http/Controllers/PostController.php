<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    // View Home Page -Route::get('/home', 'PostController@index');
    public function index()
    {
        $posts = Post::all();
        return view('posts.home', ['posts' => $posts]);
    }

    // View Create Page
    public function create()
    {
        return view('posts.create');
    }

    // Add New Data - Route::post('/add', 'PostController@add');
    public function add(Request $request)
    {
    	$this->validate($request, [
    		'event' => 'required',
    		'description' => 'required'
    	]);
		$posts = new Post;
		$posts->event = $request->input('event');
		$posts->description = $request->input('description');
		$posts->save();
		return redirect('/home')->with('info','Saved Successfully!');
    }

    // Read Data - Route::get('/read/{id}', 'PostController@read');
    public function read($id)
    {
        $posts = Post::find($id);
        return view('posts.read', ['posts' => $posts]);
    }

    // Update Data - Route::get('/update/{id}', 'PostController@update');
    public function update($id)
    {
        $posts = Post::find($id);
        return view('posts.update', ['posts' => $posts]);
    }

    // Edit Data - Route::post('/edit/{id}', 'PostController@edit');
    public function edit(Request $request, $id)
    {
        $this->validate($request, [
            'event' => 'required',
            'description' => 'required'
        ]);
        $data = array(
            'event' => $request->input('event'),
            'description' => $request->input('description')
        );
        Post::where('id', $id)->update($data);
        return redirect('/home')->with('info','Updated Successfully!');
    }

    // Delete Delete -Route::get('/delete/{id}', 'PostController@delete');
    public function delete($id)
    {
        Post::where('id', $id)->delete();
        return redirect('/home')->with('info','Deleted Successfully!');
    }
}
