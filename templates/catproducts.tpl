{section name=cp loop=$CATPRODUCTS}

<a href="product/{$CATPRODUCTS[cp].url}">
<div class="col-sm-4 content">
    <h3>{$CATPRODUCTS[cp].name|stripslashes}</h3>
    <p>{$CATPRODUCTS[cp].price}</p>
</div>
</a>

{/section}