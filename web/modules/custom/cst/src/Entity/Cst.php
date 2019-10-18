<?php
namespace Drupal\cst\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\cst\CstInterface;

/**
 * Defines the Cst entity.
 *
 * @ConfigEntityType(
 *   id = "cst",
 *   label = @Translation("Cst"),
 *   handlers = {
 *     "list_builder" = "Drupal\cst\Controller\CstListBuilder",
 *     "form" = {
 *       "add" = "Drupal\cst\Form\CSTForm",
 *       "edit" = "Drupal\cst\Form\CSTForm",
 *       "delete" = "Drupal\cst\Form\CSTDeleteForm",
 *     }
 *   },
 *   config_prefix = "cst",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *   },
 *   config_export = {
 *     "id",
 *     "label"
 *   },
 *   links = {
 *     "edit-form" = "/admin/config/system/cst/{cst}",
 *     "delete-form" = "/admin/config/system/cst/{cst}/delete",
 *   }
 * )
 */
class Cst extends ConfigEntityBase implements CstInterface {

  /**
   * The Cst id.
   *
   * @var string
   */
  public $id;

  /**
   * The Cst label.
   *
   * @var string
   */
  public $label;

 }
