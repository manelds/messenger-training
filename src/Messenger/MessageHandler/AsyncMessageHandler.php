<?php

declare(strict_types=1);

namespace App\Messenger\MessageHandler;

use App\Messenger\Message\AsyncMessage;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
final class AsyncMessageHandler
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function __invoke(AsyncMessage $message): void
    {
        $this->logger->info(
            sprintf('Procesando mensaje asíncrono: <%s>', $message->data())
        );
    }
}