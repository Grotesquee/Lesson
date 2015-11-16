<?php


$shelf = array(
    'book1' => array (
        'page1' => array(
            'string1' => 'sdfsdfsdfsdf',
            'string2' => 'sdfsdfsdfsdf'
        ),
        'page2' => array(
            'string1' => 'sdfsdfsdfsdf',
            'string2' => 'sdfsdfsdfsdf'
        ),
    ),
    'book2' => array (
        'page1' => array(
            'string1' => '2234',
            'string2' => 'sdsw324fsdf'
        ),
        'page2' => array(
            'string1' => 'sdfsdfsdfsdf',
            'string2' => 'sdfsdfsdfsdf'
        ),
    )
);

echo '<pre>';
var_dump($shelf);
newString();

$shelf2 = array(
    array (
        array(
            'sdfsdfsdfsdf',
            'sdfsdfsdfsdf'
        ),
        array(
            'sdfsdfsdfsdf',
            'sdfsdfsdfsdf'
        ),
    ),
    array (
        array(
            '2234',
            'sdsw324fsdf'
        ),
        array(
            'sdfsdfsdfsdf',
            'sdfsdfsdfsdf'
        ),
    )
);
var_dump ($shelf2);

echo 3 + 5;
echo '</br>';
echo 3 . 5;
echo '</br>';

echo $shelf['book1']['page1']['string1'] . '<br/>';
echo $shelf['book1']['page1']['string2'] . '<br/>';
echo $shelf['book1']['page2']['string1'] . '<br/>';
echo $shelf['book1']['page2']['string2'] . '<br/>';
echo $shelf['book2']['page1']['string1'] . '<br/>';
echo $shelf['book2']['page1']['string2'] . '<br/>';
echo $shelf['book2']['page2']['string1'] . '<br/>';
echo $shelf['book2']['page2']['string2'] . '<br/>';

foreach ($shelf as $bookName => $pages) {
    foreach ($pages as $pageName => $strings) {
        foreach ($strings as $stringName => $string) {
            echo ' Book: '.$bookName.' Page: '.$pageName.' String: '.$stringName.' Text: '.$string.'<br/>';
        }
    }
}


newString();

$array = array(
    'X',
    'O',
    'Oxxx',
    'X'
);
$array[] = 'T';
var_dump ($array);
echo $array[2];


newString();

$chars = array(
    array('O', 'O', 'X'), /* false */
    array('X', 'O', 'X', 'O'), /* true */
    array('X', 'O', 'X', 'X', 'O'),
    array('O', 'O', 'X', 'O')
);
foreach ($chars as $scope) {
    var_dump($scope);
}

newString();


$chars123 = array(
    array (
//        array('O', 'O', 'X'),
//        array('X', 'O', 'X', 'O')
    ),
    array(
//        array('X', 'O', 'X', 'X', 'O'),
//        array('X', 'O', 'X', 'O')
    )
);

foreach ($chars123 as $deep1) {
    var_dump($deep1);
}


















$shelf = array(
    'book1' => array ( /* level1 */
        'page1' => array(
            'string1' => 'sdfsdfsdfsdf',
            'string2' => 'sdfsdfsdfsdf'
        ),
        'page2' => array(
            'string1' => 'sdfsdfsdfsdf',
            'string2' => 'sdfsdfsdfsdf'
        ),
    ),
    'book2' => array ( /* level1 */
        'page1' => array(
            'string1' => '2234',
            'string2' => 'sdsw324fsdf'
        ),
        'page2' => array(
            'string1' => 'sdfsdfsdfsdf',
            'string2' => 'sdfsdfsdfsdf'
        ),
    )
);

var_dump($shelf);

foreach ($shelf as $bookName => $level1) {
    echo 'Book key: ' . $bookName . ' value: ' . $level1 . '</br>';
    foreach ($level1 as $pageName => $level2) {
        echo '&nbsp;&nbsp;Page key: ' . $pageName . ' value: ' . $level2 . '</br>';
        foreach ($level2 as $stringName => $string) {
            echo '&nbsp;&nbsp;&nbsp;&nbsp;String: '.$stringName.' Text: '.$string.'<br/>';
        }
    }
}


$chars = array(
    array( /* level1 */
        array( /* level2 */
            'A', /* level3 */
            'O', /* level3 */
            'Z' /* level3 */
        ),
        array( /* level2 */
            'X', /* level3 */
            'O', /* level3 */
            'X', /* level3 */
            'O' /* level3 */
        )
    ),
    array( /* level1 */
        array( /* level2 */
            'X', /* level3 */
            'O', /* level3 */
            'X', /* level3 */
            'X', /* level3 */
            'O' /* level3 */
        ),
        array( /* level2 */
            'X', /* level3 */
            'O', /* level3 */
            'X', /* level3 */
            'O' /* level3 */
        )
    )
);

echo '<br/> element: ' . $chars[0][0][2] . '</br></br>';

foreach ($chars as $level1) {
    echo 'level1 ' . $level1 . '</br>';
    foreach ($level1 as $level2) {
        echo '&nbsp;&nbsp;level2 ' . $level2 . '</br>';
        foreach ($level2 as $level3) {
            echo '&nbsp;&nbsp;&nbsp;&nbsp;level3 ' . $level3 . '</br>';
        }
    }
}

newString();

$age = 31;
    if (($age < 18 && $age > 9) || $age == 19) { /* как в математике, сначала в скобках */
        echo 'фу, Вы несовершеннолетний';
    } elseif ($age < 35) {
        echo 'Еще не все потеряно...';
    } else {
        echo 'Ура! Вы совершеннолетний!';
}

newString();
newString();

define('COURSE_GROUP', 'Group'); /*Константы == define - Писать с маленькой. сравнивает регистры*/
define('COURSE_INTERACTIVE', 'Interactive');
define('COURSE_INDIVIDUAL', 'Individual');
$course = COURSE_INDIVIDUAL;
switch (strtolower($course)) { /*Делает ТОЛЬКО точные сравнение == */  /*strtolower - преобразует в нижний регистр*/
    case 'group':
        echo 'Вы выбрали группу';
        break;
    case 'interactive':
        echo 'Вы выбрали Интерактив';
        break;
    case 'individual':
        echo 'Вы выбрали Индивидуально';
        break;
    default:
        echo 'Вы ничего не выбрали';
        break;
}


newString();

$number = 5;
echo myFunction($number);

function myFunction($parameter)
{
    return $parameter * 2;
}


newString();

 $headCount = 0;
 $flipCount = 0;
 while ($headCount < 3) {
     $flip = rand(0,1);
     $flipCount ++;
     if ($flip){
         $headCount ++;
         echo "<div class=\"coin\">H</div>";
     }
     else {
         $headCount = 0;
         echo "<div class=\"coin\">1</div>";
     }
 }
 echo "<p>It took {$flipCount} flips!</p>";

function newString()
{
    echo "</br></br></br>";
}

/*Типы передачи информиции для протокола HTTP: GET и POST*/