<?php


/**
 *Controller for a blogger
 */
class BloggerController extends Controller {

    /**
     *Retrieves all users in DB
     */
    function index()
    {
        $bloggers = new Blogger($this->db);
        $posts = new BlogPost($this->db);
        $this->f3->set('bloggers',$bloggers->all());
        $this->f3->set('posts',$posts->all());
        $this->f3->set('page_head','Blogger List');        
        $this->f3->set('view','blogger/list.htm');
    }
    
    
    /**
     *Creates users 
     */
    function create()
    {
        if($this->f3->exists('POST.create'))
        {
            $blogger = new Blogger($this->db);
            $blogger->add();
     
            $this->f3->reroute('/');
     
        } else
        {
            $this->f3->set('page_head','Create Post');
            $this->f3->set('view','blogger/create.htm');
        }
    }
    
    /**
     *Updates users
     */
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
            $this->f3->set('page_head','Update Post');
            $this->f3->set('view','blogger/update.htm');
        }
    }
    
    /**
     *Deletes users
     */
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
        $this->f3->set('blogger',$blogger);
        $this->f3->set('view','blogger/blogger-profile.htm');
        
    }
    
    
    /**
     *View post of a user
     */
    function viewPost()
    {
        $blogs = new Blogger($this->db);
        $blogs->getById($this->f3->get('PARAMS.id'));
        $this->f3->set('blogs',$blogs);
        $this->f3->set('view','blogger/blogger-post.htm');
    }
    
    /**
     *Renders about-us page
     */
    function aboutUs()
    {
    
        $this->f3->set('view','about-us.htm');
        
    }
    
    /**
     *Allows a user to sign up to become a blogger
     */
    function createBlogger()
    {
        if($this->f3->exists('POST.create'))
        {
            $blogger = new Blogger($this->db);
            $blogger->add();
            $this->f3->reroute('blogger/create-blog.htm');
     
        } else
        {
          
             $this->f3->set('view','blogger/become-a-blogger.htm');
        }
    }
    
    /**
     *Login for a user
     */
    function login()
    {
         $this->f3->set('view','blogger/login.htm');
        
    }
    
    /**
     *Renders a the create-blog.htm
     */
    function createBlog()
    {
       
        $this->f3->set('view','blogger/create-blog.htm');
         
        
    }
    
    /**
     *Allows user to update their blog
     */
     function updateBlog()
    {
         $blogger = new Blogger($this->db);
     
        if($this->f3->exists('POST.update'))
        {
            $blogger->edit($this->f3->get('POST.id'));
            $this->f3->reroute('/');
     
        } else
        {
            $blogger->getById($this->f3->get('PARAMS.id'));
            $this->f3->set('view','blogger/update-blog.htm');
        }
           
       
        
    }
}
