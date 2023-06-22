# Minimal Replication for doctrine/orm#10788

```sh
php bin/doctrine orm:schema-tool:drop --force
php bin/doctrine orm:schema-tool:create
php trigger_error.php
```
