<?php

class __Mustache_f936f45952d337191c31fdbf411dbf38 extends Mustache_Template
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
        $value = $context->find('addsection');
        $buffer .= $this->section7abaa323a4c5f8ef407cc8eaa972f4a0($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('addsection');
        if (empty($value)) {
            
            $buffer .= $indent . '<li id="section-';
            $value = $this->resolveValue($context->find('index'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '" class="card section main ';
            $value = $context->find('collapsed');
            $buffer .= $this->section7df0e231697f3a9dfdd1138e1b79a2b0($context, $indent, $value);
            $buffer .= ' clearfix " role="region" aria-labelledby="section-';
            $value = $this->resolveValue($context->find('index'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= ' .sectionname a:not(.quickeditlink)">
';
            $buffer .= $indent . '    <div class="content card-block  remui-list-content-border" aria-labelledby="section-';
            $value = $this->resolveValue($context->find('index'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= ' .sectionname a:not(.quickeditlink)">
';
            $buffer .= $indent . '        <div class="course-section-summary-wrapper">
';
            $buffer .= $indent . '            <div class="left side float-left d-flex m-0 justify-content-between w-100">
';
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->find('leftside'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            <div class="course-section-header d-flex align-items-start" data-for="section_title">
';
            $value = $context->find('leftside');
            $buffer .= $this->section32314651cc825a8bb072cba4b96989ba($context, $indent, $value);
            $buffer .= $indent . '                <div class="d-flex flex-column name-progress-wrapper w-100 text-break">
';
            $buffer .= $indent . '                    <h3 class="sectionname card-title m-0 d-inline">
';
            $value = $context->find('editing');
            $buffer .= $this->section6ab08dfa82f330140fa3782300c67d28($context, $indent, $value);
            $value = $context->find('editing');
            if (empty($value)) {
                
                $buffer .= $indent . '                            <a class="panel-title p-0 " href="#sectionwrapper-';
                $value = $this->resolveValue($context->find('index'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" aria-controls="sectionwrapper-';
                $value = $this->resolveValue($context->find('index'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
            }
            $value = $context->find('editing');
            if (empty($value)) {
                
                $value = $context->find('progressinfo');
                $buffer .= $this->section27a6f38d0e66a16009094e829a94ad60($context, $indent, $value);
                $buffer .= $indent . '                            </a>
';
            }
            $buffer .= $indent . '                        <div data-region="sectionbadges" class="sectionbadges d-inline ';
            $value = $context->find('editing');
            if (empty($value)) {
                
                $buffer .= 'ml-2';
            }
            $buffer .= '">
';
            if ($partial = $this->mustache->loadPartial('format_remuiformat/edwbadges')) {
                $buffer .= $partial->renderInternal($context, $indent . '                            ');
            }
            $buffer .= $indent . '                        </div>
';
            $buffer .= $indent . '                    </h3>
';
            $value = $context->find('progressinfo');
            $buffer .= $this->section6b8abe9497777e10a9c7259a96b6fa50($context, $indent, $value);
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '                <div class="side right d-flex ">
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '                    <button class="toggle-icon fa fa-angle-right ml-auto"></button>
';
            $buffer .= $indent . '                    ';
            $value = $this->resolveValue($context->find('addnewsection'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                    ';
            $value = $this->resolveValue($context->find('optionmenu'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            ';
            $value = $context->find('summary');
            $buffer .= $this->sectionFbc2fde32f578e1b7cb86d67d070c1c2($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '        </div>
';
            $value = $context->find('hiddenmessage');
            $buffer .= $this->section1d8cb84151534b47b6f94ce766e2a5f0($context, $indent, $value);
            $buffer .= $indent . '        ';
            $value = $context->find('availability');
            $buffer .= $this->section9a1e17bf338cadc56158cef9c5430877($context, $indent, $value);
            $buffer .= '
';
            $value = $context->find('editing');
            $buffer .= $this->sectionFc77d291a69fdad43ad8060eb5df3a2e($context, $indent, $value);
            $value = $context->find('sectionactivities');
            $buffer .= $this->sectionA70b0e247645f95d6054d95cfceb37ee($context, $indent, $value);
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '</li>
';
        }

        return $buffer;
    }

    private function section57742138bdef30be2374d7f833a76e1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{{removeurl}}}" class="{{removeurlclass}}">{{{removeicon}}} {{{strremovesection}}}</a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('removeurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="';
                $value = $this->resolveValue($context->find('removeurlclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('removeicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('strremovesection'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE8821f813b283b300fd52213603d2a29(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{{addurl}}}" class="{{addurlclass}}">{{{addicon}}} {{{straddsection}}}</a>

            {{#strremovesection}}
            <a href="{{{removeurl}}}" class="{{removeurlclass}}">{{{removeicon}}} {{{strremovesection}}}</a>
            {{/strremovesection}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('addurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="';
                $value = $this->resolveValue($context->find('addurlclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('addicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('straddsection'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '
';
                $value = $context->find('strremovesection');
                $buffer .= $this->section57742138bdef30be2374d7f833a76e1e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7abaa323a4c5f8ef407cc8eaa972f4a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<li id="{{divid}}" class="card clearfix " role="region" style="">
    <div class="content card-block  remui-list-content-border d-flex align-items-center">
        {{#numsections}}
            <a href="{{{addurl}}}" class="{{addurlclass}}">{{{addicon}}} {{{straddsection}}}</a>

            {{#strremovesection}}
            <a href="{{{removeurl}}}" class="{{removeurlclass}}">{{{removeicon}}} {{{strremovesection}}}</a>
            {{/strremovesection}}
        {{/numsections}}

        {{^numsections}}
            <a href="{{{url}}}" data-add-sections="{{{straddsections}}}">{{{icon}}} {{{straddsections}}}</a>
        {{/numsections}}
    </div>
</li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<li id="';
                $value = $this->resolveValue($context->find('divid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="card clearfix " role="region" style="">
';
                $buffer .= $indent . '    <div class="content card-block  remui-list-content-border d-flex align-items-center">
';
                $value = $context->find('numsections');
                $buffer .= $this->sectionE8821f813b283b300fd52213603d2a29($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('numsections');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <a href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '" data-add-sections="';
                    $value = $this->resolveValue($context->find('straddsections'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '">';
                    $value = $this->resolveValue($context->find('icon'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= ' ';
                    $value = $this->resolveValue($context->find('straddsections'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '</a>
';
                }
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7df0e231697f3a9dfdd1138e1b79a2b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'collapsed';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'collapsed';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32314651cc825a8bb072cba4b96989ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="side left">
                    {{{ leftside }}}
                </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="side left">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('leftside'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6ab08dfa82f330140fa3782300c67d28(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{{ title }}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF51624f6e22f51349ea3a6805e16617d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="float-right">
                                    <i class="fa fas fa-check-square text-success"></i>
                                </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="float-right">
';
                $buffer .= $indent . '                                    <i class="fa fas fa-check-square text-success"></i>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27a6f38d0e66a16009094e829a94ad60(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{#completed}}
                                <div class="float-right">
                                    <i class="fa fas fa-check-square text-success"></i>
                                </div>
                                {{/completed}}
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('completed');
                $buffer .= $this->sectionF51624f6e22f51349ea3a6805e16617d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31696a9dc2aaf707950a710a87eadcbe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{ percentage }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('percentage'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB5ec7de3b500d76041115e40eb0d16c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                           {{! progress }}
                           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5b27c426f945a08deaa273fd578a4a7e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' Complete, format_remuiformat ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' Complete, format_remuiformat ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b8abe9497777e10a9c7259a96b6fa50(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="progress-bar-warpper">
                        <div class="progress progress-xs bg-grey-300 m-b-1">
                           <div class="progress-bar bg-green-600" style="width:{{#progressinfo}}{{ percentage }}{{/progressinfo}}{{^progressinfo}}0{{/progressinfo}}%;" role="progressbar">
                           </div>
                        </div>
                        <div class="text-right progress-text">
                           {{#progressinfo}}
                           {{! progress }}
                           {{/progressinfo}}
                           <span>{{#progressinfo}}{{ percentage }}{{/progressinfo}}{{^progressinfo}}0{{/progressinfo}}% {{#str}} Complete, format_remuiformat {{/str}}</span>
                        </div>
                     </div>
                     ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="progress-bar-warpper">
';
                $buffer .= $indent . '                        <div class="progress progress-xs bg-grey-300 m-b-1">
';
                $buffer .= $indent . '                           <div class="progress-bar bg-green-600" style="width:';
                $value = $context->find('progressinfo');
                $buffer .= $this->section31696a9dc2aaf707950a710a87eadcbe($context, $indent, $value);
                $value = $context->find('progressinfo');
                if (empty($value)) {
                    
                    $buffer .= '0';
                }
                $buffer .= '%;" role="progressbar">
';
                $buffer .= $indent . '                           </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="text-right progress-text">
';
                $value = $context->find('progressinfo');
                $buffer .= $this->sectionB5ec7de3b500d76041115e40eb0d16c1($context, $indent, $value);
                $buffer .= $indent . '                           <span>';
                $value = $context->find('progressinfo');
                $buffer .= $this->section31696a9dc2aaf707950a710a87eadcbe($context, $indent, $value);
                $value = $context->find('progressinfo');
                if (empty($value)) {
                    
                    $buffer .= '0';
                }
                $buffer .= '% ';
                $value = $context->find('str');
                $buffer .= $this->section5b27c426f945a08deaa273fd578a4a7e($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                     </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFbc2fde32f578e1b7cb86d67d070c1c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="summary card-text">{{{summary}}}</div>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<div class="summary card-text">';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1d8cb84151534b47b6f94ce766e2a5f0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="section_availability">
            {{{ hiddenmessage }}}
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="section_availability">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('hiddenmessage'), $context);
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

    private function section9a1e17bf338cadc56158cef9c5430877(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' <div class="section_availability badge badge-pill badge-info mb-10">{{{availability}}}</div>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' <div class="section_availability badge badge-pill badge-info mb-10">';
                $value = $this->resolveValue($context->find('availability'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc77d291a69fdad43ad8060eb5df3a2e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="section-summary-activities mdl-right mb-2 p-24 pb-0 pt-0">{{{activityinfostring}}}</div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="section-summary-activities mdl-right mb-2 p-24 pb-0 pt-0">';
                $value = $this->resolveValue($context->find('activityinfostring'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBb768792ca996fc7ab7cf64d2cb117e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'style="display: none;"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'style="display: none;"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA70b0e247645f95d6054d95cfceb37ee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class=" card-footer text-muted border-0 " aria-labelledby="section-{{index}} .sectionname a:not(.quickeditlink)" {{#collapsed}}style="display: none;"{{/collapsed}}>
            {{{sectionactivities}}}
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class=" card-footer text-muted border-0 " aria-labelledby="section-';
                $value = $this->resolveValue($context->find('index'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' .sectionname a:not(.quickeditlink)" ';
                $value = $context->find('collapsed');
                $buffer .= $this->sectionBb768792ca996fc7ab7cf64d2cb117e0($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('sectionactivities'), $context);
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

}
