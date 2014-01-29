<form role="form" class="form-horizontal" method="post" action=" {$root}ressource/add" >
    <div class="form-group">
        <label for="nom" class="col-sm-2 control-label">Nom</label>
        <div class="col-sm-10">
         <input type="text" class="form-control" id="nom" name="name" placeholder="Le nom">
        </div>
    </div>
    <div class="form-group">
        <label for="lien" class="col-sm-2 control-label" >Lien</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="link" id="lien" placeholder="Le Lien">
        </div>
    </div>
    <div class="form-group">
        <label for="category" class="col-sm-2 control-label" >Categorie</label>
        <div class="col-sm-10">
            <select class="form-control" name="category">
              {foreach from=$list_cat item=cat}
                  <option value="{$cat['id']}">{$cat['name']}</option>
              {/foreach}


            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="remarque" class="col-sm-2 control-label" >Remarque</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="remarque" id="remarque" placeholder="La remarque">

            </textarea>
            </div>
    </div>
    <div class="form-group">
        <label for="type" class="col-sm-2 control-label" >Type</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="type" id="type" placeholder="Le Type">
            </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>
</form>
