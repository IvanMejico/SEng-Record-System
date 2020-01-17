<?php

namespace core;
use Core\Session;

class FH {
    public static function inputBlock($type, $label, $name, $value='', $inputAttrs=[], $divAttrs=[]) {
        $divString = self::stringifyAttrs($divAttrs);
        $inputString = self::stringifyAttrs($inputAttrs);
        $html = '<div'.$divString.'>';
        $html .= '<label for="'.$name.'">'.$label.'</label>';
        $html .= '<div><input type="'.$type.'" id="'.$name.'" name="'.$name.'" value="'.$value .'" '.$inputString.'/></div>';
        $html .= '</div>';
        return $html;
    }

    public static function selectBlock($label, $name, $options=[], $selectAttrs=[], $divAttrs=[]) {
        $divString = self::stringifyAttrs($divAttrs);
        $selectString = self::stringifyAttrs($selectAttrs);
        $html = '<div'.$divString.'>';
        $html .= '<label for="'.$name.'">'.$label.'</label>';
        $html .= '<div><select id="'.$name.'" name="'.$name.'" '.$selectString.'/>';
        foreach($options as $value => $text) {
            $html .= '<option value="'.$value.'" id="'.$value.'">'.$text.'</option>';
        }
        $html .='</select></div></div>';
        return $html;
    }
    
    public static function submitTag($buttonText, $inputAttrs=[]) {
        $inputString = self::stringifyAttrs($inputAttrs);
        $html = '<input type="submit" value="'.$buttonText.'"'.$inputString.'/>';
        return $html;
    }
    
    public static function submitBlock($buttonText, $inputAttrs=[], $divAttrs=[]) {
        $divString = self::stringifyAttrs($divAttrs);
        $inputString = self::stringifyAttrs($inputAttrs);
        $html = '<div'.$divString.'>';
        $html .= '<input type="submit" value="'.$buttonText.'"'.$inputString.'/>';
        $html .= '</div>';
        return $html;
    }

    public static function checkBoxBlock($label, $name, $checked=false, $inputAttrs=[], $divAttrs=[]) {
        $divString = self::stringifyAttrs($divAttrs);
        $inputString = self::stringifyAttrs($inputAttrs);
        $checkString = ($checked) ? 'checked="checked"' : '';
        $html = '<div'.$divString.'>';
        $html .= '<label for="'.$name.'">'.$label.' <input type="checkbox" id="'.$name.'" name="'.$name.'" value="on"'.$checkString.$inputString.'></label>';
        $html .= '</div>';
        return $html;
    }
    
    public static function stringifyAttrs($attrs) {
        $string = '';
        foreach($attrs as $key => $val) {
            $string .= ' ' . $key . ' ' . '="' . $val . '"';
        }
        return $string;
    }

    public static function generateToken() {
        $token = base64_encode(openssl_random_pseudo_bytes(32));
        Session::set('csrf_token', $token);
        return $token;
    }

    public static function  checkToken($token) {
        return (Session::exists('csrf_token') && Session::get('csrf_token') == $token);
    }

    public static function csrfInput() {
        return '<input type="hidden" name="csrf_token" id="csrf_token" value="'. self::generateToken() .'" />';
    }

    public static function sanitize($dirty) {
        return htmlentities($dirty, ENT_QUOTES, 'UTF-8');
    }
    
    public static function posted_values($post) {
        $clean_ary = [];
        foreach($post as $key => $value) {
            $clean_ary[$key] = self::sanitize($value);
        }
        return $clean_ary;
    }

    public static function displayErrors($errors, $onParent=true) {
        $hasErrors = (!empty($errors)) ? ' warning' : '';
        $html = '<div class="message'.$hasErrors.'"><i class="flaticon-close close-button"></i><ul>';
        foreach($errors as $field => $error) {
            $html .= '<li><span>'.$error.'</span></li>';
            $html .= '<script>
                        document.addEventListener("DOMContentLoaded", function() {';
            if($onParent)
                $html .= 'document.getElementById("'. $field . '").parentElement.classList.add("has-errors");';
            else
                $html .= 'document.getElementById("'. $field . '").classList.add("has-errors");';
                
            $html .= '}); </script>';
        }
        $html .= '</ul></div>';
        return $html;
    }
}