<?php

namespace ContainerYOrsdxy;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf6393 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5689d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2eff1 = [
        
    ];

    public function getConnection()
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'getConnection', array(), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'getMetadataFactory', array(), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'getExpressionBuilder', array(), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'beginTransaction', array(), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'getCache', array(), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'transactional', array('func' => $func), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'commit', array(), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->commit();
    }

    public function rollback()
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'rollback', array(), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'getClassMetadata', array('className' => $className), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'createQuery', array('dql' => $dql), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'createNamedQuery', array('name' => $name), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'createQueryBuilder', array(), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'flush', array('entity' => $entity), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'clear', array('entityName' => $entityName), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->clear($entityName);
    }

    public function close()
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'close', array(), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->close();
    }

    public function persist($entity)
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'persist', array('entity' => $entity), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'remove', array('entity' => $entity), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'refresh', array('entity' => $entity), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'detach', array('entity' => $entity), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'merge', array('entity' => $entity), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'contains', array('entity' => $entity), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'getEventManager', array(), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'getConfiguration', array(), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'isOpen', array(), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'getUnitOfWork', array(), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'getProxyFactory', array(), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'initializeObject', array('obj' => $obj), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'getFilters', array(), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'isFiltersStateClean', array(), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'hasFilters', array(), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return $this->valueHolderf6393->hasFilters();
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

        $instance->initializer5689d = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderf6393) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf6393 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf6393->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, '__get', ['name' => $name], $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        if (isset(self::$publicProperties2eff1[$name])) {
            return $this->valueHolderf6393->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf6393;

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

        $targetObject = $this->valueHolderf6393;
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
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf6393;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf6393;
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
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, '__isset', array('name' => $name), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf6393;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf6393;
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
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, '__unset', array('name' => $name), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf6393;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf6393;
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
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, '__clone', array(), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        $this->valueHolderf6393 = clone $this->valueHolderf6393;
    }

    public function __sleep()
    {
        $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, '__sleep', array(), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;

        return array('valueHolderf6393');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5689d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5689d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5689d && ($this->initializer5689d->__invoke($valueHolderf6393, $this, 'initializeProxy', array(), $this->initializer5689d) || 1) && $this->valueHolderf6393 = $valueHolderf6393;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf6393;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf6393;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
