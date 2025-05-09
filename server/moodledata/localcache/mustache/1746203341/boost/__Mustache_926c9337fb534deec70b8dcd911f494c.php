<?php

class __Mustache_926c9337fb534deec70b8dcd911f494c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="grading-navigation-panel" data-first-userid="';
        $value = $this->resolveValue($context->find('userid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-showuseridentity="';
        $value = $this->resolveValue($context->find('showuseridentity'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        if ($partial = $this->mustache->loadPartial('mod_assign/grading_navigation')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '</div>
';
        $value = $context->find('showreview');
        $buffer .= $this->sectionEe46595c35f0049f4d0e237027419d6e($context, $indent, $value);
        $buffer .= $indent . '<div data-region="grade-panel" ';
        $value = $context->find('showreview');
        if (empty($value)) {
            
            $buffer .= 'class="fullwidth"';
        }
        $buffer .= '>
';
        $buffer .= $indent . '<div data-region="grade" data-contextid="';
        $value = $this->resolveValue($context->find('contextid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-assignmentid="';
        $value = $this->resolveValue($context->find('assignmentid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        if ($partial = $this->mustache->loadPartial('mod_assign/grading_panel')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div data-region="grade-actions-panel">
';
        $buffer .= $indent . '<div data-region="grade-actions">
';
        $buffer .= $indent . '<div class="tool_usertours-resettourcontainer float-start"></div>
';
        if ($partial = $this->mustache->loadPartial('mod_assign/grading_actions')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div data-region="overlay" class="moodle-has-zindex">
';
        if ($partial = $this->mustache->loadPartial('mod_assign/grading_save_in_progress')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section543bd84e7b00471a306f2bd9b2bf65b1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' collapsereviewpanel, mod_assign ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' collapsereviewpanel, mod_assign ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section136f62b4b07bba470ee4b4dd8298de5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/expanded, core, {{#str}} collapsereviewpanel, mod_assign {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/expanded, core, ';
                $value = $context->find('str');
                $buffer .= $this->section543bd84e7b00471a306f2bd9b2bf65b1($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF66de2d596d002b50abb6a7bd2010894(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' expandreviewpanel, mod_assign ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' expandreviewpanel, mod_assign ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC9644e2e38f069df010724bd264f2bab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/collapsed, core, {{#str}} expandreviewpanel, mod_assign {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/collapsed, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionF66de2d596d002b50abb6a7bd2010894($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section169e7d24d9b27dc67de13ee0a8ca2da0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/collapsed_rtl, core, {{#str}} expandreviewpanel, mod_assign {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/collapsed_rtl, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionF66de2d596d002b50abb6a7bd2010894($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6abcfae36018e990de68d20a4efe493d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' clickexpandreviewpanel, mod_assign ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' clickexpandreviewpanel, mod_assign ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe46595c35f0049f4d0e237027419d6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div data-region="review-panel">
    <a href="#" data-region="review-panel-toggle">
        <div class="collapse-icon">{{#pix}} t/expanded, core, {{#str}} collapsereviewpanel, mod_assign {{/str}} {{/pix}}</div>
        <div class="expand-icon">
            <div class="ltr-icon">{{#pix}} t/collapsed, core, {{#str}} expandreviewpanel, mod_assign {{/str}} {{/pix}}</div>
            <div class="rtl-icon">{{#pix}} t/collapsed_rtl, core, {{#str}} expandreviewpanel, mod_assign {{/str}} {{/pix}}</div>
            <div class="toggle-text">{{#str}} clickexpandreviewpanel, mod_assign {{/str}}</div>
        </div>
    </a>
    <div data-region="review-panel-content">
        <div data-region="review">
            {{> mod_assign/review_panel }}
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
                
                $buffer .= $indent . '<div data-region="review-panel">
';
                $buffer .= $indent . '    <a href="#" data-region="review-panel-toggle">
';
                $buffer .= $indent . '        <div class="collapse-icon">';
                $value = $context->find('pix');
                $buffer .= $this->section136f62b4b07bba470ee4b4dd8298de5d($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '        <div class="expand-icon">
';
                $buffer .= $indent . '            <div class="ltr-icon">';
                $value = $context->find('pix');
                $buffer .= $this->sectionC9644e2e38f069df010724bd264f2bab($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '            <div class="rtl-icon">';
                $value = $context->find('pix');
                $buffer .= $this->section169e7d24d9b27dc67de13ee0a8ca2da0($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '            <div class="toggle-text">';
                $value = $context->find('str');
                $buffer .= $this->section6abcfae36018e990de68d20a4efe493d($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </a>
';
                $buffer .= $indent . '    <div data-region="review-panel-content">
';
                $buffer .= $indent . '        <div data-region="review">
';
                if ($partial = $this->mustache->loadPartial('mod_assign/review_panel')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
