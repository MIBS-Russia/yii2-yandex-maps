<?php
namespace mibs\yandexmaps\Interfaces;

/**
 * interface EventAggregate
 */
interface EventAggregate
{
    /**
     * @return array
     */
    public function getEvents();
}