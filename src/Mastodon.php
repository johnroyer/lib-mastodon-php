<?php

namespace Zeroplex\LibMastodonPhp;

class Mastodon
{
    private static self $instance;

    private function __construct(
        string $host,
        int $port = 443,
        array $header = null
    )
    {
        //
    }

    public static function getInstance(
        string $host,
        int $port = 443,
        array $header = null
    )
    {
        if (!empty(self::$instance)) {
            return self::$instance;
        }

        self::$instance = new self(
            $host,
            $port,
            $header
        );

        return self::$instance;
    }
}