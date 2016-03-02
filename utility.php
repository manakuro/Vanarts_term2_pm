<?php

/**
 * Convert relative path to absolute path
 * Reference: (http://web-tsukuru.com/187)
 * 
 * @param string $target_path 
 * @param string $base 
 * @return $uri string 
 */
function convert_to_uri($target_path, $base) {

  $component = parse_url($base);

  $directory = preg_replace('!/[^/]*$!', '/', $component["path"]);

  switch (true) {

    // [0]
    case preg_match("/^http/", $target_path):
      $uri =  $target_path;
      break;

    // [1]「//exmaple.jp/aa.jpg」
    case preg_match("/^\/\/.+/", $target_path):
      $uri =  $component["scheme"].":".$target_path;
      break;

    // [2]「/aaa/aa.jpg」
    case preg_match("/^\/[^\/].+/", $target_path):
      $uri =  $component["scheme"]."://".$component["host"].$target_path;
      break;

    // [3]「./aa.jpg」
    case preg_match("/^\.\/(.+)/", $target_path,$maches):
      $uri =  $component["scheme"]."://".$component["host"].$directory.$maches[1];
      break;

    // [4]「aa.jpg」
    case preg_match("/^([^\.\/]+)(.*)/", $target_path,$maches):
      $uri =  $component["scheme"]."://".$component["host"].$directory.$maches[1].$maches[2];
      break;

    // [5]「../aa.jpg」
    case preg_match("/^\.\.\/.+/", $target_path):
      
      preg_match_all("!\.\./!", $target_path, $matches);
      $nest =  count($matches[0]);

      $dir = preg_replace('!/[^/]*$!', '/', $component["path"])."\n";
      $dir_array = explode("/",$dir);
      array_shift($dir_array);
      array_pop($dir_array);
      $dir_count = count($dir_array);

      $count = $dir_count - $nest;

      $pathto="";
      $i = 0;
      while ( $i < $count) {
        $pathto .= "/".$dir_array[$i];
        $i++;
      }
      $file = str_replace("../","",$target_path);
      $uri =  $component["scheme"]."://".$component["host"].$pathto."/".$file;

      break;
  }

  return $uri;
}