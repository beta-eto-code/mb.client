<?php

namespace MessageBroker;

interface Confirmable
{
    /**
     * @param mixed $data
     */
    public function confirm($data = null): void;
}
