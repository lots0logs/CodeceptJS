<html>
<head>
    <style>
        .invisible_button { display: none; }
    </style>
</head>
<body>

<div id="text">Static text</div>

<div id="step_1" class="invisible_button">Step One Button</div>
<div id="step_2" class="invisible_button">Step Two Button</div>
<div id="step_3" class="invisible_button">Step Three Button</div>
<div id="step_4" class="invisible_button">Steps Complete!</div>

<script>
  function getByID( id ) {
    return document.getElementById( id );
  }
  function removeClass( el, cls ) {
    el.classList.remove( cls );
    return el;
  }

  setTimeout(function () {
    getByID('text').textContent = 'Dynamic text';

    ['step_1', 'step_2', 'step_3'].forEach( function( id, index ) {
      var num = index + 2,
        nextIDNum = num.toString();

      getByID( id ).addEventListener( 'click', function( event ) {
        var nextID = 'step_' + nextIDNum;
        removeClass( getByID( nextID ), 'invisible_button' );
      });
    });

    removeClass( getByID('step_1'), 'invisible_button' );
  }, 1000);
</script>
</body>
</html>
