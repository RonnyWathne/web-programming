<html>
    <head>
        <title>Smarty</title>
    </head>
    <body>
        Hello, {$name}!
        
        {if $page == "list"}
            {include file="list.tpl"}
        {else if $page == "table"}
            {include file="table.tpl"}
        {else}
            Here are some choices:
            <a href="index.php?page=list">Show list</a>, 
            <a href="index.php?page=table">Show table</a>, 
        {/if}

    </body>
</html>