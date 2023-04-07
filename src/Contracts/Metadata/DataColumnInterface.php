<?php

namespace Xudid\EntityContracts\Metadata;

interface DataColumnInterface
{
	public function getName(): string;
	public function getType(): string;
	public function setIsPrimary(): static;
	public function setIsAutoIncrement(): static;
	public function isPrimary(): bool;
	public function isAutoIncrement(): bool;
    public function unique(): static;
    public function isUnique(): bool;
    public function null(): static;
    public function isNull(): bool;
    public function default(): static;
    public function getDefault(): mixed;
}
