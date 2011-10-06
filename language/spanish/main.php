<?php
/*
<Orion, a web development framework for RK.>
Copyright (C) <2011>  <Orion>

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/ 
if (!is_array($lang) || empty($lang)) {
	$lang = array();
}

$lang += array(
	'APPLICATION' => 'Rock Republik',
	'APPLICATION_DESC' => 'La comunidad m&aacute;s grande de Rock en Guatemala',

	'ENCODING' => "iso-8859-1",
	'DIRECTION' => '',
	'DATE_FORMAT' => 'd M Y',
	
	'FORUM' => 'Foro',
	'CATEGORY' => 'Categor&iacute;a',
	'CATEGORIES' => 'Categor&iacute;as',
	'TOPIC' => 'Tema',
	'TOPICS' => 'Temas',
	'POST' => 'Mensaje',
	'POSTS' => 'Mensajes',
	'ORIGINAL_POST' => 'Responder a este mensaje',
	'TOPIC_REPLY' => 'Respuesta',
	'TOPIC_REPLIES' => 'Respuestas',
	'POSTED_BY' => 'Publicado por',
	'BY' => 'por',
	'LASTPOST' => 'Ultimo mensaje',
	'USERNAME' => 'Usuario',
	'USERNAME2' => 'Nombre de Usuario',
	'MEMBER' => 'Miembro',
	'PASSWORD' => 'Contrase&ntilde;a',
	'EMAIL' => 'Email',
	'PUBLIC_EMAIL_ADDR' => 'Email p&uacute;blico',
	'AUTHOR' => 'Autor',
	'TIME' => 'Horas',
	'GO' => 'Ir',
	'SUBMIT' => 'Enviar',
	'SENDING' => 'Enviando...',
	'RESET' => 'Resetear',
	'CANCEL' => 'Cancelar',
	'CONFIRM' => 'Confirmar',
	'CONTINUE' => 'Continuar',
	'YES' => 'Si',
	'NO' => 'No',
	'ENABLED' => 'Habilitado',
	'DISABLED' => 'Deshabilitado',
	'ERROR' => 'Error',
	'REPLY_ERROR' => 'Error al enviar el mensaje',
	'NEXT' => 'Siguiente',
	'PREVIOUS' => 'Anterior',
	'GOTO_PAGE' => 'Ir a p&aacute;gina',
	'PAGE' => 'P&aacute;gina',
	'JOINED' => 'Registrado',
	'JOINED_SINCE' => ', hace <strong>%s</strong> d&iacute;as',
	'LAST_LOGON' => 'Ultima visita',
	'IP_ADDRESS' => 'Direcci&oacute;n IP',
	'EMOTICONS' => 'Emoticons',
	'MORE_OPTIONS' => 'M&aacute;s opciones',
	'BACK_TOP' => 'Ir arriba',
	'COUNTRY' => 'Pa&iacute;s',
	'SAVE_CHANGES' => 'Guardar cambios',
	'FAN' => 'fan',
	'FANS' => 'fans',
	'NAVIGATION' => 'Navegaci&oacute;n',
	'SEARCH' => 'B&uacute;squeda',
	
	'PAGES_PREV' => '&lt;&lt; <strong>Anteriores %d</strong>',
	'PAGES_NEXT' => '<strong>Siguientes %d</strong> &gt;&gt;',
	'TOPIC_PAGES_PREV' => '&lt;&lt; <strong>Anteriores %d mensajes</strong>',
	'TOPIC_PAGES_NEXT' => '<strong>Siguientes %d mensajes</strong> &gt;&gt;',
	'TOPICS_PAGES_PREV' => '&lt;&lt; <strong>Anteriores %d temas</strong>',
	'TOPICS_PAGES_NEXT' => '<strong>Siguientes %d temas</strong> &gt;&gt;',
	'PAGES_ON' => 'P&aacute;gina <strong>%d</strong> de <strong>%d</strong>',
	'TOPIC_FEATURED_ADD' => 'Agregar tema de portada',
	'TOPIC_FEATURED_REM' => 'Quitar tema de portada',
	'TOPIC_POINTS_ADD' => 'Activar Arkanes',
	'TOPIC_POINTS_REM' => 'Desactivar Arkanes',
	
	'ICQ' => 'N&uacute;mero ICQ',
	'AIM' => 'Direcci&oacute;n AIM',
	'MSN' => 'MSN Messenger',
	'YIM' => 'Yahoo! Messenger',
	
	'POST_NEWTOPIC' => 'Publicar nuevo tema',
	'POST_REPLY' => 'Publicar respuesta',
	'POST_REPLY_BOX' => 'Responder al tema',
	
	'CLICK_RETURN_TOPIC' => 'Click %sAQUI%s para volver al tema',
	'CLICK_RETURN_FORUM' => 'Click %sAQUI%s para volver al foro',
	'CLICK_VIEW_MESSAGE' => 'Click %sAQUI%s para ver el mensaje',
	'CLICK_RETURN_MCP' => 'Click %sAQUI%s para volver al Panel de Control del Moderador',
	'CLICK_RETURN_GROUP' => 'Click %sAQUI%s para volver al grupo',
	'CLICK_RETURN_GROUP' => 'Click %sAQUI%s para volver al grupo',
	'CLICK_RETURN_BOARDGROUP' => 'Click %sAQUI%s para volver al foro',
	'CLICK_RETURN_COVER' => 'Click %sAQUI%s para volver a la Portada',
	'CLICK_RETURN_LASTPAGE' => 'Click AQUI para volver a P&aacute;gina Anterior',
	'CLICK_RETURN_LASTPAGE2' => 'P&aacute;gina Anterior',
	
	'ACP' => 'Panel de Administraci&oacute;n',
	'CONTROL_PANEL' => 'Panel de Control',
	
	'MEMBERS_ALL' => 'miembros registrados',
	'MEMBERS_LASTEST' => 'Recientes',
	'MEMBERS_ONLINE' => 'Conectados',
	'MEMBERS_TODAY' => 'De hoy',
	'MEMBERS_VISIBLE' => 'miembro',
	'MEMBERS_HIDDEN' => 'invisible',
	'MEMBERS_GUESTS' => 'invitado',
	'MEMBERS_BOT' => 'robot',
	'MEMBERS_VISIBLE2' => 'miembros',
	'MEMBERS_HIDDEN2' => 'invisibles',
	'MEMBERS_GUESTS2' => 'invitados',
	'MEMBERS_BOT2' => 'robots',
	'MEMBERS_TOTAL' => 'en total',
	'MEMBERS_TOTAL2' => 'en total',
	'NONE' => 'Ningun miembro',
	
	'LOGIN' => 'Entrar',
	'LOGIN2' => 'Iniciar Sesi&oacute;n',
	'LOGOUT' => 'Salir',
	'LOGOUT2' => 'Cerrar Sesi&oacute;n',
	'REGISTER' => 'Crea tu cuenta de usuario',
	'PROFILE' => 'Perfil',
	'MEMBER_OPTIONS' => 'Opciones de Usuario',
	
	'SENDPASSWORD' => 'Olvid&eacute; mi contrase&ntilde;a',
	'SENDPASSWORD2' => 'Crear contrase&ntilde;a de usuario',
	'SENDPASSWORD_EXPLAIN' => 'Ingresa tu correo electr&oacute;nico para recibir una nueva contrase&ntilde;a.',
	'SENDPASSWORD2_EXPLAIN' => 'Por razones de seguridad no podemos mostrarte si el correo fue enviado. Si has ingresado una direcci&oacute;n v&aacute;lida, en un momento recibir&aacute;s en tu buz&oacute;n de email un c&oacute;digo para actualizar tu contrase&ntilde;a de usuario.',
	'SENDPASSWORD3_EXPLAIN' => 'Por favor ingresa una nueva contrase&ntilde;a para tu usuario de Rock Republik.',
	'SENDPASSWORD4_EXPLAIN' => 'Gracias por actualizar tu contrase&ntilde;a.<br /><br />Hemos enviado a tu correo electr&oacute;nico m&aacute;s informaci&oacute;n sobre este cambio de contrase&ntilde;a.',
	
	'LOGIN_PAGETITLE' => 'Area para Miembros',
	'LOGIN_PAGE' => 'Para accesar en esta secci&oacute;n, debes ser miembro registrado',
	'LOGINBOX_PAGE' => 'Ingresa tu nombre de usuario y contrase&ntilde;a para iniciar sesi&oacute;n',
	'LOGIN_PAGE_REGISTER' => 'Si no eres miembro, puedes <a class="bold orange" href="/my/register/">Crear tu Cuenta Aqu&iacute;</a>',
	'LOGIN_ADM' => 'Para accesar en esta secci&oacute;n, debes ingresar nuevamente tu informaci&oacute;n de usuario',
	'LOGIN_ERROR' => 'La informaci&oacute;n de usuario es incorrecta, por favor intenta nuevamente',
	'LOGIN_TO_POST' => 'Para publicar mensajes debes ser miembro registrado.<br /><br />Por favor <a class="italic" href="#top">inicia sesi&oacute;n</a> &oacute; <a class="bold" href="/my/register/">Crea tu cuenta de usuario aqui.</a>',
	'LOGIN_TO_CHAT' => 'Para tener acceso al chat, debes ser miembro registrado.<br /><br />Por favor <a class="italic" href="#top">inicia sesi&oacute;n</a> &oacute; <a class="bold" href="/my/register/">Crea tu cuenta de usuario aqui.</a>',
	'LOGIN_BE_FAN' => 'Para agregar a tus favoritos la banda <strong>%s</strong>, debes ser miembro registrado',
	'LOGOUT_THANKS' => 'Tu sesi&oacute;n se ha cerrado correctamente, esperamos que vuelvas pronto',
	
	'MEMBERLIST' => 'Miembros',
	'HELP' => 'Ayuda',
	'HELP_BACK' => 'Regresar a P&aacute;gina Principal',
	'MODERATOR' => 'Moderador',
	'MODERATORS' => 'Moderadores',
	
	'REGISTERED_MEMBERS' => 'Miembros: <strong>%d</strong>',
	
	'FORUM_INDEX' => 'Foro de Discusi&oacute;n',
	'NO_POSTS' => 'No hay mensajes',
	'NO_FORUMS' => 'No hay foros',
	
	'VIEWFORUM' => 'Ver Foro',
	'FORUM_NOT_EXIST' => 'El foro seleccionado no existe',
	'TOPIC_ANNOUNCEMENT' => '<strong class="fnt12">[^!]</strong>',
	'TOPIC_POLL' => '<strong class="fnt12">[e]</strong>',
	'NO_TOPICS' => 'No hay temas en este foro.',
	
	'VIEWTOPIC' => 'Ver Tema',
	'GUEST' => 'Invitado',
	'POST_TITLE' => 'T&iacute;tulo',
	'TOPIC_TITLE' => 'T&iacute;tulo',
	'VOTE' => 'Votar',
	
	'TOPIC_POST_NOT_EXIST' => 'El tema o mensaje solicitado no existe',
	'NO_POSTS_TOPIC' => 'No existen mensajes para este tema',
	
	'SEND_EMAIL' => 'Enviar email a usuario',
	'EDIT_POST' => 'Editar mensaje',
	'VIEW_IP' => 'Ver IP',
	'HIDE_POST' => 'Ocultar mensaje',
	
	'LOCK_TOPIC' => 'Bloquear',
	'UNLOCK_TOPIC' => 'Desbloquear',
	'MOVE_TOPIC' => 'Mover',
	'SPLIT_TOPIC' => 'Separar',
	'MERGE_TOPIC' => 'Fusionar',
	'DELETE_TOPIC' => 'Borrar',
	'IMPORTANT_TOPIC' => 'Importante',
	'NORMAL_TOPIC' => 'Normal',
	
	'UNSUBSCRIBE_TOPIC' => 'Dejar de recibir notificaci&oacute;n de respuestas',
	'SUBSCRIBE_TOPIC' => 'Recibir notificaci&oacute;n de respuestas',
	'OLDEST_FIRST' => 'Mas antiguo primero',
	'NEWEST_FIRST' => 'Mas reciente primero',
	'TOPIC_ORDER' => 'Mostrar mensajes',
	
	'NO_POST_MODE' => 'Modo de mensaje inv&aacute;lido',
	'POST_TYPE' => 'Tipo de mensaje',
	'POST_TYPE_ANNOUNCE' => 'Anuncio',
	'POST_TYPE_ANNOUNCES' => 'Anuncios',
	'POST_TYPE_STICKY' => 'PostIt',
	'POST_TYPE_NORMAL' => 'Normal',
	
	'CONFIRM_HIDE_POST' => '&iquest;Est&aacute;s seguro que quieres ocultar este mensaje?',
	'CONFIRM_DELETE_POLL' => '&iquest;Est&aacute;s seguro que quieres borrar esta encuesta?',
	
	'FLOOD_ERROR' => 'No se puede enviar otro mensaje en este momento, por favor intenta nuevamente.',
	'EMPTY_SUBJECT' => 'Debes escribir el t&iacute;tulo para el nuevo tema',
	'EMPTY_MESSAGE' => 'Debes escribir tu mensaje.',
	'FORUM_LOCKED' => 'Este foro esta cerrado y no se pueden publicar mensajes',
	'TOPIC_LOCKED' => 'Este tema esta cerrado y no puedes publicar respuestas',
	'NO_POST_ID' => 'Debes seleccionar un mensaje.',
	'NO_TOPIC_ID' => 'Debes seleccionar un tema.',
	'NO_VALID_MODE' => 'Solo puedes publicar y responder mensajes.',
	'NO_SUCH_POST' => 'No existe el mensaje seleccionado',
	'EMPTY_POLL_TITLE' => 'Debes escribir el t&iacute;tulo para la encuesta',
	'FEW_POLL_OPTIONS' => 'Ingresar al menos dos opciones para la encuesta',
	'MANY_POLL_OPTIONS' => 'Hay demasiadas opciones para la encuesta',
	'POST_HAS_NO_POLL' => 'Este tema no tiene encuesta',
	
	'ADD_POLL' => 'Agregar encuesta',
	'POLL_QUESTION' => 'Pregunta de la Encuesta',
	'POLL_OPTION' => 'Opciones de la Encuesta',
	'POLL_OPTION_EXPLAIN' => 'Puedes agregar 10 opciones como m&aacute;ximo, una opci&oacute;n en cada l&iacute;nea.',
	'ADD_OPTION' => 'Agregar opci&oacute;n',
	'UPDATE' => 'Actualizar',
	'DELETE' => 'Borrar',
	'POLL_FOR' => 'D&iacute;as para la Encuesta',
	'DELETE_POLL' => 'Borrar encuesta',
	
	'POLL_DELETE' => 'La encuesta ha sido borrada.',
	
	'DCONVS' => 'Conversaciones',
	'DCONVS_READ' => 'Conversaciones',
	'DCONV_READ' => 'Conversaci&oacute;n',
	'DCONV_START' => 'Iniciar Conversaci&oacute;n',
	'DC_WITH' => 'Conversaci&oacute;n con',
	'DC_READ_MESSAGE' => 'Leer',
	'FOLDERS' => 'Carpetas',
	'INBOX' => 'Volver a la lista de conversaciones',
	'FROM' => 'De',
	'TO' => 'Para',
	'DATE' => 'Fecha',
	'DCS_MEMBER' => 'Miembro',
	'DCS_SUBJECT' => 'Asunto',
	'DELETE_MARKED' => 'Borrar Marcados',
	'DELETE_MESSAGE' => 'Borrar Mensaje',
	'DELETE_DC' => 'Borrar esta conversaci&oacute;n',
	'EMPTY_DC' => 'No tienes conversaciones nuevas<br /><br /><a class="red" href="/my/dc/start/">Click <strong>Aqu&iacute;</strong> para Iniciar una Conversaci&oacute;n!</a>',
	'EMPTY_DC_SUBJECT' => 'Debes escribir el asunto para la conversaci&oacute;n.',
	'CONFIRM_DELETE_PM' => '&iquest;Est&aacute;s seguro que deseas borrar esta conversaci&oacute;n?',
	'CONFIRM_DELETE_PMS' => '&iquest;Est&aacute;s seguro que deseas borrar estas conversaciones?',

	'BLOCKED_MEMBER' => 'No se puede enviar el mensaje al destinatario seleccionado.',
	'BLOCKED_MEMBER_ADD' => 'Bloquear usuario',
	'BLOCKED_MEMBER_REMOVE' => 'Desbloquear usuario',
	
	'EMPTY_USER' => 'Debes seleccionar el destinatario del mensaje',
	'NO_SUCH_USER' => 'El usuario seleccionado no existe',
	'NO_AUTO_DC' => 'No puedes iniciar una conversaci&oacute;n contigo mismo.',
	
	'START_DC' => 'Iniciar conversaci&oacute;n con...',
	'SEND_REPLY' => 'Responder',
	
	'FIND_MEMBER' => 'Encontrar un miembro',
	'FIND' => 'Encontrar',
	'NO_MATCH' => 'No hay resultados',
	
	'MARK_ALL' => 'Marcar todos',
	'UNMARK_ALL' => 'Desmarcar todos',
	
	'PREFERENCES' => 'Preferencias',
	'UNREAD_ITEMS' => '&iquest;Qu&eacute; hay de nuevo?',
	'UNREAD_ITEMS_COUNT' => '%d mensajes nuevos',
	'UNREAD_ITEM_COUNT' => '%d mensaje nuevo',
	'ITEMS_REQUIRED' => 'Los campos marcados con <strong>*</strong> son obligatorios',
	'MEMBER_INFO' => 'Informaci&oacute;n de Usuario',
	'MEMBER_STATS' => 'Estad&iacute;sticas de Usuario',
	'AVATAR_PANEL' => 'Panel de Avatar',
	
	'FORUM_POSTS' => 'Mensajes del foro',
	'ARTISTS_POSTS' => 'Mensajes a bandas',
	'DOWNLOADS_POSTS' => 'Mensajes a descargas',
	'WEBSITE' => 'Sitio Web',
	'LOCATION' => 'Ubicaci&oacute;n',
	'CONTACT' => 'Contacto',
	'CONTACT_INFO' => 'Informaci&oacute;n de Contacto',
	'HIDDEN_EMAIL' => '( Oculto )',
	'SEND_A_NOTE' => 'Enviar mensaje privado',
	'INTERESTS' => 'Intereses',
	'OCCUPATION' => 'Ocupaci&oacute;n',
	'MEMBER_OS' => 'Sistema Operativo',
	'FAV_BANDS' => 'Artistas favoritos',
	'FAV_GENRES' => 'G&eacute;neros musicales',
	'MEMBER_GUESTBOOK' => 'Libro de visitas',
	'SHOW_SIGNATURES' => 'Mostrar firmas en mensajes',
	'SHOW_AVATARS' => 'Mostrar avatares en mensajes',
	'HIDE_USER' => 'Ocultarme cuando est&eacute; conectado',
	'EMAIL_DC' => 'Notificaci&oacute;n de conversaciones nuevas por email',
	
	'SENDPASSWORD_NO_NORMALUSER' => 'No se permite el cambio de contrase&ntilde;a del miembro seleccionado',
	'NO_SEND_ACCOUNT_INACTIVE' => 'Lo sentimos pero tu contrase&ntilde;a no puede ser recuparada porque tu cuenta se encuentra actualmente desactivada. Por favor contacta a un Administrador de Rock Republik',
	
	'ALWAYS_NOTIFY' => 'Siempre notificarme cuando hay mensajes en el foro',
	'ALWAYS_NOTIFY_EXPLAIN' => 'Env&iacute;a un email cuando alguien responde a un tema que has publicado.',
	
	'AGREE_TOS' => 'Acepto cumplir las <a class="red" href="http://www.rockrepublik.net/tos/" target="_blank">condiciones y t&eacute;rminos de servicio</a>',
	'FILL_DATA' => 'Completa la informaci&oacute;n',
	'SITE_LANG' => 'Idioma del sitio',
	'TIMEZONE' => 'Zona horaria',
	'MEMBER_DATE_FORMAT' => 'Formato de Fecha',
	'MEMBER_DATE_FORMAT_EXPLAIN' => 'La sintaxis usada es id&eacute;ntica a la funci&oacute;n <strong>date()</strong> de PHP',
	'SIGNATURE' => 'Firma',
	'SIGNATURE_EXPLAIN' => 'La firma es el texto que puedes agregar al pie de todos los mensajes que publiques en el sitio.',
	'PUBLIC_EMAIL' => 'Mostar p&uacute;blicamente mi email',
	
	'CONFIRM_EMAIL' => 'Re-escribe tu email',
	'CURRENT_PASSWORD' => 'Contrase&ntilde;a actual',
	'NEW_PASSWORD' => 'Nueva contrase&ntilde;a',
	'CONFIRM_PASSWORD' => 'Confirma tu contrase&ntilde;a',
	'CONFIRM_PASSWORD_EXPLAIN' => 'Debes confirmar tu contrase&ntilde;a actual si deseas cambiar &eacute;ste &oacute; tu direcci&oacute;n de email',
	'PASSWORD_TO_REGISTER' => 'Debes tener una contrase&ntilde;a para tu cuenta de usuario',
	'PASSWORD_TO_REGISTER_EXPLAIN' => 'Debes confirmar tu contrase&ntilde;a para finalizar tu registro',
	'PASSWORD_IF_CHANGED' => 'S&oacute;lo debes ingresar una contrase&ntilde;a si deseas cambiarla',
	'PASSWORD_IF_CHANGED_EXPLAIN' => 'Necesitas confirmar tu contrase&ntilde;a si deseas cambiarla',
	
	'AVATAR' => 'Avatar',
	'AVATAR_EXPLAIN' => 'Muestra una peque&ntilde;a imagen en tus mensajes del foro, perfil, etc. El tama&ntilde;o de imagen debe ser menor a <strong>100 kb</strong> &uacute;nicamente en formato <strong>GIF o JPG</strong>',
	'UPLOAD_AVATAR' => 'Enviar nuevo Avatar',
	'DELETE_AVATAR' => 'Borrar Imagen',
	'CURRENT_AVATAR' => 'Avatar actual',
	
	'USERCOLOR' => 'Color de usuario',
	'USERCOLOR_EXPLAIN' => 'Es el color de usuario que aparecer&aacute; en tu perfil y en los mensajes que publiques en el foro, p&aacute;ginas de usuarios y en todos los lugares donde se pueda comentar.',
	'USERCOLOR_TOO_LOW' => 'No se puede seleccionar un color muy claro, para que sea legible en el fondo gris del sitio.',
	'USERPAGE_ERROR' => 'El color es inv&aacute;lido.',
	
	'HIDE_MEMBER' => 'Ocultar conexi&oacute;n de usuario',
	'PROFILE_UPDATED' => 'El perfil fue actualizado',
	'PROFILE_UPDATED_INACTIVE' => 'Tu perfil ha sido actualizado, sin embargo, has cambiado detalles importantes y tu cuenta fue desactivada. Revisa tu email para saber como reactivar tu cuenta.',
	
	'EMPTY_PASSWORD' => 'Debes especificar una contrase&ntilde;a para tu cuenta',
	'EMPTY_PASSWORD_CONFIRM' => 'Debes re-escribir la contrase&ntilde;a para tu cuenta',
	'PASSWORD_MISMATCH' => 'Las contrase&ntilde;as ingresadas no coinciden',
	'PASSWORD_LONG' => 'Tu contrase&ntilde;a es demasiado larga',
	'CURRENT_PASSWORD_MISMATCH' => 'La contrase&ntilde;a ingresada no coincide con la almacenada en la base de datos',
	'EMPTY_USERNAME' => 'El nombre de usuario es requerido',
	'USERNAME_INVALID' => 'El nombre de usuario es inv&aacute;lido, puede ser entre 2 y 20 caracteres y, &uacute;nicamente se permiten letras, n&uacute;meros, guiones y espacio',
	'USERNAME_LONG' => 'El nombre de usuario no puede ser mayor de 20 caracteres',
	'USERNAME_TAKEN' => 'El nombre de usuario ya est&aacute; en uso',
	'USERNAME_DISALLOWED' => 'No puedes usar ese nombre de usuario',
	'EMPTY_EMAIL' => 'La direcci&oacute;n de correo electr&oacute;nico es requerida',
	'EMPTY_EMAIL2' => 'Debes re-escribir la direcci&oacute;n de correo electr&oacute;nico',
	'EMAIL_MISMATCH' => 'Las direcciones de correo electr&oacute;nico no coinciden',
	'EMAIL_TAKEN' => 'La direcci&oacute;n de correo electr&oacute;nico ya est&aacute; en uso por otro miembro',
	'EMAIL_BANNED' => 'La direcci&oacute;n de correo electr&oacute;nico est&aacute; bloqueada',
	'EMAIL_INVALID' => 'La direcci&oacute;n de correo electr&oacute;nico es inv&aacute;lida',
	'SIGNATURE_TOO_LONG' => 'La firma es muy larga',
	'FIELDS_EMPTY' => 'Debes llenar todos los datos requeridos',
	'AVATAR_FILETYPE' => 'El tipo de imagen &uacute;nicamente puede ser JPG &oacute; GIF',
	'AVATAR_FILESIZE' => 'El tama&ntilde;o del archivo debe ser menor a %d kb',
	'AVATAR_GENERAL_ERROR' => 'Hubo un error al enviar el archivo de avatar.',
	'AVATAR_IMAGESIZE' => 'El tama&ntilde;o de imagen del avatar debe tener 5d pixels de ancho por %d pixels de alto',
	'EMPTY_BIRTH_MONTH' => 'Debes completar la fecha de tu cumplea&ntilde;os',
	'AGREETOS_ERROR' => 'Debes aceptar nuestros t&eacute;rminos de servicio para completar tu suscripci&oacute;n',
	'RANK_TOO_LONG' => 'El rango que has ingresado es muy largo.',
	'RANK_EXPLAIN' => 'El texto que aparecer&aacute; debajo de tu usuario en los mensajes que publiques.',
	
	'WELCOME_SUBJECT' => 'Bienvenido a Rock Republik',
	'NEW_ACCOUNT_SUBJECT' => 'Nueva cuenta de usuario',
	'ACCOUNT_ACTIVATED_SUBJECT' => 'Membres&iacute;a activada',
	
	'MEMBERSHIP_ADDED' => 'Gracias por crear tu membres&iacute;a.<br /><br />Hemos enviado un mensaje a tu cuenta de email para verificar tu registro.<br />Esperamos tu confirmaci&oacute;n.',
	'MEMBERSHIP_ADDED_CONFIRM' => 'Gracias por confirmar tu correo.<br />Ahora puedes entrar con tu usuario para participar en nuestro sitio.',
	'CLICK_PROCEED' => 'Click %AQUI%s para ir a la Portada',
	
	'MEMBERSHIP_BENEFITS' => 'Beneficios de los miembros',
	'MEMBERSHIP_BENEFITS2' => array(
		'Env&iacute;o de mensajes en chat, bandas, foro, art&iacute;culos, eventos, etc.',
		'Acceso a la informaci&oacute;n de otros miembros',
		'P&aacute;gina personal con libro de visitas'
	),
	
	'PASSWORD_UPDATED' => 'Se ha creado una nueva contrase&ntilde;a, por favor revisa tu email por detalles sobre como activarla',
	'NO_EMAIL_MATCH' => 'El email ingresado no pertenece a ese usuario',
	'NEW_PASSWORD_ACTIVATION' => 'Activaci&oacute;n de nueva contrase&ntilde;a',
	'PASSWORD_ACTIVATED' => 'Tu cuenta ha sido re-activada. Para entrar usa la contrase&ntilde;a provista en el email recibido',
	
	'SEND_EMAIL' => 'Email',
	'NO_MEMBER_SPECIFIED' => 'Debes seleccionar un miembro',
	'USER_PREVENT_EMAIL' => 'Este miembro no desea recibir email. Enviale un mensaje privado',
	'CC_EMAIL' => 'Enviar una copia de este mensaje a mi email',
	'EMAIL_MESSAGE_EXPLAIN' => 'Este mensaje ser&aacute; enviado como texto simple, no incluyas HTML. La direcci&oacute;n de respuesta para este mensaje ser&aacute; tu email.',
	'FLOOD_EMAIL' => 'No puedes enviar otro email en este momento, intentalo m&aacute;s tarde',
	'RECIPIENT' => 'Destinatario',
	'EMAIL_SENT' => 'El email ha sido enviado',
	'EMPTY_EMAIL_SUBJECT' => 'Debes escribir un asunto para el email',
	'EMPTY_EMAIL_MESSAGE' => 'Debes escribir un mensaje para el email',
	
	'VIEW_INFORMATION' => 'Ver Informaci&oacute;n',
	'CLOSE_WINDOW' => 'Cerrar Ventana',
	
	'SORRY_AUTH_ANNOUNCE' => 'S&oacute;lo %s pueden publicar anuncios en este foro',
	'SORRY_AUTH_STICKY' => 'S&oacute;lo %s pueden publicar PostIt en este foro',
	'SORRY_AUTH_READ' => 'S&oacute;lo %s pueden leer temas en este foro',
	'SORRY_AUTH_POST' => 'S&oacute;lo %s pueden publicar temas en este foro',
	'SORRY_AUTH_REPLY' => 'S&oacute;lo %s pueden responder a mensajes en este foro',
	'SORRY_AUTH_EDIT' => 'S&oacute;lo %s pueden editar mensajes en este foro',
	'SORRY_AUTH_DELETE' => 'S&oacute;lo %s pueden borrar mensajes en este foro',
	'SORRY_AUTH_VOTE' => 'S&oacute;lo %s pueden votar en encuestas en este foro',
	
	'AUTH_ANONYMOUS_USERS' => '<b>usuarios an&oacute;nimos</b>',
	'AUTH_REGISTERED_USERS' => '<b>usuarios registrados</b>',
	'AUTH_USERS_GRANTED_ACCESS' => '<b>usuarios con acceso especial</b>',
	'AUTH_MODERATORS' => '<b>moderadores</b>',
	'AUTH_ADMINISTRATORS' => '<b>administradores</b>',
	
	'NOT_MODERATOR' => 'No eres moderador en este foro',
	'NOT_AUTHORISED' => 'No Autorizado',
	
	'YOU_ARE_BANNED' => 'No se puede tener acceso a esta cuenta.',
	
	//
	// MODERATOR CONTROL PANEL
	//
	'MCP' => 'Panel de Control del Moderador',
	'MOD_CP_EXPLAIN' => 'Usando el siguiente formulario puedes realizar operaciones de moderaci&oacute;n en este foro. Puede cerrar, desbloquear, mover o borrar cualquier n&uacute;mero de temas.',
	
	'MCP_TOPIC' => 'Panel de Control del Tema',
	
	'SELECT' => 'Seleccionar',
	'DELETE' => 'Borrar',
	'MOVE' => 'Mover',
	'LOCK' => 'Bloquear',
	'UNLOCK' => 'Desbloquear',
	'STICKY' => 'PostIt',
	'ANNOUNCE' => 'Anuncio',
	'ANNOUNCES' => 'Anuncios',
	'NORMALISE' => 'Normal',
	
	'TOPICS_REMOVED' => 'Los temas seleccionados han sido removidos con &eacute;xito de la base de datos.',
	'TOPICS_LOCKED' => 'Los temas seleccionados han sido cerrados',
	'TOPICS_MOVED' => 'Los temas seleccionados han sido movidos',
	'TOPICS_UNLOCKED' => 'Los temas seleccionados han sido desbloqueados',
	'NO_TOPICS_MOVED' => 'No se movieron temas',
	'TOPICS_STICKYD' => 'Los temas seleccionados ahora son Stickies',
	'TOPICS_ANNOUNCED' => 'Los temas seleccionados ahora son Anuncios',
	'TOPICS_NORMALISED' => 'Los temas seleccionados ahora son Normales',
	
	'CONFIRM_DELETE_TOPIC' => '&iquest;Est&aacute;s seguro que quieres eliminar el/los tema/s seleccionado/s?',
	'CONFIRM_LOCK_TOPIC' => '&iquest;Est&aacute;s seguro que quieres cerrar el/los tema/s seleccionado/s?',
	'CONFIRM_UNLOCK_TOPIC' => '&iquest;Est&aacute;s seguro que quieres desbloquear el/los tema/s seleccionado/s?',
	'CONFIRM_MOVE_TOPIC' => '&iquest;Est&aacute;s seguro que quieres mover el/los tema/s seleccionado/s?',
	
	'MOVE_TO_FORUM' => 'Mover al foro',
	'LEAVE_SHADOW_TOPIC' => 'Dejar tema sombreado en antiguo foro',
	
	'SPLIT_TOPIC_TITLE' => 'Panel de Control para Divisi&oacute;n de Temas',
	'SPLIT_TOPIC_EXPLAIN' => 'Usando el siguiente formulario puedes dividir un tema en dos, ya sea seleccionando los mensajes individualmente o dividi&eacute;ndolo en un mensaje determinado',
	'SPLIT_TITLE' => 'T&iacute;tulo para nuevo tema',
	'SPLIT_FORUM' => 'Foro para nuevo tema',
	'SPLIT_POSTS' => 'Dividir mensajes seleccionados',
	'SPLIT_AFTER' => 'Dividir desde el mensaje seleccionado',
	'SPLIT_SPLIT' => 'El tema seleccionado ha sido dividido con &eacute;xito',
	
	'TOO_MANY_ERROR' => 'Has seleccionado muchos mensajes. Solo puedes escoger un mensaje para dividir un tema a partir de &eacute;l',
	'NONE_SELECTED' => 'No has seleccionado temas para esta operaci&oacute;n. Por favor regresa y selecciona al menos uno.',
	
	'NEW_FORUM' => 'Nuevo foro',
	'THIS_POSTS_IP' => 'IP para este mensaje',
	'OTHER_IP_THIS_USER' => 'Otros IPs desde los que este miembro ha publicdo mensajes',
	'USERS_THIS_IP' => 'Usuarios publicando de este IP',
	'IP_INFO' => 'Informaci&oacute;n IP',
	'LOOKUP_IP' => 'Buscar por IP',
	
	'datetime' => array(
		'Sunday'	=> 'Domingo',
		'Monday'	=> 'Lunes',
		'Tuesday'	=> 'Martes',
		'Wednesday'	=> 'Mi&eacute;rcoles',
		'Thursday'	=> 'Jueves',
		'Friday'	=> 'Viernes',
		'Saturday'	=> 'Sabado',

		'Sun'		=> 'Dom',
		'Mon'		=> 'Lun',
		'Tue'		=> 'Mar',
		'Wed'		=> 'Mi&eacute;',
		'Thu'		=> 'Jue',
		'Fri'		=> 'Vie',
		'Sat'		=> 'Sab',

		'January'	=> 'enero',
		'February'	=> 'febrero',
		'March'		=> 'marzo',
		'April'		=> 'abril',
		'May'		=> 'mayo',
		'June'		=> '=junio',
		'July'		=> 'julio',
		'August'	=> 'agosto',
		'September' => 'septiembre',
		'October'	=> 'octubre',
		'November'	=> 'noviembre',
		'December'	=> 'diciembre',

		'Jan'		=> 'Ene',
		'Feb'		=> 'Feb',
		'Mar'		=> 'Mar',
		'Apr'		=> 'Abr',
		'Jun'		=> 'Jun',
		'Jul'		=> 'Jul',
		'Aug'		=> 'Ago',
		'Sep'		=> 'Sep',
		'Oct'		=> 'Oct',
		'Nov'		=> 'Nov',
		'Dec'		=> 'Dic',

		'TODAY'		=> 'Hoy',
		'YESTERDAY'	=> 'Ayer',
	),
	
	'zones'	=> array(
		'-12.00'	=> 'GMT - 12',
		'-11.00'	=> 'GMT - 11',
		'-10.00'	=> 'GMT - 10',
		'-9.00'	=> 'GMT - 9',
		'-8.00'	=> 'GMT - 8',
		'-7.00'	=> 'GMT - 7',
		'-6.00'	=> 'GMT - 6 (Guatemala)',
		'-5.00'	=> 'GMT - 5',
		'-4.00'	=> 'GMT - 4',
		'-3.00'	=> 'GMT - 3',
		'-2.00'	=> 'GMT - 2',
		'-1.00'	=> 'GMT - 1',
		'0.00'		=> 'GMT',
		'1.00'		=> 'GMT + 1',
		'2.00'		=> 'GMT + 2',
		'3.00'		=> 'GMT + 3',
		'4.00'		=> 'GMT + 4',
		'5.00'		=> 'GMT + 5',
		'6.00'		=> 'GMT + 6',
		'7.00'		=> 'GMT + 7',
		'8.00'		=> 'GMT + 8',
		'9.00'		=> 'GMT + 9',
		'10.00'	=> 'GMT + 10',
		'11.00'	=> 'GMT + 11',
		'12.00'	=> 'GMT + 12'
	),
	
	'VISITS_COUNT' => 'N&uacute;mero de visitas',
	'PAGEVIEWS_COUNT' => 'P&aacute;ginas vistas',
	
	'INFORMATION' => 'Informaci&oacute;n',
	'COMMENTS' => 'Comentarios',
	'VIEW_COMMENTS' => 'Ver comentarios',
	'VIEW_COMPLETE_LIST' => 'Ver lista completa',
	'POLL' => 'Encuesta',
	'POLL_COMMENT' => 'comentario',
	'POLL_COMMENTS' => 'comentarios',
	
	//
	// Comments
	//
	'CMT_REPLY' => 'Responder',
	'CMT_REPORT' => 'Reportar',
	'CMT_IP' => 'IP',
	'CMT_EDIT' => 'Editar',
	'CMT_DELETE' => 'Borrar',
	'CMT_RESTORE' => 'Restaurar',
	
	
	//
	// SITE HISTORY
	//
	'SITE_HISTORY' => 'Historial de Rock Republik',
	'MONTH' => 'Mes',
	'WEEKDAY' => 'D&iacute;a de la semana',
	'NOT_AVAILABLE' => 'No disponible',
	'TOTAL_USERS' => 'Max usuarios',
	'REG_USERS' => 'Miembros',
	'HIDDEN_USERS' => 'Miembros ocultos',
	'GUESTS_USERS' => 'Usuarios invitados',
	'NEW_USERS' => 'Nuevos miembros',
	'NEW_TOPICS' => 'Nuevos temas',
	'NEW_POSTS' => 'Nuevas respuestas',
	'MOST_ONLINE' => 'M&aacute;ximo de miembros conectados %s',
	'MOST_ONLINE_WEEK' => 'M&aacute;ximo de usuarios en la &uacute;ltima semana',
	'LAST_24' => 'M&aacute;ximo de usuarios en las pasadas %s horas',
	'TOP_POSTING_USERS' => 'Miembros que mas escriben',
	'TOP_POSTING_USERS_WEEK' => 'Usuarios que mas escriben esta semana [%s]',
	'RANK' => 'Rango',
	'PERCENT' => 'Porcentaje',
	'GRAPH' => 'Gr&aacute;fica',
	'TOP_VISITING_USERS' => 'M&aacute;ximo tiempo de usuarios',
	
	'CHECK_ALL' => 'Seleccionar todos',
	'UNCHECK_ALL' => 'Deseleccionar todos',
	
	'NOWPLAYING' => '&iquest;Qu&eacute; canci&oacute;n est&aacute;s escuchando?',
	
	//
	// PAGE HEADER
	//
	'HOME' => 'Inicio',
	'UB' => 'Artistas',
	'UB_NEW' => 'Artistas nuevos',
	'COMMUNITY' => 'Comunidad',
	'USERS' => 'Usuarios',
	'TOP_FORUM' => 'Ultimos %s mensajes del Foro',
	'ALLIES' => 'Aliados',
	
	'VIEW_INFO' => 'Ver Informaci&oacute;n',
	'SEND_POST' => 'Env&iacute;a tu comentario',
	'OF' => 'de',
	'OF_COMM' => '\d\e',
	'IN' => 'en',
	'PRIVACY_POLICY' => 'Pol&iacute;tica de Privacidad y T&eacute;rminos de servicio',
	
	//
	// SITE NOTICES
	//
	'NOTICE_ARTISTS' => '&iquest;Te gustar&iacute;a que tu banda obtenga el apoyo de <strong>Rock Republik</strong>?<br /><br />Env&iacute;anos el material completo a info&#64;rockrepublik.net para tener su propio espacio!',
	'NOTICE_EVENTS' => '&iquest;Te gustar&iacute;a anunciar un evento o actividad en esta secci&oacute;n?<br /><br />Env&iacute;anos el afiche a info&#64;rockrepublik.net y lo publicaremos. Agradeceremos que incluyas <a href="http://www.rockrepublik.net/home/downloads/logo.zip">nuestro logo</a> en la publicidad del evento.',
	
	// ALLIES
	'ALLIES_DESCRIPTION' => '&iquest;Te gustar&iacute;a formar parte de los Aliados de Rock Republik?<br /><br />Env&iacute;anos la informaci&oacute;n de tu sitio web a: <a class="high" href="mailto:info&#64;rockrepublik.net">info&#64;rockrepublik.net</a>',
	
	//
	// NEWS
	//
	'NEWS' => 'Art&iacute;culos',
	'LATEST_NEWS' => '&Uacute;ltimas noticias',
	'NEWS2' => 'Art&iacute;culo',
	'NEWS_LOCAL' => 'Nacional',
	'NEWS_NON_LOCAL' => 'Internacional',
	
	//
	// UNREAD MESSAGE CENTER
	//
	'THENEW' => 'Lo Nuevo',
	'NEW_MARK' => 'Marcar como leidos autom&aacute;ticamente',
	'NEW_MARK_NEVER' => 'Nunca',
	'NEW_MARK_ALWAYS' => 'Siempre',
	'NEW_DELETE_ALL' => 'Borrar Todos los Marcados',
	'NO_NEW_ITEMS' => 'No hay informaci&oacute;n nueva desde tu &uacute;ltima visita!',
	'NEW_ITEMS' => 'elementos no le&iacute;dos',
	'NEW_ITEM' => 'elemento no le&iacute;do',
	
	'NEW_FORUM' => 'Mensajes del Foro',
	'NEW_UB_MSG' => 'Mensajes a Bandas',
	'NEW_DL_MSG' => 'Mensajes a Descargas',
	'NEW_FANS' => 'Fans de Bandas',
	'NEW_FAN' => 'agreg&oacute; a sus favoritos a',
	'NEW_FRIEND' => 'te agreg&oacute; a sus amigos.',
	'NEW_USERPAGE_MESSAGE' => ' ha escrito en tu perfil.',
	'USERPAGE_UNREAD_MESSAGES' => 'Mensajes en tu perfil',
	
	//
	// MEDIA
	//
	'AUDIO' => 'M&uacute;sica',
	'VIDEO' => 'Videos',
	'PLAY_FILE' => 'Reproducir archivo',
	'DOWNLOADS' => 'Descargas',
	
	//
	// ARTISTS
	'ARTISTS' => 'Artistas',
	//
	
	// INDEX STATS
	'UB_TOP_DATETIME' => 'Nueva',
	'UB_TOP_VIEWS' => 'M&aacute;s visitada',
	'UB_TOP_VOTES' => 'M&aacute;s votada',
	'UB_TOP_POSTS' => 'M&aacute;s mensajes',
	'UB_TOP_U_UD' => 'M&aacute;s descargas',
	
	'RAND_A' => 'Mostrar 10 al azar',
	
	'NO_ARTIST_EXIST' => 'La banda seleccionada no existe.<br /><br /><a href="%s">Click AQUI</a> para ir al men&uacute; de bandas.',
	'ARTIST_INACTIVE' => 'Banda inactiva',
	'ARTIST_INACTIVE_DESC' => 'Si tienes informaci�n env&iacute;alo a <a class="orange" href="/community/">nuestro correo electr&oacute;nico</a>.',
	'UB_BANNED' => 'Ha sido bloqueado tu acceso a esta banda, <a class="orange" href="/community/">contacta a un Administrador</a> para m&aacute;s detalles.',
	'UB_BANNED_UNTIL' => 'Ha sido bloqueado tu acceso a esta banda hasta: <span class="red bold">%s</span>',
	'UB_BAN_POST' => 'Se ha restringido tu env&iacute;o de mensajes!',
	'UB_BAN_POST_UNTIL' => 'Se permite de nuevo',
	'UB_NO_GUEST_POSTING' => '<strong>%s</strong> s&oacute;lo permite comentarios de miembros registrados.<br /><br />Por favor <a href="#top"><i>inicia sesi&oacute;n</i></a> &oacute; <a class="bold" href="%s">suscribete</a>.<br />',
	'UB_MANAGE_MODS' => 'Administrar Miembros',
	'A_NEWS_CREATE' => 'Publicar art&iacute;culo',
	
	'LOCAL_ARTISTS' => 'Guatemala',
	'NON_LOCAL_ARTISTS' => 'Internacionales',
	'VIEW_ALL_ARTISTS' => 'Ver lista completa',
	'SEARCH_ARTISTS' => 'Buscar bandas',
	'SELECTED_LETTER' => 'Letra seleccionada',
	
	'UB_NOT_DEF' => 'No definido',
	'UB_ORDER_BY' => 'Ordenar bandas por',
	'UB_ORDER_NAME' => 'Nombre',
	'UB_ORDER_DATE' => 'Fecha de Inscripci&oacute;n',
	'UB_ORDER_NAME' => 'Nombre',
	'UB_ORDER_VIEWS' => 'Visitas',
	'UB_ORDER_POSTS' => 'Cantidad de mensajes',
	'UB_ORDER_VOTES' => 'Votos',
	'UB_IMAGES' => 'Fotograf&iacute;as de bandas',
	
	'UB_NEWS' => 'Art&iacute;culos',
	'UB_GENRE' => 'G&eacute;nero',
	'UB_RATE' => 'Calificar Banda',
	'UB_FAV_ADD' => 'Agregar a Favoritos',
	'UB_FAV_DEL' => 'Borrar de Favoritos',
	'UB_RECENT_F' => 'Fans Recientes',
	'UB_RECENT_V' => 'Visitantes Recientes',
	'UB_AUTH_MEMBERS' => 'Autorizados',
	
	'DL_FAV' => 'Agregar a mis Favoritos',
	
	// NAVBAR
	'UB_L01' => 'Portada',
	'UB_L02' => 'Biograf&iacute;a',
	'UB_L03' => 'Discografia',
	'UB_L04' => 'Fotos',
	'UB_L05' => 'Tablaturas',
	'UB_L06' => 'L&iacute;ricas',
	'UB_L07' => 'Entrevistas',
	'UB_L08' => 'Club de Fans',
	'UB_L17' => 'Videos',
	
	// POLL
	'UB_VC1' => 'Excelente',
	'UB_VC2' => 'Muy Buena',
	'UB_VC3' => 'Buena',
	'UB_VC4' => 'No la he oido',
	'UB_VC5' => 'Debe Mejorar',
	'UB_VC6' => 'No me gusta',
	
	'UB_UDV1' => 'Excelente',
	'UB_UDV2' => 'Muy Buena',
	'UB_UDV3' => 'Buena',
	'UB_UDV4' => 'Podr&iacute;a ser mejor',
	'UB_UDV5' => 'No me gusta',
	
	'UB_UD_RATE' => 'Opini&oacute;n de usuarios',
	'UB_UD_RATEPOLL' => 'Valoraci&oacute;n',
	'VIEW' => 'Visita',
	'DL' => 'Descarga',
	
	//
	// CHAT
	//
	'CHAT' => 'Chat',
	'CHAT_DESC' => 'Este es el nuevo <b>Chat</b> de Rock Republik, con diferentes <b>canales de charla</b> en <b>tiempo real</b>.',
	'CHAT_DESC_GUEST' => 'Para tener acceso al chat, debes ser miembro registrado, si no lo eres, puedes <a class="bold red" href="/my/register/">Crear tu cuenta Aqui</a>.',
	'CHAT_NO_ACCESS' => '<div align="left"><strong class="fnt12">No tienes permiso para entrar a este canal.</strong><br /><br />Posibles razones:<br /><br />Tu nombre de usuario fue bloqueado en este canal.<br />Si es un canal privado, &uacute;nicamente pueden entrar miembros autorizados por el grupo de fundadores.<br />Si es un canal para amigos, &uacute;nicamente pueden entrar miembros que est&eacute;n en la lista de amigos del fundador.<br /><br /><br />Para m&aacute;s informaci&oacute;n, comunicate con el fundador del canal &oacute; alguien del Equipo Rock Republik, en la secci&oacute;n <a href="/community/" class="orange">Comunidad</a>.</div>',
	'CHAT_CH' => 'Canales',
	'CHAT_JOIN' => 'Entrar!',
	'CHAT_JOINING' => 'Entrando...',
	'CHAT_CH_OFFICIAL' => 'Rock Republik',
	'CHAT_CH_ALL' => 'Todos',
	'CHAT_CH_PRIVATE' => 'Privado',
	'CHAT_NO_USERS' => 'Debes escribir tu nombre de usuario!',
	'CHAT_FOR_USERS' => 'Debes iniciar sesi&oacute;n para entrar!',
	'CHATTERS' => 'miembros chateando!',
	
	//
	// COMMUNITY
	//
	'COMM_CONTACT' => 'Contactanos',
	'COMM_WE' => 'Creadores de Rock Republik',
	'COMM_FOUNDER' => 'Director | Fundador',
	'COMM_ADMIN' => 'Administrador',
	'COMM_TEAM' => 'Equipo de Trabajo',
	
	//
	// EVENTS
	//
	'EVENTS_NEXT' => 'Pr&oacute;ximos Eventos',
	'UE' => 'Eventos',
	'UE_NO_INFO' => 'No hay fotograf&iacute;as disponibles de este evento.',
	'UE_DOWNLOAD_IMAGE' => 'Descargar Imagen',
	'LAST_EVENT' => 'Ultimo Evento',
	'NEXT_EVENT' => 'Pr&oacute;ximo Evento',
	'UE_IS_TODAY' => 'Hoy',
	'UE_IS_TOMORROW' => 'Ma&ntilde;ana',
	'UE_IS_WEEK' => 'Esta Semana',
	'UE_IS_FUTURE' => 'Futuros',
	'UE_HTML_TITLE' => 'Evento [ %s ]',
	'UE_GALLERY' => 'Galer&iacute;a de Eventos',
	'UE_NO_DATA' => 'No hay afiche del evento, pronto ser&aacute; publicado.',
	'UE_NO_IMAGES' => 'No hay fotos del evento, pronto ser&aacute;n publicadas.<br /><br />Mientras tanto escribe tu opini&oacute;n!',
	'UE_PHOTOS' => 'fotograf&iacute;as',
	
	'EVENT_ASSIST' => '&iquest;Asistir&aacute;s?',
	'EVENT_AFTER' => 'Programado para el %s',
	'EVENT_BEFORE' => 'Se realiz&oacute; el %s',
	'EVENT_TODAY' => 'Programado para <strong>hoy</strong>',
	'EVENT_TOMORROW' => 'ProgamadO para <strong>ma&ntilde;ana</strong>',
	'EVENT_YESTERDAY' => 'Se realiz&oacute; <strong>ayer</strong>',
	'EVENT_PHOTO_THANKS' => 'Fotos gracias a:',
	
	'UE_CORRESP' => 'Corresponsales',
	'UE_SEND_PHOTOS' => 'Enviar Fotos',
	'UE_SEND_FILES' => 'Enviar Archivos',
	'UE_SENT_FILES' => 'Archivos Enviados',
	'UE_SEND_FILE_TEXT' => 'Archivo para Enviar',
	'UE_FOLDER_SPACE' => 'Espacio Ocupado',
	'UE_FILENAME' => 'Nombre de Archivo',
	'UE_FILESIZE' => 'Tama&ntilde;o de Archivo',
	'UE_SENT_DATE' => 'Fecha de Env&iacute;o',
	'UE_MIMETYPE' => 'Tipo de Archivo',
	'UE_TOTAL_FOLDER_SPACE' => '<b>Espacio Ocupado Total:</b> ',
	'UE_SYNC' => '<b>Sync</b>: ',
	'UE_INFORM_TEXT' => 'Informe',
	'UE_EVENT_TITLE' => 'Nombre del Evento',
	'UE_RETURN_LINK' => '<br /><br />Click <a href="%s" target="_self">AQUI</a> para volver a pantalla de "Enviar Fotos"',
	'UE_NO_EXTENSION' => 'Sin Extensi&oacute;n',
	'UE_DOWNLOAD' => 'Descargar Archivo!',
	'UE_DELETE' => 'Eliminar Archivo',
	'UE_CANT_DOWNL0AD' => 'No se puede descargar el archivo seleccionado.',
	'UE_CANT_VIEW' => 'No se puede visualizar el archivo seleccionado.',
	'UE_CANT_DELETE' => 'No se puede eliminar el archivo seleccionado. ( <span style="color:#999900"><b>%s</b></span> )',
	'UE_DELETED' => 'El archivo ( <span style="color:#999900"><b>%s</b></span> ) fue eliminado permanentemente de Rock Republik.',
	
	//
	// BOUNCE
	//
	// 'LINKS_' => '',
	'LINKS' => 'Enlaces',
	'LINKS_FRIENDS' => 'Sitios Amigos',
	'LINKS_WEBSITE' => 'Sitio Web',
	'LINKS_CANT_REDIRECT' => '[ <a href="http://%1$s" target="_self">%1$s</a> ] no est&aacute; disponible en este momento.',
	
	// SOCIAL NETWORKS
	'SOCIAL_NETWORKS' => 'Redes sociales',
	
	//
	// USER PAGES
	//
	'BIRTHDAY' => 'Cumplea&ntilde;os',
	'ONLINE' => 'Conectado',
	'OFFLINE' => 'Desconectado',
	'HIDDEN' => 'Oculto',
	'GENDER' => 'G&eacute;nero',
	'MALE' => 'Hombre',
	'FEMALE' => 'Mujer',
	'NO_GENDER' => 'Desconocido',
	'AGE' => 'Edad',
	'FRIENDS' => 'Amigos',
	'FRIENDS_LIST' => 'Lista de Amigos',
	'FRIEND_OF' => 'Amigo de...',
	'YEARS' => 'a&ntilde;os',
	
	//
	// FRIENDS
	//
	'FRIENDS_ADD' => 'Agregar a mis Amigos',
	'FRIENDS_DEL' => 'Borrar de mis Amigos',
	
	'ART' => 'Arte',
	'ART_RESOLUTION' => 'Resoluci&oacute;n',
	'ART_VIEWS' => 'Visitas',
	'ART_DL' => 'Descargas',
	'ART_DL2' => 'Descarga',
	'ART_DATETIME' => 'Fecha de env&iacute;o',
	'ART_FILESIZE' => 'Tama&ntilde;o de archivo',
	'ART_EMPTY' => 'No hay wallpapers disponibles en este momento.',
	
	//
	// COMMUNITY
	//
	'ONLINE_MEMBERS' => 'Miembros conectados',
	'TOS' => 'T&eacute;rminos de Servicio',
	'TODAY_BIRTHS' => 'Cumplea&ntilde;eros',
	
	//
	// USERPAGE
	//
	'USERPAGE_MAIN' => 'Perfil',
	'USERPAGE_DC' => 'Conversaciones',
	'USERPAGE_FAVS' => 'Favoritos',
	'USERPAGE_FRIENDS' => 'Amigos',
	'USERPAGE_FRIENDOF' => 'Amigo de',
	'USERPAGE_POSTS' => 'Mensajes',
	'USERPAGE_STATS' => 'Estad&iacute;sticas',
	'USERPAGE_MOD' => 'Miembro Autorizado',
	'USERPAGE_AFAVS' => 'Bandas favoritas',
	
	// UPLOAD
	'UPLOAD_FAILED' => 'Error al enviar el archivo',
	'UPLOAD_INVALID_EXT' => 'La extensi&oacute;n del archivo es inv&aacute;lida',
	'UPLOAD_TOO_BIG' => 'El tama&ntilde;o de archivo que est&aacute;s enviando es mayor al m&aacute;ximo permitido',
	'UPLOAD_IMAGE_ERROR' => 'Error en el archivo de imagen',
	
	// WEBSITES
	'WS_WEBSITES' => 'Sitios Web',
	'IMAGES' => 'Im&aacute;genes',
	'BOARD_LATEST' => 'Temas recientes',
	'BOARD_EVENTS' => 'Eventos recientes',
	
	// Radio
	'RADIO' => 'Radio',
	'RADIO_ACTIVE' => '',
	'RADIO_INACTIVE' => 'La radio no est&aacute; disponible en este momento.',
	'RADIO_LISTENER' => 'Hay %d usuario escuchando la radio.',
	'RADIO_LISTENERS' => 'Hay %d usuarios escuchando la radio.',
	'RADIO_SONGS' => 'Historial de canciones',
	'RADIO_DJK' => 'Control de locutor',
	'RADIO_DJKR' => ' segundos restantes',
	
	'RSS' => 'RSS',
	'RSS_ARTISTS' => 'Rock Republik: Artistas',
	'RSS_EVENTS' => 'Rock Republik: Eventos',
	'RSS_NEWS' => 'Rock Republik: Art&iacute;culos',
	'RSS_DESC_ARTISTS' => '&Uacute;ltimos artistas registrados en Rock Republik.',
	'RSS_DESC_EVENTS' => 'Archivo de fotograf&iacute;as de &uacute;ltimos eventos.',
	'RSS_DESC_NEWS' => 'Art&iacute;culos de Rock Republik',
	
	'DIS_INVALID' => 'Algunas imagenes del paquete no cumplen con el tama&ntilde;o requerido (600x#) o (#x600), corregir dimensiones de imagen.<br /><br />',
	'AP_PROGRAM_FIELD' => '&iquest;D&oacute;nde conociste a Rock Republik?',
	'AP_PROGRAM_VALUE' => 'Nombre',
	'AP_POINT' => '%d Arkane',
	'AP_POINTS' => '%d Arkanes',
	
	'SHOUTCAST' => 'Shoutcast'
);

?>