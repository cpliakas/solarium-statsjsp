<?php

/**
 * Stats.jsp request handler for Solarium.
 */

namespace Solarium\QueryType\StatsJsp;

use Solarium\Core\Query\Result\QueryType as BaseResult;

/**
 * Stats.jsp query result.
 */
class Result extends BaseResult
{
    /**
     * Ensures the response is parsed, returns the property.
     *
     * @param string
     * @return mised
     */
    public function returnProperty($property)
    {
        $this->parseResponse();
        return $this->$property;
    }
}