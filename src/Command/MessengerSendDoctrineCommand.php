<?php

declare(strict_types=1);

namespace App\Command;

use App\Messenger\Message\DoctrineMessage;
use App\Messenger\Message\SyncMessage;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Messenger\MessageBusInterface;

#[AsCommand(
    name: 'app:messenger:send-doctrine-msg',
    description: 'Envia mensaje al transport de doctrine',
    hidden: false
)]
final class MessengerSendDoctrineCommand extends Command
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
            $this->bus->dispatch(new DoctrineMessage('Data of event #' . $i));
        }

        $time_elapsed_secs = microtime(true) - $start;
        $output->writeln(sprintf('Total time: %s', $time_elapsed_secs));

        return Command::SUCCESS;
    }
}
