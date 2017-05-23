<div class="container">
  
  <div class="panel panel-default header-panel">
    <h1><?= trim($blogger['username']) ?> Blogs</h1><br>
  </div>
</div>

<div class="container">
  
  <div class="well well-sm content-well">
    <h4>My blogs:</h4><hr>
    
    <br> <th scope="col"><a href="<?= $BASE.'/blogger/view-post/'. $PARAMS['id'] ?>"><?= trim($blogger['title']) ?>:</a></th>
    <h4><?= trim($blogger['content']) ?></h4><br>
  </div>
</div>

 
<div class="container">
  
  <div class="well well-sm bio-well">
    <img src="images/user.png" alt="User Image" style="width:45px;height:45px;"><br>
    <h3><?= trim($blogger['username']) ?></h3><hr>
    <h4><?= trim($blogger['bio']) ?></h4><br>
  </div>
</div>

 
