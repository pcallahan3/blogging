<div class="panel panel-default container-fluid">
       
        <div>
            <img src="ui/img/writing.png" style="width:100px;height:100px;">
            <h1>Change your mind?</h1>
       </div>
  </div>


<form action="<?= $BASE.'/blogger/update' ?>" method="post" class="form-horizontal">
 
   
    
    <div class="input-prepend">
        <span class="add-on"> Title</span>
        <input type="text" id="title" name="title" value="<?= $POST['title'] ?>" class="input-xlarge" />
    </div>
    <br/><br/>
    
   <div class="input-prepend">
        <span class="add-on add-on-area "> Post</span>
        <textarea row="5" id="content" name="content" class="input-xlarge"><?= $POST['content'] ?></textarea>
    </div><br/><br/>
 
    
    
    <div class="control-group">
        <div class="">
            <input type="hidden" name="id" value="<?= $POST['id'] ?>" />
            <input type="hidden" name="update" value="update" />
            <button type="submit" class="btn btn-primary"><i class="icon-edit icon-white"></i> Update</button>
        </div>
    </div>
 
</form>