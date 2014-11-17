<?php

/**
 * GalleryImage form.
 *
 * @package    caitalia
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class GalleryImageForm extends BaseGalleryImageForm
{
  public function configure()
  {
    unset($this['gallery_id'], $this['ord']);

//    $this->embedI18n(array('cs', 'en', 'it', 'de'));

    $this->setWidget('path', new sfWidgetFormInputMediaBrowser());
    $this->setWidget('path2', new sfWidgetFormInputMediaBrowser());

    $this->widgetSchema->setLabels(array(
      'is_active' => 'Aktivní',
      'path'      => 'Cesta k náhledu',
      'path2'     => 'Cesta k obrázku',
      'alt'       => 'Alternativní text',
      'title'     => 'Titulek',
    ));
  }
}
