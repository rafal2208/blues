<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addclip extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('clip', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'autoincrement' => true,
              'length' => 8,
             ),
             'html' => 
             array(
              'type' => 'string',
              'length' => 4096,
             ),
             'ident' => 
             array(
              'type' => 'string',
              'length' => 128,
             ),
             'width' => 
             array(
              'type' => 'integer',
              'default' => 420,
              'length' => 8,
             ),
             'height' => 
             array(
              'type' => 'integer',
              'default' => 315,
              'length' => 8,
             ),
             'song_id' => 
             array(
              'type' => 'integer',
              'length' => 8,
             ),
             'slug' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'created_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             'updated_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             ), array(
             'type' => 'InnoDB',
             'indexes' => 
             array(
              'clip_sluggable' => 
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
        $this->dropTable('clip');
    }
}