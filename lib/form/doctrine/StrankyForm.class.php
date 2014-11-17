<?php

/**
 * Stranky form.
 *
 * @package    senzadubbio
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class StrankyForm extends BaseStrankyForm {

    public function configure() {
        $this->embedI18n(array('cs', 'en', 'it', 'de'));
    }

}
