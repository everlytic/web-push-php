<?php
declare(strict_types=1);

namespace Minishlink\WebPush;

class Request
{
    private $endpoint;
    private $headers;
    private $content;

    public function __construct($endpoint, $headers, $content)
    {
        $this->endpoint = $endpoint;
        $this->headers = $headers;
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @return mixed
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }
}
