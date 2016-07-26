<?php

namespace AppBundle\Command;

use AppBundle\Controller\AccessLogController;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
/**
 * Created by PhpStorm.
 * User: Olaolu Phillip
 * Date: 01-Jul-16
 * Time: 4:28 PM
 */
class ParserCommand extends ContainerAwareCommand
{



    protected function configure()
    {
        $this
            ->setName('parse:log')
            ->setDescription('Parse Apache Access Log')
            ->addArgument(
                'filename',
                InputArgument::REQUIRED,
                'The name of the file to be parsed'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        
        $filename = $input->getArgument('filename');
        $start = microtime(true);
        $this::parseLog($filename);
        $output->writeln("Action Completed in ". $time_elapsed_secs = microtime(true) - $start . " seconds");
    }

    private function parseLog($filename)
    {
        $accessLog = $this->getContainer()->get('accessLog.controller.service');
        
        $parser = new \Kassner\LogParser\LogParser();

        $parser->setFormat('%h %l %u %t \"%r\" %>s %b \"%{Referer}i\" \"%{UserAgent}i\"');

        $lines = file(__DIR__.$filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            $entry = $parser->parse($line);
            $accessLog->insertAction($entry);
        }
    }
}