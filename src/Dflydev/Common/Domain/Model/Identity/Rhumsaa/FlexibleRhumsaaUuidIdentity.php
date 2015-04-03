<?php

namespace Dflydev\Common\Domain\Model\Identity\Rhumsaa;

use Dflydev\Common\Domain\Model\Identity\FlexibleFromString;
use Dflydev\Common\Domain\Model\Identity\StringBasedIdentity;

trait FlexibleRhumsaaUuidIdentity
{
    use RhumsaaUuidIdentity;
    use RhumsaaUuidIdentityGenerator;
    use FlexibleFromString;
}
