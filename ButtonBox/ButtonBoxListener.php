<?php

namespace Statamic\Addons\ButtonBox;

use Statamic\Extend\Listener;

class ButtonBoxListener extends Listener
{
    /**
     * The events to be listened for, and the methods to call.
     *
     * @var array
     */
    public $events = [
        'cp.add_to_head' => ['addCss'],
    ];

    public function addCss()
    {
        return $this->css->tag('fieldtype.css');
    }

}
