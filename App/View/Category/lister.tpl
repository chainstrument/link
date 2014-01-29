<table class="table">
    <thead>
    <th>Id</th>
    <th>Nom</th>
    <th>Date add</th>
    <th>Action</th>
    </thead>
    {foreach from=$category item=item }
        <tr>
            <td> {$item['id']}</td>
            <td> {$item['name']}</td>
            <td> {$item['date_add']}</td>
        </tr>
    {/foreach}
</table>