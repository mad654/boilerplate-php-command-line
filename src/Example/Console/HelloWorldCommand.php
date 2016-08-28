<?php


namespace Example\Console;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class HelloWorldCommand extends Command
{
    protected function configure()
    {
        parent::configure();

        $this->setName('example:hello-world');
        $this->setDescription('guess what it is');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $style = new SymfonyStyle($input, $output);
        $style->writeln("Hello world!");
        $name = $style->ask("Whats your name?", 'Hugu');
        $style->success("Hello $name!");
    }
}
