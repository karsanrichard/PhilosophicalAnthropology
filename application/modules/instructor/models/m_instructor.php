<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_instructor extends MY_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function defaultfunction($param1, $param2)
    {
        
    }

    public function uploaddata($path)
    {
    	$this->elements=array();
    	$uploadeddata = $this->input->post();
    	$count = $finalCount = 1;

    	foreach ($uploadeddata as $key => $val) {
    		$this->frags = $key;
            $this->id = $count;
            $this->attr = $this->frags;

            if ($this->attr == 'upload_category') {
                    $finalCount = $count;
                    $count++;
            }
            if (!empty($val)) {
				$this->elements[$this->id][$this->attr] = htmlentities($val);
			}
            else
            {
                $this->elements[$this->id][$this->attr] = '';
            }
    	}

    	// print_r($this->elements);die;
    	$this->noOfInsertsBatch = $finalCount;
    	for ($i=1; $i <= $this->noOfInsertsBatch; $i++) { 
            $this->theForm = new \models\Entities\Uploads();
            
            //go ahead and persist data posted

            //create an object of the model

            (array_key_exists('filename', $this->elements[$i])) ? $this->theForm->setFilename($this->elements[$i]['filename']) : $this->theForm->setFilename('n/a');
            (array_key_exists('category', $this->elements[$i])) ? $this->theForm->setCategory($this->elements[$i]['category']) : $this->theForm->setCategory('n/a');
            (array_key_exists('upload_category', $this->elements[$i])) ? $this->theForm->setFileType($this->elements[$i]['upload_category']) : $this->theForm->setFileType('n/a');

            $this->theForm->setLocation($path);
            $this->theForm->setUploadKey(sha1($path));
            $this->theForm->setDateCreated(new DateTime());
            $this->theForm->setUplodedBy('1');
            $this->theForm->setIsDeleted('0');

            /*timestamp option*/
            $this->em->persist($this->theForm);

            //now do a batched insert, default at 5
            $this->batchSize = 5;

            if ($i % $this->batchSize == 0) {
                try {

                    $this->em->flush();
                    $this->em->clear();

                    //detaches all objects from doctrine
                    //return true;

                }
                catch(Exception $ex) {

                    die($ex->getMessage());
                    return false;

                    /*display user friendly message*/
                }
                 //end of catch


            }
            else if ($i < $this->batchSize || $i > $this->batchSize || $i == $this->noOfInsertsBatch && $this->noOfInsertsBatch - $i < $this->batchSize) {

                //total records less than a batch, insert all of them
                try {

                    $this->em->flush();
                    $this->em->clear();

                    //detactes all objects from doctrine
                    //return true;

                }
                catch(Exception $ex) {

                    die($ex->getMessage());
                    return false;

                    /*display user friendly message*/
                }
                 //end of catch

                //on the last record to be inserted, log the process and return true;
                if ($i == $this->noOfInsertsBatch) {

                    //die(print $i);
                    // $this->writeAssessmentTrackerLog();
                    echo "true";
                    return true;
                }
            }

            //end of batch condition
        }
    }
}