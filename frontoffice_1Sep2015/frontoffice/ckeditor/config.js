/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

config.toolbarGroups = [
    {name: 'clipboard', groups: ['clipboard', 'undo']},
    {name: 'editing', groups: ['find', 'selection', 'spellchecker']},
    {name: 'links'},
    {name: 'insert'},
    {name: 'forms'},
    {name: 'tools'},
    {name: 'document', groups: ['mode', 'document', 'doctools']},
    {name: 'others'},
    '/',
    {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
    {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align']},
    {name: 'styles'},
    {name: 'colors'},
    {name: 'about'}
];

CKEDITOR.editorConfig = function() {
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';
};

