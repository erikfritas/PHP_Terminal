<?php

while (true){
    echo "\n";

    $pwd = str_replace('/', "\033[34m/\033[32m", shell_exec('pwd'));

    echo "\033[32m$pwd\033[m";
    $input = readline("$ ");
    echo shell_exec($input);
    echo "\n";

}
