<?php

namespace spec\Catchamonkey\Bundle\ConsoleLoggerBundle\EventListener;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Monolog\Logger;
use Symfony\Component\Console\Event\ConsoleExceptionEvent;
use Symfony\Component\Console\Command\Command;
use Exception;

class ConsoleExceptionListenerSpec extends ObjectBehavior
{
    function let(Logger $logger, ConsoleExceptionEvent $event, Command $command)
    {
        $exception = new Exception('Broken Things');
        $this->beConstructedWith($logger);
        $command->getName()->willReturn('AwesomeCommand');
        $event->getCommand()->willReturn($command);
        $event->getException()->willReturn($exception);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Catchamonkey\Bundle\ConsoleLoggerBundle\EventListener\ConsoleExceptionListener');
    }

    function it_should_handle_console_exception_events(ConsoleExceptionEvent $event, Logger $logger)
    {
        $this->onConsoleException($event);
        $logger->error(
            'Exception: Broken Things (uncaught exception) at '.__FILE__.' line 16 while running console command `AwesomeCommand`'
        )->shouldBeCalled();
    }
}
