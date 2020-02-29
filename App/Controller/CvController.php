<?php


namespace App\Controller;


use App\Service\Controller;
use App\Repository\Form;
use App\Repository\Validation;

class CvController extends Controller
{
    public function cv()
    {
        $title = 'Le CV';

        $v = new Validation();
        $errors = array();
        $array = array(
            array('name' => 'nom', 'type' => 'text', 'h3' => 'votre nom', 'img' => 'img1', 'id_title' => 'title1'),
            array('name' => 'prenom', 'type' => 'text', 'h3' => 'votre prenom', 'img' => 'img2', 'id_title' => 'title2'),
            array('name' => 'email', 'type' => 'mail', 'h3' => 'votre email', 'img' => 'img3', 'id_title' => 'title3'),
            array('name' => 'tel', 'type' => 'tel', 'h3' => 'votre numero de telephone portable', 'img' => 'img4', 'id_title' => 'title4'),
            array('name' => 'adress', 'type' => 'text', 'h3' => 'votre adresse', 'img' => 'img5', 'id_title' => 'title5'),
            array('name' => 'about', 'type' => 'about', 'h3' => 'vos motivation', 'img' => 'img6', 'id_title' => 'title6'),
            array('name' => 'exp_pro', 'type' => 'text', 'h3' => 'vos experiences professionnelle', 'img' => 'img7', 'id_title' => 'title7'),
            array('name' => 'exp_d', 'type' => 'date', 'h3' => 'date du début', 'img' => 'img8', 'id_title' => 'title8'),
            array('name' => 'exp_f', 'type' => 'date', 'h3' => 'date de fin', 'img' => 'img9', 'id_title' => 'title9'),
            array('name' => 'exp_l', 'type' => 'text', 'h3' => 'le nom de l\'établissement', 'img' => 'img10', 'id_title' => 'title10'),
            array('name' => 'diplome', 'type' => 'text', 'h3' => 'vos diplomes', 'img' => 'img13', 'id_title' => 'title11'),
            array('name' => 'diplome_a', 'type' => 'date', 'h3' => 'l\année de l\'obtention du diplome', 'img' => 'img11', 'id_title' => 'title12'),
            array('name' => 'diplome_l', 'type' => 'text', 'h3' => 'l\'établissement', 'img' => 'img12', 'id_title' => 'title13'),
            array('name' => 'comp[]', 'type' => 'text', 'h3' => 'vos compétances', 'img' => 'img14', 'id_title' => 'title14'),
            array('name' => 'lang[]', 'type' => 'text', 'h3' => 'le niveau et langues métrisées', 'img' => 'img15', 'id_title' => 'title15'),
            array('name' => 'hob[]', 'type' => 'text', 'h3' => 'vos hobbys', 'img' => 'img16', 'id_title' => 'title16')
        );

        $formcv = new Form();
        $html = '<div class="bloc">';
        for ($i=0; $i < count($array); $i++){

            if ($array[$i]['type'] === 'tel'){
                $html .= $formcv->h3($array[$i]['h3'],$array[$i]['id_title']);
                $html .= '<input id="tel" name="tel" type="tel" Pattern="^0[0-9]{9}"/>';
                $html .= $formcv->label($array[$i]['name'],$array[$i]['img']);
                $html .= $formcv->error($array[$i]['name']);
            } elseif ($array[$i]['type'] === "about") {
                $html .= $formcv->h3($array[$i]['h3'],$array[$i]['id_title']);
                $html .= $formcv->textarea($array[$i]['name']);
                $html .= $formcv->label($array[$i]['name'],$array[$i]['img']);
                $html .= $formcv->error($array[$i]['name']);

            } elseif ($array[$i]['name'] === 'exp_pro'){
                $html .= '<div id="experience">';
                $html .= $formcv->h3($array[$i]['h3'],$array[$i]['id_title']);
                $html .= $formcv->input('exp_pro','text');
                $html .= $formcv->label('exp_pro','img7');
                $html .= $formcv->error('exp_pro');
            } elseif ($array[$i]['name'] === 'exp_d'){
                $html .= $formcv->h3($array[$i]['h3'],$array[$i]['id_title']);
                $html .= $formcv->input('exp_d','date');
                $html .= $formcv->label('exp_d','img8');
                $html .= $formcv->error('exp_f');
            }elseif ($array[$i]['name'] === 'exp_f'){
                $html .= $formcv->h3($array[$i]['h3'],$array[$i]['id_title']);
                $html .= $formcv->input('exp_f','date');
                $html .= $formcv->label('exp_f','img9');
                $html .= $formcv->error('exp_f');
            } elseif ($array[$i]['name'] === 'exp_l') {
                $html .= $formcv->h3($array[$i]['h3'], $array[$i]['id_title']);
                $html .= $formcv->input('exp_l', 'text');
                $html .= $formcv->label('exp_l', 'img10');
                $html .= $formcv->error('exp_l');
                $html .= '</div>';
                $html .= '<div id="ajout_exp">';
                $html .= $formcv->label('experience_aj','image1');
                $html .= '</div>';


            }elseif ($array[$i]['name'] === 'diplome'){
                $html .= '<div id="exam">';
                $html .= $formcv->h3($array[$i]['h3'],$array[$i]['id_title']);
                $html .= $formcv->input('diplome','text');
                $html .= $formcv->label('diplome','img11');
                $html .= $formcv->error('diplome');
            } elseif ($array[$i]['name'] === 'diplome_a'){
                $html .= $formcv->h3($array[$i]['h3'],$array[$i]['id_title']);
                $html .= $formcv->input('diplome_a','date');
                $html .= $formcv->label('diplome_a','img12');
                $html .= $formcv->error('diplome_a');
            }elseif ($array[$i]['name'] === 'diplome_l'){
                $html .= $formcv->h3($array[$i]['h3'],$array[$i]['id_title']);
                $html .= $formcv->input('diplome_l','text');
                $html .= $formcv->label('diplome_l','img13');
                $html .= $formcv->error('diplome_l');
                $html .= '</div>';
                $html .= '<div id="ajout_diplome">';
                $html .= $formcv->label('diplome_aj','image2');
                $html .= '</div>';
            } elseif ($array[$i]['name'] === 'comp[]'){
                $html .= '<div id="qualifications">';
                $html .= $formcv->h3($array[$i]['h3'],$array[$i]['id_title']);
                $html .= $formcv->input($array[$i]['name'],$array[$i]['type']);
                $html .= $formcv->label($array[$i]['name'],$array[$i]['img']);
                $html .= $formcv->error($array[$i]['name']);
                $html .= '<div id="ajout_comp">';
                $html .= $formcv->label('comp_aj','image2');
                $html .= '</div>';
                $html .= '</div>';
            } elseif ($array[$i]['name'] === 'lang[]'){
                $html .= $formcv->h3($array[$i]['h3'],$array[$i]['id_title']);
                $html .= $formcv->input($array[$i]['name'],$array[$i]['type']);
                $html .= $formcv->label($array[$i]['name'],$array[$i]['img']);
                $html .= $formcv->error($array[$i]['name']);
                $html .= '<div id="ajout_lang">';
                $html .= $formcv->label('lang_aj','image2');
                $html .= '</div>';
            } elseif ($array[$i]['name'] === 'hob[]'){
                $html .= $formcv->h3($array[$i]['h3'],$array[$i]['id_title']);
                $html .= $formcv->input($array[$i]['name'],$array[$i]['type']);
                $html .= $formcv->label($array[$i]['name'],$array[$i]['img']);
                $html .= $formcv->error($array[$i]['name']);
                $html .= '<div id="ajout_hob">';
                $html .= $formcv->label('hob_aj','image2');
                $html .= '</div>';
            }else{
                $html .= $formcv->h3($array[$i]['h3'],$array[$i]['id_title']);
                $html .= $formcv->input($array[$i]['name'],$array[$i]['type']);
                $html .= $formcv->label($array[$i]['name'],$array[$i]['img']);
                $html .= $formcv->error($array[$i]['name']);
            }
        }
        $html .= $formcv->submit();
        $html .= '</div>';

        if(!empty($_POST['submitted'])) {
            for ($i=0; $i < count($array); $i++) {
                $array[$i]['value'] = trim(strip_tags($_POST[$array[$i]['name']]));

                $v = new Validation();
                if ($array[$i]['type'] === 'text' OR $array[$i]['type'] === 'mail') {
                    $errors = $v->validChamp($errors, $array[$i]['value'], $array[$i]['name'], 3, 120);
                } elseif ($array[$i]['type'] === 'tel') {

                }
            }
        }

        $this->render('app.cv.cv', array(
            'title' => $title,
            'html'  => $html,
        ));
    }
}