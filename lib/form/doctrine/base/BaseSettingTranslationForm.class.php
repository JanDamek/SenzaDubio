<?php

/**
 * SettingTranslation form base class.
 *
 * @method SettingTranslation getObject() Returns the current form's model object
 *
 * @package    senzadubbio
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSettingTranslationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'homepage'    => new sfWidgetFormInputText(),
      'sluzby'      => new sfWidgetFormInputText(),
      'klienti'     => new sfWidgetFormInputText(),
      'kontakt'     => new sfWidgetFormInputText(),
      'animace'     => new sfWidgetFormInputText(),
      'partneri'    => new sfWidgetFormInputText(),
      'kon_form'    => new sfWidgetFormInputText(),
      'zadej_pop'   => new sfWidgetFormInputText(),
      'poptavka'    => new sfWidgetFormInputText(),
      'odeslat'     => new sfWidgetFormInputText(),
      'on_line_pop' => new sfWidgetFormInputText(),
      'mno_dal'     => new sfWidgetFormInputText(),
      'email'       => new sfWidgetFormInputText(),
      'tel'         => new sfWidgetFormInputText(),
      'mobil'       => new sfWidgetFormInputText(),
      'ulice'       => new sfWidgetFormInputText(),
      'mesto'       => new sfWidgetFormInputText(),
      'stat'        => new sfWidgetFormInputText(),
      'lang'        => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'homepage'    => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'sluzby'      => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'klienti'     => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'kontakt'     => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'animace'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'partneri'    => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'kon_form'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'zadej_pop'   => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'poptavka'    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'odeslat'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'on_line_pop' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'mno_dal'     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'email'       => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'tel'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'mobil'       => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'ulice'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'mesto'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'stat'        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'lang'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('lang')), 'empty_value' => $this->getObject()->get('lang'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('setting_translation[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SettingTranslation';
  }

}
