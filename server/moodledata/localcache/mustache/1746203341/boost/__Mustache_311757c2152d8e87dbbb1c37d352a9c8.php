<?php

class __Mustache_311757c2152d8e87dbbb1c37d352a9c8 extends Mustache_Template
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
        $value = $context->find('editing');
        $buffer .= $this->section671b10714c27188392f1bac629a93bd0($context, $indent, $value);
        $value = $context->find('editing');
        if (empty($value)) {
            
            $buffer .= $indent . '<div id="card-container" class="remui-format-card all-section-format theme-';
            $value = $this->resolveValue($context->find('theme'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= ' row">
';
            $buffer .= $indent . '  <ul class="sections row generalsection-container">
';
            $value = $context->find('generalsection');
            $buffer .= $this->section5106b7fbb1007645c3bc62c797f3f3d8($context, $indent, $value);
            $buffer .= $indent . '  </ul>
';
            $buffer .= $indent . '</div>
';
            $buffer .= $indent . '<div id="list-container" class="remui-format-list all-section-format theme-';
            $value = $this->resolveValue($context->find('theme'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= ' mt-20">
';
            $buffer .= $indent . '    <ul class="sections row">
';
            $value = $context->find('sections');
            $buffer .= $this->section76c912ca377d89eb054b2b4c88b73938($context, $indent, $value);
            $buffer .= $indent . '    </ul>
';
            $buffer .= $indent . '</div>
';
            $value = $context->find('js');
            $buffer .= $this->sectionCf6cc099faf7aa860bd403acd48b5744($context, $indent, $value);
        }
        $value = $context->find('editing');
        $buffer .= $this->sectionC5816eb51355e05444cebda70334c5c7($context, $indent, $value);

        return $buffer;
    }

    private function section98a32e1f8de3d023e30214b50541befd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> format_remuiformat/card_general_section_edit }}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_remuiformat/card_general_section_edit')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section76c912ca377d89eb054b2b4c88b73938(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> format_remuiformat/list_sections }}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_remuiformat/list_sections')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section671b10714c27188392f1bac629a93bd0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="card-editing-container" class="remui-format-card all-section-format theme-{{theme}} row">
    <ul class="sections row generalsection-container">
        {{! Display General Section }}
        {{#generalsection}}
        {{> format_remuiformat/card_general_section_edit }}
        {{/generalsection}}
    </ul>
</div>

<div id="list-editing-container" class="remui-format-list all-section-format all-section theme-{{theme}} mt-20">
    <ul class="sections row ">
        {{! Display Remaining Section }}
        {{#sections}}
            {{> format_remuiformat/list_sections }}
        {{/sections}}
        {{{ addsection }}}
    </ul>
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div id="card-editing-container" class="remui-format-card all-section-format theme-';
                $value = $this->resolveValue($context->find('theme'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' row">
';
                $buffer .= $indent . '    <ul class="sections row generalsection-container">
';
                $value = $context->find('generalsection');
                $buffer .= $this->section98a32e1f8de3d023e30214b50541befd($context, $indent, $value);
                $buffer .= $indent . '    </ul>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '<div id="list-editing-container" class="remui-format-list all-section-format all-section theme-';
                $value = $this->resolveValue($context->find('theme'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' mt-20">
';
                $buffer .= $indent . '    <ul class="sections row ">
';
                $value = $context->find('sections');
                $buffer .= $this->section76c912ca377d89eb054b2b4c88b73938($context, $indent, $value);
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('addsection'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '    </ul>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5106b7fbb1007645c3bc62c797f3f3d8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> format_remuiformat/list_general_section }}
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_remuiformat/list_general_section')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF69d133c5e0d65859df7a3c19a7e90c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              var namelocal  = \'section-\'+ {{{ index }}} + \'_\' + {{{ courseid }}} + \'_\' + {{{ user_id }}};
              localStorage.removeItem(namelocal);
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '              var namelocal  = \'section-\'+ ';
                $value = $this->resolveValue($context->find('index'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' + \'_\' + ';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' + \'_\' + ';
                $value = $this->resolveValue($context->find('user_id'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ';
';
                $buffer .= $indent . '              localStorage.removeItem(namelocal);
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section52a630524a95c3f4286c0ac91f8ac6fe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  if(localStorage.getItem(namelocal) == \'false\'){
                    // Change arrow.
                    if (edstorage.get(ed_sectionstate) == \'collapsed\' ) {
                      jQuery(this).find(\'i\').toggleClass(\'fa-angle-up\');
                      jQuery(this).find(\'i\').toggleClass(\'fa-angle-down\');
                      jQuery(this).parent().parent().find(\'.card-footer\').removeClass(\'show\');
                      jQuery(this).parent().parent().find(\'.card-footer\').addClass(\'collapse\');
                      jQuery(this).parent().parent().find(\'.summary\').show(500);
                      {{! jQuery(this).parent().parent().find(\'.section-summary-activities\').show(500); }}
                    } else {
                      jQuery(this).parent().parent().find(\'.card-footer\').removeClass(\'collapse\');
                      jQuery(this).parent().parent().find(\'.card-footer\').addClass(\'show\');
                      {{! jQuery(this).parent().parent().find(\'.section-summary-activities\').hide(500); }}
                      jQuery(this).parent().parent().find(\'.summary\').show(500);
                    }
                  }
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  if(localStorage.getItem(namelocal) == \'false\'){
';
                $buffer .= $indent . '                    // Change arrow.
';
                $buffer .= $indent . '                    if (edstorage.get(ed_sectionstate) == \'collapsed\' ) {
';
                $buffer .= $indent . '                      jQuery(this).find(\'i\').toggleClass(\'fa-angle-up\');
';
                $buffer .= $indent . '                      jQuery(this).find(\'i\').toggleClass(\'fa-angle-down\');
';
                $buffer .= $indent . '                      jQuery(this).parent().parent().find(\'.card-footer\').removeClass(\'show\');
';
                $buffer .= $indent . '                      jQuery(this).parent().parent().find(\'.card-footer\').addClass(\'collapse\');
';
                $buffer .= $indent . '                      jQuery(this).parent().parent().find(\'.summary\').show(500);
';
                $buffer .= $indent . '                    } else {
';
                $buffer .= $indent . '                      jQuery(this).parent().parent().find(\'.card-footer\').removeClass(\'collapse\');
';
                $buffer .= $indent . '                      jQuery(this).parent().parent().find(\'.card-footer\').addClass(\'show\');
';
                $buffer .= $indent . '                      jQuery(this).parent().parent().find(\'.summary\').show(500);
';
                $buffer .= $indent . '                    }
';
                $buffer .= $indent . '                  }
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7002c189e908980a86b122c6f734c0e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  if(localStorage.getItem(namelocal) == \'true\'){
                    if (edstorage.get(ed_sectionstate) == \'expanded\' ) {
                      jQuery(this).find(\'i\').toggleClass(\'fa-angle-down\');
                      jQuery(this).find(\'i\').toggleClass(\'fa-angle-up\');
                      jQuery(this).parent().parent().find(\'.card-footer\').removeClass(\'collapse\');
                      jQuery(this).parent().parent().find(\'.card-footer\').addClass(\'show\');
                      jQuery(this).parent().parent().find(\'.summary\').show(500);
                      {{! jQuery(this).parent().parent().find(\'.section-summary-activities\').hide(500); }}
                    } else {
                      jQuery(this).parent().parent().find(\'.card-footer\').removeClass(\'show\');
                      jQuery(this).parent().parent().find(\'.card-footer\').addClass(\'collapse\');
                      jQuery(this).parent().parent().find(\'.summary\').show(500);
                      {{! jQuery(this).parent().parent().find(\'.section-summary-activities\').show(500); }}
                    }
                  }
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  if(localStorage.getItem(namelocal) == \'true\'){
';
                $buffer .= $indent . '                    if (edstorage.get(ed_sectionstate) == \'expanded\' ) {
';
                $buffer .= $indent . '                      jQuery(this).find(\'i\').toggleClass(\'fa-angle-down\');
';
                $buffer .= $indent . '                      jQuery(this).find(\'i\').toggleClass(\'fa-angle-up\');
';
                $buffer .= $indent . '                      jQuery(this).parent().parent().find(\'.card-footer\').removeClass(\'collapse\');
';
                $buffer .= $indent . '                      jQuery(this).parent().parent().find(\'.card-footer\').addClass(\'show\');
';
                $buffer .= $indent . '                      jQuery(this).parent().parent().find(\'.summary\').show(500);
';
                $buffer .= $indent . '                    } else {
';
                $buffer .= $indent . '                      jQuery(this).parent().parent().find(\'.card-footer\').removeClass(\'show\');
';
                $buffer .= $indent . '                      jQuery(this).parent().parent().find(\'.card-footer\').addClass(\'collapse\');
';
                $buffer .= $indent . '                      jQuery(this).parent().parent().find(\'.summary\').show(500);
';
                $buffer .= $indent . '                    }
';
                $buffer .= $indent . '                  }
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCf6cc099faf7aa860bd403acd48b5744(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      require([\'jquery\', \'core/storagewrapper\'], function(jQuery, StorageWrapper) {
          // Moodle localstorage wrapper.
          var edstorage = new StorageWrapper(window.localStorage);

          // save the current choice by admin - expanded or collapsed
          var formatlabel = {{{ courseid }}} + \'_\' + {{{ user_id }}} + \'_defaultview\';
          var userformat = localStorage.getItem(formatlabel);
          // alert(userformat);
          if(userformat == null) {
            localStorage.setItem(formatlabel, {{{ defaultview }}});
          }
          else {
            // the user\'s last format and the current format do not match, reset user data
            if(userformat != {{{ defaultview }}}) {
            {{#sections}}
              var namelocal  = \'section-\'+ {{{ index }}} + \'_\' + {{{ courseid }}} + \'_\' + {{{ user_id }}};
              localStorage.removeItem(namelocal);
            {{/sections}}
            localStorage.setItem(formatlabel, {{{ defaultview }}});
            }
            else {
              // current format and the user\'s format are the same
              jQuery(\'body#page-course-view-remuiformat ul.remui-format-list a.panel-title\').each(function(){
                var section_id = jQuery(this).parent().parent().parent().attr(\'id\');
                var namelocal  = section_id + \'_\' + {{{ courseid }}} + \'_\' + {{{ user_id }}};
                var ed_sectionstate  = section_id + \'_\' + {{{ courseid }}} + \'_\' + {{{ user_id }}};

                {{#expanded}}
                  if(localStorage.getItem(namelocal) == \'false\'){
                    // Change arrow.
                    if (edstorage.get(ed_sectionstate) == \'collapsed\' ) {
                      jQuery(this).find(\'i\').toggleClass(\'fa-angle-up\');
                      jQuery(this).find(\'i\').toggleClass(\'fa-angle-down\');
                      jQuery(this).parent().parent().find(\'.card-footer\').removeClass(\'show\');
                      jQuery(this).parent().parent().find(\'.card-footer\').addClass(\'collapse\');
                      jQuery(this).parent().parent().find(\'.summary\').show(500);
                      {{! jQuery(this).parent().parent().find(\'.section-summary-activities\').show(500); }}
                    } else {
                      jQuery(this).parent().parent().find(\'.card-footer\').removeClass(\'collapse\');
                      jQuery(this).parent().parent().find(\'.card-footer\').addClass(\'show\');
                      {{! jQuery(this).parent().parent().find(\'.section-summary-activities\').hide(500); }}
                      jQuery(this).parent().parent().find(\'.summary\').show(500);
                    }
                  }
                {{/expanded}}
                {{#collapsed}}
                  if(localStorage.getItem(namelocal) == \'true\'){
                    if (edstorage.get(ed_sectionstate) == \'expanded\' ) {
                      jQuery(this).find(\'i\').toggleClass(\'fa-angle-down\');
                      jQuery(this).find(\'i\').toggleClass(\'fa-angle-up\');
                      jQuery(this).parent().parent().find(\'.card-footer\').removeClass(\'collapse\');
                      jQuery(this).parent().parent().find(\'.card-footer\').addClass(\'show\');
                      jQuery(this).parent().parent().find(\'.summary\').show(500);
                      {{! jQuery(this).parent().parent().find(\'.section-summary-activities\').hide(500); }}
                    } else {
                      jQuery(this).parent().parent().find(\'.card-footer\').removeClass(\'show\');
                      jQuery(this).parent().parent().find(\'.card-footer\').addClass(\'collapse\');
                      jQuery(this).parent().parent().find(\'.summary\').show(500);
                      {{! jQuery(this).parent().parent().find(\'.section-summary-activities\').show(500); }}
                    }
                  }
                {{/collapsed}}
              });
            }
          }

          var section_state = {};
          jQuery(\'body#page-course-view-remuiformat ul.remui-format-list a.panel-title\').click(function(){
              jQuery(this).find(\'i\').toggleClass(\'fa-angle-down\');
              jQuery(this).find(\'i\').toggleClass(\'fa-angle-up\');
              var section_id = jQuery(this).parent().parent().parent().attr(\'id\');

              var namelocal  = section_id + \'_\' + {{{ courseid }}} + \'_\' + {{{ user_id }}};
              var ed_sectionstate  = section_id + \'_\' + {{{ courseid }}} + \'_\' + {{{ user_id }}};

              jQuery(this).parent().parent().find(\'.summary\').show(500);
              if(jQuery(this).find(\'.float-right\').hasClass(\'fa-angle-down\')) {
                  sectionstate = \'collapsed\';
                  localStorage.setItem(namelocal, \'false\');
                  jQuery(this).parent().parent().find(\'.card-footer\').removeClass(\'show\');
                  jQuery(this).parent().parent().find(\'.card-footer\').addClass(\'collapse\');
                  jQuery(this).parent().parent().find(\'.summary\').show(500);
                  {{! jQuery(this).parent().parent().find(\'.section-summary-activities\').show(500); }}
              } else {
                  sectionstate = \'expanded\';
                  localStorage.setItem(namelocal, \'true\');
                  jQuery(this).parent().parent().find(\'.card-footer\').removeClass(\'collapse\');
                  jQuery(this).parent().parent().find(\'.card-footer\').addClass(\'show\');
                  jQuery(this).parent().parent().find(\'.summary\').show(500);
                  {{! jQuery(this).parent().parent().find(\'.section-summary-activities\').hide(500); }}
              }
              edstorage.set(ed_sectionstate, sectionstate);
          });
      });
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '      require([\'jquery\', \'core/storagewrapper\'], function(jQuery, StorageWrapper) {
';
                $buffer .= $indent . '          // Moodle localstorage wrapper.
';
                $buffer .= $indent . '          var edstorage = new StorageWrapper(window.localStorage);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '          // save the current choice by admin - expanded or collapsed
';
                $buffer .= $indent . '          var formatlabel = ';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' + \'_\' + ';
                $value = $this->resolveValue($context->find('user_id'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' + \'_defaultview\';
';
                $buffer .= $indent . '          var userformat = localStorage.getItem(formatlabel);
';
                $buffer .= $indent . '          // alert(userformat);
';
                $buffer .= $indent . '          if(userformat == null) {
';
                $buffer .= $indent . '            localStorage.setItem(formatlabel, ';
                $value = $this->resolveValue($context->find('defaultview'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ');
';
                $buffer .= $indent . '          }
';
                $buffer .= $indent . '          else {
';
                $buffer .= $indent . '            // the user\'s last format and the current format do not match, reset user data
';
                $buffer .= $indent . '            if(userformat != ';
                $value = $this->resolveValue($context->find('defaultview'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ') {
';
                $value = $context->find('sections');
                $buffer .= $this->sectionF69d133c5e0d65859df7a3c19a7e90c8($context, $indent, $value);
                $buffer .= $indent . '            localStorage.setItem(formatlabel, ';
                $value = $this->resolveValue($context->find('defaultview'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ');
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '            else {
';
                $buffer .= $indent . '              // current format and the user\'s format are the same
';
                $buffer .= $indent . '              jQuery(\'body#page-course-view-remuiformat ul.remui-format-list a.panel-title\').each(function(){
';
                $buffer .= $indent . '                var section_id = jQuery(this).parent().parent().parent().attr(\'id\');
';
                $buffer .= $indent . '                var namelocal  = section_id + \'_\' + ';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' + \'_\' + ';
                $value = $this->resolveValue($context->find('user_id'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ';
';
                $buffer .= $indent . '                var ed_sectionstate  = section_id + \'_\' + ';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' + \'_\' + ';
                $value = $this->resolveValue($context->find('user_id'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ';
';
                $buffer .= $indent . '
';
                $value = $context->find('expanded');
                $buffer .= $this->section52a630524a95c3f4286c0ac91f8ac6fe($context, $indent, $value);
                $value = $context->find('collapsed');
                $buffer .= $this->section7002c189e908980a86b122c6f734c0e8($context, $indent, $value);
                $buffer .= $indent . '              });
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '          }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '          var section_state = {};
';
                $buffer .= $indent . '          jQuery(\'body#page-course-view-remuiformat ul.remui-format-list a.panel-title\').click(function(){
';
                $buffer .= $indent . '              jQuery(this).find(\'i\').toggleClass(\'fa-angle-down\');
';
                $buffer .= $indent . '              jQuery(this).find(\'i\').toggleClass(\'fa-angle-up\');
';
                $buffer .= $indent . '              var section_id = jQuery(this).parent().parent().parent().attr(\'id\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '              var namelocal  = section_id + \'_\' + ';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' + \'_\' + ';
                $value = $this->resolveValue($context->find('user_id'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ';
';
                $buffer .= $indent . '              var ed_sectionstate  = section_id + \'_\' + ';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' + \'_\' + ';
                $value = $this->resolveValue($context->find('user_id'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ';
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '              jQuery(this).parent().parent().find(\'.summary\').show(500);
';
                $buffer .= $indent . '              if(jQuery(this).find(\'.float-right\').hasClass(\'fa-angle-down\')) {
';
                $buffer .= $indent . '                  sectionstate = \'collapsed\';
';
                $buffer .= $indent . '                  localStorage.setItem(namelocal, \'false\');
';
                $buffer .= $indent . '                  jQuery(this).parent().parent().find(\'.card-footer\').removeClass(\'show\');
';
                $buffer .= $indent . '                  jQuery(this).parent().parent().find(\'.card-footer\').addClass(\'collapse\');
';
                $buffer .= $indent . '                  jQuery(this).parent().parent().find(\'.summary\').show(500);
';
                $buffer .= $indent . '              } else {
';
                $buffer .= $indent . '                  sectionstate = \'expanded\';
';
                $buffer .= $indent . '                  localStorage.setItem(namelocal, \'true\');
';
                $buffer .= $indent . '                  jQuery(this).parent().parent().find(\'.card-footer\').removeClass(\'collapse\');
';
                $buffer .= $indent . '                  jQuery(this).parent().parent().find(\'.card-footer\').addClass(\'show\');
';
                $buffer .= $indent . '                  jQuery(this).parent().parent().find(\'.summary\').show(500);
';
                $buffer .= $indent . '              }
';
                $buffer .= $indent . '              edstorage.set(ed_sectionstate, sectionstate);
';
                $buffer .= $indent . '          });
';
                $buffer .= $indent . '      });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b8e0d37ed27f27a714745625974a351(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      require([\'jquery\'], function(jQuery) {
          jQuery(\'.remui-format-list .card-title .float-right\').click(function(){
              var iconparent = jQuery(this).parent();
              console.log(iconparent);
              jQuery(iconparent).find(\'.float-right\').toggleClass(\'fa-angle-down\');
              jQuery(iconparent).find(\'.float-right\').toggleClass(\'fa-angle-up\');
              var section_id = jQuery(iconparent).parent().parent().parent().attr(\'id\');
              var namelocal  = section_id + \'_\' + {{{ courseid }}} + \'_\' + {{{ user_id }}};
              localStorage.setItem(namelocal, \'true\');
              jQuery(iconparent).parent().find(\'.summary\').show(500);
              if(jQuery(iconparent).find(\'.float-right\').hasClass(\'fa-angle-down\')) {
                  jQuery(iconparent).parent().find(\'.card-footer\').removeClass("show");
                  jQuery(iconparent).parent().find(\'.card-footer\').addClass("collapse");
                  jQuery(iconparent).parent().find(\'.summary\').show(500);
                  {{! jQuery(iconparent).parent().find(\'.section-summary-activities\').show(500); }}
              } else {
                  jQuery(iconparent).parent().find(\'.card-footer\').removeClass(\'collapse\');
                  jQuery(iconparent).parent().find(\'.card-footer\').addClass("show");
                  jQuery(iconparent).parent().find(\'.summary\').show(500);
                  {{! jQuery(iconparent).parent().find(\'.section-summary-activities\').hide(500); }}
              }
          });
      });
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '      require([\'jquery\'], function(jQuery) {
';
                $buffer .= $indent . '          jQuery(\'.remui-format-list .card-title .float-right\').click(function(){
';
                $buffer .= $indent . '              var iconparent = jQuery(this).parent();
';
                $buffer .= $indent . '              console.log(iconparent);
';
                $buffer .= $indent . '              jQuery(iconparent).find(\'.float-right\').toggleClass(\'fa-angle-down\');
';
                $buffer .= $indent . '              jQuery(iconparent).find(\'.float-right\').toggleClass(\'fa-angle-up\');
';
                $buffer .= $indent . '              var section_id = jQuery(iconparent).parent().parent().parent().attr(\'id\');
';
                $buffer .= $indent . '              var namelocal  = section_id + \'_\' + ';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' + \'_\' + ';
                $value = $this->resolveValue($context->find('user_id'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ';
';
                $buffer .= $indent . '              localStorage.setItem(namelocal, \'true\');
';
                $buffer .= $indent . '              jQuery(iconparent).parent().find(\'.summary\').show(500);
';
                $buffer .= $indent . '              if(jQuery(iconparent).find(\'.float-right\').hasClass(\'fa-angle-down\')) {
';
                $buffer .= $indent . '                  jQuery(iconparent).parent().find(\'.card-footer\').removeClass("show");
';
                $buffer .= $indent . '                  jQuery(iconparent).parent().find(\'.card-footer\').addClass("collapse");
';
                $buffer .= $indent . '                  jQuery(iconparent).parent().find(\'.summary\').show(500);
';
                $buffer .= $indent . '              } else {
';
                $buffer .= $indent . '                  jQuery(iconparent).parent().find(\'.card-footer\').removeClass(\'collapse\');
';
                $buffer .= $indent . '                  jQuery(iconparent).parent().find(\'.card-footer\').addClass("show");
';
                $buffer .= $indent . '                  jQuery(iconparent).parent().find(\'.summary\').show(500);
';
                $buffer .= $indent . '              }
';
                $buffer .= $indent . '          });
';
                $buffer .= $indent . '      });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC5816eb51355e05444cebda70334c5c7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#js}}
      require([\'jquery\'], function(jQuery) {
          jQuery(\'.remui-format-list .card-title .float-right\').click(function(){
              var iconparent = jQuery(this).parent();
              console.log(iconparent);
              jQuery(iconparent).find(\'.float-right\').toggleClass(\'fa-angle-down\');
              jQuery(iconparent).find(\'.float-right\').toggleClass(\'fa-angle-up\');
              var section_id = jQuery(iconparent).parent().parent().parent().attr(\'id\');
              var namelocal  = section_id + \'_\' + {{{ courseid }}} + \'_\' + {{{ user_id }}};
              localStorage.setItem(namelocal, \'true\');
              jQuery(iconparent).parent().find(\'.summary\').show(500);
              if(jQuery(iconparent).find(\'.float-right\').hasClass(\'fa-angle-down\')) {
                  jQuery(iconparent).parent().find(\'.card-footer\').removeClass("show");
                  jQuery(iconparent).parent().find(\'.card-footer\').addClass("collapse");
                  jQuery(iconparent).parent().find(\'.summary\').show(500);
                  {{! jQuery(iconparent).parent().find(\'.section-summary-activities\').show(500); }}
              } else {
                  jQuery(iconparent).parent().find(\'.card-footer\').removeClass(\'collapse\');
                  jQuery(iconparent).parent().find(\'.card-footer\').addClass("show");
                  jQuery(iconparent).parent().find(\'.summary\').show(500);
                  {{! jQuery(iconparent).parent().find(\'.section-summary-activities\').hide(500); }}
              }
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
                $buffer .= $this->section8b8e0d37ed27f27a714745625974a351($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
