<?php
$this->load->view('application/views/admin/template/header');
$this->load->view('application/views/admin/template/navbar');
$this->load->view('application/views/admin/template/sidebar');
$this->load->view($content);
$this->load->view('application/views/admin/template/footer');
