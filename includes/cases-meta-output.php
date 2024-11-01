<?php

function cases_verdict_output($id){
	$case_verdict = get_post_meta($id, 'cases_verdict',true);
	if($case_verdict == 'guilty'){
		echo 'Guilty';
		}
	else if ($case_verdict == 'not_guilty'){
		echo __('Not Guilty','cases');
		}
	else if ($case_verdict == 'case_dismissed'){
		echo __('Case Dismissed','cases');
		}
	else if ($case_verdict == 'charges_dropped'){
		echo __('Charges Dropped','cases');
		}
	else { echo __('');
	} 
	}