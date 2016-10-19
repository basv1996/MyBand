<link rel="stylesheet" href="css/merchandies.css">
<section>
 {foreach from=$result4 item=oneItem}
 <div id="merchandies">
  <h1>{$oneItem.Title}</h1>
  <img src={$oneItem.image_article}> 
  <div id="Prijskaartje">
  <p>{$oneItem.price}</p>
  <content>Aantal:{$oneItem.amount}</content>
     </div>
     </br>
    </div>
   {/foreach}
</section>

<button>Betalen</button>





