<?php namespace App\Http\Controllers;

use App\Repository\CategoryInterface;
use App\Repository\ArticleInterface;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/
    protected $category;
    protected $article;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(CategoryInterface $category,ArticleInterface $article)
	{
		//$this->middleware('auth');
        $this->category=$category;
        $this->article=$article;
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $articles=$this->article->findAllPaginated();
         return view('home',compact('articles'));
	}

    public  function show($id){
        $article=$this->article->showArticle($id);
        return view('article',compact('article'));

    }

}
