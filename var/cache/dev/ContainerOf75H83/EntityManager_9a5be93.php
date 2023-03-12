<?php

namespace ContainerOf75H83;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderda6ae = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdbb30 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf6e7f = [
        
    ];

    public function getConnection()
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'getConnection', array(), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'getMetadataFactory', array(), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'getExpressionBuilder', array(), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'beginTransaction', array(), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'getCache', array(), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'transactional', array('func' => $func), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'commit', array(), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->commit();
    }

    public function rollback()
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'rollback', array(), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'getClassMetadata', array('className' => $className), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'createQuery', array('dql' => $dql), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'createNamedQuery', array('name' => $name), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'createQueryBuilder', array(), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'flush', array('entity' => $entity), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'clear', array('entityName' => $entityName), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->clear($entityName);
    }

    public function close()
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'close', array(), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->close();
    }

    public function persist($entity)
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'persist', array('entity' => $entity), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'remove', array('entity' => $entity), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'detach', array('entity' => $entity), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'merge', array('entity' => $entity), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'contains', array('entity' => $entity), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'getEventManager', array(), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'getConfiguration', array(), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'isOpen', array(), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'getUnitOfWork', array(), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'getProxyFactory', array(), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'initializeObject', array('obj' => $obj), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'getFilters', array(), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'isFiltersStateClean', array(), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'hasFilters', array(), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return $this->valueHolderda6ae->hasFilters();
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

        $instance->initializerdbb30 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolderda6ae) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderda6ae = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderda6ae->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, '__get', ['name' => $name], $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        if (isset(self::$publicPropertiesf6e7f[$name])) {
            return $this->valueHolderda6ae->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderda6ae;

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

        $targetObject = $this->valueHolderda6ae;
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
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderda6ae;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderda6ae;
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
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, '__isset', array('name' => $name), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderda6ae;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderda6ae;
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
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, '__unset', array('name' => $name), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderda6ae;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderda6ae;
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
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, '__clone', array(), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        $this->valueHolderda6ae = clone $this->valueHolderda6ae;
    }

    public function __sleep()
    {
        $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, '__sleep', array(), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;

        return array('valueHolderda6ae');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdbb30 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdbb30;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdbb30 && ($this->initializerdbb30->__invoke($valueHolderda6ae, $this, 'initializeProxy', array(), $this->initializerdbb30) || 1) && $this->valueHolderda6ae = $valueHolderda6ae;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderda6ae;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderda6ae;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
