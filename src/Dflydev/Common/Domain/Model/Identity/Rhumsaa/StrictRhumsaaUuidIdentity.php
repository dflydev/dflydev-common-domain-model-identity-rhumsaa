<?php

namespace Dflydev\Common\Domain\Model\Identity\Rhumsaa;

use Dflydev\Common\Domain\Model\Identity\StrictUuidFromString;
use Dflydev\Common\Domain\Model\Identity\StringBasedIdentity;

trait StrictRhumsaaUuidIdentity
{
    use RhumsaaUuidIdentity;
    use RhumsaaUuidIdentityGenerator;
    use StrictUuidFromString;
}
