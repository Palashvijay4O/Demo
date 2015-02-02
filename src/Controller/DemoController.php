<?php

/**
 * @file
 * Contains /Drupal/demo/Controller/DemoController.
 */

namespace Drupal\demo\Controller;

/**
 * DemoController class
 */
class DemoController{
  /**
   * Creating a demonstation page.
   */
  public function demo() {
    return array(
      '#markup' => t('This is a demo page.'),
      );
  }
}
