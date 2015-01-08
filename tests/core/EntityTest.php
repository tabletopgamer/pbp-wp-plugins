<?php

use pbpCore\implementations\WpPostEntityRepository;
/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-01-06 at 19:55:26.
 */
class EntityTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Entity
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new WpPostEntityRepository();
    }

    /**
     * @covers WpPostEntityRepository::getEntityById
     * @todo   Implement testGetContents().
     */
    public function testGetEntityById() {
        
        $result = $this->object->getEntityById(15);
        
        $this->assertEquals("15", $result->getId());
        $this->assertEquals("Chapter 1, Scene 3", $result->getTitle());
    }
    
    /**
     * @covers WpPostEntityRepository::getEntitiesByIds
     * @todo   Implement testGetContents().
     */
    public function testGetEntitiesById() {
        
        $results = $this->object->getEntitiesById([14]);
        
        $this->assertEquals(1, count($results));
    }
}