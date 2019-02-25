<?php
require_once('controllers/base_controller.php');
require_once('models/post.php');

class PostsController extends BaseController{
 	function __construct(){
   		$this->folder = 'posts';
 	}

 	public function index(){
	   $posts = Post::all();
	   $data = array('posts' => $posts);
	   $this->render('index', $data);
 	}
 	public function show(){
 		$posts = Post::find($_GET['id']);
 		$data = array('posts'=>$posts) ;
 		$this->render('show',$data);
 	}
 	public function sua(){
 		$posts = Post::find($_GET['id']);
 		$data = array('posts'=>$posts) ;
 		$this->render('sua',$data);
 	}
 	public function xoa(){
 		$posts = Post::delete($_GET['id']);
 		$data = array('posts'=>$posts);
 		$this->render('index',$data);
 	}
 	public function them(){
 		$posts = Post::insert($title,$content);
 		$data = array('posts'=>$posts);
 		$this->render('index',$data);
 	}
}
?>