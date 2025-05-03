<?php

class __Mustache_a58cc910d1a220499d45f90033a347da extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="align-items-center d-flex">
';
        $value = $context->find('selectedoption');
        $buffer .= $this->section4584921df9b04e8a8cffba0f793a0f3e($context, $indent, $value);
        $value = $context->find('selectedoption');
        if (empty($value)) {
            
            $buffer .= $indent . '        <div class="user-info d-block pe-3">
';
            $buffer .= $indent . '            ';
            $value = $context->find('str');
            $buffer .= $this->sectionC11f72ce5819afb0975155120d90fc81($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '        </div>
';
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<span class="d-none" data-region="courseid" data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"></span>
';
        $buffer .= $indent . '<span class="d-none" data-region="itemid" data-itemid="';
        $value = $this->resolveValue($context->find('itemid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"></span>
';
        $buffer .= $indent . '<span class="d-none" data-region="instance" data-instance="';
        $value = $this->resolveValue($context->find('instance'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"></span>
';

        return $buffer;
    }

    private function sectionC11f72ce5819afb0975155120d90fc81(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' selectagrade, gradereport_singleview ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' selectagrade, gradereport_singleview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4584921df9b04e8a8cffba0f793a0f3e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="d-block pe-3 text-truncate">
                    <span class="d-block small" aria-hidden="true">
                        {{#str}} selectagrade, gradereport_singleview {{/str}}
                    </span>
            <span class="p-0 font-weight-bold">
                {{text}}
            </span>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="d-block pe-3 text-truncate">
';
                $buffer .= $indent . '                    <span class="d-block small" aria-hidden="true">
';
                $buffer .= $indent . '                        ';
                $value = $context->find('str');
                $buffer .= $this->sectionC11f72ce5819afb0975155120d90fc81($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </span>
';
                $buffer .= $indent . '            <span class="p-0 font-weight-bold">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '            </span>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
