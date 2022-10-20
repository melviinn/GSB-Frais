<?php

namespace ContainerWsZOHfF;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder013cc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5b3a4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties15699 = [
        
    ];

    public function getConnection()
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'getConnection', array(), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'getMetadataFactory', array(), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'getExpressionBuilder', array(), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'beginTransaction', array(), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'getCache', array(), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'transactional', array('func' => $func), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'commit', array(), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->commit();
    }

    public function rollback()
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'rollback', array(), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'getClassMetadata', array('className' => $className), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'createQuery', array('dql' => $dql), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'createNamedQuery', array('name' => $name), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'createQueryBuilder', array(), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'flush', array('entity' => $entity), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'clear', array('entityName' => $entityName), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->clear($entityName);
    }

    public function close()
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'close', array(), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->close();
    }

    public function persist($entity)
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'persist', array('entity' => $entity), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'remove', array('entity' => $entity), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'refresh', array('entity' => $entity), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'detach', array('entity' => $entity), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'merge', array('entity' => $entity), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'contains', array('entity' => $entity), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'getEventManager', array(), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'getConfiguration', array(), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'isOpen', array(), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'getUnitOfWork', array(), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'getProxyFactory', array(), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'initializeObject', array('obj' => $obj), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'getFilters', array(), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'isFiltersStateClean', array(), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'hasFilters', array(), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return $this->valueHolder013cc->hasFilters();
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

        $instance->initializer5b3a4 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder013cc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder013cc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder013cc->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, '__get', ['name' => $name], $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        if (isset(self::$publicProperties15699[$name])) {
            return $this->valueHolder013cc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder013cc;

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

        $targetObject = $this->valueHolder013cc;
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
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder013cc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder013cc;
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
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, '__isset', array('name' => $name), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder013cc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder013cc;
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
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, '__unset', array('name' => $name), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder013cc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder013cc;
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
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, '__clone', array(), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        $this->valueHolder013cc = clone $this->valueHolder013cc;
    }

    public function __sleep()
    {
        $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, '__sleep', array(), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;

        return array('valueHolder013cc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5b3a4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5b3a4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5b3a4 && ($this->initializer5b3a4->__invoke($valueHolder013cc, $this, 'initializeProxy', array(), $this->initializer5b3a4) || 1) && $this->valueHolder013cc = $valueHolder013cc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder013cc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder013cc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
