


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table, th, td {
      border:1px solid black;
      padding: 10
    }
  </style>
</head>
<body>
  <from>
    <label for="">Name 
      <input type="text" name="name">
    </label>
    <label for="">Roll 
      <input type="text" name="role">
    </label>
    <label for="">Class 
      <input type="text" name="class">
    </label>
    <input type="submit" id="save-button" value="Save">
  </from>
  <section>
    <h2>Load the students data</h2>
    <table id="table-data">
      
    </table>
  </section>
  <script src="./js/jquery.min.js" ></script>
  <script>
  $().ready(function(){
    function autoLoad() {
      $.ajax({
        url : "ajax-load.php",
        type : "POST",
        success : function(data) {
          $("#table-data").html(data);
        }
      });
    }
    autoLoad();
    $("#save-button").on("click", function(e) {
      
    });
  });



  </script>
</body>
</html>






