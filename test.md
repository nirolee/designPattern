5.7版本之前没办法在线完成转换，要对master重启

## 在线将基于日志的复制变更为基于事务的复制
### 先决条件
1. 所有服务器的版本要高于5.7.6
2. 集群中所有服务器gtid_mode都设为off

### 处理步骤
``` sql
set @@global.enforce_gtid_consistency = warn;
set @@global.enforce_gtid_consistency = on;
set @@global.gtid_mode = off_permissive;
set @@global.gtid_mode = on_permissive;
show status like 'ongoing_anonymous_transaction_count';
set @@global.gtid_mode = on
stop slave;
change master to master_auto_position = 1;
start slave;
```
## 在线将基于事务的复制变更为基于日志的复制