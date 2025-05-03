<?php

class __Mustache_48c0b5e5881af26dfe4d4ed1ec63e2fa extends Mustache_Template
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
        $value = $context->find('hiddensection');
        $buffer .= $this->section03c43a8fef065e9d99bd8fc69a98c5fe($context, $indent, $value);
        $value = $context->find('hiddensection');
        if (empty($value)) {
            
            $buffer .= $indent . '
';
            $buffer .= $indent . '<div id="card-editing-container" class="remui-format-card single-section-format row ">
';
            $value = $context->find('headerdata');
            $buffer .= $this->sectionF309c01b3bc95a6f0885f8ea5d28e1fe($context, $indent, $value);
            $buffer .= $indent . '    <ul class="sections">
';
            $buffer .= $indent . '        <li id="section-';
            $value = $this->resolveValue($context->find('section'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" class="section main" aria-labelledby="';
            $value = $this->resolveValue($context->find('uniqid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" data-sectionid="';
            $value = $this->resolveValue($context->find('section'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '"
';
            $buffer .= $indent . '            data-courseid="';
            $value = $this->resolveValue($context->find('courseid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '">
';
            $buffer .= $indent . '            <div class="section-details d-flex flex-column justify-content-between flex-wrap">
';
            $buffer .= $indent . '                <div class=" general-single-card p-0 d-flex">
';
            $buffer .= $indent . '                    <div class="d-flex header-progresbar-wrapper">
';
            $buffer .= $indent . '                        <h2 class="section-title m-0 d-flex">
';
            $value = $context->find('comment');
            $buffer .= $this->sectionD57ed3b8444e40af443b8f24d89524a1($context, $indent, $value);
            $buffer .= $indent . '
';
            $buffer .= $indent . '                            <span id="';
            $value = $this->resolveValue($context->find('uniqid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '"
';
            $buffer .= $indent . '                                class="single-section-title d-inline ';
            $value = $context->find('hidden');
            $buffer .= $this->section84abb2ca392375a862f0cffdc8fe21b3($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '                                ';
            $value = $this->resolveValue($context->find('title'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                                <div data-region="sectionbadges "
';
            $buffer .= $indent . '                                    class="sectionbadges d-inline ">
';
            if ($partial = $this->mustache->loadPartial('format_remuiformat/edwbadges')) {
                $buffer .= $partial->renderInternal($context, $indent . '                                    ');
            }
            $buffer .= $indent . '                                </div>
';
            $buffer .= $indent . '                            </span>
';
            $buffer .= $indent . '                        </h2>
';
            $value = $context->find('progressinfo');
            $buffer .= $this->section684b9f83704117325695152f9d332e71($context, $indent, $value);
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                    <div class="d-flex justify-content-between flex-gap-16">
';
            $buffer .= $indent . '                        <!-- next/prev sections -->
';
            $buffer .= $indent . '                        <div class="d-flex no-wrap flex-gap-8">
';
            $buffer .= $indent . '                            <div class=" p-0 wdm-card-section m-0 text-nowrap align-items-center">
';
            $value = $context->find('leftnav');
            $buffer .= $this->sectionCf7842f7259de8d67a416d51a4150345($context, $indent, $value);
            $value = $context->find('rightnav');
            $buffer .= $this->section4cf4dc25f07cfb4c22e30169c223be3e($context, $indent, $value);
            $buffer .= $indent . '                            </div>
';
            $value = $context->find('editing');
            $buffer .= $this->section13f1d4562f48766f7dc09b22ef131db9($context, $indent, $value);
            $buffer .= $indent . '                        </div>
';
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                </div>
';
            $value = $context->find('summary');
            $buffer .= $this->section0be78ee024cad08f8af6bcf7878d6b6c($context, $indent, $value);
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            <div class="content">
';
            $buffer .= $indent . '                <div class="summary">
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '                <ul class="activity-cards section yui3-dd-drop">
';
            $value = $context->find('activities');
            $buffer .= $this->sectionF751e716982dfa0eb6068cd2ca0a3160($context, $indent, $value);
            $buffer .= $indent . '                </ul>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            ';
            $value = $this->resolveValue($context->find('addnewactivity'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '        </li>
';
            $value = $context->find('sections');
            $buffer .= $this->section4b5e32c20ac38351fd8d96cfa977f6f5($context, $indent, $value);
            $buffer .= $indent . '    </ul>
';
            $buffer .= $indent . '</div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '<!-- next/prev sections -->
';
            $buffer .= $indent . '<div class="col-md-12 p-0 wdm-card-section">
';
            $buffer .= $indent . '    <div class="card-section-leftnav">
';
            $buffer .= $indent . '        ';
            $value = $this->resolveValue($context->find('leftnav'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '    <div class="card-section-rightnav">
';
            $buffer .= $indent . '        ';
            $value = $this->resolveValue($context->find('rightnav'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '</div>
';
        }

        return $buffer;
    }

    private function section03c43a8fef065e9d99bd8fc69a98c5fe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{{ hiddensection }}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('hiddensection'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF309c01b3bc95a6f0885f8ea5d28e1fe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{>format_remuiformat/optional_secheader}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_remuiformat/optional_secheader')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section84abb2ca392375a862f0cffdc8fe21b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'text-muted';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'text-muted';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD57ed3b8444e40af443b8f24d89524a1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <span class="sno {{#hidden}}text-muted{{/hidden}}">
                                    {{ section }}&#46;
                                </span>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <span class="sno ';
                $value = $context->find('hidden');
                $buffer .= $this->section84abb2ca392375a862f0cffdc8fe21b3($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('section'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&#46;
';
                $buffer .= $indent . '                                </span>
';
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

    private function sectionB5e029d658bf166ee1ce49149d125f2a(Mustache_Context $context, $indent, $value)
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

    private function sectionCe59190e0ebbabad4df40f77f732f849(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{ percentage
                                    }}';
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

    private function section684b9f83704117325695152f9d332e71(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="progress-bar-warpper">
                            <div class="progress progress-xs bg-grey-300 m-b-1">
                                <div class="progress-bar bg-green-600"
                                    style="width:{{#progressinfo}}{{ percentage }}{{/progressinfo}}{{^progressinfo}}0{{/progressinfo}}%;"
                                    role="progressbar">
                                </div>
                            </div>
                            <div class="text-right progress-text">
                                {{#progressinfo}}
                                {{! progress }}
                                {{/progressinfo}}
                                <span>{{#progressinfo}}{{ percentage
                                    }}{{/progressinfo}}{{^progressinfo}}0{{/progressinfo}}%</span>
                            </div>
                        </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="progress-bar-warpper">
';
                $buffer .= $indent . '                            <div class="progress progress-xs bg-grey-300 m-b-1">
';
                $buffer .= $indent . '                                <div class="progress-bar bg-green-600"
';
                $buffer .= $indent . '                                    style="width:';
                $value = $context->find('progressinfo');
                $buffer .= $this->section31696a9dc2aaf707950a710a87eadcbe($context, $indent, $value);
                $value = $context->find('progressinfo');
                if (empty($value)) {
                    
                    $buffer .= '0';
                }
                $buffer .= '%;"
';
                $buffer .= $indent . '                                    role="progressbar">
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="text-right progress-text">
';
                $value = $context->find('progressinfo');
                $buffer .= $this->sectionB5e029d658bf166ee1ce49149d125f2a($context, $indent, $value);
                $buffer .= $indent . '                                <span>';
                $value = $context->find('progressinfo');
                $buffer .= $this->sectionCe59190e0ebbabad4df40f77f732f849($context, $indent, $value);
                $value = $context->find('progressinfo');
                if (empty($value)) {
                    
                    $buffer .= '0';
                }
                $buffer .= '%</span>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCf7842f7259de8d67a416d51a4150345(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="card-section-leftnav">
                                        {{{ leftnav }}}
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="card-section-leftnav">
';
                $buffer .= $indent . '                                        ';
                $value = $this->resolveValue($context->find('leftnav'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4cf4dc25f07cfb4c22e30169c223be3e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="card-section-rightnav">
                                        {{{ rightnav }}}
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="card-section-rightnav">
';
                $buffer .= $indent . '                                        ';
                $value = $this->resolveValue($context->find('rightnav'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section13f1d4562f48766f7dc09b22ef131db9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="right side mt-0">
                                {{{ optionmenu }}}
                            </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="right side mt-0">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('optionmenu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0be78ee024cad08f8af6bcf7878d6b6c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <p>{{{ summary }}}</p>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <p>';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9b3f566a77c0c121abe78d9fcc1f799e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'col-activity';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'col-activity';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb6eb7848b1d256ff586ce0a983abf90(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'row-activity fullwidth-grid-item';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'row-activity fullwidth-grid-item';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb07f23c1e2b6712c71e3de0bd490f98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{{move}}}
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('move'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section40edc8faff45f33174889d383d0c7cac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showincard, format_remuiformat ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' showincard, format_remuiformat ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0f59cb77bfc9e1f3e03ea1231512fe41(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            ecf-cols, format_remuiformat,
                                            {{# str }} showincard, format_remuiformat {{/ str }}
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            ecf-cols, format_remuiformat,
';
                $buffer .= $indent . '                                            ';
                $value = $context->find('str');
                $buffer .= $this->section40edc8faff45f33174889d383d0c7cac($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCa292fcec3a5dffa2b6a2316eadb5eb4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showinrow, format_remuiformat ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' showinrow, format_remuiformat ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCaa0be7574e5aa95be33ee8be00d5665(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            ecf-rows, format_remuiformat,
                                            {{# str }} showinrow, format_remuiformat {{/ str }}
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            ecf-rows, format_remuiformat,
';
                $buffer .= $indent . '                                            ';
                $value = $context->find('str');
                $buffer .= $this->sectionCa292fcec3a5dffa2b6a2316eadb5eb4($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB0072dede4233abddad41beacd1076c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="actions d-inline-flex actions flex-gap-8">
                                    <span class="toggle-row-column btn btn-inverse" data-activityid="{{ id }}">
                                        <span class=\'type-col\'>
                                            {{# pix }}
                                            ecf-cols, format_remuiformat,
                                            {{# str }} showincard, format_remuiformat {{/ str }}
                                            {{/ pix }}
                                        </span>
                                        <span class=\'type-row\'>
                                            {{# pix }}
                                            ecf-rows, format_remuiformat,
                                            {{# str }} showinrow, format_remuiformat {{/ str }}
                                            {{/ pix }}
                                        </span>
                                    </span>
                                    {{{ modicons }}}
                                </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="actions d-inline-flex actions flex-gap-8">
';
                $buffer .= $indent . '                                    <span class="toggle-row-column btn btn-inverse" data-activityid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                        <span class=\'type-col\'>
';
                $value = $context->find('pix');
                $buffer .= $this->section0f59cb77bfc9e1f3e03ea1231512fe41($context, $indent, $value);
                $buffer .= $indent . '                                        </span>
';
                $buffer .= $indent . '                                        <span class=\'type-row\'>
';
                $value = $context->find('pix');
                $buffer .= $this->sectionCaa0be7574e5aa95be33ee8be00d5665($context, $indent, $value);
                $buffer .= $indent . '                                        </span>
';
                $buffer .= $indent . '                                    </span>
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('modicons'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3db2c70d3ea66618d3d5f13ad2820a1d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <h4 id="module-{{id}}-title" class="title {{^summary}}nosummary{{/summary}} m-0">
                                    {{{ title }}}
                                </h4>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <h4 id="module-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-title" class="title ';
                $value = $context->find('summary');
                if (empty($value)) {
                    
                    $buffer .= 'nosummary';
                }
                $buffer .= ' m-0">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </h4>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section71bcfb5a57064a34d12536d57ded9b83(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div data-region="sectionbadges" class="sectionbadges d-flex align-items-center {{^editing}}{{/editing}}">
                                    {{!> core_courseformat/local/content/section/badges }}
                                    {{>format_remuiformat/edwbadges}}

                                </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div data-region="sectionbadges" class="sectionbadges d-flex align-items-center ';
                $value = $context->find('editing');
                if (empty($value)) {
                    
                }
                $buffer .= '">
';
                if ($partial = $this->mustache->loadPartial('format_remuiformat/edwbadges')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                    ');
                }
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a071135502ba3f510046b2eb89448a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hiddenoncoursepage';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'hiddenoncoursepage';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9d398ef7aa36e6506aae24a776eda215(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="mt-2 d-flex align-items-center">
                                    <span
                                        class="badge badge-pill badge-warning">{{#str}}hiddenoncoursepage{{/str}}</span>
                                </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="mt-2 d-flex align-items-center">
';
                $buffer .= $indent . '                                    <span
';
                $buffer .= $indent . '                                        class="badge badge-pill badge-warning">';
                $value = $context->find('str');
                $buffer .= $this->section0a071135502ba3f510046b2eb89448a0($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section95382c681e25f977469618e0fb929502(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            {{{ fullcontent }}}
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            ';
                $value = $this->resolveValue($context->find('fullcontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE17ed0775a679d870647a86caff4355d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="activity-content">
                                        {{#label}}
                                            {{{ fullcontent }}}
                                        {{/label}}
                                        {{^label}}
                                            {{{ summary }}}
                                        {{/label}}
                                </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="activity-content">
';
                $value = $context->find('label');
                $buffer .= $this->section95382c681e25f977469618e0fb929502($context, $indent, $value);
                $value = $context->find('label');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                            ';
                    $value = $this->resolveValue($context->find('summary'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section752ce5c2d6ea1734cd3e0776964854df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <div>
                                            <strong>{{label}}</strong> {{timestamp}}
                                        </div>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <div>
';
                $buffer .= $indent . '                                            <strong>';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</strong> ';
                $value = $this->resolveValue($context->find('timestamp'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3b816848266ffefc2206faac617dcf3e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="description text-left">
                                <div data-region="activity-dates" class="activity-dates small course-description-item">
                                    <div class="description-inner">
                                        {{#opendue}}
                                        <div>
                                            <strong>{{label}}</strong> {{timestamp}}
                                        </div>
                                        {{/opendue}}
                                    </div>
                                </div>
                            </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="description text-left">
';
                $buffer .= $indent . '                                <div data-region="activity-dates" class="activity-dates small course-description-item">
';
                $buffer .= $indent . '                                    <div class="description-inner">
';
                $value = $context->find('opendue');
                $buffer .= $this->section752ce5c2d6ea1734cd3e0776964854df($context, $indent, $value);
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA01d7acab701196c3c2de59f23e347b8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'manual-completion';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'manual-completion';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbb2f53bfec2b3c427becd75961c23e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div
                                class="completion-container {{#manualcompletion}}manual-completion{{/manualcompletion}} align-items-center pr-15 p-r-1 {{^completed}}text-muted{{/completed}}">
                                <div class="completion-check-{{id}}">
                                    {{{ completion }}}
                                </div>
                            </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div
';
                $buffer .= $indent . '                                class="completion-container ';
                $value = $context->find('manualcompletion');
                $buffer .= $this->sectionA01d7acab701196c3c2de59f23e347b8($context, $indent, $value);
                $buffer .= ' align-items-center pr-15 p-r-1 ';
                $value = $context->find('completed');
                if (empty($value)) {
                    
                    $buffer .= 'text-muted';
                }
                $buffer .= '">
';
                $buffer .= $indent . '                                <div class="completion-check-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('completion'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC08f813a952cac0bd34b0262f3bb278c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="{{^summary}}nosummary{{/summary}}">{{{ availstatus }}}</div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="';
                $value = $context->find('summary');
                if (empty($value)) {
                    
                    $buffer .= 'nosummary';
                }
                $buffer .= '">';
                $value = $this->resolveValue($context->find('availstatus'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB5f2764db563a6d1619edac7503962ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{>format_remuiformat/card_section_summary}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_remuiformat/card_section_summary')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD4d5c7945d3cc6d598dbd9a5e883ab82(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{>format_remuiformat/card_section_summary_edit}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_remuiformat/card_section_summary_edit')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe2b8230a2d422fe2f5b391f9ebae751(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#isdelegatedsection}}
                            {{>format_remuiformat/card_section_summary_edit}}
                        {{/isdelegatedsection}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('isdelegatedsection');
                $buffer .= $this->sectionD4d5c7945d3cc6d598dbd9a5e883ab82($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF751e716982dfa0eb6068cd2ca0a3160(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

                    {{^isdelegatedsection}}
                    <li class="activity {{#layouttypecol}}col-activity{{/layouttypecol}} {{#layouttyperow}}row-activity fullwidth-grid-item{{/layouttyperow}} modtype_{{{modulename}}}"
                        id="module-{{id}}" data-id="{{ id }}" data-section="{{ section }}"
                        aria-labelledby="module-{{id}}-title">
                        <div class="single-card">
                            <div class="d-flex flex-column single-card-child-wrapper">
                                {{#editing}}
                                {{{move}}}
                                {{/editing}}
                                <!-- <div class="wdm-mod-name {{#hidden}}text-muted{{/hidden}}">{{ modulefullname }}</div> -->
                                {{#editing}}
                                <div class="actions d-inline-flex actions flex-gap-8">
                                    <span class="toggle-row-column btn btn-inverse" data-activityid="{{ id }}">
                                        <span class=\'type-col\'>
                                            {{# pix }}
                                            ecf-cols, format_remuiformat,
                                            {{# str }} showincard, format_remuiformat {{/ str }}
                                            {{/ pix }}
                                        </span>
                                        <span class=\'type-row\'>
                                            {{# pix }}
                                            ecf-rows, format_remuiformat,
                                            {{# str }} showinrow, format_remuiformat {{/ str }}
                                            {{/ pix }}
                                        </span>
                                    </span>
                                    {{{ modicons }}}
                                </div>
                                {{/editing}}
                                {{#title}}
                                <h4 id="module-{{id}}-title" class="title {{^summary}}nosummary{{/summary}} m-0">
                                    {{{ title }}}
                                </h4>
                                {{/title}}
                                {{#modhiddenfromstudents}}
                                <div data-region="sectionbadges" class="sectionbadges d-flex align-items-center {{^editing}}{{/editing}}">
                                    {{!> core_courseformat/local/content/section/badges }}
                                    {{>format_remuiformat/edwbadges}}

                                </div>
                                {{/modhiddenfromstudents}}
                                {{#modstealth}}
                                <div class="mt-2 d-flex align-items-center">
                                    <span
                                        class="badge badge-pill badge-warning">{{#str}}hiddenoncoursepage{{/str}}</span>
                                </div>
                                {{/modstealth}}

                                {{#summary}}
                                <div class="activity-content">
                                        {{#label}}
                                            {{{ fullcontent }}}
                                        {{/label}}
                                        {{^label}}
                                            {{{ summary }}}
                                        {{/label}}
                                </div>
                                {{/summary}}
                            </div>
                            {{#hasopenduedata}}
                            <div class="description text-left">
                                <div data-region="activity-dates" class="activity-dates small course-description-item">
                                    <div class="description-inner">
                                        {{#opendue}}
                                        <div>
                                            <strong>{{label}}</strong> {{timestamp}}
                                        </div>
                                        {{/opendue}}
                                    </div>
                                </div>
                            </div>
                            {{/hasopenduedata}}
                            {{#completion}}
                            <div
                                class="completion-container {{#manualcompletion}}manual-completion{{/manualcompletion}} align-items-center pr-15 p-r-1 {{^completed}}text-muted{{/completed}}">
                                <div class="completion-check-{{id}}">
                                    {{{ completion }}}
                                </div>
                            </div>
                            {{/completion}}
                            {{#availstatus}}
                                <div class="{{^summary}}nosummary{{/summary}}">{{{ availstatus }}}</div>
                            {{/availstatus}}

                        </div>
                    </li>
                    {{/isdelegatedsection}}
                    {{^editing}}
                        {{#isdelegatedsection}}
                            {{>format_remuiformat/card_section_summary}}
                        {{/isdelegatedsection}}
                    {{/editing}}
                    {{#editing}}
                        {{#isdelegatedsection}}
                            {{>format_remuiformat/card_section_summary_edit}}
                        {{/isdelegatedsection}}
                    {{/editing}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '
';
                $value = $context->find('isdelegatedsection');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <li class="activity ';
                    $value = $context->find('layouttypecol');
                    $buffer .= $this->section9b3f566a77c0c121abe78d9fcc1f799e($context, $indent, $value);
                    $buffer .= ' ';
                    $value = $context->find('layouttyperow');
                    $buffer .= $this->sectionDb6eb7848b1d256ff586ce0a983abf90($context, $indent, $value);
                    $buffer .= ' modtype_';
                    $value = $this->resolveValue($context->find('modulename'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                        id="module-';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" data-id="';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" data-section="';
                    $value = $this->resolveValue($context->find('section'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"
';
                    $buffer .= $indent . '                        aria-labelledby="module-';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '-title">
';
                    $buffer .= $indent . '                        <div class="single-card">
';
                    $buffer .= $indent . '                            <div class="d-flex flex-column single-card-child-wrapper">
';
                    $value = $context->find('editing');
                    $buffer .= $this->sectionEb07f23c1e2b6712c71e3de0bd490f98($context, $indent, $value);
                    $buffer .= $indent . '                                <!-- <div class="wdm-mod-name ';
                    $value = $context->find('hidden');
                    $buffer .= $this->section84abb2ca392375a862f0cffdc8fe21b3($context, $indent, $value);
                    $buffer .= '">';
                    $value = $this->resolveValue($context->find('modulefullname'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</div> -->
';
                    $value = $context->find('editing');
                    $buffer .= $this->sectionB0072dede4233abddad41beacd1076c0($context, $indent, $value);
                    $value = $context->find('title');
                    $buffer .= $this->section3db2c70d3ea66618d3d5f13ad2820a1d($context, $indent, $value);
                    $value = $context->find('modhiddenfromstudents');
                    $buffer .= $this->section71bcfb5a57064a34d12536d57ded9b83($context, $indent, $value);
                    $value = $context->find('modstealth');
                    $buffer .= $this->section9d398ef7aa36e6506aae24a776eda215($context, $indent, $value);
                    $buffer .= $indent . '
';
                    $value = $context->find('summary');
                    $buffer .= $this->sectionE17ed0775a679d870647a86caff4355d($context, $indent, $value);
                    $buffer .= $indent . '                            </div>
';
                    $value = $context->find('hasopenduedata');
                    $buffer .= $this->section3b816848266ffefc2206faac617dcf3e($context, $indent, $value);
                    $value = $context->find('completion');
                    $buffer .= $this->sectionEbb2f53bfec2b3c427becd75961c23e7($context, $indent, $value);
                    $value = $context->find('availstatus');
                    $buffer .= $this->sectionC08f813a952cac0bd34b0262f3bb278c($context, $indent, $value);
                    $buffer .= $indent . '
';
                    $buffer .= $indent . '                        </div>
';
                    $buffer .= $indent . '                    </li>
';
                }
                $value = $context->find('editing');
                if (empty($value)) {
                    
                    $value = $context->find('isdelegatedsection');
                    $buffer .= $this->sectionB5f2764db563a6d1619edac7503962ce($context, $indent, $value);
                }
                $value = $context->find('editing');
                $buffer .= $this->sectionAe2b8230a2d422fe2f5b391f9ebae751($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4b5e32c20ac38351fd8d96cfa977f6f5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <li id="section-{{index}}" class="section hide">
            <div class="content">
                <div class="sectionname">
                    <h2>
                        {{name}}
                    </h2>
                </div>
                <div class="summary">

                </div>
            </div>
        </li>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <li id="section-';
                $value = $this->resolveValue($context->find('index'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="section hide">
';
                $buffer .= $indent . '            <div class="content">
';
                $buffer .= $indent . '                <div class="sectionname">
';
                $buffer .= $indent . '                    <h2>
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                    </h2>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="summary">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
