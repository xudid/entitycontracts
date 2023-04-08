<?php

namespace Xudid\EntityContracts\Model;

use Xudid\EntityContracts\Metadata\AssociationInterface;
use Xudid\EntityContracts\Metadata\DataColumnInterface;

interface ModelInterface
{
    public function __construct(array $datas = []);
    public function getId(): int;
    public function setId($id): static;
    public static function hydrate(array $datas): static;
    public static function model(string $model): static;
    public static function getClass(): string;
    public static function getShortClass(): string;
    public static function getTable(): string;
    public static function getPrimaryKeys(): array;
    public static function getForeignKeys(): array;
    public static function getColumn(string $name): DataColumnInterface;
    public static function getColumns(): array;
    public static function getAssociation(string $className): AssociationInterface;
    public static function getAssociations(): array;
    public function hasAssociation(string $className): bool;
    public function getPropertyValue(string $propertyName): mixed;
    public function isProxy(): bool;
    public static function getGetters(): array;
    public static function getSetters(): array;
    public static function exists(string $className): bool;
    public function __get($key);
    public function __set($name, $value);
}
