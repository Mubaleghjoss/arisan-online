<?php

class Model_arisan extends CI_Model {

    function update() {
        $data = array(
            
            'pertemuan' => $this->input->post('pertemuan'),
            'tanggal' => $this->input->post('tanggal')
        );
        $this->db->where('npm', $this->input->post('npm'));
        $this->db->update('tbl_arisan', $data);
    }

    function get_one($npm) { {
            $param = array('npm' => $npm);
            return $this->db->get_where('tbl_arisan', $param);
        }
    }

}

?>