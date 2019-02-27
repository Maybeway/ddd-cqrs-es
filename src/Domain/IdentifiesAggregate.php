<?php declare(strict_types=1);

namespace Maybeway\Domain;

/**
 * @package Maybeway\Domain
 * @author Michal Koričanský <koricansky.michal@gmail.com>
 */
interface IdentifiesAggregate
{
    /**
     * @param IdentifiesAggregate $other
     *
     * @return bool
     */
    public function equals(IdentifiesAggregate $other): bool;
}