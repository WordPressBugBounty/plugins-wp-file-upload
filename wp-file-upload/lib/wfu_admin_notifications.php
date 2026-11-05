<?php

/**
 * Notifications Page in Dashboard Area of Plugin
 *
 * This file contains functions related to Notifications page of plugin's
 * Dashboard area. This page shows notifications that must be reviewed by the
 * admin.
 *
 * @link /lib/wfu_admin_notifications.php
 *
 * @package Iptanus File Upload Plugin
 * @subpackage Core Components
 * @since 4.20.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Display the List of Notifications.
 *
 * This function displays the list of notifications.
 *
 * @since 4.20.0
 *
 * @redeclarable
 *
 * @param string $sort The type of sorting to apply.
 * @param bool $only_table_rows Optional. Return only the HTML code of the table
 *        rows.
 * @param string $filter Optional. The filter to apply to the list.
 *
 * @return string The HTML output of the list of notifications.
 */
function wfu_manage_notifications($sort, $page = 1, $only_table_rows = false, $filter = "all") {
	$a = func_get_args(); $a = WFU_FUNCTION_HOOK(__FUNCTION__, $a, $out); if (isset($out['vars'])) foreach($out['vars'] as $p => $v) $$p = $v; switch($a) { case 'R': return $out['output']; break; case 'D': die($out['output']); }
	global $wpdb;
	
	$siteurl = site_url();
	$plugin_options = wfu_decode_plugin_options(get_option( "wordpress_file_upload_options" ));
	$admin_nonce = wp_create_nonce('wfu_admin_nonce');

	if ( !current_user_can( 'manage_options' ) ) return;
	
	//initialize filters
	$filters_arr = explode("_", $filter);
	$filters = array(
		"all" => array(
			"code" => "all",
			"type" => "all",
			"title" => __('All', 'wp-file-upload'),
			"count" => 0,
			"checked" => ( $filter == "all" )
		),
		"read" => array(
			"code" => "read",
			"type" => "status",
			"title" => __('Read', 'wp-file-upload'),
			"count" => 0,
			"checked" => ( $filter == "all" || in_array('read', $filters_arr) )
		),
		"unread" => array(
			"code" => "unread",
			"type" => "status",
			"title" => __('Unread', 'wp-file-upload'),
			"count" => 0,
			"checked" => ( $filter == "all" || in_array('unread', $filters_arr) )
		),
		"info" => array(
			"code" => "info",
			"type" => "category",
			"title" => __('Info', 'wp-file-upload'),
			"count" => 0,
			"checked" => ( $filter == "all" || in_array('info', $filters_arr) )
		),
		"warning" => array(
			"code" => "warning",
			"type" => "category",
			"title" => __('Warning', 'wp-file-upload'),
			"count" => 0,
			"checked" => ( $filter == "all" || in_array('warning', $filters_arr) )
		),
		"error" => array(
			"code" => "error",
			"type" => "category",
			"title" => __('Error', 'wp-file-upload'),
			"count" => 0,
			"checked" => ( $filter == "all" || in_array('error', $filters_arr) )
		),
	);
	//split filters per type
	$filters_per_type = array();
	foreach ( $filters as $item ) {
		if ( $item['checked'] ) {
			$type = $item['type'];
			if ( !isset($filters_per_type[$type]) ) $filters_per_type[$type] = array();
			array_push($filters_per_type[$type], $item['code']);
		}
	}
	//An unspecified filter type (a status-only or category-only filter, or a
	//malformed filter value) leaves its bucket unset. Default it to the full set
	//of codes for that type, so the meta_query clauses below never operate on a
	//null value (a fatal TypeError on PHP 8+) and an unconstrained type matches
	//every notification instead of none.
	if ( empty($filters_per_type['status']) ) $filters_per_type['status'] = array('read', 'unread');
	if ( empty($filters_per_type['category']) ) $filters_per_type['category'] = array('info', 'warning', 'error');

	//define referer (with sort data) to point to this url for use by the
	//elements
	$referer = wfu_notifications_url($sort, $page, $filter, $admin_nonce);
	$referer_code = wfu_safe_store_filepath($referer);

	//get all notifications count from database and update filters
	$args = array(
		'type'  => 'wfunotification',
		'status'  => 'approve',
		'count' => true
		);
	//apply filters (shared with the listing query and the across-all-pages
	//bulk operations, see wfu_notifications_filter_meta_query)
	$meta_query = wfu_notifications_filter_meta_query($filter);
	if ( $meta_query !== null ) $args['meta_query'] = $meta_query;
	$notifications_count = get_comments( $args );
	$filters['all']['count'] = $notifications_count;
	//get unread notifications count from database and update filters
	$args = array(
		'type'  => 'wfunotification',
		'status'  => 'approve',
		'count' => true
		);
	//apply filters
	if ( $filter == 'all' ) {
		$args['meta_query'] = array(
			'status_clause' => array(
				'key' => 'status',
				'value' => 'unread'
			)
		);
	}
	else {
		$args['meta_query'] = array(
			'relation' => 'AND',
			'status_clause' => array(
				'key' => 'status',
				'value' => array_intersect($filters_per_type['status'], array('unread')) + array(''),
				'compare' => 'IN'
			),
			'category_clause' => array(
				'key' => 'category',
				'value' => $filters_per_type['category'] + array(''),
				'compare' => 'IN'
			),
		);
	}
	$filters['unread']['count'] = get_comments( $args );
	$filters['read']['count'] = $notifications_count - $filters['unread']['count'];
	//get error notifications count from database and update filters
	$args = array(
		'type'  => 'wfunotification',
		'status'  => 'approve',
		'count' => true
		);
	//apply filters
	if ( $filter == 'all' ) {
		$args['meta_query'] = array(
			'status_clause' => array(
				'key' => 'category',
				'value' => 'error',
			)
		);
	}
	else {
		$args['meta_query'] = array(
			'relation' => 'AND',
			'status_clause' => array(
				'key' => 'status',
				'value' => $filters_per_type['status'] + array(''),
				'compare' => 'IN'
			),
			'category_clause' => array(
				'key' => 'category',
				'value' => array_intersect($filters_per_type['category'], array('error')) + array(''),
				'compare' => 'IN'
			),
		);
	}
	$filters['error']['count'] = get_comments( $args );
	//get warning notifications count from database and update filters
	$args = array(
		'type'  => 'wfunotification',
		'status'  => 'approve',
		'count' => true
		);
	//apply filters
	if ( $filter == 'all' ) {
		$args['meta_query'] = array(
			'status_clause' => array(
				'key' => 'category',
				'value' => 'warning',
			)
		);
	}
	else {
		$args['meta_query'] = array(
			'relation' => 'AND',
			'status_clause' => array(
				'key' => 'status',
				'value' => $filters_per_type['status'] + array(''),
				'compare' => 'IN'
			),
			'category_clause' => array(
				'key' => 'category',
				'value' => array_intersect($filters_per_type['category'], array('warning')) + array(''),
				'compare' => 'IN'
			),
		);
	}
	$filters['warning']['count'] = get_comments( $args );
	$filters['info']['count'] = $notifications_count - $filters['error']['count'] - $filters['warning']['count'];
	
	//get paginated and ordered notifications from database; we do not include
	//deleted notifications; deleted notifications have status 'hold'
	$args = array(
		'type'  => 'wfunotification',
		'status'  => 'approve'
		);
	//apply pagination
	$maxrows = (int)WFU_VAR("WFU_ADMINNOTIFICATIONS_TABLE_MAXROWS");
	if ( $maxrows > 0 ) {
		$pages = ceil($notifications_count / $maxrows);
		$args['number'] = $maxrows;
		$args['paged'] = $page;
	}
	//apply filters (shared with the count query and the across-all-pages bulk
	//operations, see wfu_notifications_filter_meta_query)
	$meta_query = wfu_notifications_filter_meta_query($filter);
	if ( $meta_query !== null ) $args['meta_query'] = $meta_query;
	//apply sorting
	if ( $sort == "" ) $sort = '-date';
	$notfsort = substr($sort, -4);
	switch ( $notfsort ) {
		case "name": $args['orderby'] = "comment_content"; break;
		case "date": $args['orderby'] = "comment_date"; break;
		case "stat": $args['meta_key'] = 'status'; $args['orderby'] = 'meta_value'; break;
		case "catg": $args['meta_key'] = 'category'; $args['orderby'] = 'meta_value'; break;
	}
	if ( substr($sort, 0, 1) == '-' ) $order = SORT_DESC;
	else $order = SORT_ASC;
	$args['order'] = ( $order == SORT_DESC ? 'DESC' : 'ASC' );
	
	$notifications = get_comments( $args );
	
	$notificationslist = array();
	foreach ( $notifications as $notification ) {
		$notf = array(
			'id' => $notification->comment_ID,
			'content' => $notification->comment_content,
			'date' => $notification->comment_date,
			'status' => get_comment_meta($notification->comment_ID, 'status', true),
			'category' => get_comment_meta($notification->comment_ID, 'category', true),
			'brief' => get_comment_meta($notification->comment_ID, 'brief', true),
			'action' => get_comment_meta($notification->comment_ID, 'action', true)
		);
		array_push($notificationslist, $notf);
	}
	//clean filters list
	foreach ( $filters as $key => $item ) {
		if ( $item["count"] == 0 ) unset($filters[$key]);
	}
	
	$echo_str = "";
	
	if ( !$only_table_rows ) {
		$echo_str .= "\n".'<div class="wrap">';
		$echo_str .= wfu_generate_dashboard_menu_title("\n\t");
		$echo_str .= "\n\t".'<div style="margin-top:20px;">';
		$echo_str .= wfu_generate_dashboard_menu("\n\t\t", "Notifications");
		$echo_str .= "\n\t".'<h3 style="margin-bottom: 10px;">'.esc_html__('Notifications', 'wp-file-upload').'</h3>';
		$echo_str .= "\n\t".'<div style="position:relative;">';
		$echo_str .= "\n\t\t".'<input id="wfu_notifications_cursort" type="hidden" value="'.esc_attr($sort).'" />';
		$echo_str .= "\n\t\t".'<input id="wfu_notifications_filter" type="hidden" value="'.esc_attr($filter).'" />';
		$echo_str .= wfu_add_loading_overlay("\n\t\t", "notifications");
		$notifications_nonce = wp_create_nonce( 'wfu-adminnotifications-page' );
		$echo_str .= "\n\t\t".'<div class="wfu_notifications_header" style="width: 100%;">';
		$bulkactions = array(
			array( "name" => "mark_read", "title" => __('Mark Read', 'wp-file-upload') ),
			array( "name" => "mark_unread", "title" => __('Mark Unread', 'wp-file-upload') ),
			array( "name" => "delete", "title" => __('Delete', 'wp-file-upload') ),
		);
		$echo_str .= wfu_add_bulkactions_header("\n\t\t\t", "notifications", $bulkactions);
		$echo_str .= wfu_add_multifilter_header("\n\t\t\t", "notifications", $filters, false);
		if ( $maxrows > 0 ) {
			$echo_str .= wfu_add_pagination_header("\n\t\t\t", "notifications", $page, $pages, $notifications_nonce);
		}
		$echo_str .= "\n\t\t\t".'<input id="wfu_notifications_action_url" type="hidden" value="'.esc_url($siteurl.'/wp-admin/options-general.php?page=wordpress_file_upload').'" />';
		$echo_str .= "\n\t\t\t".'<input id="wfu_notifications_referer" type="hidden" value="'.esc_attr($referer_code).'" />';
		$echo_str .= "\n\t\t\t".'<input id="wfu_notifications_nonce" type="hidden" value="'.esc_attr($notifications_nonce).'" />';
		$echo_str .= "\n\t\t\t".'<input id="wfu_admin_nonce" type="hidden" value="'.$admin_nonce.'" />';
		$echo_str .= "\n\t\t\t".'<input id="wfu_notifications_total_count" type="hidden" value="'.esc_attr($notifications_count).'" />';
		$echo_str .= "\n\t\t".'</div>';
		//"select all across pages" notice; populated and toggled by JS when the
		//header checkbox selects every visible row and more pages exist
		$echo_str .= "\n\t\t".'<div id="wfu_notifications_selectall_notice" class="wfu-select-all-pages" style="display:none;"></div>';
		$echo_str .= "\n\t\t".'<table id="wfu_notifications_table" class="wfu-notifications wp-list-table widefat fixed striped">';
		$echo_str .= "\n\t\t\t".'<thead>';
		$echo_str .= "\n\t\t\t\t".'<tr>';
		$echo_str .= "\n\t\t\t\t\t".'<td width="5%" class="manage-column check-column">';
		$echo_str .= "\n\t\t\t\t\t\t".'<input id="wfu_select_all_visible" type="checkbox" onchange="wfu_notifications_select_all_visible_changed()" />';
		$echo_str .= "\n\t\t\t\t\t".'</td>';
		$echo_str .= "\n\t\t\t\t\t".'<th scope="col" width="50%" class="manage-column column-primary">';
		$sort_param = ( $notfsort == 'name' ? ( $order == SORT_ASC ? '-name' : 'name' ) : 'name' );
		$echo_str .= "\n\t\t\t\t\t\t".'<a href="'.esc_url(wfu_notifications_url($sort_param, $page, $filter, $admin_nonce)).'">'.esc_html__('Description', 'wp-file-upload').( $notfsort == 'name' ? ( $order == SORT_ASC ? ' &uarr;' : ' &darr;' ) : '' ).'</a>';
		$echo_str .= "\n\t\t\t\t\t".'</th>';
		$echo_str .= "\n\t\t\t\t\t".'<th scope="col" width="15%" class="manage-column">';
		$sort_param = ( $notfsort == 'date' ? ( $order == SORT_ASC ? '-date' : 'date' ) : 'date' );
		$echo_str .= "\n\t\t\t\t\t\t".'<a href="'.esc_url(wfu_notifications_url($sort_param, $page, $filter, $admin_nonce)).'">'.esc_html__('Date', 'wp-file-upload').( $notfsort == 'date' ? ( $order == SORT_ASC ? ' &uarr;' : ' &darr;' ) : '' ).'</a>';
		$echo_str .= "\n\t\t\t\t\t".'</th>';
		$echo_str .= "\n\t\t\t\t\t".'<th scope="col" width="10%" class="manage-column">';
		$sort_param = ( $notfsort == 'catg' ? ( $order == SORT_ASC ? '-catg' : 'catg' ) : 'catg' );
		$echo_str .= "\n\t\t\t\t\t\t".'<a href="'.esc_url(wfu_notifications_url($sort_param, $page, $filter, $admin_nonce)).'">'.esc_html__('Category', 'wp-file-upload').( $notfsort == 'catg' ? ( $order == SORT_ASC ? ' &uarr;' : ' &darr;' ) : '' ).'</a>';
		$echo_str .= "\n\t\t\t\t\t".'</th>';
		$echo_str .= "\n\t\t\t\t\t".'<th scope="col" width="10%" class="manage-column">';
		$sort_param = ( $notfsort == 'stat' ? ( $order == SORT_ASC ? '-stat' : 'stat' ) : 'stat' );
		$echo_str .= "\n\t\t\t\t\t\t".'<a href="'.esc_url(wfu_notifications_url($sort_param, $page, $filter, $admin_nonce)).'">'.esc_html__('Status', 'wp-file-upload').( $notfsort == 'stat' ? ( $order == SORT_ASC ? ' &uarr;' : ' &darr;' ) : '' ).'</a>';
		$echo_str .= "\n\t\t\t\t\t".'</th>';
		$echo_str .= "\n\t\t\t\t\t".'<th scope="col" width="10%" class="manage-column">';
		$echo_str .= "\n\t\t\t\t\t\t".'<label>'.esc_html__('Actions', 'wp-file-upload').'</label>';
		$echo_str .= "\n\t\t\t\t\t".'</th>';
		$echo_str .= "\n\t\t\t\t".'</tr>';
		$echo_str .= "\n\t\t\t".'</thead>';
		$echo_str .= "\n\t\t\t".'<tbody>';
	}

	if ( $only_table_rows ) $echo_str .= "\n\t\t\t\t".'<!-- wfu_notifications_referer['.$referer_code.'] -->';
	//show contained notifications
	$nopagecode = wfu_safe_store_browser_params('no_referer');
	//$defactions = wfu_init_notification_actions();
	$ii = 1;
	foreach ( $notificationslist as $notf ) {
		$key = $notf['id'];
		$description = esc_html($notf['content']);
		if ( $notf['brief'] != '' )
			$description = '<span class="wfu-notfs-description-main">'.esc_html($notf['brief']).'</span><span class="wfu-notfs-description-sub">'.$description.'</span>';
		$action = '';
		if ( $notf['action'] != null ) {
			$action = '<a href="'.esc_url($notf['action']['link']).'">'.esc_html($notf['action']['title']).'</a>';
		}
		$echo_str .= "\n\t\t\t\t".'<tr class="wfu-notifications-row wfu-'.esc_attr($notf['status']).'" onmouseover="var actions=document.getElementsByName(\'wfu_notf_actions\'); for (var i=0; i<actions.length; i++) {actions[i].style.visibility=\'hidden\';} document.getElementById(\'wfu_notf_actions_'.$ii.'\').style.visibility=\'visible\'" onmouseout="var actions=document.getElementsByName(\'wfu_notf_actions\'); for (var i=0; i<actions.length; i++) {actions[i].style.visibility=\'hidden\';}">';
		$echo_str .= "\n\t\t\t\t\t".'<th scope="row" class="check-column">';
		$echo_str .= "\n\t\t\t\t\t\t".'<input name="'.esc_attr($key).'" class="wfu_selectors wfu_selcode_'.esc_attr($key).'" type="checkbox" onclick="wfu_notifications_selector_changed()" />';
		$echo_str .= "\n\t\t\t\t\t".'</th>';
		$echo_str .= "\n\t\t\t\t\t".'<td data-colname="'.esc_html__('Description', 'wp-file-upload').'" class="column-primary">';
		$echo_str .= "\n\t\t\t\t\t\t".'<span>'.$description.'</span>';
		$echo_str .= "\n\t\t\t\t\t\t".'<div id="wfu_notf_actions_'.$ii.'" name="wfu_notf_actions" style="visibility:hidden;">';
		$echo_str .= "\n\t\t\t\t\t\t\t".'<div id="wfu_notf_mark_action_'.$ii.'">';
		$echo_str .= "\n\t\t\t\t\t\t\t\t".'<span>';
		$echo_str .= "\n\t\t\t\t\t\t\t\t\t".'<a href="'.esc_url($siteurl.'/wp-admin/options-general.php?page=wordpress_file_upload&action=mark_notification_'.( $notf['status'] == 'read' ? 'unread' : 'read' ).'&key='.$key.'&sort='.$sort.'&pageid='.$page.'&filter='.$filter.'&c='.$admin_nonce).'" title="'.( $notf['status'] == 'read' ? esc_html__('Mark this notification unread', 'wp-file-upload') : esc_html__('Mark this notification read', 'wp-file-upload') ).'">'.( $notf['status'] == 'read' ? esc_html__('Mark Unread', 'wp-file-upload') : esc_html__('Mark Read', 'wp-file-upload') ).'</a>';
		$echo_str .= "\n\t\t\t\t\t\t\t\t\t".' | ';
		$echo_str .= "\n\t\t\t\t\t\t\t\t".'</span>';
		$echo_str .= "\n\t\t\t\t\t\t\t\t".'<span>';
		$echo_str .= "\n\t\t\t\t\t\t\t\t\t".'<a href="'.esc_url($siteurl.'/wp-admin/options-general.php?page=wordpress_file_upload&action=delete_notification&key='.$key.'&sort='.$sort.'&pageid='.$page.'&filter='.$filter.'&c='.$admin_nonce).'" title="'.esc_html__('Delete this notification', 'wp-file-upload').'">'.esc_html__('Delete', 'wp-file-upload').'</a>';
		$echo_str .= "\n\t\t\t\t\t\t\t\t".'</span>';
		$echo_str .= "\n\t\t\t\t\t\t\t".'</div>';
		$echo_str .= "\n\t\t\t\t\t\t".'</div>';
		$echo_str .= "\n\t\t\t\t\t\t".'<button type="button" class="toggle-row"><span class="screen-reader-text">'.esc_html__('Show more details', 'wp-file-upload').'</span></button>';
		$echo_str .= "\n\t\t\t\t\t".'</td>';
		$echo_str .= "\n\t\t\t\t\t".'<td data-colname="'.esc_html__('Date', 'wp-file-upload').'">'.esc_html($notf['date']).'</td>';
		$echo_str .= "\n\t\t\t\t\t".'<td data-colname="'.esc_html__('Category', 'wp-file-upload').'">'.esc_html($filters[$notf['category']]['title']).'</td>';
		$echo_str .= "\n\t\t\t\t\t".'<td data-colname="'.esc_html__('Status', 'wp-file-upload').'">'.esc_html($filters[$notf['status']]['title']).'</td>';
		$echo_str .= "\n\t\t\t\t\t".'<td data-colname="'.esc_html__('Actions', 'wp-file-upload').'">'.$action.'</td>';
		$echo_str .= "\n\t\t\t\t".'</tr>';
		$ii ++;
	}
	
	if ( !$only_table_rows ) {
		$echo_str .= "\n\t\t\t".'</tbody>';
		$echo_str .= "\n\t\t".'</table>';
		$echo_str .= "\n\t".'</div>';
		$echo_str .= "\n".'</div>';
	}

	return $echo_str;
}

