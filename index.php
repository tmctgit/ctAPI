<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
<script>
fetch("http://localhost/ctAPI/api.php").then(function(response){
  return response.json();
  })
  .then(function(data){
  console.log(data);
  });
</script>
</body>
</html>
