<?php
/**
 * @file
 * contains \Drupal\rsvplist\Plugin\Block\RSVPBlock
 */

namespace Drupal\rsvplist\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;


/**
 * Provides an 'RSVP' List Block
 * @Block(
 * id = "rsvp_block",
 * admin_label = @Translation("RSVP Block"),
 * category = @Translation("RSVP Block")
 * )
 */
class RSVPBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return \Drupal::formBuilder()->getForm('Drupal\rsvplist\Form\RsvpForm');
   }
 public function blockAccess(AccountInterface $account) {
    $result = \Drupal::routeMatch()->getParameter('uid');
    $uid = $result->uid->value;
    if(is_numeric($uid)) {
      return AccessResult::allowedIfHasPermission($account,'veiw rsvplist');
    }
    return AccessResult::forbidden();
  } 
}