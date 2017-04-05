<?php

namespace Vnn\WpApiClient\Endpoint;

/**
 * Class Faqs
 * @package Vnn\WpApiClient\Endpoint
 */
class Faqs extends AbstractWpEndpoint
{
    /**
     * {@inheritdoc}
     */
    protected function getEndpoint()
    {
        return '/wp-json/wp/v2/faqs';
    }
}
