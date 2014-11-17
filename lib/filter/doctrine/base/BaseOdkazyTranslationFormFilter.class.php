<?php

/**
 * OdkazyTranslation filter form base class.
 *
 * @package    senzadubbio
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseOdkazyTranslationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title' => new sfWidgetFormFilterInput(),
      'popis' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'title' => new sfValidatorPass(array('required' => false)),
      'popis' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('odkazy_translation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OdkazyTranslation';
  }

  public function getFields()
  {
    return array(
      'id'    => 'Number',
      'title' => 'Text',
      'popis' => 'Text',
      'lang'  => 'Text',
    );
  }
}
