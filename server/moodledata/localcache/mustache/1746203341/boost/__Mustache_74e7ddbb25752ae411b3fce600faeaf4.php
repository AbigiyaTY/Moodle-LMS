<?php

class __Mustache_74e7ddbb25752ae411b3fce600faeaf4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="flex-column h-100 w-100">
';
        $buffer .= $indent . '    <span class="d-none" data-region="courseid" data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" aria-hidden="true"></span>
';
        $buffer .= $indent . '    ';
        if ($parent = $this->mustache->loadPartial('core/search_input_auto')) {
            $context->pushBlockContext(array(
                'label' => array($this, 'block2930240af41e703f37fec02a0e5e8524'),
                'placeholder' => array($this, 'block2930240af41e703f37fec02a0e5e8524'),
                'value' => array($this, 'block6461ec0d6ca7ef922be0d61813a9ee9a'),
                'additionalattributes' => array($this, 'blockE74415611db2f9c10bf46b48ead631c7'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= $indent . '    <input type="hidden" name="search" id="result-input-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-';
        $value = $this->resolveValue($context->find('instance'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"/>
';
        $buffer .= $indent . '    <div data-region="searchplaceholder"></div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionF0dce50a311db47d57159d5875ffe61e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            searchitems, core
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $buffer .= $indent . '            searchitems, core
';
                $buffer .= $indent . '        ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block2930240af41e703f37fec02a0e5e8524($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->sectionF0dce50a311db47d57159d5875ffe61e($context, $indent, $value);
    
        return $buffer;
    }

    public function block6461ec0d6ca7ef922be0d61813a9ee9a($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('currentvalue'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
    
        return $buffer;
    }

    public function blockE74415611db2f9c10bf46b48ead631c7($context)
    {
        $indent = $buffer = '';
        $buffer .= '            role="combobox"
';
        $buffer .= $indent . '            aria-expanded="true"
';
        $buffer .= $indent . '            aria-controls="list-';
        $value = $this->resolveValue($context->find('instance'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-result-listbox"
';
        $buffer .= $indent . '            aria-autocomplete="list"
';
        $buffer .= $indent . '            data-input-element="result-input-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-';
        $value = $this->resolveValue($context->find('instance'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
    
        return $buffer;
    }
}
