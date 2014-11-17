<?php

/**
 * homepage actions.
 *
 * @package    senzadubbio
 * @subpackage homepage
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homepageActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {

        switch ($request->getParameter('page')) {
            case 'homepage':
                $this->stranka = Doctrine::getTable('Stranky')->
                        FindOneBySlug('homepage');

                switch ($request->getParameter('sf_culture')) {
                    case 'cs':
                        $gal = $this->stranka->getGalleryCs_id();    
                        break;
                    case 'en':
                        $gal = $this->stranka->getGalleryEn_id();    
                        break;
                    case 'de':
                        $gal = $this->stranka->getGalleryDe_id();    
                        break;
                    case 'it':
                        $gal = $this->stranka->getGalleryIt_id();    
                        break;

                }

                $this->gal = Doctrine::getTable('Gallery')
                        ->createQuery('Gallery g')
                        ->where('g.id = ' . $gal)
                        ->execute();
                if ($this->gal) {
                    $this->gal_img = Doctrine::getTable('GalleryImage')
                            ->createQuery('GalleryImage i')
                            ->where('i.gallery_id = ' . $this->gal[0]->getId())
                            ->execute();
                } else {
                    $this->gal_img = null;
                }

                break;
            case 'onas':
                $this->stranka = Doctrine::getTable('Stranky')->
                        FindOneBySlug('onas');
                break;
            case 'odkazy':
                $this->stranka = Doctrine::getTable('Stranky')->
                        FindOneBySlug('odkazy');
                break;
        }
        $response = $this->getResponse();
        if ($this->stranka and $response) {
            $response->addMeta('keywords', $this->stranka->getKeywords());
            $response->addMeta('description', $this->stranka->getDescription());
            $response->setTitle(($this->stranka->getTitle() ? $this->stranka->getTitle() . ' | ' : '') . NavigationHelper::getSetting()->getSiteName());
        }
        $response = $this->getResponse();
        if ($this->stranka and $response)
        {
            $response->addMeta('keywords', $this->stranka->getKeywords());
            $response->addMeta('description', $this->stranka->getDescription());
            $response->setTitle(($this->stranka->getTitle()?$this->stranka->getTitle().' | ':'') . NavigationHelper::getSetting()->getSiteName());
        }
    }

}
