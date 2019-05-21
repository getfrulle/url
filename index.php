<?php
class Url {
  function get($uri) {
    return $uri == '' ? option('url_root') : option('url_root') . '/' . $uri;
  }
}

// Helper
function url($uri = '') {
  $Url = new Url();
  $uri = ($uri == '/') ? '' : $uri;
  return $Url->get($uri);
}