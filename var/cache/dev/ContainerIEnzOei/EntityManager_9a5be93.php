<?php

namespace ContainerIEnzOei;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd2a84 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere264a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf8211 = [
        
    ];

    public function getConnection()
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'getConnection', array(), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'getMetadataFactory', array(), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'getExpressionBuilder', array(), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'beginTransaction', array(), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'getCache', array(), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->getCache();
    }

    public function transactional($func)
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'transactional', array('func' => $func), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'wrapInTransaction', array('func' => $func), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'commit', array(), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->commit();
    }

    public function rollback()
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'rollback', array(), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'getClassMetadata', array('className' => $className), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'createQuery', array('dql' => $dql), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'createNamedQuery', array('name' => $name), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'createQueryBuilder', array(), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'flush', array('entity' => $entity), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'clear', array('entityName' => $entityName), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->clear($entityName);
    }

    public function close()
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'close', array(), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->close();
    }

    public function persist($entity)
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'persist', array('entity' => $entity), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'remove', array('entity' => $entity), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'detach', array('entity' => $entity), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'merge', array('entity' => $entity), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'getRepository', array('entityName' => $entityName), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'contains', array('entity' => $entity), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'getEventManager', array(), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'getConfiguration', array(), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'isOpen', array(), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'getUnitOfWork', array(), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'getProxyFactory', array(), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'initializeObject', array('obj' => $obj), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'getFilters', array(), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'isFiltersStateClean', array(), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'hasFilters', array(), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return $this->valueHolderd2a84->hasFilters();
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

        $instance->initializere264a = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolderd2a84) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd2a84 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd2a84->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, '__get', ['name' => $name], $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        if (isset(self::$publicPropertiesf8211[$name])) {
            return $this->valueHolderd2a84->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2a84;

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

        $targetObject = $this->valueHolderd2a84;
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
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2a84;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd2a84;
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
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, '__isset', array('name' => $name), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2a84;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd2a84;
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
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, '__unset', array('name' => $name), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2a84;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd2a84;
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
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, '__clone', array(), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        $this->valueHolderd2a84 = clone $this->valueHolderd2a84;
    }

    public function __sleep()
    {
        $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, '__sleep', array(), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;

        return array('valueHolderd2a84');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere264a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere264a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere264a && ($this->initializere264a->__invoke($valueHolderd2a84, $this, 'initializeProxy', array(), $this->initializere264a) || 1) && $this->valueHolderd2a84 = $valueHolderd2a84;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd2a84;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd2a84;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
