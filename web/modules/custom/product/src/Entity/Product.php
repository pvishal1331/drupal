<?php

namespace Drupal\product\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Defines the product entity.
 *
 * @ingroup product
 *
 * @ContentEntityType(
 *   id = "product",
 *   label = @Translation("Product"),
 *   base_table = "product",
 *   entity_keys = {
 *     "id" = "id",
 *   },
 * )
 */

class Product extends ContentEntityBase implements ContentEntityInterface {

  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {

    // Standard field, used as unique if primary index.
    $fields['id'] = BaseFieldDefinition::create('integer')
      ->setLabel(t('ID'))
      ->setDescription(t('The ID of the Product'))
      ->setReadOnly(False);
    
   $fields['skucode'] = BaseFieldDefinitions::create('varchar')
     ->setlabel(t('Skucode'))
     ->setDescription(t('The skucode of product'))
     ->setReadOnly(False);
    
    
   $fields['mrp'] = BaseFieldDefinitions::create('integer')
     ->setlabel(t('MRP'))
     ->setDescription(t('The mrp of products'))
     ->setReadOnly(False);
   
   $fields['user_id'] = BaseFieldDefinitions::create('varchar')
     ->setlabel(t('UserId'))
     ->setDescription(t('User id '))
     ->setReadOnly(False);
   
   $fields['description'] = BaseFieldDefinitions::create('varchar')
     ->setlabel(t('Description'))
     ->setDescription(t('Put description here'))
     ->setReadOnly(False);
   
   $fields['created'] = BaseFieldDefinitions::create('varchar')
     ->setlabel(t('created'))
     ->setDescription(t('created'))
     ->setReadOnly(False);
   
   $fields['changed'] = BaseFieldDefinitions::create('varchar')
     ->setlabel(t('Changed'))
     ->setDescription(t('changed'))
     ->setReadOnly(False);
   
   $fields['product name'] = BaseFieldDefinitions::create('varchar')
     ->setlabel(t('Product Name'))
     ->setDescription(t('product name'))
     ->setReadOnly(False);
    return $fields;
  }
}