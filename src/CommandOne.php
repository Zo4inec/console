<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CommandOne extends Command
{

    protected function configure()
    {
        $this
            ->setName('string')
            ->setDescription('Show the message')
            ->addArgument('message', InputArgument::REQUIRED, 'Your message in quotes');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Привет ' . $input->getArgument('message'));

        return Command::SUCCESS;
    }
}