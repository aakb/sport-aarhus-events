<?php

/**
 * Implementation of hook_ctools_plugin_api().
 */
function sportaa_nodepanels_events_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "page_manager" && $api == "pages_default") {
    return array("version" => 1);
  }
}
