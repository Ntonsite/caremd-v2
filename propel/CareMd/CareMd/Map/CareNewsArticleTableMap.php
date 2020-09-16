<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareNewsArticle;
use CareMd\CareMd\CareNewsArticleQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'care_news_article' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareNewsArticleTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareNewsArticleTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_news_article';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareNewsArticle';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareNewsArticle';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 22;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 22;

    /**
     * the column name for the nr field
     */
    const COL_NR = 'care_news_article.nr';

    /**
     * the column name for the lang field
     */
    const COL_LANG = 'care_news_article.lang';

    /**
     * the column name for the dept_nr field
     */
    const COL_DEPT_NR = 'care_news_article.dept_nr';

    /**
     * the column name for the category field
     */
    const COL_CATEGORY = 'care_news_article.category';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_news_article.status';

    /**
     * the column name for the title field
     */
    const COL_TITLE = 'care_news_article.title';

    /**
     * the column name for the preface field
     */
    const COL_PREFACE = 'care_news_article.preface';

    /**
     * the column name for the body field
     */
    const COL_BODY = 'care_news_article.body';

    /**
     * the column name for the pic field
     */
    const COL_PIC = 'care_news_article.pic';

    /**
     * the column name for the pic_mime field
     */
    const COL_PIC_MIME = 'care_news_article.pic_mime';

    /**
     * the column name for the art_num field
     */
    const COL_ART_NUM = 'care_news_article.art_num';

    /**
     * the column name for the head_file field
     */
    const COL_HEAD_FILE = 'care_news_article.head_file';

    /**
     * the column name for the main_file field
     */
    const COL_MAIN_FILE = 'care_news_article.main_file';

    /**
     * the column name for the pic_file field
     */
    const COL_PIC_FILE = 'care_news_article.pic_file';

    /**
     * the column name for the author field
     */
    const COL_AUTHOR = 'care_news_article.author';

    /**
     * the column name for the submit_date field
     */
    const COL_SUBMIT_DATE = 'care_news_article.submit_date';

    /**
     * the column name for the encode_date field
     */
    const COL_ENCODE_DATE = 'care_news_article.encode_date';

    /**
     * the column name for the publish_date field
     */
    const COL_PUBLISH_DATE = 'care_news_article.publish_date';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_news_article.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_news_article.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_news_article.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_news_article.create_time';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Nr', 'Lang', 'DeptNr', 'Category', 'Status', 'Title', 'Preface', 'Body', 'Pic', 'PicMime', 'ArtNum', 'HeadFile', 'MainFile', 'PicFile', 'Author', 'SubmitDate', 'EncodeDate', 'PublishDate', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'lang', 'deptNr', 'category', 'status', 'title', 'preface', 'body', 'pic', 'picMime', 'artNum', 'headFile', 'mainFile', 'picFile', 'author', 'submitDate', 'encodeDate', 'publishDate', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareNewsArticleTableMap::COL_NR, CareNewsArticleTableMap::COL_LANG, CareNewsArticleTableMap::COL_DEPT_NR, CareNewsArticleTableMap::COL_CATEGORY, CareNewsArticleTableMap::COL_STATUS, CareNewsArticleTableMap::COL_TITLE, CareNewsArticleTableMap::COL_PREFACE, CareNewsArticleTableMap::COL_BODY, CareNewsArticleTableMap::COL_PIC, CareNewsArticleTableMap::COL_PIC_MIME, CareNewsArticleTableMap::COL_ART_NUM, CareNewsArticleTableMap::COL_HEAD_FILE, CareNewsArticleTableMap::COL_MAIN_FILE, CareNewsArticleTableMap::COL_PIC_FILE, CareNewsArticleTableMap::COL_AUTHOR, CareNewsArticleTableMap::COL_SUBMIT_DATE, CareNewsArticleTableMap::COL_ENCODE_DATE, CareNewsArticleTableMap::COL_PUBLISH_DATE, CareNewsArticleTableMap::COL_MODIFY_ID, CareNewsArticleTableMap::COL_MODIFY_TIME, CareNewsArticleTableMap::COL_CREATE_ID, CareNewsArticleTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'lang', 'dept_nr', 'category', 'status', 'title', 'preface', 'body', 'pic', 'pic_mime', 'art_num', 'head_file', 'main_file', 'pic_file', 'author', 'submit_date', 'encode_date', 'publish_date', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'Lang' => 1, 'DeptNr' => 2, 'Category' => 3, 'Status' => 4, 'Title' => 5, 'Preface' => 6, 'Body' => 7, 'Pic' => 8, 'PicMime' => 9, 'ArtNum' => 10, 'HeadFile' => 11, 'MainFile' => 12, 'PicFile' => 13, 'Author' => 14, 'SubmitDate' => 15, 'EncodeDate' => 16, 'PublishDate' => 17, 'ModifyId' => 18, 'ModifyTime' => 19, 'CreateId' => 20, 'CreateTime' => 21, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'lang' => 1, 'deptNr' => 2, 'category' => 3, 'status' => 4, 'title' => 5, 'preface' => 6, 'body' => 7, 'pic' => 8, 'picMime' => 9, 'artNum' => 10, 'headFile' => 11, 'mainFile' => 12, 'picFile' => 13, 'author' => 14, 'submitDate' => 15, 'encodeDate' => 16, 'publishDate' => 17, 'modifyId' => 18, 'modifyTime' => 19, 'createId' => 20, 'createTime' => 21, ),
        self::TYPE_COLNAME       => array(CareNewsArticleTableMap::COL_NR => 0, CareNewsArticleTableMap::COL_LANG => 1, CareNewsArticleTableMap::COL_DEPT_NR => 2, CareNewsArticleTableMap::COL_CATEGORY => 3, CareNewsArticleTableMap::COL_STATUS => 4, CareNewsArticleTableMap::COL_TITLE => 5, CareNewsArticleTableMap::COL_PREFACE => 6, CareNewsArticleTableMap::COL_BODY => 7, CareNewsArticleTableMap::COL_PIC => 8, CareNewsArticleTableMap::COL_PIC_MIME => 9, CareNewsArticleTableMap::COL_ART_NUM => 10, CareNewsArticleTableMap::COL_HEAD_FILE => 11, CareNewsArticleTableMap::COL_MAIN_FILE => 12, CareNewsArticleTableMap::COL_PIC_FILE => 13, CareNewsArticleTableMap::COL_AUTHOR => 14, CareNewsArticleTableMap::COL_SUBMIT_DATE => 15, CareNewsArticleTableMap::COL_ENCODE_DATE => 16, CareNewsArticleTableMap::COL_PUBLISH_DATE => 17, CareNewsArticleTableMap::COL_MODIFY_ID => 18, CareNewsArticleTableMap::COL_MODIFY_TIME => 19, CareNewsArticleTableMap::COL_CREATE_ID => 20, CareNewsArticleTableMap::COL_CREATE_TIME => 21, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'lang' => 1, 'dept_nr' => 2, 'category' => 3, 'status' => 4, 'title' => 5, 'preface' => 6, 'body' => 7, 'pic' => 8, 'pic_mime' => 9, 'art_num' => 10, 'head_file' => 11, 'main_file' => 12, 'pic_file' => 13, 'author' => 14, 'submit_date' => 15, 'encode_date' => 16, 'publish_date' => 17, 'modify_id' => 18, 'modify_time' => 19, 'create_id' => 20, 'create_time' => 21, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('care_news_article');
        $this->setPhpName('CareNewsArticle');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareNewsArticle');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'INTEGER', true, null, null);
        $this->addColumn('lang', 'Lang', 'VARCHAR', true, 10, 'en');
        $this->addColumn('dept_nr', 'DeptNr', 'SMALLINT', true, 5, 0);
        $this->addColumn('category', 'Category', 'VARCHAR', true, 255, null);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 10, 'pending');
        $this->addColumn('title', 'Title', 'VARCHAR', true, 255, '');
        $this->addColumn('preface', 'Preface', 'LONGVARCHAR', true, null, null);
        $this->addColumn('body', 'Body', 'LONGVARCHAR', true, null, null);
        $this->addColumn('pic', 'Pic', 'BLOB', false, null, null);
        $this->addColumn('pic_mime', 'PicMime', 'VARCHAR', false, 4, null);
        $this->addColumn('art_num', 'ArtNum', 'BOOLEAN', true, 1, false);
        $this->addColumn('head_file', 'HeadFile', 'VARCHAR', true, 255, null);
        $this->addColumn('main_file', 'MainFile', 'VARCHAR', true, 255, null);
        $this->addColumn('pic_file', 'PicFile', 'VARCHAR', true, 255, null);
        $this->addColumn('author', 'Author', 'VARCHAR', true, 30, '');
        $this->addColumn('submit_date', 'SubmitDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('encode_date', 'EncodeDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('publish_date', 'PublishDate', 'DATE', true, null, '0000-00-00');
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', true, 30, '');
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('create_id', 'CreateId', 'VARCHAR', true, 30, '');
        $this->addColumn('create_time', 'CreateTime', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? CareNewsArticleTableMap::CLASS_DEFAULT : CareNewsArticleTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (CareNewsArticle object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareNewsArticleTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareNewsArticleTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareNewsArticleTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareNewsArticleTableMap::OM_CLASS;
            /** @var CareNewsArticle $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareNewsArticleTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = CareNewsArticleTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareNewsArticleTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareNewsArticle $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareNewsArticleTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(CareNewsArticleTableMap::COL_NR);
            $criteria->addSelectColumn(CareNewsArticleTableMap::COL_LANG);
            $criteria->addSelectColumn(CareNewsArticleTableMap::COL_DEPT_NR);
            $criteria->addSelectColumn(CareNewsArticleTableMap::COL_CATEGORY);
            $criteria->addSelectColumn(CareNewsArticleTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareNewsArticleTableMap::COL_TITLE);
            $criteria->addSelectColumn(CareNewsArticleTableMap::COL_PREFACE);
            $criteria->addSelectColumn(CareNewsArticleTableMap::COL_BODY);
            $criteria->addSelectColumn(CareNewsArticleTableMap::COL_PIC);
            $criteria->addSelectColumn(CareNewsArticleTableMap::COL_PIC_MIME);
            $criteria->addSelectColumn(CareNewsArticleTableMap::COL_ART_NUM);
            $criteria->addSelectColumn(CareNewsArticleTableMap::COL_HEAD_FILE);
            $criteria->addSelectColumn(CareNewsArticleTableMap::COL_MAIN_FILE);
            $criteria->addSelectColumn(CareNewsArticleTableMap::COL_PIC_FILE);
            $criteria->addSelectColumn(CareNewsArticleTableMap::COL_AUTHOR);
            $criteria->addSelectColumn(CareNewsArticleTableMap::COL_SUBMIT_DATE);
            $criteria->addSelectColumn(CareNewsArticleTableMap::COL_ENCODE_DATE);
            $criteria->addSelectColumn(CareNewsArticleTableMap::COL_PUBLISH_DATE);
            $criteria->addSelectColumn(CareNewsArticleTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareNewsArticleTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareNewsArticleTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareNewsArticleTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.lang');
            $criteria->addSelectColumn($alias . '.dept_nr');
            $criteria->addSelectColumn($alias . '.category');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.title');
            $criteria->addSelectColumn($alias . '.preface');
            $criteria->addSelectColumn($alias . '.body');
            $criteria->addSelectColumn($alias . '.pic');
            $criteria->addSelectColumn($alias . '.pic_mime');
            $criteria->addSelectColumn($alias . '.art_num');
            $criteria->addSelectColumn($alias . '.head_file');
            $criteria->addSelectColumn($alias . '.main_file');
            $criteria->addSelectColumn($alias . '.pic_file');
            $criteria->addSelectColumn($alias . '.author');
            $criteria->addSelectColumn($alias . '.submit_date');
            $criteria->addSelectColumn($alias . '.encode_date');
            $criteria->addSelectColumn($alias . '.publish_date');
            $criteria->addSelectColumn($alias . '.modify_id');
            $criteria->addSelectColumn($alias . '.modify_time');
            $criteria->addSelectColumn($alias . '.create_id');
            $criteria->addSelectColumn($alias . '.create_time');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(CareNewsArticleTableMap::DATABASE_NAME)->getTable(CareNewsArticleTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareNewsArticleTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareNewsArticleTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareNewsArticleTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareNewsArticle or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareNewsArticle object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareNewsArticleTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareNewsArticle) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareNewsArticleTableMap::DATABASE_NAME);
            $criteria->add(CareNewsArticleTableMap::COL_NR, (array) $values, Criteria::IN);
        }

        $query = CareNewsArticleQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareNewsArticleTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareNewsArticleTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_news_article table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareNewsArticleQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareNewsArticle or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareNewsArticle object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareNewsArticleTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareNewsArticle object
        }

        if ($criteria->containsKey(CareNewsArticleTableMap::COL_NR) && $criteria->keyContainsValue(CareNewsArticleTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareNewsArticleTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareNewsArticleQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareNewsArticleTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareNewsArticleTableMap::buildTableMap();
