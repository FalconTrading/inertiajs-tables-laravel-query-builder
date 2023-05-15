<?php

namespace ProtoneMedia\LaravelQueryBuilderInertiaJs;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Collection;

class SearchInput implements Arrayable
{
    public function __construct(
        public string $key,
        public string $label,
        public mixed $value = null,
        public ?string $type = 'text',
        public ?bool $multiple = false,
        public ?array $options = null,
        public ?string $optionsLabelBy = 'name',
    ) {
    }

    public function toArray()
    {
        return [
            'key'   => $this->key,
            'label' => $this->label,
            'value' => $this->value,
            'type' => $this->type,
            'multiple' => $this->multiple,
            'options' => $this->options,
            'optionsLabelby' => $this->optionsLabelBy,
        ];
    }
}
