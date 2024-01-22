<?php

namespace MessageBroker;

interface MessageInterface extends Confirmable
{
    public function getData(): string;
}
