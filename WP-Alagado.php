<? php
/ *
Nome do Plugin : WP Picos
Plugin URI : http://www.amigopage.com.br/2010/04/04/wordpress-plugin-amigopage-picos
Descri��o: Plugin para exibir crach� Picos . Agora trabalhando no Internet Explorer, Safari, Firefox e Chrome.
Vers�o: 1.03
Autor: Everaldo " The IT webdesigner " Everldo Batista
Author URI: http://www.amigopage.com.br/

Copyright 2010 , Everaldo Batista

Este programa � software livre : voc� pode redistribu�-lo e / ou modific�-
lo sob os termos da GNU General Public License como publicado pela
Free Software Foundation , tanto a vers�o 3 da Licen�a , ou
( a seu crit�rio) qualquer vers�o posterior.

Este programa � distribu�do na esperan�a que possa ser �til,
por�m, SEM NENHUMA GARANTIA, nem mesmo a garantia impl�cita de
COMERCIALIZA��O ou ADEQUA��O A UM DETERMINADO FIM. veja o
GNU General Public License para mais detalhes.

Voc� deve ter recebido uma c�pia da GNU General Public License
junto com este programa . Se n�o, veja <http://www.gnu.org/licenses/> .
* /

fun��o widget_wp_picos ( $ args) {

/ / Primeiro vamos pegar os argumentos tema WordPress , que n�s
/ / Usado para exibir o widget
extract ( $ args) ;

$ = get_option op��es ( " wp_picos_widget ");
if (! is_array ( $ options )) {
$ options [ 'title' ] = ' Onde estou? ';
$ options [ 'width' ] = '180 ';
$ options [' altura '] = '300 ' ;
$ options [' maptype '] = ' estrada ';
$ options [' zoom '] = ' autom�tico ';
$ options [' picoid '] = '9073576785905927589';
}

/ / Mostra o widget!
echo " <- WP Picos Iniciar - > \ n";
echo $ before_title ;
echo $ options [' title'] ;
echo $ after_title ;
$ params = 'user = ? ' $ options [' picoid '] ' & type = iframe & maptype =' $ options [' maptype '] . . . ;
if ($ options [' zoom '] ! = '0 ' ) {
$ params = $ params "& z = " $ options [' zoom '] . . ;
}
echo " <- Google Location emblema P�blica -> \ n";
echo " < iframe src = \ " https://www.google.com.br/maps/pico/apps/badge/api " . $ params . " "width = \ " \ ". $ options [' width' ] . " \ " height = \ "" . $ options [' altura '] . "\" frameborder = \ " 0 \ "> \ n ";
echo " </ iframe> \ n";
����echo " <- . Para desabilitar o compartilhamento de localiza��o , voc� * deve * visitar https://www.google.com.br/maps/pico/apps/badge e desativar o local crach� P�blica Google remo��o deste trecho de c�digo n�o � suficiente -> \ n ";
echo " <- WP Picos End - > \ n";
}


/ / inicialmente definir as op��es
control_wp_picos fun��o () {
$ = get_option op��es ( " wp_picos_widget ");
if (! is_array ( $ options )) {
$ options [ 'title' ] = ' Onde estou? ';
$ options [ 'width' ] = '180 ';
$ options [' altura '] = '300 ' ;
$ options [' maptype '] = ' estrada ';
$ options [' zoom '] = ' autom�tico ';
$ options [' picoid '] = '9073576785905927589 ';
}

/ / Se o usu�rio tenha apresentado as suas op��es , agarr�-los aqui.
if ( $ _POST [' WPAP - submit' ] ) {
$ options [ 'title' ] = htmlspecialchars ( $ _POST [' WPAP -Title '] );
$ options [' altura '] = htmlspecialchars ( $ _POST [' WPAP -Height '] );
$ options [' largura '] = htmlspecialchars ( $ _POST [' WPAP - Largura '] );
$ options [' maptype '] = htmlspecialchars ( $ _POST [' WPAP - MapType '] );
$ options [ 'zoom' ] = htmlspecialchars ( $ _POST [' WPAP -Zoom '] );
$ options [' picoid '] = htmlspecialchars ( $ _POST [' WPAP - GoogleID '] );
/ / E n�s tamb�m atualizar as op��es no banco de dados Wordpress
UPDATE_OPTION ( " wp_picos_widget " , op��es $ );
}

/ / Mostra as op��es para o widget aqui.
>
<p>
<label for="WPAP-Title"> t�tulo acima widget: </ label > <br>
< input type = "text"
id = " WPAP -Title "
name = " WPAP -Title "
value = " < php echo $ options [' title'] ; ? >" / > <br>

<label for="WPAP-Height"> Altura do widget: </ label > <br>
< input type = "text"
id = " WPAP -Height "
name = " WPAP -Height "
value = " <? php echo $ options [' altura ']; ? >" / > <br>

<label for="WPAP-Width"> Largura do widget: </ label > <br>
< input type = "text"
id = " WPAP - Largura"
name = " WPAP - Largura"
value = " < php echo $ options [' width' ]; ? >" / > <br>

<label for="WPAP-MapType"> Tipo de Mapa: </ label > <br>
<select
id = " WPAP - MapType "
name = " WPAP - MapType ">
< op��o < php if ($ options [' maptype '] == " roadmap " ) echo " selecionado"; ? > value = " roadmap "> Estrada </ option>
<? op��o < php if ($ options [' maptype '] == " terreno " ) echo " selecionado"; > value = " terreno "> Terreno </ option>
< op��o < php if ($ options [' maptype '] == " h�brido" ) echo " selecionado"; ? > value = " h�brido "> H�brido </ option>
< op��o < php if ($ options [' maptype '] == " sat�lite " ) echo " selecionado"; ? > value = " sat�lite "> Satellite </ option>
< / select > <br>

<label for="WPAP-Zoom"> ZoomLevel do Mapa: </ label > <br>
<select
id = " WPAP -Zoom "
name = " WPAP -Zoom ">
�<? op��o < php if ($ options [' zoom '] == 0) echo " selecionado"; > value = " 0"> Automatic </ option>
<? op��o < php if ( $ options [ 'zoom' ] == 10) echo " selecionado"; > value = " 10" > Cidade </ option>
<? op��o < php if ( $ options [ 'zoom' ] == 7 ) echo " selecionado"; > value = " 7" > Regi�o </ option>
<? op��o < php if ( $ options [ 'zoom' ] == 5 ) echo " selecionado"; > value = " 5" > Country </ option>
<? op��o < php if ( $ options [ 'zoom' ] == 3 ) echo " selecionado"; > value = " 3"> Continente </ option>
< / select > <br>

<label for="WPAP-PicoID"> seu ID Pico: </ label > <a href="https://www.google.com.br/maps/pico/apps/badge" target="_blank"> Obter sua identifica��o Picos </ a> em primeiro lugar. <br>
< input type = "text"
id = " WPAP - PicoID "
name = " WPAP - PicoID "
value = " <? php echo $ options [' picoid ']; ? >" / > <br>
<input type = "hidden "
id = " WPAP - Submit"
name = " WPAP - Submit"
value = " 1" />
</ p>
<? php
}

/ / desinstalar todas as op��es
wp_picos_uninstall fun��o () {
delete_option (' wp_picos_widget ');
}


/ / Widget e controle
wp_picos_widget_init fun��o () {
register_sidebar_widget ( "WP Picos ", " widget_wp_picos ");
register_widget_control ( "WP Picos ", " control_wp_picos ");
}

add_action ( " plugins_loaded ", " wp_picos_widget_init ");

>
