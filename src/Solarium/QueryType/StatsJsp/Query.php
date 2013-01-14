<?php

/**
 * Stats.jsp request handler for Solarium.
 */

namespace Solarium\QueryType\StatsJsp;

use Solarium\Core\Query\Query as BaseQuery;

/**
 * Luke query
 *
 * Use a Luke query to get statistics about the Solr instance.
 */
class Query extends BaseQuery
{
    /**
     * Querytype luke
     */
    const QUERY_STATSJSP = 'stats.jsp';

    /**
     * Default options for the "Luke" query type.
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
