<?php

namespace Container928fpQJ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc6902 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3920d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties36621 = [
        
    ];

    public function getConnection()
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'getConnection', array(), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'getMetadataFactory', array(), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'getExpressionBuilder', array(), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'beginTransaction', array(), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'getCache', array(), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'transactional', array('func' => $func), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'commit', array(), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->commit();
    }

    public function rollback()
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'rollback', array(), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'getClassMetadata', array('className' => $className), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'createQuery', array('dql' => $dql), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'createNamedQuery', array('name' => $name), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'createQueryBuilder', array(), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'flush', array('entity' => $entity), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'clear', array('entityName' => $entityName), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->clear($entityName);
    }

    public function close()
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'close', array(), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->close();
    }

    public function persist($entity)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'persist', array('entity' => $entity), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'remove', array('entity' => $entity), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'detach', array('entity' => $entity), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'merge', array('entity' => $entity), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'contains', array('entity' => $entity), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'getEventManager', array(), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'getConfiguration', array(), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'isOpen', array(), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'getUnitOfWork', array(), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'getProxyFactory', array(), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'initializeObject', array('obj' => $obj), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'getFilters', array(), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'isFiltersStateClean', array(), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'hasFilters', array(), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return $this->valueHolderc6902->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer3920d = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolderc6902) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc6902 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc6902->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, '__get', ['name' => $name], $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        if (isset(self::$publicProperties36621[$name])) {
            return $this->valueHolderc6902->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc6902;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc6902;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc6902;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc6902;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, '__isset', array('name' => $name), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc6902;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc6902;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, '__unset', array('name' => $name), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc6902;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc6902;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, '__clone', array(), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        $this->valueHolderc6902 = clone $this->valueHolderc6902;
    }

    public function __sleep()
    {
        $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, '__sleep', array(), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;

        return array('valueHolderc6902');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3920d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3920d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3920d && ($this->initializer3920d->__invoke($valueHolderc6902, $this, 'initializeProxy', array(), $this->initializer3920d) || 1) && $this->valueHolderc6902 = $valueHolderc6902;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc6902;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc6902;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
