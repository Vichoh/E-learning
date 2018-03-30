<?php

/**
 * LoginModel
 *
 * The login part of the model: Handles the login / logout stuff
 */
class indexModel
{
    public static function enviarMensaje()
    {
        $user_email = strip_tags(Request::post('form_email'));
        $user_name = strip_tags(Request::post('form_name'));
        $user_reason = strip_tags(Request::post('form_reason'));
        $user_messaje = strip_tags(Request::post('form_text'));
        $user_institution = strip_tags(Request::post('form_institution'));
        $user_phone = strip_tags(Request::post('form_phone'));


        // perform all necessary checks
        if (empty($user_email)) {
            $respuesta = new stdClass();
            $respuesta->result = 0;
            $respuesta->mensaje = Text::get('FEEDBACK_EMAIL_FIELD_EMPTY');
            $respuesta->input = "form_email";
            
            return $respuesta;
        }

        // validate the email with PHP's internal filter
        // side-fact: Max length seems to be 254 chars
        // @see http://stackoverflow.com/questions/386294/what-is-the-maximum-length-of-a-valid-email-address
        if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
            $respuesta = new stdClass();
            $respuesta->result = 0;
            $respuesta->mensaje = Text::get('FEEDBACK_EMAIL_DOES_NOT_FIT_PATTERN');
            $respuesta->input = "form_email";
            
            return $respuesta;
        }

        if (empty($user_name)) {;
            $respuesta = new stdClass();
            $respuesta->result = 0;
            $respuesta->mensaje = Text::get('FEEDBACK_USER_CONTACT_EMPTY_NAME');
            $respuesta->input = "form_name";
            
            return $respuesta;
        }

        if (empty($user_reason)) {;
            $respuesta = new stdClass();
            $respuesta->result = 0;
            $respuesta->mensaje = Text::get('FEEDBACK_USER_CONTACT_EMPTY_REASON');
            $respuesta->input = "form_reason";
            
            return $respuesta;
        }

        if (empty($user_messaje)) {;
            $respuesta = new stdClass();
            $respuesta->result = 0;
            $respuesta->mensaje = Text::get('FEEDBACK_USER_CONTACT_EMPTY_MESSAJE');
            $respuesta->input = "form_text";
            
            return $respuesta;
        }

        if (empty($user_institution)) {;
            $respuesta = new stdClass();
            $respuesta->result = 0;
            $respuesta->mensaje = Text::get('FEEDBACK_USER_CONTACT_EMPTY_INSTITUTION');
            $respuesta->input = "form_institution";
            
            return $respuesta;
        }

        if (empty($user_phone)) {;
            $respuesta = new stdClass();
            $respuesta->result = 0;
            $respuesta->mensaje = Text::get('FEEDBACK_USERPHONE_FIELD_EMPTY');
            $respuesta->input = "form_phone";
            
            return $respuesta;
        }


        $body = Text::get('FEEDBACK_USER_CONTACT_EMAIL_CONTENT') . "\r\nNombre Institución: ". $user_institution . "\r\nNombre Contacto: ". $user_name . "\r\nTeléfono: ". $user_phone . "\r\nAsunto: " . $user_reason. "\r\nMensaje: ". $user_messaje. "\r\nCorreo electronico: ". $user_email;

        $mail = new Mail;
        $mail_sent = $mail->sendMail('luis.arriagada.e@gmail.com', Config::get('EMAIL_VERIFICATION_FROM_EMAIL'),
            Config::get('EMAIL_VERIFICATION_FROM_NAME'), Text::get('FEEDBACK_USER_CONTACT_EMAIL_SUBJET'), $body
        );

        if ($mail_sent) {
            $respuesta = new stdClass();
            $respuesta->result = 1;
            $respuesta->mensaje = Text::get('FEEDBACK_USER_CONTACT_EMAIL_OK');
            $respuesta->input = "form_text";
            
            return $respuesta;
        } else {
            $respuesta = new stdClass();
            $respuesta->result = 2;
            $respuesta->mensaje = Text::get('FEEDBACK_USER_CONTACT_EMAIL_ERROR'). $mail->getError();
            
            return $respuesta;
        }
    }
}