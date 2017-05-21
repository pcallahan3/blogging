

    <?php foreach (($users?:[]) as $user): ?>
    <div class="well">
        <thead>
            <tr>
            <strong>
                <th scope="col"><a href="<?= $BASE.'/user/update/'. $user['id'] ?>"Name:</a></th>
                  <?= trim($user['name']) ?><br>
                    <th scope="col">Title:</th>
                   <?= trim($user['title']) ?><br>
                   <th scope="col">Post:</th>
                   <?= trim($user['post']) ?>
              
            </strong>
            </tr>
        </thead>
    </div>
   
<?php endforeach; ?>
  