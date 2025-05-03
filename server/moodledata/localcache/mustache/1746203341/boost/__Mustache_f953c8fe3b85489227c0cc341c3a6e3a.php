<?php

class __Mustache_f953c8fe3b85489227c0cc341c3a6e3a extends Mustache_Template
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
        $buffer .= $indent . '<li id="section-';
        $value = $this->resolveValue($context->find('index'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" class="card section ';
        $value = $context->find('isdelegatedsection');
        $buffer .= $this->section4304c2c1e1bb39dee739f102cd006b61($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('islistsummarysection');
        $buffer .= $this->sectionD10b2b900595e2b38a8d47b1d9280664($context, $indent, $value);
        $buffer .= ' clearfix " role="region"
';
        $buffer .= $indent . '   aria-labelledby="section-';
        $value = $this->resolveValue($context->find('index'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' .sectionname a:not(.quickeditlink)">
';
        $buffer .= $indent . '   <div class="content card-block  remui-list-content-border"
';
        $buffer .= $indent . '      aria-labelledby="section-';
        $value = $this->resolveValue($context->find('index'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' .sectionname a:not(.quickeditlink)">
';
        $buffer .= $indent . '      <div class="course-section-header d-flex flex-column" data-for="section_title">
';
        $buffer .= $indent . '         <div class="left side float-left d-flex m-0 justify-content-between w-100">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('leftside'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            <h3 class="sectionname card-title m-0 d-inline">
';
        $buffer .= $indent . '               <a class="panel-title p-0 sectionheading text-break" href="';
        $value = $this->resolveValue($context->find('singlepageurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '                  aria-expanded="';
        $value = $context->find('collapsed');
        $buffer .= $this->section3d743337d1ee557b470226701b73da47($context, $indent, $value);
        $value = $context->find('expanded');
        $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '                  aria-controls="sectionwrapper-';
        $value = $this->resolveValue($context->find('index'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('progressinfo');
        $buffer .= $this->section4c6516322df213418649541ce0797fbf($context, $indent, $value);
        $buffer .= $indent . '               </a>
';
        $buffer .= $indent . '               <div data-region="sectionbadges" class="sectionbadges ml-2 d-inline">
';
        if ($partial = $this->mustache->loadPartial('format_remuiformat/edwbadges')) {
            $buffer .= $partial->renderInternal($context, $indent . '                  ');
        }
        $buffer .= $indent . '               </div>
';
        $buffer .= $indent . '            </h3>
';
        $value = $context->find('showsectionpageurlbtn');
        $buffer .= $this->section27f72d316c19b065f13832dadf1b2baa($context, $indent, $value);
        $buffer .= $indent . '         </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('checkrightsidecontent');
        $buffer .= $this->sectionBb2169d6618c78f5c94310802af5efed($context, $indent, $value);
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <div class="availability-summary-wrapper">
';
        $value = $context->find('hiddenmessage');
        $buffer .= $this->sectionC61f82e2d2866e79f8fa4c4850c9b02e($context, $indent, $value);
        $value = $context->find('summary');
        $buffer .= $this->sectionB92a0dbe1fd41a08a3eb201a63aac3ed($context, $indent, $value);
        $value = $context->find('availability');
        $buffer .= $this->section5f7795de79f34c04a68a4d08a2d10d2c($context, $indent, $value);
        $value = $context->find('editing');
        $buffer .= $this->section76f442d45476585c031cf147669d6c57($context, $indent, $value);
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '   </div>
';
        $buffer .= $indent . '</li>
';

        return $buffer;
    }

    private function section4304c2c1e1bb39dee739f102cd006b61(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'delegated-section';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'delegated-section';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD10b2b900595e2b38a8d47b1d9280664(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'list-summary-section';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'list-summary-section';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d743337d1ee557b470226701b73da47(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'false';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'false';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03a2cb78adf693fb240638cbbc7ea15e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'true';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'true';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section122fae6bc212869d076dc4ccad04e508(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <!-- Default checked -->
                  <div class="float-right">
                     <i class="fa fas fa-check-square text-success"></i>
                     <!-- {{{ progress }}} -->
                  </div>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <!-- Default checked -->
';
                $buffer .= $indent . '                  <div class="float-right">
';
                $buffer .= $indent . '                     <i class="fa fas fa-check-square text-success"></i>
';
                $buffer .= $indent . '                     <!-- ';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' -->
';
                $buffer .= $indent . '                  </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4c6516322df213418649541ce0797fbf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  {{#completed}}
                  <!-- Default checked -->
                  <div class="float-right">
                     <i class="fa fas fa-check-square text-success"></i>
                     <!-- {{{ progress }}} -->
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
                $buffer .= $this->section122fae6bc212869d076dc4ccad04e508($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2a4caebb43f24a98bdb10827bdeb2857(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'gotosection, course, {{title}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'gotosection, course, ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9ea6be45f1588d6476c3f4a2d3f1e926(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/right, moodle';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/right, moodle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section57c2ba848899b65be6c6b986ac8b81f1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/left, moodle, {{#str}}gotosection, course, {{title}}{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/left, moodle, ';
                $value = $context->find('str');
                $buffer .= $this->section2a4caebb43f24a98bdb10827bdeb2857($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27f72d316c19b065f13832dadf1b2baa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
             {{! previously it was sectionpageurl changed to singlepageurl }}
               <a href="{{{singlepageurl}}}" class="btn btn-icon section_goto d-flex align-items-center justify-content-center icon-no-margin" title="{{#str}}gotosection, course, {{title}}{{/str}}">
                        <span class="dir-rtl-hide">
                           {{#pix}}t/right, moodle{{/pix}}
                        </span>
                        <span class="dir-ltr-hide">
                           {{#pix}}t/left, moodle, {{#str}}gotosection, course, {{title}}{{/str}}{{/pix}}
                        </span>
                        <span class="sr-only">
                           {{#str}}gotosection, course, {{title}}{{/str}}
                        </span>
               </a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '               <a href="';
                $value = $this->resolveValue($context->find('singlepageurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="btn btn-icon section_goto d-flex align-items-center justify-content-center icon-no-margin" title="';
                $value = $context->find('str');
                $buffer .= $this->section2a4caebb43f24a98bdb10827bdeb2857($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <span class="dir-rtl-hide">
';
                $buffer .= $indent . '                           ';
                $value = $context->find('pix');
                $buffer .= $this->section9ea6be45f1588d6476c3f4a2d3f1e926($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </span>
';
                $buffer .= $indent . '                        <span class="dir-ltr-hide">
';
                $buffer .= $indent . '                           ';
                $value = $context->find('pix');
                $buffer .= $this->section57c2ba848899b65be6c6b986ac8b81f1($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </span>
';
                $buffer .= $indent . '                        <span class="sr-only">
';
                $buffer .= $indent . '                           ';
                $value = $context->find('str');
                $buffer .= $this->section2a4caebb43f24a98bdb10827bdeb2857($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </span>
';
                $buffer .= $indent . '               </a>
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

    private function section8da1ff2e17ff1482fa2d39c5f92fd94a(Mustache_Context $context, $indent, $value)
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

    private function sectionAf91488843519af817c112786bd37e08(Mustache_Context $context, $indent, $value)
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
                  <span>{{#progressinfo}}{{ percentage }}{{/progressinfo}}{{^progressinfo}}0{{/progressinfo}}%
                  <!--   {{#str}} Complete, format_remuiformat {{/str}} -->
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
                
                $buffer .= $indent . '            <div class="progress-bar-warpper">
';
                $buffer .= $indent . '               <div class="progress progress-xs bg-grey-300 m-b-1">
';
                $buffer .= $indent . '                  <div class="progress-bar bg-green-600"
';
                $buffer .= $indent . '                     style="width:';
                $value = $context->find('progressinfo');
                $buffer .= $this->section31696a9dc2aaf707950a710a87eadcbe($context, $indent, $value);
                $value = $context->find('progressinfo');
                if (empty($value)) {
                    
                    $buffer .= '0';
                }
                $buffer .= '%;"
';
                $buffer .= $indent . '                     role="progressbar">
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '               <div class="text-right progress-text">
';
                $value = $context->find('progressinfo');
                $buffer .= $this->section8da1ff2e17ff1482fa2d39c5f92fd94a($context, $indent, $value);
                $buffer .= $indent . '                  <span>';
                $value = $context->find('progressinfo');
                $buffer .= $this->section31696a9dc2aaf707950a710a87eadcbe($context, $indent, $value);
                $value = $context->find('progressinfo');
                if (empty($value)) {
                    
                    $buffer .= '0';
                }
                $buffer .= '%
';
                $buffer .= $indent . '                  <!--   ';
                $value = $context->find('str');
                $buffer .= $this->section5b27c426f945a08deaa273fd578a4a7e($context, $indent, $value);
                $buffer .= ' -->
';
                $buffer .= $indent . '                  </span>
';
                $buffer .= $indent . '               </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0f35b7685becc9204832de44815c9b52(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="d-flex">
               {{{ addnewsection }}}
               {{{ optionmenu }}}
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="d-flex">
';
                $buffer .= $indent . '               ';
                $value = $this->resolveValue($context->find('addnewsection'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '               ';
                $value = $this->resolveValue($context->find('optionmenu'), $context);
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

    private function sectionBb2169d6618c78f5c94310802af5efed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <div class="right side float-right d-flex align-items-center">
            {{#progressinfo}}
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
                  <span>{{#progressinfo}}{{ percentage }}{{/progressinfo}}{{^progressinfo}}0{{/progressinfo}}%
                  <!--   {{#str}} Complete, format_remuiformat {{/str}} -->
                  </span>
               </div>
            </div>
            {{/progressinfo}}
            {{#editing}}
            <div class="d-flex">
               {{{ addnewsection }}}
               {{{ optionmenu }}}
            </div>
            {{/editing}}
         </div>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <div class="right side float-right d-flex align-items-center">
';
                $value = $context->find('progressinfo');
                $buffer .= $this->sectionAf91488843519af817c112786bd37e08($context, $indent, $value);
                $value = $context->find('editing');
                $buffer .= $this->section0f35b7685becc9204832de44815c9b52($context, $indent, $value);
                $buffer .= $indent . '         </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC61f82e2d2866e79f8fa4c4850c9b02e(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '            <div class="section_availability">
';
                $buffer .= $indent . '               ';
                $value = $this->resolveValue($context->find('hiddenmessage'), $context);
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

    private function section2a08c9d6595b23cde72386192648c21d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hide';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'hide';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB92a0dbe1fd41a08a3eb201a63aac3ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="summary card-text {{#expanded}}hide{{/expanded}}"> {{{summary}}}</div>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="summary card-text ';
                $value = $context->find('expanded');
                $buffer .= $this->section2a08c9d6595b23cde72386192648c21d($context, $indent, $value);
                $buffer .= '"> ';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f7795de79f34c04a68a4d08a2d10d2c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="section_availability badge badge-pill badge-info mb-10">
               {{{availability}}}
            </div>
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="section_availability badge badge-pill badge-info mb-10">
';
                $buffer .= $indent . '               ';
                $value = $this->resolveValue($context->find('availability'), $context);
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

    private function section76f442d45476585c031cf147669d6c57(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="section-summary-activities text-left {{#expanded}}hide{{/expanded}} p-24">{{{activityinfostring}}}</div>
          ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="section-summary-activities text-left ';
                $value = $context->find('expanded');
                $buffer .= $this->section2a08c9d6595b23cde72386192648c21d($context, $indent, $value);
                $buffer .= ' p-24">';
                $value = $this->resolveValue($context->find('activityinfostring'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
