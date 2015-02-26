<? php
/ *
Nome do Plugin : WP Picos
Plugin URI : http://www.amigopage.com.br/2010/04/04/wordpress-plugin-amigopage-picos
Descrição: Plugin para exibir crachá Picos . Agora trabalhando no Internet Explorer, Safari, Firefox e Chrome.
Versão: 1.03
Autor: Everaldo " The IT webdesigner " Everldo Batista
Author URI: http://www.amigopage.com.br/

Copyright 2010 , Everaldo Batista

Este programa é software livre : você pode redistribuí-lo e / ou modificá-
lo sob os termos da GNU General Public License como publicado pela
Free Software Foundation , tanto a versão 3 da Licença , ou
( a seu critério) qualquer versão posterior.

Este programa é distribuído na esperança que possa ser útil,
porém, SEM NENHUMA GARANTIA, nem mesmo a garantia implícita de
COMERCIALIZAÇÃO ou ADEQUAÇÃO A UM DETERMINADO FIM. veja o
GNU General Public License para mais detalhes.

Você deve ter recebido uma cópia da GNU General Public License
junto com este programa . Se não, veja <http://www.gnu.org/licenses/> .
* /

função widget_wp_picos ( $ args) {

/ / Primeiro vamos pegar os argumentos tema WordPress , que nós
/ / Usado para exibir o widget
extract ( $ args) ;

$ = get_option opções ( " wp_picos_widget ");
if (! is_array ( $ options )) {
$ options [ 'title' ] = ' Onde estou? ';
$ options [ 'width' ] = '180 ';
$ options [' altura '] = '300 ' ;
$ options [' maptype '] = ' estrada ';
$ options [' zoom '] = ' automático ';
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
echo " <- Google Location emblema Pública -> \ n";
echo " < iframe src = \ " https://www.google.com.br/maps/pico/apps/badge/api " . $ params . " "width = \ " \ ". $ options [' width' ] . " \ " height = \ "" . $ options [' altura '] . "\" frameborder = \ " 0 \ "> \ n ";
echo " </ iframe> \ n";
    echo " <- . Para desabilitar o compartilhamento de localização , você * deve * visitar https://www.google.com.br/maps/pico/apps/badge e desativar o local crachá Pública Google remoção deste trecho de código não é suficiente -> \ n ";
echo " <- WP Picos End - > \ n";
}


/ / inicialmente definir as opções
control_wp_picos função () {
$ = get_option opções ( " wp_picos_widget ");
if (! is_array ( $ options )) {
$ options [ 'title' ] = ' Onde estou? ';
$ options [ 'width' ] = '180 ';
$ options [' altura '] = '300 ' ;
$ options [' maptype '] = ' estrada ';
$ options [' zoom '] = ' automático ';
$ options [' picoid '] = '9073576785905927589 ';
}

/ / Se o usuário tenha apresentado as suas opções , agarrá-los aqui.
if ( $ _POST [' WPAP - submit' ] ) {
$ options [ 'title' ] = htmlspecialchars ( $ _POST [' WPAP -Title '] );
$ options [' altura '] = htmlspecialchars ( $ _POST [' WPAP -Height '] );
$ options [' largura '] = htmlspecialchars ( $ _POST [' WPAP - Largura '] );
$ options [' maptype '] = htmlspecialchars ( $ _POST [' WPAP - MapType '] );
$ options [ 'zoom' ] = htmlspecialchars ( $ _POST [' WPAP -Zoom '] );
$ options [' picoid '] = htmlspecialchars ( $ _POST [' WPAP - GoogleID '] );
/ / E nós também atualizar as opções no banco de dados Wordpress
UPDATE_OPTION ( " wp_picos_widget " , opções $ );
}

/ / Mostra as opções para o widget aqui.
>
<p>
<label for="WPAP-Title"> título acima widget: </ label > <br>
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
< opção < php if ($ options [' maptype '] == " roadmap " ) echo " selecionado"; ? > value = " roadmap "> Estrada </ option>
<? opção < php if ($ options [' maptype '] == " terreno " ) echo " selecionado"; > value = " terreno "> Terreno </ option>
< opção < php if ($ options [' maptype '] == " híbrido" ) echo " selecionado"; ? > value = " híbrido "> Híbrido </ option>
< opção < php if ($ options [' maptype '] == " satélite " ) echo " selecionado"; ? > value = " satélite "> Satellite </ option>
< / select > <br>

<label for="WPAP-Zoom"> ZoomLevel do Mapa: </ label > <br>
<select
id = " WPAP -Zoom "
name = " WPAP -Zoom ">
 <? opção < php if ($ options [' zoom '] == 0) echo " selecionado"; > value = " 0"> Automatic </ option>
<? opção < php if ( $ options [ 'zoom' ] == 10) echo " selecionado"; > value = " 10" > Cidade </ option>
<? opção < php if ( $ options [ 'zoom' ] == 7 ) echo " selecionado"; > value = " 7" > Região </ option>
<? opção < php if ( $ options [ 'zoom' ] == 5 ) echo " selecionado"; > value = " 5" > Country </ option>
<? opção < php if ( $ options [ 'zoom' ] == 3 ) echo " selecionado"; > value = " 3"> Continente </ option>
< / select > <br>

<label for="WPAP-PicoID"> seu ID Pico: </ label > <a href="https://www.google.com.br/maps/pico/apps/badge" target="_blank"> Obter sua identificação Picos </ a> em primeiro lugar. <br>
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

/ / desinstalar todas as opções
wp_picos_uninstall função () {
delete_option (' wp_picos_widget ');
}


/ / Widget e controle
wp_picos_widget_init função () {
register_sidebar_widget ( "WP Picos ", " widget_wp_picos ");
register_widget_control ( "WP Picos ", " control_wp_picos ");
}

add_action ( " plugins_loaded ", " wp_picos_widget_init ");

>
