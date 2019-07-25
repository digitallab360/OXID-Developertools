[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign}]

    <div class="developer box">
        <h1>[{$oView->getShopName()}] | [{oxmultilang ident='dlb_developertools_title'}]</h1>
        <h2>[{oxmultilang ident='dlb_developertools_subtitle'}]</h2>
        <ul>
            <li>Wenn dir das Modul gefällt und du uns unterstützen willst, kannst du gerne hier spenden.</li>
            <li>Du hast einen Fehler entdeckt oder hast eigene Anregungen um das Modul noch besser zu machen, dann schau doch bei uns auf Github vorbei.</li>
        </ul>
        <hr>
        <div class="developer-content">
            <div class="left-column">
                <ol>
                    <li><a href="[{$oViewConf->getSelfLink()}]cl=DlbLogViewer">[{oxmultilang ident='dlb_logviewer_menuitem'}]</a></li>
                    <li><a href="[{$oViewConf->getSelfLink()}]cl=DlbClearTmp">[{oxmultilang ident='dlb_clearcache_menuitem'}]</a></li>
                    <li><a href="[{$oViewConf->getSelfLink()}]cl=DlbUpdateView">[{oxmultilang ident='dlb_updateview_menuitem'}]</a></li>
                </ol>
            </div>
            <div class="right-column">
            	<a href="https://www.paypal.me/PTMarkus" target="_blank"><img src="[{$oViewConf->getModuleUrl('dlb_developertools', 'out/admin/src/img/donation.png')}]"></a>
            </div>
        </div>
    </div>

[{include file=$oViewConf->getModulePath('dlb_developertools', 'out/admin/inc/dlb_developertools_bottom.tpl')}]
[{include file="bottomitem.tpl"}]
