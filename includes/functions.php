<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Task Management Menu Form Handler
 */
if ( ! function_exists( 'cf7tmrb_add_task_management_form' ) ) {
	function cf7tmrb_add_task_management_form() {
		// "task_management_7" is the type of the form-tag
		wpcf7_add_form_tag( 'task_management_7', 'cf7tmrb_task_management_form', true );
	}
}

if ( ! function_exists( 'cf7tmrb_task_management_form' ) ) {
	/**
	 * Plugin cf7tmrb_task_management_form Tag Handler
	 *
	 * @param array $tag Add the form to task_management_7 shortcode.
	 */
	function cf7tmrb_task_management_form( $tag ) {
		$board = get_option( 'cf7tmrb_board_id' );
		$list = get_option( 'cf7tmrb_list_id' );
		if ( ! empty( $board['id'] ) && ! empty( $list['id'] ) && ! empty( $tag->name ) ) {
			// Find Title.
			if ( ! empty( $tag ) && ! empty( $tag['labels'] ) && ! empty( $tag['labels'][0] ) ) {
				$title = $tag['labels'][0];
			} else {
				foreach ( $tag['options'] as $option ) {
					if ( strpos( $option, 'title:' ) !== false ) {
						$title = ltrim( $option, 'title:' );
					}
				}
			}
			$form = '';
			if ( ! empty( $title ) ) {
				$form .= '<h3>' . esc_html__( $title ) . '</h3>';
			}
			$form .= '<p>';
			$form .= '<lable>' . esc_html__( 'Name' ) . '</lable>';
			$form .= '<br>';
			$form .= '<span class="wpcf7-form-control-wrap">';
			$form .= '<input type="text" class="wpcf7-form-control" name="cf7tmrb_name" value="' . esc_attr( $_POST['cf7tmrb_name'] ) . '" required>';
			$form .= '</span></p>';
			$form .= '<p>';
			$form .= '<lable>' . esc_html__( 'Email' ) . '</lable>';
			$form .= '<br>';
			$form .= '<span class="wpcf7-form-control-wrap">';
			$form .= '<input type="email" class="wpcf7-form-control" name="cf7tmrb_email" value="' . esc_attr( $_POST['cf7tmrb_email'] ) . '" required>';
			$form .= '</span></p>';
			$form .= '<p>';
			$form .= '<lable>' . esc_html__( 'Summary' ) . '</lable>';
			$form .= '<br>';
			$form .= '<span class="wpcf7-form-control-wrap">';
			$form .= '<input type="text" class="wpcf7-form-control" name="cf7tmrb_summary" value="' . esc_attr( $_POST['cf7tmrb_summary'] ) . '" required>';
			$form .= '</span></p>';
			$form .= '<p>';
			$form .= '<lable>' . esc_html__( 'Description' ) . '</lable>';
			$form .= '<br>';
			$form .= '<span class="wpcf7-form-control-wrap">';
			$form .= '<textarea class="wpcf7-form-control" cols="40" rows="10" name="cf7tmrb_description">' . esc_attr( $_POST['cf7tmrb_description'] ) . '</textarea>';
			$form .= '</span></p>';
		} else {
			$form = '';
		}
		return $form;
	}
}

if ( ! function_exists( 'cf7tmrb_filter_wpcf7_posted_data' ) ) {
	/**
	 * Task Management 7 - Contact Form 7 posted_data Handler
	 *
	 * @param array $posted_data it trigger form validation done.
	 */
	function cf7tmrb_filter_wpcf7_posted_data( $posted_data ) {
		if ( ! empty( $posted_data['cf7tmrb_name'] ) && ! empty( $posted_data['cf7tmrb_email'] ) && ! empty( $posted_data['cf7tmrb_summary'] ) && ! empty( $posted_data['cf7tmrb_description'] ) ) {
			if ( filter_var( $posted_data['cf7tmrb_email'], FILTER_VALIDATE_EMAIL ) ) {
				$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
				if ( preg_match( $regex, $posted_data['cf7tmrb_email'] ) ) {
					$board = get_option( 'cf7tmrb_board_id' );
					$list = get_option( 'cf7tmrb_list_id' );
					$options = get_option( 'cf7tmrb_options' );
					// make filter magic happen here...
					$configuration = new Swagger\Client\Configuration();
					$configuration->setHost( $options['base_url'] . '/api/v1' );
					$api_instance = new Swagger\Client\Api\CardsApi(
						// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
						// This is optional, `GuzzleHttp\Client` will be used as default.
						new GuzzleHttp\Client(),
						$configuration
					);
					$token = $options['access_token']; // string | OAuth token.
					$board_id = $board['id']; // int | Selected board ID.
					$list_id = $list['id']; // int | Selected list ID.
					$description = 'Name: ' . $posted_data['cf7tmrb_name'] . '<br>' . 'Email: ' . $posted_data['cf7tmrb_email'] . '<br><br>' . $posted_data['cf7tmrb_description'];
					$body = new \Swagger\Client\Model\Body11(
						array(
							'board_id' => $board_id,
							'list_id' => $list_id,
							'name' => $posted_data['cf7tmrb_summary'],
							'description' => $description,
						)
					); // \Swagger\Client\Model\Body11 | Created card object.
					try {
						$result = $api_instance->v1BoardsBoardIdListsListIdCardsJsonPost( $token, $board_id, $list_id, $body );
					} catch ( Exception $e ) {
						// echo 'Exception when calling CardsApi->v1BoardsBoardIdListsListIdCardsJsonPost: ', $e->getMessage(), PHP_EOL.
						echo 'Sorry Cards Not Created' . PHP_EOL . 'Please Check Your Access Token';
					}
					if ( $result ) {
						return $posted_data;
					} else {
						return $posted_data;
					}
				} else {
					return $posted_data;
				}
			} else {
				return $posted_data;
			}
		} else {
			return $posted_data;
		}
	};
}
/**
 * Task Management 7 Add cf7tmrb_filter_wpcf7_posted_data function.
 */
