<?php

class __Mustache_4d84f7dc95b0326b88120e3adb1bb31d extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div
';
        $buffer .= $indent . '    class="';
        $blockFunction = $context->findInBlock('rootclasses');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= ' lazy-load-list"
';
        $buffer .= $indent . '    aria-live="polite"
';
        $buffer .= $indent . '    data-region="lazy-load-list"
';
        $buffer .= $indent . '    data-user-id="';
        $value = $this->resolveValue($context->findDot('loggedinuser.id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    ';
        $blockFunction = $context->findInBlock('rootattributes');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '    <div class="hidden text-center p-2" data-region="empty-message-container">
';
        $buffer .= $indent . '        <p class="text-muted mt-2">
';
        $buffer .= $indent . '            ';
        $blockFunction = $context->findInBlock('emptymessage');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '
';
        $buffer .= $indent . '        </p>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="hidden list-group" data-region="content-container">
';
        $buffer .= $indent . '        ';
        $blockFunction = $context->findInBlock('content');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="list-group" data-region="placeholder-container">
';
        $buffer .= $indent . '        ';
        $blockFunction = $context->findInBlock('placeholder');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
