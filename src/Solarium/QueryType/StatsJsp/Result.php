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
     * Retuns the Stats.jsp data as a SimpleSMLElement object.
     *
     * @return \SimpleXMLElement
     */
    public function getData()
    {
        if (null === $this->data) {
            $this->data = new \SimpleXMLElement($this->response->getBody());
        }
        return $this->data;
    }

    /**
     * @return string
     */
    public function getCore()
    {
        return $this->getData()->core;
    }

    /**
     * @return string
     */
    public function getSchema()
    {
        return $this->getData()->schema;
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->getData()->host;
    }

    /**
     * @return string
     */
    public function getNow()
    {
        return $this->getData()->now;
    }

    /**
     * @return string
     */
    public function getStart()
    {
        return $this->getData()->start;
    }
}