add_filter( 'wpcf7_posted_data', 'cf7tmrb_filter_wpcf7_posted_data', 10, 2 );

/**
 * Task Management 7 Add cf7tmrb_custom_validation_filter function.
 */
add_filter( 'wpcf7_validate_task_management_7', 'cf7tmrb_custom_validation_filter', 10, 2 );

if ( ! function_exists( 'cf7tmrb_custom_validation_filter' ) ) {
	/**
	 * Task Management 7 - Contact Form 7 custom_validation Handler
	 *
	 * @param array $result it will having tag submited data.
	 * @param array $tag it will having tag meta data.
	 */
	function cf7tmrb_custom_validation_filter( $result, $tag ) {
		// Get current form.
		$wpcf7 = WPCF7_ContactForm::get_current();
		// get current SUBMISSION instance.
		$submission = WPCF7_Submission::get_instance();
		// Ok go forward.
		if ( $submission ) {
			// get submission data.
			$data = $submission->get_posted_data();
			// nothing's here... do nothing...
			if ( empty( $data ) ) {
				$result->invalidate( $tag, 'Please Check Above Fields' );
				return $result;
			} else if ( empty( $data['cf7tmrb_name'] ) || empty( $data['cf7tmrb_email'] ) || empty( $data['cf7tmrb_summary'] ) || empty( $data['cf7tmrb_description'] ) ) {
				$result->invalidate( $tag, 'Please Check Above Fields' );
				return $result;
			} else if ( ! empty( $data['cf7tmrb_email'] ) ) {
				if ( filter_var( $data['cf7tmrb_email'], FILTER_VALIDATE_EMAIL ) ) {
					$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
					if ( ! preg_match( $regex, $data['cf7tmrb_email'] ) ) {
						$result->invalidate( $tag, 'Invalid Email' );
						return $result;
					} else {
						return $result;
					}
				} else {
					$result->invalidate( $tag, 'Invalid Email' );
					return $result;
				}
			} else {
				return $result;
			}
		}
		return $result;
	}
}
add_action( 'admin_init', 'cf7tmrb_add_tag_generator_task_management_7' );


if ( ! function_exists( 'cf7tmrb_add_tag_generator_task_management_7' ) ) {
	/**
	 * Task Management 7 - Contact Form 7 cf7tmrb_add_tag_generator_task_management_7
	 */
	function cf7tmrb_add_tag_generator_task_management_7() {
		if ( function_exists( 'wpcf7_add_tag_generator' ) ) {
			wpcf7_add_tag_generator( 'task_management_7', esc_html__( 'task_management_7', 'cf7emc' ), 'cf7emc-task_management_7', 'cf7tmrb_tag_pane_form_task_management_7' );
		}
	}
}

if ( ! function_exists( 'cf7tmrb_tag_pane_form_task_management_7' ) ) {
	/**
	 * Task Management 7 - Contact Form 7 cf7tmrb_tag_pane_form_task_management_7 Handler
	 *
	 * @param array $contact_form it will add the task_management_7 tag to Contact Form 7.
	 */
	function cf7tmrb_tag_pane_form_task_management_7( $contact_form ) {
		echo '
			<div class="control-box">
				<fieldset>
					<table class="form-table">
						<tbody>
							<tr>
								<th scope="row">
									<label for="tag-generator-panel-task_management_7-name">' . esc_html__( 'Name', 'contact-form-7' ) . '</label>
								</th>
								<td>
									<input type="text" name="name" class="tg-name oneline" id="tag-generator-panel-task_management_7-name" />
								</td>
							</tr>
							<tr>
								<th scope="row">
									<label for="tag-generator-panel-task_management_7-id">' . esc_html__( 'Id attribute', 'contact-form-7' ) . '</label>
								</th>
								<td>
									<input type="text" name="id" class="idvalue oneline option" id="tag-generator-panel-task_management_7-id" />
								</td>
							</tr>
							<tr>
								<th scope="row">
									<label for="tag-generator-panel-task_management_7-title">' . esc_html__( 'Title attribute', 'contact-form-7' ) . '</label>
								</th>
								<td>
									<input type="text" name="title" class="classvalue oneline option" id="tag-generator-panel-task_management_7-title" />
								</td>
							</tr>
						</tbody>
					</table>
				</fieldset>
			</div>
			<div class="insert-box">
				<input type="text" name="task_management_7" class="tag code" readonly="readonly" onfocus="this.select();">
				<div class="submitbox">
					<input type="button" class="button button-primary insert-tag" value="' . esc_attr__( 'Insert Tag', 'contact-form-7' ) . '">
				</div>
				<br class="clear">
			</div>
		';
	}
}
