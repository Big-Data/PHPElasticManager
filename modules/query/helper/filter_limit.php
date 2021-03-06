<?php

class filter_limit extends query_base_model
{
    protected
        $parents = array(
            'filter',
            'filters',
            'and',
            'not',
            'or',
            'must_filter',
            'must_not_filter',
            'should_filter'
        ),
        $type = 'filter',
        $name = 'limit';

    protected function constructBody()
    {
        $this->createHeader();
        $this->createMinus();

        $this->createNestDiv('value');
        $this->createLabel('value');
        $this->createTextInput('setval');
        $this->createCloseDiv();

        return $this->output();
    }

}
