<?php

$ip = "127.0.0.1";

for($sayi = 1; $sayi < 10000; $sayi++) {
    echo exec("ping $ip");
    echo $sayi . " ";
}
