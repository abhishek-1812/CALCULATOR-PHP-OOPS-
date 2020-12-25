<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULATOR BY PHP-OOPS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <div class="container">
        <h2 class="text-center mt-4 mb-5 bg-dark text-white text-bold">CED-CALCULATOR WITH   PHP-OOP</h2>
        </div>
    </header>
    <section>
        <div class="container ">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">                  
                    <table class="table table-bordered text-center mt-5" >
                        <tr>
                            <td colspan="4">
                                <input class="btn-block text-center" type="text" id="oops" disabled>
                            </td>
                        </tr>        
                        <tr>
                            <td><input class="btn btn-primary btn-block oprnd" type="submit" value='7'></td>
                            <td><input class="btn btn-primary btn-block oprnd" type="submit" value='8'></td>
                            <td><input class="btn btn-primary btn-block oprnd" type="submit" value='9'></td>
                            <td><input class="btn btn-danger btn-block opter" type="submit" value='/'></td>
                        </tr>
                        <tr>
                            <td><input class="btn btn-primary btn-block oprnd" type="submit" value='4'></td>
                            <td><input class="btn btn-primary btn-block oprnd" type="submit" value='5'></td>
                            <td><input class="btn btn-primary btn-block oprnd" type="submit" value='6'></td>
                            <td><input class="btn btn-danger btn-block opter" type="submit" value='*'></td>
                        </tr>
                        <tr>
                            <td><input class="btn btn-primary btn-block oprnd" type="submit" value='1'></td>
                            <td><input class="btn btn-primary btn-block oprnd" type="submit" value='2'></td>
                            <td><input class="btn btn-primary btn-block oprnd" type="submit" value='3'></td>
                            <td><input class="btn btn-danger btn-block opter" type="submit" value='-'></td>
                        </tr>       
                        <tr>
                            <td><input class="btn btn-primary btn-block oprnd" type="submit" value='0'></td>
                            <td><input class="btn btn-secondary btn-block cancel" type="submit" value='C'></td>
                            <td><input class="btn btn-success btn-block opter" type="submit" value='='></td>
                            <td><input class="btn btn-danger btn-block opter" type="submit" value='+'></td>            
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function(){
            var num=0;
            var temp = 0;
            var exoptr = '';
            $(".oprnd").click(function(){
                var value = parseInt($(this).val());
                num = Number((num*10)+value);
                $('#oops').val(num);
            });
           
            $(".opter").click(function(){
                var newoptr;
              if (exoptr=='' || exoptr==$(this).val()) {
                var opt = $(this).val();
              } else {
                  newoptr = $(this).val();
              }                            
          
            if (temp==0) {
                temp=num;
                //alert(num);
                exoptr=opt;
                num=0;
            } else {
                $.ajax({
                    url:"ajax.php",
                    type:"post",
                    data:{exoptr:exoptr,temp:temp,num:num},
                    success:function(data){
                        //alert(data);
                        $('#oops').val(data);
                        temp=data;
                        num=0;
                        if (newoptr=="") {
                            exoptr=newoptr;
                        }                       
                    }
                });
            }
        });
        $(".cancel").click(function(){
            $('#oops').val("");
            num="";
            exoptr="";
            temp="";
            opt="";
        });
    });
    </script>
</body>
</html>