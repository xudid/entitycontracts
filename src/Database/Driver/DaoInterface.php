<?php
namespace Xudid\EntityContracts\Database\Driver;

use Xudid\QueryBuilderContracts\Request\RequestInterface;

interface DaoInterface
{
    public function execute(RequestInterface $request, string $className);
    public function debug(): static;
    public function getDriver(): DriverInterface;
	public function getDatasource(): DataSourceInterface;
}
