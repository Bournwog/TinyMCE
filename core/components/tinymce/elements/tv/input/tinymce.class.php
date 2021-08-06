<?php
/**
 * @package tinymce
 */
class TinyMCEInputRender extends modTemplateVarInputRender
{
    /**
     * Return the template path to load
     *
     * @return string
     */
    public function getTemplate()
    {
    	$corePath = $this->modx->getOption('tinymce.core_path', null,  $this->modx->getOption('core_path').'components/tinymce/');        
        return $corePath . 'elements/tv/input/tpl/tinymce.render.tpl';
    }
}

return 'TinyMCEInputRender';
