<?php

class __Mustache_62102053cc10cfd9163bc214939b0323 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core/content/export/external_page')) {
            $context->pushBlockContext(array(
                'pagecontent' => array($this, 'blockAa783aa854a956cf28b7adeec781feaa'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section3168e9ba6374e0091f650711445a56f1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'summary, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'summary, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section658404387608c6f6801ba325eb0cdb82(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <h2>{{#str}}summary, core{{/str}}</h2>
    <div>
        {{{summary}}}
    </div>
    <hr>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <h2>';
                $value = $context->find('str');
                $buffer .= $this->section3168e9ba6374e0091f650711445a56f1($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '    <div>
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <hr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7b35d7764f7dd8cc278bffb87f08c962(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'courseoverviewfiles, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'courseoverviewfiles, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8aafe4f654ff41ad464ba909ec6e8727(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'contentexport_viewfilename, core, {{filename}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'contentexport_viewfilename, core, ';
                $value = $this->resolveValue($context->find('filename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section08f6082c85be022df03068e01f3496c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li><a href="{{filepath}}" title="{{#str}}contentexport_viewfilename, core, {{filename}}{{/str}}">{{filename}}</a></li>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <li><a href="';
                $value = $this->resolveValue($context->find('filepath'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->section8aafe4f654ff41ad464ba909ec6e8727($context, $indent, $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('filename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e764b56f555503092404df924595053(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <ul>
        {{#overviewfiles}}
            <li><a href="{{filepath}}" title="{{#str}}contentexport_viewfilename, core, {{filename}}{{/str}}">{{filename}}</a></li>
        {{/overviewfiles}}
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
                $value = $context->find('overviewfiles');
                $buffer .= $this->section08f6082c85be022df03068e01f3496c2($context, $indent, $value);
                $buffer .= $indent . '        </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section66a4a5c181e8131ec8884b0b9775f040(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <h2>{{#str}}courseoverviewfiles, core{{/str}}</h2>
    <div>
        {{#overviewfiles.0}}
        <ul>
        {{#overviewfiles}}
            <li><a href="{{filepath}}" title="{{#str}}contentexport_viewfilename, core, {{filename}}{{/str}}">{{filename}}</a></li>
        {{/overviewfiles}}
        </ul>
        {{/overviewfiles.0}}
    </div>
    <hr>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <h2>';
                $value = $context->find('str');
                $buffer .= $this->section7b35d7764f7dd8cc278bffb87f08c962($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '    <div>
';
                $value = $context->findDot('overviewfiles.0');
                $buffer .= $this->section7e764b56f555503092404df924595053($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <hr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockAa783aa854a956cf28b7adeec781feaa($context)
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
        $value = $context->find('summary');
        $buffer .= $this->section658404387608c6f6801ba325eb0cdb82($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->findDot('overviewfiles.0');
        $buffer .= $this->section66a4a5c181e8131ec8884b0b9775f040($context, $indent, $value);
    
        return $buffer;
    }
}
