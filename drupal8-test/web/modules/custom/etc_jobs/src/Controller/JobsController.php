<?php

namespace Drupal\etc_jobs\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines HelloController class.
 */
class JobsController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   *   Return markup array.
   */
  public function content() {
    $file_path = dirname(DRUPAL_ROOT) . "\web\json\jobs.json";
    $json_decode = json_decode(file_get_contents($file_path), true);

    $data[] = null;
    foreach($json_decode as $json) {
      $data[] = $json;
    }

    return [
      '#theme' => 'etc_jobs_theme_hook',
      '#variable_jobs' => $data,
    ];
  }

}
