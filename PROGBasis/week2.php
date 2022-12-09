<?php

$weekdagen = array(
        'ma' => 'maandag',
        'di' => 'dinsdag',
        'wo' => 'woensdag',
        'do' => 'donderdag',
        'vr' => 'vrijdag',
        'za' => 'zaterdag',
        'zo' => 'zondag'
);

$omgekeerd = array();

$omgekeerd = array_reverse($weekdagen);

foreach ($weekdagen as $key => $dagen) {
        switch (strtolower($key)){
                case 'ma';
                        echo $key, '<br>';
                        break;
                case 'di';
                        echo $key, '<br>';
                        break;
                case 'wo';
                        echo $key, '<br>';
                        break;
                case 'do';
                        echo $key, '<br>';
                        break;
                case 'vr';
                        echo $key, '<br>';
                        break;
                case 'za';
                        $key = strtoupper($key);
                        echo $key, '<br>';
                        break;
                case 'zo';
                        $key = strtoupper($key);
                        echo $key, '<br>';
                        break;
        }
}

foreach ($omgekeerd as $key => $anders) {
        switch (strtolower($key)){
                case 'ma';
                        echo $key, '<br>';
                        break;
                case 'di';
                        echo $key, '<br>';
                        break;
                case 'wo';
                        echo $key, '<br>';
                        break;
                case 'do';
                        echo $key, '<br>';
                        break;
                case 'vr';
                        echo $key, '<br>';
                        break;
                case 'za';
                        $key = strtoupper($key);
                        echo $key, '<br>';
                        break;
                case 'zo';
                        $key = strtoupper($key);
                        echo $key, '<br>';
                        break;
        }
}
?>