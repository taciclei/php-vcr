<?php

namespace VCR\Event;

use Symfony\Component\EventDispatcher\Event as LegacyEvent;
use Symfony\Contracts\EventDispatcher\Event as ContractsEvent;
use Behat\Testwork\Event\Event as BehatEvent;

if (class_exists(BehatEvent::class)) {
    abstract class SymphonyEvent extends BehatEvent
    {
    }
}elseif (class_exists(ContractsEvent::class) && !class_exists(LegacyEvent::class)) {
    abstract class SymphonyEvent extends ContractsEvent
    {
    }
} elseif (class_exists(LegacyEvent::class)) {
    abstract class SymphonyEvent extends LegacyEvent
    {
    }
}

abstract class Event extends SymphonyEvent
{
}
