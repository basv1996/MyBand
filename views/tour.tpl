<link rel="stylesheet" href="css/tour.css">
{foreach from=$result3 item=oneItem}
 <table>
 <tr>
    <th>d/m/y</th>
    <th>Venue</th>
    <th>City</th>
    <th>Country</th>
  </tr>
 <tr>
    <td>{$oneItem.date}</td>
    <td>{$oneItem.venue}</td>
    <td>{$oneItem.city}</td>
    <td>{$oneItem.country}</td>
  </tr>
    </table>
{/foreach}
