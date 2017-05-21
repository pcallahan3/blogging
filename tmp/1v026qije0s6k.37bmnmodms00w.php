

    <?php foreach (($users?:[]) as $user): ?>
       
    
       
       <div class="well">
        <thead>
    <tr>
        <strong>
         <th scope="col">Name:</th>
           <?= trim($user['name']) ?><br>
           <th scope="col">Email:</th>
           <?= trim($user['email']) ?><br>
           <th scope="col">Mobile:</th>
            <?= trim($user['mobile']) ?><br>
            
             <th scope="col">Title:</th>
            <?= trim($user['title']) ?><br>
            <th scope="col">Post:</th>
            <?= trim($user['post']) ?>
            </strong>
        </tr>
    </thead>
           </div>
       
    <?php endforeach; ?>
  