<?php

/* Material Design Icons */
add_filter( 'vc_iconpicker-type-materialdesign', 'groci_iconpicker_type_materialdesign' );
function groci_iconpicker_type_materialdesign( $icons ){
	$materialdesign = array(

	array( 'mdi mdi-access-point' => 'mdi mdi-access-point' ), 
	array( 'mdi mdi-access-point-network' => 'mdi mdi-access-point-network' ), 
	array( 'mdi mdi-account' => 'mdi mdi-account' ), 
	array( 'mdi mdi-account-alert' => 'mdi mdi-account-alert' ), 
	array( 'mdi mdi-account-box' => 'mdi mdi-account-box' ), 
	array( 'mdi mdi-account-box-outline' => 'mdi mdi-account-box-outline' ), 
	array( 'mdi mdi-account-card-details' => 'mdi mdi-account-card-details' ), 
	array( 'mdi mdi-account-check' => 'mdi mdi-account-check' ), 
	array( 'mdi mdi-account-circle' => 'mdi mdi-account-circle' ), 
	array( 'mdi mdi-account-convert' => 'mdi mdi-account-convert' ), 
	array( 'mdi mdi-account-edit' => 'mdi mdi-account-edit' ), 
	array( 'mdi mdi-account-group' => 'mdi mdi-account-group' ), 
	array( 'mdi mdi-account-key' => 'mdi mdi-account-key' ), 
	array( 'mdi mdi-account-location' => 'mdi mdi-account-location' ), 
	array( 'mdi mdi-account-minus' => 'mdi mdi-account-minus' ), 
	array( 'mdi mdi-account-multiple' => 'mdi mdi-account-multiple' ), 
	array( 'mdi mdi-account-multiple-minus' => 'mdi mdi-account-multiple-minus' ), 
	array( 'mdi mdi-account-multiple-outline' => 'mdi mdi-account-multiple-outline' ), 
	array( 'mdi mdi-account-multiple-plus' => 'mdi mdi-account-multiple-plus' ), 
	array( 'mdi mdi-account-multiple-plus-outline' => 'mdi mdi-account-multiple-plus-outline' ), 
	array( 'mdi mdi-account-network' => 'mdi mdi-account-network' ), 
	array( 'mdi mdi-account-off' => 'mdi mdi-account-off' ), 
	array( 'mdi mdi-account-outline' => 'mdi mdi-account-outline' ), 
	array( 'mdi mdi-account-plus' => 'mdi mdi-account-plus' ), 
	array( 'mdi mdi-account-plus-outline' => 'mdi mdi-account-plus-outline' ), 
	array( 'mdi mdi-account-remove' => 'mdi mdi-account-remove' ), 
	array( 'mdi mdi-account-search' => 'mdi mdi-account-search' ), 
	array( 'mdi mdi-account-settings' => 'mdi mdi-account-settings' ), 
	array( 'mdi mdi-account-settings-variant' => 'mdi mdi-account-settings-variant' ), 
	array( 'mdi mdi-account-star' => 'mdi mdi-account-star' ), 
	array( 'mdi mdi-account-switch' => 'mdi mdi-account-switch' ), 
	array( 'mdi mdi-accusoft' => 'mdi mdi-accusoft' ), 
	array( 'mdi mdi-adjust' => 'mdi mdi-adjust' ), 
	array( 'mdi mdi-air-conditioner' => 'mdi mdi-air-conditioner' ), 
	array( 'mdi mdi-airballoon' => 'mdi mdi-airballoon' ), 
	array( 'mdi mdi-airplane' => 'mdi mdi-airplane' ), 
	array( 'mdi mdi-airplane-landing' => 'mdi mdi-airplane-landing' ), 
	array( 'mdi mdi-airplane-off' => 'mdi mdi-airplane-off' ), 
	array( 'mdi mdi-airplane-takeoff' => 'mdi mdi-airplane-takeoff' ), 
	array( 'mdi mdi-airplay' => 'mdi mdi-airplay' ), 
	array( 'mdi mdi-airport' => 'mdi mdi-airport' ), 
	array( 'mdi mdi-alarm' => 'mdi mdi-alarm' ), 
	array( 'mdi mdi-alarm-bell' => 'mdi mdi-alarm-bell' ), 
	array( 'mdi mdi-alarm-check' => 'mdi mdi-alarm-check' ), 
	array( 'mdi mdi-alarm-light' => 'mdi mdi-alarm-light' ), 
	array( 'mdi mdi-alarm-multiple' => 'mdi mdi-alarm-multiple' ), 
	array( 'mdi mdi-alarm-off' => 'mdi mdi-alarm-off' ), 
	array( 'mdi mdi-alarm-plus' => 'mdi mdi-alarm-plus' ), 
	array( 'mdi mdi-alarm-snooze' => 'mdi mdi-alarm-snooze' ), 
	array( 'mdi mdi-album' => 'mdi mdi-album' ), 
	array( 'mdi mdi-alert' => 'mdi mdi-alert' ), 
	array( 'mdi mdi-alert-box' => 'mdi mdi-alert-box' ), 
	array( 'mdi mdi-alert-circle' => 'mdi mdi-alert-circle' ), 
	array( 'mdi mdi-alert-circle-outline' => 'mdi mdi-alert-circle-outline' ), 
	array( 'mdi mdi-alert-decagram' => 'mdi mdi-alert-decagram' ), 
	array( 'mdi mdi-alert-octagon' => 'mdi mdi-alert-octagon' ), 
	array( 'mdi mdi-alert-octagram' => 'mdi mdi-alert-octagram' ), 
	array( 'mdi mdi-alert-outline' => 'mdi mdi-alert-outline' ), 
	array( 'mdi mdi-all-inclusive' => 'mdi mdi-all-inclusive' ), 
	array( 'mdi mdi-allo' => 'mdi mdi-allo' ), 
	array( 'mdi mdi-alpha' => 'mdi mdi-alpha' ), 
	array( 'mdi mdi-alphabetical' => 'mdi mdi-alphabetical' ), 
	array( 'mdi mdi-altimeter' => 'mdi mdi-altimeter' ), 
	array( 'mdi mdi-amazon' => 'mdi mdi-amazon' ), 
	array( 'mdi mdi-amazon-clouddrive' => 'mdi mdi-amazon-clouddrive' ), 
	array( 'mdi mdi-ambulance' => 'mdi mdi-ambulance' ), 
	array( 'mdi mdi-amplifier' => 'mdi mdi-amplifier' ), 
	array( 'mdi mdi-anchor' => 'mdi mdi-anchor' ), 
	array( 'mdi mdi-android' => 'mdi mdi-android' ), 
	array( 'mdi mdi-android-debug-bridge' => 'mdi mdi-android-debug-bridge' ), 
	array( 'mdi mdi-android-head' => 'mdi mdi-android-head' ), 
	array( 'mdi mdi-android-studio' => 'mdi mdi-android-studio' ), 
	array( 'mdi mdi-angular' => 'mdi mdi-angular' ), 
	array( 'mdi mdi-angularjs' => 'mdi mdi-angularjs' ), 
	array( 'mdi mdi-animation' => 'mdi mdi-animation' ), 
	array( 'mdi mdi-apple' => 'mdi mdi-apple' ), 
	array( 'mdi mdi-apple-finder' => 'mdi mdi-apple-finder' ), 
	array( 'mdi mdi-apple-ios' => 'mdi mdi-apple-ios' ), 
	array( 'mdi mdi-apple-keyboard-caps' => 'mdi mdi-apple-keyboard-caps' ), 
	array( 'mdi mdi-apple-keyboard-command' => 'mdi mdi-apple-keyboard-command' ), 
	array( 'mdi mdi-apple-keyboard-control' => 'mdi mdi-apple-keyboard-control' ), 
	array( 'mdi mdi-apple-keyboard-option' => 'mdi mdi-apple-keyboard-option' ), 
	array( 'mdi mdi-apple-keyboard-shift' => 'mdi mdi-apple-keyboard-shift' ), 
	array( 'mdi mdi-apple-mobileme' => 'mdi mdi-apple-mobileme' ), 
	array( 'mdi mdi-apple-safari' => 'mdi mdi-apple-safari' ), 
	array( 'mdi mdi-application' => 'mdi mdi-application' ), 
	array( 'mdi mdi-approval' => 'mdi mdi-approval' ), 
	array( 'mdi mdi-apps' => 'mdi mdi-apps' ), 
	array( 'mdi mdi-archive' => 'mdi mdi-archive' ), 
	array( 'mdi mdi-arrange-bring-forward' => 'mdi mdi-arrange-bring-forward' ), 
	array( 'mdi mdi-arrange-bring-to-front' => 'mdi mdi-arrange-bring-to-front' ), 
	array( 'mdi mdi-arrange-send-backward' => 'mdi mdi-arrange-send-backward' ), 
	array( 'mdi mdi-arrange-send-to-back' => 'mdi mdi-arrange-send-to-back' ), 
	array( 'mdi mdi-arrow-all' => 'mdi mdi-arrow-all' ), 
	array( 'mdi mdi-arrow-bottom-left' => 'mdi mdi-arrow-bottom-left' ), 
	array( 'mdi mdi-arrow-bottom-right' => 'mdi mdi-arrow-bottom-right' ), 
	array( 'mdi mdi-arrow-collapse' => 'mdi mdi-arrow-collapse' ), 
	array( 'mdi mdi-arrow-collapse-all' => 'mdi mdi-arrow-collapse-all' ), 
	array( 'mdi mdi-arrow-collapse-down' => 'mdi mdi-arrow-collapse-down' ), 
	array( 'mdi mdi-arrow-collapse-horizontal' => 'mdi mdi-arrow-collapse-horizontal' ), 
	array( 'mdi mdi-arrow-collapse-left' => 'mdi mdi-arrow-collapse-left' ), 
	array( 'mdi mdi-arrow-collapse-right' => 'mdi mdi-arrow-collapse-right' ), 
	array( 'mdi mdi-arrow-collapse-up' => 'mdi mdi-arrow-collapse-up' ), 
	array( 'mdi mdi-arrow-collapse-vertical' => 'mdi mdi-arrow-collapse-vertical' ), 
	array( 'mdi mdi-arrow-down' => 'mdi mdi-arrow-down' ), 
	array( 'mdi mdi-arrow-down-bold' => 'mdi mdi-arrow-down-bold' ), 
	array( 'mdi mdi-arrow-down-bold-box' => 'mdi mdi-arrow-down-bold-box' ), 
	array( 'mdi mdi-arrow-down-bold-box-outline' => 'mdi mdi-arrow-down-bold-box-outline' ), 
	array( 'mdi mdi-arrow-down-bold-circle' => 'mdi mdi-arrow-down-bold-circle' ), 
	array( 'mdi mdi-arrow-down-bold-circle-outline' => 'mdi mdi-arrow-down-bold-circle-outline' ), 
	array( 'mdi mdi-arrow-down-bold-hexagon-outline' => 'mdi mdi-arrow-down-bold-hexagon-outline' ), 
	array( 'mdi mdi-arrow-down-box' => 'mdi mdi-arrow-down-box' ), 
	array( 'mdi mdi-arrow-down-drop-circle' => 'mdi mdi-arrow-down-drop-circle' ), 
	array( 'mdi mdi-arrow-down-drop-circle-outline' => 'mdi mdi-arrow-down-drop-circle-outline' ), 
	array( 'mdi mdi-arrow-down-thick' => 'mdi mdi-arrow-down-thick' ), 
	array( 'mdi mdi-arrow-expand' => 'mdi mdi-arrow-expand' ), 
	array( 'mdi mdi-arrow-expand-all' => 'mdi mdi-arrow-expand-all' ), 
	array( 'mdi mdi-arrow-expand-down' => 'mdi mdi-arrow-expand-down' ), 
	array( 'mdi mdi-arrow-expand-horizontal' => 'mdi mdi-arrow-expand-horizontal' ), 
	array( 'mdi mdi-arrow-expand-left' => 'mdi mdi-arrow-expand-left' ), 
	array( 'mdi mdi-arrow-expand-right' => 'mdi mdi-arrow-expand-right' ), 
	array( 'mdi mdi-arrow-expand-up' => 'mdi mdi-arrow-expand-up' ), 
	array( 'mdi mdi-arrow-expand-vertical' => 'mdi mdi-arrow-expand-vertical' ), 
	array( 'mdi mdi-arrow-left' => 'mdi mdi-arrow-left' ), 
	array( 'mdi mdi-arrow-left-bold' => 'mdi mdi-arrow-left-bold' ), 
	array( 'mdi mdi-arrow-left-bold-box' => 'mdi mdi-arrow-left-bold-box' ), 
	array( 'mdi mdi-arrow-left-bold-box-outline' => 'mdi mdi-arrow-left-bold-box-outline' ), 
	array( 'mdi mdi-arrow-left-bold-circle' => 'mdi mdi-arrow-left-bold-circle' ), 
	array( 'mdi mdi-arrow-left-bold-circle-outline' => 'mdi mdi-arrow-left-bold-circle-outline' ), 
	array( 'mdi mdi-arrow-left-bold-hexagon-outline' => 'mdi mdi-arrow-left-bold-hexagon-outline' ), 
	array( 'mdi mdi-arrow-left-box' => 'mdi mdi-arrow-left-box' ), 
	array( 'mdi mdi-arrow-left-drop-circle' => 'mdi mdi-arrow-left-drop-circle' ), 
	array( 'mdi mdi-arrow-left-drop-circle-outline' => 'mdi mdi-arrow-left-drop-circle-outline' ), 
	array( 'mdi mdi-arrow-left-thick' => 'mdi mdi-arrow-left-thick' ), 
	array( 'mdi mdi-arrow-right' => 'mdi mdi-arrow-right' ), 
	array( 'mdi mdi-arrow-right-bold' => 'mdi mdi-arrow-right-bold' ), 
	array( 'mdi mdi-arrow-right-bold-box' => 'mdi mdi-arrow-right-bold-box' ), 
	array( 'mdi mdi-arrow-right-bold-box-outline' => 'mdi mdi-arrow-right-bold-box-outline' ), 
	array( 'mdi mdi-arrow-right-bold-circle' => 'mdi mdi-arrow-right-bold-circle' ), 
	array( 'mdi mdi-arrow-right-bold-circle-outline' => 'mdi mdi-arrow-right-bold-circle-outline' ), 
	array( 'mdi mdi-arrow-right-bold-hexagon-outline' => 'mdi mdi-arrow-right-bold-hexagon-outline' ), 
	array( 'mdi mdi-arrow-right-box' => 'mdi mdi-arrow-right-box' ), 
	array( 'mdi mdi-arrow-right-drop-circle' => 'mdi mdi-arrow-right-drop-circle' ), 
	array( 'mdi mdi-arrow-right-drop-circle-outline' => 'mdi mdi-arrow-right-drop-circle-outline' ), 
	array( 'mdi mdi-arrow-right-thick' => 'mdi mdi-arrow-right-thick' ), 
	array( 'mdi mdi-arrow-top-left' => 'mdi mdi-arrow-top-left' ), 
	array( 'mdi mdi-arrow-top-right' => 'mdi mdi-arrow-top-right' ), 
	array( 'mdi mdi-arrow-up' => 'mdi mdi-arrow-up' ), 
	array( 'mdi mdi-arrow-up-bold' => 'mdi mdi-arrow-up-bold' ), 
	array( 'mdi mdi-arrow-up-bold-box' => 'mdi mdi-arrow-up-bold-box' ), 
	array( 'mdi mdi-arrow-up-bold-box-outline' => 'mdi mdi-arrow-up-bold-box-outline' ), 
	array( 'mdi mdi-arrow-up-bold-circle' => 'mdi mdi-arrow-up-bold-circle' ), 
	array( 'mdi mdi-arrow-up-bold-circle-outline' => 'mdi mdi-arrow-up-bold-circle-outline' ), 
	array( 'mdi mdi-arrow-up-bold-hexagon-outline' => 'mdi mdi-arrow-up-bold-hexagon-outline' ), 
	array( 'mdi mdi-arrow-up-box' => 'mdi mdi-arrow-up-box' ), 
	array( 'mdi mdi-arrow-up-drop-circle' => 'mdi mdi-arrow-up-drop-circle' ), 
	array( 'mdi mdi-arrow-up-drop-circle-outline' => 'mdi mdi-arrow-up-drop-circle-outline' ), 
	array( 'mdi mdi-arrow-up-thick' => 'mdi mdi-arrow-up-thick' ), 
	array( 'mdi mdi-artist' => 'mdi mdi-artist' ), 
	array( 'mdi mdi-assistant' => 'mdi mdi-assistant' ), 
	array( 'mdi mdi-asterisk' => 'mdi mdi-asterisk' ), 
	array( 'mdi mdi-at' => 'mdi mdi-at' ), 
	array( 'mdi mdi-atlassian' => 'mdi mdi-atlassian' ), 
	array( 'mdi mdi-atom' => 'mdi mdi-atom' ), 
	array( 'mdi mdi-attachment' => 'mdi mdi-attachment' ), 
	array( 'mdi mdi-audiobook' => 'mdi mdi-audiobook' ), 
	array( 'mdi mdi-augmented-reality' => 'mdi mdi-augmented-reality' ), 
	array( 'mdi mdi-auto-fix' => 'mdi mdi-auto-fix' ), 
	array( 'mdi mdi-auto-upload' => 'mdi mdi-auto-upload' ), 
	array( 'mdi mdi-autorenew' => 'mdi mdi-autorenew' ), 
	array( 'mdi mdi-av-timer' => 'mdi mdi-av-timer' ), 
	array( 'mdi mdi-azure' => 'mdi mdi-azure' ), 
	array( 'mdi mdi-baby' => 'mdi mdi-baby' ), 
	array( 'mdi mdi-baby-buggy' => 'mdi mdi-baby-buggy' ), 
	array( 'mdi mdi-backburger' => 'mdi mdi-backburger' ), 
	array( 'mdi mdi-backspace' => 'mdi mdi-backspace' ), 
	array( 'mdi mdi-backup-restore' => 'mdi mdi-backup-restore' ), 
	array( 'mdi mdi-badminton' => 'mdi mdi-badminton' ), 
	array( 'mdi mdi-bandcamp' => 'mdi mdi-bandcamp' ), 
	array( 'mdi mdi-bank' => 'mdi mdi-bank' ), 
	array( 'mdi mdi-barcode' => 'mdi mdi-barcode' ), 
	array( 'mdi mdi-barcode-scan' => 'mdi mdi-barcode-scan' ), 
	array( 'mdi mdi-barley' => 'mdi mdi-barley' ), 
	array( 'mdi mdi-barrel' => 'mdi mdi-barrel' ), 
	array( 'mdi mdi-baseball' => 'mdi mdi-baseball' ), 
	array( 'mdi mdi-baseball-bat' => 'mdi mdi-baseball-bat' ), 
	array( 'mdi mdi-basecamp' => 'mdi mdi-basecamp' ), 
	array( 'mdi mdi-basket' => 'mdi mdi-basket' ), 
	array( 'mdi mdi-basket-fill' => 'mdi mdi-basket-fill' ), 
	array( 'mdi mdi-basket-unfill' => 'mdi mdi-basket-unfill' ), 
	array( 'mdi mdi-basketball' => 'mdi mdi-basketball' ), 
	array( 'mdi mdi-battery' => 'mdi mdi-battery' ), 
	array( 'mdi mdi-battery-10' => 'mdi mdi-battery-10' ), 
	array( 'mdi mdi-battery-20' => 'mdi mdi-battery-20' ), 
	array( 'mdi mdi-battery-30' => 'mdi mdi-battery-30' ), 
	array( 'mdi mdi-battery-40' => 'mdi mdi-battery-40' ), 
	array( 'mdi mdi-battery-50' => 'mdi mdi-battery-50' ), 
	array( 'mdi mdi-battery-60' => 'mdi mdi-battery-60' ), 
	array( 'mdi mdi-battery-70' => 'mdi mdi-battery-70' ), 
	array( 'mdi mdi-battery-80' => 'mdi mdi-battery-80' ), 
	array( 'mdi mdi-battery-90' => 'mdi mdi-battery-90' ), 
	array( 'mdi mdi-battery-alert' => 'mdi mdi-battery-alert' ), 
	array( 'mdi mdi-battery-charging' => 'mdi mdi-battery-charging' ), 
	array( 'mdi mdi-battery-charging-100' => 'mdi mdi-battery-charging-100' ), 
	array( 'mdi mdi-battery-charging-20' => 'mdi mdi-battery-charging-20' ), 
	array( 'mdi mdi-battery-charging-30' => 'mdi mdi-battery-charging-30' ), 
	array( 'mdi mdi-battery-charging-40' => 'mdi mdi-battery-charging-40' ), 
	array( 'mdi mdi-battery-charging-60' => 'mdi mdi-battery-charging-60' ), 
	array( 'mdi mdi-battery-charging-80' => 'mdi mdi-battery-charging-80' ), 
	array( 'mdi mdi-battery-charging-90' => 'mdi mdi-battery-charging-90' ), 
	array( 'mdi mdi-battery-charging-wireless' => 'mdi mdi-battery-charging-wireless' ), 
	array( 'mdi mdi-battery-charging-wireless-10' => 'mdi mdi-battery-charging-wireless-10' ), 
	array( 'mdi mdi-battery-charging-wireless-20' => 'mdi mdi-battery-charging-wireless-20' ), 
	array( 'mdi mdi-battery-charging-wireless-30' => 'mdi mdi-battery-charging-wireless-30' ), 
	array( 'mdi mdi-battery-charging-wireless-40' => 'mdi mdi-battery-charging-wireless-40' ), 
	array( 'mdi mdi-battery-charging-wireless-50' => 'mdi mdi-battery-charging-wireless-50' ), 
	array( 'mdi mdi-battery-charging-wireless-60' => 'mdi mdi-battery-charging-wireless-60' ), 
	array( 'mdi mdi-battery-charging-wireless-70' => 'mdi mdi-battery-charging-wireless-70' ), 
	array( 'mdi mdi-battery-charging-wireless-80' => 'mdi mdi-battery-charging-wireless-80' ), 
	array( 'mdi mdi-battery-charging-wireless-90' => 'mdi mdi-battery-charging-wireless-90' ), 
	array( 'mdi mdi-battery-charging-wireless-alert' => 'mdi mdi-battery-charging-wireless-alert' ), 
	array( 'mdi mdi-battery-charging-wireless-outline' => 'mdi mdi-battery-charging-wireless-outline' ), 
	array( 'mdi mdi-battery-minus' => 'mdi mdi-battery-minus' ), 
	array( 'mdi mdi-battery-negative' => 'mdi mdi-battery-negative' ), 
	array( 'mdi mdi-battery-outline' => 'mdi mdi-battery-outline' ), 
	array( 'mdi mdi-battery-plus' => 'mdi mdi-battery-plus' ), 
	array( 'mdi mdi-battery-positive' => 'mdi mdi-battery-positive' ), 
	array( 'mdi mdi-battery-unknown' => 'mdi mdi-battery-unknown' ), 
	array( 'mdi mdi-beach' => 'mdi mdi-beach' ), 
	array( 'mdi mdi-beaker' => 'mdi mdi-beaker' ), 
	array( 'mdi mdi-beats' => 'mdi mdi-beats' ), 
	array( 'mdi mdi-beer' => 'mdi mdi-beer' ), 
	array( 'mdi mdi-behance' => 'mdi mdi-behance' ), 
	array( 'mdi mdi-bell' => 'mdi mdi-bell' ), 
	array( 'mdi mdi-bell-off' => 'mdi mdi-bell-off' ), 
	array( 'mdi mdi-bell-outline' => 'mdi mdi-bell-outline' ), 
	array( 'mdi mdi-bell-plus' => 'mdi mdi-bell-plus' ), 
	array( 'mdi mdi-bell-ring' => 'mdi mdi-bell-ring' ), 
	array( 'mdi mdi-bell-ring-outline' => 'mdi mdi-bell-ring-outline' ), 
	array( 'mdi mdi-bell-sleep' => 'mdi mdi-bell-sleep' ), 
	array( 'mdi mdi-beta' => 'mdi mdi-beta' ), 
	array( 'mdi mdi-bible' => 'mdi mdi-bible' ), 
	array( 'mdi mdi-bike' => 'mdi mdi-bike' ), 
	array( 'mdi mdi-bing' => 'mdi mdi-bing' ), 
	array( 'mdi mdi-binoculars' => 'mdi mdi-binoculars' ), 
	array( 'mdi mdi-bio' => 'mdi mdi-bio' ), 
	array( 'mdi mdi-biohazard' => 'mdi mdi-biohazard' ), 
	array( 'mdi mdi-bitbucket' => 'mdi mdi-bitbucket' ), 
	array( 'mdi mdi-bitcoin' => 'mdi mdi-bitcoin' ), 
	array( 'mdi mdi-black-mesa' => 'mdi mdi-black-mesa' ), 
	array( 'mdi mdi-blackberry' => 'mdi mdi-blackberry' ), 
	array( 'mdi mdi-blender' => 'mdi mdi-blender' ), 
	array( 'mdi mdi-blinds' => 'mdi mdi-blinds' ), 
	array( 'mdi mdi-block-helper' => 'mdi mdi-block-helper' ), 
	array( 'mdi mdi-blogger' => 'mdi mdi-blogger' ), 
	array( 'mdi mdi-bluetooth' => 'mdi mdi-bluetooth' ), 
	array( 'mdi mdi-bluetooth-audio' => 'mdi mdi-bluetooth-audio' ), 
	array( 'mdi mdi-bluetooth-connect' => 'mdi mdi-bluetooth-connect' ), 
	array( 'mdi mdi-bluetooth-off' => 'mdi mdi-bluetooth-off' ), 
	array( 'mdi mdi-bluetooth-settings' => 'mdi mdi-bluetooth-settings' ), 
	array( 'mdi mdi-bluetooth-transfer' => 'mdi mdi-bluetooth-transfer' ), 
	array( 'mdi mdi-blur' => 'mdi mdi-blur' ), 
	array( 'mdi mdi-blur-linear' => 'mdi mdi-blur-linear' ), 
	array( 'mdi mdi-blur-off' => 'mdi mdi-blur-off' ), 
	array( 'mdi mdi-blur-radial' => 'mdi mdi-blur-radial' ), 
	array( 'mdi mdi-bomb' => 'mdi mdi-bomb' ), 
	array( 'mdi mdi-bomb-off' => 'mdi mdi-bomb-off' ), 
	array( 'mdi mdi-bone' => 'mdi mdi-bone' ), 
	array( 'mdi mdi-book' => 'mdi mdi-book' ), 
	array( 'mdi mdi-book-minus' => 'mdi mdi-book-minus' ), 
	array( 'mdi mdi-book-multiple' => 'mdi mdi-book-multiple' ), 
	array( 'mdi mdi-book-multiple-variant' => 'mdi mdi-book-multiple-variant' ), 
	array( 'mdi mdi-book-open' => 'mdi mdi-book-open' ), 
	array( 'mdi mdi-book-open-page-variant' => 'mdi mdi-book-open-page-variant' ), 
	array( 'mdi mdi-book-open-variant' => 'mdi mdi-book-open-variant' ), 
	array( 'mdi mdi-book-plus' => 'mdi mdi-book-plus' ), 
	array( 'mdi mdi-book-secure' => 'mdi mdi-book-secure' ), 
	array( 'mdi mdi-book-unsecure' => 'mdi mdi-book-unsecure' ), 
	array( 'mdi mdi-book-variant' => 'mdi mdi-book-variant' ), 
	array( 'mdi mdi-bookmark' => 'mdi mdi-bookmark' ), 
	array( 'mdi mdi-bookmark-check' => 'mdi mdi-bookmark-check' ), 
	array( 'mdi mdi-bookmark-music' => 'mdi mdi-bookmark-music' ), 
	array( 'mdi mdi-bookmark-outline' => 'mdi mdi-bookmark-outline' ), 
	array( 'mdi mdi-bookmark-plus' => 'mdi mdi-bookmark-plus' ), 
	array( 'mdi mdi-bookmark-plus-outline' => 'mdi mdi-bookmark-plus-outline' ), 
	array( 'mdi mdi-bookmark-remove' => 'mdi mdi-bookmark-remove' ), 
	array( 'mdi mdi-boombox' => 'mdi mdi-boombox' ), 
	array( 'mdi mdi-bootstrap' => 'mdi mdi-bootstrap' ), 
	array( 'mdi mdi-border-all' => 'mdi mdi-border-all' ), 
	array( 'mdi mdi-border-bottom' => 'mdi mdi-border-bottom' ), 
	array( 'mdi mdi-border-color' => 'mdi mdi-border-color' ), 
	array( 'mdi mdi-border-horizontal' => 'mdi mdi-border-horizontal' ), 
	array( 'mdi mdi-border-inside' => 'mdi mdi-border-inside' ), 
	array( 'mdi mdi-border-left' => 'mdi mdi-border-left' ), 
	array( 'mdi mdi-border-none' => 'mdi mdi-border-none' ), 
	array( 'mdi mdi-border-outside' => 'mdi mdi-border-outside' ), 
	array( 'mdi mdi-border-right' => 'mdi mdi-border-right' ), 
	array( 'mdi mdi-border-style' => 'mdi mdi-border-style' ), 
	array( 'mdi mdi-border-top' => 'mdi mdi-border-top' ), 
	array( 'mdi mdi-border-vertical' => 'mdi mdi-border-vertical' ), 
	array( 'mdi mdi-bottle-wine' => 'mdi mdi-bottle-wine' ), 
	array( 'mdi mdi-bow-tie' => 'mdi mdi-bow-tie' ), 
	array( 'mdi mdi-bowl' => 'mdi mdi-bowl' ), 
	array( 'mdi mdi-bowling' => 'mdi mdi-bowling' ), 
	array( 'mdi mdi-box' => 'mdi mdi-box' ), 
	array( 'mdi mdi-box-cutter' => 'mdi mdi-box-cutter' ), 
	array( 'mdi mdi-box-shadow' => 'mdi mdi-box-shadow' ), 
	array( 'mdi mdi-bridge' => 'mdi mdi-bridge' ), 
	array( 'mdi mdi-briefcase' => 'mdi mdi-briefcase' ), 
	array( 'mdi mdi-briefcase-check' => 'mdi mdi-briefcase-check' ), 
	array( 'mdi mdi-briefcase-download' => 'mdi mdi-briefcase-download' ), 
	array( 'mdi mdi-briefcase-outline' => 'mdi mdi-briefcase-outline' ), 
	array( 'mdi mdi-briefcase-upload' => 'mdi mdi-briefcase-upload' ), 
	array( 'mdi mdi-brightness-1' => 'mdi mdi-brightness-1' ), 
	array( 'mdi mdi-brightness-2' => 'mdi mdi-brightness-2' ), 
	array( 'mdi mdi-brightness-3' => 'mdi mdi-brightness-3' ), 
	array( 'mdi mdi-brightness-4' => 'mdi mdi-brightness-4' ), 
	array( 'mdi mdi-brightness-5' => 'mdi mdi-brightness-5' ), 
	array( 'mdi mdi-brightness-6' => 'mdi mdi-brightness-6' ), 
	array( 'mdi mdi-brightness-7' => 'mdi mdi-brightness-7' ), 
	array( 'mdi mdi-brightness-auto' => 'mdi mdi-brightness-auto' ), 
	array( 'mdi mdi-broom' => 'mdi mdi-broom' ), 
	array( 'mdi mdi-brush' => 'mdi mdi-brush' ), 
	array( 'mdi mdi-buffer' => 'mdi mdi-buffer' ), 
	array( 'mdi mdi-bug' => 'mdi mdi-bug' ), 
	array( 'mdi mdi-bulletin-board' => 'mdi mdi-bulletin-board' ), 
	array( 'mdi mdi-bullhorn' => 'mdi mdi-bullhorn' ), 
	array( 'mdi mdi-bullseye' => 'mdi mdi-bullseye' ), 
	array( 'mdi mdi-bus' => 'mdi mdi-bus' ), 
	array( 'mdi mdi-bus-articulated-end' => 'mdi mdi-bus-articulated-end' ), 
	array( 'mdi mdi-bus-articulated-front' => 'mdi mdi-bus-articulated-front' ), 
	array( 'mdi mdi-bus-double-decker' => 'mdi mdi-bus-double-decker' ), 
	array( 'mdi mdi-bus-school' => 'mdi mdi-bus-school' ), 
	array( 'mdi mdi-bus-side' => 'mdi mdi-bus-side' ), 
	array( 'mdi mdi-cached' => 'mdi mdi-cached' ), 
	array( 'mdi mdi-cake' => 'mdi mdi-cake' ), 
	array( 'mdi mdi-cake-layered' => 'mdi mdi-cake-layered' ), 
	array( 'mdi mdi-cake-variant' => 'mdi mdi-cake-variant' ), 
	array( 'mdi mdi-calculator' => 'mdi mdi-calculator' ), 
	array( 'mdi mdi-calendar' => 'mdi mdi-calendar' ), 
	array( 'mdi mdi-calendar-blank' => 'mdi mdi-calendar-blank' ), 
	array( 'mdi mdi-calendar-check' => 'mdi mdi-calendar-check' ), 
	array( 'mdi mdi-calendar-clock' => 'mdi mdi-calendar-clock' ), 
	array( 'mdi mdi-calendar-multiple' => 'mdi mdi-calendar-multiple' ), 
	array( 'mdi mdi-calendar-multiple-check' => 'mdi mdi-calendar-multiple-check' ), 
	array( 'mdi mdi-calendar-plus' => 'mdi mdi-calendar-plus' ), 
	array( 'mdi mdi-calendar-question' => 'mdi mdi-calendar-question' ), 
	array( 'mdi mdi-calendar-range' => 'mdi mdi-calendar-range' ), 
	array( 'mdi mdi-calendar-remove' => 'mdi mdi-calendar-remove' ), 
	array( 'mdi mdi-calendar-text' => 'mdi mdi-calendar-text' ), 
	array( 'mdi mdi-calendar-today' => 'mdi mdi-calendar-today' ), 
	array( 'mdi mdi-call-made' => 'mdi mdi-call-made' ), 
	array( 'mdi mdi-call-merge' => 'mdi mdi-call-merge' ), 
	array( 'mdi mdi-call-missed' => 'mdi mdi-call-missed' ), 
	array( 'mdi mdi-call-received' => 'mdi mdi-call-received' ), 
	array( 'mdi mdi-call-split' => 'mdi mdi-call-split' ), 
	array( 'mdi mdi-camcorder' => 'mdi mdi-camcorder' ), 
	array( 'mdi mdi-camcorder-box' => 'mdi mdi-camcorder-box' ), 
	array( 'mdi mdi-camcorder-box-off' => 'mdi mdi-camcorder-box-off' ), 
	array( 'mdi mdi-camcorder-off' => 'mdi mdi-camcorder-off' ), 
	array( 'mdi mdi-camera' => 'mdi mdi-camera' ), 
	array( 'mdi mdi-camera-burst' => 'mdi mdi-camera-burst' ), 
	array( 'mdi mdi-camera-enhance' => 'mdi mdi-camera-enhance' ), 
	array( 'mdi mdi-camera-front' => 'mdi mdi-camera-front' ), 
	array( 'mdi mdi-camera-front-variant' => 'mdi mdi-camera-front-variant' ), 
	array( 'mdi mdi-camera-gopro' => 'mdi mdi-camera-gopro' ), 
	array( 'mdi mdi-camera-iris' => 'mdi mdi-camera-iris' ), 
	array( 'mdi mdi-camera-metering-center' => 'mdi mdi-camera-metering-center' ), 
	array( 'mdi mdi-camera-metering-matrix' => 'mdi mdi-camera-metering-matrix' ), 
	array( 'mdi mdi-camera-metering-partial' => 'mdi mdi-camera-metering-partial' ), 
	array( 'mdi mdi-camera-metering-spot' => 'mdi mdi-camera-metering-spot' ), 
	array( 'mdi mdi-camera-off' => 'mdi mdi-camera-off' ), 
	array( 'mdi mdi-camera-party-mode' => 'mdi mdi-camera-party-mode' ), 
	array( 'mdi mdi-camera-rear' => 'mdi mdi-camera-rear' ), 
	array( 'mdi mdi-camera-rear-variant' => 'mdi mdi-camera-rear-variant' ), 
	array( 'mdi mdi-camera-switch' => 'mdi mdi-camera-switch' ), 
	array( 'mdi mdi-camera-timer' => 'mdi mdi-camera-timer' ), 
	array( 'mdi mdi-cancel' => 'mdi mdi-cancel' ), 
	array( 'mdi mdi-candle' => 'mdi mdi-candle' ), 
	array( 'mdi mdi-candycane' => 'mdi mdi-candycane' ), 
	array( 'mdi mdi-cannabis' => 'mdi mdi-cannabis' ), 
	array( 'mdi mdi-car' => 'mdi mdi-car' ), 
	array( 'mdi mdi-car-battery' => 'mdi mdi-car-battery' ), 
	array( 'mdi mdi-car-connected' => 'mdi mdi-car-connected' ), 
	array( 'mdi mdi-car-convertible' => 'mdi mdi-car-convertible' ), 
	array( 'mdi mdi-car-estate' => 'mdi mdi-car-estate' ), 
	array( 'mdi mdi-car-hatchback' => 'mdi mdi-car-hatchback' ), 
	array( 'mdi mdi-car-pickup' => 'mdi mdi-car-pickup' ), 
	array( 'mdi mdi-car-side' => 'mdi mdi-car-side' ), 
	array( 'mdi mdi-car-sports' => 'mdi mdi-car-sports' ), 
	array( 'mdi mdi-car-wash' => 'mdi mdi-car-wash' ), 
	array( 'mdi mdi-caravan' => 'mdi mdi-caravan' ), 
	array( 'mdi mdi-cards' => 'mdi mdi-cards' ), 
	array( 'mdi mdi-cards-outline' => 'mdi mdi-cards-outline' ), 
	array( 'mdi mdi-cards-playing-outline' => 'mdi mdi-cards-playing-outline' ), 
	array( 'mdi mdi-cards-variant' => 'mdi mdi-cards-variant' ), 
	array( 'mdi mdi-carrot' => 'mdi mdi-carrot' ), 
	array( 'mdi mdi-cart' => 'mdi mdi-cart' ), 
	array( 'mdi mdi-cart-off' => 'mdi mdi-cart-off' ), 
	array( 'mdi mdi-cart-outline' => 'mdi mdi-cart-outline' ), 
	array( 'mdi mdi-cart-plus' => 'mdi mdi-cart-plus' ), 
	array( 'mdi mdi-case-sensitive-alt' => 'mdi mdi-case-sensitive-alt' ), 
	array( 'mdi mdi-cash' => 'mdi mdi-cash' ), 
	array( 'mdi mdi-cash-100' => 'mdi mdi-cash-100' ), 
	array( 'mdi mdi-cash-multiple' => 'mdi mdi-cash-multiple' ), 
	array( 'mdi mdi-cash-usd' => 'mdi mdi-cash-usd' ), 
	array( 'mdi mdi-cast' => 'mdi mdi-cast' ), 
	array( 'mdi mdi-cast-connected' => 'mdi mdi-cast-connected' ), 
	array( 'mdi mdi-cast-off' => 'mdi mdi-cast-off' ), 
	array( 'mdi mdi-castle' => 'mdi mdi-castle' ), 
	array( 'mdi mdi-cat' => 'mdi mdi-cat' ), 
	array( 'mdi mdi-cctv' => 'mdi mdi-cctv' ), 
	array( 'mdi mdi-ceiling-light' => 'mdi mdi-ceiling-light' ), 
	array( 'mdi mdi-cellphone' => 'mdi mdi-cellphone' ), 
	array( 'mdi mdi-cellphone-android' => 'mdi mdi-cellphone-android' ), 
	array( 'mdi mdi-cellphone-basic' => 'mdi mdi-cellphone-basic' ), 
	array( 'mdi mdi-cellphone-dock' => 'mdi mdi-cellphone-dock' ), 
	array( 'mdi mdi-cellphone-iphone' => 'mdi mdi-cellphone-iphone' ), 
	array( 'mdi mdi-cellphone-link' => 'mdi mdi-cellphone-link' ), 
	array( 'mdi mdi-cellphone-link-off' => 'mdi mdi-cellphone-link-off' ), 
	array( 'mdi mdi-cellphone-settings' => 'mdi mdi-cellphone-settings' ), 
	array( 'mdi mdi-cellphone-wireless' => 'mdi mdi-cellphone-wireless' ), 
	array( 'mdi mdi-certificate' => 'mdi mdi-certificate' ), 
	array( 'mdi mdi-chair-school' => 'mdi mdi-chair-school' ), 
	array( 'mdi mdi-chart-arc' => 'mdi mdi-chart-arc' ), 
	array( 'mdi mdi-chart-areaspline' => 'mdi mdi-chart-areaspline' ), 
	array( 'mdi mdi-chart-bar' => 'mdi mdi-chart-bar' ), 
	array( 'mdi mdi-chart-bar-stacked' => 'mdi mdi-chart-bar-stacked' ), 
	array( 'mdi mdi-chart-bubble' => 'mdi mdi-chart-bubble' ), 
	array( 'mdi mdi-chart-donut' => 'mdi mdi-chart-donut' ), 
	array( 'mdi mdi-chart-donut-variant' => 'mdi mdi-chart-donut-variant' ), 
	array( 'mdi mdi-chart-gantt' => 'mdi mdi-chart-gantt' ), 
	array( 'mdi mdi-chart-histogram' => 'mdi mdi-chart-histogram' ), 
	array( 'mdi mdi-chart-line' => 'mdi mdi-chart-line' ), 
	array( 'mdi mdi-chart-line-stacked' => 'mdi mdi-chart-line-stacked' ), 
	array( 'mdi mdi-chart-line-variant' => 'mdi mdi-chart-line-variant' ), 
	array( 'mdi mdi-chart-pie' => 'mdi mdi-chart-pie' ), 
	array( 'mdi mdi-chart-scatterplot-hexbin' => 'mdi mdi-chart-scatterplot-hexbin' ), 
	array( 'mdi mdi-chart-timeline' => 'mdi mdi-chart-timeline' ), 
	array( 'mdi mdi-check' => 'mdi mdi-check' ), 
	array( 'mdi mdi-check-all' => 'mdi mdi-check-all' ), 
	array( 'mdi mdi-check-circle' => 'mdi mdi-check-circle' ), 
	array( 'mdi mdi-check-circle-outline' => 'mdi mdi-check-circle-outline' ), 
	array( 'mdi mdi-check-outline' => 'mdi mdi-check-outline' ), 
	array( 'mdi mdi-checkbox-blank' => 'mdi mdi-checkbox-blank' ), 
	array( 'mdi mdi-checkbox-blank-circle' => 'mdi mdi-checkbox-blank-circle' ), 
	array( 'mdi mdi-checkbox-blank-circle-outline' => 'mdi mdi-checkbox-blank-circle-outline' ), 
	array( 'mdi mdi-checkbox-blank-outline' => 'mdi mdi-checkbox-blank-outline' ), 
	array( 'mdi mdi-checkbox-intermediate' => 'mdi mdi-checkbox-intermediate' ), 
	array( 'mdi mdi-checkbox-marked' => 'mdi mdi-checkbox-marked' ), 
	array( 'mdi mdi-checkbox-marked-circle' => 'mdi mdi-checkbox-marked-circle' ), 
	array( 'mdi mdi-checkbox-marked-circle-outline' => 'mdi mdi-checkbox-marked-circle-outline' ), 
	array( 'mdi mdi-checkbox-marked-outline' => 'mdi mdi-checkbox-marked-outline' ), 
	array( 'mdi mdi-checkbox-multiple-blank' => 'mdi mdi-checkbox-multiple-blank' ), 
	array( 'mdi mdi-checkbox-multiple-blank-circle' => 'mdi mdi-checkbox-multiple-blank-circle' ), 
	array( 'mdi mdi-checkbox-multiple-blank-circle-outline' => 'mdi mdi-checkbox-multiple-blank-circle-outline' ), 
	array( 'mdi mdi-checkbox-multiple-blank-outline' => 'mdi mdi-checkbox-multiple-blank-outline' ), 
	array( 'mdi mdi-checkbox-multiple-marked' => 'mdi mdi-checkbox-multiple-marked' ), 
	array( 'mdi mdi-checkbox-multiple-marked-circle' => 'mdi mdi-checkbox-multiple-marked-circle' ), 
	array( 'mdi mdi-checkbox-multiple-marked-circle-outline' => 'mdi mdi-checkbox-multiple-marked-circle-outline' ), 
	array( 'mdi mdi-checkbox-multiple-marked-outline' => 'mdi mdi-checkbox-multiple-marked-outline' ), 
	array( 'mdi mdi-checkerboard' => 'mdi mdi-checkerboard' ), 
	array( 'mdi mdi-chemical-weapon' => 'mdi mdi-chemical-weapon' ), 
	array( 'mdi mdi-chess-bishop' => 'mdi mdi-chess-bishop' ), 
	array( 'mdi mdi-chess-king' => 'mdi mdi-chess-king' ), 
	array( 'mdi mdi-chess-knight' => 'mdi mdi-chess-knight' ), 
	array( 'mdi mdi-chess-pawn' => 'mdi mdi-chess-pawn' ), 
	array( 'mdi mdi-chess-queen' => 'mdi mdi-chess-queen' ), 
	array( 'mdi mdi-chess-rook' => 'mdi mdi-chess-rook' ), 
	array( 'mdi mdi-chevron-double-down' => 'mdi mdi-chevron-double-down' ), 
	array( 'mdi mdi-chevron-double-left' => 'mdi mdi-chevron-double-left' ), 
	array( 'mdi mdi-chevron-double-right' => 'mdi mdi-chevron-double-right' ), 
	array( 'mdi mdi-chevron-double-up' => 'mdi mdi-chevron-double-up' ), 
	array( 'mdi mdi-chevron-down' => 'mdi mdi-chevron-down' ), 
	array( 'mdi mdi-chevron-left' => 'mdi mdi-chevron-left' ), 
	array( 'mdi mdi-chevron-right' => 'mdi mdi-chevron-right' ), 
	array( 'mdi mdi-chevron-up' => 'mdi mdi-chevron-up' ), 
	array( 'mdi mdi-chili-hot' => 'mdi mdi-chili-hot' ), 
	array( 'mdi mdi-chili-medium' => 'mdi mdi-chili-medium' ), 
	array( 'mdi mdi-chili-mild' => 'mdi mdi-chili-mild' ), 
	array( 'mdi mdi-chip' => 'mdi mdi-chip' ), 
	array( 'mdi mdi-church' => 'mdi mdi-church' ), 
	array( 'mdi mdi-circle' => 'mdi mdi-circle' ), 
	array( 'mdi mdi-circle-outline' => 'mdi mdi-circle-outline' ), 
	array( 'mdi mdi-cisco-webex' => 'mdi mdi-cisco-webex' ), 
	array( 'mdi mdi-city' => 'mdi mdi-city' ), 
	array( 'mdi mdi-clipboard' => 'mdi mdi-clipboard' ), 
	array( 'mdi mdi-clipboard-account' => 'mdi mdi-clipboard-account' ), 
	array( 'mdi mdi-clipboard-alert' => 'mdi mdi-clipboard-alert' ), 
	array( 'mdi mdi-clipboard-arrow-down' => 'mdi mdi-clipboard-arrow-down' ), 
	array( 'mdi mdi-clipboard-arrow-left' => 'mdi mdi-clipboard-arrow-left' ), 
	array( 'mdi mdi-clipboard-check' => 'mdi mdi-clipboard-check' ), 
	array( 'mdi mdi-clipboard-flow' => 'mdi mdi-clipboard-flow' ), 
	array( 'mdi mdi-clipboard-outline' => 'mdi mdi-clipboard-outline' ), 
	array( 'mdi mdi-clipboard-plus' => 'mdi mdi-clipboard-plus' ), 
	array( 'mdi mdi-clipboard-pulse' => 'mdi mdi-clipboard-pulse' ), 
	array( 'mdi mdi-clipboard-pulse-outline' => 'mdi mdi-clipboard-pulse-outline' ), 
	array( 'mdi mdi-clipboard-text' => 'mdi mdi-clipboard-text' ), 
	array( 'mdi mdi-clippy' => 'mdi mdi-clippy' ), 
	array( 'mdi mdi-clock' => 'mdi mdi-clock' ), 
	array( 'mdi mdi-clock-alert' => 'mdi mdi-clock-alert' ), 
	array( 'mdi mdi-clock-end' => 'mdi mdi-clock-end' ), 
	array( 'mdi mdi-clock-fast' => 'mdi mdi-clock-fast' ), 
	array( 'mdi mdi-clock-in' => 'mdi mdi-clock-in' ), 
	array( 'mdi mdi-clock-out' => 'mdi mdi-clock-out' ), 
	array( 'mdi mdi-clock-start' => 'mdi mdi-clock-start' ), 
	array( 'mdi mdi-close' => 'mdi mdi-close' ), 
	array( 'mdi mdi-close-box' => 'mdi mdi-close-box' ), 
	array( 'mdi mdi-close-box-outline' => 'mdi mdi-close-box-outline' ), 
	array( 'mdi mdi-close-circle' => 'mdi mdi-close-circle' ), 
	array( 'mdi mdi-close-circle-outline' => 'mdi mdi-close-circle-outline' ), 
	array( 'mdi mdi-close-network' => 'mdi mdi-close-network' ), 
	array( 'mdi mdi-close-octagon' => 'mdi mdi-close-octagon' ), 
	array( 'mdi mdi-close-octagon-outline' => 'mdi mdi-close-octagon-outline' ), 
	array( 'mdi mdi-close-outline' => 'mdi mdi-close-outline' ), 
	array( 'mdi mdi-closed-caption' => 'mdi mdi-closed-caption' ), 
	array( 'mdi mdi-cloud' => 'mdi mdi-cloud' ), 
	array( 'mdi mdi-cloud-braces' => 'mdi mdi-cloud-braces' ), 
	array( 'mdi mdi-cloud-check' => 'mdi mdi-cloud-check' ), 
	array( 'mdi mdi-cloud-circle' => 'mdi mdi-cloud-circle' ), 
	array( 'mdi mdi-cloud-download' => 'mdi mdi-cloud-download' ), 
	array( 'mdi mdi-cloud-off-outline' => 'mdi mdi-cloud-off-outline' ), 
	array( 'mdi mdi-cloud-outline' => 'mdi mdi-cloud-outline' ), 
	array( 'mdi mdi-cloud-print' => 'mdi mdi-cloud-print' ), 
	array( 'mdi mdi-cloud-print-outline' => 'mdi mdi-cloud-print-outline' ), 
	array( 'mdi mdi-cloud-sync' => 'mdi mdi-cloud-sync' ), 
	array( 'mdi mdi-cloud-tags' => 'mdi mdi-cloud-tags' ), 
	array( 'mdi mdi-cloud-upload' => 'mdi mdi-cloud-upload' ), 
	array( 'mdi mdi-clover' => 'mdi mdi-clover' ), 
	array( 'mdi mdi-code-array' => 'mdi mdi-code-array' ), 
	array( 'mdi mdi-code-braces' => 'mdi mdi-code-braces' ), 
	array( 'mdi mdi-code-brackets' => 'mdi mdi-code-brackets' ), 
	array( 'mdi mdi-code-equal' => 'mdi mdi-code-equal' ), 
	array( 'mdi mdi-code-greater-than' => 'mdi mdi-code-greater-than' ), 
	array( 'mdi mdi-code-greater-than-or-equal' => 'mdi mdi-code-greater-than-or-equal' ), 
	array( 'mdi mdi-code-less-than' => 'mdi mdi-code-less-than' ), 
	array( 'mdi mdi-code-less-than-or-equal' => 'mdi mdi-code-less-than-or-equal' ), 
	array( 'mdi mdi-code-not-equal' => 'mdi mdi-code-not-equal' ), 
	array( 'mdi mdi-code-not-equal-variant' => 'mdi mdi-code-not-equal-variant' ), 
	array( 'mdi mdi-code-parentheses' => 'mdi mdi-code-parentheses' ), 
	array( 'mdi mdi-code-string' => 'mdi mdi-code-string' ), 
	array( 'mdi mdi-code-tags' => 'mdi mdi-code-tags' ), 
	array( 'mdi mdi-code-tags-check' => 'mdi mdi-code-tags-check' ), 
	array( 'mdi mdi-codepen' => 'mdi mdi-codepen' ), 
	array( 'mdi mdi-coffee' => 'mdi mdi-coffee' ), 
	array( 'mdi mdi-coffee-outline' => 'mdi mdi-coffee-outline' ), 
	array( 'mdi mdi-coffee-to-go' => 'mdi mdi-coffee-to-go' ), 
	array( 'mdi mdi-coin' => 'mdi mdi-coin' ), 
	array( 'mdi mdi-coins' => 'mdi mdi-coins' ), 
	array( 'mdi mdi-collage' => 'mdi mdi-collage' ), 
	array( 'mdi mdi-color-helper' => 'mdi mdi-color-helper' ), 
	array( 'mdi mdi-comment' => 'mdi mdi-comment' ), 
	array( 'mdi mdi-comment-account' => 'mdi mdi-comment-account' ), 
	array( 'mdi mdi-comment-account-outline' => 'mdi mdi-comment-account-outline' ), 
	array( 'mdi mdi-comment-alert' => 'mdi mdi-comment-alert' ), 
	array( 'mdi mdi-comment-alert-outline' => 'mdi mdi-comment-alert-outline' ), 
	array( 'mdi mdi-comment-check' => 'mdi mdi-comment-check' ), 
	array( 'mdi mdi-comment-check-outline' => 'mdi mdi-comment-check-outline' ), 
	array( 'mdi mdi-comment-multiple' => 'mdi mdi-comment-multiple' ), 
	array( 'mdi mdi-comment-multiple-outline' => 'mdi mdi-comment-multiple-outline' ), 
	array( 'mdi mdi-comment-outline' => 'mdi mdi-comment-outline' ), 
	array( 'mdi mdi-comment-plus-outline' => 'mdi mdi-comment-plus-outline' ), 
	array( 'mdi mdi-comment-processing' => 'mdi mdi-comment-processing' ), 
	array( 'mdi mdi-comment-processing-outline' => 'mdi mdi-comment-processing-outline' ), 
	array( 'mdi mdi-comment-question' => 'mdi mdi-comment-question' ), 
	array( 'mdi mdi-comment-question-outline' => 'mdi mdi-comment-question-outline' ), 
	array( 'mdi mdi-comment-remove' => 'mdi mdi-comment-remove' ), 
	array( 'mdi mdi-comment-remove-outline' => 'mdi mdi-comment-remove-outline' ), 
	array( 'mdi mdi-comment-text' => 'mdi mdi-comment-text' ), 
	array( 'mdi mdi-comment-text-multiple' => 'mdi mdi-comment-text-multiple' ), 
	array( 'mdi mdi-comment-text-multiple-outline' => 'mdi mdi-comment-text-multiple-outline' ), 
	array( 'mdi mdi-comment-text-outline' => 'mdi mdi-comment-text-outline' ), 
	array( 'mdi mdi-compare' => 'mdi mdi-compare' ), 
	array( 'mdi mdi-compass' => 'mdi mdi-compass' ), 
	array( 'mdi mdi-compass-outline' => 'mdi mdi-compass-outline' ), 
	array( 'mdi mdi-console' => 'mdi mdi-console' ), 
	array( 'mdi mdi-console-line' => 'mdi mdi-console-line' ), 
	array( 'mdi mdi-contact-mail' => 'mdi mdi-contact-mail' ), 
	array( 'mdi mdi-contacts' => 'mdi mdi-contacts' ), 
	array( 'mdi mdi--copy' => 'mdi mdi--copy' ), 
	array( 'mdi mdi--cut' => 'mdi mdi--cut' ), 
	array( 'mdi mdi--duplicate' => 'mdi mdi--duplicate' ), 
	array( 'mdi mdi--paste' => 'mdi mdi--paste' ), 
	array( 'mdi mdi--save' => 'mdi mdi--save' ), 
	array( 'mdi mdi--save-all' => 'mdi mdi--save-all' ), 
	array( 'mdi mdi--save-outline' => 'mdi mdi--save-outline' ), 
	array( 'mdi mdi--save-settings' => 'mdi mdi--save-settings' ), 
	array( 'mdi mdi-contrast' => 'mdi mdi-contrast' ), 
	array( 'mdi mdi-contrast-box' => 'mdi mdi-contrast-box' ), 
	array( 'mdi mdi-contrast-circle' => 'mdi mdi-contrast-circle' ), 
	array( 'mdi mdi-cookie' => 'mdi mdi-cookie' ), 
	array( 'mdi mdi-copyright' => 'mdi mdi-copyright' ), 
	array( 'mdi mdi-corn' => 'mdi mdi-corn' ), 
	array( 'mdi mdi-counter' => 'mdi mdi-counter' ), 
	array( 'mdi mdi-cow' => 'mdi mdi-cow' ), 
	array( 'mdi mdi-crane' => 'mdi mdi-crane' ), 
	array( 'mdi mdi-creation' => 'mdi mdi-creation' ), 
	array( 'mdi mdi-credit-card' => 'mdi mdi-credit-card' ), 
	array( 'mdi mdi-credit-card-multiple' => 'mdi mdi-credit-card-multiple' ), 
	array( 'mdi mdi-credit-card-off' => 'mdi mdi-credit-card-off' ), 
	array( 'mdi mdi-credit-card-plus' => 'mdi mdi-credit-card-plus' ), 
	array( 'mdi mdi-credit-card-scan' => 'mdi mdi-credit-card-scan' ), 
	array( 'mdi mdi-crop' => 'mdi mdi-crop' ), 
	array( 'mdi mdi-crop-free' => 'mdi mdi-crop-free' ), 
	array( 'mdi mdi-crop-landscape' => 'mdi mdi-crop-landscape' ), 
	array( 'mdi mdi-crop-portrait' => 'mdi mdi-crop-portrait' ), 
	array( 'mdi mdi-crop-rotate' => 'mdi mdi-crop-rotate' ), 
	array( 'mdi mdi-crop-square' => 'mdi mdi-crop-square' ), 
	array( 'mdi mdi-crosshairs' => 'mdi mdi-crosshairs' ), 
	array( 'mdi mdi-crosshairs-gps' => 'mdi mdi-crosshairs-gps' ), 
	array( 'mdi mdi-crown' => 'mdi mdi-crown' ), 
	array( 'mdi mdi-cube' => 'mdi mdi-cube' ), 
	array( 'mdi mdi-cube-outline' => 'mdi mdi-cube-outline' ), 
	array( 'mdi mdi-cube-send' => 'mdi mdi-cube-send' ), 
	array( 'mdi mdi-cube-unfolded' => 'mdi mdi-cube-unfolded' ), 
	array( 'mdi mdi-cup' => 'mdi mdi-cup' ), 
	array( 'mdi mdi-cup-off' => 'mdi mdi-cup-off' ), 
	array( 'mdi mdi-cup-water' => 'mdi mdi-cup-water' ), 
	array( 'mdi mdi-curling' => 'mdi mdi-curling' ), 
	array( 'mdi mdi-currency-bdt' => 'mdi mdi-currency-bdt' ), 
	array( 'mdi mdi-currency-btc' => 'mdi mdi-currency-btc' ), 
	array( 'mdi mdi-currency-chf' => 'mdi mdi-currency-chf' ), 
	array( 'mdi mdi-currency-cny' => 'mdi mdi-currency-cny' ), 
	array( 'mdi mdi-currency-eth' => 'mdi mdi-currency-eth' ), 
	array( 'mdi mdi-currency-eur' => 'mdi mdi-currency-eur' ), 
	array( 'mdi mdi-currency-gbp' => 'mdi mdi-currency-gbp' ), 
	array( 'mdi mdi-currency-inr' => 'mdi mdi-currency-inr' ), 
	array( 'mdi mdi-currency-jpy' => 'mdi mdi-currency-jpy' ), 
	array( 'mdi mdi-currency-krw' => 'mdi mdi-currency-krw' ), 
	array( 'mdi mdi-currency-kzt' => 'mdi mdi-currency-kzt' ), 
	array( 'mdi mdi-currency-ngn' => 'mdi mdi-currency-ngn' ), 
	array( 'mdi mdi-currency-rub' => 'mdi mdi-currency-rub' ), 
	array( 'mdi mdi-currency-sign' => 'mdi mdi-currency-sign' ), 
	array( 'mdi mdi-currency-try' => 'mdi mdi-currency-try' ), 
	array( 'mdi mdi-currency-twd' => 'mdi mdi-currency-twd' ), 
	array( 'mdi mdi-currency-usd' => 'mdi mdi-currency-usd' ), 
	array( 'mdi mdi-currency-usd-off' => 'mdi mdi-currency-usd-off' ), 
	array( 'mdi mdi-cursor-default' => 'mdi mdi-cursor-default' ), 
	array( 'mdi mdi-cursor-default-outline' => 'mdi mdi-cursor-default-outline' ), 
	array( 'mdi mdi-cursor-move' => 'mdi mdi-cursor-move' ), 
	array( 'mdi mdi-cursor-pointer' => 'mdi mdi-cursor-pointer' ), 
	array( 'mdi mdi-cursor-text' => 'mdi mdi-cursor-text' ), 
	array( 'mdi mdi-database' => 'mdi mdi-database' ), 
	array( 'mdi mdi-database-minus' => 'mdi mdi-database-minus' ), 
	array( 'mdi mdi-database-plus' => 'mdi mdi-database-plus' ), 
	array( 'mdi mdi-database-search' => 'mdi mdi-database-search' ), 
	array( 'mdi mdi-debug-step-into' => 'mdi mdi-debug-step-into' ), 
	array( 'mdi mdi-debug-step-out' => 'mdi mdi-debug-step-out' ), 
	array( 'mdi mdi-debug-step-over' => 'mdi mdi-debug-step-over' ), 
	array( 'mdi mdi-decagram' => 'mdi mdi-decagram' ), 
	array( 'mdi mdi-decagram-outline' => 'mdi mdi-decagram-outline' ), 
	array( 'mdi mdi-decimal-decrease' => 'mdi mdi-decimal-decrease' ), 
	array( 'mdi mdi-decimal-increase' => 'mdi mdi-decimal-increase' ), 
	array( 'mdi mdi-delete' => 'mdi mdi-delete' ), 
	array( 'mdi mdi-delete-circle' => 'mdi mdi-delete-circle' ), 
	array( 'mdi mdi-delete-empty' => 'mdi mdi-delete-empty' ), 
	array( 'mdi mdi-delete-forever' => 'mdi mdi-delete-forever' ), 
	array( 'mdi mdi-delete-restore' => 'mdi mdi-delete-restore' ), 
	array( 'mdi mdi-delete-sweep' => 'mdi mdi-delete-sweep' ), 
	array( 'mdi mdi-delete-variant' => 'mdi mdi-delete-variant' ), 
	array( 'mdi mdi-delta' => 'mdi mdi-delta' ), 
	array( 'mdi mdi-deskphone' => 'mdi mdi-deskphone' ), 
	array( 'mdi mdi-desktop-classic' => 'mdi mdi-desktop-classic' ), 
	array( 'mdi mdi-desktop-mac' => 'mdi mdi-desktop-mac' ), 
	array( 'mdi mdi-desktop-tower' => 'mdi mdi-desktop-tower' ), 
	array( 'mdi mdi-details' => 'mdi mdi-details' ), 
	array( 'mdi mdi-developer-board' => 'mdi mdi-developer-board' ), 
	array( 'mdi mdi-deviantart' => 'mdi mdi-deviantart' ), 
	array( 'mdi mdi-dialpad' => 'mdi mdi-dialpad' ), 
	array( 'mdi mdi-diamond' => 'mdi mdi-diamond' ), 
	array( 'mdi mdi-dice-1' => 'mdi mdi-dice-1' ), 
	array( 'mdi mdi-dice-2' => 'mdi mdi-dice-2' ), 
	array( 'mdi mdi-dice-3' => 'mdi mdi-dice-3' ), 
	array( 'mdi mdi-dice-4' => 'mdi mdi-dice-4' ), 
	array( 'mdi mdi-dice-5' => 'mdi mdi-dice-5' ), 
	array( 'mdi mdi-dice-6' => 'mdi mdi-dice-6' ), 
	array( 'mdi mdi-dice-d10' => 'mdi mdi-dice-d10' ), 
	array( 'mdi mdi-dice-d12' => 'mdi mdi-dice-d12' ), 
	array( 'mdi mdi-dice-d20' => 'mdi mdi-dice-d20' ), 
	array( 'mdi mdi-dice-d4' => 'mdi mdi-dice-d4' ), 
	array( 'mdi mdi-dice-d6' => 'mdi mdi-dice-d6' ), 
	array( 'mdi mdi-dice-d8' => 'mdi mdi-dice-d8' ), 
	array( 'mdi mdi-dice-multiple' => 'mdi mdi-dice-multiple' ), 
	array( 'mdi mdi-dictionary' => 'mdi mdi-dictionary' ), 
	array( 'mdi mdi-dip-switch' => 'mdi mdi-dip-switch' ), 
	array( 'mdi mdi-directions' => 'mdi mdi-directions' ), 
	array( 'mdi mdi-directions-fork' => 'mdi mdi-directions-fork' ), 
	array( 'mdi mdi-discord' => 'mdi mdi-discord' ), 
	array( 'mdi mdi-disk' => 'mdi mdi-disk' ), 
	array( 'mdi mdi-disk-alert' => 'mdi mdi-disk-alert' ), 
	array( 'mdi mdi-disqus' => 'mdi mdi-disqus' ), 
	array( 'mdi mdi-disqus-outline' => 'mdi mdi-disqus-outline' ), 
	array( 'mdi mdi-division' => 'mdi mdi-division' ), 
	array( 'mdi mdi-division-box' => 'mdi mdi-division-box' ), 
	array( 'mdi mdi-dna' => 'mdi mdi-dna' ), 
	array( 'mdi mdi-dns' => 'mdi mdi-dns' ), 
	array( 'mdi mdi-do-not-disturb' => 'mdi mdi-do-not-disturb' ), 
	array( 'mdi mdi-do-not-disturb-off' => 'mdi mdi-do-not-disturb-off' ), 
	array( 'mdi mdi-docker' => 'mdi mdi-docker' ), 
	array( 'mdi mdi-dolby' => 'mdi mdi-dolby' ), 
	array( 'mdi mdi-domain' => 'mdi mdi-domain' ), 
	array( 'mdi mdi-donkey' => 'mdi mdi-donkey' ), 
	array( 'mdi mdi-door' => 'mdi mdi-door' ), 
	array( 'mdi mdi-door-closed' => 'mdi mdi-door-closed' ), 
	array( 'mdi mdi-door-open' => 'mdi mdi-door-open' ), 
	array( 'mdi mdi-doorbell-video' => 'mdi mdi-doorbell-video' ), 
	array( 'mdi mdi-dots-horizontal' => 'mdi mdi-dots-horizontal' ), 
	array( 'mdi mdi-dots-horizontal-circle' => 'mdi mdi-dots-horizontal-circle' ), 
	array( 'mdi mdi-dots-vertical' => 'mdi mdi-dots-vertical' ), 
	array( 'mdi mdi-dots-vertical-circle' => 'mdi mdi-dots-vertical-circle' ), 
	array( 'mdi mdi-douban' => 'mdi mdi-douban' ), 
	array( 'mdi mdi-download' => 'mdi mdi-download' ), 
	array( 'mdi mdi-download-network' => 'mdi mdi-download-network' ), 
	array( 'mdi mdi-drag' => 'mdi mdi-drag' ), 
	array( 'mdi mdi-drag-horizontal' => 'mdi mdi-drag-horizontal' ), 
	array( 'mdi mdi-drag-vertical' => 'mdi mdi-drag-vertical' ), 
	array( 'mdi mdi-drawing' => 'mdi mdi-drawing' ), 
	array( 'mdi mdi-drawing-box' => 'mdi mdi-drawing-box' ), 
	array( 'mdi mdi-dribbble' => 'mdi mdi-dribbble' ), 
	array( 'mdi mdi-dribbble-box' => 'mdi mdi-dribbble-box' ), 
	array( 'mdi mdi-drone' => 'mdi mdi-drone' ), 
	array( 'mdi mdi-dropbox' => 'mdi mdi-dropbox' ), 
	array( 'mdi mdi-drupal' => 'mdi mdi-drupal' ), 
	array( 'mdi mdi-duck' => 'mdi mdi-duck' ), 
	array( 'mdi mdi-dumbbell' => 'mdi mdi-dumbbell' ), 
	array( 'mdi mdi-ear-hearing' => 'mdi mdi-ear-hearing' ), 
	array( 'mdi mdi-earth' => 'mdi mdi-earth' ), 
	array( 'mdi mdi-earth-box' => 'mdi mdi-earth-box' ), 
	array( 'mdi mdi-earth-box-off' => 'mdi mdi-earth-box-off' ), 
	array( 'mdi mdi-earth-off' => 'mdi mdi-earth-off' ), 
	array( 'mdi mdi-edge' => 'mdi mdi-edge' ), 
	array( 'mdi mdi-eject' => 'mdi mdi-eject' ), 
	array( 'mdi mdi-elephant' => 'mdi mdi-elephant' ), 
	array( 'mdi mdi-elevation-decline' => 'mdi mdi-elevation-decline' ), 
	array( 'mdi mdi-elevation-rise' => 'mdi mdi-elevation-rise' ), 
	array( 'mdi mdi-elevator' => 'mdi mdi-elevator' ), 
	array( 'mdi mdi-email' => 'mdi mdi-email' ), 
	array( 'mdi mdi-email-alert' => 'mdi mdi-email-alert' ), 
	array( 'mdi mdi-email-open' => 'mdi mdi-email-open' ), 
	array( 'mdi mdi-email-open-outline' => 'mdi mdi-email-open-outline' ), 
	array( 'mdi mdi-email-outline' => 'mdi mdi-email-outline' ), 
	array( 'mdi mdi-email-secure' => 'mdi mdi-email-secure' ), 
	array( 'mdi mdi-email-variant' => 'mdi mdi-email-variant' ), 
	array( 'mdi mdi-emby' => 'mdi mdi-emby' ), 
	array( 'mdi mdi-emoticon' => 'mdi mdi-emoticon' ), 
	array( 'mdi mdi-emoticon-cool' => 'mdi mdi-emoticon-cool' ), 
	array( 'mdi mdi-emoticon-dead' => 'mdi mdi-emoticon-dead' ), 
	array( 'mdi mdi-emoticon-devil' => 'mdi mdi-emoticon-devil' ), 
	array( 'mdi mdi-emoticon-excited' => 'mdi mdi-emoticon-excited' ), 
	array( 'mdi mdi-emoticon-happy' => 'mdi mdi-emoticon-happy' ), 
	array( 'mdi mdi-emoticon-neutral' => 'mdi mdi-emoticon-neutral' ), 
	array( 'mdi mdi-emoticon-poop' => 'mdi mdi-emoticon-poop' ), 
	array( 'mdi mdi-emoticon-sad' => 'mdi mdi-emoticon-sad' ), 
	array( 'mdi mdi-emoticon-tongue' => 'mdi mdi-emoticon-tongue' ), 
	array( 'mdi mdi-engine' => 'mdi mdi-engine' ), 
	array( 'mdi mdi-engine-outline' => 'mdi mdi-engine-outline' ), 
	array( 'mdi mdi-equal' => 'mdi mdi-equal' ), 
	array( 'mdi mdi-equal-box' => 'mdi mdi-equal-box' ), 
	array( 'mdi mdi-eraser' => 'mdi mdi-eraser' ), 
	array( 'mdi mdi-eraser-variant' => 'mdi mdi-eraser-variant' ), 
	array( 'mdi mdi-escalator' => 'mdi mdi-escalator' ), 
	array( 'mdi mdi-ethereum' => 'mdi mdi-ethereum' ), 
	array( 'mdi mdi-ethernet' => 'mdi mdi-ethernet' ), 
	array( 'mdi mdi-ethernet-cable' => 'mdi mdi-ethernet-cable' ), 
	array( 'mdi mdi-ethernet-cable-off' => 'mdi mdi-ethernet-cable-off' ), 
	array( 'mdi mdi-etsy' => 'mdi mdi-etsy' ), 
	array( 'mdi mdi-ev-station' => 'mdi mdi-ev-station' ), 
	array( 'mdi mdi-eventbrite' => 'mdi mdi-eventbrite' ), 
	array( 'mdi mdi-evernote' => 'mdi mdi-evernote' ), 
	array( 'mdi mdi-exclamation' => 'mdi mdi-exclamation' ), 
	array( 'mdi mdi-exit-to-app' => 'mdi mdi-exit-to-app' ), 
	array( 'mdi mdi-export' => 'mdi mdi-export' ), 
	array( 'mdi mdi-eye' => 'mdi mdi-eye' ), 
	array( 'mdi mdi-eye-off' => 'mdi mdi-eye-off' ), 
	array( 'mdi mdi-eye-off-outline' => 'mdi mdi-eye-off-outline' ), 
	array( 'mdi mdi-eye-outline' => 'mdi mdi-eye-outline' ), 
	array( 'mdi mdi-eye-plus' => 'mdi mdi-eye-plus' ), 
	array( 'mdi mdi-eye-plus-outline' => 'mdi mdi-eye-plus-outline' ), 
	array( 'mdi mdi-eye-settings' => 'mdi mdi-eye-settings' ), 
	array( 'mdi mdi-eye-settings-outline' => 'mdi mdi-eye-settings-outline' ), 
	array( 'mdi mdi-eyedropper' => 'mdi mdi-eyedropper' ), 
	array( 'mdi mdi-eyedropper-variant' => 'mdi mdi-eyedropper-variant' ), 
	array( 'mdi mdi-face' => 'mdi mdi-face' ), 
	array( 'mdi mdi-face-profile' => 'mdi mdi-face-profile' ), 
	array( 'mdi mdi-facebook' => 'mdi mdi-facebook' ), 
	array( 'mdi mdi-facebook-box' => 'mdi mdi-facebook-box' ), 
	array( 'mdi mdi-facebook-messenger' => 'mdi mdi-facebook-messenger' ), 
	array( 'mdi mdi-factory' => 'mdi mdi-factory' ), 
	array( 'mdi mdi-fan' => 'mdi mdi-fan' ), 
	array( 'mdi mdi-fan-off' => 'mdi mdi-fan-off' ), 
	array( 'mdi mdi-fast-forward' => 'mdi mdi-fast-forward' ), 
	array( 'mdi mdi-fast-forward-outline' => 'mdi mdi-fast-forward-outline' ), 
	array( 'mdi mdi-fax' => 'mdi mdi-fax' ), 
	array( 'mdi mdi-feather' => 'mdi mdi-feather' ), 
	array( 'mdi mdi-ferry' => 'mdi mdi-ferry' ), 
	array( 'mdi mdi-file' => 'mdi mdi-file' ), 
	array( 'mdi mdi-file-account' => 'mdi mdi-file-account' ), 
	array( 'mdi mdi-file-chart' => 'mdi mdi-file-chart' ), 
	array( 'mdi mdi-file-check' => 'mdi mdi-file-check' ), 
	array( 'mdi mdi-file-cloud' => 'mdi mdi-file-cloud' ), 
	array( 'mdi mdi-file-delimited' => 'mdi mdi-file-delimited' ), 
	array( 'mdi mdi-file-document' => 'mdi mdi-file-document' ), 
	array( 'mdi mdi-file-document-box' => 'mdi mdi-file-document-box' ), 
	array( 'mdi mdi-file-excel' => 'mdi mdi-file-excel' ), 
	array( 'mdi mdi-file-excel-box' => 'mdi mdi-file-excel-box' ), 
	array( 'mdi mdi-file-export' => 'mdi mdi-file-export' ), 
	array( 'mdi mdi-file-find' => 'mdi mdi-file-find' ), 
	array( 'mdi mdi-file-hidden' => 'mdi mdi-file-hidden' ), 
	array( 'mdi mdi-file-image' => 'mdi mdi-file-image' ), 
	array( 'mdi mdi-file-import' => 'mdi mdi-file-import' ), 
	array( 'mdi mdi-file-lock' => 'mdi mdi-file-lock' ), 
	array( 'mdi mdi-file-multiple' => 'mdi mdi-file-multiple' ), 
	array( 'mdi mdi-file-music' => 'mdi mdi-file-music' ), 
	array( 'mdi mdi-file-outline' => 'mdi mdi-file-outline' ), 
	array( 'mdi mdi-file-pdf' => 'mdi mdi-file-pdf' ), 
	array( 'mdi mdi-file-pdf-box' => 'mdi mdi-file-pdf-box' ), 
	array( 'mdi mdi-file-percent' => 'mdi mdi-file-percent' ), 
	array( 'mdi mdi-file-plus' => 'mdi mdi-file-plus' ), 
	array( 'mdi mdi-file-powerpoint' => 'mdi mdi-file-powerpoint' ), 
	array( 'mdi mdi-file-powerpoint-box' => 'mdi mdi-file-powerpoint-box' ), 
	array( 'mdi mdi-file-presentation-box' => 'mdi mdi-file-presentation-box' ), 
	array( 'mdi mdi-file-question' => 'mdi mdi-file-question' ), 
	array( 'mdi mdi-file-restore' => 'mdi mdi-file-restore' ), 
	array( 'mdi mdi-file-send' => 'mdi mdi-file-send' ), 
	array( 'mdi mdi-file-tree' => 'mdi mdi-file-tree' ), 
	array( 'mdi mdi-file-video' => 'mdi mdi-file-video' ), 
	array( 'mdi mdi-file-word' => 'mdi mdi-file-word' ), 
	array( 'mdi mdi-file-word-box' => 'mdi mdi-file-word-box' ), 
	array( 'mdi mdi-file-xml' => 'mdi mdi-file-xml' ), 
	array( 'mdi mdi-film' => 'mdi mdi-film' ), 
	array( 'mdi mdi-filmstrip' => 'mdi mdi-filmstrip' ), 
	array( 'mdi mdi-filmstrip-off' => 'mdi mdi-filmstrip-off' ), 
	array( 'mdi mdi-filter' => 'mdi mdi-filter' ), 
	array( 'mdi mdi-filter-outline' => 'mdi mdi-filter-outline' ), 
	array( 'mdi mdi-filter-remove' => 'mdi mdi-filter-remove' ), 
	array( 'mdi mdi-filter-remove-outline' => 'mdi mdi-filter-remove-outline' ), 
	array( 'mdi mdi-filter-variant' => 'mdi mdi-filter-variant' ), 
	array( 'mdi mdi-finance' => 'mdi mdi-finance' ), 
	array( 'mdi mdi-find-replace' => 'mdi mdi-find-replace' ), 
	array( 'mdi mdi-fingerprint' => 'mdi mdi-fingerprint' ), 
	array( 'mdi mdi-fire' => 'mdi mdi-fire' ), 
	array( 'mdi mdi-firefox' => 'mdi mdi-firefox' ), 
	array( 'mdi mdi-fish' => 'mdi mdi-fish' ), 
	array( 'mdi mdi-flag' => 'mdi mdi-flag' ), 
	array( 'mdi mdi-flag-checkered' => 'mdi mdi-flag-checkered' ), 
	array( 'mdi mdi-flag-outline' => 'mdi mdi-flag-outline' ), 
	array( 'mdi mdi-flag-triangle' => 'mdi mdi-flag-triangle' ), 
	array( 'mdi mdi-flag-variant' => 'mdi mdi-flag-variant' ), 
	array( 'mdi mdi-flag-variant-outline' => 'mdi mdi-flag-variant-outline' ), 
	array( 'mdi mdi-flash' => 'mdi mdi-flash' ), 
	array( 'mdi mdi-flash-auto' => 'mdi mdi-flash-auto' ), 
	array( 'mdi mdi-flash-circle' => 'mdi mdi-flash-circle' ), 
	array( 'mdi mdi-flash-off' => 'mdi mdi-flash-off' ), 
	array( 'mdi mdi-flash-outline' => 'mdi mdi-flash-outline' ), 
	array( 'mdi mdi-flash-red-eye' => 'mdi mdi-flash-red-eye' ), 
	array( 'mdi mdi-flashlight' => 'mdi mdi-flashlight' ), 
	array( 'mdi mdi-flashlight-off' => 'mdi mdi-flashlight-off' ), 
	array( 'mdi mdi-flask' => 'mdi mdi-flask' ), 
	array( 'mdi mdi-flask-empty' => 'mdi mdi-flask-empty' ), 
	array( 'mdi mdi-flask-empty-outline' => 'mdi mdi-flask-empty-outline' ), 
	array( 'mdi mdi-flask-outline' => 'mdi mdi-flask-outline' ), 
	array( 'mdi mdi-flattr' => 'mdi mdi-flattr' ), 
	array( 'mdi mdi-flip-to-back' => 'mdi mdi-flip-to-back' ), 
	array( 'mdi mdi-flip-to-front' => 'mdi mdi-flip-to-front' ), 
	array( 'mdi mdi-floor-plan' => 'mdi mdi-floor-plan' ), 
	array( 'mdi mdi-floppy' => 'mdi mdi-floppy' ), 
	array( 'mdi mdi-flower' => 'mdi mdi-flower' ), 
	array( 'mdi mdi-folder' => 'mdi mdi-folder' ), 
	array( 'mdi mdi-folder-account' => 'mdi mdi-folder-account' ), 
	array( 'mdi mdi-folder-download' => 'mdi mdi-folder-download' ), 
	array( 'mdi mdi-folder-google-drive' => 'mdi mdi-folder-google-drive' ), 
	array( 'mdi mdi-folder-image' => 'mdi mdi-folder-image' ), 
	array( 'mdi mdi-folder-lock' => 'mdi mdi-folder-lock' ), 
	array( 'mdi mdi-folder-lock-open' => 'mdi mdi-folder-lock-open' ), 
	array( 'mdi mdi-folder-move' => 'mdi mdi-folder-move' ), 
	array( 'mdi mdi-folder-multiple' => 'mdi mdi-folder-multiple' ), 
	array( 'mdi mdi-folder-multiple-image' => 'mdi mdi-folder-multiple-image' ), 
	array( 'mdi mdi-folder-multiple-outline' => 'mdi mdi-folder-multiple-outline' ), 
	array( 'mdi mdi-folder-network' => 'mdi mdi-folder-network' ), 
	array( 'mdi mdi-folder-open' => 'mdi mdi-folder-open' ), 
	array( 'mdi mdi-folder-outline' => 'mdi mdi-folder-outline' ), 
	array( 'mdi mdi-folder-plus' => 'mdi mdi-folder-plus' ), 
	array( 'mdi mdi-folder-remove' => 'mdi mdi-folder-remove' ), 
	array( 'mdi mdi-folder-star' => 'mdi mdi-folder-star' ), 
	array( 'mdi mdi-folder-upload' => 'mdi mdi-folder-upload' ), 
	array( 'mdi mdi-font-awesome' => 'mdi mdi-font-awesome' ), 
	array( 'mdi mdi-food' => 'mdi mdi-food' ), 
	array( 'mdi mdi-food-apple' => 'mdi mdi-food-apple' ), 
	array( 'mdi mdi-food-croissant' => 'mdi mdi-food-croissant' ), 
	array( 'mdi mdi-food-fork-drink' => 'mdi mdi-food-fork-drink' ), 
	array( 'mdi mdi-food-off' => 'mdi mdi-food-off' ), 
	array( 'mdi mdi-food-variant' => 'mdi mdi-food-variant' ), 
	array( 'mdi mdi-football' => 'mdi mdi-football' ), 
	array( 'mdi mdi-football-australian' => 'mdi mdi-football-australian' ), 
	array( 'mdi mdi-football-helmet' => 'mdi mdi-football-helmet' ), 
	array( 'mdi mdi-forklift' => 'mdi mdi-forklift' ), 
	array( 'mdi mdi-format-align-bottom' => 'mdi mdi-format-align-bottom' ), 
	array( 'mdi mdi-format-align-center' => 'mdi mdi-format-align-center' ), 
	array( 'mdi mdi-format-align-justify' => 'mdi mdi-format-align-justify' ), 
	array( 'mdi mdi-format-align-left' => 'mdi mdi-format-align-left' ), 
	array( 'mdi mdi-format-align-middle' => 'mdi mdi-format-align-middle' ), 
	array( 'mdi mdi-format-align-right' => 'mdi mdi-format-align-right' ), 
	array( 'mdi mdi-format-align-top' => 'mdi mdi-format-align-top' ), 
	array( 'mdi mdi-format-annotation-plus' => 'mdi mdi-format-annotation-plus' ), 
	array( 'mdi mdi-format-bold' => 'mdi mdi-format-bold' ), 
	array( 'mdi mdi-format-clear' => 'mdi mdi-format-clear' ), 
	array( 'mdi mdi-format-color-fill' => 'mdi mdi-format-color-fill' ), 
	array( 'mdi mdi-format-color-text' => 'mdi mdi-format-color-text' ), 
	array( 'mdi mdi-format-float-center' => 'mdi mdi-format-float-center' ), 
	array( 'mdi mdi-format-float-left' => 'mdi mdi-format-float-left' ), 
	array( 'mdi mdi-format-float-none' => 'mdi mdi-format-float-none' ), 
	array( 'mdi mdi-format-float-right' => 'mdi mdi-format-float-right' ), 
	array( 'mdi mdi-format-font' => 'mdi mdi-format-font' ), 
	array( 'mdi mdi-format-header-1' => 'mdi mdi-format-header-1' ), 
	array( 'mdi mdi-format-header-2' => 'mdi mdi-format-header-2' ), 
	array( 'mdi mdi-format-header-3' => 'mdi mdi-format-header-3' ), 
	array( 'mdi mdi-format-header-4' => 'mdi mdi-format-header-4' ), 
	array( 'mdi mdi-format-header-5' => 'mdi mdi-format-header-5' ), 
	array( 'mdi mdi-format-header-6' => 'mdi mdi-format-header-6' ), 
	array( 'mdi mdi-format-header-decrease' => 'mdi mdi-format-header-decrease' ), 
	array( 'mdi mdi-format-header-equal' => 'mdi mdi-format-header-equal' ), 
	array( 'mdi mdi-format-header-increase' => 'mdi mdi-format-header-increase' ), 
	array( 'mdi mdi-format-header-pound' => 'mdi mdi-format-header-pound' ), 
	array( 'mdi mdi-format-horizontal-align-center' => 'mdi mdi-format-horizontal-align-center' ), 
	array( 'mdi mdi-format-horizontal-align-left' => 'mdi mdi-format-horizontal-align-left' ), 
	array( 'mdi mdi-format-horizontal-align-right' => 'mdi mdi-format-horizontal-align-right' ), 
	array( 'mdi mdi-format-indent-decrease' => 'mdi mdi-format-indent-decrease' ), 
	array( 'mdi mdi-format-indent-increase' => 'mdi mdi-format-indent-increase' ), 
	array( 'mdi mdi-format-italic' => 'mdi mdi-format-italic' ), 
	array( 'mdi mdi-format-line-spacing' => 'mdi mdi-format-line-spacing' ), 
	array( 'mdi mdi-format-line-style' => 'mdi mdi-format-line-style' ), 
	array( 'mdi mdi-format-line-weight' => 'mdi mdi-format-line-weight' ), 
	array( 'mdi mdi-format-list-bulleted' => 'mdi mdi-format-list-bulleted' ), 
	array( 'mdi mdi-format-list-bulleted-type' => 'mdi mdi-format-list-bulleted-type' ), 
	array( 'mdi mdi-format-list-checks' => 'mdi mdi-format-list-checks' ), 
	array( 'mdi mdi-format-list-numbers' => 'mdi mdi-format-list-numbers' ), 
	array( 'mdi mdi-format-page-break' => 'mdi mdi-format-page-break' ), 
	array( 'mdi mdi-format-paint' => 'mdi mdi-format-paint' ), 
	array( 'mdi mdi-format-paragraph' => 'mdi mdi-format-paragraph' ), 
	array( 'mdi mdi-format-pilcrow' => 'mdi mdi-format-pilcrow' ), 
	array( 'mdi mdi-format-quote-close' => 'mdi mdi-format-quote-close' ), 
	array( 'mdi mdi-format-quote-open' => 'mdi mdi-format-quote-open' ), 
	array( 'mdi mdi-format-rotate-90' => 'mdi mdi-format-rotate-90' ), 
	array( 'mdi mdi-format-section' => 'mdi mdi-format-section' ), 
	array( 'mdi mdi-format-size' => 'mdi mdi-format-size' ), 
	array( 'mdi mdi-format-strikethrough' => 'mdi mdi-format-strikethrough' ), 
	array( 'mdi mdi-format-strikethrough-variant' => 'mdi mdi-format-strikethrough-variant' ), 
	array( 'mdi mdi-format-subscript' => 'mdi mdi-format-subscript' ), 
	array( 'mdi mdi-format-superscript' => 'mdi mdi-format-superscript' ), 
	array( 'mdi mdi-format-text' => 'mdi mdi-format-text' ), 
	array( 'mdi mdi-format-textdirection-l-to-r' => 'mdi mdi-format-textdirection-l-to-r' ), 
	array( 'mdi mdi-format-textdirection-r-to-l' => 'mdi mdi-format-textdirection-r-to-l' ), 
	array( 'mdi mdi-format-title' => 'mdi mdi-format-title' ), 
	array( 'mdi mdi-format-underline' => 'mdi mdi-format-underline' ), 
	array( 'mdi mdi-format-vertical-align-bottom' => 'mdi mdi-format-vertical-align-bottom' ), 
	array( 'mdi mdi-format-vertical-align-center' => 'mdi mdi-format-vertical-align-center' ), 
	array( 'mdi mdi-format-vertical-align-top' => 'mdi mdi-format-vertical-align-top' ), 
	array( 'mdi mdi-format-wrap-inline' => 'mdi mdi-format-wrap-inline' ), 
	array( 'mdi mdi-format-wrap-square' => 'mdi mdi-format-wrap-square' ), 
	array( 'mdi mdi-format-wrap-tight' => 'mdi mdi-format-wrap-tight' ), 
	array( 'mdi mdi-format-wrap-top-bottom' => 'mdi mdi-format-wrap-top-bottom' ), 
	array( 'mdi mdi-forum' => 'mdi mdi-forum' ), 
	array( 'mdi mdi-forum-outline' => 'mdi mdi-forum-outline' ), 
	array( 'mdi mdi-forward' => 'mdi mdi-forward' ), 
	array( 'mdi mdi-foursquare' => 'mdi mdi-foursquare' ), 
	array( 'mdi mdi-fridge' => 'mdi mdi-fridge' ), 
	array( 'mdi mdi-fridge-filled' => 'mdi mdi-fridge-filled' ), 
	array( 'mdi mdi-fridge-filled-bottom' => 'mdi mdi-fridge-filled-bottom' ), 
	array( 'mdi mdi-fridge-filled-top' => 'mdi mdi-fridge-filled-top' ), 
	array( 'mdi mdi-fuel' => 'mdi mdi-fuel' ), 
	array( 'mdi mdi-fullscreen' => 'mdi mdi-fullscreen' ), 
	array( 'mdi mdi-fullscreen-exit' => 'mdi mdi-fullscreen-exit' ), 
	array( 'mdi mdi-function' => 'mdi mdi-function' ), 
	array( 'mdi mdi-function-variant' => 'mdi mdi-function-variant' ), 
	array( 'mdi mdi-gamepad' => 'mdi mdi-gamepad' ), 
	array( 'mdi mdi-gamepad-variant' => 'mdi mdi-gamepad-variant' ), 
	array( 'mdi mdi-garage' => 'mdi mdi-garage' ), 
	array( 'mdi mdi-garage-alert' => 'mdi mdi-garage-alert' ), 
	array( 'mdi mdi-garage-open' => 'mdi mdi-garage-open' ), 
	array( 'mdi mdi-gas-cylinder' => 'mdi mdi-gas-cylinder' ), 
	array( 'mdi mdi-gas-station' => 'mdi mdi-gas-station' ), 
	array( 'mdi mdi-gate' => 'mdi mdi-gate' ), 
	array( 'mdi mdi-gauge' => 'mdi mdi-gauge' ), 
	array( 'mdi mdi-gauge-empty' => 'mdi mdi-gauge-empty' ), 
	array( 'mdi mdi-gauge-full' => 'mdi mdi-gauge-full' ), 
	array( 'mdi mdi-gauge-low' => 'mdi mdi-gauge-low' ), 
	array( 'mdi mdi-gavel' => 'mdi mdi-gavel' ), 
	array( 'mdi mdi-gender-female' => 'mdi mdi-gender-female' ), 
	array( 'mdi mdi-gender-male' => 'mdi mdi-gender-male' ), 
	array( 'mdi mdi-gender-male-female' => 'mdi mdi-gender-male-female' ), 
	array( 'mdi mdi-gender-transgender' => 'mdi mdi-gender-transgender' ), 
	array( 'mdi mdi-gesture' => 'mdi mdi-gesture' ), 
	array( 'mdi mdi-gesture-double-tap' => 'mdi mdi-gesture-double-tap' ), 
	array( 'mdi mdi-gesture-swipe-down' => 'mdi mdi-gesture-swipe-down' ), 
	array( 'mdi mdi-gesture-swipe-left' => 'mdi mdi-gesture-swipe-left' ), 
	array( 'mdi mdi-gesture-swipe-right' => 'mdi mdi-gesture-swipe-right' ), 
	array( 'mdi mdi-gesture-swipe-up' => 'mdi mdi-gesture-swipe-up' ), 
	array( 'mdi mdi-gesture-tap' => 'mdi mdi-gesture-tap' ), 
	array( 'mdi mdi-gesture-two-double-tap' => 'mdi mdi-gesture-two-double-tap' ), 
	array( 'mdi mdi-gesture-two-tap' => 'mdi mdi-gesture-two-tap' ), 
	array( 'mdi mdi-ghost' => 'mdi mdi-ghost' ), 
	array( 'mdi mdi-gift' => 'mdi mdi-gift' ), 
	array( 'mdi mdi-git' => 'mdi mdi-git' ), 
	array( 'mdi mdi-github-box' => 'mdi mdi-github-box' ), 
	array( 'mdi mdi-github-circle' => 'mdi mdi-github-circle' ), 
	array( 'mdi mdi-github-face' => 'mdi mdi-github-face' ), 
	array( 'mdi mdi-glass-cocktail' => 'mdi mdi-glass-cocktail' ), 
	array( 'mdi mdi-glass-flute' => 'mdi mdi-glass-flute' ), 
	array( 'mdi mdi-glass-mug' => 'mdi mdi-glass-mug' ), 
	array( 'mdi mdi-glass-stange' => 'mdi mdi-glass-stange' ), 
	array( 'mdi mdi-glass-tulip' => 'mdi mdi-glass-tulip' ), 
	array( 'mdi mdi-glass-wine' => 'mdi mdi-glass-wine' ), 
	array( 'mdi mdi-glassdoor' => 'mdi mdi-glassdoor' ), 
	array( 'mdi mdi-glasses' => 'mdi mdi-glasses' ), 
	array( 'mdi mdi-gmail' => 'mdi mdi-gmail' ), 
	array( 'mdi mdi-gnome' => 'mdi mdi-gnome' ), 
	array( 'mdi mdi-golf' => 'mdi mdi-golf' ), 
	array( 'mdi mdi-gondola' => 'mdi mdi-gondola' ), 
	array( 'mdi mdi-google' => 'mdi mdi-google' ), 
	array( 'mdi mdi-google-analytics' => 'mdi mdi-google-analytics' ), 
	array( 'mdi mdi-google-assistant' => 'mdi mdi-google-assistant' ), 
	array( 'mdi mdi-google-cardboard' => 'mdi mdi-google-cardboard' ), 
	array( 'mdi mdi-google-chrome' => 'mdi mdi-google-chrome' ), 
	array( 'mdi mdi-google-circles' => 'mdi mdi-google-circles' ), 
	array( 'mdi mdi-google-circles-communities' => 'mdi mdi-google-circles-communities' ), 
	array( 'mdi mdi-google-circles-extended' => 'mdi mdi-google-circles-extended' ), 
	array( 'mdi mdi-google-circles-group' => 'mdi mdi-google-circles-group' ), 
	array( 'mdi mdi-google-controller' => 'mdi mdi-google-controller' ), 
	array( 'mdi mdi-google-controller-off' => 'mdi mdi-google-controller-off' ), 
	array( 'mdi mdi-google-drive' => 'mdi mdi-google-drive' ), 
	array( 'mdi mdi-google-earth' => 'mdi mdi-google-earth' ), 
	array( 'mdi mdi-google-glass' => 'mdi mdi-google-glass' ), 
	array( 'mdi mdi-google-home' => 'mdi mdi-google-home' ), 
	array( 'mdi mdi-google-keep' => 'mdi mdi-google-keep' ), 
	array( 'mdi mdi-google-maps' => 'mdi mdi-google-maps' ), 
	array( 'mdi mdi-google-nearby' => 'mdi mdi-google-nearby' ), 
	array( 'mdi mdi-google-pages' => 'mdi mdi-google-pages' ), 
	array( 'mdi mdi-google-photos' => 'mdi mdi-google-photos' ), 
	array( 'mdi mdi-google-physical-web' => 'mdi mdi-google-physical-web' ), 
	array( 'mdi mdi-google-play' => 'mdi mdi-google-play' ), 
	array( 'mdi mdi-google-plus' => 'mdi mdi-google-plus' ), 
	array( 'mdi mdi-google-plus-box' => 'mdi mdi-google-plus-box' ), 
	array( 'mdi mdi-google-translate' => 'mdi mdi-google-translate' ), 
	array( 'mdi mdi-google-wallet' => 'mdi mdi-google-wallet' ), 
	array( 'mdi mdi-gradient' => 'mdi mdi-gradient' ), 
	array( 'mdi mdi-graphql' => 'mdi mdi-graphql' ), 
	array( 'mdi mdi-grease-pencil' => 'mdi mdi-grease-pencil' ), 
	array( 'mdi mdi-grid' => 'mdi mdi-grid' ), 
	array( 'mdi mdi-grid-large' => 'mdi mdi-grid-large' ), 
	array( 'mdi mdi-grid-off' => 'mdi mdi-grid-off' ), 
	array( 'mdi mdi-group' => 'mdi mdi-group' ), 
	array( 'mdi mdi-guitar-acoustic' => 'mdi mdi-guitar-acoustic' ), 
	array( 'mdi mdi-guitar-electric' => 'mdi mdi-guitar-electric' ), 
	array( 'mdi mdi-guitar-pick' => 'mdi mdi-guitar-pick' ), 
	array( 'mdi mdi-guitar-pick-outline' => 'mdi mdi-guitar-pick-outline' ), 
	array( 'mdi mdi-guy-fawkes-mask' => 'mdi mdi-guy-fawkes-mask' ), 
	array( 'mdi mdi-hackernews' => 'mdi mdi-hackernews' ), 
	array( 'mdi mdi-hamburger' => 'mdi mdi-hamburger' ), 
	array( 'mdi mdi-hand-pointing-right' => 'mdi mdi-hand-pointing-right' ), 
	array( 'mdi mdi-hanger' => 'mdi mdi-hanger' ), 
	array( 'mdi mdi-hangouts' => 'mdi mdi-hangouts' ), 
	array( 'mdi mdi-harddisk' => 'mdi mdi-harddisk' ), 
	array( 'mdi mdi-headphones' => 'mdi mdi-headphones' ), 
	array( 'mdi mdi-headphones-box' => 'mdi mdi-headphones-box' ), 
	array( 'mdi mdi-headphones-off' => 'mdi mdi-headphones-off' ), 
	array( 'mdi mdi-headphones-settings' => 'mdi mdi-headphones-settings' ), 
	array( 'mdi mdi-headset' => 'mdi mdi-headset' ), 
	array( 'mdi mdi-headset-dock' => 'mdi mdi-headset-dock' ), 
	array( 'mdi mdi-headset-off' => 'mdi mdi-headset-off' ), 
	array( 'mdi mdi-heart' => 'mdi mdi-heart' ), 
	array( 'mdi mdi-heart-box' => 'mdi mdi-heart-box' ), 
	array( 'mdi mdi-heart-box-outline' => 'mdi mdi-heart-box-outline' ), 
	array( 'mdi mdi-heart-broken' => 'mdi mdi-heart-broken' ), 
	array( 'mdi mdi-heart-half' => 'mdi mdi-heart-half' ), 
	array( 'mdi mdi-heart-half-full' => 'mdi mdi-heart-half-full' ), 
	array( 'mdi mdi-heart-half-outline' => 'mdi mdi-heart-half-outline' ), 
	array( 'mdi mdi-heart-off' => 'mdi mdi-heart-off' ), 
	array( 'mdi mdi-heart-outline' => 'mdi mdi-heart-outline' ), 
	array( 'mdi mdi-heart-pulse' => 'mdi mdi-heart-pulse' ), 
	array( 'mdi mdi-help' => 'mdi mdi-help' ), 
	array( 'mdi mdi-help-box' => 'mdi mdi-help-box' ), 
	array( 'mdi mdi-help-circle' => 'mdi mdi-help-circle' ), 
	array( 'mdi mdi-help-circle-outline' => 'mdi mdi-help-circle-outline' ), 
	array( 'mdi mdi-help-network' => 'mdi mdi-help-network' ), 
	array( 'mdi mdi-hexagon' => 'mdi mdi-hexagon' ), 
	array( 'mdi mdi-hexagon-multiple' => 'mdi mdi-hexagon-multiple' ), 
	array( 'mdi mdi-hexagon-outline' => 'mdi mdi-hexagon-outline' ), 
	array( 'mdi mdi-high-definition' => 'mdi mdi-high-definition' ), 
	array( 'mdi mdi-high-definition-box' => 'mdi mdi-high-definition-box' ), 
	array( 'mdi mdi-highway' => 'mdi mdi-highway' ), 
	array( 'mdi mdi-history' => 'mdi mdi-history' ), 
	array( 'mdi mdi-hockey-puck' => 'mdi mdi-hockey-puck' ), 
	array( 'mdi mdi-hockey-sticks' => 'mdi mdi-hockey-sticks' ), 
	array( 'mdi mdi-hololens' => 'mdi mdi-hololens' ), 
	array( 'mdi mdi-home' => 'mdi mdi-home' ), 
	array( 'mdi mdi-home-account' => 'mdi mdi-home-account' ), 
	array( 'mdi mdi-home-alert' => 'mdi mdi-home-alert' ), 
	array( 'mdi mdi-home-assistant' => 'mdi mdi-home-assistant' ), 
	array( 'mdi mdi-home-automation' => 'mdi mdi-home-automation' ), 
	array( 'mdi mdi-home-circle' => 'mdi mdi-home-circle' ), 
	array( 'mdi mdi-home-heart' => 'mdi mdi-home-heart' ), 
	array( 'mdi mdi-home-map-marker' => 'mdi mdi-home-map-marker' ), 
	array( 'mdi mdi-home-modern' => 'mdi mdi-home-modern' ), 
	array( 'mdi mdi-home-outline' => 'mdi mdi-home-outline' ), 
	array( 'mdi mdi-home-variant' => 'mdi mdi-home-variant' ), 
	array( 'mdi mdi-hook' => 'mdi mdi-hook' ), 
	array( 'mdi mdi-hook-off' => 'mdi mdi-hook-off' ), 
	array( 'mdi mdi-hops' => 'mdi mdi-hops' ), 
	array( 'mdi mdi-hospital' => 'mdi mdi-hospital' ), 
	array( 'mdi mdi-hospital-building' => 'mdi mdi-hospital-building' ), 
	array( 'mdi mdi-hospital-marker' => 'mdi mdi-hospital-marker' ), 
	array( 'mdi mdi-hot-tub' => 'mdi mdi-hot-tub' ), 
	array( 'mdi mdi-hotel' => 'mdi mdi-hotel' ), 
	array( 'mdi mdi-houzz' => 'mdi mdi-houzz' ), 
	array( 'mdi mdi-houzz-box' => 'mdi mdi-houzz-box' ), 
	array( 'mdi mdi-hulu' => 'mdi mdi-hulu' ), 
	array( 'mdi mdi-human' => 'mdi mdi-human' ), 
	array( 'mdi mdi-human-child' => 'mdi mdi-human-child' ), 
	array( 'mdi mdi-human-female' => 'mdi mdi-human-female' ), 
	array( 'mdi mdi-human-greeting' => 'mdi mdi-human-greeting' ), 
	array( 'mdi mdi-human-handsdown' => 'mdi mdi-human-handsdown' ), 
	array( 'mdi mdi-human-handsup' => 'mdi mdi-human-handsup' ), 
	array( 'mdi mdi-human-male' => 'mdi mdi-human-male' ), 
	array( 'mdi mdi-human-male-female' => 'mdi mdi-human-male-female' ), 
	array( 'mdi mdi-human-pregnant' => 'mdi mdi-human-pregnant' ), 
	array( 'mdi mdi-humble-bundle' => 'mdi mdi-humble-bundle' ), 
	array( 'mdi mdi-ice-cream' => 'mdi mdi-ice-cream' ), 
	array( 'mdi mdi-image' => 'mdi mdi-image' ), 
	array( 'mdi mdi-image-album' => 'mdi mdi-image-album' ), 
	array( 'mdi mdi-image-area' => 'mdi mdi-image-area' ), 
	array( 'mdi mdi-image-area-close' => 'mdi mdi-image-area-close' ), 
	array( 'mdi mdi-image-broken' => 'mdi mdi-image-broken' ), 
	array( 'mdi mdi-image-broken-variant' => 'mdi mdi-image-broken-variant' ), 
	array( 'mdi mdi-image-filter' => 'mdi mdi-image-filter' ), 
	array( 'mdi mdi-image-filter-black-white' => 'mdi mdi-image-filter-black-white' ), 
	array( 'mdi mdi-image-filter-center-focus' => 'mdi mdi-image-filter-center-focus' ), 
	array( 'mdi mdi-image-filter-center-focus-weak' => 'mdi mdi-image-filter-center-focus-weak' ), 
	array( 'mdi mdi-image-filter-drama' => 'mdi mdi-image-filter-drama' ), 
	array( 'mdi mdi-image-filter-frames' => 'mdi mdi-image-filter-frames' ), 
	array( 'mdi mdi-image-filter-hdr' => 'mdi mdi-image-filter-hdr' ), 
	array( 'mdi mdi-image-filter-none' => 'mdi mdi-image-filter-none' ), 
	array( 'mdi mdi-image-filter-tilt-shift' => 'mdi mdi-image-filter-tilt-shift' ), 
	array( 'mdi mdi-image-filter-vintage' => 'mdi mdi-image-filter-vintage' ), 
	array( 'mdi mdi-image-multiple' => 'mdi mdi-image-multiple' ), 
	array( 'mdi mdi-image-off' => 'mdi mdi-image-off' ), 
	array( 'mdi mdi-image-plus' => 'mdi mdi-image-plus' ), 
	array( 'mdi mdi-import' => 'mdi mdi-import' ), 
	array( 'mdi mdi-inbox' => 'mdi mdi-inbox' ), 
	array( 'mdi mdi-inbox-arrow-down' => 'mdi mdi-inbox-arrow-down' ), 
	array( 'mdi mdi-inbox-arrow-up' => 'mdi mdi-inbox-arrow-up' ), 
	array( 'mdi mdi-incognito' => 'mdi mdi-incognito' ), 
	array( 'mdi mdi-infinity' => 'mdi mdi-infinity' ), 
	array( 'mdi mdi-information' => 'mdi mdi-information' ), 
	array( 'mdi mdi-information-outline' => 'mdi mdi-information-outline' ), 
	array( 'mdi mdi-information-variant' => 'mdi mdi-information-variant' ), 
	array( 'mdi mdi-instagram' => 'mdi mdi-instagram' ), 
	array( 'mdi mdi-instapaper' => 'mdi mdi-instapaper' ), 
	array( 'mdi mdi-internet-explorer' => 'mdi mdi-internet-explorer' ), 
	array( 'mdi mdi-invert-colors' => 'mdi mdi-invert-colors' ), 
	array( 'mdi mdi-itunes' => 'mdi mdi-itunes' ), 
	array( 'mdi mdi-jeepney' => 'mdi mdi-jeepney' ), 
	array( 'mdi mdi-jira' => 'mdi mdi-jira' ), 
	array( 'mdi mdi-jquery' => 'mdi mdi-jquery' ), 
	array( 'mdi mdi-jsfiddle' => 'mdi mdi-jsfiddle' ), 
	array( 'mdi mdi-json' => 'mdi mdi-json' ), 
	array( 'mdi mdi-karate' => 'mdi mdi-karate' ), 
	array( 'mdi mdi-keg' => 'mdi mdi-keg' ), 
	array( 'mdi mdi-kettle' => 'mdi mdi-kettle' ), 
	array( 'mdi mdi-key' => 'mdi mdi-key' ), 
	array( 'mdi mdi-key-change' => 'mdi mdi-key-change' ), 
	array( 'mdi mdi-key-minus' => 'mdi mdi-key-minus' ), 
	array( 'mdi mdi-key-plus' => 'mdi mdi-key-plus' ), 
	array( 'mdi mdi-key-remove' => 'mdi mdi-key-remove' ), 
	array( 'mdi mdi-key-variant' => 'mdi mdi-key-variant' ), 
	array( 'mdi mdi-keyboard' => 'mdi mdi-keyboard' ), 
	array( 'mdi mdi-keyboard-backspace' => 'mdi mdi-keyboard-backspace' ), 
	array( 'mdi mdi-keyboard-caps' => 'mdi mdi-keyboard-caps' ), 
	array( 'mdi mdi-keyboard-close' => 'mdi mdi-keyboard-close' ), 
	array( 'mdi mdi-keyboard-off' => 'mdi mdi-keyboard-off' ), 
	array( 'mdi mdi-keyboard-return' => 'mdi mdi-keyboard-return' ), 
	array( 'mdi mdi-keyboard-tab' => 'mdi mdi-keyboard-tab' ), 
	array( 'mdi mdi-keyboard-variant' => 'mdi mdi-keyboard-variant' ), 
	array( 'mdi mdi-kickstarter' => 'mdi mdi-kickstarter' ), 
	array( 'mdi mdi-kodi' => 'mdi mdi-kodi' ), 
	array( 'mdi mdi-label' => 'mdi mdi-label' ), 
	array( 'mdi mdi-label-outline' => 'mdi mdi-label-outline' ), 
	array( 'mdi mdi-ladybug' => 'mdi mdi-ladybug' ), 
	array( 'mdi mdi-lambda' => 'mdi mdi-lambda' ), 
	array( 'mdi mdi-lamp' => 'mdi mdi-lamp' ), 
	array( 'mdi mdi-lan' => 'mdi mdi-lan' ), 
	array( 'mdi mdi-lan-connect' => 'mdi mdi-lan-connect' ), 
	array( 'mdi mdi-lan-disconnect' => 'mdi mdi-lan-disconnect' ), 
	array( 'mdi mdi-lan-pending' => 'mdi mdi-lan-pending' ), 
	array( 'mdi mdi-language-c' => 'mdi mdi-language-c' ), 
	array( 'mdi mdi-language-cpp' => 'mdi mdi-language-cpp' ), 
	array( 'mdi mdi-language-csharp' => 'mdi mdi-language-csharp' ), 
	array( 'mdi mdi-language-css3' => 'mdi mdi-language-css3' ), 
	array( 'mdi mdi-language-go' => 'mdi mdi-language-go' ), 
	array( 'mdi mdi-language-html5' => 'mdi mdi-language-html5' ), 
	array( 'mdi mdi-language-javascript' => 'mdi mdi-language-javascript' ), 
	array( 'mdi mdi-language-php' => 'mdi mdi-language-php' ), 
	array( 'mdi mdi-language-python' => 'mdi mdi-language-python' ), 
	array( 'mdi mdi-language-python-text' => 'mdi mdi-language-python-text' ), 
	array( 'mdi mdi-language-r' => 'mdi mdi-language-r' ), 
	array( 'mdi mdi-language-swift' => 'mdi mdi-language-swift' ), 
	array( 'mdi mdi-language-typescript' => 'mdi mdi-language-typescript' ), 
	array( 'mdi mdi-laptop' => 'mdi mdi-laptop' ), 
	array( 'mdi mdi-laptop-chromebook' => 'mdi mdi-laptop-chromebook' ), 
	array( 'mdi mdi-laptop-mac' => 'mdi mdi-laptop-mac' ), 
	array( 'mdi mdi-laptop-off' => 'mdi mdi-laptop-off' ), 
	array( 'mdi mdi-laptop-windows' => 'mdi mdi-laptop-windows' ), 
	array( 'mdi mdi-lastfm' => 'mdi mdi-lastfm' ), 
	array( 'mdi mdi-lastpass' => 'mdi mdi-lastpass' ), 
	array( 'mdi mdi-launch' => 'mdi mdi-launch' ), 
	array( 'mdi mdi-lava-lamp' => 'mdi mdi-lava-lamp' ), 
	array( 'mdi mdi-layers' => 'mdi mdi-layers' ), 
	array( 'mdi mdi-layers-off' => 'mdi mdi-layers-off' ), 
	array( 'mdi mdi-lead-pencil' => 'mdi mdi-lead-pencil' ), 
	array( 'mdi mdi-leaf' => 'mdi mdi-leaf' ), 
	array( 'mdi mdi-led-off' => 'mdi mdi-led-off' ), 
	array( 'mdi mdi-led-on' => 'mdi mdi-led-on' ), 
	array( 'mdi mdi-led-outline' => 'mdi mdi-led-outline' ), 
	array( 'mdi mdi-led-strip' => 'mdi mdi-led-strip' ), 
	array( 'mdi mdi-led-variant-off' => 'mdi mdi-led-variant-off' ), 
	array( 'mdi mdi-led-variant-on' => 'mdi mdi-led-variant-on' ), 
	array( 'mdi mdi-led-variant-outline' => 'mdi mdi-led-variant-outline' ), 
	array( 'mdi mdi-library' => 'mdi mdi-library' ), 
	array( 'mdi mdi-library-books' => 'mdi mdi-library-books' ), 
	array( 'mdi mdi-library-music' => 'mdi mdi-library-music' ), 
	array( 'mdi mdi-library-plus' => 'mdi mdi-library-plus' ), 
	array( 'mdi mdi-lifebuoy' => 'mdi mdi-lifebuoy' ), 
	array( 'mdi mdi-lightbulb' => 'mdi mdi-lightbulb' ), 
	array( 'mdi mdi-lightbulb-on' => 'mdi mdi-lightbulb-on' ), 
	array( 'mdi mdi-lightbulb-on-outline' => 'mdi mdi-lightbulb-on-outline' ), 
	array( 'mdi mdi-lightbulb-outline' => 'mdi mdi-lightbulb-outline' ), 
	array( 'mdi mdi-link' => 'mdi mdi-link' ), 
	array( 'mdi mdi-link-off' => 'mdi mdi-link-off' ), 
	array( 'mdi mdi-link-variant' => 'mdi mdi-link-variant' ), 
	array( 'mdi mdi-link-variant-off' => 'mdi mdi-link-variant-off' ), 
	array( 'mdi mdi-linkedin' => 'mdi mdi-linkedin' ), 
	array( 'mdi mdi-linkedin-box' => 'mdi mdi-linkedin-box' ), 
	array( 'mdi mdi-linux' => 'mdi mdi-linux' ), 
	array( 'mdi mdi-loading' => 'mdi mdi-loading' ), 
	array( 'mdi mdi-lock' => 'mdi mdi-lock' ), 
	array( 'mdi mdi-lock-open' => 'mdi mdi-lock-open' ), 
	array( 'mdi mdi-lock-open-outline' => 'mdi mdi-lock-open-outline' ), 
	array( 'mdi mdi-lock-outline' => 'mdi mdi-lock-outline' ), 
	array( 'mdi mdi-lock-pattern' => 'mdi mdi-lock-pattern' ), 
	array( 'mdi mdi-lock-plus' => 'mdi mdi-lock-plus' ), 
	array( 'mdi mdi-lock-reset' => 'mdi mdi-lock-reset' ), 
	array( 'mdi mdi-locker' => 'mdi mdi-locker' ), 
	array( 'mdi mdi-locker-multiple' => 'mdi mdi-locker-multiple' ), 
	array( 'mdi mdi-login' => 'mdi mdi-login' ), 
	array( 'mdi mdi-login-variant' => 'mdi mdi-login-variant' ), 
	array( 'mdi mdi-logout' => 'mdi mdi-logout' ), 
	array( 'mdi mdi-logout-variant' => 'mdi mdi-logout-variant' ), 
	array( 'mdi mdi-looks' => 'mdi mdi-looks' ), 
	array( 'mdi mdi-loop' => 'mdi mdi-loop' ), 
	array( 'mdi mdi-loupe' => 'mdi mdi-loupe' ), 
	array( 'mdi mdi-lumx' => 'mdi mdi-lumx' ), 
	array( 'mdi mdi-magnet' => 'mdi mdi-magnet' ), 
	array( 'mdi mdi-magnet-on' => 'mdi mdi-magnet-on' ), 
	array( 'mdi mdi-magnify' => 'mdi mdi-magnify' ), 
	array( 'mdi mdi-magnify-minus' => 'mdi mdi-magnify-minus' ), 
	array( 'mdi mdi-magnify-minus-outline' => 'mdi mdi-magnify-minus-outline' ), 
	array( 'mdi mdi-magnify-plus' => 'mdi mdi-magnify-plus' ), 
	array( 'mdi mdi-magnify-plus-outline' => 'mdi mdi-magnify-plus-outline' ), 
	array( 'mdi mdi-mail-ru' => 'mdi mdi-mail-ru' ), 
	array( 'mdi mdi-mailbox' => 'mdi mdi-mailbox' ), 
	array( 'mdi mdi-map' => 'mdi mdi-map' ), 
	array( 'mdi mdi-map-marker' => 'mdi mdi-map-marker' ), 
	array( 'mdi mdi-map-marker-circle' => 'mdi mdi-map-marker-circle' ), 
	array( 'mdi mdi-map-marker-minus' => 'mdi mdi-map-marker-minus' ), 
	array( 'mdi mdi-map-marker-multiple' => 'mdi mdi-map-marker-multiple' ), 
	array( 'mdi mdi-map-marker-off' => 'mdi mdi-map-marker-off' ), 
	array( 'mdi mdi-map-marker-outline' => 'mdi mdi-map-marker-outline' ), 
	array( 'mdi mdi-map-marker-plus' => 'mdi mdi-map-marker-plus' ), 
	array( 'mdi mdi-map-marker-radius' => 'mdi mdi-map-marker-radius' ), 
	array( 'mdi mdi-margin' => 'mdi mdi-margin' ), 
	array( 'mdi mdi-markdown' => 'mdi mdi-markdown' ), 
	array( 'mdi mdi-marker' => 'mdi mdi-marker' ), 
	array( 'mdi mdi-marker-check' => 'mdi mdi-marker-check' ), 
	array( 'mdi mdi-material-ui' => 'mdi mdi-material-ui' ), 
	array( 'mdi mdi-math-compass' => 'mdi mdi-math-compass' ), 
	array( 'mdi mdi-matrix' => 'mdi mdi-matrix' ), 
	array( 'mdi mdi-maxcdn' => 'mdi mdi-maxcdn' ), 
	array( 'mdi mdi-medical-bag' => 'mdi mdi-medical-bag' ), 
	array( 'mdi mdi-medium' => 'mdi mdi-medium' ), 
	array( 'mdi mdi-memory' => 'mdi mdi-memory' ), 
	array( 'mdi mdi-menu' => 'mdi mdi-menu' ), 
	array( 'mdi mdi-menu-down' => 'mdi mdi-menu-down' ), 
	array( 'mdi mdi-menu-down-outline' => 'mdi mdi-menu-down-outline' ), 
	array( 'mdi mdi-menu-left' => 'mdi mdi-menu-left' ), 
	array( 'mdi mdi-menu-right' => 'mdi mdi-menu-right' ), 
	array( 'mdi mdi-menu-up' => 'mdi mdi-menu-up' ), 
	array( 'mdi mdi-menu-up-outline' => 'mdi mdi-menu-up-outline' ), 
	array( 'mdi mdi-message' => 'mdi mdi-message' ), 
	array( 'mdi mdi-message-alert' => 'mdi mdi-message-alert' ), 
	array( 'mdi mdi-message-bulleted' => 'mdi mdi-message-bulleted' ), 
	array( 'mdi mdi-message-bulleted-off' => 'mdi mdi-message-bulleted-off' ), 
	array( 'mdi mdi-message-draw' => 'mdi mdi-message-draw' ), 
	array( 'mdi mdi-message-image' => 'mdi mdi-message-image' ), 
	array( 'mdi mdi-message-outline' => 'mdi mdi-message-outline' ), 
	array( 'mdi mdi-message-plus' => 'mdi mdi-message-plus' ), 
	array( 'mdi mdi-message-processing' => 'mdi mdi-message-processing' ), 
	array( 'mdi mdi-message-reply' => 'mdi mdi-message-reply' ), 
	array( 'mdi mdi-message-reply-text' => 'mdi mdi-message-reply-text' ), 
	array( 'mdi mdi-message-settings' => 'mdi mdi-message-settings' ), 
	array( 'mdi mdi-message-settings-variant' => 'mdi mdi-message-settings-variant' ), 
	array( 'mdi mdi-message-text' => 'mdi mdi-message-text' ), 
	array( 'mdi mdi-message-text-outline' => 'mdi mdi-message-text-outline' ), 
	array( 'mdi mdi-message-video' => 'mdi mdi-message-video' ), 
	array( 'mdi mdi-meteor' => 'mdi mdi-meteor' ), 
	array( 'mdi mdi-metronome' => 'mdi mdi-metronome' ), 
	array( 'mdi mdi-metronome-tick' => 'mdi mdi-metronome-tick' ), 
	array( 'mdi mdi-micro-sd' => 'mdi mdi-micro-sd' ), 
	array( 'mdi mdi-microphone' => 'mdi mdi-microphone' ), 
	array( 'mdi mdi-microphone-off' => 'mdi mdi-microphone-off' ), 
	array( 'mdi mdi-microphone-outline' => 'mdi mdi-microphone-outline' ), 
	array( 'mdi mdi-microphone-settings' => 'mdi mdi-microphone-settings' ), 
	array( 'mdi mdi-microphone-variant' => 'mdi mdi-microphone-variant' ), 
	array( 'mdi mdi-microphone-variant-off' => 'mdi mdi-microphone-variant-off' ), 
	array( 'mdi mdi-microscope' => 'mdi mdi-microscope' ), 
	array( 'mdi mdi-microsoft' => 'mdi mdi-microsoft' ), 
	array( 'mdi mdi-minecraft' => 'mdi mdi-minecraft' ), 
	array( 'mdi mdi-minus' => 'mdi mdi-minus' ), 
	array( 'mdi mdi-minus-box' => 'mdi mdi-minus-box' ), 
	array( 'mdi mdi-minus-box-outline' => 'mdi mdi-minus-box-outline' ), 
	array( 'mdi mdi-minus-circle' => 'mdi mdi-minus-circle' ), 
	array( 'mdi mdi-minus-circle-outline' => 'mdi mdi-minus-circle-outline' ), 
	array( 'mdi mdi-minus-network' => 'mdi mdi-minus-network' ), 
	array( 'mdi mdi-mixcloud' => 'mdi mdi-mixcloud' ), 
	array( 'mdi mdi-mixed-reality' => 'mdi mdi-mixed-reality' ), 
	array( 'mdi mdi-mixer' => 'mdi mdi-mixer' ), 
	array( 'mdi mdi-monitor' => 'mdi mdi-monitor' ), 
	array( 'mdi mdi-monitor-multiple' => 'mdi mdi-monitor-multiple' ), 
	array( 'mdi mdi-more' => 'mdi mdi-more' ), 
	array( 'mdi mdi-motorbike' => 'mdi mdi-motorbike' ), 
	array( 'mdi mdi-mouse' => 'mdi mdi-mouse' ), 
	array( 'mdi mdi-mouse-off' => 'mdi mdi-mouse-off' ), 
	array( 'mdi mdi-mouse-variant' => 'mdi mdi-mouse-variant' ), 
	array( 'mdi mdi-mouse-variant-off' => 'mdi mdi-mouse-variant-off' ), 
	array( 'mdi mdi-move-resize' => 'mdi mdi-move-resize' ), 
	array( 'mdi mdi-move-resize-variant' => 'mdi mdi-move-resize-variant' ), 
	array( 'mdi mdi-movie' => 'mdi mdi-movie' ), 
	array( 'mdi mdi-movie-roll' => 'mdi mdi-movie-roll' ), 
	array( 'mdi mdi-multiplication' => 'mdi mdi-multiplication' ), 
	array( 'mdi mdi-multiplication-box' => 'mdi mdi-multiplication-box' ), 
	array( 'mdi mdi-mushroom' => 'mdi mdi-mushroom' ), 
	array( 'mdi mdi-mushroom-outline' => 'mdi mdi-mushroom-outline' ), 
	array( 'mdi mdi-music' => 'mdi mdi-music' ), 
	array( 'mdi mdi-music-box' => 'mdi mdi-music-box' ), 
	array( 'mdi mdi-music-box-outline' => 'mdi mdi-music-box-outline' ), 
	array( 'mdi mdi-music-circle' => 'mdi mdi-music-circle' ), 
	array( 'mdi mdi-music-note' => 'mdi mdi-music-note' ), 
	array( 'mdi mdi-music-note-bluetooth' => 'mdi mdi-music-note-bluetooth' ), 
	array( 'mdi mdi-music-note-bluetooth-off' => 'mdi mdi-music-note-bluetooth-off' ), 
	array( 'mdi mdi-music-note-eighth' => 'mdi mdi-music-note-eighth' ), 
	array( 'mdi mdi-music-note-half' => 'mdi mdi-music-note-half' ), 
	array( 'mdi mdi-music-note-off' => 'mdi mdi-music-note-off' ), 
	array( 'mdi mdi-music-note-quarter' => 'mdi mdi-music-note-quarter' ), 
	array( 'mdi mdi-music-note-sixteenth' => 'mdi mdi-music-note-sixteenth' ), 
	array( 'mdi mdi-music-note-whole' => 'mdi mdi-music-note-whole' ), 
	array( 'mdi mdi-music-off' => 'mdi mdi-music-off' ), 
	array( 'mdi mdi-nativescript' => 'mdi mdi-nativescript' ), 
	array( 'mdi mdi-nature' => 'mdi mdi-nature' ), 
	array( 'mdi mdi-nature-people' => 'mdi mdi-nature-people' ), 
	array( 'mdi mdi-navigation' => 'mdi mdi-navigation' ), 
	array( 'mdi mdi-near-me' => 'mdi mdi-near-me' ), 
	array( 'mdi mdi-needle' => 'mdi mdi-needle' ), 
	array( 'mdi mdi-nest-protect' => 'mdi mdi-nest-protect' ), 
	array( 'mdi mdi-nest-thermostat' => 'mdi mdi-nest-thermostat' ), 
	array( 'mdi mdi-netflix' => 'mdi mdi-netflix' ), 
	array( 'mdi mdi-network' => 'mdi mdi-network' ), 
	array( 'mdi mdi-new-box' => 'mdi mdi-new-box' ), 
	array( 'mdi mdi-newspaper' => 'mdi mdi-newspaper' ), 
	array( 'mdi mdi-nfc' => 'mdi mdi-nfc' ), 
	array( 'mdi mdi-nfc-tap' => 'mdi mdi-nfc-tap' ), 
	array( 'mdi mdi-nfc-variant' => 'mdi mdi-nfc-variant' ), 
	array( 'mdi mdi-ninja' => 'mdi mdi-ninja' ), 
	array( 'mdi mdi-nintendo-switch' => 'mdi mdi-nintendo-switch' ), 
	array( 'mdi mdi-nodejs' => 'mdi mdi-nodejs' ), 
	array( 'mdi mdi-note' => 'mdi mdi-note' ), 
	array( 'mdi mdi-note-multiple' => 'mdi mdi-note-multiple' ), 
	array( 'mdi mdi-note-multiple-outline' => 'mdi mdi-note-multiple-outline' ), 
	array( 'mdi mdi-note-outline' => 'mdi mdi-note-outline' ), 
	array( 'mdi mdi-note-plus' => 'mdi mdi-note-plus' ), 
	array( 'mdi mdi-note-plus-outline' => 'mdi mdi-note-plus-outline' ), 
	array( 'mdi mdi-note-text' => 'mdi mdi-note-text' ), 
	array( 'mdi mdi-notebook' => 'mdi mdi-notebook' ), 
	array( 'mdi mdi-notification-clear-all' => 'mdi mdi-notification-clear-all' ), 
	array( 'mdi mdi-npm' => 'mdi mdi-npm' ), 
	array( 'mdi mdi-nuke' => 'mdi mdi-nuke' ), 
	array( 'mdi mdi-null' => 'mdi mdi-null' ), 
	array( 'mdi mdi-numeric' => 'mdi mdi-numeric' ), 
	array( 'mdi mdi-numeric-0-box' => 'mdi mdi-numeric-0-box' ), 
	array( 'mdi mdi-numeric-0-box-multiple-outline' => 'mdi mdi-numeric-0-box-multiple-outline' ), 
	array( 'mdi mdi-numeric-0-box-outline' => 'mdi mdi-numeric-0-box-outline' ), 
	array( 'mdi mdi-numeric-1-box' => 'mdi mdi-numeric-1-box' ), 
	array( 'mdi mdi-numeric-1-box-multiple-outline' => 'mdi mdi-numeric-1-box-multiple-outline' ), 
	array( 'mdi mdi-numeric-1-box-outline' => 'mdi mdi-numeric-1-box-outline' ), 
	array( 'mdi mdi-numeric-2-box' => 'mdi mdi-numeric-2-box' ), 
	array( 'mdi mdi-numeric-2-box-multiple-outline' => 'mdi mdi-numeric-2-box-multiple-outline' ), 
	array( 'mdi mdi-numeric-2-box-outline' => 'mdi mdi-numeric-2-box-outline' ), 
	array( 'mdi mdi-numeric-3-box' => 'mdi mdi-numeric-3-box' ), 
	array( 'mdi mdi-numeric-3-box-multiple-outline' => 'mdi mdi-numeric-3-box-multiple-outline' ), 
	array( 'mdi mdi-numeric-3-box-outline' => 'mdi mdi-numeric-3-box-outline' ), 
	array( 'mdi mdi-numeric-4-box' => 'mdi mdi-numeric-4-box' ), 
	array( 'mdi mdi-numeric-4-box-multiple-outline' => 'mdi mdi-numeric-4-box-multiple-outline' ), 
	array( 'mdi mdi-numeric-4-box-outline' => 'mdi mdi-numeric-4-box-outline' ), 
	array( 'mdi mdi-numeric-5-box' => 'mdi mdi-numeric-5-box' ), 
	array( 'mdi mdi-numeric-5-box-multiple-outline' => 'mdi mdi-numeric-5-box-multiple-outline' ), 
	array( 'mdi mdi-numeric-5-box-outline' => 'mdi mdi-numeric-5-box-outline' ), 
	array( 'mdi mdi-numeric-6-box' => 'mdi mdi-numeric-6-box' ), 
	array( 'mdi mdi-numeric-6-box-multiple-outline' => 'mdi mdi-numeric-6-box-multiple-outline' ), 
	array( 'mdi mdi-numeric-6-box-outline' => 'mdi mdi-numeric-6-box-outline' ), 
	array( 'mdi mdi-numeric-7-box' => 'mdi mdi-numeric-7-box' ), 
	array( 'mdi mdi-numeric-7-box-multiple-outline' => 'mdi mdi-numeric-7-box-multiple-outline' ), 
	array( 'mdi mdi-numeric-7-box-outline' => 'mdi mdi-numeric-7-box-outline' ), 
	array( 'mdi mdi-numeric-8-box' => 'mdi mdi-numeric-8-box' ), 
	array( 'mdi mdi-numeric-8-box-multiple-outline' => 'mdi mdi-numeric-8-box-multiple-outline' ), 
	array( 'mdi mdi-numeric-8-box-outline' => 'mdi mdi-numeric-8-box-outline' ), 
	array( 'mdi mdi-numeric-9-box' => 'mdi mdi-numeric-9-box' ), 
	array( 'mdi mdi-numeric-9-box-multiple-outline' => 'mdi mdi-numeric-9-box-multiple-outline' ), 
	array( 'mdi mdi-numeric-9-box-outline' => 'mdi mdi-numeric-9-box-outline' ), 
	array( 'mdi mdi-numeric-9-plus-box' => 'mdi mdi-numeric-9-plus-box' ), 
	array( 'mdi mdi-numeric-9-plus-box-multiple-outline' => 'mdi mdi-numeric-9-plus-box-multiple-outline' ), 
	array( 'mdi mdi-numeric-9-plus-box-outline' => 'mdi mdi-numeric-9-plus-box-outline' ), 
	array( 'mdi mdi-nut' => 'mdi mdi-nut' ), 
	array( 'mdi mdi-nutrition' => 'mdi mdi-nutrition' ), 
	array( 'mdi mdi-oar' => 'mdi mdi-oar' ), 
	array( 'mdi mdi-octagon' => 'mdi mdi-octagon' ), 
	array( 'mdi mdi-octagon-outline' => 'mdi mdi-octagon-outline' ), 
	array( 'mdi mdi-octagram' => 'mdi mdi-octagram' ), 
	array( 'mdi mdi-octagram-outline' => 'mdi mdi-octagram-outline' ), 
	array( 'mdi mdi-odnoklassniki' => 'mdi mdi-odnoklassniki' ), 
	array( 'mdi mdi-office' => 'mdi mdi-office' ), 
	array( 'mdi mdi-oil' => 'mdi mdi-oil' ), 
	array( 'mdi mdi-oil-temperature' => 'mdi mdi-oil-temperature' ), 
	array( 'mdi mdi-omega' => 'mdi mdi-omega' ), 
	array( 'mdi mdi-onedrive' => 'mdi mdi-onedrive' ), 
	array( 'mdi mdi-onenote' => 'mdi mdi-onenote' ), 
	array( 'mdi mdi-onepassword' => 'mdi mdi-onepassword' ), 
	array( 'mdi mdi-opacity' => 'mdi mdi-opacity' ), 
	array( 'mdi mdi-open-in-app' => 'mdi mdi-open-in-app' ), 
	array( 'mdi mdi-open-in-new' => 'mdi mdi-open-in-new' ), 
	array( 'mdi mdi-openid' => 'mdi mdi-openid' ), 
	array( 'mdi mdi-opera' => 'mdi mdi-opera' ), 
	array( 'mdi mdi-orbit' => 'mdi mdi-orbit' ), 
	array( 'mdi mdi-ornament' => 'mdi mdi-ornament' ), 
	array( 'mdi mdi-ornament-variant' => 'mdi mdi-ornament-variant' ), 
	array( 'mdi mdi-owl' => 'mdi mdi-owl' ), 
	array( 'mdi mdi-package' => 'mdi mdi-package' ), 
	array( 'mdi mdi-package-down' => 'mdi mdi-package-down' ), 
	array( 'mdi mdi-package-up' => 'mdi mdi-package-up' ), 
	array( 'mdi mdi-package-variant' => 'mdi mdi-package-variant' ), 
	array( 'mdi mdi-package-variant-closed' => 'mdi mdi-package-variant-closed' ), 
	array( 'mdi mdi-page-first' => 'mdi mdi-page-first' ), 
	array( 'mdi mdi-page-last' => 'mdi mdi-page-last' ), 
	array( 'mdi mdi-page-layout-body' => 'mdi mdi-page-layout-body' ), 
	array( 'mdi mdi-page-layout-footer' => 'mdi mdi-page-layout-footer' ), 
	array( 'mdi mdi-page-layout-header' => 'mdi mdi-page-layout-header' ), 
	array( 'mdi mdi-page-layout-sidebar-left' => 'mdi mdi-page-layout-sidebar-left' ), 
	array( 'mdi mdi-page-layout-sidebar-right' => 'mdi mdi-page-layout-sidebar-right' ), 
	array( 'mdi mdi-palette' => 'mdi mdi-palette' ), 
	array( 'mdi mdi-palette-advanced' => 'mdi mdi-palette-advanced' ), 
	array( 'mdi mdi-panda' => 'mdi mdi-panda' ), 
	array( 'mdi mdi-pandora' => 'mdi mdi-pandora' ), 
	array( 'mdi mdi-panorama' => 'mdi mdi-panorama' ), 
	array( 'mdi mdi-panorama-fisheye' => 'mdi mdi-panorama-fisheye' ), 
	array( 'mdi mdi-panorama-horizontal' => 'mdi mdi-panorama-horizontal' ), 
	array( 'mdi mdi-panorama-vertical' => 'mdi mdi-panorama-vertical' ), 
	array( 'mdi mdi-panorama-wide-angle' => 'mdi mdi-panorama-wide-angle' ), 
	array( 'mdi mdi-paper-cut-vertical' => 'mdi mdi-paper-cut-vertical' ), 
	array( 'mdi mdi-paperclip' => 'mdi mdi-paperclip' ), 
	array( 'mdi mdi-parking' => 'mdi mdi-parking' ), 
	array( 'mdi mdi-passport' => 'mdi mdi-passport' ), 
	array( 'mdi mdi-patreon' => 'mdi mdi-patreon' ), 
	array( 'mdi mdi-pause' => 'mdi mdi-pause' ), 
	array( 'mdi mdi-pause-circle' => 'mdi mdi-pause-circle' ), 
	array( 'mdi mdi-pause-circle-outline' => 'mdi mdi-pause-circle-outline' ), 
	array( 'mdi mdi-pause-octagon' => 'mdi mdi-pause-octagon' ), 
	array( 'mdi mdi-pause-octagon-outline' => 'mdi mdi-pause-octagon-outline' ), 
	array( 'mdi mdi-paw' => 'mdi mdi-paw' ), 
	array( 'mdi mdi-paw-off' => 'mdi mdi-paw-off' ), 
	array( 'mdi mdi-paypal' => 'mdi mdi-paypal' ), 
	array( 'mdi mdi-peace' => 'mdi mdi-peace' ), 
	array( 'mdi mdi-pen' => 'mdi mdi-pen' ), 
	array( 'mdi mdi-pencil' => 'mdi mdi-pencil' ), 
	array( 'mdi mdi-pencil-box' => 'mdi mdi-pencil-box' ), 
	array( 'mdi mdi-pencil-box-outline' => 'mdi mdi-pencil-box-outline' ), 
	array( 'mdi mdi-pencil-circle' => 'mdi mdi-pencil-circle' ), 
	array( 'mdi mdi-pencil-circle-outline' => 'mdi mdi-pencil-circle-outline' ), 
	array( 'mdi mdi-pencil-lock' => 'mdi mdi-pencil-lock' ), 
	array( 'mdi mdi-pencil-off' => 'mdi mdi-pencil-off' ), 
	array( 'mdi mdi-pentagon' => 'mdi mdi-pentagon' ), 
	array( 'mdi mdi-pentagon-outline' => 'mdi mdi-pentagon-outline' ), 
	array( 'mdi mdi-percent' => 'mdi mdi-percent' ), 
	array( 'mdi mdi-periodic-table-co2' => 'mdi mdi-periodic-table-co2' ), 
	array( 'mdi mdi-periscope' => 'mdi mdi-periscope' ), 
	array( 'mdi mdi-pharmacy' => 'mdi mdi-pharmacy' ), 
	array( 'mdi mdi-phone' => 'mdi mdi-phone' ), 
	array( 'mdi mdi-phone-bluetooth' => 'mdi mdi-phone-bluetooth' ), 
	array( 'mdi mdi-phone-classic' => 'mdi mdi-phone-classic' ), 
	array( 'mdi mdi-phone-forward' => 'mdi mdi-phone-forward' ), 
	array( 'mdi mdi-phone-hangup' => 'mdi mdi-phone-hangup' ), 
	array( 'mdi mdi-phone-in-talk' => 'mdi mdi-phone-in-talk' ), 
	array( 'mdi mdi-phone-incoming' => 'mdi mdi-phone-incoming' ), 
	array( 'mdi mdi-phone-locked' => 'mdi mdi-phone-locked' ), 
	array( 'mdi mdi-phone-log' => 'mdi mdi-phone-log' ), 
	array( 'mdi mdi-phone-minus' => 'mdi mdi-phone-minus' ), 
	array( 'mdi mdi-phone-missed' => 'mdi mdi-phone-missed' ), 
	array( 'mdi mdi-phone-outgoing' => 'mdi mdi-phone-outgoing' ), 
	array( 'mdi mdi-phone-paused' => 'mdi mdi-phone-paused' ), 
	array( 'mdi mdi-phone-plus' => 'mdi mdi-phone-plus' ), 
	array( 'mdi mdi-phone-return' => 'mdi mdi-phone-return' ), 
	array( 'mdi mdi-phone-rotate-landscape' => 'mdi mdi-phone-rotate-landscape' ), 
	array( 'mdi mdi-phone-rotate-portrait' => 'mdi mdi-phone-rotate-portrait' ), 
	array( 'mdi mdi-phone-settings' => 'mdi mdi-phone-settings' ), 
	array( 'mdi mdi-phone-voip' => 'mdi mdi-phone-voip' ), 
	array( 'mdi mdi-pi' => 'mdi mdi-pi' ), 
	array( 'mdi mdi-pi-box' => 'mdi mdi-pi-box' ), 
	array( 'mdi mdi-piano' => 'mdi mdi-piano' ), 
	array( 'mdi mdi-pier' => 'mdi mdi-pier' ), 
	array( 'mdi mdi-pier-crane' => 'mdi mdi-pier-crane' ), 
	array( 'mdi mdi-pig' => 'mdi mdi-pig' ), 
	array( 'mdi mdi-pill' => 'mdi mdi-pill' ), 
	array( 'mdi mdi-pillar' => 'mdi mdi-pillar' ), 
	array( 'mdi mdi-pin' => 'mdi mdi-pin' ), 
	array( 'mdi mdi-pin-off' => 'mdi mdi-pin-off' ), 
	array( 'mdi mdi-pine-tree' => 'mdi mdi-pine-tree' ), 
	array( 'mdi mdi-pine-tree-box' => 'mdi mdi-pine-tree-box' ), 
	array( 'mdi mdi-pinterest' => 'mdi mdi-pinterest' ), 
	array( 'mdi mdi-pinterest-box' => 'mdi mdi-pinterest-box' ), 
	array( 'mdi mdi-pipe' => 'mdi mdi-pipe' ), 
	array( 'mdi mdi-pipe-disconnected' => 'mdi mdi-pipe-disconnected' ), 
	array( 'mdi mdi-pipe-leak' => 'mdi mdi-pipe-leak' ), 
	array( 'mdi mdi-pistol' => 'mdi mdi-pistol' ), 
	array( 'mdi mdi-piston' => 'mdi mdi-piston' ), 
	array( 'mdi mdi-pizza' => 'mdi mdi-pizza' ), 
	array( 'mdi mdi-plane-shield' => 'mdi mdi-plane-shield' ), 
	array( 'mdi mdi-play' => 'mdi mdi-play' ), 
	array( 'mdi mdi-play-box-outline' => 'mdi mdi-play-box-outline' ), 
	array( 'mdi mdi-play-circle' => 'mdi mdi-play-circle' ), 
	array( 'mdi mdi-play-circle-outline' => 'mdi mdi-play-circle-outline' ), 
	array( 'mdi mdi-play-network' => 'mdi mdi-play-network' ), 
	array( 'mdi mdi-play-pause' => 'mdi mdi-play-pause' ), 
	array( 'mdi mdi-play-protected-' => 'mdi mdi-play-protected-' ), 
	array( 'mdi mdi-playlist-check' => 'mdi mdi-playlist-check' ), 
	array( 'mdi mdi-playlist-minus' => 'mdi mdi-playlist-minus' ), 
	array( 'mdi mdi-playlist-play' => 'mdi mdi-playlist-play' ), 
	array( 'mdi mdi-playlist-plus' => 'mdi mdi-playlist-plus' ), 
	array( 'mdi mdi-playlist-remove' => 'mdi mdi-playlist-remove' ), 
	array( 'mdi mdi-playstation' => 'mdi mdi-playstation' ), 
	array( 'mdi mdi-plex' => 'mdi mdi-plex' ), 
	array( 'mdi mdi-plus' => 'mdi mdi-plus' ), 
	array( 'mdi mdi-plus-box' => 'mdi mdi-plus-box' ), 
	array( 'mdi mdi-plus-box-outline' => 'mdi mdi-plus-box-outline' ), 
	array( 'mdi mdi-plus-circle' => 'mdi mdi-plus-circle' ), 
	array( 'mdi mdi-plus-circle-multiple-outline' => 'mdi mdi-plus-circle-multiple-outline' ), 
	array( 'mdi mdi-plus-circle-outline' => 'mdi mdi-plus-circle-outline' ), 
	array( 'mdi mdi-plus-network' => 'mdi mdi-plus-network' ), 
	array( 'mdi mdi-plus-one' => 'mdi mdi-plus-one' ), 
	array( 'mdi mdi-plus-outline' => 'mdi mdi-plus-outline' ), 
	array( 'mdi mdi-pocket' => 'mdi mdi-pocket' ), 
	array( 'mdi mdi-pokeball' => 'mdi mdi-pokeball' ), 
	array( 'mdi mdi-poker-chip' => 'mdi mdi-poker-chip' ), 
	array( 'mdi mdi-polaroid' => 'mdi mdi-polaroid' ), 
	array( 'mdi mdi-poll' => 'mdi mdi-poll' ), 
	array( 'mdi mdi-poll-box' => 'mdi mdi-poll-box' ), 
	array( 'mdi mdi-polymer' => 'mdi mdi-polymer' ), 
	array( 'mdi mdi-pool' => 'mdi mdi-pool' ), 
	array( 'mdi mdi-popcorn' => 'mdi mdi-popcorn' ), 
	array( 'mdi mdi-pot' => 'mdi mdi-pot' ), 
	array( 'mdi mdi-pot-mix' => 'mdi mdi-pot-mix' ), 
	array( 'mdi mdi-pound' => 'mdi mdi-pound' ), 
	array( 'mdi mdi-pound-box' => 'mdi mdi-pound-box' ), 
	array( 'mdi mdi-power' => 'mdi mdi-power' ), 
	array( 'mdi mdi-power-plug' => 'mdi mdi-power-plug' ), 
	array( 'mdi mdi-power-plug-off' => 'mdi mdi-power-plug-off' ), 
	array( 'mdi mdi-power-settings' => 'mdi mdi-power-settings' ), 
	array( 'mdi mdi-power-socket' => 'mdi mdi-power-socket' ), 
	array( 'mdi mdi-power-socket-eu' => 'mdi mdi-power-socket-eu' ), 
	array( 'mdi mdi-power-socket-uk' => 'mdi mdi-power-socket-uk' ), 
	array( 'mdi mdi-power-socket-us' => 'mdi mdi-power-socket-us' ), 
	array( 'mdi mdi-prescription' => 'mdi mdi-prescription' ), 
	array( 'mdi mdi-presentation' => 'mdi mdi-presentation' ), 
	array( 'mdi mdi-presentation-play' => 'mdi mdi-presentation-play' ), 
	array( 'mdi mdi-printer' => 'mdi mdi-printer' ), 
	array( 'mdi mdi-printer-3d' => 'mdi mdi-printer-3d' ), 
	array( 'mdi mdi-printer-alert' => 'mdi mdi-printer-alert' ), 
	array( 'mdi mdi-printer-settings' => 'mdi mdi-printer-settings' ), 
	array( 'mdi mdi-priority-high' => 'mdi mdi-priority-high' ), 
	array( 'mdi mdi-priority-low' => 'mdi mdi-priority-low' ), 
	array( 'mdi mdi-professional-hexagon' => 'mdi mdi-professional-hexagon' ), 
	array( 'mdi mdi-projector' => 'mdi mdi-projector' ), 
	array( 'mdi mdi-projector-screen' => 'mdi mdi-projector-screen' ), 
	array( 'mdi mdi-publish' => 'mdi mdi-publish' ), 
	array( 'mdi mdi-pulse' => 'mdi mdi-pulse' ), 
	array( 'mdi mdi-puzzle' => 'mdi mdi-puzzle' ), 
	array( 'mdi mdi-qqchat' => 'mdi mdi-qqchat' ), 
	array( 'mdi mdi-qrcode' => 'mdi mdi-qrcode' ), 
	array( 'mdi mdi-qrcode-scan' => 'mdi mdi-qrcode-scan' ), 
	array( 'mdi mdi-quadcopter' => 'mdi mdi-quadcopter' ), 
	array( 'mdi mdi-quality-high' => 'mdi mdi-quality-high' ), 
	array( 'mdi mdi-quicktime' => 'mdi mdi-quicktime' ), 
	array( 'mdi mdi-radar' => 'mdi mdi-radar' ), 
	array( 'mdi mdi-radiator' => 'mdi mdi-radiator' ), 
	array( 'mdi mdi-radio' => 'mdi mdi-radio' ), 
	array( 'mdi mdi-radio-handheld' => 'mdi mdi-radio-handheld' ), 
	array( 'mdi mdi-radio-tower' => 'mdi mdi-radio-tower' ), 
	array( 'mdi mdi-radioactive' => 'mdi mdi-radioactive' ), 
	array( 'mdi mdi-radiobox-blank' => 'mdi mdi-radiobox-blank' ), 
	array( 'mdi mdi-radiobox-marked' => 'mdi mdi-radiobox-marked' ), 
	array( 'mdi mdi-raspberrypi' => 'mdi mdi-raspberrypi' ), 
	array( 'mdi mdi-ray-end' => 'mdi mdi-ray-end' ), 
	array( 'mdi mdi-ray-end-arrow' => 'mdi mdi-ray-end-arrow' ), 
	array( 'mdi mdi-ray-start' => 'mdi mdi-ray-start' ), 
	array( 'mdi mdi-ray-start-arrow' => 'mdi mdi-ray-start-arrow' ), 
	array( 'mdi mdi-ray-start-end' => 'mdi mdi-ray-start-end' ), 
	array( 'mdi mdi-ray-vertex' => 'mdi mdi-ray-vertex' ), 
	array( 'mdi mdi-react' => 'mdi mdi-react' ), 
	array( 'mdi mdi-read' => 'mdi mdi-read' ), 
	array( 'mdi mdi-receipt' => 'mdi mdi-receipt' ), 
	array( 'mdi mdi-record' => 'mdi mdi-record' ), 
	array( 'mdi mdi-record-rec' => 'mdi mdi-record-rec' ), 
	array( 'mdi mdi-recycle' => 'mdi mdi-recycle' ), 
	array( 'mdi mdi-reddit' => 'mdi mdi-reddit' ), 
	array( 'mdi mdi-redo' => 'mdi mdi-redo' ), 
	array( 'mdi mdi-redo-variant' => 'mdi mdi-redo-variant' ), 
	array( 'mdi mdi-refresh' => 'mdi mdi-refresh' ), 
	array( 'mdi mdi-regex' => 'mdi mdi-regex' ), 
	array( 'mdi mdi-relative-scale' => 'mdi mdi-relative-scale' ), 
	array( 'mdi mdi-reload' => 'mdi mdi-reload' ), 
	array( 'mdi mdi-reminder' => 'mdi mdi-reminder' ), 
	array( 'mdi mdi-remote' => 'mdi mdi-remote' ), 
	array( 'mdi mdi-rename-box' => 'mdi mdi-rename-box' ), 
	array( 'mdi mdi-reorder-horizontal' => 'mdi mdi-reorder-horizontal' ), 
	array( 'mdi mdi-reorder-vertical' => 'mdi mdi-reorder-vertical' ), 
	array( 'mdi mdi-repeat' => 'mdi mdi-repeat' ), 
	array( 'mdi mdi-repeat-off' => 'mdi mdi-repeat-off' ), 
	array( 'mdi mdi-repeat-once' => 'mdi mdi-repeat-once' ), 
	array( 'mdi mdi-replay' => 'mdi mdi-replay' ), 
	array( 'mdi mdi-reply' => 'mdi mdi-reply' ), 
	array( 'mdi mdi-reply-all' => 'mdi mdi-reply-all' ), 
	array( 'mdi mdi-reproduction' => 'mdi mdi-reproduction' ), 
	array( 'mdi mdi-resize-bottom-right' => 'mdi mdi-resize-bottom-right' ), 
	array( 'mdi mdi-responsive' => 'mdi mdi-responsive' ), 
	array( 'mdi mdi-restart' => 'mdi mdi-restart' ), 
	array( 'mdi mdi-restore' => 'mdi mdi-restore' ), 
	array( 'mdi mdi-rewind' => 'mdi mdi-rewind' ), 
	array( 'mdi mdi-rewind-outline' => 'mdi mdi-rewind-outline' ), 
	array( 'mdi mdi-rhombus' => 'mdi mdi-rhombus' ), 
	array( 'mdi mdi-rhombus-outline' => 'mdi mdi-rhombus-outline' ), 
	array( 'mdi mdi-ribbon' => 'mdi mdi-ribbon' ), 
	array( 'mdi mdi-rice' => 'mdi mdi-rice' ), 
	array( 'mdi mdi-ring' => 'mdi mdi-ring' ), 
	array( 'mdi mdi-road' => 'mdi mdi-road' ), 
	array( 'mdi mdi-road-variant' => 'mdi mdi-road-variant' ), 
	array( 'mdi mdi-robot' => 'mdi mdi-robot' ), 
	array( 'mdi mdi-rocket' => 'mdi mdi-rocket' ), 
	array( 'mdi mdi-room-service' => 'mdi mdi-room-service' ), 
	array( 'mdi mdi-roomba' => 'mdi mdi-roomba' ), 
	array( 'mdi mdi-rotate-3d' => 'mdi mdi-rotate-3d' ), 
	array( 'mdi mdi-rotate-left' => 'mdi mdi-rotate-left' ), 
	array( 'mdi mdi-rotate-left-variant' => 'mdi mdi-rotate-left-variant' ), 
	array( 'mdi mdi-rotate-right' => 'mdi mdi-rotate-right' ), 
	array( 'mdi mdi-rotate-right-variant' => 'mdi mdi-rotate-right-variant' ), 
	array( 'mdi mdi-rounded-corner' => 'mdi mdi-rounded-corner' ), 
	array( 'mdi mdi-router-wireless' => 'mdi mdi-router-wireless' ), 
	array( 'mdi mdi-routes' => 'mdi mdi-routes' ), 
	array( 'mdi mdi-rowing' => 'mdi mdi-rowing' ), 
	array( 'mdi mdi-rss' => 'mdi mdi-rss' ), 
	array( 'mdi mdi-rss-box' => 'mdi mdi-rss-box' ), 
	array( 'mdi mdi-ruler' => 'mdi mdi-ruler' ), 
	array( 'mdi mdi-run' => 'mdi mdi-run' ), 
	array( 'mdi mdi-run-fast' => 'mdi mdi-run-fast' ), 
	array( 'mdi mdi-sale' => 'mdi mdi-sale' ), 
	array( 'mdi mdi-salesforce' => 'mdi mdi-salesforce' ), 
	array( 'mdi mdi-sass' => 'mdi mdi-sass' ), 
	array( 'mdi mdi-satellite' => 'mdi mdi-satellite' ), 
	array( 'mdi mdi-satellite-variant' => 'mdi mdi-satellite-variant' ), 
	array( 'mdi mdi-saxophone' => 'mdi mdi-saxophone' ), 
	array( 'mdi mdi-scale' => 'mdi mdi-scale' ), 
	array( 'mdi mdi-scale-balance' => 'mdi mdi-scale-balance' ), 
	array( 'mdi mdi-scale-bathroom' => 'mdi mdi-scale-bathroom' ), 
	array( 'mdi mdi-scanner' => 'mdi mdi-scanner' ), 
	array( 'mdi mdi-school' => 'mdi mdi-school' ), 
	array( 'mdi mdi-screen-rotation' => 'mdi mdi-screen-rotation' ), 
	array( 'mdi mdi-screen-rotation-lock' => 'mdi mdi-screen-rotation-lock' ), 
	array( 'mdi mdi-screwdriver' => 'mdi mdi-screwdriver' ), 
	array( 'mdi mdi-script' => 'mdi mdi-script' ), 
	array( 'mdi mdi-sd' => 'mdi mdi-sd' ), 
	array( 'mdi mdi-seal' => 'mdi mdi-seal' ), 
	array( 'mdi mdi-search-web' => 'mdi mdi-search-web' ), 
	array( 'mdi mdi-seat-flat' => 'mdi mdi-seat-flat' ), 
	array( 'mdi mdi-seat-flat-angled' => 'mdi mdi-seat-flat-angled' ), 
	array( 'mdi mdi-seat-individual-suite' => 'mdi mdi-seat-individual-suite' ), 
	array( 'mdi mdi-seat-legroom-extra' => 'mdi mdi-seat-legroom-extra' ), 
	array( 'mdi mdi-seat-legroom-normal' => 'mdi mdi-seat-legroom-normal' ), 
	array( 'mdi mdi-seat-legroom-reduced' => 'mdi mdi-seat-legroom-reduced' ), 
	array( 'mdi mdi-seat-recline-extra' => 'mdi mdi-seat-recline-extra' ), 
	array( 'mdi mdi-seat-recline-normal' => 'mdi mdi-seat-recline-normal' ), 
	array( 'mdi mdi-security' => 'mdi mdi-security' ), 
	array( 'mdi mdi-security-account' => 'mdi mdi-security-account' ), 
	array( 'mdi mdi-security-home' => 'mdi mdi-security-home' ), 
	array( 'mdi mdi-security-network' => 'mdi mdi-security-network' ), 
	array( 'mdi mdi-select' => 'mdi mdi-select' ), 
	array( 'mdi mdi-select-all' => 'mdi mdi-select-all' ), 
	array( 'mdi mdi-select-inverse' => 'mdi mdi-select-inverse' ), 
	array( 'mdi mdi-select-off' => 'mdi mdi-select-off' ), 
	array( 'mdi mdi-selection' => 'mdi mdi-selection' ), 
	array( 'mdi mdi-selection-off' => 'mdi mdi-selection-off' ), 
	array( 'mdi mdi-send' => 'mdi mdi-send' ), 
	array( 'mdi mdi-send-secure' => 'mdi mdi-send-secure' ), 
	array( 'mdi mdi-serial-port' => 'mdi mdi-serial-port' ), 
	array( 'mdi mdi-server' => 'mdi mdi-server' ), 
	array( 'mdi mdi-server-minus' => 'mdi mdi-server-minus' ), 
	array( 'mdi mdi-server-network' => 'mdi mdi-server-network' ), 
	array( 'mdi mdi-server-network-off' => 'mdi mdi-server-network-off' ), 
	array( 'mdi mdi-server-off' => 'mdi mdi-server-off' ), 
	array( 'mdi mdi-server-plus' => 'mdi mdi-server-plus' ), 
	array( 'mdi mdi-server-remove' => 'mdi mdi-server-remove' ), 
	array( 'mdi mdi-server-security' => 'mdi mdi-server-security' ), 
	array( 'mdi mdi-set-all' => 'mdi mdi-set-all' ), 
	array( 'mdi mdi-set-center' => 'mdi mdi-set-center' ), 
	array( 'mdi mdi-set-center-right' => 'mdi mdi-set-center-right' ), 
	array( 'mdi mdi-set-left' => 'mdi mdi-set-left' ), 
	array( 'mdi mdi-set-left-center' => 'mdi mdi-set-left-center' ), 
	array( 'mdi mdi-set-left-right' => 'mdi mdi-set-left-right' ), 
	array( 'mdi mdi-set-none' => 'mdi mdi-set-none' ), 
	array( 'mdi mdi-set-right' => 'mdi mdi-set-right' ), 
	array( 'mdi mdi-settings' => 'mdi mdi-settings' ), 
	array( 'mdi mdi-settings-box' => 'mdi mdi-settings-box' ), 
	array( 'mdi mdi-shape' => 'mdi mdi-shape' ), 
	array( 'mdi mdi-shape-circle-plus' => 'mdi mdi-shape-circle-plus' ), 
	array( 'mdi mdi-shape-outline' => 'mdi mdi-shape-outline' ), 
	array( 'mdi mdi-shape-plus' => 'mdi mdi-shape-plus' ), 
	array( 'mdi mdi-shape-polygon-plus' => 'mdi mdi-shape-polygon-plus' ), 
	array( 'mdi mdi-shape-rectangle-plus' => 'mdi mdi-shape-rectangle-plus' ), 
	array( 'mdi mdi-shape-square-plus' => 'mdi mdi-shape-square-plus' ), 
	array( 'mdi mdi-share' => 'mdi mdi-share' ), 
	array( 'mdi mdi-share-variant' => 'mdi mdi-share-variant' ), 
	array( 'mdi mdi-shield' => 'mdi mdi-shield' ), 
	array( 'mdi mdi-shield-half-full' => 'mdi mdi-shield-half-full' ), 
	array( 'mdi mdi-shield-outline' => 'mdi mdi-shield-outline' ), 
	array( 'mdi mdi-ship-wheel' => 'mdi mdi-ship-wheel' ), 
	array( 'mdi mdi-shopping' => 'mdi mdi-shopping' ), 
	array( 'mdi mdi-shopping-music' => 'mdi mdi-shopping-music' ), 
	array( 'mdi mdi-shovel' => 'mdi mdi-shovel' ), 
	array( 'mdi mdi-shovel-off' => 'mdi mdi-shovel-off' ), 
	array( 'mdi mdi-shredder' => 'mdi mdi-shredder' ), 
	array( 'mdi mdi-shuffle' => 'mdi mdi-shuffle' ), 
	array( 'mdi mdi-shuffle-disabled' => 'mdi mdi-shuffle-disabled' ), 
	array( 'mdi mdi-shuffle-variant' => 'mdi mdi-shuffle-variant' ), 
	array( 'mdi mdi-sigma' => 'mdi mdi-sigma' ), 
	array( 'mdi mdi-sigma-lower' => 'mdi mdi-sigma-lower' ), 
	array( 'mdi mdi-sign-caution' => 'mdi mdi-sign-caution' ), 
	array( 'mdi mdi-sign-direction' => 'mdi mdi-sign-direction' ), 
	array( 'mdi mdi-sign-text' => 'mdi mdi-sign-text' ), 
	array( 'mdi mdi-signal' => 'mdi mdi-signal' ), 
	array( 'mdi mdi-signal-2g' => 'mdi mdi-signal-2g' ), 
	array( 'mdi mdi-signal-3g' => 'mdi mdi-signal-3g' ), 
	array( 'mdi mdi-signal-4g' => 'mdi mdi-signal-4g' ), 
	array( 'mdi mdi-signal-hspa' => 'mdi mdi-signal-hspa' ), 
	array( 'mdi mdi-signal-hspa-plus' => 'mdi mdi-signal-hspa-plus' ), 
	array( 'mdi mdi-signal-off' => 'mdi mdi-signal-off' ), 
	array( 'mdi mdi-signal-variant' => 'mdi mdi-signal-variant' ), 
	array( 'mdi mdi-silverware' => 'mdi mdi-silverware' ), 
	array( 'mdi mdi-silverware-fork' => 'mdi mdi-silverware-fork' ), 
	array( 'mdi mdi-silverware-spoon' => 'mdi mdi-silverware-spoon' ), 
	array( 'mdi mdi-silverware-variant' => 'mdi mdi-silverware-variant' ), 
	array( 'mdi mdi-sim' => 'mdi mdi-sim' ), 
	array( 'mdi mdi-sim-alert' => 'mdi mdi-sim-alert' ), 
	array( 'mdi mdi-sim-off' => 'mdi mdi-sim-off' ), 
	array( 'mdi mdi-sitemap' => 'mdi mdi-sitemap' ), 
	array( 'mdi mdi-skip-backward' => 'mdi mdi-skip-backward' ), 
	array( 'mdi mdi-skip-forward' => 'mdi mdi-skip-forward' ), 
	array( 'mdi mdi-skip-next' => 'mdi mdi-skip-next' ), 
	array( 'mdi mdi-skip-next-circle' => 'mdi mdi-skip-next-circle' ), 
	array( 'mdi mdi-skip-next-circle-outline' => 'mdi mdi-skip-next-circle-outline' ), 
	array( 'mdi mdi-skip-previous' => 'mdi mdi-skip-previous' ), 
	array( 'mdi mdi-skip-previous-circle' => 'mdi mdi-skip-previous-circle' ), 
	array( 'mdi mdi-skip-previous-circle-outline' => 'mdi mdi-skip-previous-circle-outline' ), 
	array( 'mdi mdi-skull' => 'mdi mdi-skull' ), 
	array( 'mdi mdi-skype' => 'mdi mdi-skype' ), 
	array( 'mdi mdi-skype-business' => 'mdi mdi-skype-business' ), 
	array( 'mdi mdi-slack' => 'mdi mdi-slack' ), 
	array( 'mdi mdi-sleep' => 'mdi mdi-sleep' ), 
	array( 'mdi mdi-sleep-off' => 'mdi mdi-sleep-off' ), 
	array( 'mdi mdi-smoking' => 'mdi mdi-smoking' ), 
	array( 'mdi mdi-smoking-off' => 'mdi mdi-smoking-off' ), 
	array( 'mdi mdi-snapchat' => 'mdi mdi-snapchat' ), 
	array( 'mdi mdi-snowflake' => 'mdi mdi-snowflake' ), 
	array( 'mdi mdi-snowman' => 'mdi mdi-snowman' ), 
	array( 'mdi mdi-soccer' => 'mdi mdi-soccer' ), 
	array( 'mdi mdi-soccer-field' => 'mdi mdi-soccer-field' ), 
	array( 'mdi mdi-sofa' => 'mdi mdi-sofa' ), 
	array( 'mdi mdi-solid' => 'mdi mdi-solid' ), 
	array( 'mdi mdi-sort' => 'mdi mdi-sort' ), 
	array( 'mdi mdi-sort-alphabetical' => 'mdi mdi-sort-alphabetical' ), 
	array( 'mdi mdi-sort-ascending' => 'mdi mdi-sort-ascending' ), 
	array( 'mdi mdi-sort-descending' => 'mdi mdi-sort-descending' ), 
	array( 'mdi mdi-sort-numeric' => 'mdi mdi-sort-numeric' ), 
	array( 'mdi mdi-sort-variant' => 'mdi mdi-sort-variant' ), 
	array( 'mdi mdi-soundcloud' => 'mdi mdi-soundcloud' ), 
	array( 'mdi mdi-source-branch' => 'mdi mdi-source-branch' ), 
	array( 'mdi mdi-source-commit' => 'mdi mdi-source-commit' ), 
	array( 'mdi mdi-source-commit-end' => 'mdi mdi-source-commit-end' ), 
	array( 'mdi mdi-source-commit-end-local' => 'mdi mdi-source-commit-end-local' ), 
	array( 'mdi mdi-source-commit-local' => 'mdi mdi-source-commit-local' ), 
	array( 'mdi mdi-source-commit-next-local' => 'mdi mdi-source-commit-next-local' ), 
	array( 'mdi mdi-source-commit-start' => 'mdi mdi-source-commit-start' ), 
	array( 'mdi mdi-source-commit-start-next-local' => 'mdi mdi-source-commit-start-next-local' ), 
	array( 'mdi mdi-source-fork' => 'mdi mdi-source-fork' ), 
	array( 'mdi mdi-source-merge' => 'mdi mdi-source-merge' ), 
	array( 'mdi mdi-source-pull' => 'mdi mdi-source-pull' ), 
	array( 'mdi mdi-soy-sauce' => 'mdi mdi-soy-sauce' ), 
	array( 'mdi mdi-speaker' => 'mdi mdi-speaker' ), 
	array( 'mdi mdi-speaker-off' => 'mdi mdi-speaker-off' ), 
	array( 'mdi mdi-speaker-wireless' => 'mdi mdi-speaker-wireless' ), 
	array( 'mdi mdi-speedometer' => 'mdi mdi-speedometer' ), 
	array( 'mdi mdi-spellcheck' => 'mdi mdi-spellcheck' ), 
	array( 'mdi mdi-spotify' => 'mdi mdi-spotify' ), 
	array( 'mdi mdi-spotlight' => 'mdi mdi-spotlight' ), 
	array( 'mdi mdi-spotlight-beam' => 'mdi mdi-spotlight-beam' ), 
	array( 'mdi mdi-spray' => 'mdi mdi-spray' ), 
	array( 'mdi mdi-square' => 'mdi mdi-square' ), 
	array( 'mdi mdi-square-inc' => 'mdi mdi-square-inc' ), 
	array( 'mdi mdi-square-inc-cash' => 'mdi mdi-square-inc-cash' ), 
	array( 'mdi mdi-square-outline' => 'mdi mdi-square-outline' ), 
	array( 'mdi mdi-square-root' => 'mdi mdi-square-root' ), 
	array( 'mdi mdi-stack-overflow' => 'mdi mdi-stack-overflow' ), 
	array( 'mdi mdi-stackexchange' => 'mdi mdi-stackexchange' ), 
	array( 'mdi mdi-stadium' => 'mdi mdi-stadium' ), 
	array( 'mdi mdi-stairs' => 'mdi mdi-stairs' ), 
	array( 'mdi mdi-standard-definition' => 'mdi mdi-standard-definition' ), 
	array( 'mdi mdi-star' => 'mdi mdi-star' ), 
	array( 'mdi mdi-star-circle' => 'mdi mdi-star-circle' ), 
	array( 'mdi mdi-star-half' => 'mdi mdi-star-half' ), 
	array( 'mdi mdi-star-off' => 'mdi mdi-star-off' ), 
	array( 'mdi mdi-star-outline' => 'mdi mdi-star-outline' ), 
	array( 'mdi mdi-steam' => 'mdi mdi-steam' ), 
	array( 'mdi mdi-steering' => 'mdi mdi-steering' ), 
	array( 'mdi mdi-step-backward' => 'mdi mdi-step-backward' ), 
	array( 'mdi mdi-step-backward-2' => 'mdi mdi-step-backward-2' ), 
	array( 'mdi mdi-step-forward' => 'mdi mdi-step-forward' ), 
	array( 'mdi mdi-step-forward-2' => 'mdi mdi-step-forward-2' ), 
	array( 'mdi mdi-stethoscope' => 'mdi mdi-stethoscope' ), 
	array( 'mdi mdi-sticker' => 'mdi mdi-sticker' ), 
	array( 'mdi mdi-sticker-emoji' => 'mdi mdi-sticker-emoji' ), 
	array( 'mdi mdi-stocking' => 'mdi mdi-stocking' ), 
	array( 'mdi mdi-stop' => 'mdi mdi-stop' ), 
	array( 'mdi mdi-stop-circle' => 'mdi mdi-stop-circle' ), 
	array( 'mdi mdi-stop-circle-outline' => 'mdi mdi-stop-circle-outline' ), 
	array( 'mdi mdi-store' => 'mdi mdi-store' ), 
	array( 'mdi mdi-store-24-hour' => 'mdi mdi-store-24-hour' ), 
	array( 'mdi mdi-stove' => 'mdi mdi-stove' ), 
	array( 'mdi mdi-subdirectory-arrow-left' => 'mdi mdi-subdirectory-arrow-left' ), 
	array( 'mdi mdi-subdirectory-arrow-right' => 'mdi mdi-subdirectory-arrow-right' ), 
	array( 'mdi mdi-subway' => 'mdi mdi-subway' ), 
	array( 'mdi mdi-subway-variant' => 'mdi mdi-subway-variant' ), 
	array( 'mdi mdi-summit' => 'mdi mdi-summit' ), 
	array( 'mdi mdi-sunglasses' => 'mdi mdi-sunglasses' ), 
	array( 'mdi mdi-surround-sound' => 'mdi mdi-surround-sound' ), 
	array( 'mdi mdi-surround-sound-2-0' => 'mdi mdi-surround-sound-2-0' ), 
	array( 'mdi mdi-surround-sound-3-1' => 'mdi mdi-surround-sound-3-1' ), 
	array( 'mdi mdi-surround-sound-5-1' => 'mdi mdi-surround-sound-5-1' ), 
	array( 'mdi mdi-surround-sound-7-1' => 'mdi mdi-surround-sound-7-1' ), 
	array( 'mdi mdi-svg' => 'mdi mdi-svg' ), 
	array( 'mdi mdi-swap-horizontal' => 'mdi mdi-swap-horizontal' ), 
	array( 'mdi mdi-swap-vertical' => 'mdi mdi-swap-vertical' ), 
	array( 'mdi mdi-swim' => 'mdi mdi-swim' ), 
	array( 'mdi mdi-switch' => 'mdi mdi-switch' ), 
	array( 'mdi mdi-sword' => 'mdi mdi-sword' ), 
	array( 'mdi mdi-sword-cross' => 'mdi mdi-sword-cross' ), 
	array( 'mdi mdi-sync' => 'mdi mdi-sync' ), 
	array( 'mdi mdi-sync-alert' => 'mdi mdi-sync-alert' ), 
	array( 'mdi mdi-sync-off' => 'mdi mdi-sync-off' ), 
	array( 'mdi mdi-tab' => 'mdi mdi-tab' ), 
	array( 'mdi mdi-tab-plus' => 'mdi mdi-tab-plus' ), 
	array( 'mdi mdi-tab-unselected' => 'mdi mdi-tab-unselected' ), 
	array( 'mdi mdi-table' => 'mdi mdi-table' ), 
	array( 'mdi mdi-table-column' => 'mdi mdi-table-column' ), 
	array( 'mdi mdi-table-column-plus-after' => 'mdi mdi-table-column-plus-after' ), 
	array( 'mdi mdi-table-column-plus-before' => 'mdi mdi-table-column-plus-before' ), 
	array( 'mdi mdi-table-column-remove' => 'mdi mdi-table-column-remove' ), 
	array( 'mdi mdi-table-column-width' => 'mdi mdi-table-column-width' ), 
	array( 'mdi mdi-table-edit' => 'mdi mdi-table-edit' ), 
	array( 'mdi mdi-table-large' => 'mdi mdi-table-large' ), 
	array( 'mdi mdi-table-of-s' => 'mdi mdi-table-of-s' ), 
	array( 'mdi mdi-table-row' => 'mdi mdi-table-row' ), 
	array( 'mdi mdi-table-row-height' => 'mdi mdi-table-row-height' ), 
	array( 'mdi mdi-table-row-plus-after' => 'mdi mdi-table-row-plus-after' ), 
	array( 'mdi mdi-table-row-plus-before' => 'mdi mdi-table-row-plus-before' ), 
	array( 'mdi mdi-table-row-remove' => 'mdi mdi-table-row-remove' ), 
	array( 'mdi mdi-table-settings' => 'mdi mdi-table-settings' ), 
	array( 'mdi mdi-tablet' => 'mdi mdi-tablet' ), 
	array( 'mdi mdi-tablet-android' => 'mdi mdi-tablet-android' ), 
	array( 'mdi mdi-tablet-ipad' => 'mdi mdi-tablet-ipad' ), 
	array( 'mdi mdi-taco' => 'mdi mdi-taco' ), 
	array( 'mdi mdi-tag' => 'mdi mdi-tag' ), 
	array( 'mdi mdi-tag-faces' => 'mdi mdi-tag-faces' ), 
	array( 'mdi mdi-tag-heart' => 'mdi mdi-tag-heart' ), 
	array( 'mdi mdi-tag-multiple' => 'mdi mdi-tag-multiple' ), 
	array( 'mdi mdi-tag-outline' => 'mdi mdi-tag-outline' ), 
	array( 'mdi mdi-tag-plus' => 'mdi mdi-tag-plus' ), 
	array( 'mdi mdi-tag-remove' => 'mdi mdi-tag-remove' ), 
	array( 'mdi mdi-tag-text-outline' => 'mdi mdi-tag-text-outline' ), 
	array( 'mdi mdi-target' => 'mdi mdi-target' ), 
	array( 'mdi mdi-taxi' => 'mdi mdi-taxi' ), 
	array( 'mdi mdi-teach' => 'mdi mdi-teach' ), 
	array( 'mdi mdi-teamviewer' => 'mdi mdi-teamviewer' ), 
	array( 'mdi mdi-telegram' => 'mdi mdi-telegram' ), 
	array( 'mdi mdi-television' => 'mdi mdi-television' ), 
	array( 'mdi mdi-television-box' => 'mdi mdi-television-box' ), 
	array( 'mdi mdi-television-classic' => 'mdi mdi-television-classic' ), 
	array( 'mdi mdi-television-classic-off' => 'mdi mdi-television-classic-off' ), 
	array( 'mdi mdi-television-guide' => 'mdi mdi-television-guide' ), 
	array( 'mdi mdi-television-off' => 'mdi mdi-television-off' ), 
	array( 'mdi mdi-temperature-celsius' => 'mdi mdi-temperature-celsius' ), 
	array( 'mdi mdi-temperature-fahrenheit' => 'mdi mdi-temperature-fahrenheit' ), 
	array( 'mdi mdi-temperature-kelvin' => 'mdi mdi-temperature-kelvin' ), 
	array( 'mdi mdi-tennis' => 'mdi mdi-tennis' ), 
	array( 'mdi mdi-tent' => 'mdi mdi-tent' ), 
	array( 'mdi mdi-terrain' => 'mdi mdi-terrain' ), 
	array( 'mdi mdi-test-tube' => 'mdi mdi-test-tube' ), 
	array( 'mdi mdi-text-shadow' => 'mdi mdi-text-shadow' ), 
	array( 'mdi mdi-text-to-speech' => 'mdi mdi-text-to-speech' ), 
	array( 'mdi mdi-text-to-speech-off' => 'mdi mdi-text-to-speech-off' ), 
	array( 'mdi mdi-textbox' => 'mdi mdi-textbox' ), 
	array( 'mdi mdi-textbox-password' => 'mdi mdi-textbox-password' ), 
	array( 'mdi mdi-texture' => 'mdi mdi-texture' ), 
	array( 'mdi mdi-theater' => 'mdi mdi-theater' ), 
	array( 'mdi mdi-theme-light-dark' => 'mdi mdi-theme-light-dark' ), 
	array( 'mdi mdi-thermometer' => 'mdi mdi-thermometer' ), 
	array( 'mdi mdi-thermometer-lines' => 'mdi mdi-thermometer-lines' ), 
	array( 'mdi mdi-thermostat-box' => 'mdi mdi-thermostat-box' ), 
	array( 'mdi mdi-thought-bubble' => 'mdi mdi-thought-bubble' ), 
	array( 'mdi mdi-thought-bubble-outline' => 'mdi mdi-thought-bubble-outline' ), 
	array( 'mdi mdi-thumb-down' => 'mdi mdi-thumb-down' ), 
	array( 'mdi mdi-thumb-down-outline' => 'mdi mdi-thumb-down-outline' ), 
	array( 'mdi mdi-thumb-up' => 'mdi mdi-thumb-up' ), 
	array( 'mdi mdi-thumb-up-outline' => 'mdi mdi-thumb-up-outline' ), 
	array( 'mdi mdi-thumbs-up-down' => 'mdi mdi-thumbs-up-down' ), 
	array( 'mdi mdi-ticket' => 'mdi mdi-ticket' ), 
	array( 'mdi mdi-ticket-account' => 'mdi mdi-ticket-account' ), 
	array( 'mdi mdi-ticket-confirmation' => 'mdi mdi-ticket-confirmation' ), 
	array( 'mdi mdi-ticket-percent' => 'mdi mdi-ticket-percent' ), 
	array( 'mdi mdi-tie' => 'mdi mdi-tie' ), 
	array( 'mdi mdi-tilde' => 'mdi mdi-tilde' ), 
	array( 'mdi mdi-timelapse' => 'mdi mdi-timelapse' ), 
	array( 'mdi mdi-timer' => 'mdi mdi-timer' ), 
	array( 'mdi mdi-timer-10' => 'mdi mdi-timer-10' ), 
	array( 'mdi mdi-timer-3' => 'mdi mdi-timer-3' ), 
	array( 'mdi mdi-timer-off' => 'mdi mdi-timer-off' ), 
	array( 'mdi mdi-timer-sand' => 'mdi mdi-timer-sand' ), 
	array( 'mdi mdi-timer-sand-empty' => 'mdi mdi-timer-sand-empty' ), 
	array( 'mdi mdi-timer-sand-full' => 'mdi mdi-timer-sand-full' ), 
	array( 'mdi mdi-timetable' => 'mdi mdi-timetable' ), 
	array( 'mdi mdi-toggle-switch' => 'mdi mdi-toggle-switch' ), 
	array( 'mdi mdi-toggle-switch-off' => 'mdi mdi-toggle-switch-off' ), 
	array( 'mdi mdi-tooltip' => 'mdi mdi-tooltip' ), 
	array( 'mdi mdi-tooltip-edit' => 'mdi mdi-tooltip-edit' ), 
	array( 'mdi mdi-tooltip-image' => 'mdi mdi-tooltip-image' ), 
	array( 'mdi mdi-tooltip-outline' => 'mdi mdi-tooltip-outline' ), 
	array( 'mdi mdi-tooltip-outline-plus' => 'mdi mdi-tooltip-outline-plus' ), 
	array( 'mdi mdi-tooltip-text' => 'mdi mdi-tooltip-text' ), 
	array( 'mdi mdi-tooth' => 'mdi mdi-tooth' ), 
	array( 'mdi mdi-tor' => 'mdi mdi-tor' ), 
	array( 'mdi mdi-tower-beach' => 'mdi mdi-tower-beach' ), 
	array( 'mdi mdi-tower-fire' => 'mdi mdi-tower-fire' ), 
	array( 'mdi mdi-towing' => 'mdi mdi-towing' ), 
	array( 'mdi mdi-trackpad' => 'mdi mdi-trackpad' ), 
	array( 'mdi mdi-tractor' => 'mdi mdi-tractor' ), 
	array( 'mdi mdi-traffic-light' => 'mdi mdi-traffic-light' ), 
	array( 'mdi mdi-train' => 'mdi mdi-train' ), 
	array( 'mdi mdi-tram' => 'mdi mdi-tram' ), 
	array( 'mdi mdi-transcribe' => 'mdi mdi-transcribe' ), 
	array( 'mdi mdi-transcribe-close' => 'mdi mdi-transcribe-close' ), 
	array( 'mdi mdi-transfer' => 'mdi mdi-transfer' ), 
	array( 'mdi mdi-transit-transfer' => 'mdi mdi-transit-transfer' ), 
	array( 'mdi mdi-translate' => 'mdi mdi-translate' ), 
	array( 'mdi mdi-treasure-chest' => 'mdi mdi-treasure-chest' ), 
	array( 'mdi mdi-tree' => 'mdi mdi-tree' ), 
	array( 'mdi mdi-trello' => 'mdi mdi-trello' ), 
	array( 'mdi mdi-trending-down' => 'mdi mdi-trending-down' ), 
	array( 'mdi mdi-trending-neutral' => 'mdi mdi-trending-neutral' ), 
	array( 'mdi mdi-trending-up' => 'mdi mdi-trending-up' ), 
	array( 'mdi mdi-triangle' => 'mdi mdi-triangle' ), 
	array( 'mdi mdi-triangle-outline' => 'mdi mdi-triangle-outline' ), 
	array( 'mdi mdi-trophy' => 'mdi mdi-trophy' ), 
	array( 'mdi mdi-trophy-award' => 'mdi mdi-trophy-award' ), 
	array( 'mdi mdi-trophy-outline' => 'mdi mdi-trophy-outline' ), 
	array( 'mdi mdi-trophy-variant' => 'mdi mdi-trophy-variant' ), 
	array( 'mdi mdi-trophy-variant-outline' => 'mdi mdi-trophy-variant-outline' ), 
	array( 'mdi mdi-truck' => 'mdi mdi-truck' ), 
	array( 'mdi mdi-truck-delivery' => 'mdi mdi-truck-delivery' ), 
	array( 'mdi mdi-truck-fast' => 'mdi mdi-truck-fast' ), 
	array( 'mdi mdi-truck-trailer' => 'mdi mdi-truck-trailer' ), 
	array( 'mdi mdi-tshirt-crew' => 'mdi mdi-tshirt-crew' ), 
	array( 'mdi mdi-tshirt-v' => 'mdi mdi-tshirt-v' ), 
	array( 'mdi mdi-tumblr' => 'mdi mdi-tumblr' ), 
	array( 'mdi mdi-tumblr-reblog' => 'mdi mdi-tumblr-reblog' ), 
	array( 'mdi mdi-tune' => 'mdi mdi-tune' ), 
	array( 'mdi mdi-tune-vertical' => 'mdi mdi-tune-vertical' ), 
	array( 'mdi mdi-twitch' => 'mdi mdi-twitch' ), 
	array( 'mdi mdi-twitter' => 'mdi mdi-twitter' ), 
	array( 'mdi mdi-twitter-box' => 'mdi mdi-twitter-box' ), 
	array( 'mdi mdi-twitter-circle' => 'mdi mdi-twitter-circle' ), 
	array( 'mdi mdi-twitter-retweet' => 'mdi mdi-twitter-retweet' ), 
	array( 'mdi mdi-uber' => 'mdi mdi-uber' ), 
	array( 'mdi mdi-ubuntu' => 'mdi mdi-ubuntu' ), 
	array( 'mdi mdi-ultra-high-definition' => 'mdi mdi-ultra-high-definition' ), 
	array( 'mdi mdi-umbraco' => 'mdi mdi-umbraco' ), 
	array( 'mdi mdi-umbrella' => 'mdi mdi-umbrella' ), 
	array( 'mdi mdi-umbrella-outline' => 'mdi mdi-umbrella-outline' ), 
	array( 'mdi mdi-undo' => 'mdi mdi-undo' ), 
	array( 'mdi mdi-undo-variant' => 'mdi mdi-undo-variant' ), 
	array( 'mdi mdi-unfold-less-horizontal' => 'mdi mdi-unfold-less-horizontal' ), 
	array( 'mdi mdi-unfold-less-vertical' => 'mdi mdi-unfold-less-vertical' ), 
	array( 'mdi mdi-unfold-more-horizontal' => 'mdi mdi-unfold-more-horizontal' ), 
	array( 'mdi mdi-unfold-more-vertical' => 'mdi mdi-unfold-more-vertical' ), 
	array( 'mdi mdi-ungroup' => 'mdi mdi-ungroup' ), 
	array( 'mdi mdi-unity' => 'mdi mdi-unity' ), 
	array( 'mdi mdi-untappd' => 'mdi mdi-untappd' ), 
	array( 'mdi mdi-update' => 'mdi mdi-update' ), 
	array( 'mdi mdi-upload' => 'mdi mdi-upload' ), 
	array( 'mdi mdi-upload-multiple' => 'mdi mdi-upload-multiple' ), 
	array( 'mdi mdi-upload-network' => 'mdi mdi-upload-network' ), 
	array( 'mdi mdi-usb' => 'mdi mdi-usb' ), 
	array( 'mdi mdi-van-passenger' => 'mdi mdi-van-passenger' ), 
	array( 'mdi mdi-van-utility' => 'mdi mdi-van-utility' ), 
	array( 'mdi mdi-vanish' => 'mdi mdi-vanish' ), 
	array( 'mdi mdi-vector-arrange-above' => 'mdi mdi-vector-arrange-above' ), 
	array( 'mdi mdi-vector-arrange-below' => 'mdi mdi-vector-arrange-below' ), 
	array( 'mdi mdi-vector-circle' => 'mdi mdi-vector-circle' ), 
	array( 'mdi mdi-vector-circle-variant' => 'mdi mdi-vector-circle-variant' ), 
	array( 'mdi mdi-vector-combine' => 'mdi mdi-vector-combine' ), 
	array( 'mdi mdi-vector-curve' => 'mdi mdi-vector-curve' ), 
	array( 'mdi mdi-vector-difference' => 'mdi mdi-vector-difference' ), 
	array( 'mdi mdi-vector-difference-ab' => 'mdi mdi-vector-difference-ab' ), 
	array( 'mdi mdi-vector-difference-ba' => 'mdi mdi-vector-difference-ba' ), 
	array( 'mdi mdi-vector-ellipse' => 'mdi mdi-vector-ellipse' ), 
	array( 'mdi mdi-vector-intersection' => 'mdi mdi-vector-intersection' ), 
	array( 'mdi mdi-vector-line' => 'mdi mdi-vector-line' ), 
	array( 'mdi mdi-vector-point' => 'mdi mdi-vector-point' ), 
	array( 'mdi mdi-vector-polygon' => 'mdi mdi-vector-polygon' ), 
	array( 'mdi mdi-vector-polyline' => 'mdi mdi-vector-polyline' ), 
	array( 'mdi mdi-vector-radius' => 'mdi mdi-vector-radius' ), 
	array( 'mdi mdi-vector-rectangle' => 'mdi mdi-vector-rectangle' ), 
	array( 'mdi mdi-vector-selection' => 'mdi mdi-vector-selection' ), 
	array( 'mdi mdi-vector-square' => 'mdi mdi-vector-square' ), 
	array( 'mdi mdi-vector-triangle' => 'mdi mdi-vector-triangle' ), 
	array( 'mdi mdi-vector-union' => 'mdi mdi-vector-union' ), 
	array( 'mdi mdi-venmo' => 'mdi mdi-venmo' ), 
	array( 'mdi mdi-verified' => 'mdi mdi-verified' ), 
	array( 'mdi mdi-vibrate' => 'mdi mdi-vibrate' ), 
	array( 'mdi mdi-video' => 'mdi mdi-video' ), 
	array( 'mdi mdi-video-3d' => 'mdi mdi-video-3d' ), 
	array( 'mdi mdi-video-4k-box' => 'mdi mdi-video-4k-box' ), 
	array( 'mdi mdi-video-input-antenna' => 'mdi mdi-video-input-antenna' ), 
	array( 'mdi mdi-video-input-component' => 'mdi mdi-video-input-component' ), 
	array( 'mdi mdi-video-input-hdmi' => 'mdi mdi-video-input-hdmi' ), 
	array( 'mdi mdi-video-input-svideo' => 'mdi mdi-video-input-svideo' ), 
	array( 'mdi mdi-video-off' => 'mdi mdi-video-off' ), 
	array( 'mdi mdi-video-switch' => 'mdi mdi-video-switch' ), 
	array( 'mdi mdi-view-agenda' => 'mdi mdi-view-agenda' ), 
	array( 'mdi mdi-view-array' => 'mdi mdi-view-array' ), 
	array( 'mdi mdi-view-carousel' => 'mdi mdi-view-carousel' ), 
	array( 'mdi mdi-view-column' => 'mdi mdi-view-column' ), 
	array( 'mdi mdi-view-dashboard' => 'mdi mdi-view-dashboard' ), 
	array( 'mdi mdi-view-dashboard-variant' => 'mdi mdi-view-dashboard-variant' ), 
	array( 'mdi mdi-view-day' => 'mdi mdi-view-day' ), 
	array( 'mdi mdi-view-grid' => 'mdi mdi-view-grid' ), 
	array( 'mdi mdi-view-headline' => 'mdi mdi-view-headline' ), 
	array( 'mdi mdi-view-list' => 'mdi mdi-view-list' ), 
	array( 'mdi mdi-view-module' => 'mdi mdi-view-module' ), 
	array( 'mdi mdi-view-parallel' => 'mdi mdi-view-parallel' ), 
	array( 'mdi mdi-view-quilt' => 'mdi mdi-view-quilt' ), 
	array( 'mdi mdi-view-sequential' => 'mdi mdi-view-sequential' ), 
	array( 'mdi mdi-view-stream' => 'mdi mdi-view-stream' ), 
	array( 'mdi mdi-view-week' => 'mdi mdi-view-week' ), 
	array( 'mdi mdi-vimeo' => 'mdi mdi-vimeo' ), 
	array( 'mdi mdi-violin' => 'mdi mdi-violin' ), 
	array( 'mdi mdi-virtual-reality' => 'mdi mdi-virtual-reality' ), 
	array( 'mdi mdi-visualstudio' => 'mdi mdi-visualstudio' ), 
	array( 'mdi mdi-vk' => 'mdi mdi-vk' ), 
	array( 'mdi mdi-vk-box' => 'mdi mdi-vk-box' ), 
	array( 'mdi mdi-vk-circle' => 'mdi mdi-vk-circle' ), 
	array( 'mdi mdi-vlc' => 'mdi mdi-vlc' ), 
	array( 'mdi mdi-voice' => 'mdi mdi-voice' ), 
	array( 'mdi mdi-voicemail' => 'mdi mdi-voicemail' ), 
	array( 'mdi mdi-volume-high' => 'mdi mdi-volume-high' ), 
	array( 'mdi mdi-volume-low' => 'mdi mdi-volume-low' ), 
	array( 'mdi mdi-volume-medium' => 'mdi mdi-volume-medium' ), 
	array( 'mdi mdi-volume-minus' => 'mdi mdi-volume-minus' ), 
	array( 'mdi mdi-volume-mute' => 'mdi mdi-volume-mute' ), 
	array( 'mdi mdi-volume-off' => 'mdi mdi-volume-off' ), 
	array( 'mdi mdi-volume-plus' => 'mdi mdi-volume-plus' ), 
	array( 'mdi mdi-vpn' => 'mdi mdi-vpn' ), 
	array( 'mdi mdi-vuejs' => 'mdi mdi-vuejs' ), 
	array( 'mdi mdi-walk' => 'mdi mdi-walk' ), 
	array( 'mdi mdi-wall' => 'mdi mdi-wall' ), 
	array( 'mdi mdi-wallet' => 'mdi mdi-wallet' ), 
	array( 'mdi mdi-wallet-giftcard' => 'mdi mdi-wallet-giftcard' ), 
	array( 'mdi mdi-wallet-membership' => 'mdi mdi-wallet-membership' ), 
	array( 'mdi mdi-wallet-travel' => 'mdi mdi-wallet-travel' ), 
	array( 'mdi mdi-wan' => 'mdi mdi-wan' ), 
	array( 'mdi mdi-washing-machine' => 'mdi mdi-washing-machine' ), 
	array( 'mdi mdi-watch' => 'mdi mdi-watch' ), 
	array( 'mdi mdi-watch-export' => 'mdi mdi-watch-export' ), 
	array( 'mdi mdi-watch-export-variant' => 'mdi mdi-watch-export-variant' ), 
	array( 'mdi mdi-watch-import' => 'mdi mdi-watch-import' ), 
	array( 'mdi mdi-watch-import-variant' => 'mdi mdi-watch-import-variant' ), 
	array( 'mdi mdi-watch-variant' => 'mdi mdi-watch-variant' ), 
	array( 'mdi mdi-watch-vibrate' => 'mdi mdi-watch-vibrate' ), 
	array( 'mdi mdi-water' => 'mdi mdi-water' ), 
	array( 'mdi mdi-water-off' => 'mdi mdi-water-off' ), 
	array( 'mdi mdi-water-percent' => 'mdi mdi-water-percent' ), 
	array( 'mdi mdi-water-pump' => 'mdi mdi-water-pump' ), 
	array( 'mdi mdi-watermark' => 'mdi mdi-watermark' ), 
	array( 'mdi mdi-waves' => 'mdi mdi-waves' ), 
	array( 'mdi mdi-weather-cloudy' => 'mdi mdi-weather-cloudy' ), 
	array( 'mdi mdi-weather-fog' => 'mdi mdi-weather-fog' ), 
	array( 'mdi mdi-weather-hail' => 'mdi mdi-weather-hail' ), 
	array( 'mdi mdi-weather-hurricane' => 'mdi mdi-weather-hurricane' ), 
	array( 'mdi mdi-weather-lightning' => 'mdi mdi-weather-lightning' ), 
	array( 'mdi mdi-weather-lightning-rainy' => 'mdi mdi-weather-lightning-rainy' ), 
	array( 'mdi mdi-weather-night' => 'mdi mdi-weather-night' ), 
	array( 'mdi mdi-weather-partlycloudy' => 'mdi mdi-weather-partlycloudy' ), 
	array( 'mdi mdi-weather-pouring' => 'mdi mdi-weather-pouring' ), 
	array( 'mdi mdi-weather-rainy' => 'mdi mdi-weather-rainy' ), 
	array( 'mdi mdi-weather-snowy' => 'mdi mdi-weather-snowy' ), 
	array( 'mdi mdi-weather-snowy-rainy' => 'mdi mdi-weather-snowy-rainy' ), 
	array( 'mdi mdi-weather-sunny' => 'mdi mdi-weather-sunny' ), 
	array( 'mdi mdi-weather-sunset' => 'mdi mdi-weather-sunset' ), 
	array( 'mdi mdi-weather-sunset-down' => 'mdi mdi-weather-sunset-down' ), 
	array( 'mdi mdi-weather-sunset-up' => 'mdi mdi-weather-sunset-up' ), 
	array( 'mdi mdi-weather-windy' => 'mdi mdi-weather-windy' ), 
	array( 'mdi mdi-weather-windy-variant' => 'mdi mdi-weather-windy-variant' ), 
	array( 'mdi mdi-web' => 'mdi mdi-web' ), 
	array( 'mdi mdi-webcam' => 'mdi mdi-webcam' ), 
	array( 'mdi mdi-webhook' => 'mdi mdi-webhook' ), 
	array( 'mdi mdi-webpack' => 'mdi mdi-webpack' ), 
	array( 'mdi mdi-wechat' => 'mdi mdi-wechat' ), 
	array( 'mdi mdi-weight' => 'mdi mdi-weight' ), 
	array( 'mdi mdi-weight-kilogram' => 'mdi mdi-weight-kilogram' ), 
	array( 'mdi mdi-whatsapp' => 'mdi mdi-whatsapp' ), 
	array( 'mdi mdi-wheelchair-accessibility' => 'mdi mdi-wheelchair-accessibility' ), 
	array( 'mdi mdi-white-balance-auto' => 'mdi mdi-white-balance-auto' ), 
	array( 'mdi mdi-white-balance-incandescent' => 'mdi mdi-white-balance-incandescent' ), 
	array( 'mdi mdi-white-balance-iridescent' => 'mdi mdi-white-balance-iridescent' ), 
	array( 'mdi mdi-white-balance-sunny' => 'mdi mdi-white-balance-sunny' ), 
	array( 'mdi mdi-widgets' => 'mdi mdi-widgets' ), 
	array( 'mdi mdi-wifi' => 'mdi mdi-wifi' ), 
	array( 'mdi mdi-wifi-off' => 'mdi mdi-wifi-off' ), 
	array( 'mdi mdi-wii' => 'mdi mdi-wii' ), 
	array( 'mdi mdi-wiiu' => 'mdi mdi-wiiu' ), 
	array( 'mdi mdi-wikipedia' => 'mdi mdi-wikipedia' ), 
	array( 'mdi mdi-window-close' => 'mdi mdi-window-close' ), 
	array( 'mdi mdi-window-closed' => 'mdi mdi-window-closed' ), 
	array( 'mdi mdi-window-maximize' => 'mdi mdi-window-maximize' ), 
	array( 'mdi mdi-window-minimize' => 'mdi mdi-window-minimize' ), 
	array( 'mdi mdi-window-open' => 'mdi mdi-window-open' ), 
	array( 'mdi mdi-window-restore' => 'mdi mdi-window-restore' ), 
	array( 'mdi mdi-windows' => 'mdi mdi-windows' ), 
	array( 'mdi mdi-wordpress' => 'mdi mdi-wordpress' ), 
	array( 'mdi mdi-worker' => 'mdi mdi-worker' ), 
	array( 'mdi mdi-wrap' => 'mdi mdi-wrap' ), 
	array( 'mdi mdi-wrench' => 'mdi mdi-wrench' ), 
	array( 'mdi mdi-wunderlist' => 'mdi mdi-wunderlist' ), 
	array( 'mdi mdi-xamarin' => 'mdi mdi-xamarin' ), 
	array( 'mdi mdi-xamarin-outline' => 'mdi mdi-xamarin-outline' ), 
	array( 'mdi mdi-xaml' => 'mdi mdi-xaml' ), 
	array( 'mdi mdi-xbox' => 'mdi mdi-xbox' ), 
	array( 'mdi mdi-xbox-controller' => 'mdi mdi-xbox-controller' ), 
	array( 'mdi mdi-xbox-controller-battery-alert' => 'mdi mdi-xbox-controller-battery-alert' ), 
	array( 'mdi mdi-xbox-controller-battery-empty' => 'mdi mdi-xbox-controller-battery-empty' ), 
	array( 'mdi mdi-xbox-controller-battery-full' => 'mdi mdi-xbox-controller-battery-full' ), 
	array( 'mdi mdi-xbox-controller-battery-low' => 'mdi mdi-xbox-controller-battery-low' ), 
	array( 'mdi mdi-xbox-controller-battery-medium' => 'mdi mdi-xbox-controller-battery-medium' ), 
	array( 'mdi mdi-xbox-controller-battery-unknown' => 'mdi mdi-xbox-controller-battery-unknown' ), 
	array( 'mdi mdi-xbox-controller-off' => 'mdi mdi-xbox-controller-off' ), 
	array( 'mdi mdi-xda' => 'mdi mdi-xda' ), 
	array( 'mdi mdi-xing' => 'mdi mdi-xing' ), 
	array( 'mdi mdi-xing-box' => 'mdi mdi-xing-box' ), 
	array( 'mdi mdi-xing-circle' => 'mdi mdi-xing-circle' ), 
	array( 'mdi mdi-xml' => 'mdi mdi-xml' ), 
	array( 'mdi mdi-xmpp' => 'mdi mdi-xmpp' ), 
	array( 'mdi mdi-yammer' => 'mdi mdi-yammer' ), 
	array( 'mdi mdi-yeast' => 'mdi mdi-yeast' ), 
	array( 'mdi mdi-yelp' => 'mdi mdi-yelp' ), 
	array( 'mdi mdi-yin-yang' => 'mdi mdi-yin-yang' ), 
	array( 'mdi mdi-youtube-creator-studio' => 'mdi mdi-youtube-creator-studio' ), 
	array( 'mdi mdi-youtube-gaming' => 'mdi mdi-youtube-gaming' ), 
	array( 'mdi mdi-youtube-play' => 'mdi mdi-youtube-play' ), 
	array( 'mdi mdi-youtube-tv' => 'mdi mdi-youtube-tv' ), 
	array( 'mdi mdi-zip-box' => 'mdi mdi-zip-box' ), 
	array( 'mdi mdi-blank' => 'mdi mdi-blank' ),
		
	);

	return array_merge( $icons, $materialdesign );
}