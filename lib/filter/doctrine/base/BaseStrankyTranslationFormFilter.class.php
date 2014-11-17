<?php

/**
 * StrankyTranslation filter form base class.
 *
 * @package    senzadubbio
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseStrankyTranslationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'         => new sfWidgetFormFilterInput(),
      'str_title'     => new sfWidgetFormFilterInput(),
      'perex'         => new sfWidgetFormFilterInput(),
      'prezentace_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gallery'), 'add_empty' => true)),
      'popis'         => new sfWidgetFormFilterInput(),
      'keywords'      => new sfWidgetFormFilterInput(),
      'description'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'title'         => new sfValidatorPass(array('required' => false)),
      'str_title'     => new sfValidatorPass(array('required' => false)),
      'perex'         => new sfValidatorPass(array('required' => false)),
      'prezentace_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Gallery'), 'column' => 'id')),
      'popis'         => new sfValidatorPass(array('required' => false)),
      'keywords'      => new sfValidatorPass(array('required' => false)),
      'description'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('stranky_translation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'StrankyTranslation';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'title'         => 'Text',
      'str_title'     => 'Text',
      'perex'         => 'Text',
      'prezentace_id' => 'ForeignKey',
      'popis'         => 'Text',
      'keywords'      => 'Text',
      'description'   => 'Text',
      'lang'          => 'Text',
    );
  }
}
