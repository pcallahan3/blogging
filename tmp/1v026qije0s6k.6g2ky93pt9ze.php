<div class="container">
  
  <div class="well well-sm profile-well">
    <h1><?= trim($blogs['name']) ?> Blogs</h1><br>
  </div>
</div>

<div class="container">
  
  <div class="well well-sm content-well">
    <h4>My blogs:</h4><hr>
    
    <br> <th scope="col"><a href="<?= $BASE.'/blogger/view-post/'. $PARAMS['id'] ?>"><?= trim($blogs['title']) ?>:</a></th>
    <h4><?= trim($blogs['post']) ?></h4><br>
  </div>
</div>

 
 