<section>
{$i=1}
 {foreach from=$result item=oneItem}
 {if $i==0}
 <div id="left">
  <h1>{$oneItem.title}</h1>
  <img src={$oneItem.image}>    
  <p>{$oneItem.date_created|date_format:"%e %B %Y"}</p>
  <content>{$oneItem.content|truncate:30}</content>
    </div>
    {$i=1}
    {else}
    <div id="right">
  <h1>{$oneItem.title}</h1>
  <img src={$oneItem.image}>    
  <p>{$oneItem.date_created|date_format:"%e %B %Y"}</p>
  <content>{$oneItem.content|truncate:30}</content>
    </div>
    {$i=0}
    {/if}
   {/foreach}
</section>





