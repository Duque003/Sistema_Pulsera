(function($) {
  'use strict';
  $(function() {
    $(".nav-settings").on("click", function() {
      $("#right-sidebar").toggleClass("open");
    });
    $(".settings-close").on("click", function() {
      $("#right-sidebar,#theme-settings").removeClass("open");
    });

    $("#settings-trigger").on("click" , function(){
      $("#theme-settings").toggleClass("open");
    });


    //background constants
    var navbar_classes = "navbar-danger navbar-success navbar-warning navbar-dark navbar-light navbar-primary navbar-info navbar-pink";
    var sidebar_classes = "sidebar-light sidebar-dark";
    var $body = $("body");

    /*//sidebar backgrounds
    $("#sidebar-light-theme").on("click" , function(){
      $body.removeClass(sidebar_classes);
      $body.addClass("sidebar-light");
      $(".sidebar-bg-options").removeClass("selected");
      $(this).addClass("selected");
    });
    $("#sidebar-dark-theme").on("click" , function(){
      $body.removeClass(sidebar_classes);
      $body.addClass("sidebar-dark");
      $(".sidebar-bg-options").removeClass("selected");
      $(this).addClass("selected");
    });*/

    // Detecta el tema guardado al cargar la página
  $(document).ready(function() {
     var theme = localStorage.getItem('sidebar-theme'); // Recupera el tema del localStorage
     if (theme) {
         $body.removeClass(sidebar_classes);  // Elimina los posibles temas previos
         $body.addClass(theme);  // Aplica el tema guardado
         $(".sidebar-bg-options").removeClass("selected");  // Remueve la clase seleccionada
         $("#" + theme + "-theme").addClass("selected");  // Resalta el tema seleccionado
     } else {
         // Si no hay tema guardado, se puede dejar el tema claro por defecto
         $body.addClass("sidebar-light");
         $("#sidebar-light-theme").addClass("selected");
     }
  });

  // Cambiar a tema claro
  $("#sidebar-light-theme").on("click", function(){
    $body.removeClass(sidebar_classes);  // Elimina las clases de los temas
    $body.addClass("sidebar-light");  // Aplica el tema claro
    $(".sidebar-bg-options").removeClass("selected");  // Remueve la clase de selección
    $(this).addClass("selected");  // Marca este tema como seleccionado

    // Guarda la preferencia en localStorage
    localStorage.setItem('sidebar-theme', 'sidebar-light');
  });

  // Cambiar a tema oscuro
  $("#sidebar-dark-theme").on("click", function(){
    $body.removeClass(sidebar_classes);  // Elimina las clases de los temas
    $body.addClass("sidebar-dark");  // Aplica el tema oscuro
    $(".sidebar-bg-options").removeClass("selected");  // Remueve la clase de selección
    $(this).addClass("selected");  // Marca este tema como seleccionado

    // Guarda la preferencia en localStorage
    localStorage.setItem('sidebar-theme', 'sidebar-dark');
  });

    //Navbar Backgrounds
    $(".tiles.primary").on("click" , function(){
      $(".navbar").removeClass(navbar_classes);
      $(".navbar").addClass("navbar-primary");
      $(".tiles").removeClass("selected");
      $(this).addClass("selected");
    });
    $(".tiles.success").on("click" , function(){
      $(".navbar").removeClass(navbar_classes);
      $(".navbar").addClass("navbar-success");
      $(".tiles").removeClass("selected");
      $(this).addClass("selected");
    });
    $(".tiles.warning").on("click" , function(){
      $(".navbar").removeClass(navbar_classes);
      $(".navbar").addClass("navbar-warning");
      $(".tiles").removeClass("selected");
      $(this).addClass("selected");
    });
    $(".tiles.danger").on("click" , function(){
      $(".navbar").removeClass(navbar_classes);
      $(".navbar").addClass("navbar-danger");
      $(".tiles").removeClass("selected");
      $(this).addClass("selected");
    });
    $(".tiles.light").on("click" , function(){
      $(".navbar").removeClass(navbar_classes);
      $(".navbar").addClass("navbar-light");
      $(".tiles").removeClass("selected");
      $(this).addClass("selected");
    });
    $(".tiles.info").on("click" , function(){
      $(".navbar").removeClass(navbar_classes);
      $(".navbar").addClass("navbar-info");
      $(".tiles").removeClass("selected");
      $(this).addClass("selected");
    });
    $(".tiles.dark").on("click" , function(){
      $(".navbar").removeClass(navbar_classes);
      $(".navbar").addClass("navbar-dark");
      $(".tiles").removeClass("selected");
      $(this).addClass("selected");
    });
    $(".tiles.default").on("click" , function(){
      $(".navbar").removeClass(navbar_classes);
      $(".tiles").removeClass("selected");
      $(this).addClass("selected");
    });
  });
})(jQuery);
