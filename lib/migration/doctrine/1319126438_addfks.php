<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addfks extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('clip', 'clip_song_id_song_id', array(
             'name' => 'clip_song_id_song_id',
             'local' => 'song_id',
             'foreign' => 'id',
             'foreignTable' => 'song',
             ));
    }

    public function down()
    {
        $this->dropForeignKey('clip', 'clip_song_id_song_id');
    }
}