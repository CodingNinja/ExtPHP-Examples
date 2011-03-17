<?php

/*
 * ExtPHP - ExtJS PHP Wrapper
 * 
 * (c) David Mann <ninja@codingninja.com.au>
 *
 * This file is part of the ExtPHP library.
 * For the full license. Please see the license file bundled
 * with the source code
 */
namespace PHPJs;

include '../../src/PHPJs/Loader.php';
use \ExtPHP\Component;
use \PHPJs\Manager\Storage;
use \ExtPHP\Manager\Generic as GenericManager;
\PHPJs\Loader::register();

function makePanel($config = array(), $class = 'Ext.Panel', $renderType = Component::OBJ) {
    return new Component($class, array_merge(array('layout' => 'border'), $config), $renderType);
}

$manager = GenericManager::getDashboard();

class sizeFilter {
    function filter($config, $component) {
        if(isset($config['size'])) {
            list($width, $height) = explode('x', $config['size']);
            $config = array_merge(array('width' => $width.'px', 'height' => $height.'px'), $config);
            $component->addOptions(array('width', 'height'));
            $component->removeOption('size');
            unset($config['size']);
        }
        return $config;
    }
}

Component::$optionFilters[] = new sizeFilter();

$component = $manager->componentFromClassName('Ext.Window', array('title' => 'My Box - Rawr!', 'items' => array(makepanel()), 'size' => '250x400'));