<?php

/**
 *Model and CRUD actions for a user
 */
class Blogger extends DB\SQL\Mapper {
 
 
    /**
     *Construtor for Blogger
     */
    public function __construct(DB\SQL $db) {
        parent::__construct($db,'bloggers');
    }
 
    /**
     *Retrieve all users
     */
    public function all() {
        $this->load();
        return $this->query;
    }
 
    /**
     *Add a user
     */
    public function add() {
        $this->copyFrom('POST');
        $this->save();
    }
 
    
    /**
     *Get a user by id
     */
    public function getById($id) {
        $this->load(array('id=?',$id));
        $this->copyTo('POST');
    }
 
    /**
     *Edit a user
     */
    public function edit($id) {
        $this->load(array('id=?',$id));
        $this->copyFrom('POST');
        $this->update();
    }
 
    /**
     *Delete a user
     */
    public function delete($id) {
        $this->load(array('id=?',$id));
        $this->erase();
    }
}