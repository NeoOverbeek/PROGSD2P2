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
                        echo ucfirst($dagen), '<br>';
                        break;
                case 'di';
                        echo ucfirst($dagen), '<br>';
                        break;
                case 'wo';
                        echo ucfirst($dagen), '<br>';
                        break;
                case 'do';
                        echo ucfirst($dagen), '<br>';
                        break;
                case 'vr';
                        echo ucfirst($dagen), '<br>';
                        break;
                case 'za';
                        $dagen = strtoupper($dagen);
                        echo $dagen, '<br>';
                        break;
                case 'zo';
                        $dagen = strtoupper($dagen);
                        echo $dagen, '<br>';
                        break;
        }
}

foreach ($omgekeerd as $key => $anders) {
        switch (strtolower($key)){
                case 'ma';
                        echo ucfirst($anders), '<br>';
                        break;
                case 'di';
                        echo ucfirst($anders), '<br>';
                        break;
                case 'wo';
                        echo ucfirst($anders), '<br>';
                        break;
                case 'do';
                        echo ucfirst($anders), '<br>';
                        break;
                case 'vr';
                        echo ucfirst($anders), '<br>';
                        break;
                case 'za';
                        $anders = strtoupper($anders);
                        echo $anders, '<br>';
                        break;
                case 'zo';
                        $anders = strtoupper($anders);
                        echo $anders, '<br>';
                        break;
        }
}
?>