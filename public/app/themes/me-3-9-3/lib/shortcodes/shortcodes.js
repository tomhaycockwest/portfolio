(function() {
    tinymce.create('tinymce.plugins.magna_shortcodes', {
        init : function(ed, url) {
            ed.addCommand('shortcodeWindow', function() {
                ed.windowManager.open({
                    file : url + '/tinymce.php',
                    width : 570,
                    height : 100,
                    inline : 1
                }, {
                    plugin_url : url
                });
            });
            ed.addButton('magna_shortcodes', {cmd : 'shortcodeWindow', image: url + '/me_shortcodes.png' });
        },
    });
    tinymce.PluginManager.add('magna_shortcodes', tinymce.plugins.magna_shortcodes);
})();