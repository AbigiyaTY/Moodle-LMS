<?php

class __Mustache_fcd6299c5854f0f5f22bd6b81a956ee5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid tertiary-navigation full-width-bottom-border">
';
        $buffer .= $indent . '    <div class="row">
';
        $value = $context->find('generalnavselector');
        $buffer .= $this->section2b314e0259f84a11c8f9258d0af4f991($context, $indent, $value);
        $value = $context->find('groupselector');
        $buffer .= $this->section34a7742221f3e3d8ea4ee9ace2677086($context, $indent, $value);
        $value = $context->find('itemselector');
        $buffer .= $this->section6f7804ceaa11aee88e656850511a7dc3($context, $indent, $value);
        $value = $context->find('pagetoggler');
        $buffer .= $this->section718aaaad306b7411387a2dfd3494f2d7($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section2b314e0259f84a11c8f9258d0af4f991(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem order-1">
                {{>core/tertiary_navigation_selector}}
            </div>
            <div class="navitem-divider d-none d-sm-flex order-1"></div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem order-1">
';
                if ($partial = $this->mustache->loadPartial('core/tertiary_navigation_selector')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="navitem-divider d-none d-sm-flex order-1"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section34a7742221f3e3d8ea4ee9ace2677086(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem order-2">
                {{{.}}}
            </div>
            <div class="navitem-divider d-none d-sm-flex order-2"></div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem order-2">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="navitem-divider d-none d-sm-flex order-2"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6f7804ceaa11aee88e656850511a7dc3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem order-3">
                {{{.}}}
            </div>
            <div class="navitem-divider d-none d-sm-flex order-3"></div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem order-3">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="navitem-divider d-none d-sm-flex order-3"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section55f4adbf0f58691f501ef99bab94710f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        require([\'gradereport_singleview/bulkactions\'], function(bulkactions) {
                        bulkactions.init();
                        });
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        require([\'gradereport_singleview/bulkactions\'], function(bulkactions) {
';
                $buffer .= $indent . '                        bulkactions.init();
';
                $buffer .= $indent . '                        });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section176eba6fd37661c9121468edb53e27bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="d-flex navitem ms-0 ms-sm-auto me-3">{{{bulkactions}}}</div>
                    {{#js}}
                        require([\'gradereport_singleview/bulkactions\'], function(bulkactions) {
                        bulkactions.init();
                        });
                    {{/js}}
                    <div class="navitem-divider d-none d-sm-flex"></div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="d-flex navitem ms-0 ms-sm-auto me-3">';
                $value = $this->resolveValue($context->find('bulkactions'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $value = $context->find('js');
                $buffer .= $this->section55f4adbf0f58691f501ef99bab94710f($context, $indent, $value);
                $buffer .= $indent . '                    <div class="navitem-divider d-none d-sm-flex"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section718aaaad306b7411387a2dfd3494f2d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="d-flex row ms-0 ms-sm-auto order-4 px-0">
                {{#bulkactions}}
                    <div class="d-flex navitem ms-0 ms-sm-auto me-3">{{{bulkactions}}}</div>
                    {{#js}}
                        require([\'gradereport_singleview/bulkactions\'], function(bulkactions) {
                        bulkactions.init();
                        });
                    {{/js}}
                    <div class="navitem-divider d-none d-sm-flex"></div>
                {{/bulkactions}}
                <div class="d-flex navitem ms-0 me-auto me-sm-0 ms-sm-auto">
                    {{>gradereport_singleview/page_toggler}}
                </div>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="d-flex row ms-0 ms-sm-auto order-4 px-0">
';
                $value = $context->find('bulkactions');
                $buffer .= $this->section176eba6fd37661c9121468edb53e27bc($context, $indent, $value);
                $buffer .= $indent . '                <div class="d-flex navitem ms-0 me-auto me-sm-0 ms-sm-auto">
';
                if ($partial = $this->mustache->loadPartial('gradereport_singleview/page_toggler')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
