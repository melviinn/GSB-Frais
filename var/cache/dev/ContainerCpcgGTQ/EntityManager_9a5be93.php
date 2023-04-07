<?php

namespace ContainerCpcgGTQ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder64ba7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5b312 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf01db = [
        
    ];

    public function getConnection()
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'getConnection', array(), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'getMetadataFactory', array(), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'getExpressionBuilder', array(), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'beginTransaction', array(), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'getCache', array(), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'transactional', array('func' => $func), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'commit', array(), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->commit();
    }

    public function rollback()
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'rollback', array(), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'getClassMetadata', array('className' => $className), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'createQuery', array('dql' => $dql), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'createNamedQuery', array('name' => $name), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'createQueryBuilder', array(), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'flush', array('entity' => $entity), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'clear', array('entityName' => $entityName), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->clear($entityName);
    }

    public function close()
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'close', array(), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->close();
    }

    public function persist($entity)
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'persist', array('entity' => $entity), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'remove', array('entity' => $entity), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'detach', array('entity' => $entity), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'merge', array('entity' => $entity), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'contains', array('entity' => $entity), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'getEventManager', array(), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'getConfiguration', array(), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'isOpen', array(), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'getUnitOfWork', array(), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'getProxyFactory', array(), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'initializeObject', array('obj' => $obj), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'getFilters', array(), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'isFiltersStateClean', array(), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'hasFilters', array(), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return $this->valueHolder64ba7->hasFilters();
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

        $instance->initializer5b312 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder64ba7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder64ba7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder64ba7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, '__get', ['name' => $name], $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        if (isset(self::$publicPropertiesf01db[$name])) {
            return $this->valueHolder64ba7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder64ba7;

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

        $targetObject = $this->valueHolder64ba7;
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
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder64ba7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder64ba7;
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
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, '__isset', array('name' => $name), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder64ba7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder64ba7;
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
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, '__unset', array('name' => $name), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder64ba7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder64ba7;
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
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, '__clone', array(), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        $this->valueHolder64ba7 = clone $this->valueHolder64ba7;
    }

    public function __sleep()
    {
        $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, '__sleep', array(), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;

        return array('valueHolder64ba7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5b312 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5b312;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5b312 && ($this->initializer5b312->__invoke($valueHolder64ba7, $this, 'initializeProxy', array(), $this->initializer5b312) || 1) && $this->valueHolder64ba7 = $valueHolder64ba7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder64ba7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder64ba7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
