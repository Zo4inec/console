<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\Question;

class CommandThree extends Command
{

    protected function configure()
    {
        $this
            ->setName('questions')
            ->setDescription('Get user data');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');
        $question1 = new Question('Введите ваше имя');
        $question2 = new Question('Введите ваш возраст');
        $question3 = new ChoiceQuestion('Введите ваш возраст', ['M', 'Ж']);

        $name = $helper->ask($input, $output, $question1);
        $age = $helper->ask($input, $output, $question2);
        $gender = $helper->ask($input, $output, $question3);

        $output->writeln('Здравствуйте, '. $name . ' Ваш возраст: ' . $age . ' Ваш пол:' . $gender);

        return Command::SUCCESS;
    }
}


