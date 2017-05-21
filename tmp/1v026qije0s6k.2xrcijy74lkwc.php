<form action="<?= $BASE.'/post/create' ?>" method="post" class="form-horizontal">
    
    <div class="input-prepend">
        <span class="add-on"><i class="icon-user icon-black"></i> Title</span>
        <input type="text" id="name" name="title" value="" class="input-xlarge" />
    </div>
    <br/><br/>
    
   <div class="input-prepend">
        <span class="add-on add-on-area "><i class="icon-home icon-black"></i> Post</span>
        <textarea row="5" id="address" name="post" class="input-xlarge"></textarea>
    </div><br/><br/>
 
    <div class="control-group">
        <div class="">
            <input type="hidden" name="create" value="create" />
            <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"></i> Add Post</button>
        </div>
    </div>
 
</form>