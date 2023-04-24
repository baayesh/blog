<?php

require 'models/blog.php';
class blog
{
    public function __construct(){
        $this->blogmodel = new blogmodel();
    }

    public function read(){
        $blog = this->blogmodel->read();
        var_dump($blog);
        die;
    }
}