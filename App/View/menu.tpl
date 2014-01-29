<div class="navbar navbar-inverse " id="menu-gen" role="navigation">
        <ul class="nav navbar-nav">

             {foreach from=$myMenu key=lien item=element}
                    {if is_array($element)}
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">{$lien} <b class="caret"></b></a>

                         <ul class="dropdown-menu">
                        {foreach from=$element key=link item=elem }

                            <li class="a-sublink"><a href="{$link}/">{$elem|ucfirst}</a></li>
                        {/foreach}
                        </ul></li>
                    {else}
                <li ><a  class="a-sublink" href="{$lien}/">{$element|ucfirst}</a></li>
                    {/if}
             {/foreach}
         </ul>
    <div class="  pull-right">
        <form class="navbar-form" role="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                <div class="input-group-btn">
                    <button class="btn " type="submit">Search </button>
                </div>
            </div>
           </form>
        </div>
</div>
