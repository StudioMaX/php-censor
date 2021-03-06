<?php

namespace Tests\PHPCensor\ProcessControl;

use PHPCensor\ProcessControl\UnixProcessControl;

class UnixProcessControlTest extends ProcessControlTest
{
    protected function setUp(): void
    {
        $this->object = new UnixProcessControl();
    }

    public function getTestCommand()
    {
        return "read SOMETHING";
    }

    public function testIsAvailable()
    {
        self::assertEquals(DIRECTORY_SEPARATOR === '/', UnixProcessControl::isAvailable());
    }
}
