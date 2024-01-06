<?php

// src/Message/EmailNotification.php
namespace App\Message;

class EmailNotification
{
    public function __construct(
        private string $content,
    ) {
    }

    public function getContent(): string
    {
        return $this->content;
    }
}
