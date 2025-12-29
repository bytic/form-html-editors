<?php

declare(strict_types=1);

use ByTIC\Form\HtmlEditors\Editors\AbstractEditor;

return [
    'filters' => [
        'custom' => [],
    ],
    'editor_default' => 'simple',
    'editors' =>
        [
            AbstractEditor::EDITOR_FULL => [
                'relative_urls' => false
            ],
            AbstractEditor::EDITOR_SIMPLE => [
                'relative_urls' => false
            ],
            AbstractEditor::EDITOR_MINI => [
                'relative_urls' => false
            ],
        ]
];
