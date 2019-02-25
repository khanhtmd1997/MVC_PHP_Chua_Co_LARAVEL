<?php
	class Post{
		public $id;
		public $title;
		public $content;

		function __construct($id,$title,$content){
			$this->id = $id;
			$this->title = $title;
			$this->content = $content;
		}
		static function all(){
			$list = [];
			$db = DB::getInstance();
			$req = $db->query("SELECT * FROM post order by id desc ");

			foreach ($req->fetchAll() as $item ) {
				$list[] = new Post($item['id'],$item['title'],$item['content']);
			}
			return $list;
		}
		static function find($id){
		  	$db = DB::getInstance();
		  	$req = $db->prepare('SELECT * FROM post WHERE id = :id order by id desc' );
		  	$req->execute(array('id' => $id));

		  	$item = $req->fetch();
		  	if (isset($item['id'])) {
		    	return new Post($item['id'], $item['title'], $item['content']);
		  	}
		  	return null;
		}
		static function delete($id){
			$db = DB::getInstance();
			$req = $db->prepare('DELETE FROM post WHERE id = :id');
		  	$req->execute(array('id' => $id));
		  	$list = [];
		  	$sql = $db->query("SELECT * FROM post order by id desc");
		  	foreach ($sql->fetchAll() as $item) {
		  		$list[] = new Post($item['id'],$item['title'],$item['content']);
		  	}
		  	return $list;
		}
		// static function insert($title,$content){
		// 	$db = DB::getInstance();
		// 	$req = $db->prepare('INSERT INTO post("title","content") VALUES (?,?');
		// 	$statement = $req;
		// 	$statement = bindParam(1,$post->title);
		// 	$statement = bindParam(2,$post->content);
		// 	return $statement->execute();
			
		// }
		// static function update($post){
		// 	$db = DB::getInstance();
		// 	$req = $db->prepare('UPDATE post SET "title"=?,"content"=? WHERE "id" = ?');
		// 	$statement = $req;
		// 	$statement->bindParam(1, $post->title);
  //       	$statement->bindParam(2, $post->content);
  //       	$statement->bindParam(3, $id);
  //       	return $statement->execute();
		// }
		// static function submitUpdate($id){
		// 	$db = DB::getInstance();
		// 	$sql = $db->prepare('UPDATE post SET title = ?,content=? where id = :id');
		// 	$sql = execute(array('id' => $id));
		// 	$item = $req->fetch();
		// 	if (isset($item['id'])) {
		//     	return new Post($item['id'], $item['title'], $item['content']);
		//   	}
		//   	return null;
		// }

	}
?>