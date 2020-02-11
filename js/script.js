   $(document).ready(function() {
    $(".menu-icon").on("click", function() {
      $("nav ul").toggleClass("showing");
    });
  });

                  // Scrolling Effect

                  $(window).on("scroll", function() {
                    if($(window).scrollTop()) {
                      $('nav').addClass('black');
                    }

                    else {
                      $('nav').removeClass('black');
                    }
                  })



                  var btn = document.querySelector('#showModal2');
                  var modalDlg2 = document.querySelector('#service-modal');
                  var imageModalCloseBtn2 = document.querySelector('#image-modal-close2');
                  btn.addEventListener('click', function(){
                    modalDlg2.classList.add('is-active');
                  });

                  imageModalCloseBtn2.addEventListener('click', function(){
                    modalDlg2.classList.remove('is-active');
                  });


                  var btn = document.querySelector('#serv-warranty');
                  var modalDlg4 = document.querySelector('#serv-modal');
                  var imageModalCloseBtn4 = document.querySelector('#image-modal-close4');
                  btn.addEventListener('click', function(){
                    modalDlg4.classList.add('is-active');
                  });

                  imageModalCloseBtn4.addEventListener('click', function(){
                    modalDlg4.classList.remove('is-active');
                  });


                  var btn = document.querySelector('#serv-RR');
                  var modalDlg5 = document.querySelector('#repair-modal');
                  var imageModalCloseBtn5 = document.querySelector('#image-modal-close5');
                  btn.addEventListener('click', function(){
                    modalDlg5.classList.add('is-active');
                  });

                  imageModalCloseBtn5.addEventListener('click', function(){
                    modalDlg5.classList.remove('is-active');
                  });
                  


                  var btn = document.querySelector('#serv-TAC');
                  var modalDlg6 = document.querySelector('#term-condition-modal');
                  var imageModalCloseBtn6 = document.querySelector('#image-modal-close6');
                  btn.addEventListener('click', function(){
                    modalDlg6.classList.add('is-active');
                  });

                  imageModalCloseBtn6.addEventListener('click', function(){
                    modalDlg6.classList.remove('is-active');
                  });
                  


                  var btn = document.querySelector('#serv-download');
                  var modalDlg7 = document.querySelector('#serv-download-modal');
                  var imageModalCloseBtn7 = document.querySelector('#image-modal-close7');
                  btn.addEventListener('click', function(){
                    modalDlg7.classList.add('is-active');
                  });

                  imageModalCloseBtn7.addEventListener('click', function(){
                    modalDlg7.classList.remove('is-active');
                  });


                  var btn = document.querySelector('#showModal3');
                  var modalDlg = document.querySelector('#image-modal');
                  var imageModalCloseBtn = document.querySelector('#image-modal-close');
                  btn.addEventListener('click', function(){
                    modalDlg.classList.add('is-active');
                  });

                  imageModalCloseBtn.addEventListener('click', function(){
                    modalDlg.classList.remove('is-active');
                  });


                  (function(){
                    document.getElementById("navMenu").style.backgroundColor = "transparent";
                    document.getElementById("navMenu").style.textAlign="left";
                    document.getElementById("navburger").style.marginTop = "20px";
                    document.getElementById("navburger").style.marginRight ="20px";
                    document.getElementById("navburger").style.color ="#99cc27";
                    document.getElementById("hero-text").style.userSelect="none";
                    var burger = document.querySelector('.burger');
                    var nav = document.querySelector('#'+burger.dataset.target);
                    burger.addEventListener('click', function(){
                      burger.classList.toggle('is-active');
                      navMenu.classList.toggle('is-active');

                    });


                  })();


                  window.onscroll = function() {scrollFunction()};

                  function scrollFunction() {
                    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {

                      document.getElementById("navbar").style.backgroundColor = "rgba(54, 54, 54, 0.5)";
                      document.getElementById("navbar").style.height="60px";
                      document.getElementById("logo").style.marginTop="-5px";
                      document.getElementById("logo").style.transitionDuration=".5s";
                      document.getElementById("logo").style.width="50%";

                    } else {
                      document.getElementById("navbar").style.backgroundColor = "transparent";
                      document.getElementById("navbar").style.height="100px";

                      document.getElementById("logo").style.width="100%";

                    }
                  }


                  var btn = document.querySelector('#sendmodal');
                  var modalDlg9 = document.querySelector('#serv-modal1');
                  var imageModalCloseBtn9 = document.querySelector('#close9');
                  btn.addEventListener('click', function(){
                    modalDlg9.classList.add('is-active');
                  });

                  imageModalCloseBtn9.addEventListener('click', function(){
                    modalDlg9.classList.remove('is-active');
                  });



                  $(document).on('click', '.notification > button.delete', function() {
                    $(this).parent().addClass('is-hidden');
                    return false;
                  });


