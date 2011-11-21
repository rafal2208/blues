<?php

/**
 * Song form base class.
 *
 * @method Song getObject() Returns the current form's model object
 *
 * @package    Blues
 * @subpackage form
 * @author     Włodzimierz Gajda
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSongForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'title'        => new sfWidgetFormInputText(),
      'lyrics'       => new sfWidgetFormTextarea(),
      'slug'         => new sfWidgetFormInputText(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
      'artists_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Artist')),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'        => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'lyrics'       => new sfValidatorString(array('max_length' => 4096, 'required' => false)),
      'slug'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
      'artists_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Artist', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Song', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('song[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Song';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['artists_list']))
    {
      $this->setDefault('artists_list', $this->object->Artists->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveArtistsList($con);

    parent::doSave($con);
  }

  public function saveArtistsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['artists_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Artists->getPrimaryKeys();
    $values = $this->getValue('artists_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Artists', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Artists', array_values($link));
    }
  }

}
