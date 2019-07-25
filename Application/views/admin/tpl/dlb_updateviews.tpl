[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign}]

<div class="developer box">
    <h1>[{$oView->getShopName()}] | [{oxmultilang ident='dlb_updateview_headline'}]</h1>
    <p>[{oxmultilang ident='dlb_updateview_hinweis'}]</p>
    <hr>
    [{if $blViewSuccess}]
        <div class="cachelog-success">[{oxmultilang ident="dlb_updateview_success"}]</div>
    [{/if}]
</div>

<form name="updateViews" id="updateViews" class="developertool_form" action="[{$oViewConf->getSelfLink()}]" method="post">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="cl" value="DlbUpdateView">
    <input type="hidden" name="fnc" value="rebuildViews">
    <input class="submit" type="Submit" value="[{oxmultilang ident="dlb_updateview_button"}]">
</form>

[{include file=$oViewConf->getModulePath('dlb_developertools', 'out/admin/inc/dlb_developertools_bottom.tpl')}]
[{include file="bottomitem.tpl"}]