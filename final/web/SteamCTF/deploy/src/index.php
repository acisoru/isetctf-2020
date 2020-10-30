<?php
  if(strpos($_SERVER['REQUEST_URI'], '/src/') !== false){
      show_source(__FILE__);
      die();
  }
?>

<!DOCTYPE html>
<html class=" responsive" lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="theme-color" content="#171a21">
		<title>Войти</title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

	
	
	<link href="https://steamstore-a.akamaihd.net/public/shared/css/motiva_sans.css?v=GvhJzpHNW-hA&amp;l=russian" rel="stylesheet" type="text/css" >
<link href="https://steamstore-a.akamaihd.net/public/shared/css/shared_global.css?v=tMXeUkoXL8fe&amp;l=russian" rel="stylesheet" type="text/css" >
<link href="https://steamstore-a.akamaihd.net/public/shared/css/buttons.css?v=l3li_MNwxNDv&amp;l=russian" rel="stylesheet" type="text/css" >
<link href="https://steamstore-a.akamaihd.net/public/css/v6/store.css?v=R30HHc3N7yGA&amp;l=russian" rel="stylesheet" type="text/css" >
<link href="https://steamstore-a.akamaihd.net/public/css/v6/store_rewards_header.css?v=RS7Ct0ERSy_A&amp;l=russian" rel="stylesheet" type="text/css" >
<link href="https://steamstore-a.akamaihd.net/public/css/v6/cart.css?v=dNzRh4M56a0H&amp;l=russian" rel="stylesheet" type="text/css" >
<link href="https://steamstore-a.akamaihd.net/public/css/v6/browse.css?v=7hoqLVcZ7KVq&amp;l=russian" rel="stylesheet" type="text/css" >
<link href="https://steamstore-a.akamaihd.net/public/css/v6/login.css?v=7P0uzhSYUThm&amp;l=russian" rel="stylesheet" type="text/css" >
<link href="https://steamstore-a.akamaihd.net/public/shared/css/login.css?v=d5897mvY4R3L&amp;l=russian" rel="stylesheet" type="text/css" >
<link href="https://steamstore-a.akamaihd.net/public/shared/css/shared_responsive.css?v=AKHr_xXe1lDr&amp;l=russian" rel="stylesheet" type="text/css" >
			<script>
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
						(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
					m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

				ga('create', 'UA-33786258-1', 'auto', {
					'sampleRate': 0.4				});
				ga('set', 'dimension1', false );
				ga('set', 'dimension2', 'External' );
				ga('set', 'dimension3', 'login' );
				ga('set', 'dimension4', "login\/DefaultAction" );
				ga('send', 'pageview' );

			</script>
			<script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/jquery-1.8.3.min.js?v=.TZ2NKhB-nliU" ></script>
<script type="text/javascript">$J = jQuery.noConflict();</script><script type="text/javascript">VALVE_PUBLIC_PATH = "https:\/\/steamstore-a.akamaihd.net\/public\/";</script><script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/tooltip.js?v=.9Z1XDV02xrml" ></script>

<script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/shared_global.js?v=nWHYEn6G1KtO&amp;l=russian" ></script>

<script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/javascript/main.js?v=CI1pu_whOFKq&amp;l=russian" ></script>

<script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/javascript/dynamicstore.js?v=uBXbyztICe1q&amp;l=russian" ></script>


		<script type="text/javascript">
			document.addEventListener('DOMContentLoaded', function(event) {
				$J.data( document, 'x_readytime', new Date().getTime() );
				$J.data( document, 'x_oldref', GetNavCookie() );
				SetupTooltips( { tooltipCSSClass: 'store_tooltip'} );
		});
		</script><script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/login.js?v=dlXLXZHEdG_R&amp;l=russian" ></script>
<script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/shared_responsive_adapter.js?v=DA2EvSkOoJao&amp;l=russian" ></script>

						<meta name="twitter:card" content="summary_large_image">
					<meta name="robots" content="noindex,nofollow">
			
	<meta name="twitter:site" content="https://t.me/ctfnews" />

						<meta property="og:title" content="Войти">
					<meta property="twitter:title" content="Войти">
					<meta property="og:type" content="website">
					<meta property="fb:app_id" content="105386699540688">
					<meta property="og:site" content="Steam">
			
	
			<link rel="image_src" href="https://steamstore-a.akamaihd.net/public/shared/images/responsive/share_steam_logo.png">
		<link rel="image_src" href="https://steamstore-a.akamaihd.net/public/shared/images/responsive/share_steam_logo.png">
		<meta property="og:image" content="https://steamstore-a.akamaihd.net/public/shared/images/responsive/share_steam_logo.png">
		<meta name="twitter:image" content="https://steamstore-a.akamaihd.net/public/shared/images/responsive/share_steam_logo.png" />
					<meta property="og:image:secure" content="https://steamstore-a.akamaihd.net/public/shared/images/responsive/share_steam_logo.png">
		
	
	
	
	</head>
<body class="v6 login responsive_page">

<div class="responsive_page_frame with_header">

						<div class="responsive_page_menu_ctn mainmenu">
				<div class="responsive_page_menu"  id="responsive_page_menu">
										<div class="mainmenu_contents">
						<div class="mainmenu_contents_items">
															<a class="menuitem" href="https://ctftime.org/amnesia">
									Войти								</a>
								<a class="menuitem supernav" href="https://ctftime.org/writeups" data-tooltip-type="selector" data-tooltip-content=".submenu_store">
		Магазин	флагов</a>
	<div class="submenu_store" style="display: none;" data-submenuid="store">
		<a class="submenuitem" href="https://ctfnews.ru/">Главная</a>
		<a class="submenuitem" href="https://www.kaspersky.ru/free-cloud-antivirus">Рекомендации</a>		
		<a class="submenuitem" href="https://cybermap.kaspersky.com/ruw">ИНТЕРАКТИВНАЯ КАРТА КИБЕРУГРОЗ</a>
		<a class="submenuitem" href="https://www.kaspersky.ru/home-security/how-to-buy">Защитись от кибератак</a>	
       	<a class="submenuitem" href="https://www.securitylab.ru/">Новости мира CTF</a>
		<a class="submenuitem" href="https://cybermap.kaspersky.com/ru/stats">Статистика киберугроз</a>
			</div>


	<a class="menuitem supernav" style="display: block" href="https://t.me/ctfnews" data-tooltip-type="selector" data-tooltip-content=".submenu_community">
		Сообщество	</a>
	<div class="submenu_community" style="display: none;" data-submenuid="community">
		<a class="submenuitem" href="https://t.me/ctfnews">Главная</a>
		<a class="submenuitem" href="https://t.me/ctfnews">Обсуждения</a>
		<a class="submenuitem" href="https://t.me/ctfnews">Мастерская</a>
		<a class="submenuitem" href="https://t.me/ctfnews">Торговая площадка</a>
		<a class="submenuitem" href="https://t.me/ctfnews">Трансляции</a>
							</div>

	

	
	
	<a class="menuitem" href="https://t.me/ctfnews">
		Поддержка	</a>

							<div class="minor_menu_items">
																<div class="menuitem change_language_action">
									Изменить язык								</div>
																									<div class="menuitem" onclick="Responsive_RequestDesktopView();">
										Полная версия									</div>
															</div>
						</div>
						<div class="mainmenu_footer_spacer"></div>
						<div class="mainmenu_footer">
							<div class="mainmenu_footer_logo"><img src="https://steamstore-a.akamaihd.net/public/shared/images/responsive/logo_valve_footer.png"></div>
							© ARSIB Corporation. Все права защищены. Все торговые марки являются собственностью соответствующих владельцев в США и других странах.							<span class="mainmenu_valve_links">
								<a href="https://store.steampowered.com/privacy_agreement/?snr=1_60_4__global-responsive-menu" target="_blank">Privacy Policy</a>
								&nbsp;| &nbsp;<a href="http://www.valvesoftware.com/legal.htm" target="_blank">Legal</a>
								&nbsp;| &nbsp;<a href="https://store.steampowered.com/subscriber_agreement/?snr=1_60_4__global-responsive-menu" target="_blank">Steam Subscriber Agreement</a>
								&nbsp;| &nbsp;<a href="https://store.steampowered.com/steam_refunds/?snr=1_60_4__global-responsive-menu" target="_blank">Refunds</a>
							</span>
						</div>
					</div>
									</div>
			</div>
		
		<div class="responsive_local_menu_tab">

		</div>

		<div class="responsive_page_menu_ctn localmenu">
			<div class="responsive_page_menu"  id="responsive_page_local_menu">
				<div class="localmenu_content">
				</div>
			</div>
		</div>



					<div class="responsive_header">
				<div class="responsive_header_content">
					<div id="responsive_menu_logo">
						<img src="https://steamstore-a.akamaihd.net/public/shared/images/responsive/header_menu_hamburger.png" height="100%">
											</div>
					<div class="responsive_header_logo">
						<a href="https://store.steampowered.com/?snr=1_60_4__global-responsive-menu">
							<img src="https://steamstore-a.akamaihd.net/public/shared/images/responsive/header_logo.png" height="36" border="0" alt="STEAM">
						</a>
					</div>					
				</div>
			</div>
		
		<div class="responsive_page_content_overlay">

		</div>

		<div class="responsive_fixonscroll_ctn nonresponsive_hidden ">
		</div>
	
	<div class="responsive_page_content">

		<div id="global_header">
	<div class="content">
		<div class="logo">
			<span id="logo_holder">
									<a href="https://store.steampowered.com/?snr=1_60_4__global-header">
						<img src="https://steamstore-a.akamaihd.net/public/shared/images/header/globalheader_logo.png?t=962016" width="176" height="44">
					</a>
							</span>
		</div>

			<div class="supernav_container">
	<a class="menuitem supernav" href="https://www.kaspersky.ru/home-security/payment-and-shipping" data-tooltip-type="selector" data-tooltip-content=".submenu_store">
		МАГАЗИН	</a>
	<div class="submenu_store" style="display: none;" data-submenuid="store">
		<a class="submenuitem" href="https://t.me/ctfnews">Главная CTFNews</a>
		<a class="submenuitem" href="https://ctforces.com/">CTForces</a>		
		<a class="submenuitem" href="https://ctftime.org/event/list/upcoming">CTF Events</a>
		<a class="submenuitem" href="https://ctftime.org/writeups">Writeups</a>	
       	<a class="submenuitem" href="https://ctfnews.ru/making-ctf/">Твой CTF</a>
		<a class="submenuitem" href="https://ctfnews.ru/competitions/">Соревнования в России</a>
			</div>


	<a class="menuitem supernav" style="display: block" href="https://t.me/ctfnews" data-tooltip-type="selector" data-tooltip-content=".submenu_community">
		СООБЩЕСТВО	</a>
	<div class="submenu_community" style="display: none;" data-submenuid="community">
		<a class="submenuitem" href="https://t.me/ctfnews">Главная</a>
		<a class="submenuitem" href="https://t.me/ctfnews">Обсуждения</a>
		<a class="submenuitem" href="https://t.me/ctfnews">Мастерская</a>
		<a class="submenuitem" href="https://t.me/ctfnews">Торговая площадка</a>
		<a class="submenuitem" href="https://t.me/ctfnews">Трансляции</a>
							</div>

	

	
						<a class="menuitem" href="https://t.me/ctfnews">
				О SteamCTF			</a>
			
	<a class="menuitem" href="https://ctftime.org/login/?next=/event/mail">
		ПОДДЕРЖКА	</a>
	</div>
	<script type="text/javascript">
		jQuery(function($) {
			$('#global_header .supernav').v_tooltip({'location':'bottom', 'destroyWhenDone': false, 'tooltipClass': 'supernav_content', 'offsetY':-4, 'offsetX': 1, 'horizontalSnap': 4, 'tooltipParent': '#global_header .supernav_container', 'correctForScreenSize': false});
		});
	</script>

		<div id="global_actions">
			<div id="global_action_menu">
									<div class="header_installsteam_btn header_installsteam_btn_green">

						<a class="header_installsteam_btn_content" href="https://portswigger.net/burp/releases/professional-community-2020-9-2">
							Установить Burp Suite Professional / Community 2020.9.2						</a>
					</div>
				
				
														<a class="global_action_link" href="https://portswigger.net/users">войти</a>
											&nbsp;|&nbsp;
						<span class="pulldown global_action_link" id="language_pulldown" onclick="ShowMenu( this, 'language_dropdown', 'right' );">язык</span>
						<div class="popup_block_new" id="language_dropdown" style="display: none;">
							<div class="popup_body popup_menu">
																																					<a class="popup_menu_item tight" href="?l=schinese&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'schinese' ); return false;">简体中文 (упрощенный китайский)</a>
																													<a class="popup_menu_item tight" href="?l=tchinese&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'tchinese' ); return false;">繁體中文 (традиционный китайский)</a>
																													<a class="popup_menu_item tight" href="?l=japanese&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'japanese' ); return false;">日本語 (японский)</a>
																													<a class="popup_menu_item tight" href="?l=koreana&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'koreana' ); return false;">한국어 (корейский)</a>
																													<a class="popup_menu_item tight" href="?l=thai&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'thai' ); return false;">ไทย (тайский)</a>
																													<a class="popup_menu_item tight" href="?l=bulgarian&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'bulgarian' ); return false;">Български (болгарский)</a>
																													<a class="popup_menu_item tight" href="?l=czech&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'czech' ); return false;">Čeština (чешский)</a>
																													<a class="popup_menu_item tight" href="?l=danish&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'danish' ); return false;">Dansk (датский)</a>
																													<a class="popup_menu_item tight" href="?l=german&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'german' ); return false;">Deutsch (немецкий)</a>
																													<a class="popup_menu_item tight" href="?l=english&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'english' ); return false;">English (английский)</a>
																													<a class="popup_menu_item tight" href="?l=spanish&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'spanish' ); return false;">Español - España (испанский)</a>
																													<a class="popup_menu_item tight" href="?l=latam&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'latam' ); return false;">Español - Latinoamérica (испанский Лат. Ам.)</a>
																													<a class="popup_menu_item tight" href="?l=greek&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'greek' ); return false;">Ελληνικά (греческий)</a>
																													<a class="popup_menu_item tight" href="?l=french&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'french' ); return false;">Français (французский)</a>
																													<a class="popup_menu_item tight" href="?l=italian&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'italian' ); return false;">Italiano (итальянский)</a>
																													<a class="popup_menu_item tight" href="?l=hungarian&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'hungarian' ); return false;">Magyar (венгерский)</a>
																													<a class="popup_menu_item tight" href="?l=dutch&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'dutch' ); return false;">Nederlands (нидерландский)</a>
																													<a class="popup_menu_item tight" href="?l=norwegian&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'norwegian' ); return false;">Norsk (норвежский)</a>
																													<a class="popup_menu_item tight" href="?l=polish&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'polish' ); return false;">Polski (польский)</a>
																													<a class="popup_menu_item tight" href="?l=portuguese&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'portuguese' ); return false;">Português (португальский)</a>
																													<a class="popup_menu_item tight" href="?l=brazilian&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'brazilian' ); return false;">Português-Brasil (бразильский португальский)</a>
																													<a class="popup_menu_item tight" href="?l=romanian&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'romanian' ); return false;">Română (румынский)</a>
																																							<a class="popup_menu_item tight" href="?l=finnish&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'finnish' ); return false;">Suomi (финский)</a>
																													<a class="popup_menu_item tight" href="?l=swedish&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'swedish' ); return false;">Svenska (шведский)</a>
																													<a class="popup_menu_item tight" href="?l=turkish&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'turkish' ); return false;">Türkçe (турецкий)</a>
																													<a class="popup_menu_item tight" href="?l=vietnamese&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'vietnamese' ); return false;">Tiếng Việt (вьетнамский)</a>
																													<a class="popup_menu_item tight" href="?l=ukrainian&redir=%3Fl%3Drussian&redir_ssl=1" onclick="ChangeLanguage( 'ukrainian' ); return false;">Українська (украинский)</a>
																									<a class="popup_menu_item tight" href="https://t.me/ctfnews" target="_blank">Помогите нам с переводом SteamCTF</a>
							</div>
						</div>
												</div>
					</div>
			</div>
</div>
<div id="responsive_store_nav_ctn"></div><div data-cart-banner-spot="1"></div>
		<div class="responsive_page_template_content">

			<script type="text/javascript">
	$J( function() {
		var loginOpts =  {
			strRedirectURL: "https:\/\/store.steampowered.com\/?l=russian",
			gidCaptcha: -1		};

		
		var LoginManger = new CLoginPromptManager( 'https://store.steampowered.com/', loginOpts );

					document.forms['logon'].elements['username'].focus();
		
			} );
</script>
	<div class="responsive_store_nav_ctn_spacer">
		
		<div id="store_header" class="">
		<div class="content">
			<div id="store_controls">
				<div id="cart_status_data">
																					<div class="store_header_btn_green store_header_btn" id="store_header_cart_btn" style="display: none;">
							<div class="store_header_btn_caps store_header_btn_leftcap"></div>
							<div class="store_header_btn_caps store_header_btn_rightcap"></div>
							<a id="cart_link" class="store_header_btn_content" href="https://portswigger.net/burp">
								Корзина								(<span id="cart_item_count_value">0</span>)
							</a>
						</div>
									</div>
			</div>
			
					<div id="store_nav_area">
					<div class="store_nav_leftcap"></div>
					<div class="store_nav_bg">
						<div class="store_nav">

													<div class="tab  flyout_tab " id="foryou_tab" data-flyout="foryou_flyout" data-flyout-align="left" data-flyout-valign="bottom" onmouseover="EnsureStoreMenuTagsLoaded( '#foryou_yourtags' );">
								<span class="pulldown">
									<a class="pulldown_desktop" href="https://portswigger.net/web-security">Burp Suite Academy</a>
									<span></span>
								</span>
							</div>
							<div class="popup_block_new flyout_tab_flyout responsive_slidedown" id="foryou_flyout" style="display: none;">
								<div class="popup_body popup_menu">
									<a class="popup_menu_item" href="https://www.kaspersky.ru/resource-center">
										Главная страница									</a>
									<div class="hr"></div>
                                                                            <a class="popup_menu_item" href="https://www.kaspersky.ru/resource-center">
                                            Рекомендации сообщества                                        </a>
                                    									<a class="popup_menu_item" href="https://www.kaspersky.ru/resource-center">
										Недавно просмотренные									</a>
                                                                            <a class="popup_menu_item" href="https://www.kaspersky.ru/resource-center">
                                            Кураторы SteamCTF                                        </a>
                                    								</div>
							</div>
						

															<div class="tab  flyout_tab " id="genre_tab" data-flyout="genre_flyout" data-flyout-align="left" data-flyout-valign="bottom">
									<span class="pulldown">
										<a class="pulldown_desktop" href="https://www.kaspersky.ru/resource-center">Разное</a>
										<a class="pulldown_mobile" href="#">Разное</a>
										<span></span>
									</span>
								</div>
								<div class="popup_block_new flyout_tab_flyout responsive_slidedown" id="genre_flyout" style="display: none;">
									<div class="popup_body popup_menu_twocol">
										<div class="popup_menu">
																																															<a class="popup_menu_item" href="https://www.kaspersky.ru/resource-center">
														Бесплатно													</a>
																						<a class="popup_menu_item" href="https://www.kaspersky.ru/resource-center">
														Ранний доступ													</a>
																		<a class="popup_menu_item" href="https://www.kaspersky.ru/resource-center">
												<span>Демо</span>
											</a>
																							<a class="popup_menu_item" href="https://www.kaspersky.ru/resource-center">
													<span>Поддержка контроллеров</span>
												</a>
																																		<a class="popup_menu_item" href="https://www.kaspersky.ru/resource-center">
													<span>Для интернет-кафе</span>
												</a>
																																	<a class="popup_menu_item" href="https://www.kaspersky.ru/resource-center">
												<span>Remote Play</span>
											</a>
											
																																		<div class="hr"></div>
												<div class="popup_menu_subheader">Виртуальная реальность</div>
                                                <a class="popup_menu_item" href="Виртуальная реальность">
                                                    <span>VR-игры и приложения</span>
                                                </a>
                                                <a class="popup_menu_item" href="Виртуальная реальность">
                                                    <span>Устройства виртуальной реальности</span>
                                                </a>
                                            
											<div class="hr"></div>
											<div class="popup_menu_subheader">Платформы</div>
											<a class="popup_menu_item" href="https://www.apple.com/ru/macos/catalina/">
												macOS											</a>
											<a class="popup_menu_item" href="https://ubuntu.ru/">
												SteamCTF_OS и Linux											</a>
											<div class="hr"></div>
											<div class="popup_menu_subheader">Дополнительный контент</div>
											<a class="popup_menu_item" href="https://ubuntu.ru/">
												Саундтреки											</a>
										</div>
										<div class="popup_menu">
											<div class="popup_menu_subheader">Жанры игр на случай плохого настроения</div>

																																																											<a class="popup_menu_item" href="https://store.steampowered.com/tags/ru/%D0%93%D0%BE%D0%BD%D0%BA%D0%B8/?snr=1_60_4__12">
														Гонки													</a>
																																																<a class="popup_menu_item" href="https://store.steampowered.com/tags/ru/%D0%98%D0%BD%D0%B4%D0%B8/?snr=1_60_4__12">
														Инди													</a>
																																																<a class="popup_menu_item" href="https://store.steampowered.com/tags/ru/%D0%9A%D0%B0%D0%B7%D1%83%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F%20%D0%B8%D0%B3%D1%80%D0%B0/?snr=1_60_4__12">
														Казуальная игра													</a>
																																																<a class="popup_menu_item" href="https://store.steampowered.com/tags/ru/%D0%9C%D0%9C%D0%9E/?snr=1_60_4__12">
														ММО													</a>
																																																<a class="popup_menu_item" href="https://store.steampowered.com/tags/ru/%D0%9F%D1%80%D0%B8%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%B8%D0%B5/?snr=1_60_4__12">
														Приключение													</a>
																																																																							<a class="popup_menu_item" href="https://store.steampowered.com/tags/ru/%D0%A0%D0%BE%D0%BB%D0%B5%D0%B2%D0%B0%D1%8F%20%D0%B8%D0%B3%D1%80%D0%B0/?snr=1_60_4__12">
														Ролевая игра													</a>
																																																<a class="popup_menu_item" href="https://store.steampowered.com/tags/ru/%D0%A1%D0%B8%D0%BC%D1%83%D0%BB%D1%8F%D1%82%D0%BE%D1%80/?snr=1_60_4__12">
														Симулятор													</a>
																																																<a class="popup_menu_item" href="https://store.steampowered.com/tags/ru/%D0%A1%D0%BF%D0%BE%D1%80%D1%82%D0%B8%D0%B2%D0%BD%D0%B0%D1%8F%20%D0%B8%D0%B3%D1%80%D0%B0/?snr=1_60_4__12">
														Спортивная игра													</a>
																																																<a class="popup_menu_item" href="https://store.steampowered.com/tags/ru/%D0%A1%D1%82%D1%80%D0%B0%D1%82%D0%B5%D0%B3%D0%B8%D1%8F/?snr=1_60_4__12">
														Стратегия													</a>
																																																<a class="popup_menu_item" href="https://store.steampowered.com/tags/ru/%D0%AD%D0%BA%D1%88%D0%B5%D0%BD/?snr=1_60_4__12">
														Экшен													</a>
																							
																							<div class="hr"></div>
												<a class="popup_menu_item" href="https://store.steampowered.com/tag/browse/?snr=1_60_4__12">
													Больше популярных меток...												</a>
																					</div>
										<!-- Software third column -->
										<!-- <a href="/index.php/src/">Look_here</a> -->

																					<div class="popup_menu">
												<div class="popup_menu_subheader">Программы для скрипт кидди</div>
																									<a class="popup_menu_item" href="https://store.steampowered.com/tags/ru/Education/?snr=1_60_4__12">
														Education													</a>
																									<a class="popup_menu_item" href="https://store.steampowered.com/tags/ru/%D0%90%D0%BD%D0%B8%D0%BC%D0%B0%D1%86%D0%B8%D1%8F%20%D0%B8%20%D0%BC%D0%BE%D0%B4%D0%B5%D0%BB%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5/?snr=1_60_4__12">
														Анимация и моделирование													</a>
																									<a class="popup_menu_item" href="https://store.steampowered.com/tags/ru/%D0%94%D0%B8%D0%B7%D0%B0%D0%B9%D0%BD%20%D0%B8%20%D0%B8%D0%BB%D0%BB%D1%8E%D1%81%D1%82%D1%80%D0%B0%D1%86%D0%B8%D1%8F/?snr=1_60_4__12">
														Дизайн и иллюстрация													</a>
																									<a class="popup_menu_item" href="https://store.steampowered.com/tags/ru/%D0%9E%D0%B1%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B0%20%D0%B2%D0%B8%D0%B4%D0%B5%D0%BE/?snr=1_60_4__12">
														Обработка видео													</a>
																									<a class="popup_menu_item" href="https://store.steampowered.com/tags/ru/%D0%9E%D0%B1%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B0%20%D1%84%D0%BE%D1%82%D0%BE/?snr=1_60_4__12">
														Обработка фото													</a>
																									<a class="popup_menu_item" href="https://store.steampowered.com/tags/ru/%D0%9F%D1%83%D0%B1%D0%BB%D0%B8%D0%BA%D0%B0%D1%86%D0%B8%D1%8F%20%D0%B2%20%D1%81%D0%B5%D1%82%D0%B8/?snr=1_60_4__12">
														Публикация в сети													</a>
																									<a class="popup_menu_item" href="https://store.steampowered.com/tags/ru/%D0%A0%D0%B0%D0%B1%D0%BE%D1%82%D0%B0%20%D1%81%D0%BE%20%D0%B7%D0%B2%D1%83%D0%BA%D0%BE%D0%BC/?snr=1_60_4__12">
														Работа со звуком													</a>
																									<a class="popup_menu_item" href="https://store.steampowered.com/tags/ru/%D0%A0%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B0%20%D0%B8%D0%B3%D1%80/?snr=1_60_4__12">
														Разработка игр													</a>
																									<a class="popup_menu_item" href="https://store.steampowered.com/tags/ru/%D0%A3%D1%82%D0%B8%D0%BB%D0%B8%D1%82%D1%8B/?snr=1_60_4__12">
														Утилиты													</a>
																							</div>
										
									</div>
								</div>
							
                            

							      <a class="tab  " href="https://xn--80aesfpebagmfblc0a.xn--p1ai/what-to-do/students/">
                                    <span>Как жить после CTF?</span>
                                </a>
                            
                                <a class="tab  " href="https://xn--80aesfpebagmfblc0a.xn--p1ai/">
								<span>Новости</span>
							</a>


                                                                                            <a class="tab  " href="https://losst.ru/ustanovka-kali-linux-na-kompyuter">
                                    <span>УСТАНОВКА KALI LINUX</span>
									</a>
                            
							<div class="search_area">
								<div id="store_search">
									<form id="searchform" name="searchform" method="get" action="https://www.google.ru/" onsubmit="return SearchSuggestCheckTerm(this);">
										<input type="hidden" name="snr" value="1_60_4__12" >
										<div class="searchbox">
											<input id="store_nav_search_term" name="term" type="text" class="default" placeholder="поиск по магазину" size="22" autocomplete="off">
											<a href="#" id="store_search_link" onclick="var $Form = $J(this).parents('form'); $Form.submit(); return false;"><img src="https://steamstore-a.akamaihd.net/public/images/blank.gif"></a>
										</div>
									</form>
								</div>
								</div>
								<div id="searchterm_options" class="search_suggest popup_block_new" style="display: none;">
									<div class="popup_body" style="border-top: none;">
										<div id="search_suggestion_contents">
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="store_nav_rightcap"></div>
				</div>
							</div>
	</div>
				<script type="text/javascript">
			$J( function() {
				BindAutoFlyoutEvents();

				var $Window = $J(window);
				var $Header = $J('#store_header');
				var $ResponsiveNavCtn = $J('#responsive_store_nav_ctn');
				var $HeaderWrapper;
				$Window.on('Responsive_SmallScreenModeToggled.StoreMenu', function() {
					var bUseSmallScreenMode =window.UseSmallScreenMode && window.UseSmallScreenMode();

					if ( !$HeaderWrapper )
						$HeaderWrapper = $Header.wrap( $J('<div/>', {'class': 'responsive_store_nav_ctn_spacer'} ) ).parent();

					if ( bUseSmallScreenMode )
						$ResponsiveNavCtn.append( $Header );
					else
						$HeaderWrapper.append( $Header );


					if ( bUseSmallScreenMode )
					{
						$Header.css( 'visibility', 'hidden' );
						$Header.show();
						var nMenuHeight = $J('#store_header' ).height() + $J('#store_header' ).offset().top;
						if ( $Window.scrollTop() < nMenuHeight )
							$Window.scrollTop( nMenuHeight - GetResponsiveHeaderFixedOffsetAdjustment() );

						$Header.css('visibility', 'visible');
					}
				} ).trigger('Responsive_SmallScreenModeToggled.StoreMenu');

									if( $J('#searchform').length > 0 )
					{
						var g_rgUserPreferences = {
							excluded_tags : [],
							excluded_content_descriptors : [3,4]						};
						EnableSearchSuggestions( $J('#searchform')[0].elements['term'], '1_60_4_', 'RU', 1, 'russian', g_rgUserPreferences, '9716227' );
					}
				

			} );
		</script>
	<script type="text/javascript">
	var g_AccountID = 0;
	var g_sessionID = "e80c156562abfa17c123bedd";
	var g_ServerTime = 1602502933;

	$J( InitMiniprofileHovers );

			GStoreItemData.AddNavParams({
			__page_default: "1_60_4_",
			storemenu_recommendedtags: "1_60_4__17"		});
		GDynamicStore.Init( 0, false, "", {"primary_language":null,"secondary_languages":null,"platform_windows":null,"platform_mac":null,"platform_linux":null,"hide_adult_content_violence":null,"hide_adult_content_sex":null,"timestamp_updated":null,"hide_store_broadcast":null,"review_score_preference":null,"timestamp_content_descriptor_preferences_updated":null}, 'RU' );
		GStoreItemData.SetCurrencyFormatter( function( nValueInCents, bWholeUnitsOnly ) { var fmt = function( nValueInCents, bWholeUnitsOnly ) {	var format = v_numberformat( nValueInCents / 100, bWholeUnitsOnly ? 0 : 2, ",", "");format = format.replace( ",00", '' ); return format; };var strNegativeSymbol = '';	if ( nValueInCents < 0 ) { strNegativeSymbol = '-'; nValueInCents = -nValueInCents; }return strNegativeSymbol + fmt( nValueInCents, bWholeUnitsOnly ) + " p\u0443\u0431.";} );
		GStoreItemData.SetCurrencyMinPriceIncrement( 1 );
	</script>	</div>

<div class="page_content">

		
		<!-- Center Column -->


		<?php
        function contains($str, array $arr){
            foreach($arr as $a) {
                if (stripos($str,$a) !== false) return true;
            }
            return false;
        }

        $blacklist = Array('or','0', '1', '2', '3', '4', '5', '6', '7', '8', '9');

        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
          $login = $_POST['login'];
          $pass = $_POST['pass'];
          if(contains($pass, $blacklist) or contains($login, $blacklist)){
              die("Простите, тут запрещено хекать!!");
          }
          else{
            $xml = simplexml_load_file('/users.xml');

            $query = "//users/user[login/text()='$login' and password/text()='$pass']";

            $result = $xml->xpath($query);
            if(!$result){
                echo "Попробуй еще раз! Я верю в тебя!";
            }
            else{
                $user_data = $xml->xpath("//users/user[login/text()='$login']")[0];
                $flag = $user_data->flag;
                echo "Ваш флаг STEAMCTF: ".$flag;
            }
          }
        }
      ?>

