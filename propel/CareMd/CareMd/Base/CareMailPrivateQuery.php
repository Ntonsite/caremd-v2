<?php

namespace CareMd\CareMd\Base;

use \Exception;
use CareMd\CareMd\CareMailPrivate as ChildCareMailPrivate;
use CareMd\CareMd\CareMailPrivateQuery as ChildCareMailPrivateQuery;
use CareMd\CareMd\Map\CareMailPrivateTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_mail_private' table.
 *
 *
 *
 * @method     ChildCareMailPrivateQuery orderByRecipient($order = Criteria::ASC) Order by the recipient column
 * @method     ChildCareMailPrivateQuery orderBySender($order = Criteria::ASC) Order by the sender column
 * @method     ChildCareMailPrivateQuery orderBySenderIp($order = Criteria::ASC) Order by the sender_ip column
 * @method     ChildCareMailPrivateQuery orderByCc($order = Criteria::ASC) Order by the cc column
 * @method     ChildCareMailPrivateQuery orderByBcc($order = Criteria::ASC) Order by the bcc column
 * @method     ChildCareMailPrivateQuery orderBySubject($order = Criteria::ASC) Order by the subject column
 * @method     ChildCareMailPrivateQuery orderByBody($order = Criteria::ASC) Order by the body column
 * @method     ChildCareMailPrivateQuery orderBySign($order = Criteria::ASC) Order by the sign column
 * @method     ChildCareMailPrivateQuery orderByAsk4ack($order = Criteria::ASC) Order by the ask4ack column
 * @method     ChildCareMailPrivateQuery orderByReply2($order = Criteria::ASC) Order by the reply2 column
 * @method     ChildCareMailPrivateQuery orderByAttachment($order = Criteria::ASC) Order by the attachment column
 * @method     ChildCareMailPrivateQuery orderByAttachType($order = Criteria::ASC) Order by the attach_type column
 * @method     ChildCareMailPrivateQuery orderByReadFlag($order = Criteria::ASC) Order by the read_flag column
 * @method     ChildCareMailPrivateQuery orderByMailgroup($order = Criteria::ASC) Order by the mailgroup column
 * @method     ChildCareMailPrivateQuery orderByMaildir($order = Criteria::ASC) Order by the maildir column
 * @method     ChildCareMailPrivateQuery orderByExecLevel($order = Criteria::ASC) Order by the exec_level column
 * @method     ChildCareMailPrivateQuery orderByExcludeAddr($order = Criteria::ASC) Order by the exclude_addr column
 * @method     ChildCareMailPrivateQuery orderBySendDt($order = Criteria::ASC) Order by the send_dt column
 * @method     ChildCareMailPrivateQuery orderBySendStamp($order = Criteria::ASC) Order by the send_stamp column
 * @method     ChildCareMailPrivateQuery orderByUid($order = Criteria::ASC) Order by the uid column
 *
 * @method     ChildCareMailPrivateQuery groupByRecipient() Group by the recipient column
 * @method     ChildCareMailPrivateQuery groupBySender() Group by the sender column
 * @method     ChildCareMailPrivateQuery groupBySenderIp() Group by the sender_ip column
 * @method     ChildCareMailPrivateQuery groupByCc() Group by the cc column
 * @method     ChildCareMailPrivateQuery groupByBcc() Group by the bcc column
 * @method     ChildCareMailPrivateQuery groupBySubject() Group by the subject column
 * @method     ChildCareMailPrivateQuery groupByBody() Group by the body column
 * @method     ChildCareMailPrivateQuery groupBySign() Group by the sign column
 * @method     ChildCareMailPrivateQuery groupByAsk4ack() Group by the ask4ack column
 * @method     ChildCareMailPrivateQuery groupByReply2() Group by the reply2 column
 * @method     ChildCareMailPrivateQuery groupByAttachment() Group by the attachment column
 * @method     ChildCareMailPrivateQuery groupByAttachType() Group by the attach_type column
 * @method     ChildCareMailPrivateQuery groupByReadFlag() Group by the read_flag column
 * @method     ChildCareMailPrivateQuery groupByMailgroup() Group by the mailgroup column
 * @method     ChildCareMailPrivateQuery groupByMaildir() Group by the maildir column
 * @method     ChildCareMailPrivateQuery groupByExecLevel() Group by the exec_level column
 * @method     ChildCareMailPrivateQuery groupByExcludeAddr() Group by the exclude_addr column
 * @method     ChildCareMailPrivateQuery groupBySendDt() Group by the send_dt column
 * @method     ChildCareMailPrivateQuery groupBySendStamp() Group by the send_stamp column
 * @method     ChildCareMailPrivateQuery groupByUid() Group by the uid column
 *
 * @method     ChildCareMailPrivateQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareMailPrivateQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareMailPrivateQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareMailPrivateQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareMailPrivateQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareMailPrivateQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareMailPrivate findOne(ConnectionInterface $con = null) Return the first ChildCareMailPrivate matching the query
 * @method     ChildCareMailPrivate findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareMailPrivate matching the query, or a new ChildCareMailPrivate object populated from the query conditions when no match is found
 *
 * @method     ChildCareMailPrivate findOneByRecipient(string $recipient) Return the first ChildCareMailPrivate filtered by the recipient column
 * @method     ChildCareMailPrivate findOneBySender(string $sender) Return the first ChildCareMailPrivate filtered by the sender column
 * @method     ChildCareMailPrivate findOneBySenderIp(string $sender_ip) Return the first ChildCareMailPrivate filtered by the sender_ip column
 * @method     ChildCareMailPrivate findOneByCc(string $cc) Return the first ChildCareMailPrivate filtered by the cc column
 * @method     ChildCareMailPrivate findOneByBcc(string $bcc) Return the first ChildCareMailPrivate filtered by the bcc column
 * @method     ChildCareMailPrivate findOneBySubject(string $subject) Return the first ChildCareMailPrivate filtered by the subject column
 * @method     ChildCareMailPrivate findOneByBody(string $body) Return the first ChildCareMailPrivate filtered by the body column
 * @method     ChildCareMailPrivate findOneBySign(string $sign) Return the first ChildCareMailPrivate filtered by the sign column
 * @method     ChildCareMailPrivate findOneByAsk4ack(int $ask4ack) Return the first ChildCareMailPrivate filtered by the ask4ack column
 * @method     ChildCareMailPrivate findOneByReply2(string $reply2) Return the first ChildCareMailPrivate filtered by the reply2 column
 * @method     ChildCareMailPrivate findOneByAttachment(string $attachment) Return the first ChildCareMailPrivate filtered by the attachment column
 * @method     ChildCareMailPrivate findOneByAttachType(string $attach_type) Return the first ChildCareMailPrivate filtered by the attach_type column
 * @method     ChildCareMailPrivate findOneByReadFlag(int $read_flag) Return the first ChildCareMailPrivate filtered by the read_flag column
 * @method     ChildCareMailPrivate findOneByMailgroup(string $mailgroup) Return the first ChildCareMailPrivate filtered by the mailgroup column
 * @method     ChildCareMailPrivate findOneByMaildir(string $maildir) Return the first ChildCareMailPrivate filtered by the maildir column
 * @method     ChildCareMailPrivate findOneByExecLevel(int $exec_level) Return the first ChildCareMailPrivate filtered by the exec_level column
 * @method     ChildCareMailPrivate findOneByExcludeAddr(string $exclude_addr) Return the first ChildCareMailPrivate filtered by the exclude_addr column
 * @method     ChildCareMailPrivate findOneBySendDt(string $send_dt) Return the first ChildCareMailPrivate filtered by the send_dt column
 * @method     ChildCareMailPrivate findOneBySendStamp(string $send_stamp) Return the first ChildCareMailPrivate filtered by the send_stamp column
 * @method     ChildCareMailPrivate findOneByUid(string $uid) Return the first ChildCareMailPrivate filtered by the uid column *

 * @method     ChildCareMailPrivate requirePk($key, ConnectionInterface $con = null) Return the ChildCareMailPrivate by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivate requireOne(ConnectionInterface $con = null) Return the first ChildCareMailPrivate matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareMailPrivate requireOneByRecipient(string $recipient) Return the first ChildCareMailPrivate filtered by the recipient column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivate requireOneBySender(string $sender) Return the first ChildCareMailPrivate filtered by the sender column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivate requireOneBySenderIp(string $sender_ip) Return the first ChildCareMailPrivate filtered by the sender_ip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivate requireOneByCc(string $cc) Return the first ChildCareMailPrivate filtered by the cc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivate requireOneByBcc(string $bcc) Return the first ChildCareMailPrivate filtered by the bcc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivate requireOneBySubject(string $subject) Return the first ChildCareMailPrivate filtered by the subject column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivate requireOneByBody(string $body) Return the first ChildCareMailPrivate filtered by the body column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivate requireOneBySign(string $sign) Return the first ChildCareMailPrivate filtered by the sign column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivate requireOneByAsk4ack(int $ask4ack) Return the first ChildCareMailPrivate filtered by the ask4ack column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivate requireOneByReply2(string $reply2) Return the first ChildCareMailPrivate filtered by the reply2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivate requireOneByAttachment(string $attachment) Return the first ChildCareMailPrivate filtered by the attachment column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivate requireOneByAttachType(string $attach_type) Return the first ChildCareMailPrivate filtered by the attach_type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivate requireOneByReadFlag(int $read_flag) Return the first ChildCareMailPrivate filtered by the read_flag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivate requireOneByMailgroup(string $mailgroup) Return the first ChildCareMailPrivate filtered by the mailgroup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivate requireOneByMaildir(string $maildir) Return the first ChildCareMailPrivate filtered by the maildir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivate requireOneByExecLevel(int $exec_level) Return the first ChildCareMailPrivate filtered by the exec_level column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivate requireOneByExcludeAddr(string $exclude_addr) Return the first ChildCareMailPrivate filtered by the exclude_addr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivate requireOneBySendDt(string $send_dt) Return the first ChildCareMailPrivate filtered by the send_dt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivate requireOneBySendStamp(string $send_stamp) Return the first ChildCareMailPrivate filtered by the send_stamp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivate requireOneByUid(string $uid) Return the first ChildCareMailPrivate filtered by the uid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareMailPrivate[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareMailPrivate objects based on current ModelCriteria
 * @method     ChildCareMailPrivate[]|ObjectCollection findByRecipient(string $recipient) Return ChildCareMailPrivate objects filtered by the recipient column
 * @method     ChildCareMailPrivate[]|ObjectCollection findBySender(string $sender) Return ChildCareMailPrivate objects filtered by the sender column
 * @method     ChildCareMailPrivate[]|ObjectCollection findBySenderIp(string $sender_ip) Return ChildCareMailPrivate objects filtered by the sender_ip column
 * @method     ChildCareMailPrivate[]|ObjectCollection findByCc(string $cc) Return ChildCareMailPrivate objects filtered by the cc column
 * @method     ChildCareMailPrivate[]|ObjectCollection findByBcc(string $bcc) Return ChildCareMailPrivate objects filtered by the bcc column
 * @method     ChildCareMailPrivate[]|ObjectCollection findBySubject(string $subject) Return ChildCareMailPrivate objects filtered by the subject column
 * @method     ChildCareMailPrivate[]|ObjectCollection findByBody(string $body) Return ChildCareMailPrivate objects filtered by the body column
 * @method     ChildCareMailPrivate[]|ObjectCollection findBySign(string $sign) Return ChildCareMailPrivate objects filtered by the sign column
 * @method     ChildCareMailPrivate[]|ObjectCollection findByAsk4ack(int $ask4ack) Return ChildCareMailPrivate objects filtered by the ask4ack column
 * @method     ChildCareMailPrivate[]|ObjectCollection findByReply2(string $reply2) Return ChildCareMailPrivate objects filtered by the reply2 column
 * @method     ChildCareMailPrivate[]|ObjectCollection findByAttachment(string $attachment) Return ChildCareMailPrivate objects filtered by the attachment column
 * @method     ChildCareMailPrivate[]|ObjectCollection findByAttachType(string $attach_type) Return ChildCareMailPrivate objects filtered by the attach_type column
 * @method     ChildCareMailPrivate[]|ObjectCollection findByReadFlag(int $read_flag) Return ChildCareMailPrivate objects filtered by the read_flag column
 * @method     ChildCareMailPrivate[]|ObjectCollection findByMailgroup(string $mailgroup) Return ChildCareMailPrivate objects filtered by the mailgroup column
 * @method     ChildCareMailPrivate[]|ObjectCollection findByMaildir(string $maildir) Return ChildCareMailPrivate objects filtered by the maildir column
 * @method     ChildCareMailPrivate[]|ObjectCollection findByExecLevel(int $exec_level) Return ChildCareMailPrivate objects filtered by the exec_level column
 * @method     ChildCareMailPrivate[]|ObjectCollection findByExcludeAddr(string $exclude_addr) Return ChildCareMailPrivate objects filtered by the exclude_addr column
 * @method     ChildCareMailPrivate[]|ObjectCollection findBySendDt(string $send_dt) Return ChildCareMailPrivate objects filtered by the send_dt column
 * @method     ChildCareMailPrivate[]|ObjectCollection findBySendStamp(string $send_stamp) Return ChildCareMailPrivate objects filtered by the send_stamp column
 * @method     ChildCareMailPrivate[]|ObjectCollection findByUid(string $uid) Return ChildCareMailPrivate objects filtered by the uid column
 * @method     ChildCareMailPrivate[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareMailPrivateQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareMailPrivateQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareMailPrivate', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareMailPrivateQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareMailPrivateQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareMailPrivateQuery) {
            return $criteria;
        }
        $query = new ChildCareMailPrivateQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCareMailPrivate|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The CareMailPrivate object has no primary key');
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        throw new LogicException('The CareMailPrivate object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCareMailPrivateQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The CareMailPrivate object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareMailPrivateQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The CareMailPrivate object has no primary key');
    }

    /**
     * Filter the query on the recipient column
     *
     * Example usage:
     * <code>
     * $query->filterByRecipient('fooValue');   // WHERE recipient = 'fooValue'
     * $query->filterByRecipient('%fooValue%', Criteria::LIKE); // WHERE recipient LIKE '%fooValue%'
     * </code>
     *
     * @param     string $recipient The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateQuery The current query, for fluid interface
     */
    public function filterByRecipient($recipient = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($recipient)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateTableMap::COL_RECIPIENT, $recipient, $comparison);
    }

    /**
     * Filter the query on the sender column
     *
     * Example usage:
     * <code>
     * $query->filterBySender('fooValue');   // WHERE sender = 'fooValue'
     * $query->filterBySender('%fooValue%', Criteria::LIKE); // WHERE sender LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sender The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateQuery The current query, for fluid interface
     */
    public function filterBySender($sender = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sender)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateTableMap::COL_SENDER, $sender, $comparison);
    }

    /**
     * Filter the query on the sender_ip column
     *
     * Example usage:
     * <code>
     * $query->filterBySenderIp('fooValue');   // WHERE sender_ip = 'fooValue'
     * $query->filterBySenderIp('%fooValue%', Criteria::LIKE); // WHERE sender_ip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $senderIp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateQuery The current query, for fluid interface
     */
    public function filterBySenderIp($senderIp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($senderIp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateTableMap::COL_SENDER_IP, $senderIp, $comparison);
    }

    /**
     * Filter the query on the cc column
     *
     * Example usage:
     * <code>
     * $query->filterByCc('fooValue');   // WHERE cc = 'fooValue'
     * $query->filterByCc('%fooValue%', Criteria::LIKE); // WHERE cc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateQuery The current query, for fluid interface
     */
    public function filterByCc($cc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateTableMap::COL_CC, $cc, $comparison);
    }

    /**
     * Filter the query on the bcc column
     *
     * Example usage:
     * <code>
     * $query->filterByBcc('fooValue');   // WHERE bcc = 'fooValue'
     * $query->filterByBcc('%fooValue%', Criteria::LIKE); // WHERE bcc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bcc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateQuery The current query, for fluid interface
     */
    public function filterByBcc($bcc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bcc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateTableMap::COL_BCC, $bcc, $comparison);
    }

    /**
     * Filter the query on the subject column
     *
     * Example usage:
     * <code>
     * $query->filterBySubject('fooValue');   // WHERE subject = 'fooValue'
     * $query->filterBySubject('%fooValue%', Criteria::LIKE); // WHERE subject LIKE '%fooValue%'
     * </code>
     *
     * @param     string $subject The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateQuery The current query, for fluid interface
     */
    public function filterBySubject($subject = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($subject)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateTableMap::COL_SUBJECT, $subject, $comparison);
    }

    /**
     * Filter the query on the body column
     *
     * Example usage:
     * <code>
     * $query->filterByBody('fooValue');   // WHERE body = 'fooValue'
     * $query->filterByBody('%fooValue%', Criteria::LIKE); // WHERE body LIKE '%fooValue%'
     * </code>
     *
     * @param     string $body The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateQuery The current query, for fluid interface
     */
    public function filterByBody($body = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($body)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateTableMap::COL_BODY, $body, $comparison);
    }

    /**
     * Filter the query on the sign column
     *
     * Example usage:
     * <code>
     * $query->filterBySign('fooValue');   // WHERE sign = 'fooValue'
     * $query->filterBySign('%fooValue%', Criteria::LIKE); // WHERE sign LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sign The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateQuery The current query, for fluid interface
     */
    public function filterBySign($sign = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sign)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateTableMap::COL_SIGN, $sign, $comparison);
    }

    /**
     * Filter the query on the ask4ack column
     *
     * Example usage:
     * <code>
     * $query->filterByAsk4ack(1234); // WHERE ask4ack = 1234
     * $query->filterByAsk4ack(array(12, 34)); // WHERE ask4ack IN (12, 34)
     * $query->filterByAsk4ack(array('min' => 12)); // WHERE ask4ack > 12
     * </code>
     *
     * @param     mixed $ask4ack The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateQuery The current query, for fluid interface
     */
    public function filterByAsk4ack($ask4ack = null, $comparison = null)
    {
        if (is_array($ask4ack)) {
            $useMinMax = false;
            if (isset($ask4ack['min'])) {
                $this->addUsingAlias(CareMailPrivateTableMap::COL_ASK4ACK, $ask4ack['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ask4ack['max'])) {
                $this->addUsingAlias(CareMailPrivateTableMap::COL_ASK4ACK, $ask4ack['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateTableMap::COL_ASK4ACK, $ask4ack, $comparison);
    }

    /**
     * Filter the query on the reply2 column
     *
     * Example usage:
     * <code>
     * $query->filterByReply2('fooValue');   // WHERE reply2 = 'fooValue'
     * $query->filterByReply2('%fooValue%', Criteria::LIKE); // WHERE reply2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reply2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateQuery The current query, for fluid interface
     */
    public function filterByReply2($reply2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reply2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateTableMap::COL_REPLY2, $reply2, $comparison);
    }

    /**
     * Filter the query on the attachment column
     *
     * Example usage:
     * <code>
     * $query->filterByAttachment('fooValue');   // WHERE attachment = 'fooValue'
     * $query->filterByAttachment('%fooValue%', Criteria::LIKE); // WHERE attachment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $attachment The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateQuery The current query, for fluid interface
     */
    public function filterByAttachment($attachment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($attachment)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateTableMap::COL_ATTACHMENT, $attachment, $comparison);
    }

    /**
     * Filter the query on the attach_type column
     *
     * Example usage:
     * <code>
     * $query->filterByAttachType('fooValue');   // WHERE attach_type = 'fooValue'
     * $query->filterByAttachType('%fooValue%', Criteria::LIKE); // WHERE attach_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $attachType The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateQuery The current query, for fluid interface
     */
    public function filterByAttachType($attachType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($attachType)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateTableMap::COL_ATTACH_TYPE, $attachType, $comparison);
    }

    /**
     * Filter the query on the read_flag column
     *
     * Example usage:
     * <code>
     * $query->filterByReadFlag(1234); // WHERE read_flag = 1234
     * $query->filterByReadFlag(array(12, 34)); // WHERE read_flag IN (12, 34)
     * $query->filterByReadFlag(array('min' => 12)); // WHERE read_flag > 12
     * </code>
     *
     * @param     mixed $readFlag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateQuery The current query, for fluid interface
     */
    public function filterByReadFlag($readFlag = null, $comparison = null)
    {
        if (is_array($readFlag)) {
            $useMinMax = false;
            if (isset($readFlag['min'])) {
                $this->addUsingAlias(CareMailPrivateTableMap::COL_READ_FLAG, $readFlag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($readFlag['max'])) {
                $this->addUsingAlias(CareMailPrivateTableMap::COL_READ_FLAG, $readFlag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateTableMap::COL_READ_FLAG, $readFlag, $comparison);
    }

    /**
     * Filter the query on the mailgroup column
     *
     * Example usage:
     * <code>
     * $query->filterByMailgroup('fooValue');   // WHERE mailgroup = 'fooValue'
     * $query->filterByMailgroup('%fooValue%', Criteria::LIKE); // WHERE mailgroup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mailgroup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateQuery The current query, for fluid interface
     */
    public function filterByMailgroup($mailgroup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mailgroup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateTableMap::COL_MAILGROUP, $mailgroup, $comparison);
    }

    /**
     * Filter the query on the maildir column
     *
     * Example usage:
     * <code>
     * $query->filterByMaildir('fooValue');   // WHERE maildir = 'fooValue'
     * $query->filterByMaildir('%fooValue%', Criteria::LIKE); // WHERE maildir LIKE '%fooValue%'
     * </code>
     *
     * @param     string $maildir The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateQuery The current query, for fluid interface
     */
    public function filterByMaildir($maildir = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($maildir)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateTableMap::COL_MAILDIR, $maildir, $comparison);
    }

    /**
     * Filter the query on the exec_level column
     *
     * Example usage:
     * <code>
     * $query->filterByExecLevel(1234); // WHERE exec_level = 1234
     * $query->filterByExecLevel(array(12, 34)); // WHERE exec_level IN (12, 34)
     * $query->filterByExecLevel(array('min' => 12)); // WHERE exec_level > 12
     * </code>
     *
     * @param     mixed $execLevel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateQuery The current query, for fluid interface
     */
    public function filterByExecLevel($execLevel = null, $comparison = null)
    {
        if (is_array($execLevel)) {
            $useMinMax = false;
            if (isset($execLevel['min'])) {
                $this->addUsingAlias(CareMailPrivateTableMap::COL_EXEC_LEVEL, $execLevel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($execLevel['max'])) {
                $this->addUsingAlias(CareMailPrivateTableMap::COL_EXEC_LEVEL, $execLevel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateTableMap::COL_EXEC_LEVEL, $execLevel, $comparison);
    }

    /**
     * Filter the query on the exclude_addr column
     *
     * Example usage:
     * <code>
     * $query->filterByExcludeAddr('fooValue');   // WHERE exclude_addr = 'fooValue'
     * $query->filterByExcludeAddr('%fooValue%', Criteria::LIKE); // WHERE exclude_addr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $excludeAddr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateQuery The current query, for fluid interface
     */
    public function filterByExcludeAddr($excludeAddr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($excludeAddr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateTableMap::COL_EXCLUDE_ADDR, $excludeAddr, $comparison);
    }

    /**
     * Filter the query on the send_dt column
     *
     * Example usage:
     * <code>
     * $query->filterBySendDt('2011-03-14'); // WHERE send_dt = '2011-03-14'
     * $query->filterBySendDt('now'); // WHERE send_dt = '2011-03-14'
     * $query->filterBySendDt(array('max' => 'yesterday')); // WHERE send_dt > '2011-03-13'
     * </code>
     *
     * @param     mixed $sendDt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateQuery The current query, for fluid interface
     */
    public function filterBySendDt($sendDt = null, $comparison = null)
    {
        if (is_array($sendDt)) {
            $useMinMax = false;
            if (isset($sendDt['min'])) {
                $this->addUsingAlias(CareMailPrivateTableMap::COL_SEND_DT, $sendDt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sendDt['max'])) {
                $this->addUsingAlias(CareMailPrivateTableMap::COL_SEND_DT, $sendDt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateTableMap::COL_SEND_DT, $sendDt, $comparison);
    }

    /**
     * Filter the query on the send_stamp column
     *
     * Example usage:
     * <code>
     * $query->filterBySendStamp('2011-03-14'); // WHERE send_stamp = '2011-03-14'
     * $query->filterBySendStamp('now'); // WHERE send_stamp = '2011-03-14'
     * $query->filterBySendStamp(array('max' => 'yesterday')); // WHERE send_stamp > '2011-03-13'
     * </code>
     *
     * @param     mixed $sendStamp The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateQuery The current query, for fluid interface
     */
    public function filterBySendStamp($sendStamp = null, $comparison = null)
    {
        if (is_array($sendStamp)) {
            $useMinMax = false;
            if (isset($sendStamp['min'])) {
                $this->addUsingAlias(CareMailPrivateTableMap::COL_SEND_STAMP, $sendStamp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sendStamp['max'])) {
                $this->addUsingAlias(CareMailPrivateTableMap::COL_SEND_STAMP, $sendStamp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateTableMap::COL_SEND_STAMP, $sendStamp, $comparison);
    }

    /**
     * Filter the query on the uid column
     *
     * Example usage:
     * <code>
     * $query->filterByUid('fooValue');   // WHERE uid = 'fooValue'
     * $query->filterByUid('%fooValue%', Criteria::LIKE); // WHERE uid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $uid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateQuery The current query, for fluid interface
     */
    public function filterByUid($uid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($uid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateTableMap::COL_UID, $uid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareMailPrivate $careMailPrivate Object to remove from the list of results
     *
     * @return $this|ChildCareMailPrivateQuery The current query, for fluid interface
     */
    public function prune($careMailPrivate = null)
    {
        if ($careMailPrivate) {
            throw new LogicException('CareMailPrivate object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the care_mail_private table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareMailPrivateTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareMailPrivateTableMap::clearInstancePool();
            CareMailPrivateTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareMailPrivateTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareMailPrivateTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareMailPrivateTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareMailPrivateTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareMailPrivateQuery
