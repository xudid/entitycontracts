<?php

namespace App\DB;

use DriverException;
use Xudid\QueryBuilderContracts\Request\RequestInterface;

interface DriverInterface
{
    /**
     * @throws DriverException
     */
    public function query(string $request);
    public function bind(RequestInterface $request);
    public function execute();
    public function fetch(): mixed;
    public function fetchAll(): array;
}
