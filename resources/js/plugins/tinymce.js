let tinymce = require('tinymce');

global.TinyMCE = global.tinymce = tinymce;

require('tinymce/icons/default');

require('tinymce/themes/silver/theme');

require('tinymce/plugins/autolink');
require('tinymce/plugins/advlist');
require('tinymce/plugins/lists');
require('tinymce/plugins/link');
require('tinymce/plugins/image');
require('tinymce/plugins/charmap');
require('tinymce/plugins/print');
require('tinymce/plugins/preview');
require('tinymce/plugins/anchor');
require('tinymce/plugins/searchreplace');
require('tinymce/plugins/visualblocks');
require('tinymce/plugins/code');
require('tinymce/plugins/fullscreen');
require('tinymce/plugins/insertdatetime');
require('tinymce/plugins/media');
require('tinymce/plugins/table');
require('tinymce/plugins/paste');
require('tinymce/plugins/help');
require('tinymce/plugins/wordcount');

require('tinymce/skins/ui/oxide/skin.min.css');
require('tinymce/skins/ui/oxide/content.min.css');

tinymce.init({
    selector:'textarea.tinymce-enable',
    toolbar_mode: 'wrap',
    min_height: 300,
    menubar: false,
    browser_spellcheck: true,
    mobile: {
        theme: 'silver'
    },
    entity_encoding: 'raw', // Without this the editor change Vietnamese chars to HTML entities so we can't use LIKE queries
    plugins: [
        'advlist autolink lists link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table paste code help wordcount'
    ],
    toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | code help',
    content_css: false,
    skin: false,
    setup: function (editor) {
        editor.on('change', function () {
            tinymce.triggerSave();
        });
    }
});
