<?php

namespace Xudid\EntityContracts\Executer;

use Xudid\EntityContracts\Database\Driver\DriverInterface;
use Xudid\QueryBuilderContracts\Request\RequestInterface;

interface ExecuterInterface
{
    public function __construct(DriverInterface $driver);
    public function className(string $className): static;
    public function request(RequestInterface $request): static;
    public function execute();
    public function executeSql(string $sql);
    public function debug(): static;
    public function debugData(): array;
}
