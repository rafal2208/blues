<?php

/**
 * tools actions.
 *
 * @package    blues
 * @subpackage tools
 * @author     Włodzimierz Gajda
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 * @todo       Lorem ipsum... 
 */
class toolsActions extends sfActions
{
  /**
   * Executes autoident action
   *
   * Sets ident's columns using html columns
   * 
   * @see Clip::presave(), Clip::autoindent() 
   * @param sfRequest $request A request object
   */
  public function executeAutoident(sfWebRequest $request)
  {
    $clips = Doctrine_Core::getTable('Clip')
      ->createQuery('a')
      ->execute();

    foreach ($clips as $clip)
    {
      //$clip->autoident();
      $clip->setSlug('');
      $clip->save();
    }


    $songs = Doctrine_Core::getTable('Song')
      ->createQuery('a')
      ->execute();

    foreach ($songs as $song)
    {
      $song->setSlug('');
      $song->save();
    }

    $artist = Doctrine_Core::getTable('Artist')
      ->createQuery('a')
      ->execute();

    foreach ($artist as $artist)
    {
      $artist->setSlug('');
      $artist->save();
    }


    $this->redirect('clip/index');
  }
  
  
}
