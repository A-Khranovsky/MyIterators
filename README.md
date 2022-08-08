## Vocation
Praction with 

## Description
Project
  
## How to run
```angular2html
docker-compose up -d
```
```angular2html
docker exec -it 42_php-apache_1 bash
```

### Example of stored cached pages:
```angular2html
first
second
third
fourth
fifth

first
second
third
fourth

fourth

fourth(through ArrayObject)

first(through ArrayObject with foreach)
second(through ArrayObject with foreach)
third(through ArrayObject with foreach)
fourth(through ArrayObject with foreach)
fifth(through ArrayObject with foreach)

Iteration the public properties of the object thorugh ArrayObject:
first=>1
second=>2
third=>3
fourth=>4

Usage of DirectoryIterator:
dir . (current dir)
dir .
dir ..
dir .docker
dir .git
dir .idea
file docker-compose.yaml 177 Bytes
file index.php 1824 Bytes
dir LimitMyIterator
dir MyArrayAccessIterator
dir MyExtensionFilterIterator
dir MyIterator
file README.md 296 Bytes

Usage of FilterIterator. Outputting directories, files, avoiding php-files:
.
..
.docker
.git
.idea
docker-compose.yaml
LimitMyIterator
MyArrayAccessIterator
MyExtensionFilterIterator
MyIterator
README.md
```