<?php

declare(strict_types=1);

namespace App\Messenger\Message;

final readonly class SyncMessage
{
    public function __construct(public string $data)
    {
    }
}
