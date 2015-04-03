<?php

namespace Dflydev\Common\Domain\Model\Identity\Rhumsaa;

use Dflydev\Common\Domain\Model\Identity\Identity;
use Dflydev\Common\Domain\Model\Identity\Rhumsaa\TestImpl\StrictRhumsaaUuidIdentity;
use InvalidArgumentException;

class StrictRhumsaaUuidIdentityTest extends AbstractUuidIdTest
{
    /** @test */
    public function it_creates_from_string_that_looks_like_a_uuid()
    {
        $class = $this->getIdentityClass();

        $id = $class::fromString('2F48FB5E-9160-4EA3-B126-C4F944DA9115');

        $this->assertInstanceOf(Identity::class, $id);
        $this->assertInstanceOf($class, $id);
        $this->assertUuid($id);
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_does_not_create_from_string_that_does_not_look_like_a_uuid()
    {
        $class = $this->getIdentityClass();

        $id = $class::fromString('hello world');
    }

    protected function getIdentityClass()
    {
        return StrictRhumsaaUuidIdentity::class;
    }
}
