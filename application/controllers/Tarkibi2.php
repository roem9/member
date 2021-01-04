<?php 
class Tarkibi2 extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();
        $this->load->model("Arab_model");
        $this->load->model("Admin_model");
        $this->load->model("Hifdzi1_model");
        ini_set('xdebug.var_display_max_depth', '10');
        ini_set('xdebug.var_display_max_children', '256');
        ini_set('xdebug.var_display_max_data', '1024');
        if($this->session->userdata('status') != "login"){
            $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
            redirect(base_url("login"));
        }
    }

    public function latihan($id){
        $data['reload'] = "";
        $data['redirect'] = "";
        $data['title'] = "Cek";

        if($id == 1){
            $data['soal'] = [
                [
                    "soal" => "أَنَا أَقْرَأُ الْكِتَابَ فِيْ الْمَسْكَنِ أَنَا أَقْرَأُ الْكِتَابَ فِيْ الْمَسْكَنِ أَنَا أَقْرَأُ الْكِتَابَ فِيْ الْمَسْكَنِ",
                ],
                [
                    "soal" => "أَنَا أَشْرَبُ اللَّبَنَ"
                ],
                [
                    "soal" => "أَنَا أَشْرَبُ اللَّبَنَ"
                ],
                [
                    "soal" => "أَنَا أَشْرَبُ اللَّبَنَ"
                ],
                [
                    "soal" => "أَنَا أَشْرَبُ اللَّبَنَ"
                ],
                [
                    "soal" => "أَنَا أَشْرَبُ اللَّبَنَ"
                ],
                [
                    "soal" => "أَنَا أَشْرَبُ اللَّبَنَ"
                ],
                [
                    "soal" => "أَنَا أَشْرَبُ اللَّبَنَ"
                ],
                [
                    "soal" => "أَنَا أَشْرَبُ اللَّبَنَ"
                ],
                [
                    "soal" => "أَنَا أَشْرَبُ اللَّبَنَ"
                ],
                [
                    "soal" => "أَنَا أَشْرَبُ اللَّبَنَ"
                ],
                [
                    "soal" => "أَنَا أَشْرَبُ اللَّبَنَ"
                ],
                [
                    "soal" => "أَنَا أَشْرَبُ اللَّبَنَ"
                ]
            ];
        }

        shuffle($data['soal']);

        $this->load->view("templates/header-user", $data);
        $this->load->view("tarkibi_2/latihan-1", $data);
        $this->load->view("templates/footer-user", $data);
    }

    public function add_harakat(){
        $answer = $this->input->post("answer");
        echo json_decode($answer);
    }
}