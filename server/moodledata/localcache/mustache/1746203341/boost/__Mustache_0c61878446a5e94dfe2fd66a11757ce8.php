<?php

class __Mustache_0c61878446a5e94dfe2fd66a11757ce8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core/content/export/external_page')) {
            $context->pushBlockContext(array(
                'pagecontent' => array($this, 'blockF82de987ecfe509982609576e37b29d7'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section647f9f8539ec56aa6ab464a60f791390(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'contentexport_aboutthiscourse, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'contentexport_aboutthiscourse, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section872fe7b037a12651ae196355aff9d1be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div>
        <a href="{{{aboutpagelink}}}">{{#str}}contentexport_aboutthiscourse, core{{/str}}</a>
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div>
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('aboutpagelink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section647f9f8539ec56aa6ab464a60f791390($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa65168c3f915df708cb92f9c3e94bdc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div>
            {{{summary}}}
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div>
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD766513937e8309af68d8d9c116cd8d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li><a href="{{{link}}}">{{{title}}} ({{{modname}}})</a></li>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <li><a href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' (';
                $value = $this->resolveValue($context->find('modname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ')</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE82160f90628d265450ed95bd6a75f6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <ul>
        {{#activities}}
            <li><a href="{{{link}}}">{{{title}}} ({{{modname}}})</a></li>
        {{/activities}}
        </ul>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <ul>
';
                $value = $context->find('activities');
                $buffer .= $this->sectionD766513937e8309af68d8d9c116cd8d7($context, $indent, $value);
                $buffer .= $indent . '        </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3860cd66f7f0a154c7baa38faeffd4d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <h3>{{{title}}}</h3>
        {{#summary}}
        <div>
            {{{summary}}}
        </div>
        {{/summary}}
        {{#activities.0}}
        <ul>
        {{#activities}}
            <li><a href="{{{link}}}">{{{title}}} ({{{modname}}})</a></li>
        {{/activities}}
        </ul>
        {{/activities.0}}
        <hr>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <h3>';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>
';
                $value = $context->find('summary');
                $buffer .= $this->sectionFa65168c3f915df708cb92f9c3e94bdc($context, $indent, $value);
                $value = $context->findDot('activities.0');
                $buffer .= $this->sectionE82160f90628d265450ed95bd6a75f6e($context, $indent, $value);
                $buffer .= $indent . '        <hr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8690fb132f1af9433cdbc655ce542b63(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div>
        {{#sections}}
        <h3>{{{title}}}</h3>
        {{#summary}}
        <div>
            {{{summary}}}
        </div>
        {{/summary}}
        {{#activities.0}}
        <ul>
        {{#activities}}
            <li><a href="{{{link}}}">{{{title}}} ({{{modname}}})</a></li>
        {{/activities}}
        </ul>
        {{/activities.0}}
        <hr>
        {{/sections}}
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div>
';
                $value = $context->find('sections');
                $buffer .= $this->section3860cd66f7f0a154c7baa38faeffd4d5($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockF82de987ecfe509982609576e37b29d7($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '    <div class="alert alert-info alert-block">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('global.contentexportsummary'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $value = $context->find('aboutpagelink');
        $buffer .= $this->section872fe7b037a12651ae196355aff9d1be($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->findDot('sections.0');
        $buffer .= $this->section8690fb132f1af9433cdbc655ce542b63($context, $indent, $value);
    
        return $buffer;
    }
}
