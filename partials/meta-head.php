<?php
// IDs de rastreamento do Google Analitycs, fb:admins e likebox - Não alterar
$campi = get_bloginfo('name');
global $fb_likebox;
switch($campi){
    case "Campus Avançado Arapongas":
        $googleId = 18;
        $fb_likebox = 'IFPRArapongas';
        $fb_admins = 108119444081810;
        break;
    case "Campus Assis Chateaubriand":
        $googleId = 22;
        $fb_likebox = 'ifpr.assis';
        $fb_admins = 251571581653181;
        break;
    case "Campus Avançado Astorga":
        $googleId = 26;
        $fb_likebox = 'IFPRCampusAstorga';
        $fb_admins = 343178105879902;
        break;
    case "Campus Avançado Barracão":
        $googleId = 27;
        $fb_likebox = 'ifprbarracao';
        $fb_admins = 572907182845433;
        break;
    case "Campus Campo Largo":
        $googleId = 23;
        $fb_likebox = 'IFCampoLargo';
        $fb_admins = 211237272642166;
        break;
    case "Campus Capanema":
        $googleId = 13;
        $fb_likebox = 'IFPRCAPANEMA';
        $fb_admins = 692971187478221;
        break;
    case "Campus Cascavel":
        $googleId = 17;
        $fb_likebox = 'Ifprcascavel';
        $fb_admins = 128177807337499;
        break;
    case "Campus Colombo":
        $googleId = 7;
        $fb_likebox = 'ifprcolombo';
        $fb_admins = 1605131299706786;
        break;
    case "Campus Avançado Coronel Vivida":
        $googleId = 25;
        $fb_likebox = 'ifprcampuscoronelvivida';
        $fb_admins = 802468236504742;
        break;
    case "Campus Curitiba":
        $googleId = 29;
        $fb_likebox = 'ifprcuritiba';
        $fb_admins = 520031844724182;
        break;
    case "Campus Foz do Iguaçu":
        $googleId = 3;
        $fb_likebox = 'IFPRCampusFoz';
        $fb_admins = 568747719812794;
        break;
    case "Campus Avançado Goioerê":
        $googleId = 11;
        $fb_likebox = 'goioere.ifpr';
        $fb_admins = 251956218312957;
        break;
    case "Campus Irati":
        $googleId = 5;
        $fb_likebox = 'ifpr.campusirati';
        $fb_admins = 442398485798803;
        break;
    case "Campus Ivaiporã":
        $googleId = 12;
        $fb_likebox = 'IFPR.Ivaipora';
        $fb_admins = 310419902368961;
        break;
    case "Campus Jacarezinho":
        $googleId = 9;
        $fb_likebox = 'jacarezinhoifpr';
        $fb_admins = 614216048697687;
        break;
    case "Educação a Distância":
        $googleId = 10;
        $fb_likebox = 'IFPR.EaD';
        $fb_admins = 184596471641699;
        break;
    case "Campus Jaguariaíva":
        $googleId = 19;
        $fb_likebox = 'ifjagua';
        $fb_admins = 651496138280283;
        break;
    case "Campus Londrina":
        $googleId = 21;
        $fb_likebox = 'IFPRLONDRINA';
        $fb_admins = 1198658846822015;
        break;
    case "Campus Palmas":
        $googleId = 24;
        $fb_likebox = 'ifprpalmaspr';
        $fb_admins = 1612399235727771;
        break;
    case "Campus Paranaguá":
        $googleId = 30;
        $fb_likebox = 'ifprpgua';
        $fb_admins = 334782503381662;
        break;
    case "Campus Paranavaí":
        $googleId = 28;
        $fb_likebox = 'ifprparanavai';
        $fb_admins = 429524210477225;
        break;
    case "Campus Pinhais":
        $googleId = 14;
        $fb_likebox = 'IFPRCampusPinhais';
        $fb_admins = 1385070665142990;
        break;
    case "Campus Pitanga":
        $googleId = 15;
        $fb_likebox = 'ifprcampuspitanga';
        $fb_admins = 1530346830513069;
        break;
    case "Campus Quedas do Iguaçu":
        $googleId = 20;
        $fb_likebox = 'ifpr.quedasdoiguacu';
        $fb_admins = 883670525026230;
        break;
    case "Campus Telêmaco Borba":
        $googleId = 4;
        $fb_likebox = 'TB.IFPR';
        $fb_admins = 189417137806267;
        break;
    case "Campus Umuarama":
        $googleId = 6;
        $fb_likebox = 'ifpr.umuarama';
        $fb_admins = 383988678381407;
        break;
    case "Campus União da Vitória":
        $googleId = 8;
        $fb_likebox = 'uniaodavitoria.ifpr';
        $fb_admins = 390887004427764;
        break;
    default:
        // reitoria
        $googleId = 2;
        $fb_likebox = 'REITORIAIFPR';
        $fb_admins = 142858119118965;
} ?>

<!-- Open Graph, FB Admins, Libebox and Analytics -->
<meta property="fb:admins" content="'<?php echo $fb_admins; ?>'">

<?php
function ifpr_opengraph(){

    //padrao
    $share_title = get_bloginfo('name');
    $share_description = 'O Instituto Federal do Paran&aacute; oferece Cursos T&eacute;cnicos, Superiores e de P&oacute;s-Graduação p&uacute;blicos, gratuitos e de qualidade';
    $share_fbtype = 'website';
    $share_url = get_bloginfo('url');
    $share_img = 'https://ifpr.edu.br/wp-content/uploads/2019/08/ifpr-default.jpg';

    //post e pagina
    if( is_single() || is_page() ){
    
        $post_id = get_the_ID();
        
        $share_title = get_the_title();
        $share_description = wp_trim_words( get_post_field('post_content', $post_id), 30 );
        $share_fbtype = 'article';
        $share_url = get_permalink();

        $share_img = get_the_post_thumbnail_url($post_id, 'full');
        if ( empty($share_img) ){ $share_img = 'https://ifpr.edu.br/wp-content/uploads/2019/08/ifpr-default.jpg'; }
    }
    
    //resultado
    $ograph_title           = '<meta property="og:title" content="' .$share_title. '"/>';
    $ograph_description     = '<meta property="og:description" content="' .$share_description. '"/>';
    $ograph_fbtype          = '<meta property="og:type" content="' .$share_fbtype. '"/>';
    $ograph_url             = '<meta property="og:url" content="' .$share_url. '"/>';
    $ograph_img             = '<meta property="og:image" content="' .$share_img. '"/>';
    $ograph_imgsize         = '<meta property="og:image:width" content="822"/>';
    
    $ograph_content = $ograph_title . $ograph_description . $ograph_fbtype . $ograph_url . $ograph_img . $ograph_imgsize;
    return $ograph_content;
}
    echo ifpr_opengraph(); ?>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-53586904-<?php echo $googleId; ?>"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-53586904-<?php echo $googleId; ?>');
</script>
<!-- Open Graph, FB Admins, Libebox and Analytics -->

