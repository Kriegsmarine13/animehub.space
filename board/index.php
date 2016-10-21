<?php
header("Content-type: text/html; charset=utf-8");
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'vendor/autoload.php';
require 'AddThread.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim(array(
    'mode' => 'development',
    'debug' => true,

));

$app->get('/hello/:name', function ($name) {
    echo "Hello, <b>ЩЕНОК</b>-$name";
});

$app->get('/board/', function () {
    include 'board-markup/board.php';
});
$app->get('/board/add-thread', function () {
    include 'board-markup/add-thread.php';
});

$app->get('/board/:id', function ($id) {
$threadExists = isExist($id);
if (!empty($threadExists)) {
    include 'board-markup/thread.php';
} else {
    echo "<h1>Тред не найден</h1>";
}
});

$app->post('/post/', function () use ($app) {
    $thread = new Thread();
    $thread->add($_POST);
    $app->redirect('/board/');
});

$app->post('/add-comment/:id', function ($id) use ($app) {
    $comment1 = new Comment();
    $comment1->thread_id = $id;
    $comment1->add($_POST);
    $app->redirect("/board/$id");
});

$app->run();

?>
