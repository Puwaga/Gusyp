function dis_menu(el) {
      var val = el.id;
      var ch = val.substring(3, val.length);
      var p = $('#d_cover' + ch);
      var position = p.position();
      var pos = parseInt(position.top);
      $(document).ready(function () {
          var $Menu = $('#Img' + ch);
          document.getElementById(val).onclick = function () { clickScroll(ch, pos, $Menu) };
      });
  }

  var pagetop, menu, yPos;

  function clickScroll(ch, pos, Menu) {
      $('#d_cover' + ch).css('display', 'block');
      $('#d_cover' + ch).draggable();
      if (Menu.hasClass('Img')) {
          $('#btn' + ch).addClass('active');
          $('#Img' + ch).addClass('click');
          $('#Img' + ch).removeClass('Img');
          $('#Profile' + ch).addClass('clickProfile');
          $('#Profile' + ch).css('margin-top', '-' + pos + 'px');
          $('#Profile' + ch).removeClass('Profile');
          $('#clickPopUp' + ch).css('display', 'block');
          $('#d_cover' + ch).css('margin-top', '400px');
          $('#d_cover' + ch).css('vertical-top', 'top');
          $('#d_cover' + ch).css('margin-left', '735px');
          $('#d_cover' + ch).css('position', 'fixed');
          document.getElementById("friendlist").onscroll = function () { yScroll(ch, pos) };
      } else {
          $('#btn' + ch).removeClass('active');
          $('#Img' + ch).addClass('Img');
          $('#Img' + ch).removeClass('click');
          $('#Profile' + ch).addClass('Profile');
          $('#Profile' + ch).removeClass('clickProfile');
          $('#clickPopUp' + ch).css('display', 'none');
          $('#d_cover' + ch).css('margin-top', '0px');
          $('#d_cover' + ch).css('margin-left', '650px');
          $('#d_cover' + ch).css('position', 'absolute');
      }
  }

  function yScroll(ch, pos) {
      pagetop = document.getElementById('side_read');

      yPos = window.pageYOffset;
      if (yPos > 10) {
          $('#btn' + ch).addClass('active');
          $('#Img' + ch).addClass('click');
          $('#Img' + ch).removeClass('Img');
          $('#Profile' + ch).addClass('clickProfile');
          $('#Profile' + ch).css('margin-top', '-' + pos + 'px');
          $('#Profile' + ch).removeClass('Profile');
          $('#clickPopUp' + ch).css('display', 'block');
          $('#d_cover' + ch).css('margin-top', '16px');
          $('#d_cover' + ch).css('vertical-top', 'top');
          $('#d_cover' + ch).css('margin-left', '750px');
          $('#d_cover' + ch).css('position', 'fixed');

      } else if (yPos < 10) {
          $('#btn' + ch).addClass('active');
          $('#Img' + ch).addClass('click');
          $('#Img' + ch).removeClass('Img');
          $('#Profile' + ch).addClass('clickProfile');
          $('#Profile' + ch).css('margin-top', '-' + pos + 'px');
          $('#Profile' + ch).removeClass('Profile');
          $('#clickPopUp' + ch).css('display', 'block');
          $('#d_cover' + ch).css('margin-top', '16.6666666865348816px');
          $('#d_cover' + ch).css('vertical-top', 'top');
          $('#d_cover' + ch).css('margin-left', '750px');
          $('#d_cover' + ch).css('position', 'fixed');

      } else {
          $('#btn' + ch).addClass('active');
          $('#Img' + ch).addClass('click');
          $('#Img' + ch).removeClass('Img');
          $('#Profile' + ch).addClass('clickProfile');
          $('#Profile' + ch).css('margin-top', -pos + 'px');
          $('#Profile' + ch).removeClass('Profile');
          $('#clickPopUp' + ch).css('display', 'block');
          $('#d_cover' + ch).css('margin-top', '16px');
          $('#d_cover' + ch).css('vertical-top', 'top');
          $('#d_cover' + ch).css('margin-left', '750px');
          $('#d_cover' + ch).css('position', 'absolute');
      }
  }

  function destroyed(el) {
      var val = el.id;
      var ch = val[7];
      $(function () {
          $('#d_cover'+ch).on('mouseup', function () {
              var p = $('#d_cover' + ch);
              var position = p.position();
              var pos = parseInt(position.left);
              if (pos > 200) {
                  $('#d_cover' + ch).css('margin-left', '650px');
                  $('#d_cover' + ch).css('display', 'none');
                  $('#d_cover' + ch).css('transition', '0.4s ease');
              }
          })
      })
  }