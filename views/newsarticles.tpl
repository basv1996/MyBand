<section>
{$i=1}
 {foreach from=$result item=oneItem}
 {if $i==0}
 <div id="left">
  <h1>{$oneItem.title}</h1>
  <img src={$oneItem.image}>    
  <!--<content>{$oneItem.content|truncate:30}</content>-->
  <content>{$oneItem.content}</content>
   <p>{$oneItem.date_created|date_format:"%e %B %Y"}</p>
    </div>
    {$i=1}
    {else}
    <div id="right">
  <h1>{$oneItem.title}</h1>
  <img src={$oneItem.image}>    
  <!--<content>{$oneItem.content|truncate:30}</content>-->
  <content>{$oneItem.content}</content>
    <p>{$oneItem.date_created|date_format:"%e %B %Y"}</p>
    </div>
    {$i=0}
    {/if}
   {/foreach}
</section>

<ul>
 <div id="PageInation">
  {for $foo=1 to $total_number_articles}
     <li><a href="?action=home&page_nr={$foo}">{$foo}</a></li>
{/for}
    </div>
</ul>