<div id="error_display" class="checkout_error" style="display: none; color: #cc3300">
	</div>

	<div class="leftcol">

		
		<div class="checkout_content_box">
			<div class="loginbox">
				<div class="loginbox_left">
					<div class="loginbox_content">
						<h2>Войти</h2>
						<p>в существующий аккаунт SteamCTF</p>
						<br>
						<form name="logon" action="/" method="POST" id="login_form" style="display: none;">
							<div class="login_row">
								<div class="input_title">Имя аккаунта SteamCTF</div>
								<div class="username"><path class="path1" d="M896 307.2h-819.2c-42.347 0-76.8 34.453-76.8 76.8v460.8c0 42.349 34.453 76.8 76.8 76.8h819.2c42.349 0 76.8-34.451 76.8-76.8v-460.8c0-42.347-34.451-76.8-76.8-76.8zM896 358.4c1.514 0 2.99 0.158 4.434 0.411l-385.632 257.090c-14.862 9.907-41.938 9.907-56.802 0l-385.634-257.090c1.443-0.253 2.92-0.411 4.434-0.411h819.2zM896 870.4h-819.2c-14.115 0-25.6-11.485-25.6-25.6v-438.566l378.4 252.267c15.925 10.618 36.363 15.925 56.8 15.925s40.877-5.307 56.802-15.925l378.398-252.267v438.566c0 14.115-11.485 25.6-25.6 25.6z"></path><input name="login" type="text" class="user-input" placeholder="Имя пользователя" /></div>
							</div>
							<div class="login_row">
								<div class="input_title">Пароль</div>
								<div class="password"><path class="path1" d="M742.4 409.6h-25.6v-76.8c0-127.043-103.357-230.4-230.4-230.4s-230.4 103.357-230.4 230.4v76.8h-25.6c-42.347 0-76.8 34.453-76.8 76.8v409.6c0 42.347 34.453 76.8 76.8 76.8h512c42.347 0 76.8-34.453 76.8-76.8v-409.6c0-42.347-34.453-76.8-76.8-76.8zM307.2 332.8c0-98.811 80.389-179.2 179.2-179.2s179.2 80.389 179.2 179.2v76.8h-358.4v-76.8zM768 896c0 14.115-11.485 25.6-25.6 25.6h-512c-14.115 0-25.6-11.485-25.6-25.6v-409.6c0-14.115 11.485-25.6 25.6-25.6h512c14.115 0 25.6 11.485 25.6 25.6v409.6z"></path><input name="pass" type="password" class="pass-input" placeholder="Пароль" /></div>
								</div>
									<div class="login_row" id="captcha_entry" style="display: none;"><br>
							</div>

							<div class="btn_ctn">
						<div id="login_btn_signin">
							<button type="submit" class="btnv6_blue_hoverfade  btn_medium">
								<span>Купить 1 флаг</span>
							</button>
						</div>

						</form>

						<noscript><p>Чтобы использовать этот сайт, необходимо включить JavaScript</p></noscript>
						<script>
							document.getElementById('login_form').style.display = 'block';
						</script>
					</div>



						<div id="login_btn_wait" style="display: none;">
							<img src="https://steamstore-a.akamaihd.net/public/images/login/throbber.gif">
						</div>
					</div>
				</div>
				<div class="loginbox_sep">
				</div>
				<div class="loginbox_right">
					<div class="loginbox_content">
						<h2>Создать</h2>
						<p>новый бесплатный аккаунт</p>
						<br>
						<p>
							SteamCTF бесплатен и удобен в использовании. Создайте аккаунт и присоединяйтесь к SteamCTF — ведущей платформе почти бесплатной раздачи флагов на Windows, Mac и Linux.						</p>
						<div class="nonresponsive_hidden">
							<br>
							<p>
								<a target="_top" href="https://ctftime.org/">Узнайте больше о SteamCTF.</a>
							</p>
						</div>
					</div>

					<a target="_top" href="https://ctftime.org/amnesia" class="btnv6_blue_hoverfade btn_medium">
						<span>Создать аккаунт</span>
					</a>
				</div>
			</div>
		</div>
		<br>

		
		<a target="_top" href="https://ctftime.org/amnesia" id="link_forgot_password">
			Забыли пароль?		</a>
		<br><br>

	</div>
	<!-- End Center Column -->

			<!-- Right Column -->
		<div class="rightcol">
			<div class="block">

				<div class="block_content block_content_inner login">
					<h2>ЗАЧЕМ НУЖЕН SteamCTF?</h2>
					<ul id="why_list">
						<li>Приобретайте и загружайте полные версии и модели флагов</li>
						<li>Присоединяйтесь к сообществу SteamCTF</li>
						<li>Общайтесь с друзьями во время CTF</li>
						<li>Играйте в ваши CTF на любой поддерживаемой платформе</li>
						<li>Организуйте CTF, соревнование или сетевую вечеринку</li>
						<li>Получайте автоматическое обновление CTFd и многое другое!</li>
					</ul>
					<br />
					<img src="https://steamstore-a.akamaihd.net/public/images/v6/why_join_preview.png" width="265" height="176" border="0" >
					<br><br>
				</div>
				<div class="responsive_hidden">
					<br>
					<a target="_top" href="https://ctftime.org/amnesia">Узнайте больше о SteamCTF.</a>
				</div>
			</div>
		</div>
		<!-- End Right Column -->
	
	<div style="clear: both;"></div>

