<?php

namespace Alfonsobries\NovaTrumbowyg;

use Laravel\Nova\Fields\Field;

class NovaTrumbowyg extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-trumbowyg';

    /**
     * Allow to pass any existing Trumbowyg option to the editor.
     * Consult the Trumbowyg documentation [https://alex-d.github.io/Trumbowyg/documentation/#basic-options]
     * to view the list of all the available options.
     *
     * @param  array  $options
     * @return self
     */
    public function options(array $options)
    {
        return $this->withMeta([
            'options' => $options,
        ]);
    }

    public function meta()
    {
        $options = [
            'options' => [
                'btns' => [
                    ['bold', 'italic'],
                    ['unorderedList', 'orderedList'],
                    ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                    ['link', 'insertImage'],
                ],
            ],
        ];

        return array_merge($options, $this->meta);
    }
}
