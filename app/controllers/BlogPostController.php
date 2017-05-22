<?php
class BlogPostController extends Controller {
 
    function index()
    {
        $blog = new BlogPost($this->db);
        $this->f3->set('posts',$blog->all());
        $this->f3->set('page_head','Post List');        
        $this->f3->set('view','blogger/list.htm');
    }
    
    function create()
    {
        if($this->f3->exists('POST.create'))
        {
            $blog = new BlogPost($this->db);
            $blog->add();
     
            $this->f3->reroute('/');
     
        } else
        {
            $this->f3->set('page_head','Create Post');
            $this->f3->set('view','post/create.htm');
        }
    }
    
    public function update()
    {
        $blog = new BlogPost($this->db);
     
        if($this->f3->exists('POST.update'))
        {
            $blog->edit($this->f3->get('POST.id'));
            $this->f3->reroute('/');
     
        } else
        {
            $blog->getById($this->f3->get('PARAMS.id'));
            $this->f3->set('post',$blog);     //Review this code
            $this->f3->set('page_head','Update Post');
            $this->f3->set('view','post/update.htm');
        }
    }
    
    function delete()
    {
        if($this->f3->exists('PARAMS.id'))
        {
            $blog = new BlogPost($this->db);
            $blog->delete($this->f3->get('PARAMS.id'));
        }
     
        $this->f3->reroute('/');
    }
    
    /*
    function viewPost()
    {
        $post = new BlogPost($this->db);
        $post->getById($this->f3->get('PARAMS.id'));
        $this->f3->set('blogs',$blogger);
        $this->f3->set('view','post/blogger-post.htm');
        
    }*/
}
