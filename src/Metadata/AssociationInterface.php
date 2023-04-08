<?php

namespace Xudid\EntityContracts\Metadata;

interface AssociationInterface
{
	const ManyToMany = 'ManyToMany';
	const ManyToOne = 'ManyToOne';
	const OneToMany = 'OneToMany';
	const OneToOne = 'OneToOne';
    public function getName(): string;
    public function getType(): string;
    public function getFromModel(): string;
    public function getToModel(): string;
    public function getTable(): string;
    public function setFromModel(string $holdingClassName): static;
    public function setToModel(string $outClassName): static;
    public function setTable(): string;
}
