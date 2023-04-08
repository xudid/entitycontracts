<?php

namespace Xudid\EntityContracts\Model;

use Xudid\EntityContracts\Executer\ExecuterInterface;
use Xudid\QueryBuilderContracts\QueryBuilderInterface;

interface ManagerInterface
{
    public function create(ModelInterface $object);
    public function update(ModelInterface $object);
    public function delete(ModelInterface $object);
    public function findById($id): ModelInterface;
    public function findBy(array $params): array;
    public function findAll(): array;
    public function findAssociationValues(ModelInterface $model, string $associationModel): array;
    public function manage(string $class): static;
    public function builder(): QueryBuilderInterface;
    public function executer(): ExecuterInterface;
    public function debug(): static;
    public function setProxyCachePath(string $path): static;
}
