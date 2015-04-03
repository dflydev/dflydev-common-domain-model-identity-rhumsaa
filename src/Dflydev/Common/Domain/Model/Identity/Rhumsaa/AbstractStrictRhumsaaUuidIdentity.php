<?php

namespace Dflydev\Common\Domain\Model\Identity\Rhumsaa;

use Dflydev\Common\Domain\Model\Identity\Identity;
use Dflydev\Common\Domain\Model\Identity\IdentityGenerator;

abstract class AbstractStrictRhumsaaUuidIdentity implements Identity, IdentityGenerator
{
    use StrictRhumsaaUuidIdentity;
}
