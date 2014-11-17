<?php

/**
 * sluzby actions.
 *
 * @package    senzadubbio
 * @subpackage sluzby
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sluzbyActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->sluzby = Doctrine::getTable('Sluzby')
            ->createQuery()
            ->execute();

    $this->stranka = Doctrine::getTable('Stranky')->
                FindOneBySlug('sluzby');

        $response = $this->getResponse();
        if ($this->stranka and $response) {
            $response->addMeta('keywords', $this->stranka->getKeywords());
            $response->addMeta('description', $this->stranka->getDescription());
            $response->setTitle(($this->stranka->getTitle() ? $this->stranka->getTitle() . ' | ' : '') . NavigationHelper::getSetting()->getSiteName());
        }
  }
}
