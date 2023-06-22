# Minimal Replication for doctrine/orm#10788

```sh
php bin/doctrine orm:schema-tool:drop --force
php bin/doctrine orm:schema-tool:create
php trigger_error.php
```

## Error Trace

```text
PHP Fatal error:  Uncaught Error: Object of class Enum\LocaleCode could not be converted to string in /app/vendor/doctrine/dbal/src/Driver/PDO/Statement.php:43
Stack trace:
#0 /app/vendor/doctrine/dbal/src/Driver/PDO/Statement.php(43): PDOStatement->bindValue(1, Object(Enum\LocaleCode), 2)
#1 /app/vendor/doctrine/dbal/src/Statement.php(115): Doctrine\DBAL\Driver\PDO\Statement->bindValue(1, Object(Enum\LocaleCode), 2)
#2 /app/vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/BasicEntityPersister.php(276): Doctrine\DBAL\Statement->bindValue(1, Object(Enum\LocaleCode), Object(Doctrine\DBAL\Types\StringType))
#3 /app/vendor/doctrine/orm/lib/Doctrine/ORM/UnitOfWork.php(1172): Doctrine\ORM\Persisters\Entity\BasicEntityPersister->executeInserts()
#4 /app/vendor/doctrine/orm/lib/Doctrine/ORM/UnitOfWork.php(441): Doctrine\ORM\UnitOfWork->executeInserts(Object(Doctrine\ORM\Mapping\ClassMetadata))
#5 /app/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php(403): Doctrine\ORM\UnitOfWork->commit(NULL)
#6 /app/trigger_error.php(23): Doctrine\ORM\EntityManager->flush()
#7 {main}
  thrown in /app/vendor/doctrine/dbal/src/Driver/PDO/Statement.php on line 43

Fatal error: Uncaught Error: Object of class Enum\LocaleCode could not be converted to string in /app/vendor/doctrine/dbal/src/Driver/PDO/Statement.php:43
Stack trace:
#0 /app/vendor/doctrine/dbal/src/Driver/PDO/Statement.php(43): PDOStatement->bindValue(1, Object(Enum\LocaleCode), 2)
#1 /app/vendor/doctrine/dbal/src/Statement.php(115): Doctrine\DBAL\Driver\PDO\Statement->bindValue(1, Object(Enum\LocaleCode), 2)
#2 /app/vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/BasicEntityPersister.php(276): Doctrine\DBAL\Statement->bindValue(1, Object(Enum\LocaleCode), Object(Doctrine\DBAL\Types\StringType))
#3 /app/vendor/doctrine/orm/lib/Doctrine/ORM/UnitOfWork.php(1172): Doctrine\ORM\Persisters\Entity\BasicEntityPersister->executeInserts()
#4 /app/vendor/doctrine/orm/lib/Doctrine/ORM/UnitOfWork.php(441): Doctrine\ORM\UnitOfWork->executeInserts(Object(Doctrine\ORM\Mapping\ClassMetadata))
#5 /app/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php(403): Doctrine\ORM\UnitOfWork->commit(NULL)
#6 /app/trigger_error.php(23): Doctrine\ORM\EntityManager->flush()
#7 {main}
  thrown in /app/vendor/doctrine/dbal/src/Driver/PDO/Statement.php on line 43
```