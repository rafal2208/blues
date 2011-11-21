<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version14 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('artist', 'created_at', 'timestamp', '25', array(
             'notnull' => '1',
             ));
        $this->addColumn('artist', 'updated_at', 'timestamp', '25', array(
             'notnull' => '1',
             ));
        $this->addColumn('song', 'created_at', 'timestamp', '25', array(
             'notnull' => '1',
             ));
        $this->addColumn('song', 'updated_at', 'timestamp', '25', array(
             'notnull' => '1',
             ));
    }

    public function down()
    {
        $this->removeColumn('artist', 'created_at');
        $this->removeColumn('artist', 'updated_at');
        $this->removeColumn('song', 'created_at');
        $this->removeColumn('song', 'updated_at');
    }
}