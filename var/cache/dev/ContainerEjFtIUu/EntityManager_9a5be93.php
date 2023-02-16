<?php

namespace ContainerEjFtIUu;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8f778 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerca254 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2242e = [
        
    ];

    public function getConnection()
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'getConnection', array(), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'getMetadataFactory', array(), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'getExpressionBuilder', array(), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'beginTransaction', array(), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'getCache', array(), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->getCache();
    }

    public function transactional($func)
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'transactional', array('func' => $func), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'wrapInTransaction', array('func' => $func), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'commit', array(), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->commit();
    }

    public function rollback()
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'rollback', array(), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'getClassMetadata', array('className' => $className), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'createQuery', array('dql' => $dql), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'createNamedQuery', array('name' => $name), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'createQueryBuilder', array(), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'flush', array('entity' => $entity), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'clear', array('entityName' => $entityName), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->clear($entityName);
    }

    public function close()
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'close', array(), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->close();
    }

    public function persist($entity)
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'persist', array('entity' => $entity), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'remove', array('entity' => $entity), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'detach', array('entity' => $entity), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'merge', array('entity' => $entity), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'getRepository', array('entityName' => $entityName), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'contains', array('entity' => $entity), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'getEventManager', array(), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'getConfiguration', array(), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'isOpen', array(), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'getUnitOfWork', array(), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'getProxyFactory', array(), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'initializeObject', array('obj' => $obj), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'getFilters', array(), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'isFiltersStateClean', array(), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'hasFilters', array(), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return $this->valueHolder8f778->hasFilters();
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

        $instance->initializerca254 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder8f778) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8f778 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8f778->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, '__get', ['name' => $name], $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        if (isset(self::$publicProperties2242e[$name])) {
            return $this->valueHolder8f778->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f778;

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

        $targetObject = $this->valueHolder8f778;
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
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f778;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8f778;
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
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, '__isset', array('name' => $name), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f778;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8f778;
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
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, '__unset', array('name' => $name), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f778;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8f778;
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
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, '__clone', array(), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        $this->valueHolder8f778 = clone $this->valueHolder8f778;
    }

    public function __sleep()
    {
        $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, '__sleep', array(), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;

        return array('valueHolder8f778');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerca254 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerca254;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerca254 && ($this->initializerca254->__invoke($valueHolder8f778, $this, 'initializeProxy', array(), $this->initializerca254) || 1) && $this->valueHolder8f778 = $valueHolder8f778;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8f778;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8f778;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
