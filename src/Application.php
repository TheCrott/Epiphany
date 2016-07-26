<?php

namespace BelajarOOP\Epiphany;

use BelajarOOP\Epiphany\Http\Kernel;

  /*
    Class Application nantinya digunakan untuk menyimpan konfigurasi dari
    framework yang kita buat. Seperti yang sudah dijelaskan sebelumnya,
    ini akan membuat kita lebih fokus karena class Kernel hanya mengurusi
    request dan response, sedangkan class Application mengurusi konfigurasi
    dari framework kita.
  */

class Application extends Kernel
{
  protected $configs;

  public function __construct(array $configs = array())
  {
    parent::__construct();
    $this->configs = $configs;
  }

  public function setConfig($key, $value)
  {
    $this->configs[$key] = $value;
  }

  public function getConfig($key)
  {
    if(array_key_exists($key, $this->configs)) {
      return $this->configs[$key];
    }

    return null;
  }
}

?>
