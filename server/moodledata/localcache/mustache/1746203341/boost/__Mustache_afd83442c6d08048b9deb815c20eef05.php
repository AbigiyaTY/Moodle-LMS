<?php

class __Mustache_afd83442c6d08048b9deb815c20eef05 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="loginfo font-lg my-5 pb-2">';
        $value = $context->find('str');
        $buffer .= $this->section887730c49da317dc43c2642815ae97ca($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '<div class="table-responsive">
';
        $value = $context->find('table');
        $buffer .= $this->section0520a6e35db541e173621c3dd75851e0($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section887730c49da317dc43c2642815ae97ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' computedfromlogs, admin, {{{ minlog }}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' computedfromlogs, admin, ';
                $value = $this->resolveValue($context->find('minlog'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section95e0914fb88398e951752015c30d50fe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' id = "{{ id }}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' id = "';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEc2b71f5fb23daaa0340ca0a82b4d26f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <th class="header font-lg" style="" scope="col">{{{ . }}}</th>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <th class="header font-lg" style="" scope="col">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</th>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3f180797361e5d8aa2e69da72c132dd0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{>report_outline/section }}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('report_outline/section')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE3b90ca7d25b28e819f5fe5a9314cbda(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{>report_outline/delegatedsection }}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('report_outline/delegatedsection')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1d903ef31d381e510ea2a2b2f70914e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{>report_outline/activity }}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('report_outline/activity')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section43e0b60f72be387fcae2adb0ab2e0c26(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#issection}}
                    {{>report_outline/section }}
                {{/issection}}
                {{#isdelegated}}
                    {{>report_outline/delegatedsection }}
                {{/isdelegated}}
                {{#isactivity}}
                    {{>report_outline/activity }}
                {{/isactivity}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('issection');
                $buffer .= $this->section3f180797361e5d8aa2e69da72c132dd0($context, $indent, $value);
                $value = $context->find('isdelegated');
                $buffer .= $this->sectionE3b90ca7d25b28e819f5fe5a9314cbda($context, $indent, $value);
                $value = $context->find('isactivity');
                $buffer .= $this->section1d903ef31d381e510ea2a2b2f70914e8($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0520a6e35db541e173621c3dd75851e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <table class="{{ class }}"{{#id}} id = "{{ id }}"{{/id}}>
        <thead>
        <tr>
            {{#headers}}
                <th class="header font-lg" style="" scope="col">{{{ . }}}</th>
            {{/headers}}
        </tr>
        </thead>
        <tbody>
            {{#activities}}
                {{#issection}}
                    {{>report_outline/section }}
                {{/issection}}
                {{#isdelegated}}
                    {{>report_outline/delegatedsection }}
                {{/isdelegated}}
                {{#isactivity}}
                    {{>report_outline/activity }}
                {{/isactivity}}
            {{/activities}}
        </tbody>
    </table>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <table class="';
                $value = $this->resolveValue($context->find('class'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $value = $context->find('id');
                $buffer .= $this->section95e0914fb88398e951752015c30d50fe($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '        <thead>
';
                $buffer .= $indent . '        <tr>
';
                $value = $context->find('headers');
                $buffer .= $this->sectionEc2b71f5fb23daaa0340ca0a82b4d26f($context, $indent, $value);
                $buffer .= $indent . '        </tr>
';
                $buffer .= $indent . '        </thead>
';
                $buffer .= $indent . '        <tbody>
';
                $value = $context->find('activities');
                $buffer .= $this->section43e0b60f72be387fcae2adb0ab2e0c26($context, $indent, $value);
                $buffer .= $indent . '        </tbody>
';
                $buffer .= $indent . '    </table>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
