<form action="<?= $BASE.'/user/update' ?>" method="post" class="form-horizontal">
 
    <div class="input-prepend">
        <span class="add-on"><i class="icon-user icon-black"></i> Name</span>
        <input type="text" id="name" name="name" value="<?= $POST['name'] ?>" class="input-xlarge" />
    </div><br/><br/>
 
    <div class="input-prepend">
        <span class="add-on"><i class="icon-envelope icon-black"></i> Email</span>
        <input type="text" id="email" name="email" value="<?= $POST['email'] ?>" class="input-xlarge" />
    </div>
    <br/><br/>
 
    <div class="input-prepend">
        <span class="add-on"><i class="icon-headphones icon-black"></i> Mobile</span>
        <input type="text" id="mobile" name="mobile" value="<?= $POST['mobile'] ?>" class="input-xlarge" />
    </div><br/><br/>

    
     <div class="input-prepend">
        <span class="add-on"><i class="icon-headphones icon-black"></i> Title</span>
        <input type="text" id="mobile" name="mobile" value="<?= $POST['title'] ?>" class="input-xlarge" />
    </div><br/><br/>
    
     <div class="input-prepend">
        <span class="add-on"><i class="icon-headphones icon-black"></i> Post</span>
        <input type="text" id="mobile" name="mobile" value="<?= $POST['post'] ?>" class="input-xlarge" />
    </div><br/><br/>
 
    <div class="control-group">
        <div class="">
            <input type="hidden" name="id" value="<?= $POST['id'] ?>" />
            <input type="hidden" name="update" value="update" />
            <button type="submit" class="btn btn-primary"><i class="icon-edit icon-white"></i> Update</button>
        </div>
    </div>
 
</form>