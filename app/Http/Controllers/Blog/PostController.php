<?php

namespace App\Http\Controllers\Blog;

use App\Http\Requests\BlogCreateValidation;
use App\Models\BlogCategory as Categories;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use App\Repositories\BlogPostRepositories;
use App\Repositories\CategoryBlogRepositories;


/**
 * Class PostController
 * @package App\Http\Controllers\Blog
 */
class PostController extends BaseController
{
    /**
     * @var BlogPostRepositories
     */
    private $BlogRepositories;

    public function __construct()
    {
        parent::__construct();

        $this->BlogRepositories = app(BlogPostRepositories::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = $this->BlogRepositories->getAll();
        return view('blog.posts.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = new BlogPost ();

        $categories = Categories::all();

        return view('blog.posts.create',
            compact('items', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogCreateValidation $request)
    {
        $request['user_id'] = auth()->user()->id;
        $request['content_html'] = $request['content_raw'];
        if (!empty($request['is_published'])) {
            $request['is_published'] = 1;
        }
        //dd($request->all());
        $blog = new BlogPost($request->all());

        $blog->save();

        return redirect('/blog/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, CategoryBlogRepositories $categoryRepositoriesRepository)
    {
        $item =  $this->BlogRepositories->getEdit($id);

        if (empty($item)) {
            abort(404);
        }

        $categories = $categoryRepositoriesRepository->getSelectItems();


        return view('blog.posts.edit', compact('item', 'categories'));
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
        $item = BlogPost::find($id);

        if (empty($item)) {
            return back()
                ->withErrors(['msg' => "Post whit id - {$id} not found!"])
                ->withInput();
        }

        $data = $request->all();
        if (empty($data['slug'])) {
            $data['slug'] = 'slug';
        }
        if (empty($data['is_published'])) {
            $data['is_published'] = 0;
        } else {
            $data['is_published'] = 1;
        }

        $result = $item->fill($data)->save();

        if (!$result) {
            return back()
                ->withErrors(['msg' => 'Error!'])
                ->withInput();
        }

        return redirect('/blog/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
