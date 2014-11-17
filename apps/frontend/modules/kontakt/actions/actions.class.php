<?php

/**
 * kontakt actions.
 *
 * @package    senzadubbio
 * @subpackage kontakt
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class kontaktActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {

        $sluzba = Doctrine::getTable('Sluzby')
                ->findOneById($request->getParameter('slug', ''));

        if ($sluzba and $sluzba->count() > 0) {
            $this->predmet = $sluzba->getTitle();
        }else
            $this->predmet = NavigationHelper::getSetting()->getPoptavka();

        $this->stranka = Doctrine::getTable('Stranky')->
                FindOneBySlug('kontakt');

        $response = $this->getResponse();
        if ($this->stranka and $response) {
            $response->addMeta('keywords', $this->stranka->getKeywords());
            $response->addMeta('description', $this->stranka->getDescription());
            $response->setTitle(($this->stranka->getTitle() ? $this->stranka->getTitle() . ' | ' : '') . NavigationHelper::getSetting()->getSiteName());
        }

        if (!empty($_POST['email']) and $_POST['email'] != 'Zadejte Váš e-mail') {
            $message = $this->getMailer()->compose(
                    $_POST['email'], NavigationHelper::getSetting()->getEmail(), 'Dotaz na sluzbu', <<<EOF
Na strankach www.senzadubio.cz byl vyplnen dotaz 
e-mail : {$_POST['email']}
predmet: {$_POST['predmet']}
zpráva:
{$_POST['msg_body']}

Prosim o provedeni nutnych kroku pro odpovezeni dotazu.

EOF
            );
            $this->getMailer()->send($message);
            $this->odpoved = $_POST;
        }
    }

}
