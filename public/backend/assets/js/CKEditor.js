
function ckEditorInit() {
    CKEDITOR.replaceAll(function (textarea, config) {
        if (textarea.className.search("ckeditor-content") != -1) {
            config.filebrowserImageBrowseUrl = '/laravel-filemanager?type=Images';
            config.filebrowserImageUploadUrl = '/laravel-filemanager/upload?type=Images&_token=';
            config.filebrowserBrowseUrl = '/laravel-filemanager?type=Files';
            config.filebrowserUploadUrl = '/laravel-filemanager/upload?type=Files&_token=';
            return true;
        } else if (textarea.className.search("ckeditor-summary") != -1) {
            config.toolbarGroups = [{
                name: 'document',
                groups: ['mode', 'document', 'doctools']
            },
            {
                name: 'clipboard',
                groups: ['undo', 'clipboard']
            },
            {
                name: 'editing',
                groups: ['find', 'selection', 'spellchecker', 'editing']
            },
            {
                name: 'forms',
                groups: ['forms']
            },
                '/',
            {
                name: 'basicstyles',
                groups: ['basicstyles', 'cleanup']
            },
            {
                name: 'paragraph',
                groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph']
            },
            {
                name: 'links',
                groups: ['links']
            },
            {
                name: 'insert',
                groups: ['insert']
            },
            {
                name: 'colors',
                groups: ['colors']
            },
            {
                name: 'styles',
                groups: ['styles']
            },
            {
                name: 'tools',
                groups: ['tools']
            },
            {
                name: 'others',
                groups: ['others']
            },
            {
                name: 'about',
                groups: ['about']
            }
            ];
            config.removeButtons =
                'Source,Save,NewPage,ExportPdf,Preview,Print,Templates,Undo,Redo,Cut,Copy,Paste,PasteText,PasteFromWord,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Superscript,Subscript,Strike,CopyFormatting,RemoveFormat,NumberedList,BulletedList,Indent,Outdent,CreateDiv,BidiLtr,BidiRtl,Language,Anchor,Image,Flash,Table,HorizontalRule,Smiley,PageBreak,SpecialChar,Iframe,Styles,Format,Font,FontSize,Maximize,ShowBlocks,About';

            return true;
        }
        return false;
    });
}

function ckEditorUpdate() {
    for (let editorName in CKEDITOR.instances) {
        CKEDITOR.instances[editorName].updateElement();
    }
}
