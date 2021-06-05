$(document).ready(function () {
  $(".insert").click(function () {
    var fname = $(".fname").val();
    var lname = $(".lname").val();
    var address = $(".address").val();
    var gender = $(".gender").val();
    $.ajax({
      type: "post",
      data: {
        firstname: fname,
        lastname: lname,
        postAddress: address,
        postGender: gender,
      },
      url: "http://192.168.0.15:8081/CRUD_Dave/web-to-web/insert-process.php",
      success: function (result) {
        alert("Added sucessfully");
        window.location.replace("./retrieve.php");
      },
    });
  });

  $(function () {
    $.ajax({
      type: "GET",
      url: "http://192.168.0.15:8081/CRUD_Dave/web-to-web/retrieve.php",
      dataType: "json",
      success: function (data) {
        //    var obj =  JSON.parse(data);
        //     alert(data)
        //     window.location.replace('./retrieve.php');

        $.each(data, function (i, user) {
          var rows =
            "<tr>" +
            "<td>" +
            user.firstName +
            "</td>" +
            "<td>" +
            user.lastName +
            "</td>" +
            "<td>" +
            user.address +
            "</td>" +
            "<td>" +
            user.gender +
            "</td>" +
            "<input type='hidden' value=" +
            user.id +
            ">" +
            "<td>" +
            "<a type='button' href='update.php?ID=" +
            user.id +
            " &firstName=" +
            user.firstName +
            "&lastName=" +
            user.lastName +
            "&address=" +
            user.address +
            "&gender=" +
            user.gender +
            "'class='btn btn-success editBtn'>" +
            "Edit" +
            "</a>" +
            "&nbsp;" +
            "<a type='button' class='btn btn-danger delBtn'>" +
            "Delete" +
            "</a>" +
            "</td>" +
            "</tr>";
          $("#tbody").prepend(rows);
        });

        $(".delBtn").on("click", function () {
          var id = $(this).parent().prev().val();
          console.log(id);
          $.ajax({
            type: "post",
            data: {
              Emp_id: id,
            },
      
            url: "http://192.168.0.15:8081/CRUD_Dave/web-to-web/delete.php",
            success: function (resultdata) {
              alert("Deleted sucessfully");
              window.location.replace("./retrieve.php");
            },
          });
        });

      },
    });
  });

  $("#update").click(function () {
    var id = $(".id").val();
    var fname = $(".fname").val();
    var lname = $(".lname").val();
    var address = $(".address").val();
    var gender = $(".gender").val();
    $.ajax({
      type: "post",
      data: {
        Emp_id: id,
        firstname: fname,
        lastname: lname,
        postAddress: address,
        postGender: gender,
      },

      url: "http://192.168.0.15:8081/CRUD_Dave/web-to-web/update.php",
      success: function (resultdata) {
        alert("Updated sucessfully");
        window.location.replace("./retrieve.php");
      },
    });
  });
  
});




