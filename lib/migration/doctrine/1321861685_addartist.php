<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addartist extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('artist', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'autoincrement' => true,
              'length' => 8,
             ),
             'name' => 
             array(
              'type' => 'string',
              'length' => 128,
             ),
             'slug' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             ), array(
             'type' => 'InnoDB',
             'indexes' => 
             array(
              'artist_sluggable' => 
              array(
              'fields' => 
              array(
               0 => 'slug',
              ),
              'type' => 'unique',
              ),
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             'collate' => 'utf8_polish_ci',
             'charset' => 'utf8',
             ));
    }

    public function down()
    {
        $this->dropTable('artist');
    }
}