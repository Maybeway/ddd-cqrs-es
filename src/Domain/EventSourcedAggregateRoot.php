<?php declare(strict_types=1);

namespace Maybeway\Domain;

/**
 * @package Maybeway\Domain
 * @author Michal Koričanský <koricansky.michal@gmail.com>
 */
abstract class EventSourcedAggregateRoot implements AggregateRoot, RecordsEvents
{
    /**
     * @var int
     */
    protected $version = 0;

    /**
     * @var array
     */
    protected $lastRecordedEvents = [];

    /**
     * @var bool
     */
    protected $aggregateActive = true;

    /**
     * @return DomainEvents
     */
    public function getRecordedEvents(): DomainEvents
    {
        return new DomainEvents($this->lastRecordedEvents);
    }

    /**
     * Clear recorded events
     */
    public function clearRecordedEvents(): void
    {
        $this->lastRecordedEvents = [];
    }

    /**
     * Apply Domain event
     *
     * @param DomainEvent $domainEvent
     */
    protected function apply(DomainEvent $domainEvent): void
    {
        $methodName = $this->when($domainEvent);

        if (method_exists($this, $methodName)) {
            $this->$methodName($domainEvent);
        }

        $this->version++;
    }

    /**
     * Record domain event
     *
     * @param DomainEvent $domainEvent
     */
    protected function recordThat(DomainEvent $domainEvent): void
    {
        $this->lastRecordedEvents[] = $domainEvent;
        ++$this->version;
        $this->apply($domainEvent);
    }

    /**
     * Returns method belonging to event
     * @example UserWasRegistered ( event ) as param  $event
     * returns whenUserWasRegistered
     *
     * @param DomainEvent $event
     *
     * @return string
     */
    protected function when(DomainEvent $event): string
    {
        $parts = explode('\\', get_class($event));
        return 'when' . end($parts);
    }
}