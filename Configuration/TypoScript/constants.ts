
plugin.tx_azgrrealestate_realestate {
  view {
    # cat=plugin.tx_azgrrealestate_realestate/file; type=string; label=Path to template root (FE)
    templateRootPath =
    # cat=plugin.tx_azgrrealestate_realestate/file; type=string; label=Path to template partials (FE)
    partialRootPath =
    # cat=plugin.tx_azgrrealestate_realestate/file; type=string; label=Path to template layouts (FE)
    layoutRootPath =
  }
  persistence {
    # cat=plugin.tx_azgrrealestate_realestate//a; type=string; label=Default storage PID
    storagePid =
  }
  settings {
	# cat=plugin.tx_azgrrealestate_realestate//a; type=string; label=Google Maps API-Key
	apikey =
	# cat=plugin.tx_azgrrealestate_realestate//a; type=string; label=Default singleView PID (Wohnanlage)
    singleViewPidCondominium =
  }
}
