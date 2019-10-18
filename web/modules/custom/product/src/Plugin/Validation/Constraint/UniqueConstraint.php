<?php

namespace Drupal\product\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;

/*
 *@Constraint(
 * id = "unique"
 * label = @Translation("Unique",Context="Validation")
 * type = "entity : product"
 * ) 
 */
class UniqueConstraint extends Constraint {
  public $message = 'Unique Entity';
}

