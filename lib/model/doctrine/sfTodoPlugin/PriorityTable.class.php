<?php

/**
 * PriorityTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PriorityTable extends PluginPriorityTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object PriorityTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Priority');
    }
}