<?php

/**
 * Configuration settings
 *
 * PHP version 7.0
 */
class Config
{

    /**
     * SMTP host
     *
     * @var string
     */
    const SMTP_HOST = 'SMTP_HOST'; //mailtrap smtp
    /**
     * SMTP port
     *
     * @var int
     */
    const SMTP_PORT = 2525;

    /**
     * SMTP user
     *
     * @var string
     */
    const SMTP_USER = 'ADD_SMTP_USER';

    /**
     * SMTP password
     *
     * @var string
     */
    const SMTP_PASSWORD = 'ADD_SMTP_PASSWORD';

    /**
     * Queue host
     *
     * @var string
     */
    const QUEUE_HOST = 'RABBIT_MQ_HOST';

    /**
     * Queue port
     *
     * @var int
     */
    const QUEUE_PORT = 5672;

    /**
     * Queue user
     *
     * @var string
     */
    const QUEUE_USER = 'RABBIT_MQ_USER';

    /**
     * Queue password
     *
     * @var string
     */
    const QUEUE_PASSWORD = 'RABBIT_MQ_PASSWORD';

    /**
     * Queue name
     *
     * @var string
     */
    const QUEUE_NAME = 'emails'; //any name
}