/**
 * Provides Notification Page URL.
 *
 * This function provides this page's URL, including ordering, pagination and
 * filtering.
 *
 * @since 4.20.0
 *
 * @return string The URL of this page.
 */
function wfu_notifications_url($sort, $page, $filter, $nonce) {
	$siteurl = site_url();
	return $siteurl.'/wp-admin/options-general.php?page=wordpress_file_upload&action=plugin_notifications&sort='.$sort.'&pageid='.$page.'&filter='.$filter.'&c='.$nonce;
}

/**
 * Build the Notifications Filter meta_query.
 *
 * Translates a notifications page $filter string (e.g. "all", "unread" or
 * "read_error") into the get_comments() meta_query that selects every
 * notification matching that filter. This is the same clause the page's own
 * listing query uses, so keeping it in one function lets the listing and the
 * across-all-pages bulk operations share a single definition: the set a user
 * deletes or marks "across all pages" is exactly the set the list would show
 * under the active filter.
 *
 * A status-only or category-only (or malformed) filter leaves one type
 * unconstrained; that type defaults to its full set of codes so the clause
 * never runs against a null value (a fatal TypeError on PHP 8+) and matches
 * every notification of that type instead of none.
 *
 * @since 5.2.3
 *
 * @param string $filter The filter string.
 *
 * @return array|null The meta_query array, or null for the "all" filter (no
 *         constraint).
 */
