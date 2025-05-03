<?php

class __Mustache_98d4496276bf7c71001b1a1a6034852e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="modal fade" id="remuiformateditmodeinfomodal" tabindex="-1" role="dialog" aria-hidden="true">
';
        $buffer .= $indent . '    <div class="modal-dialog" role="document">
';
        $buffer .= $indent . '        <div class="modal-content">
';
        $buffer .= $indent . '            <div class="modal-body">
';
        $buffer .= $indent . '                ';
        $value = $context->find('str');
        $buffer .= $this->section2067e5703afe9eedc07b414657c121b4($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="modal-footer pt-0 border-0">
';
        $buffer .= $indent . '                <a type="button" class="btn btn-link border-0 hideeditmodeinfomodal" >';
        $value = $context->find('str');
        $buffer .= $this->sectionBe053d22e69fa06b239c1d408ad1968a($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '                <button type="button" class="btn btn-secondary" data-dismiss="modal">';
        $value = $context->find('str');
        $buffer .= $this->section767ff0dedeee9f7f2e08bee0759a5f16($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('applylatestpref');
        if (empty($value)) {
            
            $value = $context->find('js');
            $buffer .= $this->sectionB12304193648600ba987d9fe9e55750c($context, $indent, $value);
            $buffer .= $indent . '
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $value = $context->find('applylatestpref');
        $buffer .= $this->sectionCe5430297c74f5e6482afa0d1837bc95($context, $indent, $value);

        return $buffer;
    }

    private function section2067e5703afe9eedc07b414657c121b4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'editmodeinfo ,format_remuiformat';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'editmodeinfo ,format_remuiformat';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe053d22e69fa06b239c1d408ad1968a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'donotshowagain ,format_remuiformat';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'donotshowagain ,format_remuiformat';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section767ff0dedeee9f7f2e08bee0759a5f16(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'okay ,format_remuiformat';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'okay ,format_remuiformat';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB12304193648600ba987d9fe9e55750c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'jquery\'], function($){
        $(document).ready(function(){
            $(\'#remuiformateditmodeinfomodal\').modal(\'show\');

            $(".hideeditmodeinfomodal").click(function(){
                M.util.set_user_preference(\'showinfomodalineditmode\', true);
                $(\'#remuiformateditmodeinfomodal\').modal(\'hide\');
            });
        });
    });
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'jquery\'], function($){
';
                $buffer .= $indent . '        $(document).ready(function(){
';
                $buffer .= $indent . '            $(\'#remuiformateditmodeinfomodal\').modal(\'show\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            $(".hideeditmodeinfomodal").click(function(){
';
                $buffer .= $indent . '                M.util.set_user_preference(\'showinfomodalineditmode\', true);
';
                $buffer .= $indent . '                $(\'#remuiformateditmodeinfomodal\').modal(\'hide\');
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3558a63456d87c156200e6badd8d5047(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'jquery\', \'core_user/repository\'], function($, UserRepository){
        $(document).ready(function(){
            $(\'#remuiformateditmodeinfomodal\').modal(\'show\');

            $(".hideeditmodeinfomodal").click(function(){
                UserRepository.setUserPreference(\'showinfomodalineditmode\', true);
                $(\'#remuiformateditmodeinfomodal\').modal(\'hide\');
            });
        });
    });
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'jquery\', \'core_user/repository\'], function($, UserRepository){
';
                $buffer .= $indent . '        $(document).ready(function(){
';
                $buffer .= $indent . '            $(\'#remuiformateditmodeinfomodal\').modal(\'show\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            $(".hideeditmodeinfomodal").click(function(){
';
                $buffer .= $indent . '                UserRepository.setUserPreference(\'showinfomodalineditmode\', true);
';
                $buffer .= $indent . '                $(\'#remuiformateditmodeinfomodal\').modal(\'hide\');
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCe5430297c74f5e6482afa0d1837bc95(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#js}}
    require([\'jquery\', \'core_user/repository\'], function($, UserRepository){
        $(document).ready(function(){
            $(\'#remuiformateditmodeinfomodal\').modal(\'show\');

            $(".hideeditmodeinfomodal").click(function(){
                UserRepository.setUserPreference(\'showinfomodalineditmode\', true);
                $(\'#remuiformateditmodeinfomodal\').modal(\'hide\');
            });
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
                $buffer .= $this->section3558a63456d87c156200e6badd8d5047($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
