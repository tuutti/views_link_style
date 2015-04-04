<?php

/**
 * @file
 * Definition of Drupal\views_link_style\Plugin\views\style\Link.
 */

namespace Drupal\views_link_style\Plugin\views\style;

use Drupal\Core\Form\FormStateInterface;
use Drupal\views\Plugin\views\style\StylePluginBase;

/**
 * Style plugin to render each item in a link.
 *
 * @ingroup views_style_plugins
 *
 * @ViewsStyle(
 *   id = "html_views_link",
 *   title = @Translation("Link"),
 *   help = @Translation("Displays rows as a link."),
 *   theme = "views_link_style_link",
 *   display_types = {"normal"}
 * )
 */
class HtmlLink extends StylePluginBase {

  /**
   * Does the style plugin allows to use style plugins.
   *
   * @var bool
   */
  protected $usesRowPlugin = TRUE;

  /**
   * Does the style plugin support custom css class for the rows.
   *
   * @var bool
   */
  protected $usesRowClass = TRUE;

  /**
   * Set default options.
   */
  protected function defineOptions() {
    $options = parent::defineOptions();

    $options['link_token'] = array('default' => '');

    return $options;
  }

  /**
   * Render the given style.
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    parent::buildOptionsForm($form, $form_state);

    $form['link_token'] = array(
      '#required' => TRUE,
      '#type' => 'textfield',
      '#title' => $this->t('Link token'),
      '#default_value' => $this->options['link_token'],
    );
  }

}
