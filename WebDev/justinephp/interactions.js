$(document).ready(function(){

    $("#taskform").submit(function(e){
        e.preventDefault();
        $.ajax({
            type:"POST",
            url: "index.php",
            data: $(this).serialize(),
            success: function(response){
                var jsonData = JSON.parse(response)
                console.log(jsonData)
                
            }
        })
    })
    $("#submit").on('click',function(){
        $.get('tasks.txt', function(textData, status) {
            var aLines = textData.split("\n")
            //$('#display').append(textData + '\nStatus = ' + status);
            //document.getElementById("display").innerHTML = (textData + '\nStatus = ' + status);   // this works, all lines
        
            $.each(aLines, function(n, sLine) {
              $('#display').append('<div>' + sLine + '</div>'); // ?????
               //document.append(n + ' - ' + aLines[n]);      // this also work
            });
            
         }, 'text');
    })
    


})