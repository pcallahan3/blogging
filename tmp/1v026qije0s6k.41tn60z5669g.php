
<div class="container">
  
  <div class="well well-sm profile-well">
    <img src="images/user.png" alt="User Image" style="width:304px;height:228px;"><br>
    <h1>Become a Blogger!</h1>
    <h4>Create an account below</h4>
    
  </div>
</div>


<form action="<?= $BASE.'/blogger/create' ?>" method="post" class="form-horizontal">
    
    <div class="input-prepend">
        <span class="add-on"><i class="icon-user icon-black"></i> Username</span>
        <input type="text" id="username" name="username" value="" class="input-xlarge" />
    </div>
    <br/><br/>
    
     <div class="input-prepend">
        <span class="add-on"><i class="icon-user icon-black"></i> Email</span>
        <input type="text" id="email" name="email" value="" class="input-xlarge" />
    </div>
    <br/><br/>
    
     <div class="input-prepend">
        <span class="add-on"><i class="icon-user icon-black"></i> Password</span>
        <input type="text" id="password" name="password" value="" class="input-xlarge" />
    </div>
    <br/><br/>
    
    <div class="input-prepend">
        <span class="add-on"><i class="icon-user icon-black"></i> Verify</span>
        <input type="text" id="verify" name="verify" value="" class="input-xlarge" />
    </div>
    <br/><br/>
    
   <div class="input-prepend">
        <span class="add-on add-on-area "><i class="icon-home icon-black"></i> Biography</span>
        <textarea row="5" id="bio" name="bio" class="input-xlarge"></textarea>
    </div><br/><br/>
 
    <div class="control-group">
        <div class="">
            <input type="hidden" name="create" value="create" />
            <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"></i> Start Blogging</button>
        </div>
    </div>
 
</form>