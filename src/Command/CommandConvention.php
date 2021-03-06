<?php declare(strict_types = 1);

namespace Maybeway\Command;

/**
 * @package Maybeway\Command
 * @author Michal Koričanský <koricansky.michal@gmail.com>
 */
interface CommandConvention
{
	/**
	 * @param Command $command
	 * @return string
	 */
	public function handlerName( Command $command ): string;
}