<?php

/**
 * Odkazy form.
 *
 * @package    senzadubbio
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class OdkazyForm extends BaseOdkazyForm
{
  public function configure()
  {
            $this->embedI18n(array('cs', 'en', 'it', 'de'));      
  }
}
