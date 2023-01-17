<?php

function input(string $order): string{
    echo "$order";
    $result = fgets(STDIN);
    return $result;
}