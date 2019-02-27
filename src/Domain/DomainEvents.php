<?php declare(strict_types=1);

namespace Maybeway\Domain;

/**
 * @package Maybeway\Domain
 * @author Michal Koričanský <koricansky.michal@gmail.com>
 */
class DomainEvents implements \Iterator
{
    /**
     * @var int
     */
    protected $position;

    /**
     * @var array
     */
    protected $events;

    public function __construct(array $events)
    {
        $this->events = $events;
        $this->position = 0;
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function current()
    {
        return $this->events[$this->position];
    }

    public function key(): int
    {
        return $this->position;
    }

    public function next(): int
    {
        ++$this->position;
    }

    public function valid(): bool
    {
        return isset($this->events[$this->position]);
    }
}
