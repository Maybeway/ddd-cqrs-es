<?php declare(strict_types=1);

namespace Maybeway\Domain;

/**
 * @package Maybeway\Domain
 * @author Michal Koričanský <koricansky.michal@gmail.com>
 */
interface RecordsEvents
{
    /**
     * @return DomainEvents
     */
    public function getRecordedEvents(): DomainEvents;

    /**
     * @return void
     */
    public function clearRecordedEvents(): void;

    /**
     * @param AggregateHistory $aggregateHistory
     *
     * @return AggregateRoot
     */
    public static function reconstituteFrom(AggregateHistory $aggregateHistory);
}
