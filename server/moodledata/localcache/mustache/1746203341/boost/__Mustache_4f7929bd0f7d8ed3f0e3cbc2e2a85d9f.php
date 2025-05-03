<?php

class __Mustache_4f7929bd0f7d8ed3f0e3cbc2e2a85d9f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<tr class="';
        $value = $this->resolveValue($context->find('class'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <td class="cell lastcol"';
        $value = $context->find('headerscount');
        $buffer .= $this->section552a17e3239c9a2c62626f529d95bdc5($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '        <h3>';
        $value = $this->resolveValue($context->find('text'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</h3>
';
        $value = $context->find('visible');
        if (empty($value)) {
            
            $buffer .= $indent . '        <div class="activity-badges my-1" data-region="visibility">
';
            $buffer .= $indent . '            <span class="badge rounded-pill bg-secondary text-dark">';
            $value = $context->find('pix');
            $buffer .= $this->section6a6391930071a7b8ee93dbc237b86962($context, $indent, $value);
            $value = $context->find('str');
            $buffer .= $this->sectionAa413acb7776474efcb52c4cbf9fc6f9($context, $indent, $value);
            $buffer .= '</span>
';
            $buffer .= $indent . '        </div>
';
        }
        $buffer .= $indent . '    </td>
';
        $buffer .= $indent . '</tr>
';

        return $buffer;
    }

    private function section552a17e3239c9a2c62626f529d95bdc5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' colspan="{{headerscount}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' colspan="';
                $value = $this->resolveValue($context->find('headerscount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a6391930071a7b8ee93dbc237b86962(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/show, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/show, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAa413acb7776474efcb52c4cbf9fc6f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hiddenfromstudents';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'hiddenfromstudents';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
