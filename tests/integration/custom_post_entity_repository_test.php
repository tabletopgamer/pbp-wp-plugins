<?php
use PbP_WP\Implementations\Custom_Post_Entity_Repository;
use PbP_WP\Implementations\Entity_Adapter_Factory;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-01-06 at 19:55:26.
 */
class Custom_Post_Entity_Repository_Tests extends WP_UnitTestCase {

    /**
     * @var Entity
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    public function setUp() {
        parent::setUp();

        $entity_adapter_factory = new Entity_Adapter_Factory();
		$this->object = new Custom_Post_Entity_Repository($entity_adapter_factory);
    }

    /**
     * @covers WpPostEntityRepository::getById
     * @todo   Implement testGetContents().
     */
    public function testgetById_WithExistingPostId_ReturnsThatPost() {
        $post_id = $this->factory->post->create();

        $result = $this->object->getById( $post_id );
   
        $this->assertEquals( $post_id, $result->get_id() );
    }
    
    
    /**
     * @covers WpPostEntityRepository::getById
     * @todo   Implement testGetContents().
     */
    public function testgetById_WithInExistingPostId_ReturnsNull() {
        $post_id = 1000;

        $result = $this->object->getById( $post_id );
   
        $this->assertEquals( NULL, $result );
    }
    
    /**
     * @covers WpPostEntityRepository::getByIdss
     */
    public function testgetByIds_WithOneEntityId_OfExistingPost_ReturnsListWithOnePost() {
        $post_id = $this->factory->post->create();
         
        $results = $this->object->getByIds( [$post_id] );
        
        $this->assertEquals( 1, count( $results ) );
    }
    
    /**
     * @covers WpPostEntityRepository::getByIdss
     */
    public function testgetByIds_WithOneEntityId_OfInexistingPost_ReturnsEmptyList() {
        $post_id = 1000;
         
        $results = $this->object->getByIds( [$post_id] );
        
        $this->assertEquals( 0, count( $results ) );
    }
    
    
    /**
     * @covers WpPostEntityRepository::getByIdss
     */
    public function testgetByIds_WithThreeEntityIds_OfExistingPosts_ReturnsEmptyList() {
        $post_id1 = 1001;
        $post_id2 = 1002;
         
        $results = $this->object->getByIds( [$post_id1, $post_id2] );
        
        $this->assertEquals( 0, count( $results ) );
    }
}