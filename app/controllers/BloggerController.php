<?php
class BloggerController extends Controller {
 
    function index()
    {
        $bloggers = new Blogger($this->db);
        $this->f3->set('bloggers',$bloggers->all());
        $this->f3->set('page_head','Blogger List');        
        $this->f3->set('view','blogger/list.htm');
    }
    
    function create()
    {
        if($this->f3->exists('POST.create'))
        {
            $blogger = new Blogger($this->db);
            $blogger->add();
     
            $this->f3->reroute('/');
     
        } else
        {
            $this->f3->set('page_head','Create User');
            $this->f3->set('view','blogger/create.htm');
        }
    }
    
    public function update()
    {
        $blogger = new Blogger($this->db);
     
        if($this->f3->exists('POST.update'))
        {
            $blogger->edit($this->f3->get('POST.id'));
            $this->f3->reroute('/');
     
        } else
        {
            $blogger->getById($this->f3->get('PARAMS.id'));
            $this->f3->set('blogger',$blogger);
            $this->f3->set('page_head','Update User');
            $this->f3->set('view','blogger/update.htm');
        }
    }
    
    function delete()
    {
        if($this->f3->exists('PARAMS.id'))
        {
            $blogger = new Blogger($this->db);
            $blogger->delete($this->f3->get('PARAMS.id'));
        }
     
        $this->f3->reroute('/');
    }
    
    
     function bloggerProfile()
    {
        $blogger = new Blogger($this->db);
        $blogger->getById($this->f3->get('PARAMS.id'));
        $this->f3->set('blogs',$blogger);
        $this->f3->set('view','blogger/blogger-profile.htm');
        
    }
    
    
    function viewPost()
    {
        $blogs = new Blogger($this->db);
        $blogs->getById($this->f3->get('PARAMS.id'));
        $this->f3->set('blogs',$blogs);
        $this->f3->set('view','post/blogger-post.htm');
    }
    
    function aboutUs()
    {
    
        $this->f3->set('view','about-us.htm');
    }
    
    function becomeABlogger()
    {
         $this->f3->set('view','blogger/become-a-blogger.htm');
        
    }
}
