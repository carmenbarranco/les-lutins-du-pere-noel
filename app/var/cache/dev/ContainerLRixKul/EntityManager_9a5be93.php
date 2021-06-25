<?php

namespace ContainerLRixKul;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder83a4e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer248ea = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2838d = [
        
    ];

    public function getConnection()
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'getConnection', array(), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'getMetadataFactory', array(), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'getExpressionBuilder', array(), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'beginTransaction', array(), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'getCache', array(), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'transactional', array('func' => $func), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->transactional($func);
    }

    public function commit()
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'commit', array(), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->commit();
    }

    public function rollback()
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'rollback', array(), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'getClassMetadata', array('className' => $className), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'createQuery', array('dql' => $dql), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'createNamedQuery', array('name' => $name), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'createQueryBuilder', array(), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'flush', array('entity' => $entity), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'clear', array('entityName' => $entityName), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->clear($entityName);
    }

    public function close()
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'close', array(), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->close();
    }

    public function persist($entity)
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'persist', array('entity' => $entity), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'remove', array('entity' => $entity), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'refresh', array('entity' => $entity), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'detach', array('entity' => $entity), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'merge', array('entity' => $entity), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'contains', array('entity' => $entity), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'getEventManager', array(), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'getConfiguration', array(), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'isOpen', array(), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'getUnitOfWork', array(), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'getProxyFactory', array(), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'initializeObject', array('obj' => $obj), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'getFilters', array(), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'isFiltersStateClean', array(), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'hasFilters', array(), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return $this->valueHolder83a4e->hasFilters();
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

        $instance->initializer248ea = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder83a4e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder83a4e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder83a4e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, '__get', ['name' => $name], $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        if (isset(self::$publicProperties2838d[$name])) {
            return $this->valueHolder83a4e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83a4e;

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

        $targetObject = $this->valueHolder83a4e;
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
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83a4e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder83a4e;
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
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, '__isset', array('name' => $name), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83a4e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder83a4e;
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
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, '__unset', array('name' => $name), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83a4e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder83a4e;
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
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, '__clone', array(), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        $this->valueHolder83a4e = clone $this->valueHolder83a4e;
    }

    public function __sleep()
    {
        $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, '__sleep', array(), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;

        return array('valueHolder83a4e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer248ea = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer248ea;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer248ea && ($this->initializer248ea->__invoke($valueHolder83a4e, $this, 'initializeProxy', array(), $this->initializer248ea) || 1) && $this->valueHolder83a4e = $valueHolder83a4e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder83a4e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder83a4e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
