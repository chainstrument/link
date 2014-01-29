<table class="table">
    <thead>
    <th>Id</th>
    <th>Nom</th>
    <th>Lien</th>
    <th>Type</th>
    <th>Categorie</th>
    <th>Remarque</th>
    <th>Action</th>
    </thead>

    {foreach from=$ressource item=item }

        <tr>
            <td>{$item['id']}</td>
            <td>{$item['name']}</td>
            <td>{$item['lien']}</td>
            <td>{$item['type']}</td>
            <td>{$item['nom_cat']}</td>

            <td>{$item['remarque']}</td>
            <td><a href="{$root}ressource/delete/{$item['id']}">supprimer</a> /
             <a href="{$root}ressource/update/{$item['id']}">update</a> </td>
        </tr>
    {/foreach}
</table>