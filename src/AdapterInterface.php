<?php


namespace Aleksandr\AdapterInterface;


interface AdapterInterface
{
    public function parse(string $ip);

    public function getCountryCode();

    public function getCityName();

}