function wfu_notifications_filter_meta_query($filter) {
	if ( $filter == 'all' ) return null;
	$filters_arr = explode("_", $filter);
	$status = array_values(array_intersect(array('read', 'unread'), $filters_arr));
	$category = array_values(array_intersect(array('info', 'warning', 'error'), $filters_arr));
	if ( empty($status) ) $status = array('read', 'unread');
	if ( empty($category) ) $category = array('info', 'warning', 'error');
	return array(
		'relation' => 'AND',
		'status_clause' => array(
			'key' => 'status',
			'value' => $status + array(''),
			'compare' => 'IN'
		),
		'category_clause' => array(
			'key' => 'category',
			'value' => $category + array(''),
			'compare' => 'IN'
		),
	);
}

/**
 * Get the IDs of all Notifications matching a Filter.
 *
 * Returns the comment IDs of every live (approved) notification matching the
 * given filter, across all pages - the full set behind the page's "select all
 * notifications" action. Uses the shared filter clause from
 * wfu_notifications_filter_meta_query() so the result matches the listing.
 *
 * @since 5.2.3
 *
 * @param string $filter The filter string.
 *
 * @return array A list of notification (comment) IDs.
 */
function wfu_get_all_notification_ids($filter) {
	$args = array(
		'type'   => 'wfunotification',
		'status' => 'approve',
		'fields' => 'ids'
	);
	$meta_query = wfu_notifications_filter_meta_query($filter);
	if ( $meta_query !== null ) $args['meta_query'] = $meta_query;
	return get_comments( $args );
}

