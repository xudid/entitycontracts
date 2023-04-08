<?php

namespace Xudid\EntityContracts\Database\Driver;

interface DataSourceInterface
{
    public function getName(): string;
    public function getConfig(): array;
	public function getDriver(): DriverInterface;
}
