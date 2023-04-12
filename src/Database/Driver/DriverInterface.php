<?php

namespace Xudid\EntityContracts\Database\Driver;

use DriverException;
use Xudid\QueryBuilderContracts\Request\RequestInterface;

interface DriverInterface
{
    const FETCH_ASSOC = 1;
    const FETCH_CLASS = 2;
    /**
     * @throws DriverException
     */
    public function query(string $request);
    public function bind(RequestInterface $request);
    public function execute();
    public function fetch(): mixed;
    public function fetchAll(): array;
    public function setFetchMode(int $fetchMode): static;
    public function withClassName(string $className): static;
    public function lastInsertId(): mixed;
}
