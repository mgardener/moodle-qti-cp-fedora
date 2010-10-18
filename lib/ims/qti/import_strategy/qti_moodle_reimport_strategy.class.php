<?php

/**
 * Moodle reimport strategy. 
 * Used to reimport QTI files that have been generated by this tool. 
 * Makes assumptions about the feedbacks' identifier. 
 * If required make can use toolName and toolVersion on the assessmentItem to further check if the QTI was generated by this tool or not.
 * 
 * @copyright (c) 2010 University of Geneva 
 * @author laurent.opprecht@unige.ch
 *
 */
class QtiMoodleReimportStrategy extends QtiImportStrategyBase{
		
	public function __construct(QtiRendererBase $renderer, $head){
		parent::__construct($renderer, $head);
	}
		
	public function get_general_feedbacks(ImsXmlReader $item){
		$feedback = $this->get_feedback_by_id($item, 'GENERAL_FEEDBACK');
		if($feedback->is_modalFeedback()){
			$this->get_renderer()->reset_outcomes();
			$this->get_renderer()->set_outcome($feedback->outcomeIdentifier, $feedback->identifier);
			$result =  array($this->get_renderer()->to_html($feedback));
			$this->get_renderer()->reset_outcomes();
			$result = array_diff($result, array(''));
			return $result;
		}else{
			return false;
		}
	}
	
	public function get_correct_feedbacks(ImsXmlReader $item, $filter_out=array()){
		$feedback = $this->get_feedback_by_id($item, 'FEEDBACK_CORRECT');
		if($feedback->is_modalFeedback()){
			$this->get_renderer()->reset_outcomes();
			$this->get_renderer()->set_outcome($feedback->outcomeIdentifier, $feedback->identifier);
			$result =  array($this->get_renderer()->to_html($feedback));
			$this->get_renderer()->reset_outcomes();
			$result = array_diff($result, array(''));
			return $result;
		}else{
			return false;
		}
	}
	
	public function get_partiallycorrect_feedbacks(ImsXmlReader $item, $filter_out=array()){
		$feedback = $this->get_feedback_by_id($item, 'FEEDBACK_PARTIALY_CORRECT');
		if($feedback->is_modalFeedback()){
			$this->get_renderer()->reset_outcomes();
			$this->get_renderer()->set_outcome($feedback->outcomeIdentifier, $feedback->identifier);
			$result =  array($this->get_renderer()->to_html($feedback));
			$this->get_renderer()->reset_outcomes();
			$result = array_diff($result, array(''));
			return $result;
		}else{
			return false;
		}
	}
	
	public function get_incorrect_feedbacks(ImsXmlReader $item, $filter_out=array()){
		$feedback = $this->get_feedback_by_id($item, 'FEEDBACK_INCORRECT');
		if($feedback->is_modalFeedback()){
			$this->get_renderer()->reset_outcomes();
			$this->get_renderer()->set_outcome($feedback->outcomeIdentifier, $feedback->identifier);
			$result =  array($this->get_renderer()->to_html($feedback));
			$this->get_renderer()->reset_outcomes();
			$result = array_diff($result, array(''));
			return $result;
		}else{
			return false;
		}
	}
	
	protected function get_feedback_by_id($item, $id){
		$path = './/*[@outcomeIdentifier="'. $id .'"]';
		$results = $item->query($path);
		if(empty($results)){
			return $item->get_default_result();
		}else{
			return $results[0];
		}
	}
	
}



















?>