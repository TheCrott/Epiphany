<?php

namespace BelajarOOP\EpiphanyFramework\Http;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpKernel\HttpKernelInterface;

use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

class Kernel implements HttpKernelInterface
{
  public function __construct()
  {
    // Symfony Route Collection
    $this->router = new RouteCollection();
  }

  public function handle(Request $request, $type = self::MASTER_REQUEST, $catch = true)
  {
    // todo
  }
}

?>
