
<?php foreach (($bloggers?:[]) as $blogger): ?>
    <div class="well" >
        
        <thead>
            <tr>
                
            <strong>
                
                <img src="images/user.png" alt="Mountain View" style="width:304px;height:228px;"><br>
                
                    <th scope="col">Title:</th>
                   <?= trim($blogger['title']) ?><br>
                   <th scope="col">Post:</th>
                   <?= trim($blogger['post']) ?>
            </strong>
            </tr>
        </thead>
    </div>
   
<?php endforeach; ?>