<?php

namespace ContainerEbjO5io;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder33d88 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6fb1a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9c1c7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'getConnection', array(), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'getMetadataFactory', array(), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'getExpressionBuilder', array(), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'beginTransaction', array(), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'getCache', array(), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'transactional', array('func' => $func), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'commit', array(), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->commit();
    }

    public function rollback()
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'rollback', array(), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'getClassMetadata', array('className' => $className), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'createQuery', array('dql' => $dql), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'createNamedQuery', array('name' => $name), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'createQueryBuilder', array(), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'flush', array('entity' => $entity), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'clear', array('entityName' => $entityName), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->clear($entityName);
    }

    public function close()
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'close', array(), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->close();
    }

    public function persist($entity)
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'persist', array('entity' => $entity), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'remove', array('entity' => $entity), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'detach', array('entity' => $entity), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'merge', array('entity' => $entity), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'contains', array('entity' => $entity), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'getEventManager', array(), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'getConfiguration', array(), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'isOpen', array(), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'getUnitOfWork', array(), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'getProxyFactory', array(), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'initializeObject', array('obj' => $obj), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'getFilters', array(), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'isFiltersStateClean', array(), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'hasFilters', array(), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return $this->valueHolder33d88->hasFilters();
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

        $instance->initializer6fb1a = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder33d88) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder33d88 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder33d88->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, '__get', ['name' => $name], $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        if (isset(self::$publicProperties9c1c7[$name])) {
            return $this->valueHolder33d88->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33d88;

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

        $targetObject = $this->valueHolder33d88;
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
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33d88;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder33d88;
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
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, '__isset', array('name' => $name), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33d88;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder33d88;
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
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, '__unset', array('name' => $name), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33d88;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder33d88;
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
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, '__clone', array(), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        $this->valueHolder33d88 = clone $this->valueHolder33d88;
    }

    public function __sleep()
    {
        $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, '__sleep', array(), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;

        return array('valueHolder33d88');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializer6fb1a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6fb1a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6fb1a && ($this->initializer6fb1a->__invoke($valueHolder33d88, $this, 'initializeProxy', array(), $this->initializer6fb1a) || 1) && $this->valueHolder33d88 = $valueHolder33d88;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder33d88;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder33d88;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
