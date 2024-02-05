<?php

declare(strict_types=1);

namespace App\Messenger\Message;

final class AsyncMessage
{
    private string $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function data(): string
    {
        return $this->data;
    }
}
