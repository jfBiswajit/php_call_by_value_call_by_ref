<?php

//call by reference
$foo = ['msg' => 'message not seen yet'];

function show(&$foo) {
  $foo['msg'] = 'messge has been seen';
  echo $foo['msg'] . PHP_EOL;
}

show($foo);
echo $foo['msg'] . PHP_EOL;

// call by value
$bar = 10;

function change($bar) {
  $bar += 10;
  echo $bar . PHP_EOL;
}

change($bar);
echo $bar;
