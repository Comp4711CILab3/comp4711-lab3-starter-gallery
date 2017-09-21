<?php
/**
 * Created by PhpStorm.
 * User: Matthew
 * Date: 2017-09-21
 * Time: 12:50 PM
 */

class Images extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    /**
     * Returns all images stored in the database
     * @return mixed
     */
    function all() {
        $this->db->order_by('id','desc');
        $query = $this->db->get('images');
        return $query->result_array();
    }

    /**
     * Returns the newest 3 images from the database
     */
    function newest() {
        $this->db->order_by('id', 'desc');
        $this->db->limit(3);
        $query = $this->db->get('images');
        Return $query->result_array();
    }
}