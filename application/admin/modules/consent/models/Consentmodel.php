<?php
defined('BASEPATH') or exit('No direct script access allowed');
$file_location = APPPATH . '../../vendor/autoload.php';

require_once $file_location;
class Consentmodel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function listAll()
    {

        $this->db->order_by('id', DESC)->where('form_type', 'ElightTreatments');
        $rs = $this->db->get('consent');
        return $rs->result_array();
    }
    public function listAll1()
    {

        $this->db->order_by('id', DESC)->where('form_type', 'radiofrequency');
        $rs = $this->db->get('consent');
        return $rs->result_array();
    }
    public function listAll2()
    {
        $this->db->order_by('id', DESC)->where('form_type', 'emsculpt');
        $rs = $this->db->get('consent');
        return $rs->result_array();
    }
    public function listAll3()
    {
        $this->db->order_by('id', DESC)->where('form_type', 'hairremoval');
        $rs = $this->db->get('consent');
        return $rs->result_array();
    }
    public function listAll4()
    {
        $this->db->order_by('id', DESC)->where('form_type', 'lasercarbon');
        $rs = $this->db->get('consent');
        return $rs->result_array();
    }
    public function listAll5()
    {
        $this->db->order_by('id', DESC)->where('form_type', 'lasertattoo');
        $rs = $this->db->get('consent');
        return $rs->result_array();
    }
    public function listAll6()
    {
        $this->db->order_by('id', DESC)->where('form_type', 'cryolipolysis');
        $rs = $this->db->get('consent');
        return $rs->result_array();
    }

    public function formDetail($id)
    {
        $this->db->where('id', $id);
        $rs = $this->db->get('consent');
        return $rs->row_array();
    }
    public function updateForm($id)
    {
        $record = $this->db->where('id', $id)->get('consent')->row_array();

        $data = array();
        $data['jsonData'] = json_encode($this->input->post());
        $data['form_type'] = $record['form_type'];
        $data['pdf'] = $record['form_type'] . time() . '.pdf';
        $this->db->where('id', $record['id']);
        $this->db->update('consent', $data);
        $this->pdf($data);
    }


    function pdf($data)
    {
        $this->load->library('M_pdf');
        $mpdf = new \Mpdf\Mpdf();
        $inner = array();
        $inner = $data;
        $html = $this->load->view('../../../application/views/pdf/' . $data['form_type'], $inner, true);
        // e($html);
        $mpdf->WriteHTML($html);
        $pdf_location = APPPATH . '../../upload/pdf/' . $data['pdf'];
        $mpdf->Output($pdf_location, 'F');
        // file_put_contents($pdf_location, $mpdf->Output());
    }
}
