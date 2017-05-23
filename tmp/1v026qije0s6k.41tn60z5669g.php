
<div class="container">
  


<div class="panel panel-default container-fluid">
            
      <img src="images/user.png" alt="User Image" style="width:45px;height:45px;"><br>
      <div>
        <h1>Become a Blogger!</h1>
        <h4>Create an account below</h4>
      </div>
</div>


<form action="<?= $BASE.'/blogger/create' ?>" method="post" class="form-horizontal">
    
    <div class="input-prepend">
        <span class="add-on">Username</span>
        <input type="text" id="username" name="username" value="" class="input-xlarge" />
    </div>
    <br/><br/>
    
     <div class="input-prepend">
        <span class="add-on">Email</span>
        <input type="text" id="email" name="email" value="" class="input-xlarge" />
    </div>
    <br/><br/>
    
     <div class="input-prepend">
        <span class="add-on">Password</span>
        <input type="text" id="password" name="password" value="" class="input-xlarge" />
    </div>
    <br/><br/>
    
     <div class="input-prepend">
        <span class="add-on">Verify</span>
        <input type="text" id="verify" name="verify" value="" class="input-xlarge" />
    </div>
    <br/><br/>
    
    <div class="input-prepend">
        <span class="add-on">Photo</span>
        <input type="text" id="password" name="password" value="" class="input-xlarge" />
    </div>
    <br/><br/>
    
    
    
   <div class="input-prepend">
        <span class="add-on add-on-area "> Biography</span>
        <textarea row="5" id="bio" name="bio" class="input-xlarge"></textarea>
    </div><br/><br/>
 
    <div class="control-group">
        <div class="">
            <input type="hidden" name="create" value="create" />
            <button type="submit" class="btn btn-primary"> Start Blogging</button>
        </div>
    </div>
 
</form>