/**
 * Mark Notifications Read/Unread.
 *
 * This function marks a list of notifications read or unread.
 *
 * @since 4.20.0
 *
 * @param array $keys A list of notification keys.
 * @param string $status The new status. It can be 'read' or 'unread'.
 */
function wfu_mark_notifications($keys, $status) {
	foreach ( $keys as $key ) {
		update_comment_meta( $key, 'status', $status );
		update_comment_meta( $key, 'last_update', time() );
	}
}

/**
 * Delete Notifications.
 *
 * This function deletes a list of notifications. It does not actually remove
 * them from the database, it changes their status to 'hold'.
 *
 * @since 4.20.0
 *
 * @param array $keys A list of notification keys.
 */
function wfu_delete_notifications($keys) {
	foreach ( $keys as $key ) {
		$commentarr = array(
			'comment_ID' => $key,
			'comment_approved' => 0
		);
		wp_update_comment( $commentarr );
	}
}

/**
 * Mark All Notifications Read/Unread (across all pages).
 *
 * This function marks every notification matching the given filter read or
 * unread, not only the ones on the visible page. It resolves the matching set
 * through the shared filter clause and reuses wfu_mark_notifications().
 *
 * @since 5.2.3
 *
 * @param string $filter The active filter string.
 * @param string $status The new status. It can be 'read' or 'unread'.
 *
 * @return int The number of notifications marked.
 */
