<?php
	function cgc_if($main_field, $field) {
		return !empty($main_field) ? $main_field : $field ;
	}