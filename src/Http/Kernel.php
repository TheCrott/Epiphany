<?php

namespace BelajarOOP\EpiphanyFramework\Http;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class Kernel implements HttpKernelInterface
{
  public function __construct()
  {
    // todo
  }

  public function handle(Request $request, $type = self::MASTER_REQUEST, $catch = true)
  {
    // todo
  }
}

?>
