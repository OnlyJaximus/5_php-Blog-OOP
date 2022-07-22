 <?php require_once 'partials/top.php'; ?>

 <nav class="navbar navbar-expand navbar-light bg-light">
     <a href="" class="navbar-brand">Blooger</a>
     <ul class="navbar-nav ml-auto">
         <li class="nav-item">
             <a href="logout.php" class="nav-link">Logout</a>
         </li>

         <li class="nav-item">
             <a href="index.php" class="nav-link">Back to Blog</a>
         </li>
     </ul>
 </nav>
 <div class="jumbotron text-center">
     <h4>Add New Post</h4>
 </div>
 <div class="container">
     <div class="col-8 offset-2">
         <?php if ($post->newPostStatus) : ?>
             <div class="alert alert-success">New Post inserted</div>
         <?php endif; ?>
         <form action="add_post.php" method="POST">
             <input type="text" name="post_title" placeholder="title" class="form-control"><br>
             <textarea name="post_description" placeholder="description" id="" cols="30" rows="10" class="form-control"></textarea><br>
             <button type="submit" name="post_sub_btn" class="form-control btn btn-primary">Add</button>
         </form>
     </div>
 </div>

 <?php require_once 'partials/bottom.php'; ?>