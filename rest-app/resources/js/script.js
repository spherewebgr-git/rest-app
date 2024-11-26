
 jQuery(document).ready(function (){
     jQuery(document).on("click", function (e) {
         var outside_space = jQuery(".outside");
         if (
             !outside_space.is(e.target) &&
             outside_space.has(e.target).length === 0
         ) {
             jQuery(".menu-to-be-close").removeClass("d-block");
             jQuery(".menu-to-be-close").css("display", "none");
         }
     });

     jQuery(".prooduct-details-box .close").on("click", function (e) {
         var tets = jQuery(this).parent().parent().parent().parent().addClass("d-none");
         console.log(tets);
     });

     if (jQuery(".page-wrapper").hasClass("horizontal-wrapper")) {
         jQuery(".sidebar-list").hover(
             function () {
                 jQuery(this).addClass("hoverd");
             },
             function () {
                 jQuery(this).removeClass("hoverd");
             }
         );
         jQuery(window).on("scroll", function () {
             if (jQuery(this).scrollTop() < 600) {
                 jQuery(".sidebar-list").removeClass("hoverd");
             }
         });
     }

     /*----------------------------------------
        password show hide
        ----------------------------------------*/
     jQuery(".show-hide").show();
     jQuery(".show-hide span").addClass("show");

     jQuery(".show-hide span").click(function () {
         if (jQuery(this).hasClass("show")) {
             jQuery('input[name="login[password]"]').attr("type", "text");
             jQuery(this).removeClass("show");
         } else {
             jQuery('input[name="login[password]"]').attr("type", "password");
             jQuery(this).addClass("show");
         }
     });
     jQuery('form button[type="submit"]').on("click", function () {
         jQuery(".show-hide span").addClass("show");
         jQuery(".show-hide")
             .parent()
             .find('input[name="login[password]"]')
             .attr("type", "password");
     });

     /*=====================
         02. Background Image js
         ==========================*/
     jQuery(".bg-center").parent().addClass("b-center");
     jQuery(".bg-img-cover").parent().addClass("bg-size");
     jQuery(".bg-img-cover").each(function () {
         var el = jQuery(this),
             src = el.attr("src"),
             parent = el.parent();
         parent.css({
             "background-image": "url(" + src + ")",
             "background-size": "cover",
             "background-position": "center",
             display: "block",
         });
         el.hide();
     });

     jQuery(".mega-menu-container").css("display", "none");
     jQuery(".header-search").click(function () {
         jQuery(".search-full").addClass("open");
     });
     jQuery(".close-search").click(function () {
         jQuery(".search-full").removeClass("open");
         jQuery("body").removeClass("offcanvas");
     });
     jQuery(".mobile-toggle").click(function () {
         jQuery(".nav-menus").toggleClass("open");
     });
     jQuery(".mobile-toggle-left").click(function () {
         jQuery(".left-header").toggleClass("open");
     });
     jQuery(".bookmark-search").click(function () {
         jQuery(".form-control-search").toggleClass("open");
     });
     jQuery(".filter-toggle").click(function () {
         jQuery(".product-sidebar").toggleClass("open");
     });
     jQuery(".toggle-data").click(function () {
         jQuery(".product-wrapper").toggleClass("sidebaron");
     });
     jQuery(".form-control-search input").keyup(function (e) {
         if (e.target.value) {
             jQuery(".page-wrapper").addClass("offcanvas-bookmark");
         } else {
             jQuery(".page-wrapper").removeClass("offcanvas-bookmark");
         }
     });
     jQuery(".search-full input").keyup(function (e) {
         console.log(e.target.value);
         if (e.target.value) {
             jQuery("body").addClass("offcanvas");
         } else {
             jQuery("body").removeClass("offcanvas");
         }
     });

     jQuery("body").keydown(function (e) {
         if (e.keyCode === 27) {
             jQuery(".search-full input").val("");
             jQuery(".form-control-search input").val("");
             jQuery(".page-wrapper").removeClass("offcanvas-bookmark");
             jQuery(".search-full").removeClass("open");
             jQuery(".search-form .form-control-search").removeClass("open");
             jQuery("body").removeClass("offcanvas");
         }
     });
     jQuery(".mode").on("click", function () {
         const bodyModeDark = jQuery("body").hasClass("dark-only");

         if (!bodyModeDark) {
             jQuery(".mode").addClass("active");
             localStorage.setItem("mode", "dark-only");
             jQuery("body").addClass("dark-only");
             jQuery("body").removeClass("light");
         }
         if (bodyModeDark) {
             jQuery(".mode").removeClass("active");
             localStorage.setItem("mode", "light");
             jQuery("body").removeClass("dark-only");
             jQuery("body").addClass("light");
         }
     });
     // jQuery("body").addClass(
     //   localStorage.getItem("mode")
     //     ? localStorage.getItem("mode")
     //     : "light"
     // );
     jQuery(".mode").addClass(
         localStorage.getItem("mode") === "dark-only" ? "active" : " "
     );

     // sidebar filter
     jQuery(".md-sidebar .md-sidebar-toggle ").on("click", function (e) {
         jQuery(".md-sidebar .md-sidebar-aside ").toggleClass("open");
     });

     jQuery(".loader-wrapper").fadeOut("slow", function () {
         jQuery(this).remove();
     });

     jQuery(window).on("scroll", function () {
         if (jQuery(this).scrollTop() > 600) {
             jQuery(".tap-top").fadeIn();
         } else {
             jQuery(".tap-top").fadeOut();
         }
     });

     jQuery(".tap-top").click(function () {
         jQuery("html, body").animate(
             {
                 scrollTop: 0,
             },
             600
         );
         return false;
     });
     (function ($, window, document, undefined) {
         "use strict";
         var $ripple = jQuery(".js-ripple");
         $ripple.on("click.ui.ripple", function (e) {
             var $this = jQuery(this);
             var $offset = $this.parent().offset();
             var $circle = $this.find(".c-ripple__circle");
             var x = e.pageX - $offset.left;
             var y = e.pageY - $offset.top;
             $circle.css({
                 top: y + "px",
                 left: x + "px",
             });
             $this.addClass("is-active");
         });
         $ripple.on(
             "animationend webkitAnimationEnd oanimationend MSAnimationEnd",
             function (e) {
                 jQuery(this).removeClass("is-active");
             }
         );
     })(jQuery, window, document);

     // active link

     jQuery(".chat-menu-icons .toogle-bar").click(function () {
         jQuery(".chat-menu").toggleClass("show");
     });

     // Language
     var tnum = "en";

     jQuery(document).ready(function () {
         if (localStorage.getItem("primary") != null) {
             var primary_val = localStorage.getItem("primary");
             jQuery("#ColorPicker1").val(primary_val);
             var secondary_val = localStorage.getItem("secondary");
             jQuery("#ColorPicker2").val(secondary_val);
         }

         jQuery(document).click(function (e) {
             jQuery(".translate_wrapper, .more_lang").removeClass("active");
         });
         jQuery(".translate_wrapper .current_lang").click(function (e) {
             e.stopPropagation();
             jQuery(this).parent().toggleClass("active");

             setTimeout(function () {
                 jQuery(".more_lang").toggleClass("active");
             }, 5);
         });

         /*TRANSLATE*/
         translate(tnum);

         jQuery(".more_lang .lang").click(function () {
             jQuery(this).addClass("selected").siblings().removeClass("selected");
             jQuery(".more_lang").removeClass("active");

             var i = jQuery(this).find("i").attr("class");
             var lang = jQuery(this).attr("data-value");
             var tnum = lang;
             translate(tnum);

             jQuery(".current_lang .lang-txt").text(lang);
             jQuery(".current_lang i").attr("class", i);
         });
     });

     function translate(tnum) {
         jQuery(".lan-1").text(trans[0][tnum]);
         jQuery(".lan-2").text(trans[1][tnum]);
         jQuery(".lan-3").text(trans[2][tnum]);
         jQuery(".lan-4").text(trans[3][tnum]);
         jQuery(".lan-5").text(trans[4][tnum]);
         jQuery(".lan-6").text(trans[5][tnum]);
         jQuery(".lan-7").text(trans[6][tnum]);
         jQuery(".lan-8").text(trans[7][tnum]);
         jQuery(".lan-9").text(trans[8][tnum]);
     }

     var trans = [
         {
             en: "General",
             pt: "Geral",
             es: "Generalo",
             fr: "GÃ©nÃ©rale",
             de: "Generel",
             cn: "ä¸€èˆ¬",
             ae: "Ø­Ø¬Ù†Ø±Ø§Ù„ Ù„ÙˆØ§Ø¡",
         },
         {
             en: "Dashboards,widgets & layout.",
             pt: "PainÃ©is, widgets e layout.",
             es: "Paneloj, fenestraÄµoj kaj aranÄo.",
             fr: "Tableaux de bord, widgets et mise en page.",
             de: "Dashboards, widgets en lay-out.",
             cn: "ä»ªè¡¨æ¿ï¼Œå°å·¥å…·å’Œå¸ƒå±€ã€‚",
             ae: "Ù„ÙˆØ­Ø§Øª Ø§Ù„Ù…Ø¹Ù„ÙˆÙ…Ø§Øª ÙˆØ§Ù„Ø£Ø¯ÙˆØ§Øª ÙˆØ§Ù„ØªØ®Ø·ÙŠØ·.",
         },
         {
             en: "Dashboards",
             pt: "PainÃ©is",
             es: "Paneloj",
             fr: "Tableaux",
             de: "Dashboards",
             cn: " ä»ªè¡¨æ¿ ",
             ae: "ÙˆØ­Ø§Øª Ø§Ù„Ù‚ÙŠØ§Ø¯Ø© ",
         },
         {
             en: "Default",
             pt: "PadrÃ£o",
             es: "Vaikimisi",
             fr: "DÃ©faut",
             de: "Standaard",
             cn: "é›»å­å•†å‹™",
             ae: "ÙˆØ¥ÙØªØ±Ø§Ø¶ÙŠ",
         },
         {
             en: "Ecommerce",
             pt: "ComÃ©rcio eletrÃ´nico",
             es: "Komerco",
             fr: "Commerce Ã©lectronique",
             de: "E-commerce",
             cn: "é›»å­å•†å‹™",
             ae: "ÙˆØ§Ù„ØªØ¬Ø§Ø±Ø© Ø§Ù„Ø¥Ù„ÙƒØªØ±ÙˆÙ†ÙŠØ©",
         },
         {
             en: "Widgets",
             pt: "Ferramenta",
             es: "Vidin",
             fr: "Widgets",
             de: "Widgets",
             cn: "å°éƒ¨ä»¶",
             ae: "ÙˆØ§Ù„Ø­Ø§Ø¬ÙŠØ§Øª",
         },
         {
             en: "Page layout",
             pt: "Layout da pÃ¡gina",
             es: "PaÄa aranÄo",
             fr: "Tableaux",
             de: "Mise en page",
             cn: "é é¢ä½ˆå±€",
             ae: "ÙˆØªØ®Ø·ÙŠØ· Ø§Ù„ØµÙØ­Ø©",
         },
         {
             en: "Applications",
             pt: "FormulÃ¡rios",
             es: "Aplikoj",
             fr: "Applications",
             de: "Toepassingen",
             cn: "æ‡‰ç”¨é ˜åŸŸ",
             ae: "ÙˆØ§Ù„ØªØ·Ø¨ÙŠÙ‚Ø§Øª",
         },
         {
             en: "Ready to use Apps",
             pt: "Pronto para usar aplicativos",
             es: "Preta uzi Apps",
             fr: " Applications prÃªtes Ã  lemploi ",
             de: "Klaar om apps te gebruiken",
             cn: "ä»ªè¡¨æ¿",
             ae: "Ø¬Ø§Ù‡Ø² Ù„Ø§Ø³ØªØ®Ø¯Ø§Ù… Ø§Ù„ØªØ·Ø¨ÙŠÙ‚Ø§Øª",
         },
     ];

     jQuery(".mobile-title svg").click(function () {
         jQuery(".header-mega").toggleClass("d-block");
     });

     jQuery(".onhover-dropdown").on("click", function () {
         jQuery(this).children(".onhover-show-div").toggleClass("active");
     });

     jQuery("#flip-btn").click(function () {
         jQuery(".flip-card-inner").addClass("flipped");
     });

     jQuery("#flip-back").click(function () {
         jQuery(".flip-card-inner").removeClass("flipped");
     });
     // ================== show and hide input start
     const toggle = document.getElementById("searchIcon")
     let newinput = false
     toggle.addEventListener("click", function(){
         newinput = !newinput
         if(newinput){
             document.getElementById("searchInput").classList.add("show")
         }else{
             document.getElementById("searchInput").classList.remove("show")
         }
     });
     // ================ show and hide input css end
 });

