<?php
class Thread {
    public $title;
    public $name = 'Anonymous';
    public $post;
    public $seconds;
    private $user = 'root';
    private $pass = 'ololo666';

    function add($msg) {
        $dbh = new PDO('mysql:host=localhost;dbname=nedoboard', $this->user, $this->pass);
        $this->title = $dbh->quote($msg['title']);
        if ($msg['name'] != "") {
            $this->name = $msg['name'];
        }
        $this->post = $dbh->quote($msg['post']);
        $this->seconds = time();
        $dbh->query("INSERT INTO Thread (title, name, post, seconds) VALUES ($this->title, '$this->name', $this->post, $this->seconds)");
    }

}

function isExist($id) {
      $dbh = new PDO('mysql:host=localhost;dbname=nedoboard', 'root', '');
      $sql = "SELECT * FROM Thread where id=$id";
      $q = $dbh->prepare($sql);
      $q->execute();
      $done = $q->fetchAll();
      return $done;

    }

class Comment {
    public $thread_id;
    public $name = "Anonymous";
    public $comment;
    private $user = 'root';
    private $pass = 'ololo666';

    function add($msg) {
        $dbh = new PDO('mysql:host=localhost;dbname=nedoboard', $this->user, $this->pass);
        if ($msg['name'] != "") {
            $this->name = $msg['name'];
        }
        $this->comment = $dbh->quote($msg['comment']);
        $dbh->query("INSERT INTO Comment (thread_id, comment) VALUES ($this->thread_id, $this->comment)");
    }

}
