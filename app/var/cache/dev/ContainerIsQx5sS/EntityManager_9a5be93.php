<?php

namespace ContainerIsQx5sS;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder77b03 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer95c3d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties337e9 = [
        
    ];

    public function getConnection()
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'getConnection', array(), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'getMetadataFactory', array(), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'getExpressionBuilder', array(), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'beginTransaction', array(), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'getCache', array(), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->getCache();
    }

    public function transactional($func)
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'transactional', array('func' => $func), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->transactional($func);
    }

    public function commit()
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'commit', array(), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->commit();
    }

    public function rollback()
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'rollback', array(), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'getClassMetadata', array('className' => $className), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'createQuery', array('dql' => $dql), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'createNamedQuery', array('name' => $name), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'createQueryBuilder', array(), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'flush', array('entity' => $entity), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'clear', array('entityName' => $entityName), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->clear($entityName);
    }

    public function close()
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'close', array(), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->close();
    }

    public function persist($entity)
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'persist', array('entity' => $entity), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'remove', array('entity' => $entity), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'refresh', array('entity' => $entity), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'detach', array('entity' => $entity), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'merge', array('entity' => $entity), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'getRepository', array('entityName' => $entityName), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'contains', array('entity' => $entity), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'getEventManager', array(), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'getConfiguration', array(), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'isOpen', array(), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'getUnitOfWork', array(), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'getProxyFactory', array(), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'initializeObject', array('obj' => $obj), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'getFilters', array(), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'isFiltersStateClean', array(), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'hasFilters', array(), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return $this->valueHolder77b03->hasFilters();
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

        $instance->initializer95c3d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder77b03) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder77b03 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder77b03->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, '__get', ['name' => $name], $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        if (isset(self::$publicProperties337e9[$name])) {
            return $this->valueHolder77b03->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder77b03;

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

        $targetObject = $this->valueHolder77b03;
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
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder77b03;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder77b03;
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
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, '__isset', array('name' => $name), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder77b03;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder77b03;
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
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, '__unset', array('name' => $name), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder77b03;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder77b03;
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
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, '__clone', array(), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        $this->valueHolder77b03 = clone $this->valueHolder77b03;
    }

    public function __sleep()
    {
        $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, '__sleep', array(), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;

        return array('valueHolder77b03');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer95c3d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer95c3d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer95c3d && ($this->initializer95c3d->__invoke($valueHolder77b03, $this, 'initializeProxy', array(), $this->initializer95c3d) || 1) && $this->valueHolder77b03 = $valueHolder77b03;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder77b03;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder77b03;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
