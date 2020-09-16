<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareMailPrivateUsers as ChildCareMailPrivateUsers;
use CareMd\CareMd\CareMailPrivateUsersQuery as ChildCareMailPrivateUsersQuery;
use CareMd\CareMd\Map\CareMailPrivateUsersTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_mail_private_users' table.
 *
 *
 *
 * @method     ChildCareMailPrivateUsersQuery orderByUserName($order = Criteria::ASC) Order by the user_name column
 * @method     ChildCareMailPrivateUsersQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     ChildCareMailPrivateUsersQuery orderByAlias($order = Criteria::ASC) Order by the alias column
 * @method     ChildCareMailPrivateUsersQuery orderByPw($order = Criteria::ASC) Order by the pw column
 * @method     ChildCareMailPrivateUsersQuery orderByInbox($order = Criteria::ASC) Order by the inbox column
 * @method     ChildCareMailPrivateUsersQuery orderBySent($order = Criteria::ASC) Order by the sent column
 * @method     ChildCareMailPrivateUsersQuery orderByDrafts($order = Criteria::ASC) Order by the drafts column
 * @method     ChildCareMailPrivateUsersQuery orderByTrash($order = Criteria::ASC) Order by the trash column
 * @method     ChildCareMailPrivateUsersQuery orderByLastcheck($order = Criteria::ASC) Order by the lastcheck column
 * @method     ChildCareMailPrivateUsersQuery orderByLockFlag($order = Criteria::ASC) Order by the lock_flag column
 * @method     ChildCareMailPrivateUsersQuery orderByAddrBook($order = Criteria::ASC) Order by the addr_book column
 * @method     ChildCareMailPrivateUsersQuery orderByAddrQuick($order = Criteria::ASC) Order by the addr_quick column
 * @method     ChildCareMailPrivateUsersQuery orderBySecretQ($order = Criteria::ASC) Order by the secret_q column
 * @method     ChildCareMailPrivateUsersQuery orderBySecretQAns($order = Criteria::ASC) Order by the secret_q_ans column
 * @method     ChildCareMailPrivateUsersQuery orderByPublic($order = Criteria::ASC) Order by the public column
 * @method     ChildCareMailPrivateUsersQuery orderBySig($order = Criteria::ASC) Order by the sig column
 * @method     ChildCareMailPrivateUsersQuery orderByAppendSig($order = Criteria::ASC) Order by the append_sig column
 *
 * @method     ChildCareMailPrivateUsersQuery groupByUserName() Group by the user_name column
 * @method     ChildCareMailPrivateUsersQuery groupByEmail() Group by the email column
 * @method     ChildCareMailPrivateUsersQuery groupByAlias() Group by the alias column
 * @method     ChildCareMailPrivateUsersQuery groupByPw() Group by the pw column
 * @method     ChildCareMailPrivateUsersQuery groupByInbox() Group by the inbox column
 * @method     ChildCareMailPrivateUsersQuery groupBySent() Group by the sent column
 * @method     ChildCareMailPrivateUsersQuery groupByDrafts() Group by the drafts column
 * @method     ChildCareMailPrivateUsersQuery groupByTrash() Group by the trash column
 * @method     ChildCareMailPrivateUsersQuery groupByLastcheck() Group by the lastcheck column
 * @method     ChildCareMailPrivateUsersQuery groupByLockFlag() Group by the lock_flag column
 * @method     ChildCareMailPrivateUsersQuery groupByAddrBook() Group by the addr_book column
 * @method     ChildCareMailPrivateUsersQuery groupByAddrQuick() Group by the addr_quick column
 * @method     ChildCareMailPrivateUsersQuery groupBySecretQ() Group by the secret_q column
 * @method     ChildCareMailPrivateUsersQuery groupBySecretQAns() Group by the secret_q_ans column
 * @method     ChildCareMailPrivateUsersQuery groupByPublic() Group by the public column
 * @method     ChildCareMailPrivateUsersQuery groupBySig() Group by the sig column
 * @method     ChildCareMailPrivateUsersQuery groupByAppendSig() Group by the append_sig column
 *
 * @method     ChildCareMailPrivateUsersQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareMailPrivateUsersQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareMailPrivateUsersQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareMailPrivateUsersQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareMailPrivateUsersQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareMailPrivateUsersQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareMailPrivateUsers findOne(ConnectionInterface $con = null) Return the first ChildCareMailPrivateUsers matching the query
 * @method     ChildCareMailPrivateUsers findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareMailPrivateUsers matching the query, or a new ChildCareMailPrivateUsers object populated from the query conditions when no match is found
 *
 * @method     ChildCareMailPrivateUsers findOneByUserName(string $user_name) Return the first ChildCareMailPrivateUsers filtered by the user_name column
 * @method     ChildCareMailPrivateUsers findOneByEmail(string $email) Return the first ChildCareMailPrivateUsers filtered by the email column
 * @method     ChildCareMailPrivateUsers findOneByAlias(string $alias) Return the first ChildCareMailPrivateUsers filtered by the alias column
 * @method     ChildCareMailPrivateUsers findOneByPw(string $pw) Return the first ChildCareMailPrivateUsers filtered by the pw column
 * @method     ChildCareMailPrivateUsers findOneByInbox(string $inbox) Return the first ChildCareMailPrivateUsers filtered by the inbox column
 * @method     ChildCareMailPrivateUsers findOneBySent(string $sent) Return the first ChildCareMailPrivateUsers filtered by the sent column
 * @method     ChildCareMailPrivateUsers findOneByDrafts(string $drafts) Return the first ChildCareMailPrivateUsers filtered by the drafts column
 * @method     ChildCareMailPrivateUsers findOneByTrash(string $trash) Return the first ChildCareMailPrivateUsers filtered by the trash column
 * @method     ChildCareMailPrivateUsers findOneByLastcheck(string $lastcheck) Return the first ChildCareMailPrivateUsers filtered by the lastcheck column
 * @method     ChildCareMailPrivateUsers findOneByLockFlag(int $lock_flag) Return the first ChildCareMailPrivateUsers filtered by the lock_flag column
 * @method     ChildCareMailPrivateUsers findOneByAddrBook(string $addr_book) Return the first ChildCareMailPrivateUsers filtered by the addr_book column
 * @method     ChildCareMailPrivateUsers findOneByAddrQuick(string $addr_quick) Return the first ChildCareMailPrivateUsers filtered by the addr_quick column
 * @method     ChildCareMailPrivateUsers findOneBySecretQ(string $secret_q) Return the first ChildCareMailPrivateUsers filtered by the secret_q column
 * @method     ChildCareMailPrivateUsers findOneBySecretQAns(string $secret_q_ans) Return the first ChildCareMailPrivateUsers filtered by the secret_q_ans column
 * @method     ChildCareMailPrivateUsers findOneByPublic(int $public) Return the first ChildCareMailPrivateUsers filtered by the public column
 * @method     ChildCareMailPrivateUsers findOneBySig(string $sig) Return the first ChildCareMailPrivateUsers filtered by the sig column
 * @method     ChildCareMailPrivateUsers findOneByAppendSig(int $append_sig) Return the first ChildCareMailPrivateUsers filtered by the append_sig column *

 * @method     ChildCareMailPrivateUsers requirePk($key, ConnectionInterface $con = null) Return the ChildCareMailPrivateUsers by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivateUsers requireOne(ConnectionInterface $con = null) Return the first ChildCareMailPrivateUsers matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareMailPrivateUsers requireOneByUserName(string $user_name) Return the first ChildCareMailPrivateUsers filtered by the user_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivateUsers requireOneByEmail(string $email) Return the first ChildCareMailPrivateUsers filtered by the email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivateUsers requireOneByAlias(string $alias) Return the first ChildCareMailPrivateUsers filtered by the alias column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivateUsers requireOneByPw(string $pw) Return the first ChildCareMailPrivateUsers filtered by the pw column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivateUsers requireOneByInbox(string $inbox) Return the first ChildCareMailPrivateUsers filtered by the inbox column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivateUsers requireOneBySent(string $sent) Return the first ChildCareMailPrivateUsers filtered by the sent column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivateUsers requireOneByDrafts(string $drafts) Return the first ChildCareMailPrivateUsers filtered by the drafts column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivateUsers requireOneByTrash(string $trash) Return the first ChildCareMailPrivateUsers filtered by the trash column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivateUsers requireOneByLastcheck(string $lastcheck) Return the first ChildCareMailPrivateUsers filtered by the lastcheck column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivateUsers requireOneByLockFlag(int $lock_flag) Return the first ChildCareMailPrivateUsers filtered by the lock_flag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivateUsers requireOneByAddrBook(string $addr_book) Return the first ChildCareMailPrivateUsers filtered by the addr_book column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivateUsers requireOneByAddrQuick(string $addr_quick) Return the first ChildCareMailPrivateUsers filtered by the addr_quick column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivateUsers requireOneBySecretQ(string $secret_q) Return the first ChildCareMailPrivateUsers filtered by the secret_q column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivateUsers requireOneBySecretQAns(string $secret_q_ans) Return the first ChildCareMailPrivateUsers filtered by the secret_q_ans column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivateUsers requireOneByPublic(int $public) Return the first ChildCareMailPrivateUsers filtered by the public column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivateUsers requireOneBySig(string $sig) Return the first ChildCareMailPrivateUsers filtered by the sig column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMailPrivateUsers requireOneByAppendSig(int $append_sig) Return the first ChildCareMailPrivateUsers filtered by the append_sig column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareMailPrivateUsers[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareMailPrivateUsers objects based on current ModelCriteria
 * @method     ChildCareMailPrivateUsers[]|ObjectCollection findByUserName(string $user_name) Return ChildCareMailPrivateUsers objects filtered by the user_name column
 * @method     ChildCareMailPrivateUsers[]|ObjectCollection findByEmail(string $email) Return ChildCareMailPrivateUsers objects filtered by the email column
 * @method     ChildCareMailPrivateUsers[]|ObjectCollection findByAlias(string $alias) Return ChildCareMailPrivateUsers objects filtered by the alias column
 * @method     ChildCareMailPrivateUsers[]|ObjectCollection findByPw(string $pw) Return ChildCareMailPrivateUsers objects filtered by the pw column
 * @method     ChildCareMailPrivateUsers[]|ObjectCollection findByInbox(string $inbox) Return ChildCareMailPrivateUsers objects filtered by the inbox column
 * @method     ChildCareMailPrivateUsers[]|ObjectCollection findBySent(string $sent) Return ChildCareMailPrivateUsers objects filtered by the sent column
 * @method     ChildCareMailPrivateUsers[]|ObjectCollection findByDrafts(string $drafts) Return ChildCareMailPrivateUsers objects filtered by the drafts column
 * @method     ChildCareMailPrivateUsers[]|ObjectCollection findByTrash(string $trash) Return ChildCareMailPrivateUsers objects filtered by the trash column
 * @method     ChildCareMailPrivateUsers[]|ObjectCollection findByLastcheck(string $lastcheck) Return ChildCareMailPrivateUsers objects filtered by the lastcheck column
 * @method     ChildCareMailPrivateUsers[]|ObjectCollection findByLockFlag(int $lock_flag) Return ChildCareMailPrivateUsers objects filtered by the lock_flag column
 * @method     ChildCareMailPrivateUsers[]|ObjectCollection findByAddrBook(string $addr_book) Return ChildCareMailPrivateUsers objects filtered by the addr_book column
 * @method     ChildCareMailPrivateUsers[]|ObjectCollection findByAddrQuick(string $addr_quick) Return ChildCareMailPrivateUsers objects filtered by the addr_quick column
 * @method     ChildCareMailPrivateUsers[]|ObjectCollection findBySecretQ(string $secret_q) Return ChildCareMailPrivateUsers objects filtered by the secret_q column
 * @method     ChildCareMailPrivateUsers[]|ObjectCollection findBySecretQAns(string $secret_q_ans) Return ChildCareMailPrivateUsers objects filtered by the secret_q_ans column
 * @method     ChildCareMailPrivateUsers[]|ObjectCollection findByPublic(int $public) Return ChildCareMailPrivateUsers objects filtered by the public column
 * @method     ChildCareMailPrivateUsers[]|ObjectCollection findBySig(string $sig) Return ChildCareMailPrivateUsers objects filtered by the sig column
 * @method     ChildCareMailPrivateUsers[]|ObjectCollection findByAppendSig(int $append_sig) Return ChildCareMailPrivateUsers objects filtered by the append_sig column
 * @method     ChildCareMailPrivateUsers[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareMailPrivateUsersQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareMailPrivateUsersQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareMailPrivateUsers', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareMailPrivateUsersQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareMailPrivateUsersQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareMailPrivateUsersQuery) {
            return $criteria;
        }
        $query = new ChildCareMailPrivateUsersQuery();
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
     * @return ChildCareMailPrivateUsers|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareMailPrivateUsersTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareMailPrivateUsersTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCareMailPrivateUsers A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT user_name, email, alias, pw, inbox, sent, drafts, trash, lastcheck, lock_flag, addr_book, addr_quick, secret_q, secret_q_ans, public, sig, append_sig FROM care_mail_private_users WHERE email = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCareMailPrivateUsers $obj */
            $obj = new ChildCareMailPrivateUsers();
            $obj->hydrate($row);
            CareMailPrivateUsersTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildCareMailPrivateUsers|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCareMailPrivateUsersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_EMAIL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareMailPrivateUsersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_EMAIL, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the user_name column
     *
     * Example usage:
     * <code>
     * $query->filterByUserName('fooValue');   // WHERE user_name = 'fooValue'
     * $query->filterByUserName('%fooValue%', Criteria::LIKE); // WHERE user_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateUsersQuery The current query, for fluid interface
     */
    public function filterByUserName($userName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_USER_NAME, $userName, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%', Criteria::LIKE); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateUsersQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the alias column
     *
     * Example usage:
     * <code>
     * $query->filterByAlias('fooValue');   // WHERE alias = 'fooValue'
     * $query->filterByAlias('%fooValue%', Criteria::LIKE); // WHERE alias LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alias The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateUsersQuery The current query, for fluid interface
     */
    public function filterByAlias($alias = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alias)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_ALIAS, $alias, $comparison);
    }

    /**
     * Filter the query on the pw column
     *
     * Example usage:
     * <code>
     * $query->filterByPw('fooValue');   // WHERE pw = 'fooValue'
     * $query->filterByPw('%fooValue%', Criteria::LIKE); // WHERE pw LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pw The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateUsersQuery The current query, for fluid interface
     */
    public function filterByPw($pw = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pw)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_PW, $pw, $comparison);
    }

    /**
     * Filter the query on the inbox column
     *
     * Example usage:
     * <code>
     * $query->filterByInbox('fooValue');   // WHERE inbox = 'fooValue'
     * $query->filterByInbox('%fooValue%', Criteria::LIKE); // WHERE inbox LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inbox The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateUsersQuery The current query, for fluid interface
     */
    public function filterByInbox($inbox = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inbox)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_INBOX, $inbox, $comparison);
    }

    /**
     * Filter the query on the sent column
     *
     * Example usage:
     * <code>
     * $query->filterBySent('fooValue');   // WHERE sent = 'fooValue'
     * $query->filterBySent('%fooValue%', Criteria::LIKE); // WHERE sent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sent The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateUsersQuery The current query, for fluid interface
     */
    public function filterBySent($sent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sent)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_SENT, $sent, $comparison);
    }

    /**
     * Filter the query on the drafts column
     *
     * Example usage:
     * <code>
     * $query->filterByDrafts('fooValue');   // WHERE drafts = 'fooValue'
     * $query->filterByDrafts('%fooValue%', Criteria::LIKE); // WHERE drafts LIKE '%fooValue%'
     * </code>
     *
     * @param     string $drafts The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateUsersQuery The current query, for fluid interface
     */
    public function filterByDrafts($drafts = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($drafts)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_DRAFTS, $drafts, $comparison);
    }

    /**
     * Filter the query on the trash column
     *
     * Example usage:
     * <code>
     * $query->filterByTrash('fooValue');   // WHERE trash = 'fooValue'
     * $query->filterByTrash('%fooValue%', Criteria::LIKE); // WHERE trash LIKE '%fooValue%'
     * </code>
     *
     * @param     string $trash The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateUsersQuery The current query, for fluid interface
     */
    public function filterByTrash($trash = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($trash)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_TRASH, $trash, $comparison);
    }

    /**
     * Filter the query on the lastcheck column
     *
     * Example usage:
     * <code>
     * $query->filterByLastcheck('2011-03-14'); // WHERE lastcheck = '2011-03-14'
     * $query->filterByLastcheck('now'); // WHERE lastcheck = '2011-03-14'
     * $query->filterByLastcheck(array('max' => 'yesterday')); // WHERE lastcheck > '2011-03-13'
     * </code>
     *
     * @param     mixed $lastcheck The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateUsersQuery The current query, for fluid interface
     */
    public function filterByLastcheck($lastcheck = null, $comparison = null)
    {
        if (is_array($lastcheck)) {
            $useMinMax = false;
            if (isset($lastcheck['min'])) {
                $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_LASTCHECK, $lastcheck['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastcheck['max'])) {
                $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_LASTCHECK, $lastcheck['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_LASTCHECK, $lastcheck, $comparison);
    }

    /**
     * Filter the query on the lock_flag column
     *
     * Example usage:
     * <code>
     * $query->filterByLockFlag(1234); // WHERE lock_flag = 1234
     * $query->filterByLockFlag(array(12, 34)); // WHERE lock_flag IN (12, 34)
     * $query->filterByLockFlag(array('min' => 12)); // WHERE lock_flag > 12
     * </code>
     *
     * @param     mixed $lockFlag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateUsersQuery The current query, for fluid interface
     */
    public function filterByLockFlag($lockFlag = null, $comparison = null)
    {
        if (is_array($lockFlag)) {
            $useMinMax = false;
            if (isset($lockFlag['min'])) {
                $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_LOCK_FLAG, $lockFlag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lockFlag['max'])) {
                $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_LOCK_FLAG, $lockFlag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_LOCK_FLAG, $lockFlag, $comparison);
    }

    /**
     * Filter the query on the addr_book column
     *
     * Example usage:
     * <code>
     * $query->filterByAddrBook('fooValue');   // WHERE addr_book = 'fooValue'
     * $query->filterByAddrBook('%fooValue%', Criteria::LIKE); // WHERE addr_book LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addrBook The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateUsersQuery The current query, for fluid interface
     */
    public function filterByAddrBook($addrBook = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addrBook)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_ADDR_BOOK, $addrBook, $comparison);
    }

    /**
     * Filter the query on the addr_quick column
     *
     * Example usage:
     * <code>
     * $query->filterByAddrQuick('fooValue');   // WHERE addr_quick = 'fooValue'
     * $query->filterByAddrQuick('%fooValue%', Criteria::LIKE); // WHERE addr_quick LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addrQuick The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateUsersQuery The current query, for fluid interface
     */
    public function filterByAddrQuick($addrQuick = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addrQuick)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_ADDR_QUICK, $addrQuick, $comparison);
    }

    /**
     * Filter the query on the secret_q column
     *
     * Example usage:
     * <code>
     * $query->filterBySecretQ('fooValue');   // WHERE secret_q = 'fooValue'
     * $query->filterBySecretQ('%fooValue%', Criteria::LIKE); // WHERE secret_q LIKE '%fooValue%'
     * </code>
     *
     * @param     string $secretQ The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateUsersQuery The current query, for fluid interface
     */
    public function filterBySecretQ($secretQ = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($secretQ)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_SECRET_Q, $secretQ, $comparison);
    }

    /**
     * Filter the query on the secret_q_ans column
     *
     * Example usage:
     * <code>
     * $query->filterBySecretQAns('fooValue');   // WHERE secret_q_ans = 'fooValue'
     * $query->filterBySecretQAns('%fooValue%', Criteria::LIKE); // WHERE secret_q_ans LIKE '%fooValue%'
     * </code>
     *
     * @param     string $secretQAns The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateUsersQuery The current query, for fluid interface
     */
    public function filterBySecretQAns($secretQAns = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($secretQAns)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_SECRET_Q_ANS, $secretQAns, $comparison);
    }

    /**
     * Filter the query on the public column
     *
     * Example usage:
     * <code>
     * $query->filterByPublic(1234); // WHERE public = 1234
     * $query->filterByPublic(array(12, 34)); // WHERE public IN (12, 34)
     * $query->filterByPublic(array('min' => 12)); // WHERE public > 12
     * </code>
     *
     * @param     mixed $public The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateUsersQuery The current query, for fluid interface
     */
    public function filterByPublic($public = null, $comparison = null)
    {
        if (is_array($public)) {
            $useMinMax = false;
            if (isset($public['min'])) {
                $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_PUBLIC, $public['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($public['max'])) {
                $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_PUBLIC, $public['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_PUBLIC, $public, $comparison);
    }

    /**
     * Filter the query on the sig column
     *
     * Example usage:
     * <code>
     * $query->filterBySig('fooValue');   // WHERE sig = 'fooValue'
     * $query->filterBySig('%fooValue%', Criteria::LIKE); // WHERE sig LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sig The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateUsersQuery The current query, for fluid interface
     */
    public function filterBySig($sig = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sig)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_SIG, $sig, $comparison);
    }

    /**
     * Filter the query on the append_sig column
     *
     * Example usage:
     * <code>
     * $query->filterByAppendSig(1234); // WHERE append_sig = 1234
     * $query->filterByAppendSig(array(12, 34)); // WHERE append_sig IN (12, 34)
     * $query->filterByAppendSig(array('min' => 12)); // WHERE append_sig > 12
     * </code>
     *
     * @param     mixed $appendSig The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareMailPrivateUsersQuery The current query, for fluid interface
     */
    public function filterByAppendSig($appendSig = null, $comparison = null)
    {
        if (is_array($appendSig)) {
            $useMinMax = false;
            if (isset($appendSig['min'])) {
                $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_APPEND_SIG, $appendSig['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appendSig['max'])) {
                $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_APPEND_SIG, $appendSig['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_APPEND_SIG, $appendSig, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareMailPrivateUsers $careMailPrivateUsers Object to remove from the list of results
     *
     * @return $this|ChildCareMailPrivateUsersQuery The current query, for fluid interface
     */
    public function prune($careMailPrivateUsers = null)
    {
        if ($careMailPrivateUsers) {
            $this->addUsingAlias(CareMailPrivateUsersTableMap::COL_EMAIL, $careMailPrivateUsers->getEmail(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_mail_private_users table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareMailPrivateUsersTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareMailPrivateUsersTableMap::clearInstancePool();
            CareMailPrivateUsersTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareMailPrivateUsersTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareMailPrivateUsersTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareMailPrivateUsersTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareMailPrivateUsersTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareMailPrivateUsersQuery
