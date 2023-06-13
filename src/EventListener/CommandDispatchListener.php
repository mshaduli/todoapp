<?php

namespace App\EventListener;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Event\ConsoleCommandEvent;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;

#[AsEventListener]
class CommandDispatchListener
{
    public function __invoke(ConsoleCommandEvent $commandEvent) :void
    {
        if (in_array($commandEvent->getCommand()->getName(), ['make:crud', 'make:registration-form']))
        {
            $io = new SymfonyStyle($commandEvent->getInput(), $commandEvent->getOutput());
            $io->note('You are not authorized to use this feature!!!!!');

            $io->success('You have a learnt a lot. Please practice');

            exit;
        }
    }
}