<?php

namespace Dflydev\Common\Domain\Model\Identity\Rhumsaa;

use Rhumsaa\Uuid\Uuid;

trait RhumsaaUuidIdentityGenerator
{
    abstract function __construct($id);

    /**
     * {@inheritdoc}
     */
    public static function generate()
    {
        return new static(Uuid::uuid4()->toString());
    }
}
