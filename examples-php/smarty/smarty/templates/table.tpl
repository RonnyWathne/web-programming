<table>
    {foreach from=$grades key=k item=i}
        <tr style="background: {cycle values='#cccccc, #ececec'}">
            <td>{$k}</td>
            <td>{$i}</td>
        </tr>
    {/foreach}
</table>
