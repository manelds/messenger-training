<?php

declare(strict_types=1);

namespace App\Messenger\MessageHandler;

use App\Messenger\Message\SyncMessage;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
final class SyncMessageHandler
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function __invoke(SyncMessage $message): void
    {
        $this->logger->info(
            sprintf('Procesando mensaje síncrono: <%s>', $message->data())
        );
    }
}