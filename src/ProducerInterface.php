<?php

namespace MessageBroker;

interface ProducerInterface
{
    /**
     * @return mixed
     */
    public function sendMessage(string $message, string $exchangeKey, array $options = []);
}
