{if !empty($PRODUCT)}

<div class="content">
    <h2>{$PRODUCT[0].name|stripslashes}</h2>
    <h4>{$PRODUCT[0].proizvoditel|stripslashes}</h4>
    <h4>{$PRODUCT[0].price}</h4>
    <p>{$PRODUCT[0].opis|stripslashes}</p>
</div>
{else}

    No such product!!! Mother Fucker!!!

{/if}