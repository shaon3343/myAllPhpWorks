<?php

$dropdown = '<span class="curr_value">' . htmlspecialchars($_REQUEST['curr_value']) . '</span> <a href="browse_foreigners.php' . PMA_generate_common_url($_url_params) . '"'
                    . ' target="_blank" class="browse_foreign" '
                    .'>' . __('Browse foreign values') . '</a>';
	echo $dropdown;
?>
