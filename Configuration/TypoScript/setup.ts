
plugin.tx_azgrrealestate_realestate {
  view {
    templateRootPaths.0 = EXT:azgr_realestate/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_azgrrealestate_realestate.view.templateRootPath}
    partialRootPaths.0 = EXT:azgr_realestate/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_azgrrealestate_realestate.view.partialRootPath}
    layoutRootPaths.0 = EXT:azgr_realestate/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_azgrrealestate_realestate.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_azgrrealestate_realestate.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
  settings {
	apikey = {$plugin.tx_azgrrealestate_realestate.settings.apikey}
	singleViewPidCondominium = {$plugin.tx_azgrrealestate_realestate.settings.singleViewPidCondominium}
  }
}

plugin.tx_azgrrealestate._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)

