 <?php

  require_once "bootstrap.php";

  if (isset($_GET['post_id']) && isset($_SESSION['loggedUser'])) {
    $post->deletePost($_GET['post_id']);
  }

  $posts = $post->selectAll('posts');
  //var_dump($posts);
  // Test
  //array(4) { [0]=> object(stdClass)#7 (5) { ["id"]=> int(37) ["title"]=> string(13) "Kupujete auto" ["description"]=> string(40) //"Ako kupujete auto obratite paznju na...." ["user_id"]=> int(35) ["created_at"]=> string(19) "2022-04-24 00:00:00" }

  require_once "views/index.view.php";


  ?>


