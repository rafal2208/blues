<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version19 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('song', 'ble', 'string', '4096', array(
             ));
    }

    public function down()
    {
        $this->removeColumn('song', 'ble');
    }
}