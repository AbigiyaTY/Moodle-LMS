<?php

class __Mustache_6402f43c087984c436c001e505299b22 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $value = $context->find('editing');
        $buffer .= $this->sectionBa3d0300d0dec45b88fa0c4c2023677b($context, $indent, $value);
        $value = $context->find('editing');
        if (empty($value)) {
            
            $buffer .= $indent . '<div id="card-container" class="remui-format-card all-section-format theme-';
            $value = $this->resolveValue($context->find('theme'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= ' row">
';
            $buffer .= $indent . '    <ul class="sections row generalsection-container">
';
            $value = $context->find('generalsection');
            $buffer .= $this->section16c5b4b2c583985634daeb4957c284ca($context, $indent, $value);
            $buffer .= $indent . '    </ul>
';
            $buffer .= $indent . '  </div>
';
            $buffer .= $indent . '<div id="list-container" class="remui-format-list one-section-format all-section theme-';
            $value = $this->resolveValue($context->find('theme'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= ' mt-20">
';
            $buffer .= $indent . '    <ul class="sections row">
';
            $value = $context->find('sections');
            $buffer .= $this->sectionD818bee5120044427eeede494593e4b7($context, $indent, $value);
            $buffer .= $indent . '    </ul>
';
            $buffer .= $indent . '</div>
';
        }

        return $buffer;
    }

    private function section98a32e1f8de3d023e30214b50541befd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> format_remuiformat/card_general_section_edit }}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_remuiformat/card_general_section_edit')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD818bee5120044427eeede494593e4b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> format_remuiformat/list_sections_summary }}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_remuiformat/list_sections_summary')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBa3d0300d0dec45b88fa0c4c2023677b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="card-editing-container" class="remui-format-card all-section-format theme-{{theme}} row">
    <ul class="sections row generalsection-container">
        {{! Display General Section }}
        {{#generalsection}}
        {{> format_remuiformat/card_general_section_edit }}
        {{/generalsection}}
    </ul>
</div>
<div id="list-editing-container" class="remui-format-list one-section-format all-section theme-{{theme}} mt-20">
    <ul class="sections row">
        {{! Display Remaining Section }}
        {{#sections}}
            {{> format_remuiformat/list_sections_summary }}
        {{/sections}}
        {{{ addsection }}}
    </ul>
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div id="card-editing-container" class="remui-format-card all-section-format theme-';
                $value = $this->resolveValue($context->find('theme'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' row">
';
                $buffer .= $indent . '    <ul class="sections row generalsection-container">
';
                $value = $context->find('generalsection');
                $buffer .= $this->section98a32e1f8de3d023e30214b50541befd($context, $indent, $value);
                $buffer .= $indent . '    </ul>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '<div id="list-editing-container" class="remui-format-list one-section-format all-section theme-';
                $value = $this->resolveValue($context->find('theme'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' mt-20">
';
                $buffer .= $indent . '    <ul class="sections row">
';
                $value = $context->find('sections');
                $buffer .= $this->sectionD818bee5120044427eeede494593e4b7($context, $indent, $value);
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('addsection'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '    </ul>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section16c5b4b2c583985634daeb4957c284ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> format_remuiformat/list_general_section }}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_remuiformat/list_general_section')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
