<?php

namespace Rias\ButtonBox;

use Statamic\Facades\AssetContainer;
use Statamic\Fields\Fieldtype;

class ButtonBox extends Fieldtype
{
    protected function configFieldItems(): array
    {
        return [
            'options' => [
                'type' => 'grid',
                'min_rows' => 1,
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
                            'type' => 'text',
                            'prepend' => 'fa-',
                            'instructions' => 'Choose an icon from the free FontAwesome icons'
                        ],
                    ],
                ],
                'add_row' => 'Add Button',
            ],
        ];
    }
}
