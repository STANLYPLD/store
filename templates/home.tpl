<html>
<body>
<p>
	Az sym {$NAME}
</p>

{if $smarty.get.test == 6}
    {include file='mainMenu.tpl'}
{elseif $smarty.get.test == 5}
    <p>
        evala bace, mashaala
    </p>
{else}
    <p>
        nishtooo
    </p>
{/if}


{section name = ss loop = $TABLES}
    {$TABLES[ss].Tables_in_store} <br>
{/section}



</body>
</html>
