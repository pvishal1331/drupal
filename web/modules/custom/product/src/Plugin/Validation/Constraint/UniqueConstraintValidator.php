<?php

namespace Drupal\product\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class UniqueConstraintValidator extends ConstraintValidator {
  /*
   * {@inheritdoc}
   */
  public function validate($entity, Constraint $constraint) {
       $field1 = $entity->field1->value;
       $field2 = $entity->field2->value;
       $field3 = $entity->field3->value;
       $field4 = $entity->field4->value;
     $entity_type_id= $entity->getEntityTypeId();
     $value_taken = (bool)\Drupal::EntityQuery($entity_type_id)
     -> condition('field1', $field1)
     -> condition('field2', $field2)
     -> condition('field3', $field3)
     -> condition('field4', $field4)
     -> range(0,1)
     -> count()
     -> execute();
    if($value_taken)
    {
      $this->Context -> addViolation($constraint->message);
    }
}
}