


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
  <div id="successMessage"></div>
  <div id="errorMessage"></div>
  <form id="addform">
    <label for="">Name 
      <input type="text" name="name" id="sname">
    </label>
    <label for="">Roll 
      <input type="text" name="roll" id="sroll">
    </label>
    <label for="">Class 
      <input type="text" name="class" id="sclass">
    </label>
    <input type="submit" id="save-button" value="Save">
  </form>
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
      e.preventDefault();
      let sname = $("#sname").val();
      let sroll = $("#sroll").val();
      let sclass = $("#sclass").val();
      if(sname=="" || sroll=="" || sclass=="") {
        $("#errorMessage").html("All field must be Fill").slideDown();
      } else{
        $.ajax({
        url : "ajax-update.php",
        type : "POST",
        data: {stuName:sname, stuRoll:sroll, stuClass:sclass},
        success : function(data) {
          $("#table-data").html(data);
          if(data == 1) {
            autoLoad();
            $("#addform").trigger("reset");
            $("#successMessage").html("Student Data Uploaded").slideDown();
            $("#errorMessage").html("");
          } else {
            $("#errorMessage").html("Upload Faild").slideDown();
            $("#successMessage").html("");
          }

        }
      });

      }


    });
  });



  </script>             
</body>
</html>






