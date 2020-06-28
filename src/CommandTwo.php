<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CommandTwo extends Command
{

    protected function configure()
    {
        $this
            ->setName('string_loop')
            ->setDescription('Show the messages')
            ->addArgument('message', InputArgument::REQUIRED, 'Your message in quotes')
            ->addArgument('times', InputArgument::OPTIONAL, 'Message {times} repeat');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $times = 2;

        $timesArg = $input->getArgument('times');
        if ($timesArg) {
            $times = $timesArg;
        }

        for ($i = 0; $i < $times; $i++) {
            $output->writeln($input->getArgument('message'));
        }

        return Command::SUCCESS;
    }
}