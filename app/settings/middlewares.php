<?php

$app->middleware('before', function ($c){
    session_start();
});

$app->middleware('before', function ($c){
    header('Content-Type: text/plain');
});

$app->middleware('after', function ($c){
    echo 'Depois';
});