<?php

class LaraQDiff extends QuickDiff {
  static function FullHTML($oldStr, $newStr, array $options = array()) {
    $options += Config::get('quickdiff::full', array());
    return parent::FullHTML($oldStr, $newStr, $options);
  }

  static function FullHtmlWrapped($oldStr, $newStr, array $options = array()) {
    $options += Config::get('quickdiff::wrapped', array());
    return parent::FullHtmlWrapped($oldStr, $newStr, $options);
  }
}