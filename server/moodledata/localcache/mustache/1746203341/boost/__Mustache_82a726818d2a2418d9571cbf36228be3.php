<?php

class __Mustache_82a726818d2a2418d9571cbf36228be3 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<!DOCTYPE html>
';
        $buffer .= $indent . '<html lang="';
        $value = $this->resolveValue($context->findDot('global.language'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $value = $context->findDot('global.righttoleft');
        $buffer .= $this->section9e97e9910354f639dae3c0778b84c94f($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '<head>
';
        $buffer .= $indent . '    <meta charset="UTF-8">
';
        $buffer .= $indent . '    <title>';
        $value = $this->resolveValue($context->findDot('global.sitename'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ' - ';
        $value = $this->resolveValue($context->findDot('global.coursename'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</title>
';
        $buffer .= $indent . '    <link rel="stylesheet" type="text/css" href="';
        $value = $this->resolveValue($context->findDot('global.pathtotop'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '/shared/moodle.css" />
';
        $buffer .= $indent . '    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
';
        $buffer .= $indent . '</head>
';
        $buffer .= $indent . '<body>
';
        $buffer .= $indent . '    <div class="d-flex flex-column h-100">
';
        $buffer .= $indent . '        <nav class="navbar navbar-light bg-white border-bottom">
';
        $buffer .= $indent . '            <div class="container-fluid p-0">
';
        $buffer .= $indent . '                <a class="navbar-brand" href="';
        $value = $this->resolveValue($context->findDot('global.siteurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" title="';
        $value = $this->resolveValue($context->findDot('global.sitename'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('global.sitename'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </nav>
';
        $buffer .= $indent . '        <main class="container-fluid mt-2 flex-grow-1 flex-shrink-1">
';
        $buffer .= $indent . '            <div>
';
        $buffer .= $indent . '                <h1><a href="';
        $value = $this->resolveValue($context->findDot('global.pathtotop'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= 'index.html">';
        $value = $this->resolveValue($context->findDot('global.coursename'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</a></h1>
';
        $buffer .= $indent . '                <p>';
        $value = $this->resolveValue($context->findDot('global.courseshortname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</p>
';
        $buffer .= $indent . '                ';
        $blockFunction = $context->findInBlock('pagecontent');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </main>
';
        $buffer .= $indent . '        <footer id="page-footer" class="py-3">
';
        $buffer .= $indent . '            <div class="container">
';
        $buffer .= $indent . '                <div>';
        $value = $this->resolveValue($context->findDot('global.contentexportfooter'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </footer>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';

        return $buffer;
    }

    private function section9e97e9910354f639dae3c0778b84c94f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' dir="rtl"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' dir="rtl"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
