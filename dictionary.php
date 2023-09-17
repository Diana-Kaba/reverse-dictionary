<?php
$dict = ["code" => "код", "programming" => "програмування", "cat" => ["кіт", "кошка"], "dog" => ["собака", "пес"], "house" => ["будинок", "житло"], "apartment" => "житло", "building" => "будинок", "kitty" => "кошка"];
$translate = [];
// $reverse = array_flip($arr);

foreach ($dict as $en => $ua) {
    if (!is_array($ua)) {
        $translate[$ua] = $en;
    } else {
        foreach ($ua as $uaArr) {
            $translate[$uaArr][] = $en;
        }
    }
}

foreach ($translate as $key => $value) {
    if (!is_array($value)) {
        echo "$key:\n  $value\n";
    } else {
        echo "$key:\n";
        foreach ($value as $v) {
            echo "  $v\n";
        }
    }
}
