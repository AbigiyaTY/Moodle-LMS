<?php

class __Mustache_29db641eb6060f36826634e573d2f7c4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('showgeneralsectionintrodata');
        if (empty($value)) {
            
            $value = $context->find('activityexists');
            if (empty($value)) {
                
                $buffer .= $indent . '<style>
';
                $buffer .= $indent . '    #page-course-view-remuiformat .courseindex-section:first-child {
';
                $buffer .= $indent . '        display: none !important;
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '</style>
';
            }
        }
        $buffer .= $indent . '
';
        $value = $context->find('activityexists');
        if (empty($value)) {
            
            $buffer .= $indent . '<style>
';
            $buffer .= $indent . '    #page-course-view-remuiformat .sections.generalsection-container{
';
            $buffer .= $indent . '        margin-bottom: 0px !important;
';
            $buffer .= $indent . '    }
';
            $buffer .= $indent . '    #page-course-view-remuiformat  .section-details{
';
            $buffer .= $indent . '        margin-bottom: 24px;
';
            $buffer .= $indent . '    }
';
            $buffer .= $indent . '</style>
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<li id="section-';
        $value = $this->resolveValue($context->find('index'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" class="section border-0 col-12 p-0">
';
        $buffer .= $indent . '    <div class="general-section d-flex flex-column">
';
        if ($partial = $this->mustache->loadPartial('format_remuiformat/optional_secheader')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '        <div class="d-none hidden course-prgress-container" data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"></div>
';
        $value = $context->find('showgeneralsection');
        $buffer .= $this->section15dd9c53e1f6168742e3e2c7d0dd41be($context, $indent, $value);
        $buffer .= $indent . '</li>
';

        return $buffer;
    }

    private function sectionB8ca872fa5be1f1ea9ba5980dead9df4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showmore, format_remuiformat';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' showmore, format_remuiformat';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section11a97fa9580fa98c066ba6a8461d9f2f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showless, format_remuiformat';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' showless, format_remuiformat';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2c2fe1e0fed1c3e07129aebe6558da8a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{! <input type="checkbox" class="read-more-state" id="read-more-summary" /> }}
                    <div class="read-more-target coursesummary" >{{{fullsummary}}}
                    </div>
                    <a id="readmorebtn" class="d-none readbtn">{{#str}} showmore, format_remuiformat{{/str}}</a>
                    <a id="readlessbtn" class="d-none readbtn">{{#str}} showless, format_remuiformat{{/str}}</a>
                    {{! <label for="read-more-summary" class=" text-primary small read-more-trigger"></label> }}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="read-more-target coursesummary" >';
                $value = $this->resolveValue($context->find('fullsummary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <a id="readmorebtn" class="d-none readbtn">';
                $value = $context->find('str');
                $buffer .= $this->sectionB8ca872fa5be1f1ea9ba5980dead9df4($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    <a id="readlessbtn" class="d-none readbtn">';
                $value = $context->find('str');
                $buffer .= $this->section11a97fa9580fa98c066ba6a8461d9f2f($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB779e5d100d40beb3c1c856f3f7c9ce8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="generaldetails content d-flex flex-column">
                <h2 class="section-title pt-0 p-t-0 m-0">{{{title}}}</h2>
                <div class=\'generalsectioninfo\'>
                    {{{availability}}}
                    {{#fullsummary}}
                    {{! <input type="checkbox" class="read-more-state" id="read-more-summary" /> }}
                    <div class="read-more-target coursesummary" >{{{fullsummary}}}
                    </div>
                    <a id="readmorebtn" class="d-none readbtn">{{#str}} showmore, format_remuiformat{{/str}}</a>
                    <a id="readlessbtn" class="d-none readbtn">{{#str}} showless, format_remuiformat{{/str}}</a>
                    {{! <label for="read-more-summary" class=" text-primary small read-more-trigger"></label> }}
                    {{/fullsummary}}
                </div>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="generaldetails content d-flex flex-column">
';
                $buffer .= $indent . '                <h2 class="section-title pt-0 p-t-0 m-0">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '                <div class=\'generalsectioninfo\'>
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('availability'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $value = $context->find('fullsummary');
                $buffer .= $this->section2c2fe1e0fed1c3e07129aebe6558da8a($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section064f86973ee67644bf308ef4ba88d88b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' generalactivities, format_remuiformat';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' generalactivities, format_remuiformat';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section072100d3fd791f60e8b6c37b3a07eda5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <h4 class="activitieshead m-0 d-none">{{#str}} generalactivities, format_remuiformat{{/str}}</h4>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <h4 class="activitieshead m-0 d-none">';
                $value = $context->find('str');
                $buffer .= $this->section064f86973ee67644bf308ef4ba88d88b($context, $indent, $value);
                $buffer .= '</h4>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbc4fd45515e24a21412ca7c393ea1db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'indented';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'indented';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF1e1f01cda24c130d8ce110318d7ef36(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{{leftside}}}
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('leftside'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF585c65f2b93aea2673f2abb0c6efd98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <div class="actions">
                                                {{{completion}}}
                                            </div>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <div class="actions">
';
                $buffer .= $indent . '                                                ';
                $value = $this->resolveValue($context->find('completion'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA1b57a95ba3891ec03d9f8b627e0a09c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <div data-region="sectionbadges" class="sectionbadges d-flex align-items-center">
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
                
                $buffer .= $indent . '                                            <div data-region="sectionbadges" class="sectionbadges d-flex align-items-center">
';
                if ($partial = $this->mustache->loadPartial('format_remuiformat/edwbadges')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                                ');
                }
                $buffer .= $indent . '                                            </div>
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

    private function section84c2e07271d7716523a51f80a6987950(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <div class=" d-flex align-items-center">
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
                
                $buffer .= $indent . '                                            <div class=" d-flex align-items-center">
';
                $buffer .= $indent . '                                                <span
';
                $buffer .= $indent . '                                                    class="badge badge-pill badge-warning">';
                $value = $context->find('str');
                $buffer .= $this->section0a071135502ba3f510046b2eb89448a0($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a634b9a7a865751ee7344955fa9898f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <div class="contentafterlink">
                                                {{{summary}}}
                                            </div>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <div class="contentafterlink">
';
                $buffer .= $indent . '                                                ';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDc071c1a6f4145477c056854ab258a9a(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                                                    <div>
';
                $buffer .= $indent . '                                                        <strong>';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</strong> ';
                $value = $this->resolveValue($context->find('timestamp'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5e9c274a914081636f54508d8d894962(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                                        <div class="description text-left">
';
                $buffer .= $indent . '                                            <div data-region="activity-dates" class="activity-dates small course-description-item">
';
                $buffer .= $indent . '                                                <div class="description-inner">
';
                $value = $context->find('opendue');
                $buffer .= $this->sectionDc071c1a6f4145477c056854ab258a9a($context, $indent, $value);
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0bcfba91381f676b977101df684de5a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{> format_remuiformat/list_sections_summary }}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_remuiformat/list_sections_summary')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC7fbbe96dc23011941de67a7eac3853d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{^islistsummarysection}}
                            {{>format_remuiformat/list_delegatedsection}}
                        {{/islistsummarysection}}

                        {{#islistsummarysection}}
                            {{> format_remuiformat/list_sections_summary }}
                        {{/islistsummarysection}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('islistsummarysection');
                if (empty($value)) {
                    
                    if ($partial = $this->mustache->loadPartial('format_remuiformat/list_delegatedsection')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                            ');
                    }
                }
                $buffer .= $indent . '
';
                $value = $context->find('islistsummarysection');
                $buffer .= $this->section0bcfba91381f676b977101df684de5a9($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67a5ee23ee4da8fabf47a4e0772c5706(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{^isdelegatedsection}}
                        <li class="activity d-flex flex-column justify-content-between {{#indented}}indented{{/indented}}  list-unstyled {{{modulename}}} modtype_{{{modulename}}}"
                            id="module-{{id}}">
                            <div class="generalsecactivitiescontent w-100 p-0 h-100">
                                {{#editing}}
                                {{{leftside}}}
                                {{/editing}}
                                {{! <div> }}
                                    <div class="activityinstance p-0 m-0 d-flex h-100 flex-column">
                                        <div class="d-flex justify-content-between">
                                            <div class="title-activity-container text-break w-100 text-left ">
                                                {{{title}}}
                                            </div>
                                            {{#completion}}
                                            <div class="actions">
                                                {{{completion}}}
                                            </div>
                                            {{/completion}}
                                        </div>
                                        <div style="margin-left: 74px;">
                                            {{#modhiddenfromstudents}}
                                            <div data-region="sectionbadges" class="sectionbadges d-flex align-items-center">
                                                {{!> core_courseformat/local/content/section/badges }}
                                                {{>format_remuiformat/edwbadges}}
                                            </div>
                                            {{/modhiddenfromstudents}}
                                            {{#modstealth}}
                                            <div class=" d-flex align-items-center">
                                                <span
                                                    class="badge badge-pill badge-warning">{{#str}}hiddenoncoursepage{{/str}}</span>
                                            </div>
                                            {{/modstealth}}
                                        </div>
                                            {{#summary}}
                                            <div class="contentafterlink">
                                                {{{summary}}}
                                            </div>
                                            {{/summary}}

                                    </div>
                                    <div class="p-0 action-availstatus-wrapper" style="margin-left: 74px;">
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
                                        {{{availstatus}}}
                                    </div>
                                    {{!
                                </div> }}
                            </div>
                        </li>
                    {{/isdelegatedsection}}
                    {{#isdelegatedsection}}
                        {{^islistsummarysection}}
                            {{>format_remuiformat/list_delegatedsection}}
                        {{/islistsummarysection}}

                        {{#islistsummarysection}}
                            {{> format_remuiformat/list_sections_summary }}
                        {{/islistsummarysection}}
                    {{/isdelegatedsection}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('isdelegatedsection');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <li class="activity d-flex flex-column justify-content-between ';
                    $value = $context->find('indented');
                    $buffer .= $this->sectionEbc4fd45515e24a21412ca7c393ea1db($context, $indent, $value);
                    $buffer .= '  list-unstyled ';
                    $value = $this->resolveValue($context->find('modulename'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= ' modtype_';
                    $value = $this->resolveValue($context->find('modulename'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                            id="module-';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '">
';
                    $buffer .= $indent . '                            <div class="generalsecactivitiescontent w-100 p-0 h-100">
';
                    $value = $context->find('editing');
                    $buffer .= $this->sectionF1e1f01cda24c130d8ce110318d7ef36($context, $indent, $value);
                    $buffer .= $indent . '                                    <div class="activityinstance p-0 m-0 d-flex h-100 flex-column">
';
                    $buffer .= $indent . '                                        <div class="d-flex justify-content-between">
';
                    $buffer .= $indent . '                                            <div class="title-activity-container text-break w-100 text-left ">
';
                    $buffer .= $indent . '                                                ';
                    $value = $this->resolveValue($context->find('title'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                                            </div>
';
                    $value = $context->find('completion');
                    $buffer .= $this->sectionF585c65f2b93aea2673f2abb0c6efd98($context, $indent, $value);
                    $buffer .= $indent . '                                        </div>
';
                    $buffer .= $indent . '                                        <div style="margin-left: 74px;">
';
                    $value = $context->find('modhiddenfromstudents');
                    $buffer .= $this->sectionA1b57a95ba3891ec03d9f8b627e0a09c($context, $indent, $value);
                    $value = $context->find('modstealth');
                    $buffer .= $this->section84c2e07271d7716523a51f80a6987950($context, $indent, $value);
                    $buffer .= $indent . '                                        </div>
';
                    $value = $context->find('summary');
                    $buffer .= $this->section4a634b9a7a865751ee7344955fa9898f($context, $indent, $value);
                    $buffer .= $indent . '
';
                    $buffer .= $indent . '                                    </div>
';
                    $buffer .= $indent . '                                    <div class="p-0 action-availstatus-wrapper" style="margin-left: 74px;">
';
                    $value = $context->find('hasopenduedata');
                    $buffer .= $this->section5e9c274a914081636f54508d8d894962($context, $indent, $value);
                    $buffer .= $indent . '                                        ';
                    $value = $this->resolveValue($context->find('availstatus'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                                    </div>
';
                    $buffer .= $indent . '                            </div>
';
                    $buffer .= $indent . '                        </li>
';
                }
                $value = $context->find('isdelegatedsection');
                $buffer .= $this->sectionC7fbbe96dc23011941de67a7eac3853d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03267f80ae1a91a9f209c8d98bab9164(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="activities-wrapper d-flex flex-column">
            {{#comment}}
            <h4 class="activitieshead m-0 d-none">{{#str}} generalactivities, format_remuiformat{{/str}}</h4>
            {{/comment}}
            <ul class="general-section-activities list-view-general-activities justify-content-start text-center ">
                {{#activities}}
                    {{^isdelegatedsection}}
                        <li class="activity d-flex flex-column justify-content-between {{#indented}}indented{{/indented}}  list-unstyled {{{modulename}}} modtype_{{{modulename}}}"
                            id="module-{{id}}">
                            <div class="generalsecactivitiescontent w-100 p-0 h-100">
                                {{#editing}}
                                {{{leftside}}}
                                {{/editing}}
                                {{! <div> }}
                                    <div class="activityinstance p-0 m-0 d-flex h-100 flex-column">
                                        <div class="d-flex justify-content-between">
                                            <div class="title-activity-container text-break w-100 text-left ">
                                                {{{title}}}
                                            </div>
                                            {{#completion}}
                                            <div class="actions">
                                                {{{completion}}}
                                            </div>
                                            {{/completion}}
                                        </div>
                                        <div style="margin-left: 74px;">
                                            {{#modhiddenfromstudents}}
                                            <div data-region="sectionbadges" class="sectionbadges d-flex align-items-center">
                                                {{!> core_courseformat/local/content/section/badges }}
                                                {{>format_remuiformat/edwbadges}}
                                            </div>
                                            {{/modhiddenfromstudents}}
                                            {{#modstealth}}
                                            <div class=" d-flex align-items-center">
                                                <span
                                                    class="badge badge-pill badge-warning">{{#str}}hiddenoncoursepage{{/str}}</span>
                                            </div>
                                            {{/modstealth}}
                                        </div>
                                            {{#summary}}
                                            <div class="contentafterlink">
                                                {{{summary}}}
                                            </div>
                                            {{/summary}}

                                    </div>
                                    <div class="p-0 action-availstatus-wrapper" style="margin-left: 74px;">
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
                                        {{{availstatus}}}
                                    </div>
                                    {{!
                                </div> }}
                            </div>
                        </li>
                    {{/isdelegatedsection}}
                    {{#isdelegatedsection}}
                        {{^islistsummarysection}}
                            {{>format_remuiformat/list_delegatedsection}}
                        {{/islistsummarysection}}

                        {{#islistsummarysection}}
                            {{> format_remuiformat/list_sections_summary }}
                        {{/islistsummarysection}}
                    {{/isdelegatedsection}}
                {{/activities}}
            </ul>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="activities-wrapper d-flex flex-column">
';
                $value = $context->find('comment');
                $buffer .= $this->section072100d3fd791f60e8b6c37b3a07eda5($context, $indent, $value);
                $buffer .= $indent . '            <ul class="general-section-activities list-view-general-activities justify-content-start text-center ">
';
                $value = $context->find('activities');
                $buffer .= $this->section67a5ee23ee4da8fabf47a4e0772c5706($context, $indent, $value);
                $buffer .= $indent . '            </ul>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e24cb5c6419d434fc1da250ad013681(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'showmore, format_remuiformat';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'showmore, format_remuiformat';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section15dd9c53e1f6168742e3e2c7d0dd41be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="section-details">
            {{#showgeneralsectionintrodata}}
            <div class="generaldetails content d-flex flex-column">
                <h2 class="section-title pt-0 p-t-0 m-0">{{{title}}}</h2>
                <div class=\'generalsectioninfo\'>
                    {{{availability}}}
                    {{#fullsummary}}
                    {{! <input type="checkbox" class="read-more-state" id="read-more-summary" /> }}
                    <div class="read-more-target coursesummary" >{{{fullsummary}}}
                    </div>
                    <a id="readmorebtn" class="d-none readbtn">{{#str}} showmore, format_remuiformat{{/str}}</a>
                    <a id="readlessbtn" class="d-none readbtn">{{#str}} showless, format_remuiformat{{/str}}</a>
                    {{! <label for="read-more-summary" class=" text-primary small read-more-trigger"></label> }}
                    {{/fullsummary}}
                </div>
            </div>
            {{/showgeneralsectionintrodata}}
        </div>
        {{#activityexists}}
        <div class="activities-wrapper d-flex flex-column">
            {{#comment}}
            <h4 class="activitieshead m-0 d-none">{{#str}} generalactivities, format_remuiformat{{/str}}</h4>
            {{/comment}}
            <ul class="general-section-activities list-view-general-activities justify-content-start text-center ">
                {{#activities}}
                    {{^isdelegatedsection}}
                        <li class="activity d-flex flex-column justify-content-between {{#indented}}indented{{/indented}}  list-unstyled {{{modulename}}} modtype_{{{modulename}}}"
                            id="module-{{id}}">
                            <div class="generalsecactivitiescontent w-100 p-0 h-100">
                                {{#editing}}
                                {{{leftside}}}
                                {{/editing}}
                                {{! <div> }}
                                    <div class="activityinstance p-0 m-0 d-flex h-100 flex-column">
                                        <div class="d-flex justify-content-between">
                                            <div class="title-activity-container text-break w-100 text-left ">
                                                {{{title}}}
                                            </div>
                                            {{#completion}}
                                            <div class="actions">
                                                {{{completion}}}
                                            </div>
                                            {{/completion}}
                                        </div>
                                        <div style="margin-left: 74px;">
                                            {{#modhiddenfromstudents}}
                                            <div data-region="sectionbadges" class="sectionbadges d-flex align-items-center">
                                                {{!> core_courseformat/local/content/section/badges }}
                                                {{>format_remuiformat/edwbadges}}
                                            </div>
                                            {{/modhiddenfromstudents}}
                                            {{#modstealth}}
                                            <div class=" d-flex align-items-center">
                                                <span
                                                    class="badge badge-pill badge-warning">{{#str}}hiddenoncoursepage{{/str}}</span>
                                            </div>
                                            {{/modstealth}}
                                        </div>
                                            {{#summary}}
                                            <div class="contentafterlink">
                                                {{{summary}}}
                                            </div>
                                            {{/summary}}

                                    </div>
                                    <div class="p-0 action-availstatus-wrapper" style="margin-left: 74px;">
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
                                        {{{availstatus}}}
                                    </div>
                                    {{!
                                </div> }}
                            </div>
                        </li>
                    {{/isdelegatedsection}}
                    {{#isdelegatedsection}}
                        {{^islistsummarysection}}
                            {{>format_remuiformat/list_delegatedsection}}
                        {{/islistsummarysection}}

                        {{#islistsummarysection}}
                            {{> format_remuiformat/list_sections_summary }}
                        {{/islistsummarysection}}
                    {{/isdelegatedsection}}
                {{/activities}}
            </ul>
        </div>
        {{/activityexists}}
        <div class="text-center showactivitywrapper">
            <span class="showactivity text-primary show">
                {{#str}}showmore, format_remuiformat{{/str}}
            </span>
        </div>
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="section-details">
';
                $value = $context->find('showgeneralsectionintrodata');
                $buffer .= $this->sectionB779e5d100d40beb3c1c856f3f7c9ce8($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $value = $context->find('activityexists');
                $buffer .= $this->section03267f80ae1a91a9f209c8d98bab9164($context, $indent, $value);
                $buffer .= $indent . '        <div class="text-center showactivitywrapper">
';
                $buffer .= $indent . '            <span class="showactivity text-primary show">
';
                $buffer .= $indent . '                ';
                $value = $context->find('str');
                $buffer .= $this->section4e24cb5c6419d434fc1da250ad013681($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </span>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
