<?php

class User 
{
    public $name;
    public $username;
    public $followerCount;
}


$olaotan = new User ();

$olaotan ->name='Olaotan Abarowei';
$olaotan ->username='jaysville_';
$olaotan ->followerCount=3000;
print_r($olaotan);