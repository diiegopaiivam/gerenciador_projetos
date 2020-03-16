<?php 

$container['events']->attach('created.users', new Config\Events\UsersCreated);