<?php
/*
 * @file
 * Contains \Drupal\country\Form\COUNTRYForm
 */
//namespace Drupal\country\Form;
//
//use Drupal\Core\Form\FormBase;
//use Drupal\Core\Form\FormStateInterface;
//use Drupal\Core\Database\Database; 
/*
 * Provides country.
 */

//class COUNTRYForm extends FormBase {
  /*
   * (@inheritdoc)
   */
//  public function getFormId() {
//    return 'countryform';
//   }
   /*
    * (@inheritdoc)
    */
//   public function buildForm(array $form, FormStateInterface $form_state){
     
  //   $database = \Drupal::database();
//     $q= $database ->select('taxonomy_term_field_data','t');
//     $q->fields('t',['name']);
//     $country= $q->execute()->fetchAll();
//     $query= $database ->select('taxonomy_term__parent','t');
//     $query->fields('t',['parent_target_id']);
//     $options= $query->execute()->fetchAll();
//     foreach($options as $key => $value)
//     {
//       if($value == 1)
//       {
//         
//       }
//     }
//     exit();
//    $form['country']= array(
//     '#title' => t('Country'),
//     '#type'  => 'select',
//     '#options' => $options, 
//     '#required' => TRUE,
//      '#ajax' => array(
//        'callback' => '::chkStates',
//        'event' => 'change',
//        'wrapper' => 'edit-state',
//      ),
//       );
//     $country = $form_state->getValue('name');
//     print_r($country);
//     exit();
//     $form['state']= array(
//       '#title' => t('State'),
//       '#type' => 'select',
//       '#options' => $country,
//       '#required' => True,
//       '#prefix' => '<div id= edit-state>',
//       '#suffix' => '</div>',
//      );
//     $form['submit'] = array(
//      '#type' => 'submit',
//      '#value' => t('submit'),
//     );
//     
//     return $form;
//   }
   
   /*
    * (@inheritdoc)
    */
//   public function submitForm(array &$form, FormStateInterface $form_state) {
//     
//   }
    /*
    * (@inheritdoc)
    */
//   public function chkStates(array &$form, FormStateInterface $form_state)
//   {
//    return $form['state'];
//   }
//}