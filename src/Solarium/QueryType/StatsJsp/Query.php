<?php

/**
 * Stats.jsp request handler for Solarium.
 */

namespace Solarium\QueryType\StatsJsp;

use Solarium\Core\Query\Query as BaseQuery;

/**
 * Stats.jsp query.
 */
class Query extends BaseQuery
{
    /**
     * Querytype stats.jsp
     */
    const QUERY_STATSJSP = 'stats.jsp';

    /**
     * Default options for the "Stats.jsp" query type.
     *
     * @var array
     */
    protected $options = array(
        'resultclass' => 'Solarium\QueryType\StatsJsp\Result',
        'handler' => 'admin/stats.jsp',
    );

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return self::QUERY_STATSJSP;
    }

    /**
     * {@inheritdoc}
     */
    public function getRequestBuilder()
    {
        return new RequestBuilder();
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseParser()
    {
        return new ResponseParser();
    }
}
