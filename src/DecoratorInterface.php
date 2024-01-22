<?php

namespace MessageBroker;

interface DecoratorInterface
{
    /**
     * @return mixed
     */
    public function getOriginal();
}
