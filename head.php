<html <?php language_attributes(); ?>>
	<head>
<!-- Google Tag Manager NC-UFPR -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NRG5LZ8');</script>
<!-- End Google Tag Manager -->

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<?php // IDs de rastreamento do Google Analitycs - Não alterar
			$campus = get_bloginfo();
			global $fb_likebox;
			switch ($campus) {
				case "Campus Avançado Arapongas":
					$googleId = 18;
					break;
				case "Campus Assis Chateaubriand":
					$googleId = 22;
					break;
				case "Campus Avançado Astorga":
					$googleId = 26;
					break;
				case "Campus Avançado Barracão":
					$googleId = 27;
					break;
				case "Campus Campo Largo":
					$googleId = 23;
					break;
				case "Campus Capanema":
					$googleId = 13;
					break;
				case "Campus Cascavel":
					$googleId = 17;
					break;
				case "Campus Colombo":
					$googleId = 7;
					break;
				case "Campus Avançado Coronel Vivida":
					$googleId = 25;
					break;
				case "Campus Curitiba":
					$googleId = 29;
					break;
				case "Campus Foz do Iguaçu":
					$googleId = 3;
					break;
				case "Campus Avançado Goioerê":
					$googleId = 11;
					break;
				case "Campus Irati":
					$googleId = 5;
					break;
				case "Campus Ivaiporã":
					$googleId = 12;
					break;
				case "Campus Jacarezinho":
					$googleId = 9;
					break;
				case "Educação a Distância":
					$googleId = 10;
					break;
				case "Campus Jaguariaíva":
					$googleId = 19;
					break;
				case "Campus Londrina":
					$googleId = 21;
					break;
				case "Campus Palmas":
					$googleId = 24;
					break;
				case "Campus Paranaguá":
					$googleId = 30;
					break;
				case "Campus Paranavaí":
					$googleId = 28;
					break;
				case "Campus Pinhais":
					$googleId = 14;
					break;
				case "Campus Pitanga":
					$googleId = 15;
					break;
				case "Campus Quedas do Iguaçu":
					$googleId = 20;
					break;
				case "Campus Telêmaco Borba":
					$googleId = 4;
					break;
				case "Campus Umuarama":
					$googleId = 6;
					break;
				case "Campus União da Vitória":
					$googleId = 8;
					break;
				default:
					// reitoria
        			$googleId = 2;
        			$fb_likebox = 'REITORIAIFPR';
        			$fb_admins = 142858119118965;
			}
		?>
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-53586904-<?php echo $googleId; ?>"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'UA-53586904-<?php echo $googleId; ?>');
		</script>
		<!-- End Global site tag (gtag.js) - Google Analytics -->
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '869424903874166'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=869424903874166&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta property="creator.productor" content="http://estruturaorganizacional.dados.gov.br/id/unidade-organizacional/49103">
		<meta name="Description" content="<?php echo esc_attr__( 'O Instituto Federal do Paran&aacute; oferece Cursos T&eacute;cnicos, Superiores e de P&oacute;s-Graduação p&uacute;blicos, gratuitos e de qualidade', 'ifpr_theme' ); ?>">
		<link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/favicon.gif" rel="shortcut icon" type="image/x-icon">
		
		<?php wp_head(); ?>

		<!-- Meta tag (facebook) -->
		<meta name="facebook-domain-verification" content="2jq8isui15d3wyi93ltkn5z7dak0zf" />
	</head>
