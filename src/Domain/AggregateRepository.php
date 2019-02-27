<?php declare(strict_types=1);

namespace Maybeway\Domain;

/**
 * @package Maybeway\Domain
 * @author Michal Koričanský <koricansky.michal@gmail.com>
 */
interface AggregateRepository
{
    /**
     * @param RecordsEvents $recordsEvents
     *
     * @return void
     */
    public function save(RecordsEvents $recordsEvents): void;

    /**
     * @param IdentifiesAggregate $identifiesAggregate
     *
     * @return AggregateRoot
     */
    public function get(IdentifiesAggregate $identifiesAggregate): AggregateRoot;
}