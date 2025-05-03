<?php

class __Mustache_25e2d24aacc13f537434914324f8aeb7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="rmuiformate-header-wrapper d-none ">
';
        $buffer .= $indent . '    <header id="page-header" class=" d-print-none hasbackground design-1 position-relative "
';
        $buffer .= $indent . '        style="background:  url(\'';
        $value = $this->resolveValue($context->find('headercourseimage'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '\');background-position: ';
        $value = $this->resolveValue($context->find('remuiheaderimagebgposition'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '; background-size:';
        $value = $this->resolveValue($context->find('remuiheaderimagebgsize'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ';background-repeat: no-repeat;">
';
        $buffer .= $indent . '           <div class = "position-absolute w-100 h-100" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.0)  -24.52%, #000000 97.67%);left:0%;bottom:0%; opacity:';
        $value = $this->resolveValue($context->find('overlayopacity'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ';border-radius:inherit;"> </div>
';
        $buffer .= $indent . '       <div class="align-self-end" style="z-index:1;">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('turneditingonswitch'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '       </div>
';
        $buffer .= $indent . '        <div class="w-100 header-wrapper " style="z-index:1;">
';
        $buffer .= $indent . '            <div class="d-flex flex-wrap w-100">
';
        $buffer .= $indent . '                <div class="d-flex align-items-center w-100">
';
        $buffer .= $indent . '                    <div class="dashboard-bar-wrapper w-100">
';
        $buffer .= $indent . '                        <div class="header-main-section">
';
        $buffer .= $indent . '                            <div class="category">
';
        $buffer .= $indent . '                                <span class="badge ">
';
        $buffer .= $indent . '                                    ';
        $value = $this->resolveValue($context->find('coursecategoryname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                                </span>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="page-context-header p-0 m-0">
';
        $buffer .= $indent . '                                <div class="page-header-headings p-0">
';
        $buffer .= $indent . '                                    <h1 class="h2 header-heading coursepage design-1 m-0">';
        $value = $this->resolveValue($context->find('coursefullname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</h1>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        <div class="header-sub-section">
';
        $buffer .= $indent . '                            <div class="rating-instructor-wrapper">
';
        $value = $context->find('rnrdesign');
        $buffer .= $this->section8b200b93242e94bca6e655bcff399978($context, $indent, $value);
        $value = $context->find('teachers');
        $buffer .= $this->sectionC508ad8aa875c8ce0cd5c096a4c75bbd($context, $indent, $value);
        $buffer .= $indent . '                            </div>
';
        $value = $context->find('coursecompletionstatus');
        $buffer .= $this->section2b555aea444f6a3c499dfb189daff297($context, $indent, $value);
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '    </header>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('courseheaderdesign');
        $buffer .= $this->section9f8b7fcb8a311dba0c202cf60f383796($context, $indent, $value);
        $value = $context->find('subsectionjs');
        $buffer .= $this->sectionBea4ee57fe785abd24a5f4a8256ccd1b($context, $indent, $value);

        return $buffer;
    }

    private function section8b200b93242e94bca6e655bcff399978(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="edw-ratings-wrapper">
                                    {{{rnrdesign}}}
                                </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="edw-ratings-wrapper">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('rnrdesign'), $context);
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

    private function sectionF007da78d670d812cc4b4c7a2185f2a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="position-relative">
                                        <a class="view-user-profile-link" href="{{teacherprofileurl}}" class="" title="{{name}}"></a>
                                        {{{avatars}}}
                                        <span class="titles ">{{name}}</span>
                                    </div>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="position-relative">
';
                $buffer .= $indent . '                                        <a class="view-user-profile-link" href="';
                $value = $this->resolveValue($context->find('teacherprofileurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="" title="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></a>
';
                $buffer .= $indent . '                                        ';
                $value = $this->resolveValue($context->find('avatars'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        <span class="titles ">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBcfb8782c0a2c98a84924aa5a24feacc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <a class="view-all-instructorslink" href="{{participantspageurl}}" class="">view all</a>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <a class="view-all-instructorslink" href="';
                $value = $this->resolveValue($context->find('participantspageurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="">view all</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC508ad8aa875c8ce0cd5c096a4c75bbd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="instructor-info stat-container position-relative">
                                    {{#instructors}}
                                    <div class="position-relative">
                                        <a class="view-user-profile-link" href="{{teacherprofileurl}}" class="" title="{{name}}"></a>
                                        {{{avatars}}}
                                        <span class="titles ">{{name}}</span>
                                    </div>
                                    {{/instructors}}
                                    {{#teachercount}}
                                        <a class="view-all-instructorslink" href="{{participantspageurl}}" class="">view all</a>
                                    {{/teachercount}}
                                </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="instructor-info stat-container position-relative">
';
                $value = $context->find('instructors');
                $buffer .= $this->sectionF007da78d670d812cc4b4c7a2185f2a4($context, $indent, $value);
                $value = $context->find('teachercount');
                $buffer .= $this->sectionBcfb8782c0a2c98a84924aa5a24feacc($context, $indent, $value);
                $buffer .= $indent . '                                </div>
';
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

    private function section8b07f35cef02e4b80c9624f699e8b31f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' resumetoactivity, format_remuiformat';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' resumetoactivity, format_remuiformat';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA4fdf734ca12d14a0934cbbbcb8d276a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a class="btn btn-primary btn-block bold" href="{{{ resumeactivityurl }}}"
                                    role="button">{{#str}} resumetoactivity, format_remuiformat{{/str}}</a>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <a class="btn btn-primary btn-block bold" href="';
                $value = $this->resolveValue($context->find('resumeactivityurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                    role="button">';
                $value = $context->find('str');
                $buffer .= $this->section8b07f35cef02e4b80c9624f699e8b31f($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2b555aea444f6a3c499dfb189daff297(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="progress-resume-wrapper">
                                <div class="progressbar-text-wrapper">
                                    <div class="progress progress-rounded">
                                        <div class="progress-bar bg-green-600"
                                            style="width: {{{percentage}}}%; height: 100%;" role="progressbar">
                                            <span class="sr-only">{{{percentage}}}% {{#str}} Complete, format_remuiformat {{/str}}</span>
                                        </div>
                                    </div>
                                    <span>{{{percentage}}}% {{#str}} Complete, format_remuiformat {{/str}}</span>
                                </div>
                                {{#resumeactivityurl}}
                                <a class="btn btn-primary btn-block bold" href="{{{ resumeactivityurl }}}"
                                    role="button">{{#str}} resumetoactivity, format_remuiformat{{/str}}</a>
                                {{/resumeactivityurl}}
                            </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="progress-resume-wrapper">
';
                $buffer .= $indent . '                                <div class="progressbar-text-wrapper">
';
                $buffer .= $indent . '                                    <div class="progress progress-rounded">
';
                $buffer .= $indent . '                                        <div class="progress-bar bg-green-600"
';
                $buffer .= $indent . '                                            style="width: ';
                $value = $this->resolveValue($context->find('percentage'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '%; height: 100%;" role="progressbar">
';
                $buffer .= $indent . '                                            <span class="sr-only">';
                $value = $this->resolveValue($context->find('percentage'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '% ';
                $value = $context->find('str');
                $buffer .= $this->section5b27c426f945a08deaa273fd578a4a7e($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <span>';
                $value = $this->resolveValue($context->find('percentage'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '% ';
                $value = $context->find('str');
                $buffer .= $this->section5b27c426f945a08deaa273fd578a4a7e($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                </div>
';
                $value = $context->find('resumeactivityurl');
                $buffer .= $this->sectionA4fdf734ca12d14a0934cbbbcb8d276a($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section300e869cdaa98c178f7dad3372fcdef7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'format_remuiformat/headerreplaces\'], function(HEADERREPLACE) {
HEADERREPLACE.init();
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'format_remuiformat/headerreplaces\'], function(HEADERREPLACE) {
';
                $buffer .= $indent . 'HEADERREPLACE.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f8b7fcb8a311dba0c202cf60f383796(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{#js}}
require([\'format_remuiformat/headerreplaces\'], function(HEADERREPLACE) {
HEADERREPLACE.init();
});
{{/js}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('js');
                $buffer .= $this->section300e869cdaa98c178f7dad3372fcdef7($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f71ba8d44495d6a61d401dd6ee49de5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\',\'core_courseformat/local/content\'], function($,component) {
    $(document).ready(function() {
      component.init(\'page\', {}, {{sectionreturn}});
    });
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'jquery\',\'core_courseformat/local/content\'], function($,component) {
';
                $buffer .= $indent . '    $(document).ready(function() {
';
                $buffer .= $indent . '      component.init(\'page\', {}, ';
                $value = $this->resolveValue($context->find('sectionreturn'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ');
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBea4ee57fe785abd24a5f4a8256ccd1b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{#js}}
require([\'jquery\',\'core_courseformat/local/content\'], function($,component) {
    $(document).ready(function() {
      component.init(\'page\', {}, {{sectionreturn}});
    });
});
{{/js}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('js');
                $buffer .= $this->section5f71ba8d44495d6a61d401dd6ee49de5($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
