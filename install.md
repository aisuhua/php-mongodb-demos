# INSTALL

download

```sh
wget http://downloads.mongodb.org/linux/mongodb-linux-x86_64-ubuntu1404-3.0.15.tgz?_ga=2.218946972.427743920.1503306436-773074933.1500860273
mv mongodb-linux-x86_64-ubuntu1404-3.0.15.tgz\?_ga\=2.218946972.427743920.1503306436-773074933.1500860273  mongodb-linux-x86_64-ubuntu1404-3.0.15.tgz
tar zxvf mongodb-linux-x86_64-ubuntu1404-3.0.15.tgz
cd mongodb-linux-x86_64-ubuntu1404-3.0.15/
ln -s mongodb-linux-x86_64-ubuntu1404-3.0.15 mongodb
cd mongodb
cd bin/
./mongod --help
cp -a * /usr/local/bin/
```

config

```sh
vim /etc/mongod1.conf

# mongod.conf

# for documentation of all options, see:
#   http://docs.mongodb.org/manual/reference/configuration-options/

# Where and how to store data.
storage:
   dbPath: /www/mongo1
   journal:
      enabled: true
#  engine:
#  mmapv1:
#  wiredTiger:

# where to write logging data.
systemLog:
   destination: file
   logAppend: true
   path: /var/log/mongo1.log

# network interfaces
net:
   port: 27017
   bindIp: 0.0.0.0


processManagement:
   fork: true
#security:

#operationProfiling:
replication:
   replSetName: wangpan

#sharding:

## Enterprise-Only Options:

#auditLog:

#snmp:
```

copy

```sh
cd /etc
cp mongod1.conf mongod2.conf
cp mongod1.conf mongod3.conf

# mongo2
vim mongod2.conf

# mongod.conf

# for documentation of all options, see:
#   http://docs.mongodb.org/manual/reference/configuration-options/

# Where and how to store data.
storage:
   dbPath: /www/mongo2
   journal:
      enabled: true
#  engine:
#  mmapv1:
#  wiredTiger:

# where to write logging data.
systemLog:
   destination: file
   logAppend: true
   path: /var/log/mongo2.log

# network interfaces
net:
   port: 27018
   bindIp: 0.0.0.0


processManagement:
   fork: true
#security:

#operationProfiling:
replication:
   replSetName: wangpan

#sharding:

## Enterprise-Only Options:

#auditLog:

#snmp:

# mongo3
vim /etc/mongod3.conf

# mongod.conf

# for documentation of all options, see:
#   http://docs.mongodb.org/manual/reference/configuration-options/

# Where and how to store data.
storage:
   dbPath: /www/mongo3
   journal:
      enabled: true
#  engine:
#  mmapv1:
#  wiredTiger:

# where to write logging data.
systemLog:
   destination: file
   logAppend: true
   path: /var/log/mongo3.log

# network interfaces
net:
   port: 27019
   bindIp: 0.0.0.0


processManagement:
   fork: true
#security:

#operationProfiling:
replication:
   replSetName: wangpan

#sharding:

## Enterprise-Only Options:

#auditLog:

#snmp:
```

db

```sh
mkdir /www/mongo{1,2,3} -p

echo never >/sys/kernel/mm/transparent_hugepage/defrag
echo never > /sys/kernel/mm/transparent_hugepage/enabled 

vim /etc/rc.local 
cat: vim: No such file or directory
#!/bin/sh -e
#
# rc.local
#
# This script is executed at the end of each multiuser runlevel.
# Make sure that the script will "exit 0" on success or any other
# value on error.
#
# In order to enable or disable this script just change the execution
# bits.
#
# By default this script does nothing.

echo never >/sys/kernel/mm/transparent_hugepage/defrag
echo never > /sys/kernel/mm/transparent_hugepage/enabled 

exit 0


vim start_mongo1.sh
mongod -f /etc/mongod1.conf

vim start_mongo2.sh
mongod -f /etc/mongod2.conf

vim start_mongo3.sh
mongod -f /etc/mongod3.conf

vim stop_mongo1.sh 
mongod -f /etc/mongod1.conf  --shutdown

vim stop_mongo2.sh 
mongod -f /etc/mongod2.conf  --shutdown

vim stop_mongo3.sh 
mongod -f /etc/mongod3.conf  --shutdown
```
