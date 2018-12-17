1234
<?php
dump($documentObject)
?>
{{ $modx->documentObject['image'][1] }}
<hr />
@evoParser($documentObject['titl'])
<hr />
@evoParser('[*image*] <br /> [*pagetitle*]')
<hr />
@evoLang('save')
<hr />
@evoStyle('favicon')
<hr />
@evoAdminLang
<hr />
@evoCharset
<hr />
@evoAdminThemeUrl
<hr />
@evoAdminThemeName