<?php

class __Mustache_3418f16628d609970ab755bf75f20909 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core/content/export/external_page')) {
            $context->pushBlockContext(array(
                'pagecontent' => array($this, 'blockAf367bf3d461938c65d96f61731d5500'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section80462c4ac8e72fc7564c98238dad7c71(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{modulename}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('modulename'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section61e29a71102e3c7ad7610f112ce2412d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'contentexport_modulesummary, core,
{
    "modulelink": "{{modulelink}}",
    "modulename": {{#quote}}{{{modulename}}}{{/quote}},
    "date": "{{global.exportdate}}",
    "maxfilesize": "{{global.maxfilesize}}"
}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'contentexport_modulesummary, core,
';
                $buffer .= $indent . '{
';
                $buffer .= $indent . '    "modulelink": "';
                $value = $this->resolveValue($context->find('modulelink'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '",
';
                $buffer .= $indent . '    "modulename": ';
                $value = $context->find('quote');
                $buffer .= $this->section80462c4ac8e72fc7564c98238dad7c71($context, $indent, $value);
                $buffer .= ',
';
                $buffer .= $indent . '    "date": "';
                $value = $this->resolveValue($context->findDot('global.exportdate'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '",
';
                $buffer .= $indent . '    "maxfilesize": "';
                $value = $this->resolveValue($context->findDot('global.maxfilesize'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '}
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section805a82073956353217888a18a92a1054(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'moduleintro, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'moduleintro, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6f2dbc9fb54b15c58f1daa68b3f549ad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <h3>{{#str}}moduleintro, core{{/str}}</h3>
    <div>
        {{{intro}}}
    </div>
    <hr>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <h3>';
                $value = $context->find('str');
                $buffer .= $this->section805a82073956353217888a18a92a1054($context, $indent, $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '    <div>
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('intro'), $context);
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

    private function section0fad4026e8a2682b5ea40e050668024e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div>
                {{{content}}}
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
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

    private function section52948bd0f6d985e86a151d6f674ed194(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                <li><a href="';
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

    private function section87edd3de3e390913a6f21db3253d3465(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <ul>
            {{#files}}
                <li><a href="{{filepath}}" title="{{#str}}contentexport_viewfilename, core, {{filename}}{{/str}}">{{filename}}</a></li>
            {{/files}}
            </ul>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <ul>
';
                $value = $context->find('files');
                $buffer .= $this->section52948bd0f6d985e86a151d6f674ed194($context, $indent, $value);
                $buffer .= $indent . '            </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5b3b00853d03f48a4d359941329aada3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div>
        <h3>{{{title}}}</h3>
        <div>
            {{#content}}
            <div>
                {{{content}}}
            </div>
            {{/content}}

            {{#files.0}}
            <ul>
            {{#files}}
                <li><a href="{{filepath}}" title="{{#str}}contentexport_viewfilename, core, {{filename}}{{/str}}">{{filename}}</a></li>
            {{/files}}
            </ul>
            {{/files.0}}
        </div>
    </div>
    <hr>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div>
';
                $buffer .= $indent . '        <h3>';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '        <div>
';
                $value = $context->find('content');
                $buffer .= $this->section0fad4026e8a2682b5ea40e050668024e($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->findDot('files.0');
                $buffer .= $this->section87edd3de3e390913a6f21db3253d3465($context, $indent, $value);
                $buffer .= $indent . '        </div>
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

    public function blockAf367bf3d461938c65d96f61731d5500($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '    <h2>
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('modulename'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </h2>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="alert alert-info alert-block">
';
        $buffer .= $indent . '        ';
        $value = $context->find('str');
        $buffer .= $this->section61e29a71102e3c7ad7610f112ce2412d($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('intro');
        $buffer .= $this->section6f2dbc9fb54b15c58f1daa68b3f549ad($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('sections');
        $buffer .= $this->section5b3b00853d03f48a4d359941329aada3($context, $indent, $value);
    
        return $buffer;
    }
}
