<?php

namespace Rias\ButtonBox;

use Statamic\Facades\AssetContainer;
use Statamic\Fields\Fieldtype;
use Statamic\Statamic;

class ButtonBox extends Fieldtype
{
    public function icon()
    {
        return 'container-add';
    }

    protected function configFieldItems(): array
    {
        return [
            'options' => [
                'type' => 'grid',
                'min_rows' => 1,
                'mode' => 'stacked',
                'fields' => [
                    'label' => [
                        'handle' => 'label',
                        'field'  => [
                            'type' => 'text',
                        ],
                    ],
                    'value' => [
                        'handle'  => 'value',
                        'field'   => [
                            'type' => 'text',
                        ],
                    ],
                    'image' => [
                        'handle' => 'image',
                        'field' => [
                            'type' => 'assets',
                            'container' => config('statamic.button-box.container', AssetContainer::all()->first()->handle()),
                            'max_files' => 1,
                            'mode' => 'list',
                        ],
                        'instructions' => 'The image that is shown on the button',
                    ],
                    'icon' => [
                        'handle' => 'icon',
                        'field' => [
                            'type' => 'icon',
                            'instructions' => 'Choose an icon'
                        ],
                    ],
                ],
                'add_row' => 'Add Button',
            ],
        ];
    }
}
