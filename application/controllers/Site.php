<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller
{
    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $data['title']="Bienvenue sur le site officiel du Gouvernorat de la province du Haut-Katanga.
         Vous êtes sur le site officiel de publication des informations officielles de toutes les activites de la province.";
        $this->load->view('common/header',$data);
        $this->load->view('site/index',$data);
        $this->load->view('common/footer',$data);
    }
    public function apropos()
    {
        $data['title'] = "Qui sommes-nous ?";
        $this->load->view('common/header', $data);
        $this->load->view('site/apropos', $data);
        $this->load->view('common/footer', $data);
    }

    /**
     * Vue listing des articles
     */
    public function actualites($type=null)
    {
        if($type=='provinciales'){
            $data['title'] = "Actualites provinciales";
            $this->load->view('common/header', $data);
            $this->load->view('site/actualites/provinciales/index', $data);
            $this->load->view('common/footer', $data);
        }
        elseif($type=='nationales'){
            $data['title'] = "Actualites nationales";
            $this->load->view('common/header', $data);
            $this->load->view('site/actualites/nationales/index', $data);
            $this->load->view('common/footer', $data);
        }
        elseif($type=='internationales'){
            $data['title'] = "Actualites internationales";
            $this->load->view('common/header', $data);
            $this->load->view('site/actualites/internationales/index', $data);
            $this->load->view('common/footer', $data);
        }else {
            $data['title'] = "Toutes les Actualites";
            $this->load->view('common/header', $data);
            $this->load->view('site/actualites/provinciales/index', $data);
            $this->load->view('common/footer', $data);
        }
    }

    /**
     * All ministries
     */
    public function ministere()
    {
        $data['title'] = "Tous les ministères provinciaux";
        $this->load->view('common/header', $data);
        $this->load->view('site/ministere/index', $data);
        $this->load->view('common/footer', $data);
    } /**
     * All historiqes
     */
    public function historique()
    {
        $data['title'] = "Histoire de la province du Haut-Katanga";
        $this->load->view('common/header', $data);
        $this->load->view('site/programmes/index', $data);
        $this->load->view('common/footer', $data);
    }

    /**
     * @param null $type
     */
    public function rubriques($type=null)
    {
        if($type !=''){
            //si il y a une categorie selectionnee

            $data['title'] = "Plus d'infos sur $type";
            $this->load->view('common/header', $data);
            $this->load->view('site/rubriques/'.$type, $data);
            $this->load->view('common/footer', $data);
        }else {
            //si aucune
            $data['title'] = "Infos de toutes les categories";
            $this->load->view('common/header', $data);
            $this->load->view('site/rubriques/index', $data);
            $this->load->view('common/footer', $data);
        }

    }

}
