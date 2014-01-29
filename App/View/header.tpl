
<title>{$title}</title>
{foreach from=$js_file item= link}
    <script type="text/javascript" src="{$js_dir}/{$link}"></script>
{/foreach}

{foreach from=$css_file item=link}
    <link href="{$css_dir}/{$link}" rel="stylesheet" type="text/css" media="screen" />
{/foreach}