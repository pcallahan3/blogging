<?php foreach (($posts?:[]) as $post): ?>


<div class="container">
  <div class="row">
    <div class="col-lg-6 col-lg-offset-3">
      <div class="well">
       <thead>
            <tr>
            <strong>
                <th scope="col"><a href="<?= $BASE.'/post/update/'. $user['id'] ?>"Name:</a></th>
                  <?= trim($post['name']) ?><br>
                    <th scope="col">Title:</th>
                   <?= trim($post['title']) ?><br>
                   <th scope="col">Post:</th>
                   <?= trim($post['post']) ?>
              
            </strong>
            </tr>
        </thead>
      </div>
    </div>
  </div>
</div>

<?php endforeach; ?>