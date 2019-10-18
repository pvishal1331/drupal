<?php
/*
 * @file
 * Contains \Drupal\rsvplist\Form\RSVPForm
 */
namespace Drupal\rsvplist\Form;

use Drupal\Core\Database\Database;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/*
 *Provides an RSVP Email form. 
*/
class RSVPForm extends FormBase{
  /*
   * (@inheritdoc)
   */
  public function getFormID() {
    return 'rsvplist_email_form';
  }
  /*
   * (@inheritdoc)
   */
  public function buildForm(array $form, FormStateInterface $form_state){
    
  $node = \Drupal::routeMatch()->getParameter('node');
  $nid = $node->nid->value;
  $form['email']=array(
     '#title' => t('Email Address'),
     '#type'  => 'textfield',
     '#size'  => 25,
     '#description' => t("update to the email address"),
     '#required' => TRUE,
   );
//  $form['name']=array(
//    '#title' => t('Name'),
//    '#type' => 'textfield',
//    '#size' => 25,
//    '#description' => t("Name"),
//    '#required' => True,
//  );
   $form['submit'] = array(
     '#type' => 'submit',
     '#value' => t('RSVP'),
     );
   $form['nid'] = array(
     '#type' => 'hidden',
     '#value' => $nid,
    );
   return $form;
  }
  /**
   * (@inheritdoc)
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    $value = $form_state->getvalue('email');
    if($value == !\Drupal::service('email.validator')->isvalid($value)) {
    $form_state->setErrorByName('email', t('The email address %mail is not valid.', array('%mail' => $value)));
   }
   
  }
  /**
   * (@inheritdoc)
   */
  public function submitForm(array &$form, FormStateInterface $form_state)
  {
    $user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());
    db_insert('rsvplist')
     ->fields(['mail' => $form_state->getValue('email'),
       'nid' => $form_state->getValue('nid'),
       'uid' => $user->id(),
       'created' => time(),
       ])
      ->execute();
    drupal_set_message(t('Thank you.'));
  }
 }