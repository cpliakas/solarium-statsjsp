Overview
========

A Stats.jsp request handler to [Solarium](https://github.com/basdenooijer/solarium).

Usage
=====

    use Solarium\Client;
    use Solarium\QueryType\StatsJsp\Query as StatsJspQuery;

    $client->registerQueryType(StatsJspQuery::QUERY_STATSJSP, 'Solarium\\QueryType\\StatsJsp\\Query');
    $stats_jsp = $client->createQuery(StatsJspQuery::QUERY_STATSJSP);
    $data = $client->execute($stats_jsp);

    print 'Schema: ' . $data->getSchema(); . PHP_EOL;
