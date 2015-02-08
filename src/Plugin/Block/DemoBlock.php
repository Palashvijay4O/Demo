<?php
/**
 * @file
 * Contains \Drupal\demo\Plugin\Block\DemoBlock.
 */

namespace Drupal\demo\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;

  /**
   * Provides a 'Demo' block.
   *
   * @Block(
   *   id = "demo_block",
   *   admin_label = @Translation("Demo block"),
   * )
   */
class DemoBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return $array = array(
      '#markup' => t('This is a demo module block.'),
      );
  }

  /**
   * {@inheritdoc}
   */
  public function access(AccountInterface $account) {
    return $account->hasPermission('access content');
  }
}
