<?php
/*
Plugin Name: New Leads - Gravity Forms
Plugin URI: http://www.enticity.ca
Description: Gravity Forms Submissions to Newstar Sales Web Leads 
Author: Roman Barz for Enticity
Version: 0.1
Author URI: http://www.barz.ca
*/

defined( 'ABSPATH' ) or die( 'Nice try!' );

add_action( 'gform_after_submission', 'newleads_function', 10, 2 );

function newleads_function($entry, $form) {
		
	//Check Values
	if(!empty(rgar( $entry, '1' )) and !empty(rgar( $entry, '2' )) and !empty(rgar( $entry, '3' )) and !empty(rgar( $entry, '6' )) ) {   //Adjust these variables for required form fields
			
		//String with POST data
		$formdata =  'FirstName='.urlencode(rgar( $entry, '1' ))
					.'&LastName='.urlencode(rgar( $entry, '2' ))
					.'&HomeEmail='.urlencode(rgar( $entry, '6' ))
					.'&HomePhone='.urlencode(rgar( $entry, '3' ))
					.'&City='.urlencode(rgar( $entry, '5' ))
					.'&Notes='.urlencode( 'Family Life Cycle Stage: '.rgar( $entry, '7' )." | Interested in: ".rgar( $entry, '8' )." | Source Website: ".urlencode($_SERVER['HTTP_HOST']) )
					.'&SalesOfficeName='.urlencode($_SERVER['HTTP_HOST']);
					
		//Process Transaction
		$process = newleads_process( $formdata );
			
		//Send Email Notification with failed submission
		if($process['Result'] == 'Error') {
			// Unsuccessful	
			wp_mail('roman@enticity.ca', 'WebLeads Error', $formdata.'\r\n'. print_r($process, true).'\r\n'.print_r($data, true));	
		} else {
			// Successful
			//wp_mail('roman@enticity.ca', 'WebLeads Success', $formdata.'\r\n'. print_r($process, true).'\r\n'.print_r($data, true));				
		}
	}
}

function newleads_process($formdata) {
	
	$return = newleads_curl_call($formdata);
	
	//Error Handeling
	if(is_numeric($return['ErrID'])) {
		
		switch($return['ErrID']) {
			
			case '601':
				$return  = newleads_curl_call( $formdata, 'Update', $return['DuplicateProspectID_'] );			
				break;
					
		}	
			
	} 
	
	return $return;
			
}

function newleads_curl_call($formdata, $type = 'Add', $prospectID='') {
	
	//Set POST URL
	$url = 'http://newstar.pratthomes.ca/NSSWSProto/nssws.aspx';
	
	//Add Token value must match Web.Config
	$strPost = '';
	$strPost .= $formdata;
	$strPost .= '&Token='.urlencode('NSSTOKEN');
	$strPost .= '&Entity='.urlencode('Prospect');
	$strPost .= '&Transaction='.urlencode($type);
	
	//Update
	if($type == 'Update') {
		$strPost .= '&ProspectID='.trim($prospectID);	
	}
		
	//CURL
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $strPost);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
	$server_output = curl_exec ($ch);
	
	curl_close ($ch);
	
	//Convert to array
	parse_str ( $server_output, $return_array );
	
	return $return_array;
	
}

?>