

  
    <?php foreach (($bloggers?:[]) as $blogger): ?>
     
    <div class="well" >
        
        <thead>
            <tr>
            <strong>
                <img src="images/user.png" alt="User" style="width:304px;height:228px;"><br>
                <th scope="col"><a href="<?= $BASE.'/blogger/profile/'. $blogger['blogger_id'] ?>">Name:</th>
                  <?= trim($blogger['username']) ?><br></a>
                  <th scope="col">Title:</th>
                   <?= trim($blogger['title']) ?><br>
                   <th scope="col">Post:</th></a>
                   <?= trim($blogger['content']) ?>
            </strong>
            </tr>
        </thead>
    </div>
   
<?php endforeach; ?>
  
  <!--<th scope="col"><a href="<?= $BASE.'/blogger/profile/'. $blogger['id'] ?>">--.
  <!--<a href="<?= $BASE.'/blogger/update/'. $blogger['id'] ?>">-->