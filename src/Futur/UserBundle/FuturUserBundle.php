<?php

namespace Futur\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FuturUserBundle extends Bundle
{
	public function getParent()
  {
    return 'FOSUserBundle';
  }
}
