<html>
<head>
  <script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
  <script>
  $(document).ready(function (){
    $.ajax({
      url: '/ajax',
      type: "post",
      contentType: 'application/json; charset=utf-8',
      data: JSON.stringify({ Quote: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'}),
      dataType: 'json',
      success: function(r) {
        $('#response').append(r.Quote);
      }
    });
  });
  </script>
</head>
<body>
  <p id="response"></p>
</body>
</html>