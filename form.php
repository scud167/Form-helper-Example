<?php
class form{

    public $data;
    public $errors;

    function mail($id,$label,$placeholder,$help=null){
        $r = '';
        $r = '<div class="form-group">
            <label for="email' . $id . '">' . $label . '</label>
            <input type="email" class="form-control" id="email' . $id . '" placeholder="' . $placeholder . '">';
        if($help){
            $r .= '<small class="form-text text-muted">' . $help . '</small>';
        }
        $r .= '</div>';
        return $r;
    }
    function password($id,$label,$placeholder,$help=null){
        $r = '';
        $r = '<div class="form-group">
            <label for="password' . $id . '">' . $label . '</label>
            <input type="password" class="form-control" id="password' . $id . '" placeholder="' . $placeholder . '">';
        if($help){
            $r .= '<small class="form-text text-muted">' . $help . '</small>';
        }
        $r .= '</div>';
        return $r;
    }
    function select($id, $label, $options=array()){
        $r = '';
        $r = '<div class="form-group">
        <label for="select' . $id . '">' . $label . '</label>
        <select class="form-control" id="select' . $id . '">';
        foreach($options as $option){
            $r .= '<option>' . $option . '</option>';
        }
        $r .= '</select>
      </div>';
      return $r;
    }
    function multipleSelect($id, $label, $options=array()){
        $r = '';
        $r = '<div class="form-group">
        <label for="select' . $id . '">' . $label . '</label>
        <select multiple class="form-control" id="select' . $id . '">';
        foreach($options as $option){
            $r .= '<option>' . $option . '</option>';
        }
        $r .= '</select>
      </div>';
      return $r;
    }
    function textarea($id,$label,$rows){
        $r = '';
        $r =   '<div class="form-group">
            <label for="textarea'. $id .'">' . $label . '</label>
            <textarea class="form-control" id="textarea'. $id .'" rows="' . $rows . '"></textarea>
            </div>';
        return $r;
    }
    function file($id, $label, $help=null){
        $r ='';
        $r ='<div class="form-group">
            <label for="file'. $id .'">' . $label . '</label>
            <input type="file" class="form-control-file" id="file'. $id .'">';
        if($help){
                $r .= '<small class="form-text text-muted">' . $help . '</small>';
        }
        $r .= '</div>';
        return $r;
    }
    
    /*
    Global input
    */

    function input($id, $type, $label, $attributes = array()){
        $r ='';
        $r ='<div class="form-group">
        <label for="input'. $id .'">' . $label . '</label>
        <input  type="'. $type .' id=' . $id . '"';
        if($attributes){
            foreach ($attributes as $key=>$value){
                $r .= ' ' . $key . '="' . $value . '"';
            }
        }  
        $r .= '></div>';
        return $r;    
    }

}
