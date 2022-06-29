<?php

$directory = __DIR__ . '/files/src/';
$directory_res = __DIR__ . '/files/res/';
$files = scandir($directory);

function layerReplace($file, $directory, $directory_res)
{
    $str = file_get_contents($directory . $file);
    $res = str_replace('FK', 'V_Saeg0_15', $str);
    file_put_contents($directory_res . $file, $res);

}

foreach ($files as $file) {
    if ($file == '.' || $file == '..') {
        continue;
    }
    layerReplace($file, $directory, $directory_res);
}
