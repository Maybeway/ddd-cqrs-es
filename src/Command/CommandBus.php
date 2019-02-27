<?php declare(strict_types=1);

namespace Maybeway\Command;

/**
 * @package Maybeway\Command
 * @author Michal Koričanský <koricansky.michal@gmail.com>
 */
interface CommandBus
{
    /**
     * @param Command $command
     *
     * @return void
     */
    public function execute(Command $command);
}