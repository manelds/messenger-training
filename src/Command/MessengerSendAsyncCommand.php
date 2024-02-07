<?php

declare(strict_types=1);

namespace App\Command;

use App\Messenger\Message\AsyncMessage;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Messenger\Bridge\Amqp\Transport\AmqpStamp;
use Symfony\Component\Messenger\MessageBusInterface;

#[AsCommand(
    name: 'app:messenger:send-async-msg',
    description: 'Envia mensaje assíncrono',
    hidden: false
)]
final class MessengerSendAsyncCommand extends Command
{
    private MessageBusInterface $bus;

    public function __construct(MessageBusInterface $bus)
    {
        $this->bus = $bus;

        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $start = microtime(true);

        for($i = 1; $i <= 10; $i++) {
            $this->bus->dispatch(
                new AsyncMessage('Data of event #' . $i),
                [new AmqpStamp('default_queue')]
            );
        }

        $time_elapsed_secs = microtime(true) - $start;
        $output->writeln(sprintf('Total time: %s', $time_elapsed_secs));

        return Command::SUCCESS;
    }
}
