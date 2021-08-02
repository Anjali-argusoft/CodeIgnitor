<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$hook['pre_controller'][] = array(
    'class'    => 'About',
    'function' => 'displaymessage',
    'filename' => 'About.php',
    'filepath' => 'hooks',
    'params'   => array('beer', 'wine', 'snacks')
);

$hook['pre_controller'][] = array(
    'class'    => 'About',
    'function' => 'displaymessage',
    'filename' => 'About.php',
    'filepath' => 'hooks',
    'params'   => array('coke', 'chips', 'icecream')
);

$hook['post_controller'] = array(
    'class'    => 'About',
    'function' => 'displaymessage1',
    'filename' => 'About.php',
    'filepath' => 'hooks',
);

$hook['display_override'][] = array(
    'class' => 'Minifyhtml',
    'function' => 'output',
    'filename' => 'Minifyhtml.php',
    'filepath' => 'hooks',
    'params' => array()
);