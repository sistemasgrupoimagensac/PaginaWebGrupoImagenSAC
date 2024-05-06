@extends('layouts.app')

@section('estilos')

    <style>
        #hero:before {
            content: "";
            background: #23326D;
            position: absolute;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
        }

        .about .video-box {
            background: url('{{ asset('galeria_imagenes/' . $configuracion->url_prestamo) }}') center center no-repeat;
            background-size: contain;
            min-height: 300px;
        }

        #hero {
            background-attachment: fixed;
            height: auto;
        }

    </style>


@endsection


@section('content')

<div class="container pt-5  mt-5">
    <h2 class="text-start">Política de privacidad</h2>
    <p>La presente Política de Privacidad (en adelante la "Política") tiene por finalidad informar la manera en cómo P2P FINANCE CONSULTING SAC (en adelante "Grupo Imagen"), con domicilio en Av. Canaval y Moreyra 290 Oficina No. 41 y 42, San Isidro, Lima, Perú, con R.U.C. 20600169841; trata su información personal a través de la plataforma "www..pe" (en adelante la "Plataforma"). La Política describe toda la tipología de información personal que se recaba de sus Usuarios y todos los tratamientos que se realizan con dicha información. El Usuario declara haber leído y aceptado de manera previa y expresa la Política sujetándose a sus disposiciones.</p>
    <p>* Para efectos de esta Política toda referencia a "nos", "nosotros", o "nuestra", se refiere a Grupo Imagen.</p>
    
    <p><strong>1. Obtención de la información</strong></p>
    <p>Para navegar y hacer uso de la Plataforma, un Usuario no requiere facilitar información personal. Sin embargo, la Plataforma incorpora un formulario de registro voluntario que solicita al Usuario datos personales que permiten identificarlo, contactarlo y localizarlo. <br>
    <br>La información solicitada es la siguiente:</p>
    
    <span>Nombres completos.</span><br>
    <span>Apellidos completos.</span><br>
    <span>Correo electrónico.</span><br>
    <span>Número de documento de identidad.</span><br>
    <span>Teléfono celular.</span><br><br>
    
    <p>Datos registrados sobre la propiedad a dejar en garantía como: tipo de propiedad, ubicación, área total, cargas y titularidad.
    Asimismo, Grupo Imagen requiere almacenar información relativa al comportamiento del Usuario dentro de la Plataforma, entre la que se incluye:</p>
    
     La URL de la que proviene el Usuario (incluyendo las externas a la Plataforma).
    URLs más visitadas por el Usuario (incluyendo las externas a la Plataforma).
    Direcciones IP
    Navegador que utiliza el Usuario.
    Todas las actividades realizadas dentro de la Plataforma.
    Información sobre la operativa de la Plataforma, tráfico, promociones, campañas de venta, estadísticas de navegación, entre otros.
    
    Finalmente, Grupo Imagen podrá requerir al Usuario el llenado de cuestionarios en línea con la finalidad de evaluar y determinar su perfil. Los Usuarios declaran que la información ingresada en dichos cuestionarios es verdadera; y, otorgan a Grupo Imagen la facultad de hacer tratamiento de toda la información ingresada a través de dichos cuestionarios.
    <br><br>
    <p><strong>2. Veracidad de la Información</strong></p>
    <p class="">El Usuario; al registrarse y utilizar la Plataforma, declara que toda la información proporcionada es verdadera, completa y exacta. Cada Usuario es responsable de la veracidad, exactitud, vigencia y autenticidad de la información suministrada, y se compromete a mantenerla debidamente actualizada.
    
    Sin perjuicio de lo anterior, el Usuario autoriza a Grupo Imagen a verificar la veracidad de los datos personales facilitados por el Usuario a través de información obtenida de fuentes de acceso público o entidades especializadas en la provisión de dicha información.
    
    Grupo Imagen no se hace responsable de la veracidad de la información que no sea de elaboración propia, por lo que tampoco asume responsabilidad alguna por posibles daños o perjuicios que pudieran originarse por el uso de dicha información.
    </p>
    <p><strong>3. Conservación de la información</strong></p>
    De acuerdo a lo establecido en la Ley N° 29733, Ley de Protección de Datos Personales, y el Decreto Supremo N° 003-2013-JUS, por el que se aprueba el Reglamento de la Ley de Protección de Datos Personales (la "Ley"), Grupo Imagen informa a los Usuarios de la Plataforma que todos los datos de carácter personal que nos faciliten serán incorporados a un banco de datos debidamente inscrito en la Dirección de Registro Nacional de Protección de Datos Personales y titularidad de Grupo Imagen.
    
    A través de la presente Política de Privacidad, el Usuario da su consentimiento expreso para la inclusión de sus datos personales en el mencionado banco de datos.
    
    Asimismo, Grupo Imagen informa a los Usuarios que su información personal puede estar incluida en bancos de datos que se encuentran alojados en el extranjero en virtud de contratos de servicios de almacenamiento de información que Grupo Imagen tiene suscritos con terceros proveedores de dichos servicios. El Usuario, al registrarse en la presente plataforma manifiesta que está informado sobre la ubicación de dichos bancos de datos y autoriza el flujo transfronterizo de su información personal de ser el caso.
    <br><br>
    <p><strong>4. Tratamiento de la información recopilada</strong></p>
    Los datos personales de los Usuarios de la Plataforma son tratados con las siguientes finalidades:
    
    Atender y procesar solicitudes de registro de Usuarios en la Plataforma.
    Gestionar y administrar las cuentas personales de los Usuarios, así como supervisar el comportamiento y la actividad del Usuario dentro de la Plataforma.
    Evaluación crediticia para determinar el otorgamiento del financiamiento solicitado por el Usuario.
    Contactar al Usuario interesado en utilizar algún servicio ofrecido por la Plataforma, así como absolver sus consultas.
    Informar al Usuario sobre cambios administrativos o de funcionalidad tanto de la Plataforma como de los medios de pago.
    Realizar estudios internos sobre los intereses, comportamientos y hábitos de conducta de los Usuarios a fin de poder ofrecerles un mejor servicio de acuerdo a sus necesidades, con información que pueda ser de su interés.
    Gestionar llamadas recordatorias o preventivas, así como solicitudes de pago de financiamientos previamente otorgados compartiendo la información personal del Usuario con agencias de Cobranzas que mantengan una relación con Grupo Imagen y
    brindar un servicio al cliente más efectivo, valiéndonos para ello del apoyo de proveedores de servicios tales como agencias de call center (terceros), empresas de marketing digital para la gestión de campañas comerciales y empresas de mensajería de voz personalizada e interactiva, mensajería vía mensajes de texto (SMS) y mensajería vía correo electrónico.
    Compartir los datos personales de los Usuarios con terceros tales como empresas que contribuyan a mejorar o facilitar la operatividad de la Plataforma, servicios de transporte, medios de pago, compañías de seguros, gestores, empresas con negocios digitales de Internet tales como eCommerce y cualquier otra empresa que preste servicios o tenga acuerdos comerciales con Grupo Imagen.
    Ofrecer servicios relacionados.
    Adicionalmente, los datos del Usuario serán utilizados con la finalidad de enviarle noticias, promociones, publicidad y novedades de la Plataforma a través de comunicaciones periódicas que serán remitidas a la dirección de correo electrónico que el Usuario facilitó al momento de realizar el registro. Dichas comunicaciones serán consideradas solicitadas y no califican como "spam" bajo la normativa vigente.
    
    Del mismo modo, los datos del Usuario serán utilizados para el envío de comunicaciones comerciales de los establecimientos o comercios electrónicos afiliados a Grupo Imagen así como de empresas vinculadas a ella.
    
    Grupo Imagen informa al Usuario que una vez autorizado el envío de las mencionadas comunicaciones, tendrá la facultad de revocar el consentimiento prestado en cada una de las comunicaciones que reciba de Grupo Imagen, a través de un hipervínculo que se incorpora en todas las comunicaciones, o enviando una solicitud a la siguiente dirección de correo electrónico:  consultas@grupoimagensac.com.pe.
    
    Los datos personales del Usuario también podrán ser compartidos con aquellas empresas vinculadas a Grupo Imagen a fin de que reciba información sobre productos o servicios que puedan ser de su interés.
    
    El Usuario de la Plataforma manifiesta expresamente que ha sido informado de todas las finalidades antes mencionadas y autoriza el tratamiento de sus datos personales con dichas finalidades.
    
    Grupo Imagenle recuerda al Usuario que las finalidades de tratamiento de datos necesarias para la ejecución de la relación contractual que vincula al Usuario registrado y a Grupo Imagen no requieren del consentimiento del mismo.
    <br><br>
    <p><strong>5. Seguridad de la información</strong></p>
    Grupo Imagenadopta las medidas técnicas y organizativas necesarias para garantizar la protección de los datos de carácter personal y evitar su alteración, pérdida, tratamiento y/o acceso no autorizado, habida cuenta del estado de la técnica, la naturaleza de los datos almacenados y los riesgos a que están expuestos, todo ello, conforme a lo establecido por la Ley N° 29733, Ley de Protección de Datos Personales, su Reglamento y la Directiva de Seguridad.
    
    En este sentido, Grupo Imagen usará los estándares de la industria en materia de protección de la confidencialidad de la información personal de los Usuarios de la Plataforma.
    
    Grupo Imagen emplea diversas técnicas de seguridad para proteger tales datos de accesos no autorizados. Sin perjuicio de ello, Grupo Imagen no se hace responsable por interceptaciones ilegales o violación de sus sistemas o bases de datos por parte de personas no autorizadas, así como la indebida utilización de la información obtenida por esos medios, o de cualquier intromisión ilegítima que escape al control de Grupo Imagen y que no le sea imputable.
    
    Grupo Imagen tampoco se hace responsable de posibles daños o perjuicios que se pudieran derivar de interferencias, omisiones, interrupciones, virus informáticos, averías telefónicas o desconexiones en el funcionamiento operativo de este sistema electrónico, motivadas por causas ajenas a Grupo Imagen de retrasos o bloqueos en el uso de la plataforma informática causados por deficiencias o sobrecargas en el Centro de Procesos de Datos, en el sistema de Internet o en otros sistemas electrónicos.
    <br><br>
    <p><strong>6. Información compartida</strong></p>
    Grupo Imagen podrá compartir información con las siguientes sociedades:
    
    Empresa de Cobranza
    Empresa de Call Center
    Empresas vinculadas a Grupo Imagen. Asimismo, queda terminantemente prohibido brindar información personal sobre otro Usuario de la Plataforma sin que nadie exprese autorización por parte del Usuario en cuestión y Grupo Imagen.
    <br>
    
    Grupo Imagen se compromete a no divulgar o compartir con terceros la información personal recabada de los Usuarios sin que se haya prestado el debido consentimiento. Para ello, con excepción de los siguientes casos como:
    <br>
    El uso de los datos personales sea necesario para la prestación de los servicios brindados a través del Plataforma.
    <br>
    Solicitud de información de autoridades públicas en ejercicio de sus funciones y el ámbito de sus competencias.<br>
    Solicitud de información en virtud de órdenes judiciales.<br>
    Solicitud de información en virtud de disposiciones legales.<br>
    <br><br>
    <p><strong>7. Cookies</strong></p>
    La Plataforma utiliza cookies. Una "Cookie" es un pequeño archivo de texto que un sitio web almacena en el navegador del Usuario. Las cookies facilitan el uso y la navegación por una página web y son importantes para el buen funcionamiento de Internet, aportando innumerables ventajas en la prestación de servicios interactivos.
    
    A través de las cookies, la Plataforma podrá utilizar la información de su visita para realizar evaluaciones y cálculos estadísticos sobre datos anónimos, así como para garantizar la continuidad del servicio o para realizar mejoras en la Plataforma.
    
    La Plataforma, también utilizará la información obtenida a través de las cookies para analizar los hábitos de navegación del Usuario, de forma que pueda realizar un rastreo de visitas a páginas web en el historial del Usuario; y, las búsquedas realizadas por éste, a fin de mejorar sus iniciativas comerciales y promocionales, mostrando publicidad que pueda ser de su interés, y personalizando los contenidos de la Plataforma.
    
    Las cookies pueden borrarse del disco duro si el Usuario así lo desea. La mayoría de los navegadores aceptan las cookies de forma automática, pero le permiten al Usuario cambiar la configuración de su navegador para que rechace la instalación de cookies, sin que ello perjudique su acceso y navegación por la Plataforma.
    
    En el supuesto de que en la presente Plataforma se dispusieran enlaces o hipervínculos hacia otros lugares de Internet propiedad de terceros que utilicen cookies, Grupo Imagen no se hace responsable ni controla el uso de cookies por parte de dichos terceros.
    <br><br>
    <p><strong>8. Derechos de acceso, rectificación, cancelación y oposición de datos personales</strong></p>
    Grupo Imagen pone en conocimiento del Usuario que podrá ejercer cualquiera de los derechos conferidos por la Ley mediante el llenado y envío de formularios de solicitud, a los que podrá acceder a través de un mecanismo establecido en la Plataforma.
    
    Del mismo modo, el Usuario puede oponerse al uso o tratamiento de sus datos personales y puede solicitar ser informado sobre todas las finalidades con que se tratan los datos personales.
    
    Sin perjuicio de lo anterior, Grupo Imagen podrá conservar determinada información personal del Usuario que solicita la baja, a fin de que sirva de prueba ante una eventual reclamación contra Grupo Imagen por responsabilidades derivadas del tratamiento de dicha información. La duración de dicha conservación no podrá ser superior al plazo de prescripción legal de dichas responsabilidades.
    <br><br>
    <p><strong>9. Modificaciones de la Política de Privacidad</strong></p>
    Grupo Imagen se reserva expresamente el derecho a modificar, actualizar o completar en cualquier momento la presente Política de Privacidad.
    
    Cualquier modificación, actualización o ampliación producida en la presente Política será inmediatamente publicada en la Plataforma, por lo que se recomienda al Usuario revisarla periódicamente, especialmente antes de proporcionar información personal.
    </div>
    </div>
    
@endsection