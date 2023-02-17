<?php

namespace ContainerX1vr0w3;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder96279 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera52cf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd2e89 = [
        
    ];

    public function getConnection()
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'getConnection', array(), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'getMetadataFactory', array(), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'getExpressionBuilder', array(), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'beginTransaction', array(), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'getCache', array(), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->getCache();
    }

    public function transactional($func)
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'transactional', array('func' => $func), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'wrapInTransaction', array('func' => $func), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'commit', array(), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->commit();
    }

    public function rollback()
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'rollback', array(), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'getClassMetadata', array('className' => $className), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'createQuery', array('dql' => $dql), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'createNamedQuery', array('name' => $name), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'createQueryBuilder', array(), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'flush', array('entity' => $entity), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'clear', array('entityName' => $entityName), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->clear($entityName);
    }

    public function close()
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'close', array(), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->close();
    }

    public function persist($entity)
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'persist', array('entity' => $entity), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'remove', array('entity' => $entity), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'detach', array('entity' => $entity), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'merge', array('entity' => $entity), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'getRepository', array('entityName' => $entityName), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'contains', array('entity' => $entity), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'getEventManager', array(), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'getConfiguration', array(), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'isOpen', array(), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'getUnitOfWork', array(), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'getProxyFactory', array(), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'initializeObject', array('obj' => $obj), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'getFilters', array(), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'isFiltersStateClean', array(), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'hasFilters', array(), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return $this->valueHolder96279->hasFilters();
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

        $instance->initializera52cf = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder96279) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder96279 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder96279->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, '__get', ['name' => $name], $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        if (isset(self::$publicPropertiesd2e89[$name])) {
            return $this->valueHolder96279->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder96279;

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

        $targetObject = $this->valueHolder96279;
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
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder96279;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder96279;
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
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, '__isset', array('name' => $name), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder96279;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder96279;
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
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, '__unset', array('name' => $name), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder96279;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder96279;
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
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, '__clone', array(), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        $this->valueHolder96279 = clone $this->valueHolder96279;
    }

    public function __sleep()
    {
        $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, '__sleep', array(), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;

        return array('valueHolder96279');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera52cf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera52cf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera52cf && ($this->initializera52cf->__invoke($valueHolder96279, $this, 'initializeProxy', array(), $this->initializera52cf) || 1) && $this->valueHolder96279 = $valueHolder96279;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder96279;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder96279;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
