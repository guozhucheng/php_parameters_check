<?php


namespace test\cache;

use cache\SimpleCache;

require_once('../../cache/SimpleCache.php');
require_once('../../cache/IDataCache.php');
require_once('../../cache/DataCacheFactory.php');

class SimpleCacheTest extends \PHPUnit_Framework_TestCase {

    public function testLoadCache() {
        $simpleCache      = new SimpleCache();
        $ref_SimpleCache  = new \ReflectionClass(get_class($simpleCache));

        $method_loadCache = $ref_SimpleCache->getMethod('loadCache');
        $method_loadCache->setAccessible(true);

        $resut = $method_loadCache->invoke($simpleCache);

        var_export($resut);


    }
}
 