<?php

$name = 'UmЬerto ';

function say_hello() {
    global $name;

    print 'Hello, ';
    print $name;
}

say_hello();