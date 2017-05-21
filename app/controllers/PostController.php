<?php
class PostController extends Controller {
 
    function index()
    {
        $post = new Post($this->db);
        $this->f3->set('posts',$post->all());
        $this->f3->set('page_head','Post List');        
        $this->f3->set('view','post/list.htm');
    }
    
    function create()
    {
        if($this->f3->exists('POST.create'))
        {
            $user = new Post($this->db);
            $user->add();
     
            $this->f3->reroute('/');
     
        } else
        {
            $this->f3->set('page_head','Create Post');
            $this->f3->set('view','post/create.htm');
        }
    }
    
    public function update()
    {
        $post = new Post($this->db);
     
        if($this->f3->exists('POST.update'))
        {
            $post->edit($this->f3->get('POST.id'));
            $this->f3->reroute('/');
     
        } else
        {
            $post->getById($this->f3->get('PARAMS.id'));
            $this->f3->set('post',$post);
            $this->f3->set('page_head','Update Post');
            $this->f3->set('view','post/update.htm');
        }
    }
    
    function delete()
    {
        if($this->f3->exists('PARAMS.id'))
        {
            $post = new Post($this->db);
            $post->delete($this->f3->get('PARAMS.id'));
        }
     
        $this->f3->reroute('/');
    }
}
