<?php

use Fuel\Core\Controller_Rest;

class Controller_Test extends Controller_Rest
{
    public function get_list()
    {
        $test = ['aaaa\naaa\na','bbbb\nbbbb','cccc\ncccc'];

        $test2 = str_replace('\n','', $test);

        return $this->response(array(
            'foo' => Input::get('foo'),
            'baz' => array(
                1, 50, 219
            ),
            'empty' => null
        ));
    }

}
