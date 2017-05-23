  <div class="panel panel-default container-fluid">
       
        <div>
            <img src="ui/img/writing.png" style="width:100px;height:100px;">
            <h1>Whats on your mind?</h1>
       </div>
  </div>


<form action="<?= $BASE.'/blogger/create' ?>" method="post" class="form-horizontal">
 
   
    
    <div class="input-prepend">
        <span class="add-on"> Title</span>
        <input type="text" id="title" name="title" value="" class="input-xlarge" />
    </div>
    <br/><br/>
    
   <div class="input-prepend">
        <span class="add-on add-on-area "> Post</span>
        <textarea row="5" id="title" name="content" class="input-xlarge"></textarea>
    </div><br/><br/>
 
    <div class="control-group">
        <div class="">
            <input type="hidden" name="create" value="create" />
            <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"></i> Save</button>
        </div>
    </div>
 
</form>