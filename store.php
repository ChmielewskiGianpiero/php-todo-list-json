<?php

$todo_text = $_POST['todo'];

$todo = [
    'text' => $todo_text,
    'done' => false
];

$todo_json = file_get_contents('./todos.json');
$todos = json_decode($todo_json, true);

$todos[] = $todo;

$response = [
    'success' => true,
    'results' => $todos
];

$todo_json = json_encode($todos);

file_put_contents('./todos.json', $todo_json);

header('Content-Type: application/json');
echo json_encode($response);