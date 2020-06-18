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
        'cp.add_to_head' => ['addFontAwesome', 'addCss'],
    ];

    public function addFontAwesome()
    {
        return $this->js->inline(file_get_contents('https://kit.fontawesome.com/717c607586.js'));
    }

    public function addCss()
    {
        return $this->css->tag('fieldtype.css');
    }

}
