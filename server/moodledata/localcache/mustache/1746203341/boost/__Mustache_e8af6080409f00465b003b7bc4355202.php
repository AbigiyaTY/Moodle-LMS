<?php

class __Mustache_e8af6080409f00465b003b7bc4355202 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<tr>
';
        $value = $context->find('activitycolumn');
        $buffer .= $this->section49d970ead65a1a4a1d25c808661da81d($context, $indent, $value);
        $value = $context->find('cells');
        $buffer .= $this->sectionC3d994915af2efc46e64240382223e02($context, $indent, $value);
        $buffer .= $indent . '</tr>
';

        return $buffer;
    }

    private function sectionE17c6ca54a1ce7262f1761d9ec83b3ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'delegated';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'delegated';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD644811b0d2dd6b7e276200bceaf0050(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{ link }}">';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<a href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3ae39e3dce9945d5872a2a828daa4528(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '</a>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '</a>';
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

    private function section49d970ead65a1a4a1d25c808661da81d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <td class="cell activityname {{#indelegated}}delegated{{/indelegated}}{{^indelegated}}ps-5{{/indelegated}}">
            {{{ activityicon }}}
            {{#link}}<a href="{{ link }}">{{/link}}{{{ text }}}{{#link}}</a>{{/link}}
            {{^visible}}
            <div class="activity-badges my-1" data-region="visibility">
                <span class="badge rounded-pill bg-secondary text-dark">{{#pix}}i/show, core{{/pix}}{{#str}}hiddenfromstudents{{/str}}</span>
            </div>
            {{/visible}}
        </td>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <td class="cell activityname ';
                $value = $context->find('indelegated');
                $buffer .= $this->sectionE17c6ca54a1ce7262f1761d9ec83b3ed($context, $indent, $value);
                $value = $context->find('indelegated');
                if (empty($value)) {
                    
                    $buffer .= 'ps-5';
                }
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('activityicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            ';
                $value = $context->find('link');
                $buffer .= $this->sectionD644811b0d2dd6b7e276200bceaf0050($context, $indent, $value);
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $value = $context->find('link');
                $buffer .= $this->section3ae39e3dce9945d5872a2a828daa4528($context, $indent, $value);
                $buffer .= '
';
                $value = $context->find('visible');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <div class="activity-badges my-1" data-region="visibility">
';
                    $buffer .= $indent . '                <span class="badge rounded-pill bg-secondary text-dark">';
                    $value = $context->find('pix');
                    $buffer .= $this->section6a6391930071a7b8ee93dbc237b86962($context, $indent, $value);
                    $value = $context->find('str');
                    $buffer .= $this->sectionAa413acb7776474efcb52c4cbf9fc6f9($context, $indent, $value);
                    $buffer .= '</span>
';
                    $buffer .= $indent . '            </div>
';
                }
                $buffer .= $indent . '        </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD5d9ea283ea961d5872530fdb12cfe44(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{ text }}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7f5696f93bde165941c38a1c705b0fba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> core/action_link}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/action_link')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC3d994915af2efc46e64240382223e02(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <td class="cell {{ activityclass }}">
            {{#text}}{{{ text }}}{{/text}}
            {{#link}}
                {{> core/action_link}}
            {{/link}}
        </td>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <td class="cell ';
                $value = $this->resolveValue($context->find('activityclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                $value = $context->find('text');
                $buffer .= $this->sectionD5d9ea283ea961d5872530fdb12cfe44($context, $indent, $value);
                $buffer .= '
';
                $value = $context->find('link');
                $buffer .= $this->section7f5696f93bde165941c38a1c705b0fba($context, $indent, $value);
                $buffer .= $indent . '        </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
