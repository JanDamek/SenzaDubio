<?php

/**
 * klienti actions.
 *
 * @package    senzadubbio
 * @subpackage klienti
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class klientiActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        $this->klienti = Doctrine::getTable('klienti')
                ->createQuery('k')
                ->where('k.publikovat=?', 1)
                ->execute();

        $this->stranka = Doctrine::getTable('Stranky')->
                FindOneBySlug('klienti');

        $response = $this->getResponse();
        if ($this->stranka and $response) {
            $response->addMeta('keywords', $this->stranka->getKeywords());
            $response->addMeta('description', $this->stranka->getDescription());
            $response->setTitle(($this->stranka->getTitle() ? $this->stranka->getTitle() . ' | ' : '') . NavigationHelper::getSetting()->getSiteName());
        }
    }

}
