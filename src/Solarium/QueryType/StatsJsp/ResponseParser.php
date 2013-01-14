<?php

/**
 * Stats.jsp request handler for Solarium.
 */

namespace Solarium\QueryType\StatsJsp;
use Solarium\Core\Query\ResponseParser as ResponseParserAbstract;
use Solarium\Core\Query\ResponseParserInterface as ResponseParserInterface;

/**
 * Parse Luke response data
 */
class ResponseParser extends ResponseParserAbstract implements ResponseParserInterface
{
    /**
     * Implements \Solarium\Core\Query\ResponseParserInterface::parse().
     */
    public function parse($result)
    {
        $data = $result->getData();

        $result = array();

        return $this->addHeaderInfo($data, $result);
    }
}
