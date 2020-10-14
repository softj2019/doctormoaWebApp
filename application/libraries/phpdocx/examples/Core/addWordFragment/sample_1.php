<?php

require_once '../../../classes/CreateDocx.php';

$docx = new CreateDocx();

$wordFragment = new WordFragment($docx);

$imageOptions = array(
    'src' => '../../img/image.png',
    'scaling' => 50, 
    'float' => 'right',
    'textWrap' => 1,
);
$wordFragment->addImage($imageOptions);

$linkOptions = array(
    'url' => 'http://www.google.es', 
    'color' => '0000FF', 
    'underline' => 'single',
);
$wordFragment->addLink('link to Google', $linkOptions);

$docx->addWordFragment($wordFragment);

$docx->createDocx('example_addWordFragment_1');