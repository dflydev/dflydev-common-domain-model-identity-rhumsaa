<?php

namespace Dflydev\Common\Domain\Model\Identity\Rhumsaa;

use Dflydev\Common\Domain\Model\Identity\Identity;

abstract class AbstractUuidIdTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_generates_expected_identity()
    {
        $class = $this->getIdentityClass();

        $id = $class::generate();

        $this->assertInstanceOf(Identity::class, $id);
        $this->assertInstanceOf($class, $id);
        $this->assertUuid($id);
    }

    abstract protected function getIdentityClass();

    protected function assertUuid($string)
    {
        $pattern = '/^[a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}$/i';
        if (!preg_match($pattern, $string)) {
            throw new \InvalidArgumentException("UUID of the form nnnnnnnn-nnnn-nnnn-nnnn-nnnnnnnnnnnn expected");
        }
    }
}
