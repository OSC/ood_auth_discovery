<?php

/**
 * Fetch a variable from an object without php warnings
 *
 * @param $source The array containing data
 * @param $key The key that will be inspected
 * @param null $default An optional return value if location is empty
 * @return null Return the value of $source[$key] or null if empty
 */
function fetch($source, $key, $default = NULL) {
  return isset($source[$key]) ? $source[$key] : $default;
}
