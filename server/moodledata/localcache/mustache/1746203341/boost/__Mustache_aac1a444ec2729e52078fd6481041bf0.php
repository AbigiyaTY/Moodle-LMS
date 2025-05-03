<?php

class __Mustache_aac1a444ec2729e52078fd6481041bf0 extends Mustache_Template
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
            
            $buffer .= $indent . '<div id="list-container" class="remui-format-list one-section-format ">
';
            $value = $context->find('headerdata');
            $buffer .= $this->sectionF309c01b3bc95a6f0885f8ea5d28e1fe($context, $indent, $value);
            $buffer .= $indent . '    <ul class="sections one-section-format-details-page-wrapper">
';
            $buffer .= $indent . '        <li id="section-';
            $value = $this->resolveValue($context->find('section'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" class="section" aria-labelledby="section-';
            $value = $this->resolveValue($context->find('section'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= ' .content .summary .title">
';
            $buffer .= $indent . '            <div class="course-section-summary-wrapper d-flex flex-column">
';
            $buffer .= $indent . '                <div class="course-section-header d-flex position-relative dropready draggable" data-for="section_title"
';
            $buffer .= $indent . '                    data-id="7" data-number="1" draggable="true" id="yui_3_17_2_1_1643968975008_225">
';
            $buffer .= $indent . '                    <div class="d-flex header-progresbar-wrapper">
';
            $buffer .= $indent . '                        <h2 class="section-title m-0 sectionheading d-inline">
';
            $value = $context->find('comment');
            $buffer .= $this->section615ea2328ae2bac66025444615e2bb05($context, $indent, $value);
            $buffer .= $indent . '                            <span class="title m-0 ';
            $value = $context->find('hidden');
            $buffer .= $this->section84abb2ca392375a862f0cffdc8fe21b3($context, $indent, $value);
            $buffer .= '">';
            $value = $this->resolveValue($context->find('title'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '</span>
';
            $buffer .= $indent . '                            <div data-region="sectionbadges" class="sectionbadges d-inline ';
            $value = $context->find('editing');
            if (empty($value)) {
                
                $buffer .= 'ml-2';
            }
            $buffer .= '">
';
            if ($partial = $this->mustache->loadPartial('format_remuiformat/edwbadges')) {
                $buffer .= $partial->renderInternal($context, $indent . '                                ');
            }
            $buffer .= $indent . '                            </div>
';
            $buffer .= $indent . '                        </h2>
';
            $value = $context->find('progressinfo');
            $buffer .= $this->section42a6b85c2e632f585d86d58a9149db63($context, $indent, $value);
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                    <div class="d-flex justify-content-between align-items-start flex-gap-16">
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
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->find('summary'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            <div class="content">
';
            $buffer .= $indent . '                <div class="activities-list">
';
            $buffer .= $indent . '                    ';
            $value = $this->resolveValue($context->find('activities'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                </div>
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
            $buffer .= $indent . '<!-- next/prev sections -->
';
            $buffer .= $indent . '<div class="col-md-12 p-0 wdm-card-section m-t-2">
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

    private function section615ea2328ae2bac66025444615e2bb05(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <span class="sno {{^hidden}}{{/hidden}} {{#hidden}}text-muted{{/hidden}}">
                                    {{ section }}.
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
                if (empty($value)) {
                    
                }
                $buffer .= ' ';
                $value = $context->find('hidden');
                $buffer .= $this->section84abb2ca392375a862f0cffdc8fe21b3($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('section'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '.
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

    private function sectionB1e4563dfbc4d59e336c965fe83f17a3(Mustache_Context $context, $indent, $value)
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

    private function sectionB8ee7a243f2513af6ad9436e51accc90(Mustache_Context $context, $indent, $value)
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

    private function section42a6b85c2e632f585d86d58a9149db63(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="d-flex">
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
                        </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="d-flex">
';
                $buffer .= $indent . '                            <div class="progress-bar-warpper">
';
                $buffer .= $indent . '                                <div class="progress progress-xs bg-grey-300 m-b-1">
';
                $buffer .= $indent . '                                    <div class="progress-bar bg-green-600"
';
                $buffer .= $indent . '                                        style="width:';
                $value = $context->find('progressinfo');
                $buffer .= $this->section31696a9dc2aaf707950a710a87eadcbe($context, $indent, $value);
                $value = $context->find('progressinfo');
                if (empty($value)) {
                    
                    $buffer .= '0';
                }
                $buffer .= '%;"
';
                $buffer .= $indent . '                                        role="progressbar">
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="text-right progress-text">
';
                $value = $context->find('progressinfo');
                $buffer .= $this->sectionB1e4563dfbc4d59e336c965fe83f17a3($context, $indent, $value);
                $buffer .= $indent . '                                    <span>';
                $value = $context->find('progressinfo');
                $buffer .= $this->sectionB8ee7a243f2513af6ad9436e51accc90($context, $indent, $value);
                $value = $context->find('progressinfo');
                if (empty($value)) {
                    
                    $buffer .= '0';
                }
                $buffer .= '%</span>
';
                $buffer .= $indent . '                                </div>
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
