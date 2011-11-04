<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version10 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('clip', 'width', 'integer', '8', array(
             'default' => '1234',
             ));
        $this->addColumn('clip', 'height', 'integer', '8', array(
             'default' => '7890',
             ));
    }

    public function down()
    {
        $this->removeColumn('clip', 'width');
        $this->removeColumn('clip', 'height');
    }
}