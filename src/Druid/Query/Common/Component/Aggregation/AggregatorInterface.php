<?php
/**
 * @author    jhrncar
 * @copyright PIXEL FEDERATION
 * @license   Internal use only
 */

namespace Druid\Query\Common\Component\Aggregation;

/**
 * Interface TypedAggregatorInterface
 * @package Druid\Query\Common\Component\Aggregation
 */
interface AggregatorInterface
{
    const FILTERED_TYPE = 'filtered';

    public function getType();
}