<?php

/**
 * artist actions.
 *
 * @package    blues
 * @subpackage artist
 * @author     Włodzimierz Gajda
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 * @todo       Lorem ipsum...
 */
class artistActions extends sfActions
{

  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */
  public function executeIndex(sfWebRequest $request)
  {
/*
    $this->artists = Doctrine_Core::getTable('Artist')
      ->createQuery('a')
      ->execute();
*/

//    throw new sfError404Exception('Sprawdzamy strone błędu 404!');

    $this->pager = new sfDoctrinePager('Artist', 10);
    $this->pager->setQuery(Doctrine_Core::getTable('Artist')->createQuery('a'));
    $this->pager->setPage($request->getParameter('page', 1));
    $this->pager->init();

  }

  /**
   * Executes show action
   *
   * @param sfRequest $request A request object
   */
  public function executeShow(sfWebRequest $request)
  {
    $this->artist = Doctrine_Core::getTable('Artist')->findOneBySlug($request->getParameter('slug'));
    $this->forward404Unless($this->artist);
  }

}
