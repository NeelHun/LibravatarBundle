<?php

namespace Fastre\LibravatarBundle\Services;

use Fastre\LibravatarBundle\Services\AbstractServiceLibravatar;

/**
 * 
 *
 * @author julien <arobase> fastre <point> info
 */
class ServiceLibravatar extends AbstractServiceLibravatar {
    
    public function getUrl($identifier, $options = array()) {
        return parent::getUrl($identifier, $options);
    }
    
}


