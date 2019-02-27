<?php declare(strict_types=1);

namespace Maybeway\Event;

use Maybeway\Domain\AggregateRoot;
use Maybeway\Domain\IdentifiesAggregate;

/**
 * @package App\Model
 * @author Michal Koričanský <koricansky.michal@gmail.com>
 */
interface EventStoreRepository
{
    /**
     * @param EventData $event
     *
     * @return void
     */
    public function save(EventData $event): void;

    /**
     * @param IdentifiesAggregate $aggregateId
     *
     * @return AggregateRoot
     */
    public function get(IdentifiesAggregate $aggregateId): AggregateRoot;
}
