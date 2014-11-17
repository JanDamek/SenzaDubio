<?php

/**
 * SettingTranslation filter form base class.
 *
 * @package    senzadubbio
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSettingTranslationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'homepage'    => new sfWidgetFormFilterInput(),
      'sluzby'      => new sfWidgetFormFilterInput(),
      'klienti'     => new sfWidgetFormFilterInput(),
      'kontakt'     => new sfWidgetFormFilterInput(),
      'animace'     => new sfWidgetFormFilterInput(),
      'partneri'    => new sfWidgetFormFilterInput(),
      'kon_form'    => new sfWidgetFormFilterInput(),
      'zadej_pop'   => new sfWidgetFormFilterInput(),
      'poptavka'    => new sfWidgetFormFilterInput(),
      'odeslat'     => new sfWidgetFormFilterInput(),
      'on_line_pop' => new sfWidgetFormFilterInput(),
      'mno_dal'     => new sfWidgetFormFilterInput(),
      'email'       => new sfWidgetFormFilterInput(),
      'tel'         => new sfWidgetFormFilterInput(),
      'mobil'       => new sfWidgetFormFilterInput(),
      'ulice'       => new sfWidgetFormFilterInput(),
      'mesto'       => new sfWidgetFormFilterInput(),
      'stat'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'homepage'    => new sfValidatorPass(array('required' => false)),
      'sluzby'      => new sfValidatorPass(array('required' => false)),
      'klienti'     => new sfValidatorPass(array('required' => false)),
      'kontakt'     => new sfValidatorPass(array('required' => false)),
      'animace'     => new sfValidatorPass(array('required' => false)),
      'partneri'    => new sfValidatorPass(array('required' => false)),
      'kon_form'    => new sfValidatorPass(array('required' => false)),
      'zadej_pop'   => new sfValidatorPass(array('required' => false)),
      'poptavka'    => new sfValidatorPass(array('required' => false)),
      'odeslat'     => new sfValidatorPass(array('required' => false)),
      'on_line_pop' => new sfValidatorPass(array('required' => false)),
      'mno_dal'     => new sfValidatorPass(array('required' => false)),
      'email'       => new sfValidatorPass(array('required' => false)),
      'tel'         => new sfValidatorPass(array('required' => false)),
      'mobil'       => new sfValidatorPass(array('required' => false)),
      'ulice'       => new sfValidatorPass(array('required' => false)),
      'mesto'       => new sfValidatorPass(array('required' => false)),
      'stat'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('setting_translation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SettingTranslation';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'homepage'    => 'Text',
      'sluzby'      => 'Text',
      'klienti'     => 'Text',
      'kontakt'     => 'Text',
      'animace'     => 'Text',
      'partneri'    => 'Text',
      'kon_form'    => 'Text',
      'zadej_pop'   => 'Text',
      'poptavka'    => 'Text',
      'odeslat'     => 'Text',
      'on_line_pop' => 'Text',
      'mno_dal'     => 'Text',
      'email'       => 'Text',
      'tel'         => 'Text',
      'mobil'       => 'Text',
      'ulice'       => 'Text',
      'mesto'       => 'Text',
      'stat'        => 'Text',
      'lang'        => 'Text',
    );
  }
}
