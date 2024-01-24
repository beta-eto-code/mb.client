<?php

namespace MessageBroker;

use Iterator;

interface ConsumerInterface
{
    /**
     * @param string $exchangeKey
     * @param array $options
     * @return Iterator|MessageInterface[]
     */
    public function getMessageIterator(string $exchangeKey, array $options = []): Iterator;
    public function getMessage(string $exchangeKey, array $options = []): ?MessageInterface;
}
