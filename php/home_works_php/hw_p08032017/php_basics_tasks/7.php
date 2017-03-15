<?php
$age = 1;

if ($age >= 18 && $age < 58) {
    echo "Вам еще работать и работать";
} elseif ($age >= 58) {
    echo "Вам пора на пенсию";
} elseif ($age < 18 && $age > 0) {
    echo "Вам еще рано работать";
}
