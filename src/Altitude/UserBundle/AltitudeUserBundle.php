<?php

namespace Altitude\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AltitudeUserBundle extends Bundle
{
	public function getParent()
  	{
    	return 'FOSUserBundle';
  	}
}
