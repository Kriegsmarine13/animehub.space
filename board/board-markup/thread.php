<?php
$noPosts = false;
class ThreadData {
    public $thread_id;
    public $title;
    public $name;
    public $post;
    
    function selectThread($id) {
	$dbh = new PDO('mysql:host=localhost;dbname=nedoboard', 'root', '');
	$sql = "SELECT * FROM Thread where id=$id";
        $q = $dbh->prepare($sql);
	$q->execute();
	$done= $q->fetch();
	
	$this->thread_id = $done[0];
	$this->title = $done[1];
	$this->name = $done[2];
	$this->post = $done[3];
	
    }
    

}

class CommentData {
    public $thread_id;
    public $comment_id; // Надо запилить один счетчик для постов и комментов
    public $comment;
    
    function selectComment($id) {
	$dbh = new PDO('mysql:host=localhost;dbname=nedoboard', 'root', '');
	$sql_comment = "SELECT * FROM Comment where thread_id=$id";
	$q_comment = $dbh->prepare($sql_comment);
	$q_comment->execute();
	$done_comment= $q_comment->fetchAll();
	
	if (isset($done_comment[0]) && isset($done_comment[1]) && isset($done_comment[2])) {
	
	$this->comment_id = $done_comment[0];
	$this->thread_id = $done_comment[1];
	$this->comment = $done_comment[2];
	} else $noPosts = true;
	return $done_comment;
    }
    

}

    function countRows($table,$thread_id) {
	$dbh = new PDO('mysql:host=localhost;dbname=nedoboard', 'root', '');
	$sql = "SELECT COUNT(*) FROM $table where thread_id=$thread_id";
        $q = $dbh->prepare($sql);
	$q->execute();
	$done= $q->fetchAll();
	return $done[0][0];
	}
function __isset($obj){
    return isset($obj->comment);
} 


$thread = new ThreadData();		    
$thread->selectThread($id);

$comment = new CommentData();
$comments = countRows("Comment",$id);



    $comment_arr = $comment->selectComment($id);
    
    $comments = countRows("Comment",$id);
    




?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Не работает скрипт // программирование</title>
    <link rel="stylesheet" href="../../board-markup/board-style.css">
</head>
<body>

<div class="l-header">
    <div class="wrap">
        <h1><?php echo $thread->title; ?></h1>
    </div>
    <div class="overlay"></div>
</div>

<div class="page-thread">

    <div class="b-threads-list">
        <div class="b-thread">        
            <?php require __DIR__.'/thread-body.php' ?>

            <form action="/add-comment/<?php echo $id; ?>" class="b-in-thread-form b-big-form" method="post">
                <div class="row row-header">
                    <h2>Вам слово</h2>
                    <p class="mb-0">Хотите добавить свой комментарий? 
                    Пожалуйста, воспользуйтесь этой формой.</p>
                </div>

                <div class="row">
                    <div class="row-comment">Ведите себя воспитанно. Невоспитанных ловят
                    наши коты-модераторы.</div>
                    <label class="row-label" for="add-text">Комментарий:</label>
                    <textarea id="add-text" class="textarea-wide textarea-medium" name="comment">Код надо писать не как 
попало, а аккуратно и красиво. Почему? Потому, что на неакуратно написанный 
код не хочется даже смотреть.

Если тебе лень выравнивать код руками, закачай его на http://beta.phpformatter.com/ и
нажми «format». Робот исправит выравнивание и отступы в мгновение ока. 

Самый распространенный стандарт оформления — это Zend Coding Guides 
(http://framework.zend.com/manual/1.12/en/coding-standard.html — на англ. яз.),
вот их суть:

- переменные и функции пишутся с маленькой буквы, _ не используется, 
используется camelCase, пример: $x, $numberOfPeople, printResults()
- Название функции начинается с глагола, в стиле «сделайЧтоТо»
- не знаешь английский? Не беда, в 21 веке есть решение этой проблемы. Не пиши транслитом,
открой лучше Гугл Транслейт или slovari.yandex.ru и найди название для переменной там
- в именах классов используется CamelCase, первая буква большая, «_» может использоваться
- мы предпочитаем подстановку переменных вместо конкатенации строк: "I am $age years old" —
хорошо, 'I am ' . $age . ' years old' — плохо 
- мы используем для отступов 4 пробела (можно настроить редактор, чтобы при нажатии Tab
он вставлял 4 пробела)
- скобки в for и if/else ставятся так:</textarea>
                </div>

                <div class="row">            
                    <label class="row-label" for="add-name">Ваше имя:</label>
                    <input type="text" id="add-name" class="input-wide" name="name">
                    <div class="row-hint">не обязательно</div>
               </div>

               <div class="row row-buttons">
                    <button class="button-action button-main">Добавить комментарий</button>
                    <a href="." class="button-left back-link">← вернуться на главную</a>
               </div>
           </form>            
        </div>
    </div>
</div>

</body>
</html>