</div>
<!-- End Main Background -->

		</div>	<!-- responsive_page_legacy_content -->

		<div id="footer_spacer" style="" class=""></div>
<div id="footer"  class="">
<div class="footer_content">
	<div class="rule"></div>

	<div id="footer_nav">

		
		
			<span class="pulldown btnv6_blue_hoverfade btn_small" id="footer_steam_pulldown">
				<span>О SteamCTF</span>
			</span>
		<div class="popup_block_new" id="footer_steam_dropdown" style="display: none;">
						<div class="popup_body popup_menu">
				<a class="popup_menu_item" href="https://ctftime.org/ctf-wtf/">
					Что такое SteamCTF?				</a>
				<a class="popup_menu_item" href="https://ctftime.org/ctfs" target="_blank" rel="noreferrer">
					Купить флаг в SteamCTF				</a>
				<a class="popup_menu_item" href="https://ctftime.org/login/?next=/team/compare">
					Сообщество SteamCTF				</a>
			</div>
					</div>
	
			<span class="pulldown btnv6_blue_hoverfade btn_small" id="footer_valve_pulldown">
				<span>О SteamCTF	</span>
			</span>
		<div class="popup_block_new" id="footer_valve_dropdown" style="display: none;">
			<div class="popup_body popup_menu">
				<a class="popup_menu_item" href="http://www.valvesoftware.com/about.html" target="_blank" rel="noreferrer">
					О SteamCTF					</a>
				<a class="popup_menu_item" href="https://portswigger.net/burp/pro" target="_blank" rel="noreferrer">
					Решения для бизнеса				</a>
				<a class="popup_menu_item" href="https://portswigger.net/burp/documentation" target="_blank" rel="noreferrer">
					SteamCTFworks				</a>
				<a class="popup_menu_item" href="https://spb.hh.ru/vacancy/8274156" target="_blank" rel="noreferrer">
					Вакансии				</a>
			</div>
		</div>
			
			
			<span class="pulldown btnv6_blue_hoverfade btn_small" id="footer_help_pulldown">
				<span>ПОМОЩЬ</span>
			</span>
		<div class="popup_block_new" id="footer_help_dropdown" style="display: none;">
						<div class="popup_body popup_menu">
				<a class="popup_menu_item" href="https://proglib.io/p/capture-the-flag/">
					Служба поддержки				</a>
				<a class="popup_menu_item" href="https://proglib.io/p/capture-the-flag/" target="_blank" rel="noreferrer">
					Форумы				</a>
				<a class="popup_menu_item" href="https://proglib.io/p/capture-the-flag/" target="_blank" rel="noreferrer">
					Статистика				</a>
			</div>
					</div>

			
			<span class="pulldown btnv6_blue_hoverfade btn_small" id="footer_feeds_pulldown">
				<span>ЛЕНТЫ НОВОСТЕЙ</span>
			</span>
		<div class="popup_block_new" id="footer_feeds_dropdown" style="display: none;">
			<div class="popup_body popup_menu">
				<a class="popup_menu_item" href="https://ctftime.org/">
					<img src="https://steamstore-a.akamaihd.net/public/images/ico/ico_rss2.gif" width="13" height="13" border="0" alt="" align="top">&nbsp;&nbsp;Новости SteamCTF				</a>
				<a class="popup_menu_item" href="https://ctftime.org/">
					<img src="https://steamstore-a.akamaihd.net/public/images/ico/ico_rss2.gif" width="13" height="13" border="0" alt="" align="top">&nbsp;&nbsp;Релизы игр				</a>
				<a class="popup_menu_item" href="https://ctftime.org/">
					<img src="https://steamstore-a.akamaihd.net/public/images/ico/ico_rss2.gif" width="13" height="13" border="0" alt="" align="top">&nbsp;&nbsp;Предложения дня				</a>
			</div>
		</div>
		<div style="clear: left;"></div>

		<script type="text/javascript">
			RegisterFlyout( 'footer_genre_pulldown', 'footer_genre_dropdown', null, null, true );
			RegisterFlyout( 'footer_steam_pulldown', 'footer_steam_dropdown', null, null, true );
			RegisterFlyout( 'footer_valve_pulldown', 'footer_valve_dropdown', null, null, true );
			RegisterFlyout( 'footer_help_pulldown', 'footer_help_dropdown', null, null, true );
			RegisterFlyout( 'footer_feeds_pulldown', 'footer_feeds_dropdown', null, null, true );
		</script>
	</div>

	<br>

    <div class="rule"></div>
				<div id="footer_logo_steam"><img src="https://steamstore-a.akamaihd.net/public/images/v6/logo_steam_footer.png" alt="Valve Software" border="0" /></div>
	
    <div id="footer_logo"><a href="https://ctftime.org/" target="_blank" rel="noreferrer"><img src="https://steamstore-a.akamaihd.net/public/images/footerLogo_valve_new.png" alt="Valve Software" border="0" /></a></div>
    <div id="footer_text">
        <div>&copy; 2020 ARSIB Corporation. Все права защищены. Все торговые марки являются собственностью соответствующих владельцев в США и других странах.</div>
        <div>НДС включён во все цены, где он применим (нет).&nbsp;&nbsp;

            <a href="https://portswigger.net/privacy" target="_blank" rel="noreferrer">Политика конфиденциальности</a>
            &nbsp; | &nbsp;
            <a href="https://portswigger.net/legal" target="_blank" rel="noreferrer">Правовая информация</a>
            &nbsp; | &nbsp;
            <a href="https://portswigger.net/contact" target="_blank" rel="noreferrer">Соглашение подписчика SteamCTF</a>
            &nbsp; | &nbsp;
            <a href="https://portswigger.net/contact" target="_blank" rel="noreferrer">Возвраты флагов</a>

        </div>
					<div class="responsive_optin_link">
				<div class="btn_medium btnv6_grey_black" onclick="Responsive_RequestMobileView()">
					<span>Мобильная версия</span>
				</div>
			</div>
		
    </div>



    <div style="clear: left;"></div>
	<br>

    <div class="rule"></div>

    <div class="valve_links">
        <a href="http://aciso.ru/" target="_blank" rel="noreferrer">Об ARSIB</a>
        &nbsp; | &nbsp;<a href="http://aciso.ru/" target="_blank" rel="noreferrer">SteamCTFworks</a>
        &nbsp; | &nbsp;<a href="http://aciso.ru/" target="_blank" rel="noreferrer">Вакансии</a>
        &nbsp; | &nbsp;<a href="http://aciso.ru/" target="_blank" rel="noreferrer">Дистрибуция SteamCTF</a>
        		&nbsp; | &nbsp;<a href="http://aciso.ru/" target="_blank" rel="noreferrer">Подарочные флаги</a>
		&nbsp; | &nbsp;<a href="http://aciso.ru/" target="_blank" rel="noopener"><img src="https://steamstore-a.akamaihd.net/public/images/ico/ico_facebook.gif"> SteamCTF</a>
		&nbsp; | &nbsp;<a href="https://twitter.com/acisoru" target="_blank" rel="noreferrer"><img src="https://steamstore-a.akamaihd.net/public/images/ico/ico_twitter.gif"> @арсиб</a>
            </div>

</div>
</div>
	</div>	<!-- responsive_page_content -->

	

</div>	<!-- responsive_page_frame -->
</body>
</html>