function wfu_mark_all_notifications($filter, $status) {
	$ids = wfu_get_all_notification_ids($filter);
	if ( count($ids) > 0 ) wfu_mark_notifications($ids, $status);
	return count($ids);
}

/**
 * Delete All Notifications (across all pages).
 *
 * This function deletes every notification matching the given filter, across
 * all pages. Unlike wfu_delete_notifications() (a soft delete that only hides
 * rows by moving them to the 'hold' status), this HARD-deletes the matching
 * notifications - removing both the comment and its comment meta - so the
 * database space is actually reclaimed. It is meant for clearing large
 * accumulations that the per-page bulk delete cannot reach. It uses the same
 * two-statement pattern as the plugin purge (wfu_purge_data), scoped to the
 * matching IDs.
 *
 * @since 5.2.3
 *
 * @param string $filter The active filter string.
 *
 * @return int The number of notifications deleted.
 */
function wfu_delete_all_notifications($filter) {
	global $wpdb;
	$ids = wfu_get_all_notification_ids($filter);
	if ( count($ids) == 0 ) return 0;
	//sanitize to integers and build the IN list
	$ids = array_map('intval', $ids);
	$in = implode(",", $ids);
	$wpdb->query( "DELETE FROM ".$wpdb->prefix."commentmeta WHERE comment_id IN (".$in.")" );
	$wpdb->query( "DELETE FROM ".$wpdb->prefix."comments WHERE comment_ID IN (".$in.") AND comment_type = 'wfunotification'" );
	//the raw deletes bypass WordPress' comment cache; clear it (this also bumps
	//the comment-query 'last_changed' key) so get_comments() does not return the
	//deleted rows when the page is re-rendered in this same request
	clean_comment_cache( $ids );
	return count($ids);
}

