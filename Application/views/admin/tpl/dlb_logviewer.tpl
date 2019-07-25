[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign}]

[{if $oView->showExceptionlog()}]

    <div class="developer box">
        <h1>[{$oView->getShopName()}] | [{oxmultilang ident='dlb_logviewer_title'}]</h1>
        <h2>[{oxmultilang ident='dlb_logviewer_subtitle'}] ([{$oView->showFileSize()}] KB):</h2>
        <small>([{oxmultilang ident='dlb_logviewer_lastmodify'}]: [{$oView->showLastModify()}] Uhr)</small>
        <hr>
        <div class="exceptionlog-list">
            <pre>[{$oView->showExceptionlog()}]</pre>
        </div>
    </div>

    <form name="clearExeptionlog" id="clearExeptionlog" class="developertool_form" action="[{$oViewConf->getSelfLink()}]" method="post">
        [{$oViewConf->getHiddenSid()}]
        <input type="hidden" name="cl" value="DlbLogViewer">
        <input type="hidden" name="fnc" value="clearExeptionlog">
        <input class="submit" type="Submit" value="[{oxmultilang ident="dlb_logviewer_clearfile"}]">
    </form>

[{else}]

    <div class="developer box">
        <h1>[{$oView->getShopName()}] | [{oxmultilang ident='dlb_logviewer_title'}]</h1>
        <hr>
        <div class="exceptionlog-list-empty">
            <p>[{oxmultilang ident='dlb_logviewer_emptyinfo'}]</p>
        </div>
    </div>

[{/if}]

[{include file=$oViewConf->getModulePath('dlb_developertools', 'out/admin/inc/dlb_developertools_bottom.tpl')}]
[{include file="bottomitem.tpl"}]