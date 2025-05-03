<?php

class __Mustache_75865eba5ab1133a1b0211f0c58cad3e extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<span class="d-none" data-region="groupid" data-groupid="';
        $value = $this->resolveValue($context->find('group'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"></span>
';
        $buffer .= $indent . '<div class="align-items-center d-flex">
';
        $buffer .= $indent . '    <div class="d-block pe-3 text-truncate">
';
        $buffer .= $indent . '        <label class="d-block m-0 small" aria-hidden="true">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('label'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '        </label>
';
        $buffer .= $indent . '        <span class="p-0 font-weight-bold" data-selected-option>
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('selectedgroup'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '        </span>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
