<?php

namespace AppBundle\Command;



use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\DialogHelper;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Process\Process;


class SqlDumpCommand extends Command
{

    protected function configure()
    {
        $this
            ->setName('app:sql:dump')
            ->setDescription('dump sql')
            ->setHelp('this command allow you to dump sql')
        ;

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $path = "var/sqldump";
        $dt = new \DateTime();
        $commandLine = "mkdir -p $path;mysqldump -u root -ptroiswa cinefan > $path/dump_".$dt->format('Y-m-d').".sql";
        $process = new Process($commandLine);
        //$process->setCommandLine($commandLine);
        $process->run();
        $ret = $process->getOutput();
        $output->writeln("Output of the command => $ret" );
    }


}
