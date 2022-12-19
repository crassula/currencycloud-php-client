<?php

declare(strict_types=1);

namespace CurrencyCloud\Model;

class BaseData
{
    private array $data;

    public function setData(array $data): void {
        $this->data = $data;
    }

    public function getData(): array
    {
        return $this->data;
    }
}