/**
 * Display Unread Error and Warning Notifications in Admin Bar.
 *
 * This function displays a warning in Admin Bar if there are unread error or
 * warning admin notifications.
 *
 * @since 4.20.0
 */
function wfu_admin_toolbar_admin_notifications() {
	global $wp_admin_bar;
	$is_admin = current_user_can( 'manage_options' );
	
	if ( $is_admin && WFU_VAR("WFU_NOTIFICATIONS_BARMENU") == "true" ) {
		//get the number of unread error or warning notifications
		$unread_admin_notification_stats = wfu_get_unread_admin_notification_stats();
		$mark = '';
		$title = '';
		if ( $unread_admin_notification_stats['single'] != null ) {
			$mark = $unread_admin_notification_stats['single']['category'];
			$description = $unread_admin_notification_stats['single']['brief'];
			if ( $description == '' ) $description = $unread_admin_notification_stats['single']['content'];
			$title = $description . ' '.__('Click to review it and take actions.', 'wp-file-upload');
		}
		else {
			if ( $unread_admin_notification_stats['error'] > 0 ) $mark = 'error';
			elseif ( $unread_admin_notification_stats['warning'] > 0 ) $mark = 'warning';
			$title = sprintf(__('You have unread upload %s notifications. Click to review them and take actions.', 'wp-file-upload'), $mark);
		}

		$args = array(
			'id'     => 'wfu_notifications',
			'title'  => '<span class="ab-icon wfu-mark-'.esc_attr($mark).'"></span><span class="screen-reader-text">'.esc_html($title).'</span>',
			'href'   => admin_url( 'options-general.php?page=wordpress_file_upload&action=plugin_notifications&c='.wp_create_nonce('wfu_admin_nonce') ),
			'group'  => false,
			'meta'   => array(
				'title'    => $title,
				'class'    => ( $mark == '' ? 'hidden' : '' )
			),
		);
		$wp_admin_bar->add_menu( $args );
	}
}
