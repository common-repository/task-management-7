<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Task Management Menu Link Admin Handler
 */
function task_management_7() {
	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( esc_html__( 'You do not have sufficient permissions to access this page.' ) );
	}
	$nonce = $_REQUEST['_wpnonce'];
	// save and update options.
	if ( isset( $_POST['update'] ) && ! empty( $nonce ) ) {
		// Ensure we have and can verify our nonce. IF not, return early
		if ( ! wp_verify_nonce( $nonce, '_wpnonce' ) ) {
			return false; // Get out of here, the nonce is rotten!
		}
		$options['base_url'] = ( ! empty( $_POST['base_url'] ) ) ? sanitize_text_field( wp_unslash( $_POST['base_url'] ) ) : '';
		if ( empty( $options['base_url'] ) ) {
			$options['base_url'] = '';
		} else {
			$options['base_url'] = rtrim( $options['base_url'], '/' );
		}
		$options['access_token'] = ( ! empty( $_POST['access_token'] ) ) ? sanitize_text_field( wp_unslash( $_POST['access_token'] ) ) : '';
		if ( empty( $options['access_token'] ) ) {
			$options['access_token'] = '';
		}
		$options['board_name'] = ( ! empty( $_POST['board_name'] ) ) ? sanitize_text_field( wp_unslash( $_POST['board_name'] ) ) : '';
		if ( empty( $options['board_name'] ) ) {
			$options['board_name'] = '';
		}
		$options['list_name'] = ( ! empty( $_POST['list_name'] ) ) ? sanitize_text_field( wp_unslash( $_POST['list_name'] ) ) : '';
		if ( empty( $options['list_name'] ) ) {
			$options['list_name'] = '';
		}
		update_option( 'cf7tmrb_options', $options );
		if ( ! empty( $options['base_url'] ) && ! empty( $options['access_token'] ) && ! empty( $options['board_name'] ) && ! empty( $options['list_name'] ) ) {
			$configuration = new Swagger\Client\Configuration();
			$configuration->setHost( $options['base_url'] . '/api/v1' );
			$api_instance = new Swagger\Client\Api\BoardsApi(
				// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
				// This is optional, `GuzzleHttp\Client` will be used as default.
				new GuzzleHttp\Client(),
				$configuration
			);
			$token = $options['access_token']; // string | OAuth token .
			$body = new \Swagger\Client\Model\Body2(
				array(
					'board_visibility' => 0,
					'name' => $options['board_name'],
					'group_id' => 0,
				)
			); // \Swagger\Client\Model\Body2 | Created Board.
			try {
				$result = $api_instance->v1BoardsJsonPost( $token, $body );
				if ( ! empty( $result ) ) {
					$board['id'] = sanitize_text_field( $result['id'] );
					update_option( 'cf7tmrb_board_id', $board );
					$error = 0;
				}
			} catch ( Exception $e ) {
				// echo 'Exception when calling BoardsApi->v1BoardsJsonPost: ', $e->getMessage(), PHP_EOL.
				$error = 1;
			}
			if ( ! empty( $result ) ) {
				$api_instance = new Swagger\Client\Api\ListsApi(
					// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
					// This is optional, `GuzzleHttp\Client` will be used as default.
					new GuzzleHttp\Client(),
					$configuration
				);
				$token = $options['access_token']; // string | OAuth token .
				$board_id = sanitize_text_field( $result['id'] ); // int | Selected board ID .
				$body = new \Swagger\Client\Model\Body9(
					array(
						'name' => $options['list_name'],
						'board_id' => $board_id,
						'is_archived' => false,
						'position' => 0,
						'uuid' => number_format( microtime( true ) * 1000, 0, '.', '' ),
					)
				); // \Swagger\Client\Model\Body9 | Created list object .
				try {
					$result_list = $api_instance->v1BoardsBoardIdListsJsonPost( $token, $board_id, $body );
					$list['id'] = sanitize_text_field( $result_list['id'] );
					update_option( 'cf7tmrb_list_id', $list );
					$error = 0;
				} catch ( Exception $e ) {
					 // echo 'Exception when calling ListsApi->v1BoardsBoardIdListsJsonPost: ', $e->getMessage(), PHP_EOL.
					$error = 1;
				}
			}
		}
		if ( $error == 1 ) {
			echo ( '<br /><div class="updated"><p><strong>' );
			echo ( 'Sorry Lists Not Created.' );
			echo ( 'Please Check Your Access Token' );
			echo ( '</strong></p></div>' );
		} else {
			echo ( '<br /><div class="updated"><p><strong>' );
			echo ( 'Settings Updated.' );
			echo ( '</strong></p></div>' );
		}
	}
	// get options.
	$options = get_option( 'cf7tmrb_options' );
	$board = get_option( 'cf7tmrb_board_id' );
	$list = get_option( 'cf7tmrb_list_id' );

	if ( empty( $options['base_url'] ) ) {
		$options['base_url'] = '';
	}
	if ( empty( $options['access_token'] ) ) {
		$options['access_token'] = '';
	}
	if ( empty( $options['board_name'] ) ) {
		$options['board_name'] = '';
	}
	if ( empty( $options['list_name'] ) ) {
		$options['list_name'] = '';
	}
	$siteurl = get_site_url();
	if ( isset( $_POST['hidden_tab_value'] ) ) {
		$active_tab = sanitize_text_field( wp_unslash( $_POST['hidden_tab_value'] ) );
	} else {
		$active_tab = isset( $_GET['tab'] ) ? $_GET['tab'] : '1';
	}
	?>
	<form method='post'>
	<?php wp_nonce_field( '_wpnonce' ); ?>
		<table width="100%">
			<tr>
				<td width="100%">
					<table width='100%'>
						<tr>
							<td width='60%'>
								<div class='wrap'>
									<h2>Contact Form 7 - Task Management 7 Settings</h2>
								</div><br />
							</td>
							<td width='30%'>
								<input type='submit' name='btn2' class='button-primary'
									style='font-size: 17px;line-height: 28px;height: 32px;float: left;' value='Save Settings' 
									<?php
									if ( ! empty( $list['id'] ) ) {
										echo esc_html( 'disabled' );
									}
									?>
								>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<?php
					printf(
						'<p>' . esc_html__( 'Configure with Restyaboard instance access tokens. You will still need to use the %s shortcode tag in your Contact Form 7 forms.' ) . '</p>',
						'<code>[task_management_7 task title="Inquiry Form"]</code>'
					)
					?>
				</td>
			</tr>
			<tr>
				<table width='72%'>
					<tr>
						<td valign='top'>
							<h2 class="nav-tab-wrapper">
								<a onclick='closetabs("1,2");newtab("1");' href="#" id="id1" class="nav-tab <?php echo esc_html( '1' == $active_tab ) ? 'nav-tab-active' : ''; ?>">Getting Started</a>
								<a onclick='closetabs("1,2");newtab("2");' href="#" id="id2" class="nav-tab <?php echo esc_html( '2' == $active_tab ) ? 'nav-tab-active' : ''; ?>">Settings</a>
							</h2>
							<br />
						</td>
					</tr>
				</table>
			</tr>
			<tr>
				<table width='100%'>
					<tr>
						<td valign='top' width='70%'>
							<div id="1"
								style="display:none;border: 1px solid #CCCCCC;<?php echo esc_html( '1' == $active_tab ) ? 'display:block;' : ''; ?>">
								<div
									style="background-color:#E4E4E4;padding:8px;color:#000;font-size:15px;color:#464646;font-weight: 700;border-bottom: 1px solid #CCCCCC;">
									&nbsp; Getting Started
								</div>
								<div style="background-color:#fff;padding:8px;">
									On this page, you can setup your general Restyaboard Settings which will be used for all of your
									contact forms.
									<br /><br />
									For all task management 7 forms, you'll receive email and as well they'll be pushed to your
									Restyaboard instance under the board and list you've configured.
									<br /><br />
									From Restyaboard, you can manage the status of your tasks/inquiries/contacts/etc in a neat
									visual sticky note like interface.
									<br /><br />
									<b> Shortcode: </b> <br />
									<code> [task_management_7 task title="Inquiry Form"] </code>
									<br /><br />
									When you go to your list of contact forms, make a new form or edit an existing form, you will
									see a new tab in the toolbar called 'task_management_7'. By clicking you can set up individual
									attributes for that shortcode.
									<br /><br />
									<b>Note:</b> <br /> You'll need a hosted or self-hosted <a href="https://restya.com/board"
										target="_blank">Restyaboard</a> to use this plugin. Restyaboard is an awesome open source
									alternative to Trello.
									<br />
								</div>
							</div>
							<div id="2"
								style="display:none;border: 1px solid #CCCCCC;<?php echo esc_html( '2' == $active_tab ) ? 'display:block;' : ''; ?>">
								<div
									style="background-color:#E4E4E4;padding:8px;color:#000;font-size:15px;color:#464646;font-weight: 700;border-bottom: 1px solid #CCCCCC;">
									&nbsp; Restyaboard Account
								</div>
								<div style="background-color:#fff;padding:8px;">
									<table width='100%'>
										<tr>
											<td class='cf7tmrb_width'><b>Base URL: </b></td>
											<td><input type='text' size=40 name='base_url'
													value="<?php echo esc_html( $options['base_url'] ); ?>"
													<?php
													if ( ! empty( $list['id'] ) ) {
														echo esc_html( 'readonly' );
													}
													?>
													> Required to use Restyaboard
											</td>
										</tr>
										<tr>
											<td class='cf7tmrb_width'><b>Access Token: </b></td>
											<td><input type='text' size=40 name='access_token'
													value="<?php echo esc_html( $options['access_token'] ); ?>"
													<?php
													if ( ! empty( $list['id'] ) ) {
														echo esc_html( 'readonly' );
													}
													?>
													> Required to use Restyaboard
											</td>
										</tr>
										<tr>
											<td class='cf7tmrb_width'><b>Board Name: </b></td>
											<td><input type='text' size=40 name='board_name'
													value="<?php echo esc_html( $options['board_name'] ); ?>"
													<?php
													if ( ! empty( $list['id'] ) ) {
														echo esc_html( 'readonly' );
													}
													?>
													> Required to use Restyaboard
											</td>
										</tr>
										<tr>
											<td class='cf7tmrb_width'><b>List Name: </b></td>
											<td><input type='text' size=40 name='list_name'
													value="<?php echo esc_html( $options['list_name'] ); ?>"
													<?php
													if ( ! empty( $list['id'] ) ) {
														echo esc_html( 'readonly' );
													}
													?>
													> Required to use Restyaboard
											</td>
										</tr>
										<tr>
											<td>
											</td>
											<td>
												<?php
												if ( ! empty( $board['id'] ) ) {
													?>
													<div>
														<br />
														Visit <a target='_blank'
														href='
														<?php
														echo esc_html( rtrim( $options['base_url'], '/' ) . '/#/board/' . $board['id'] );
														?>
														'>
														<?php
														echo esc_html( $options['board_name'] );
														?>
														</a>
														<br />
													</div>
													<?php
												}
												?>
												<br />
												To get your Access Token, refer to the document: <a target='_blank'
												href='https://agileshoppe.com/products/wp-task-management-7'>https://agileshoppe.com/products/wp-task-management-7</a>
												<br />
												<br />
											</td>
										</tr>
										<tr>
											<td>
												&nbsp;
											</td>
											<td>
												<input type='submit' name='btn2' class='button-primary' value='Create board & Setup'
												<?php
												if ( ! empty( $list['id'] ) ) {
													echo esc_html( 'disabled' );
												}
												?>
												>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</td>
						<td width="3%" valign="top">
						</td>
						<td width="24%" valign="top">
							<div style="border: 1px solid #CCCCCC;">
								<div
									style="background-color:#E4E4E4;padding:8px;font-size:15px;color:#464646;font-weight: 700;border-bottom: 1px solid #CCCCCC;">
									&nbsp; Plugin Features
								</div>
								<div style="background-color:#fff;padding:8px;">
									<div class="dashicons dashicons-yes" style="margin-bottom: 6px;"></div> Manage Tasks <br />
									<div class="dashicons dashicons-yes" style="margin-bottom: 6px;"></div> Manage Inquiries <br />
									<div class="dashicons dashicons-yes" style="margin-bottom: 6px;"></div> Manage Sales Queries <br />
									<div class="dashicons dashicons-yes" style="margin-bottom: 6px;"></div> Visual sticky note <br />
									<div class="dashicons dashicons-yes" style="margin-bottom: 6px;"></div> Link to Restyaboard <br />
									<div class="dashicons dashicons-yes" style="margin-bottom: 6px;"></div> Amazing support <br />
									by <a href="https://agileshoppe.com/" target="_blank"> AgileShoppe.com <br />
							</div>
						</td>
					</tr>
				</table>
			</tr>
		<table>
		<input type='hidden' name='update' value='1'>
		<input type='hidden' name='hidden_tab_value' id="hidden_tab_value" value="<?php echo esc_html( $active_tab ); ?>">
	</form>
	<?php
}
