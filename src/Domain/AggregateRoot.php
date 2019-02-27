<?php declare(strict_types=1);

namespace Maybeway\Domain;

/**
 * @package Maybeway\Domain
 * @author Michal Koričanský <koricansky.michal@gmail.com>
 */
interface AggregateRoot
{
    /**
     * @return IdentifiesAggregate
     */
    public function getAggregateId(): IdentifiesAggregate;
}