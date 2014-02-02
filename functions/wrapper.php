<?php
/**
 * Theme wrapper
 *
 * @credit http://roots.io/an-introduction-to-the-roots-theme-wrapper/
 * @credit http://scribu.net/wordpress/theme-wrappers.html
 */
function rootbeer_template_path() {
  return Rootbeer_Wrapping::$main_template;
}

function rootbeer_sidebar_path() {
  return new Rootbeer_Wrapping('sidebar.php');
}

class Rootbeer_Wrapping {
  // Stores the full path to the main template file
  static $main_template;

  // Stores the base name of the template file; e.g. 'page' for 'page.php' etc.
  static $base;

  public function __construct($template = 'base.php') {
    $this->slug = basename($template, '.php');
    $this->templates = array($template);

    if (self::$base) {
      $str = substr($template, 0, -4);
      array_unshift($this->templates, sprintf($str . '-%s.php', self::$base));
    }
  }

  public function __toString() {
    $this->templates = apply_filters('rootbeet_wrap_' . $this->slug, $this->templates);
    return locate_template($this->templates);
  }

  static function wrap($main) {
    self::$main_template = $main;
    self::$base = basename(self::$main_template, '.php');

    if (self::$base === 'index') {
      self::$base = false;
    }

    return new Rootbeer_Wrapping();
  }
}
add_filter('template_include', array('Rootbeer_Wrapping', 'wrap'), 99);
?>
