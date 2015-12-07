<?php
$a = array(
    'first' => array(
        'second' => array('z','x','c'),
        'QBN',
        'ASD'
    ),
    'bbbbbbb' => 'b',
    'ccccccc' => 'c'
);

foreach ($a as $tratata) {
    if (is_array($tratata)) {
        foreach ($tratata as $kota) {
            if (is_array($kota)) {
                var_dump($kota);
            }
        }
    }
}

/*К строкам можно обращаться как к определенному массиву*/



$string = 'welcome';
echo $string[2] . $string[4] . $string[6];
echo '</br>';

$content = file(__DIR__ . '/logs/fatal_log');

foreach ($content as $horosho) {
    if (trim($horosho) == 'good') {
        echo $horosho;
    }
//    var_dump($horosho);
}
















//foreach ($a as $value) {
//    var_dump($value);
//}

//var_dump($a);
//echo $a['first']['second'][1];