<table width="600" cellpadding="5" class="table table-hover table-bordered">
    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile</th>
        <th scope="col">Address</th>
        <th scope="col">Title</th>
        <th scope="col">Post</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
 
    <tbody>
    <?php foreach (($users?:[]) as $user): ?>
        <tr>
            <td><?= trim($user['name']) ?></td>
            <td><?= trim($user['email']) ?></td>
            <td><?= trim($user['mobile']) ?></td>
            <td><?= trim($user['address']) ?></td>
            <td><?= trim($user['title']) ?></td>
            <td><?= trim($user['post']) ?></td>
            <td><a href="<?= $BASE.'/user/update/'. $user['id'] ?>" class="btn btn-primary"><i class="icon-edit icon-white"></i> Edit</a>
                  <a href="<?= $BASE.'/user/delete/'. $user['id'] ?>" class="btn btn-danger"><i class="icon-remove icon-white"></i>
                    Delete</a></td>
 
        </tr>
    <?php endforeach; ?>
    </tbody>
 
</table>