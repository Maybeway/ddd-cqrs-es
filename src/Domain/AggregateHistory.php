<?php declare(strict_types=1);

namespace Maybeway\Domain;

/**
 * @package Domain
 * @author Michal Koričanský <koricansky.michal@gmail.com>
 */
class AggregateHistory extends DomainEvents
{
    /**
     * @var IdentifiesAggregate
     */
    private $aggregateId;

    /**
     * @param IdentifiesAggregate $aggregateId
     * @param array               $events
     *
     * @throws \Exception
     */
    public function __construct(IdentifiesAggregate $aggregateId, array $events)
    {
        if (empty($events)) {
            throw new EmptyAggregateHistory($aggregateId);
        }

        /** @var $event DomainEvent */
        foreach ($events as $event) {
            if (!$event->getAggregateId()->equals($aggregateId)) {
                throw new CorruptAggregateHistory("For aggregate id : {$aggregateId}");
            }
        }

        $this->aggregateId = $aggregateId;

        parent::__construct($events);
    }

    /**
     * @return IdentifiesAggregate
     */
    public function getAggregateId(): IdentifiesAggregate
    {
        return $this->aggregateId;
    }

    /**
     * @param DomainEvent $domainEvent
     *
     * @throws \Exception
     */
    public function append(DomainEvent $domainEvent)
    {
        throw new \Exception("@todo  Implement append() method.");
    }
}