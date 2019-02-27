<?php declare(strict_types=1);

namespace Maybeway\Event;

use Maybeway\Domain\DomainEvent;

/**
 * @package App\Model
 * @author Michal Koričanský <koricansky.michal@gmail.com>
 */
interface EventBus
{
    public function publish(DomainEvent $event): void;
}