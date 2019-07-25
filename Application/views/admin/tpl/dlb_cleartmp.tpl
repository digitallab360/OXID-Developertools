[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign}]

<div class="developer box">
    <h1>[{$oView->getShopName()}] | [{oxmultilang ident='dlb_clearcache_headline'}]</h1>

    [{if $clearcachelog}]
        <hr>
        <div class="cachelog-details">
            <h3>[{oxmultilang ident='dlb_clearcache_errorlog'}]:</h3>
            [{$clearcachelog}]
        </div>
    [{/if}]

    <h2>[{oxmultilang ident='dlb_clearcache_tmpdir'}]:</h2>
    <hr>
    <pre>[{$oView->getTmpFiles()}]</pre>
    [{if $clearcachesuccess && !$clearcachelog}]
        <hr>
        <div class="cachelog-success">[{$clearcachesuccess}]</div>
    [{/if}]
</div>

<form name="clearTmpDir" id="clearTmpDir" class="developertool_form" action="[{$oViewConf->getSelfLink()}]" method="post">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="cl" value="DlbClearTmp">
    <input type="hidden" name="fnc" value="cleartmpfiles">
    <input class="submit" type="Submit" value="[{oxmultilang ident="dlb_clearcache_tmpdir_delete_button"}]">
</form>

[{include file=$oViewConf->getModulePath('dlb_developertools', 'out/admin/inc/dlb_developertools_bottom.tpl')}]
[{include file="bottomitem.tpl"}]