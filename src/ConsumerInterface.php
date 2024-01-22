<?php

namespace MessageBroker;

interface ConsumerInterface
{
    public function getMessage(string $exchangeKey, array $options = []): ?MessageInterface;
}
