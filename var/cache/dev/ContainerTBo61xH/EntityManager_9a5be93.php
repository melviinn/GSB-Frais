<?php

namespace ContainerTBo61xH;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc8356 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer89aa1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties66d5c = [
        
    ];

    public function getConnection()
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'getConnection', array(), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'getMetadataFactory', array(), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'getExpressionBuilder', array(), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'beginTransaction', array(), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'getCache', array(), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->getCache();
    }

    public function transactional($func)
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'transactional', array('func' => $func), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'wrapInTransaction', array('func' => $func), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'commit', array(), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->commit();
    }

    public function rollback()
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'rollback', array(), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'getClassMetadata', array('className' => $className), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'createQuery', array('dql' => $dql), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'createNamedQuery', array('name' => $name), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'createQueryBuilder', array(), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'flush', array('entity' => $entity), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'clear', array('entityName' => $entityName), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->clear($entityName);
    }

    public function close()
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'close', array(), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->close();
    }

    public function persist($entity)
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'persist', array('entity' => $entity), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'remove', array('entity' => $entity), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'refresh', array('entity' => $entity), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'detach', array('entity' => $entity), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'merge', array('entity' => $entity), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'getRepository', array('entityName' => $entityName), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'contains', array('entity' => $entity), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'getEventManager', array(), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'getConfiguration', array(), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'isOpen', array(), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'getUnitOfWork', array(), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'getProxyFactory', array(), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'initializeObject', array('obj' => $obj), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'getFilters', array(), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'isFiltersStateClean', array(), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'hasFilters', array(), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return $this->valueHolderc8356->hasFilters();
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

        $instance->initializer89aa1 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderc8356) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc8356 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc8356->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, '__get', ['name' => $name], $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        if (isset(self::$publicProperties66d5c[$name])) {
            return $this->valueHolderc8356->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8356;

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

        $targetObject = $this->valueHolderc8356;
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
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8356;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc8356;
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
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, '__isset', array('name' => $name), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8356;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc8356;
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
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, '__unset', array('name' => $name), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8356;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc8356;
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
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, '__clone', array(), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        $this->valueHolderc8356 = clone $this->valueHolderc8356;
    }

    public function __sleep()
    {
        $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, '__sleep', array(), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;

        return array('valueHolderc8356');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer89aa1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer89aa1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer89aa1 && ($this->initializer89aa1->__invoke($valueHolderc8356, $this, 'initializeProxy', array(), $this->initializer89aa1) || 1) && $this->valueHolderc8356 = $valueHolderc8356;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc8356;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc8356;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
