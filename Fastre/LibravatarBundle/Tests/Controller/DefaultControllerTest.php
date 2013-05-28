<?php

namespace Fastre\LibravatarBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Fastre\LibravatarBundle\Services\ServiceLibravatar;

class DefaultControllerTest extends WebTestCase
{
    
    public $sl;
    
    public function __construct() {
        $this->sl = new ServiceLibravatar();
    }
    
    public function testLibravatarUrlIndex() {
        
        
        $url = $this->sl->getUrl('julien@fastre.info');
        
        $urlExpected = 'http://cdn.libravatar.org/avatar/'.md5('julien@fastre.info');
        
        $this->assertSame($url, $urlExpected);
    }
 
}
