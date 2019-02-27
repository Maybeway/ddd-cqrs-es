<?php declare(strict_types=1);

namespace Maybeway\Event;

use Maybeway\Domain\AggregateHistory;
use Maybeway\Domain\DomainEvents;
use Maybeway\Domain\IdentifiesAggregate;

/**
 * @package Maybeway\Event
 * @author Michal Koričanský <koricansky.michal@gmail.com>
 */
interface EventStore
{
    /**
     * @param DomainEvents $domainEvents
     *
     * @return void
     */
    public function commit(DomainEvents $domainEvents): void;

    /**
     * @param IdentifiesAggregate $aggregateId
     *
     * @return AggregateHistory
     */
    public function getAggregateHistoryFor(IdentifiesAggregate $aggregateId): AggregateHistory;
}