<?php 

namespace App;

class Comment {

    protected $comments = [] ;

    public function addComment(Comment $comment){
        $this->commentes[] = $comment;
    }

    public function countComments(){
        return count($this->comments);
    }

    public function getComments(){
        return $this->comments;
    }



    

}