$(document).ready(function(){
    $("#dictionarySubmit").click(function(){
        var word = $('#word').val();
        var definition = $('#definition').val();
        if (word == "" || definition == ""){
            alert("please fill both the fields");
        }
        else{
            $('#word').val('');
            $('#definition').val('');
            $.ajax({
                type : "post",
                url  : "../class/dictionary.php",
                data : "action=insert&word="+word+"&definition="+definition,
                success: function(data){
                    alert(data);
                    // location.reload();
                    return false;
                },
                error: function (request, status) {
                      alert(error);
                      return false;
                }
            });            
        }
        return false;
    });
    $("#updateSubmit").click(function(){
        var id = $('#editid').val();
        var word = $('#editword').val();
        var definition = $('#editdefinition').val();
        $.ajax({
                type : "post",
                url  : "../class/dictionary.php",
                data : "action=update&id="+id+"&word="+word+"&definition="+definition,
                success: function(data){
                    alert(data);
                    // location.reload();
                    return false;
                },
                error: function (request, status) {
                      alert(error);
                      return false;
                }
            });    
        return false;
    });
    
    $(".edit-word").click(function() {
        var arr = new Array();
        $(this).closest('tr').find('td').each(function() {
            arr.push($(this).text()); // this will be the text of each <td>
            
        });
        $("#editid").val(arr[0]);
        $("#editword").val(arr[1]);
        $("#editdefinition").val(arr[2]);
        //console.log(arr);
    });

    $(".delete-word").click(function(){
        if(confirm("Are you sure!") == true) {
            var arr = new Array();
            $(this).closest('tr').find('td').each(function() {
                arr.push($(this).text()); // this will be the text of each <td>                
            });
            var id = arr[0];
            $.ajax({
                    type : "post",
                    url  : "../class/dictionary.php",
                    data : "action=delete&id="+id,
                    success: function(data){
                        alert(data);
                        location.reload();
                        return false;
                    },
                    error: function (request, status) {
                          alert(error);
                          return false;
                    }
                });    
            return false;
        }
        else {
            return false;
        }
        

    });
});