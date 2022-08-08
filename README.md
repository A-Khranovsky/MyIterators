## Vocation
Praction with Iterators. Implementation of interfaces, extendtion and overriding,
using ready objects.

## Description
Project outputs the result of work this classes or interfaces:
* Iterator
* IteratorAggregate
* ArrayAccess
* ArrayObject
* DirectoryIterator
* FilterIterator
* LimitIterator
* RecursiveIteratoIterator
  
## How to run
* Clone the project.

```angular2html
docker-compose up -d
```
* visit: http://localhost

### Example of stored cached pages:
```angular2html
Usage of implementation of the Itarator
first
second
third
fourth
fifth

Usage of implementation of the ItaratorAggregate
first
second
third
fourth

Usage of implementation of the ArrayAccess:
fourth

Usage of ArrayObject
fourth (through ArrayObject)

first (through ArrayObject with foreach)
second (through ArrayObject with foreach)
third (through ArrayObject with foreach)
fourth (through ArrayObject with foreach)
fifth (through ArrayObject with foreach)

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
file index.php 2614 Bytes
dir LimitMyIterator
dir MyArrayAccessIterator
dir MyExtensionFilterIterator
dir MyIterator
file README.md 1173 Bytes

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

Usage of LimitItarator (5 items):
.
..
.docker
.git
.idea

Usage of RecurciveItarator:
./.
./..
./.docker
-./.docker/.
-./.docker/..
-./.docker/php-apache
--./.docker/php-apache/.
--./.docker/php-apache/..
--./.docker/php-apache/000-default.conf
--./.docker/php-apache/Dockerfile
./.git
-./.git/.
-./.git/..
-./.git/COMMIT_EDITMSG
-./.git/config
-./.git/description
-./.git/HEAD
-./.git/hooks
--./.git/hooks/.
--./.git/hooks/..
--./.git/hooks/applypatch-msg.sample
--./.git/hooks/commit-msg.sample
--./.git/hooks/fsmonitor-watchman.sample
--./.git/hooks/post-update.sample
--./.git/hooks/pre-applypatch.sample
--./.git/hooks/pre-commit.sample
--./.git/hooks/pre-merge-commit.sample
--./.git/hooks/pre-push.sample
--./.git/hooks/pre-rebase.sample
--./.git/hooks/pre-receive.sample
--./.git/hooks/prepare-commit-msg.sample
--./.git/hooks/push-to-checkout.sample
--./.git/hooks/update.sample
-./.git/index
-./.git/info
--./.git/info/.
--./.git/info/..
--./.git/info/exclude
-./.git/logs
--./.git/logs/.
--./.git/logs/..
--./.git/logs/HEAD
--./.git/logs/refs
---./.git/logs/refs/.
---./.git/logs/refs/..
---./.git/logs/refs/heads
----./.git/logs/refs/heads/.
----./.git/logs/refs/heads/..
----./.git/logs/refs/heads/master
---./.git/logs/refs/remotes
----./.git/logs/refs/remotes/.
----./.git/logs/refs/remotes/..
----./.git/logs/refs/remotes/origin
-----./.git/logs/refs/remotes/origin/.
-----./.git/logs/refs/remotes/origin/..
-----./.git/logs/refs/remotes/origin/master
-./.git/objects
--./.git/objects/.
--./.git/objects/..
--./.git/objects/04
---./.git/objects/04/.
---./.git/objects/04/..
---./.git/objects/04/9db4ae332a1a06f82faf91eb6202af9283ceeb
--./.git/objects/05
---./.git/objects/05/.
---./.git/objects/05/..
---./.git/objects/05/70760c6ac12cf6cb7c248f00a7f11398fbf1df
--./.git/objects/15
---./.git/objects/15/.
---./.git/objects/15/..
---./.git/objects/15/5d0f113e4f6e0f92a2167ddb604bb8ebc52eee
---./.git/objects/15/bee4240af1d75dd89844e5e15f6440e1100023
--./.git/objects/1a
---./.git/objects/1a/.
---./.git/objects/1a/..
---./.git/objects/1a/75e5db701dbe2e446d93404b4801b0d718671e
---./.git/objects/1a/f378137268cd25ce29ec01c41c6b04959dd418
--./.git/objects/20
---./.git/objects/20/.
---./.git/objects/20/..
---./.git/objects/20/98711a5a5a6ae667afce633e67edeee6b4a078
--./.git/objects/31
---./.git/objects/31/.
---./.git/objects/31/..
---./.git/objects/31/1ae525316f040b325e6c63e11efae982225bbb
--./.git/objects/3c
---./.git/objects/3c/.
---./.git/objects/3c/..
---./.git/objects/3c/2510e197fedf78d580a7275589dc23b22e51f0
---./.git/objects/3c/ef6ab7b9265e211c65319c7121043b5da38faf
--./.git/objects/4c
---./.git/objects/4c/.
---./.git/objects/4c/..
---./.git/objects/4c/74aff0cc43728dd56765dbd6a7fe26aeed27c7
--./.git/objects/64
---./.git/objects/64/.
---./.git/objects/64/..
---./.git/objects/64/7d52e7e3a73f9d810f588f4c06e6c0dd171e8b
--./.git/objects/69
---./.git/objects/69/.
---./.git/objects/69/..
---./.git/objects/69/5876086dbb29197a1ab40c1ccc1e1f05dca6f6
--./.git/objects/6d
---./.git/objects/6d/.
---./.git/objects/6d/..
---./.git/objects/6d/84f8938219e78f97b9a717cb48f47ac355075e
--./.git/objects/73
---./.git/objects/73/.
---./.git/objects/73/..
---./.git/objects/73/f69e0958611ac6e00bde95641f6699030ad235
--./.git/objects/7e
---./.git/objects/7e/.
---./.git/objects/7e/..
---./.git/objects/7e/400215ba891c2e2a41fb00905256d7b1898dab
---./.git/objects/7e/443011bab22f1ec56c467ab626499d3c1c314c
--./.git/objects/8d
---./.git/objects/8d/.
---./.git/objects/8d/..
---./.git/objects/8d/f691871d0a171dbdb6b94314f93dc10caf6f54
--./.git/objects/94
---./.git/objects/94/.
---./.git/objects/94/..
---./.git/objects/94/059430c7a1ceb377916ea16e83896b7d5702d8
--./.git/objects/ac
---./.git/objects/ac/.
---./.git/objects/ac/..
---./.git/objects/ac/f1374cc28ae58a2824b603cc250e529e7b308d
--./.git/objects/ad
---./.git/objects/ad/.
---./.git/objects/ad/..
---./.git/objects/ad/dbeb855b5514485a8ee4230fdb00c2a2a9e8b1
--./.git/objects/b0
---./.git/objects/b0/.
---./.git/objects/b0/..
---./.git/objects/b0/80b5e04abe7ff289f9c2c90234b872246e61a1
--./.git/objects/b3
---./.git/objects/b3/.
---./.git/objects/b3/..
---./.git/objects/b3/d9bbc7f3711e882119cd6b3af051245d859d04
--./.git/objects/b4
---./.git/objects/b4/.
---./.git/objects/b4/..
---./.git/objects/b4/dea233a025324ccdc02702218de5c5c8d8f721
--./.git/objects/c2
---./.git/objects/c2/.
---./.git/objects/c2/..
---./.git/objects/c2/81318b7968a32130840383cb6f98b8cb6f7cfd
--./.git/objects/c8
---./.git/objects/c8/.
---./.git/objects/c8/..
---./.git/objects/c8/c818e7f08311910f6e64cb79bf23b976e1a0bd
--./.git/objects/c9
---./.git/objects/c9/.
---./.git/objects/c9/..
---./.git/objects/c9/56989b29ad0767edc6cf3a202545927c3d1e76
--./.git/objects/ca
---./.git/objects/ca/.
---./.git/objects/ca/..
---./.git/objects/ca/322121ff8fbeb75eeef892d9d99d154e06fd61
--./.git/objects/cc
---./.git/objects/cc/.
---./.git/objects/cc/..
---./.git/objects/cc/f858876e335c2ede4f99214aca8418d16dcaf4
--./.git/objects/d1
---./.git/objects/d1/.
---./.git/objects/d1/..
---./.git/objects/d1/ecfd6cbac41df4951d38fda49e0791e8f42a79
--./.git/objects/e3
---./.git/objects/e3/.
---./.git/objects/e3/..
---./.git/objects/e3/f3907ca867da4970d1f057d9a1d708e507271e
--./.git/objects/e6
---./.git/objects/e6/.
---./.git/objects/e6/..
---./.git/objects/e6/9de29bb2d1d6434b8b29ae775ad8c2e48c5391
--./.git/objects/e8
---./.git/objects/e8/.
---./.git/objects/e8/..
---./.git/objects/e8/e977a93df42b8e40e98c0b2ad90c3e3c225b55
--./.git/objects/eb
---./.git/objects/eb/.
---./.git/objects/eb/..
---./.git/objects/eb/721d9cc9d8336eec6fd6ee47e6725894939186
--./.git/objects/ee
---./.git/objects/ee/.
---./.git/objects/ee/..
---./.git/objects/ee/486d22af2ccef91d1c42af1d7c74fbb7825100
--./.git/objects/fa
---./.git/objects/fa/.
---./.git/objects/fa/..
---./.git/objects/fa/029e6a59f4bc24effd1efa3355da6ca87b25e0
--./.git/objects/info
---./.git/objects/info/.
---./.git/objects/info/..
--./.git/objects/pack
---./.git/objects/pack/.
---./.git/objects/pack/..
-./.git/refs
--./.git/refs/.
--./.git/refs/..
--./.git/refs/heads
---./.git/refs/heads/.
---./.git/refs/heads/..
---./.git/refs/heads/master
--./.git/refs/remotes
---./.git/refs/remotes/.
---./.git/refs/remotes/..
---./.git/refs/remotes/origin
----./.git/refs/remotes/origin/.
----./.git/refs/remotes/origin/..
----./.git/refs/remotes/origin/master
--./.git/refs/tags
---./.git/refs/tags/.
---./.git/refs/tags/..
./.idea
-./.idea/.
-./.idea/..
-./.idea/.gitignore
-./.idea/42.iml
-./.idea/modules.xml
-./.idea/php.xml
-./.idea/sonarlint
--./.idea/sonarlint/.
--./.idea/sonarlint/..
--./.idea/sonarlint/issuestore
---./.idea/sonarlint/issuestore/.
---./.idea/sonarlint/issuestore/..
---./.idea/sonarlint/issuestore/3
----./.idea/sonarlint/issuestore/3/.
----./.idea/sonarlint/issuestore/3/..
----./.idea/sonarlint/issuestore/3/9
-----./.idea/sonarlint/issuestore/3/9/.
-----./.idea/sonarlint/issuestore/3/9/..
-----./.idea/sonarlint/issuestore/3/9/39fa5ab4caae8c73bb5e30fbeaf7c1d2fe616b66
---./.idea/sonarlint/issuestore/7
----./.idea/sonarlint/issuestore/7/.
----./.idea/sonarlint/issuestore/7/..
----./.idea/sonarlint/issuestore/7/a
-----./.idea/sonarlint/issuestore/7/a/.
-----./.idea/sonarlint/issuestore/7/a/..
---./.idea/sonarlint/issuestore/8
----./.idea/sonarlint/issuestore/8/.
----./.idea/sonarlint/issuestore/8/..
----./.idea/sonarlint/issuestore/8/e
-----./.idea/sonarlint/issuestore/8/e/.
-----./.idea/sonarlint/issuestore/8/e/..
---./.idea/sonarlint/issuestore/9
----./.idea/sonarlint/issuestore/9/.
----./.idea/sonarlint/issuestore/9/..
----./.idea/sonarlint/issuestore/9/6
-----./.idea/sonarlint/issuestore/9/6/.
-----./.idea/sonarlint/issuestore/9/6/..
----./.idea/sonarlint/issuestore/9/f
-----./.idea/sonarlint/issuestore/9/f/.
-----./.idea/sonarlint/issuestore/9/f/..
-----./.idea/sonarlint/issuestore/9/f/9fe84ebb15faf917b7def6236dba604453cc61e0
---./.idea/sonarlint/issuestore/a
----./.idea/sonarlint/issuestore/a/.
----./.idea/sonarlint/issuestore/a/..
----./.idea/sonarlint/issuestore/a/7
-----./.idea/sonarlint/issuestore/a/7/.
-----./.idea/sonarlint/issuestore/a/7/..
-----./.idea/sonarlint/issuestore/a/7/a7a1a05ab4b456de3477aef17e92f479be7229cf
---./.idea/sonarlint/issuestore/b
----./.idea/sonarlint/issuestore/b/.
----./.idea/sonarlint/issuestore/b/..
----./.idea/sonarlint/issuestore/b/b
-----./.idea/sonarlint/issuestore/b/b/.
-----./.idea/sonarlint/issuestore/b/b/..
---./.idea/sonarlint/issuestore/e
----./.idea/sonarlint/issuestore/e/.
----./.idea/sonarlint/issuestore/e/..
----./.idea/sonarlint/issuestore/e/0
-----./.idea/sonarlint/issuestore/e/0/.
-----./.idea/sonarlint/issuestore/e/0/..
----./.idea/sonarlint/issuestore/e/c
-----./.idea/sonarlint/issuestore/e/c/.
-----./.idea/sonarlint/issuestore/e/c/..
----./.idea/sonarlint/issuestore/e/f
-----./.idea/sonarlint/issuestore/e/f/.
-----./.idea/sonarlint/issuestore/e/f/..
-----./.idea/sonarlint/issuestore/e/f/ef8def03dc8f162799089e9b5f4321201c8810d5
---./.idea/sonarlint/issuestore/index.pb
-./.idea/vcs.xml
-./.idea/workspace.xml
./docker-compose.yaml
./index.php
./LimitMyIterator
-./LimitMyIterator/.
-./LimitMyIterator/..
-./LimitMyIterator/LimitMyIterator.php
./MyArrayAccessIterator
-./MyArrayAccessIterator/.
-./MyArrayAccessIterator/..
-./MyArrayAccessIterator/MyArrayAccessIterator.php
./MyExtensionFilterIterator
-./MyExtensionFilterIterator/.
-./MyExtensionFilterIterator/..
-./MyExtensionFilterIterator/MyExtensionFilterIterator.php
./MyIterator
-./MyIterator/.
-./MyIterator/..
-./MyIterator/MyIterator.php
./README.md
```