<?php

/**
 * Stats.jsp request handler for Solarium.
 */

namespace Solarium\QueryType\StatsJsp;

use Solarium\Core\Client\Request;
use Solarium\Core\Query\QueryInterface;
use Solarium\Core\Query\RequestBuilder as BaseRequestBuilder;

/**
 * Build a Stats.jsp request.
 */
class RequestBuilder extends BaseRequestBuilder
{
    /**
     * Build request for a stats.jsp query.
     *
     * @param QueryInterface $query
     * @return Request
     */
    public function build(QueryInterface $query)
    {
        $request = new Request;
        $request->setHandler($query->getHandler());
        return $request;
    }
}
