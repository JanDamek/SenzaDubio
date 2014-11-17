<?php

/**
 * StrankyTranslation form base class.
 *
 * @method StrankyTranslation getObject() Returns the current form's model object
 *
 * @package    senzadubbio
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseStrankyTranslationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'title'         => new sfWidgetFormInputText(),
      'str_title'     => new sfWidgetFormInputText(),
      'perex'         => new sfWidgetFormTextarea(),
      'prezentace_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gallery'), 'add_empty' => true)),
      'popis'         => new sfWidgetFormTextarea(),
      'keywords'      => new sfWidgetFormInputText(),
      'description'   => new sfWidgetFormInputText(),
      'lang'          => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'str_title'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'perex'         => new sfValidatorString(array('required' => false)),
      'prezentace_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Gallery'), 'required' => false)),
      'popis'         => new sfValidatorString(array('required' => false)),
      'keywords'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'lang'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('lang')), 'empty_value' => $this->getObject()->get('lang'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('stranky_translation[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'StrankyTranslation';
  }

}
