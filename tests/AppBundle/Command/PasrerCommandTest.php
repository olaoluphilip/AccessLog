<?php

use Symfony\Component\Console\Tester\CommandTester;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use AppBundle\Command\ParserCommand;
/**
 * Created by PhpStorm.
 * User: Queen
 * Date: 01-Jul-16
 * Time: 5:11 PM
 */
class ParserCommandTest extends \PHPUnit_Framework_TestCase
{
    public function testExecute()
    {
        // mock the Kernel or create one depending on your needs
        $application = new Application($kernel);
        $application->add(new ParserCommand());

        $command = $application->find('parse:log');
        $commandTester = new CommandTester($command);
        $commandTester->execute(
            array(
                'filename' => '/var/log/apache2/access.log',
            )
        );

        $this->assertRegExp('/.../', $commandTester->getDisplay());
    }
}