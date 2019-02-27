<?php declare(strict_types=1);

namespace Maybeway\Domain;

use DateTimeImmutable;

/**
 * @package Maybeway\Domain
 * @author Michal Koričanský <koricansky.michal@gmail.com>
 */
interface DomainEvent
{
    /**
     * @return int
     */
    public function getVersion(): int;

    /**
     * @return IdentifiesAggregate
     */
    public function getAggregateId(): IdentifiesAggregate;

    /**
     * @return \DateTimeImmutable
     */
    public function getOccurredAt(): DateTimeImmutable;
}
