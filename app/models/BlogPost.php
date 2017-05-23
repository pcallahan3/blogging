<?php

/**
 *Model and CRUD actions for a blog post
 */
class BlogPost extends DB\SQL\Mapper {
 
    /**
     *Construtor for BlogPost
     */
    public function __construct(DB\SQL $db) {
        parent::__construct($db,'posts');
    }
 
    /**
     *Retrieve all post
     */
    public function all() {
        $this->load();
        return $this->query;
    }
 
    /**
     *Add a post
     */
    public function add() {
        $this->copyFrom('POST');
        $this->save();
    }
 
    /**
     *Get a post by id
     */
    public function getById($id) {
        $this->load(array('id=?',$id));
        $this->copyTo('POST');
    }
 
    /**
     *Edit a post
     */
    public function edit($id) {
        $this->load(array('id=?',$id));
        $this->copyFrom('POST');
        $this->update();
    }
 
    /**
     *Delete a post
     */
    public function delete($id) {
        $this->load(array('id=?',$id));
        $this->erase();
    }
}