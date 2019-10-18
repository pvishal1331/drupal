<?php
namespace Drupal\econtent\Entity\Controller;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Url;

/**
 * Provides a list controller for econtent entity.
 *
 * @ingroup econtent
 */
class EcontentListBuilder extends EntityListBuilder {

  /**
   * {@inheritdoc}
   *
   * parent::render() is where EntityListBuilder creates the table using our
   * buildHeader() and buildRow() implementations.
   */
  public function render() {
    $build['description'] = [
      '#markup' => $this->t('Content Entity Example implements a Contacts model. These contacts are fieldable entities. You can manage the fields on the <a href="@adminlink">Contacts admin page</a>.', array(
        '@adminlink' => \Drupal::urlGenerator()
          ->generateFromRoute('econtent.settings'),
      )),
    ];

    $build += parent::render();
    return $build;
  }

  /**
   * {@inheritdoc}
   *
   */
  public function buildHeader() {
    $header['id'] = $this->t('ContactID');
    $header['name'] = $this->t('Name');
    $header['first_name'] = $this->t('First Name');
    $header['gender'] = $this->t('Gender');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\econtent\Entity\Econtent */
    $row['id'] = $entity->id();
    $row['name'] = $entity->link();
    $row['first_name'] = $entity->first_name->value;
    $row['gender'] = $entity->gender->value;
    return $row + parent::buildRow($entity);
  }

}